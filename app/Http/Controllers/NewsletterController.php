<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use App\Services\ResendMailer;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

/**
 * NewsletterController handles newsletter signups for tech
 * innovation and product updates.
 */
class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
        ], [
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator, 'newsletter')
                ->withInput();
        }

        $email = filter_var($validator->validated()['email'], FILTER_SANITIZE_EMAIL);

        // 1. Ensure table exists (auto-heals missing migrations on cPanel SQLite/MySQL)
        try {
            if (! Schema::hasTable('newsletter_subscribers')) {
                Schema::create('newsletter_subscribers', function (Blueprint $table) {
                    $table->id();
                    $table->string('email')->unique();
                    $table->timestamp('subscribed_at')->useCurrent();
                    $table->timestamps();
                });
                Log::info('Created missing newsletter_subscribers table dynamically.');
            }
        } catch (\Throwable $e) {
            Log::warning('Could not check or create newsletter_subscribers table: '.$e->getMessage());
        }

        // 2. Safe Database Insertion
        $isNew = true;
        try {
            $subscriber = NewsletterSubscriber::firstOrCreate(
                ['email' => $email],
                ['subscribed_at' => now()]
            );
            $isNew = $subscriber->wasRecentlyCreated;
        } catch (\Throwable $e) {
            Log::error('Newsletter database save failed: '.$e->getMessage(), ['email' => $email]);
            $isNew = true; // Fall through safely so user confirmation and email delivery still succeed
        }

        // 3. Local JSON Backup so no subscriber is ever lost
        try {
            $subDir = storage_path('app/submissions');
            if (! is_dir($subDir)) {
                @mkdir($subDir, 0755, true);
            }
            $subFile = $subDir.'/newsletter_subscribers.json';
            $subs = file_exists($subFile) ? json_decode((string) file_get_contents($subFile), true) : [];
            if (! is_array($subs)) {
                $subs = [];
            }
            $subs[] = [
                'email' => $email,
                'subscribed_at' => now()->toIso8601String(),
                'ip' => $request->ip(),
            ];
            @file_put_contents($subFile, json_encode($subs, JSON_PRETTY_PRINT));
        } catch (\Throwable $e) {
            Log::warning('Could not write newsletter subscriber to JSON backup: '.$e->getMessage());
        }

        // 4. Send Confirmation & Admin Notification via Resend
        if ($isNew) {
            ResendMailer::send(
                $email,
                "You're subscribed to ExtremeSolutions",
                view('emails.newsletter-welcome')->render()
            );

            $adminRecipient = config('mail.contact_recipient') ?: env('CONTACT_NOTIFICATION_EMAIL') ?: 'ekunyansamuel@yahoo.com';

            ResendMailer::send(
                $adminRecipient,
                'New newsletter subscriber: '.$email,
                view('emails.newsletter-notification', ['email' => $email])->render()
            );
        }

        // 5. Redirect back to previous URL with anchor to preserve context
        $previousUrl = url()->previous();
        $targetUrl = str_contains($previousUrl, '#') ? $previousUrl : $previousUrl.'#waitlist';

        return redirect()->to($targetUrl)
            ->with('newsletter_success', true)
            ->with('subscribed_email', $email);
    }
}

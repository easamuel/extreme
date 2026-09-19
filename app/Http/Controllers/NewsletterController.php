<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use App\Services\ResendMailer;
use Illuminate\Http\Request;
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

        $subscriber = NewsletterSubscriber::firstOrCreate(
            ['email' => $email],
            ['subscribed_at' => now()]
        );

        if ($subscriber->wasRecentlyCreated) {
            ResendMailer::send(
                $email,
                "You're subscribed to ExtremeSolutions",
                view('emails.newsletter-welcome')->render()
            );

            $recipient = env('CONTACT_NOTIFICATION_EMAIL', env('MAIL_TO_ADDRESS', config('mail.from.address')));

            ResendMailer::send(
                $recipient,
                'New newsletter subscriber',
                view('emails.newsletter-notification', ['email' => $email])->render()
            );
        }

        return redirect()->back()->with('newsletter_success', true);
    }
}

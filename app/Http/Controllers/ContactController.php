<?php

namespace App\Http\Controllers;

use App\Services\ResendMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

/**
 * ContactController handles contact form submissions
 * Includes CSRF protection and input validation
 */
class ContactController extends Controller
{
    /**
     * Handle contact form submission
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate input to prevent XSS and ensure data integrity
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\.\'\-]+$/'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ], [
            'name.required' => 'Please provide your name.',
            'name.regex' => 'Name can only contain letters, spaces, dots, and hyphens.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'subject.required' => 'Please select a solution or topic.',
            'message.required' => 'Please provide a brief description of your project requirements.',
            'message.min' => 'Please provide at least 10 characters describing your project.',
            'message.max' => 'Message cannot exceed 5000 characters.',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Sanitize input to prevent XSS
        $validated = $validator->validated();
        $name = htmlspecialchars($validated['name'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($validated['email'], FILTER_SANITIZE_EMAIL);
        $phone = !empty($validated['phone']) ? htmlspecialchars($validated['phone'], ENT_QUOTES, 'UTF-8') : null;
        $subject = htmlspecialchars($validated['subject'], ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($validated['message'], ENT_QUOTES, 'UTF-8');

        Log::info('Contact form submission', [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
        ]);

        // 1. Local JSON Backup so no consultation lead is ever lost
        try {
            $leadDir = storage_path('app/submissions');
            if (! is_dir($leadDir)) {
                @mkdir($leadDir, 0755, true);
            }
            $leadFile = $leadDir.'/contacts.json';
            $leads = file_exists($leadFile) ? json_decode((string) file_get_contents($leadFile), true) : [];
            if (! is_array($leads)) {
                $leads = [];
            }
            $leads[] = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message,
                'ip' => $request->ip(),
                'submitted_at' => now()->toIso8601String(),
            ];
            @file_put_contents($leadFile, json_encode($leads, JSON_PRETTY_PRINT));
        } catch (\Throwable $e) {
            Log::warning('Could not write contact lead to JSON backup: '.$e->getMessage());
        }

        // 2. Dispatch notification email to administrator
        $recipient = config('mail.contact_recipient') 
            ?: env('CONTACT_NOTIFICATION_EMAIL') 
            ?: env('MAIL_TO_ADDRESS') 
            ?: 'ekunyansamuel@yahoo.com';

        ResendMailer::send(
            $recipient,
            'New consultation request: '.$subject,
            view('emails.contact-notification', compact('name', 'email', 'phone', 'subject', 'message'))->render(),
            $email
        );

        // 3. Return user to the page they submitted from (preserve homepage context vs contact page)
        $previousUrl = url()->previous();
        $isContactPage = str_contains($previousUrl, '/contact');

        if ($isContactPage) {
            return redirect()->to(route('contact').'#contact-form')
                ->with('success', 'Thank you for reaching out! Your message has been received and our engineering team will get back to you shortly.');
        }

        // Homepage or landing page
        $targetUrl = str_contains($previousUrl, '#') ? $previousUrl : $previousUrl.'#request-quote';
        return redirect()->to($targetUrl)
            ->with('success', 'Thank you for scheduling your consultation! We have received your project details and an engineering lead will contact you within 24 hours.');
    }
}


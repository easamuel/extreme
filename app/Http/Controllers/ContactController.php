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
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => 'Please provide your name.',
            'name.regex' => 'Name can only contain letters and spaces.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'subject.required' => 'Please provide a subject.',
            'message.required' => 'Please provide a message.',
            'message.max' => 'Message cannot exceed 5000 characters.',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->route('home', '#contact')
                ->withErrors($validator)
                ->withInput();
        }

        // Sanitize input to prevent XSS
        $validated = $validator->validated();
        $name = htmlspecialchars($validated['name'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($validated['email'], FILTER_SANITIZE_EMAIL);
        $subject = htmlspecialchars($validated['subject'], ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($validated['message'], ENT_QUOTES, 'UTF-8');

        Log::info('Contact form submission', [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ]);

        ResendMailer::send(
            config('mail.from.address'),
            'New contact form message: '.$subject,
            view('emails.contact-notification', compact('name', 'email', 'subject', 'message'))->render(),
            $email
        );

        // Return success message
        return redirect()->route('home', '#contact')
            ->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}


<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Thin wrapper around the Resend HTTP API (https://resend.com/docs/api-reference/emails/send-email).
 * Used directly over HTTP rather than the resend/resend-php SDK so this feature has no extra
 * Composer dependency to install on deploy.
 */
class ResendMailer
{
    public static function send(string $to, string $subject, string $html, ?string $replyTo = null): bool
    {
        // 1. Resolve API key (support both config and direct env fallback)
        $key = config('services.resend.key') ?: env('RESEND_API_KEY');

        // 2. Resolve From Address: MUST use the verified domain on Resend
        $fromAddress = config('mail.from.address') ?: env('MAIL_FROM_ADDRESS');
        if (empty($fromAddress) || str_contains($fromAddress, 'example.com')) {
            $fromAddress = 'support@support.extremesolutions.com.ng';
        }

        $fromName = config('mail.from.name') ?: env('MAIL_FROM_NAME');
        if (empty($fromName) || $fromName === 'Example' || $fromName === 'Laravel') {
            $fromName = 'ExtremeSolutions';
        }

        $from = "{$fromName} <{$fromAddress}>";

        // 3. Resolve To Address: Ensure it is not empty or example.com
        if (empty($to) || str_contains($to, 'example.com')) {
            $to = config('mail.contact_recipient') ?: env('CONTACT_NOTIFICATION_EMAIL') ?: 'ekunyansamuel@yahoo.com';
        }

        if (! $key) {
            Log::warning('Resend API key not configured; skipping email send. Set RESEND_API_KEY in .env.', [
                'to' => $to,
                'from' => $from,
                'subject' => $subject,
            ]);

            return false;
        }

        $payload = [
            'from' => $from,
            'to' => [$to],
            'subject' => $subject,
            'html' => $html,
        ];

        if ($replyTo && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            $payload['reply_to'] = $replyTo;
        }

        try {
            $response = Http::withToken($key)
                ->timeout(15)
                ->post('https://api.resend.com/emails', $payload);

            if ($response->failed()) {
                Log::error('Resend email send failed', [
                    'to' => $to,
                    'from' => $from,
                    'subject' => $subject,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return false;
            }

            Log::info('Resend email sent successfully', [
                'to' => $to,
                'subject' => $subject,
                'id' => $response->json('id'),
            ]);

            return true;
        } catch (\Throwable $e) {
            Log::error('Resend HTTP request exception: '.$e->getMessage(), [
                'to' => $to,
                'subject' => $subject,
            ]);

            return false;
        }
    }
}

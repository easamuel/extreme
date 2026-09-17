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
        $key = config('services.resend.key');

        if (! $key) {
            Log::warning('Resend API key not configured; skipping email send.', [
                'to' => $to,
                'subject' => $subject,
            ]);

            return false;
        }

        $payload = [
            'from' => config('mail.from.name').' <'.config('mail.from.address').'>',
            'to' => [$to],
            'subject' => $subject,
            'html' => $html,
        ];

        if ($replyTo) {
            $payload['reply_to'] = $replyTo;
        }

        $response = Http::withToken($key)->post('https://api.resend.com/emails', $payload);

        if ($response->failed()) {
            Log::error('Resend email send failed', [
                'to' => $to,
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
        }

        return $response->successful();
    }
}

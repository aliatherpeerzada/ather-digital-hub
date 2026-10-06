<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TurnstileRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $secret = config('services.turnstile.secret');

        // If secret key is not configured yet in .env, gracefully bypass verification
        // to avoid locking out form submissions during initial setup.
        if (empty($secret)) {
            return;
        }

        // If secret is configured, ensure a response token is present
        if (empty($value)) {
            $fail('Please complete the Cloudflare security verification.');
            return;
        }

        try {
            $httpClient = Http::asForm()->timeout(5);

            if (app()->isLocal()) {
                $httpClient = $httpClient->withoutVerifying();
            }

            $response = $httpClient->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret'   => $secret,
                'response' => $value,
                'remoteip' => request()->ip(),
            ]);

            if (!$response->successful()) {
                Log::warning('Cloudflare Turnstile verification request failed with HTTP status: ' . $response->status());
                $fail('Security verification failed. Please refresh and try again.');
                return;
            }

            $result = $response->json();

            if (!isset($result['success']) || !$result['success']) {
                $errorCodes = isset($result['error-codes']) ? implode(', ', $result['error-codes']) : 'unknown';
                Log::warning('Cloudflare Turnstile verification unsuccessful: ' . $errorCodes);
                $fail('Security verification failed. Please try again.');
            }
        } catch (\Throwable $e) {
            Log::error('Cloudflare Turnstile verification exception: ' . $e->getMessage());
            $fail('Security verification service is temporarily unavailable. Please try again later.');
        }
    }
}

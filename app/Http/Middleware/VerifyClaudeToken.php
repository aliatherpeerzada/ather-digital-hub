<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class VerifyClaudeToken
{
    /**
     * Only allow requests carrying the shared Claude API token.
     *
     * Header: Authorization: Bearer <CLAUDE_API_TOKEN>
     */
    public function handle(Request $request, Closure $next): Response
    {
        $expected = (string) config('services.claude.api_token');

        // Fail closed: if no token is configured, the API is disabled.
        if ($expected === '' || strlen($expected) < 32) {
            return response()->json([
                'success' => false,
                'message' => 'Claude API is not configured.',
            ], 503);
        }

        $provided = (string) $request->bearerToken();

        if ($provided === '' || ! hash_equals($expected, $provided)) {
            Log::warning('Claude API: unauthorized request', [
                'ip' => $request->ip(),
                'path' => $request->path(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Unauthorized.',
            ], 401);
        }

        // Optional IP allow-list (comma separated). Empty = allow any IP.
        $allowedIps = array_filter(array_map('trim', explode(',', (string) config('services.claude.allowed_ips'))));
        if (! empty($allowedIps) && ! in_array($request->ip(), $allowedIps, true)) {
            return response()->json([
                'success' => false,
                'message' => 'Forbidden.',
            ], 403);
        }

        return $next($request);
    }
}

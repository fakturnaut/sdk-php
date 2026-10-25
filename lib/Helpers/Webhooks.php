<?php

declare(strict_types=1);

namespace Fakturnaut\Sdk\Helpers;

/**
 * Verifies Fakturnaut webhooks: the header Einvoice-Signature "v1=<hex>" is the HMAC-SHA256 of
 * "<timestamp>.<raw body>" with the endpoint's secret, and the header Einvoice-Timestamp must be recent.
 */
final class Webhooks
{
    /** Default tolerance between the signed timestamp and now, in seconds (protects against replays). */
    public const DEFAULT_TOLERANCE_SECONDS = 300;

    /**
     * Not instantiable.
     */
    private function __construct()
    {
    }

    /**
     * Verifies one webhook request.
     *
     * @param string $body the raw request body, exactly as received (e.g. file_get_contents('php://input'))
     * @param string|null $timestamp value of the Einvoice-Timestamp header (Unix seconds)
     * @param string|null $signature value of the Einvoice-Signature header ("v1=<hex>")
     * @param string $secret the endpoint's signing secret (whsec_...), shown once at registration
     * @param int $toleranceSeconds allowed difference between the timestamp and now
     * @param int|null $now current Unix time; null means the system clock (for tests)
     * @return bool true if the request comes from Fakturnaut and is recent
     */
    public static function verify(
        string $body,
        ?string $timestamp,
        ?string $signature,
        string $secret,
        int $toleranceSeconds = self::DEFAULT_TOLERANCE_SECONDS,
        ?int $now = null
    ): bool {
        if ($secret === '' || $timestamp === null || $signature === null
            || preg_match('/^\d{1,12}$/D', $timestamp) !== 1
            || preg_match('/^v1=([0-9a-fA-F]{64})$/D', $signature, $m) !== 1) {
            return false;
        }
        $now ??= time();
        if (abs($now - (int) $timestamp) > $toleranceSeconds) {
            return false;
        }
        $expected = hash_hmac('sha256', $timestamp . '.' . $body, $secret);
        return hash_equals($expected, strtolower($m[1]));
    }
}

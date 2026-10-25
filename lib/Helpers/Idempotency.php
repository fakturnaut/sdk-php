<?php

declare(strict_types=1);

namespace Fakturnaut\Sdk\Helpers;

/**
 * Idempotency keys: send the same key again when retrying a request after a timeout, and Fakturnaut returns the
 * original result (Idempotent-Replayed: true) instead of issuing or delivering twice.
 */
final class Idempotency
{
    /**
     * Not instantiable.
     */
    private function __construct()
    {
    }

    /**
     * Creates a new key for one logical request.
     *
     * @return string a random UUID v4 (36 visible ASCII characters)
     */
    public static function newKey(): string
    {
        $bytes = random_bytes(16);
        $bytes[6] = chr((ord($bytes[6]) & 0x0f) | 0x40);
        $bytes[8] = chr((ord($bytes[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));
    }
}

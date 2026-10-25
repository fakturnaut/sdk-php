<?php

declare(strict_types=1);

namespace Fakturnaut\Sdk\Test;

use Fakturnaut\Sdk\Helpers\Idempotency;
use Fakturnaut\Sdk\Helpers\Webhooks;
use PHPUnit\Framework\TestCase;

/**
 * Tests of the hand-written helpers against the server's signing scheme (HMAC-SHA256 over "<timestamp>.<body>").
 */
final class HelpersTest extends TestCase
{
    private const SECRET = 'whsec_test';
    private const BODY = '{"id":"e1","type":"invoice.issued","data":{"livemode":"false"}}';

    /**
     * Signs a body like the server does.
     */
    private static function sign(string $timestamp, string $body = self::BODY): string
    {
        return 'v1=' . hash_hmac('sha256', $timestamp . '.' . $body, self::SECRET);
    }

    /**
     * A correctly signed, recent request is accepted, in either letter case of the hex.
     */
    public function testAcceptsSignedRecentRequest(): void
    {
        self::assertTrue(Webhooks::verify(self::BODY, '1760000000', self::sign('1760000000'), self::SECRET, 300, 1760000100));
        $upper = 'v1=' . strtoupper(substr(self::sign('1760000000'), 3));
        self::assertTrue(Webhooks::verify(self::BODY, '1760000000', $upper, self::SECRET, 300, 1760000000));
    }

    /**
     * Changed bodies, wrong secrets, old timestamps and malformed headers are refused.
     */
    public function testRefusesTamperedOrOldRequests(): void
    {
        $sig = self::sign('1760000000');
        self::assertFalse(Webhooks::verify(self::BODY . ' ', '1760000000', $sig, self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, '1760000000', $sig, 'whsec_other', 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, '1760000000', $sig, self::SECRET, 300, 1760000301));
        self::assertFalse(Webhooks::verify(self::BODY, '1760000000', 'v0=' . substr($sig, 3), self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, '1760000000', 'v1=abc', self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, 'x', $sig, self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, null, $sig, self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, '1760000000', $sig, '', 300, 1760000000));
    }

    /**
     * The shared test vector the server signer produces (WebhookSignerTest.sharedVector) verifies; a trailing newline
     * after the signature does not.
     */
    public function testSharedVector(): void
    {
        $signature = 'v1=44eddafa3b36ac0f1b44beeb5e80682d17e95912ac022a14861ea2b34457169a';
        self::assertTrue(Webhooks::verify(self::BODY, '1760000000', $signature, self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, '1760000000', $signature . "\n", self::SECRET, 300, 1760000000));
        self::assertFalse(Webhooks::verify(self::BODY, "1760000000\n", $signature, self::SECRET, 300, 1760000000));
    }

    /**
     * New idempotency keys are distinct and accepted by the API.
     */
    public function testIdempotencyKeys(): void
    {
        $key = Idempotency::newKey();
        self::assertMatchesRegularExpression('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/', $key);
        self::assertNotSame($key, Idempotency::newKey());
    }
}

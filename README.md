# fakturnaut/sdk

PHP client for the [Fakturnaut API](https://fakturnaut.com/docs): issue, validate, deliver and check EN 16931
e-invoices (XRechnung, ZUGFeRD, RO e-Factura). PHP 8.1 or newer, Guzzle 7.

```bash
composer require fakturnaut/sdk
```

```php
use Fakturnaut\Sdk\Api\InvoicesApi;
use Fakturnaut\Sdk\Configuration;
use Fakturnaut\Sdk\Helpers\Idempotency;
use Fakturnaut\Sdk\Model\InvoiceRequest;

$config = Configuration::getDefaultConfiguration()->setAccessToken(getenv('FAKTURNAUT_KEY')); // fkn_test_… = sandbox
$invoices = new InvoicesApi(null, $config);
$issued = $invoices->issueInvoice(new InvoiceRequest([/* sellerId, number, buyer, lines … */]), Idempotency::newKey());
```

Errors throw `Fakturnaut\Sdk\ApiException`; `getResponseBody()` is an RFC 9457 problem with a stable `code`.

## Webhooks

```php
use Fakturnaut\Sdk\Helpers\Webhooks;

$ok = Webhooks::verify(
    file_get_contents('php://input'),
    $_SERVER['HTTP_EINVOICE_TIMESTAMP'] ?? null,
    $_SERVER['HTTP_EINVOICE_SIGNATURE'] ?? null,
    getenv('FAKTURNAUT_WEBHOOK_SECRET')
);
```

Generated from `api/openapi.json`; do not edit `lib/Api` or `lib/Model` by hand. Tests: `vendor/bin/phpunit`.

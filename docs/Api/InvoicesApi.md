# Fakturnaut\Sdk\InvoicesApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadInvoiceDocument()**](InvoicesApi.md#downloadInvoiceDocument) | **GET** /invoices/{id}/document | Downloads an archived document exactly as issued. |
| [**getInvoice()**](InvoicesApi.md#getInvoice) | **GET** /invoices/{id} | Returns an invoice with links to its documents. |
| [**issueInvoice()**](InvoicesApi.md#issueInvoice) | **POST** /invoices | Issues an invoice: validates it, generates the requested formats, checks them officially and archives them. |
| [**listInvoices()**](InvoicesApi.md#listInvoices) | **GET** /invoices | Lists the tenant&#39;s invoices, newest first. |
| [**validateInvoice()**](InvoicesApi.md#validateInvoice) | **POST** /invoices/validate | Validates an invoice without issuing it and returns the calculated totals. |


## `downloadInvoiceDocument()`

```php
downloadInvoiceDocument($id, $format): \SplFileObject
```

Downloads an archived document exactly as issued.

Downloads an archived document exactly as issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: bearer
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fakturnaut\Sdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice identifier
$format = 'format_example'; // string | <code>xrechnung-ubl</code>, <code>xrechnung-cii</code>, <code>zugferd</code>, <code>ro-efactura-ubl</code> or <code>ro-efactura-cii</code>

try {
    $result = $apiInstance->downloadInvoiceDocument($id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoiceDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice identifier | |
| **format** | **string**| &lt;code&gt;xrechnung-ubl&lt;/code&gt;, &lt;code&gt;xrechnung-cii&lt;/code&gt;, &lt;code&gt;zugferd&lt;/code&gt;, &lt;code&gt;ro-efactura-ubl&lt;/code&gt; or &lt;code&gt;ro-efactura-cii&lt;/code&gt; | |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/xml`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoice()`

```php
getInvoice($id): \Fakturnaut\Sdk\Model\InvoiceResponse
```

Returns an invoice with links to its documents.

Returns an invoice with links to its documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: bearer
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fakturnaut\Sdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | invoice identifier

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| invoice identifier | |

### Return type

[**\Fakturnaut\Sdk\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueInvoice()`

```php
issueInvoice($invoiceRequest, $idempotencyKey): \Fakturnaut\Sdk\Model\InvoiceResponse
```

Issues an invoice: validates it, generates the requested formats, checks them officially and archives them.

Issues an invoice: validates it, generates the requested formats, checks them officially and archives them.  A repeated request with the same <code>Idempotency-Key</code> and body returns the original invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: bearer
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fakturnaut\Sdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceRequest = new \Fakturnaut\Sdk\Model\InvoiceRequest(); // \Fakturnaut\Sdk\Model\InvoiceRequest | invoice data
$idempotencyKey = 'idempotencyKey_example'; // string | optional idempotency key

try {
    $result = $apiInstance->issueInvoice($invoiceRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->issueInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoiceRequest** | [**\Fakturnaut\Sdk\Model\InvoiceRequest**](../Model/InvoiceRequest.md)| invoice data | |
| **idempotencyKey** | **string**| optional idempotency key | [optional] |

### Return type

[**\Fakturnaut\Sdk\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoices()`

```php
listInvoices($page, $size): \Fakturnaut\Sdk\Model\PageDtoInvoiceResponse
```

Lists the tenant's invoices, newest first.

Lists the tenant's invoices, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: bearer
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fakturnaut\Sdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | zero-based page number
$size = 20; // int | page size, 1 to 100

try {
    $result = $apiInstance->listInvoices($page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| zero-based page number | [optional] [default to 0] |
| **size** | **int**| page size, 1 to 100 | [optional] [default to 20] |

### Return type

[**\Fakturnaut\Sdk\Model\PageDtoInvoiceResponse**](../Model/PageDtoInvoiceResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateInvoice()`

```php
validateInvoice($invoiceRequest): \Fakturnaut\Sdk\Model\ValidationResponse
```

Validates an invoice without issuing it and returns the calculated totals.

Validates an invoice without issuing it and returns the calculated totals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: bearer
$config = Fakturnaut\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fakturnaut\Sdk\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceRequest = new \Fakturnaut\Sdk\Model\InvoiceRequest(); // \Fakturnaut\Sdk\Model\InvoiceRequest | invoice data

try {
    $result = $apiInstance->validateInvoice($invoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->validateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoiceRequest** | [**\Fakturnaut\Sdk\Model\InvoiceRequest**](../Model/InvoiceRequest.md)| invoice data | |

### Return type

[**\Fakturnaut\Sdk\Model\ValidationResponse**](../Model/ValidationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

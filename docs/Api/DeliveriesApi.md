# Fakturnaut\Sdk\DeliveriesApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deliverInvoice()**](DeliveriesApi.md#deliverInvoice) | **POST** /invoices/{invoiceId}/deliveries | Delivers an invoice. |
| [**getDelivery()**](DeliveriesApi.md#getDelivery) | **GET** /deliveries/{id} | Returns one delivery. |
| [**listInvoiceDeliveries()**](DeliveriesApi.md#listInvoiceDeliveries) | **GET** /invoices/{invoiceId}/deliveries | Lists the deliveries of an invoice. |


## `deliverInvoice()`

```php
deliverInvoice($invoiceId, $deliveryRequest, $idempotencyKey): \Fakturnaut\Sdk\Model\DeliveryResponse
```

Delivers an invoice.

Delivers an invoice. The response shows the status after the first attempt; later changes arrive as webhook  events <code>delivery.updated</code> and via <code>GET /v1/deliveries/{id</code>}.

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


$apiInstance = new Fakturnaut\Sdk\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | invoice
$deliveryRequest = new \Fakturnaut\Sdk\Model\DeliveryRequest(); // \Fakturnaut\Sdk\Model\DeliveryRequest | channel, recipient and resend flag
$idempotencyKey = 'idempotencyKey_example'; // string | optional idempotency key; a repeat returns the first delivery (200,      <code>Idempotent-Replayed: true</code>)

try {
    $result = $apiInstance->deliverInvoice($invoiceId, $deliveryRequest, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->deliverInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoiceId** | **string**| invoice | |
| **deliveryRequest** | [**\Fakturnaut\Sdk\Model\DeliveryRequest**](../Model/DeliveryRequest.md)| channel, recipient and resend flag | |
| **idempotencyKey** | **string**| optional idempotency key; a repeat returns the first delivery (200,      &lt;code&gt;Idempotent-Replayed: true&lt;/code&gt;) | [optional] |

### Return type

[**\Fakturnaut\Sdk\Model\DeliveryResponse**](../Model/DeliveryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDelivery()`

```php
getDelivery($id): \Fakturnaut\Sdk\Model\DeliveryResponse
```

Returns one delivery.

Returns one delivery.

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


$apiInstance = new Fakturnaut\Sdk\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | delivery

try {
    $result = $apiInstance->getDelivery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->getDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| delivery | |

### Return type

[**\Fakturnaut\Sdk\Model\DeliveryResponse**](../Model/DeliveryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvoiceDeliveries()`

```php
listInvoiceDeliveries($invoiceId): \Fakturnaut\Sdk\Model\DeliveryResponse[]
```

Lists the deliveries of an invoice.

Lists the deliveries of an invoice.

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


$apiInstance = new Fakturnaut\Sdk\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceId = 'invoiceId_example'; // string | invoice

try {
    $result = $apiInstance->listInvoiceDeliveries($invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->listInvoiceDeliveries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoiceId** | **string**| invoice | |

### Return type

[**\Fakturnaut\Sdk\Model\DeliveryResponse[]**](../Model/DeliveryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

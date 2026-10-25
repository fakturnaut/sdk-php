# Fakturnaut\Sdk\WebhooksApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhook()**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Registers an endpoint. |
| [**deleteWebhook()**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{id} | Removes an endpoint; no further events are sent to it. |
| [**listWebhookDeliveries()**](WebhooksApi.md#listWebhookDeliveries) | **GET** /webhooks/{id}/deliveries | Shows the deliveries to an endpoint of the last 30 days, newest first. |
| [**listWebhooks()**](WebhooksApi.md#listWebhooks) | **GET** /webhooks | Lists the endpoints without secrets. |
| [**resendWebhookDelivery()**](WebhooksApi.md#resendWebhookDelivery) | **POST** /webhooks/{id}/deliveries/{deliveryId}/resend | Sends a finished delivery of the last 30 days again, as a new delivery of the same event. |
| [**rotateWebhookSecret()**](WebhooksApi.md#rotateWebhookSecret) | **POST** /webhooks/{id}/rotate-secret | Gives an endpoint a new signing secret at once; the new secret is in this response only. |
| [**testWebhook()**](WebhooksApi.md#testWebhook) | **POST** /webhooks/{id}/test | Sends a &lt;code&gt;webhook.test&lt;/code&gt; event to the endpoint within seconds, whatever events it has chosen. |
| [**updateWebhook()**](WebhooksApi.md#updateWebhook) | **PATCH** /webhooks/{id} | Changes an endpoint&#39;s URL or choice of events; the secret stays. |


## `createWebhook()`

```php
createWebhook($webhookRequest): \Fakturnaut\Sdk\Model\WebhookResponse
```

Registers an endpoint.

Registers an endpoint. The signing secret is in this response only.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookRequest = new \Fakturnaut\Sdk\Model\WebhookRequest(); // \Fakturnaut\Sdk\Model\WebhookRequest | target URL

try {
    $result = $apiInstance->createWebhook($webhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookRequest** | [**\Fakturnaut\Sdk\Model\WebhookRequest**](../Model/WebhookRequest.md)| target URL | |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($id): \Fakturnaut\Sdk\Model\WebhookResponse
```

Removes an endpoint; no further events are sent to it.

Removes an endpoint; no further events are sent to it.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | endpoint

try {
    $result = $apiInstance->deleteWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| endpoint | |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookDeliveries()`

```php
listWebhookDeliveries($id, $limit): \Fakturnaut\Sdk\Model\WebhookDeliveryResponse[]
```

Shows the deliveries to an endpoint of the last 30 days, newest first.

Shows the deliveries to an endpoint of the last 30 days, newest first.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | endpoint
$limit = 50; // int | maximum number, 1 to 100

try {
    $result = $apiInstance->listWebhookDeliveries($id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhookDeliveries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| endpoint | |
| **limit** | **int**| maximum number, 1 to 100 | [optional] [default to 50] |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookDeliveryResponse[]**](../Model/WebhookDeliveryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks(): \Fakturnaut\Sdk\Model\WebhookResponse[]
```

Lists the endpoints without secrets.

Lists the endpoints without secrets.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fakturnaut\Sdk\Model\WebhookResponse[]**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendWebhookDelivery()`

```php
resendWebhookDelivery($id, $deliveryId): \Fakturnaut\Sdk\Model\WebhookDeliveryResponse
```

Sends a finished delivery of the last 30 days again, as a new delivery of the same event.

Sends a finished delivery of the last 30 days again, as a new delivery of the same event.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | endpoint
$deliveryId = 'deliveryId_example'; // string | delivery to send again

try {
    $result = $apiInstance->resendWebhookDelivery($id, $deliveryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->resendWebhookDelivery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| endpoint | |
| **deliveryId** | **string**| delivery to send again | |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookDeliveryResponse**](../Model/WebhookDeliveryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rotateWebhookSecret()`

```php
rotateWebhookSecret($id): \Fakturnaut\Sdk\Model\WebhookResponse
```

Gives an endpoint a new signing secret at once; the new secret is in this response only.

Gives an endpoint a new signing secret at once; the new secret is in this response only.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | endpoint

try {
    $result = $apiInstance->rotateWebhookSecret($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->rotateWebhookSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| endpoint | |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testWebhook()`

```php
testWebhook($id): \Fakturnaut\Sdk\Model\WebhookDeliveryResponse
```

Sends a <code>webhook.test</code> event to the endpoint within seconds, whatever events it has chosen.

Sends a <code>webhook.test</code> event to the endpoint within seconds, whatever events it has chosen.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | endpoint

try {
    $result = $apiInstance->testWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->testWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| endpoint | |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookDeliveryResponse**](../Model/WebhookDeliveryResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($id, $webhookUpdateRequest): \Fakturnaut\Sdk\Model\WebhookResponse
```

Changes an endpoint's URL or choice of events; the secret stays.

Changes an endpoint's URL or choice of events; the secret stays.

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


$apiInstance = new Fakturnaut\Sdk\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | endpoint
$webhookUpdateRequest = new \Fakturnaut\Sdk\Model\WebhookUpdateRequest(); // \Fakturnaut\Sdk\Model\WebhookUpdateRequest | new URL and/or events

try {
    $result = $apiInstance->updateWebhook($id, $webhookUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| endpoint | |
| **webhookUpdateRequest** | [**\Fakturnaut\Sdk\Model\WebhookUpdateRequest**](../Model/WebhookUpdateRequest.md)| new URL and/or events | |

### Return type

[**\Fakturnaut\Sdk\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

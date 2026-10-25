# Fakturnaut\Sdk\UsageApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUsage()**](UsageApi.md#getUsage) | **GET** /usage | Returns the usage of a month. |


## `getUsage()`

```php
getUsage($period): \Fakturnaut\Sdk\Model\UsageResponse
```

Returns the usage of a month.

Returns the usage of a month.

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


$apiInstance = new Fakturnaut\Sdk\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$period = 'period_example'; // string | month as <code>YYYY-MM</code> (UTC); default the current month

try {
    $result = $apiInstance->getUsage($period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **period** | **string**| month as &lt;code&gt;YYYY-MM&lt;/code&gt; (UTC); default the current month | [optional] |

### Return type

[**\Fakturnaut\Sdk\Model\UsageResponse**](../Model/UsageResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

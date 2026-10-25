# Fakturnaut\Sdk\StatusApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hello()**](StatusApi.md#hello) | **GET** /hello | Returns a greeting in the caller&#39;s preferred language. |


## `hello()`

```php
hello(): \Fakturnaut\Sdk\Model\HelloResponse
```

Returns a greeting in the caller's preferred language.

Returns a greeting in the caller's preferred language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Fakturnaut\Sdk\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hello();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->hello: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fakturnaut\Sdk\Model\HelloResponse**](../Model/HelloResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

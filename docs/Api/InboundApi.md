# Fakturnaut\Sdk\InboundApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**parseDocument()**](InboundApi.md#parseDocument) | **POST** /inbound/parse | Detects the format, reads and validates a received document, and returns a plain-language report with an  HTML view. |
| [**renderDocument()**](InboundApi.md#renderDocument) | **POST** /inbound/render | Renders a received document as a readable PDF. |


## `parseDocument()`

```php
parseDocument($body, $acceptLanguage): \Fakturnaut\Sdk\Model\InspectionResponse
```

Detects the format, reads and validates a received document, and returns a plain-language report with an  HTML view.

Detects the format, reads and validates a received document, and returns a plain-language report with an  HTML view.

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


$apiInstance = new Fakturnaut\Sdk\Api\InboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = '/path/to/file.txt'; // \SplFileObject | The file as the raw request body
$acceptLanguage = 'acceptLanguage_example'; // string | <code>Accept-Language</code>; English if it starts with <code>en</code>, else German

try {
    $result = $apiInstance->parseDocument($body, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundApi->parseDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**| The file as the raw request body | |
| **acceptLanguage** | **string**| &lt;code&gt;Accept-Language&lt;/code&gt;; English if it starts with &lt;code&gt;en&lt;/code&gt;, else German | [optional] |

### Return type

[**\Fakturnaut\Sdk\Model\InspectionResponse**](../Model/InspectionResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/octet-stream`, `application/pdf`, `application/xml`, `text/xml`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderDocument()`

```php
renderDocument($body, $acceptLanguage): \SplFileObject
```

Renders a received document as a readable PDF.

Renders a received document as a readable PDF.

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


$apiInstance = new Fakturnaut\Sdk\Api\InboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = '/path/to/file.txt'; // \SplFileObject | The file as the raw request body
$acceptLanguage = 'acceptLanguage_example'; // string | <code>Accept-Language</code>; English if it starts with <code>en</code>, else German

try {
    $result = $apiInstance->renderDocument($body, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundApi->renderDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**| The file as the raw request body | |
| **acceptLanguage** | **string**| &lt;code&gt;Accept-Language&lt;/code&gt;; English if it starts with &lt;code&gt;en&lt;/code&gt;, else German | [optional] |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/octet-stream`, `application/pdf`, `application/xml`, `text/xml`
- **Accept**: `application/pdf`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Fakturnaut\Sdk\ReceivedDocumentsApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadReceivedDocument()**](ReceivedDocumentsApi.md#downloadReceivedDocument) | **GET** /received-documents/{id}/content | Downloads a received document as received (UBL XML). |
| [**getReceivedDocument()**](ReceivedDocumentsApi.md#getReceivedDocument) | **GET** /received-documents/{id} | Returns the metadata of a received document. |
| [**getReceivedDocumentReport()**](ReceivedDocumentsApi.md#getReceivedDocumentReport) | **GET** /received-documents/{id}/report | Returns the validation report stored with a received invoice or credit note. |
| [**listReceivedDocuments()**](ReceivedDocumentsApi.md#listReceivedDocuments) | **GET** /received-documents | Lists received documents, newest first, optionally only one seller&#39;s, those received in a date range (calendar  days in Germany, both inclusive) or those with a validation result. |
| [**renderReceivedDocument()**](ReceivedDocumentsApi.md#renderReceivedDocument) | **GET** /received-documents/{id}/pdf | Renders a received invoice or credit note as a readable PDF. |


## `downloadReceivedDocument()`

```php
downloadReceivedDocument($id): \SplFileObject
```

Downloads a received document as received (UBL XML).

Downloads a received document as received (UBL XML).

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


$apiInstance = new Fakturnaut\Sdk\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | document

try {
    $result = $apiInstance->downloadReceivedDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->downloadReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| document | |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivedDocument()`

```php
getReceivedDocument($id): \Fakturnaut\Sdk\Model\ReceivedDocumentResponse
```

Returns the metadata of a received document.

Returns the metadata of a received document.

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


$apiInstance = new Fakturnaut\Sdk\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | document

try {
    $result = $apiInstance->getReceivedDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| document | |

### Return type

[**\Fakturnaut\Sdk\Model\ReceivedDocumentResponse**](../Model/ReceivedDocumentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivedDocumentReport()`

```php
getReceivedDocumentReport($id): \Fakturnaut\Sdk\Model\ReceivedReportResponse
```

Returns the validation report stored with a received invoice or credit note.

Returns the validation report stored with a received invoice or credit note.

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


$apiInstance = new Fakturnaut\Sdk\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | document

try {
    $result = $apiInstance->getReceivedDocumentReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->getReceivedDocumentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| document | |

### Return type

[**\Fakturnaut\Sdk\Model\ReceivedReportResponse**](../Model/ReceivedReportResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReceivedDocuments()`

```php
listReceivedDocuments($page, $size, $sellerId, $from, $to, $validation): \Fakturnaut\Sdk\Model\PageDtoReceivedDocumentResponse
```

Lists received documents, newest first, optionally only one seller's, those received in a date range (calendar  days in Germany, both inclusive) or those with a validation result.

Lists received documents, newest first, optionally only one seller's, those received in a date range (calendar  days in Germany, both inclusive) or those with a validation result.

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


$apiInstance = new Fakturnaut\Sdk\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | zero-based page number
$size = 20; // int | page size, 1 to 100
$sellerId = 'sellerId_example'; // string | only documents for this seller entity
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | received on or after this day
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | received on or before this day
$validation = 'validation_example'; // string | only <code>valid</code> or <code>invalid</code> invoices and credit notes

try {
    $result = $apiInstance->listReceivedDocuments($page, $size, $sellerId, $from, $to, $validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->listReceivedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| zero-based page number | [optional] [default to 0] |
| **size** | **int**| page size, 1 to 100 | [optional] [default to 20] |
| **sellerId** | **string**| only documents for this seller entity | [optional] |
| **from** | **\DateTime**| received on or after this day | [optional] |
| **to** | **\DateTime**| received on or before this day | [optional] |
| **validation** | **string**| only &lt;code&gt;valid&lt;/code&gt; or &lt;code&gt;invalid&lt;/code&gt; invoices and credit notes | [optional] |

### Return type

[**\Fakturnaut\Sdk\Model\PageDtoReceivedDocumentResponse**](../Model/PageDtoReceivedDocumentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderReceivedDocument()`

```php
renderReceivedDocument($id, $acceptLanguage): string
```

Renders a received invoice or credit note as a readable PDF.

Renders a received invoice or credit note as a readable PDF.

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


$apiInstance = new Fakturnaut\Sdk\Api\ReceivedDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | document
$acceptLanguage = 'acceptLanguage_example'; // string | <code>Accept-Language</code>; English if it starts with <code>en</code>, else German

try {
    $result = $apiInstance->renderReceivedDocument($id, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivedDocumentsApi->renderReceivedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| document | |
| **acceptLanguage** | **string**| &lt;code&gt;Accept-Language&lt;/code&gt;; English if it starts with &lt;code&gt;en&lt;/code&gt;, else German | [optional] |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Fakturnaut\Sdk\SellersApi



All URIs are relative to https://api.fakturnaut.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateSellerPeppol()**](SellersApi.md#activateSellerPeppol) | **POST** /sellers/{id}/peppol | Activates real Peppol for a seller: registers it at our Peppol access point for sending and, if asked for and  nobody else serves its address, for receiving. |
| [**attestSeller()**](SellersApi.md#attestSeller) | **POST** /sellers/{id}/attestation | Confirms that the seller authorised the tenant to issue and receive invoices on its behalf. |
| [**createSeller()**](SellersApi.md#createSeller) | **POST** /sellers | Creates a seller entity whose data is used on all its invoices, and starts its verification. |
| [**enableSellerPeppolReceiving()**](SellersApi.md#enableSellerPeppolReceiving) | **POST** /sellers/{id}/peppol/receiving | Switches receiving through us on, if nobody else serves the seller&#39;s Peppol address. |
| [**getSeller()**](SellersApi.md#getSeller) | **GET** /sellers/{id} | Returns a seller entity. |
| [**getSellerPeppol()**](SellersApi.md#getSellerPeppol) | **GET** /sellers/{id}/peppol | Returns a seller&#39;s Peppol registration. |
| [**getSellerVerification()**](SellersApi.md#getSellerVerification) | **GET** /sellers/{id}/verification | Returns the verification details: state, history, VAT ID checks and uploaded documents. |
| [**listSellers()**](SellersApi.md#listSellers) | **GET** /sellers | Lists the tenant&#39;s seller entities by name. |
| [**renewSellerPeppolVerification()**](SellersApi.md#renewSellerPeppolVerification) | **POST** /sellers/{id}/peppol/verification | Asks the access point for a new identity-check link (the old one may be lost or expired). |
| [**updateSeller()**](SellersApi.md#updateSeller) | **PUT** /sellers/{id} | Replaces a seller entity&#39;s data. |
| [**uploadSellerDocument()**](SellersApi.md#uploadSellerDocument) | **POST** /sellers/{id}/documents | Uploads a supporting document (PDF, PNG or JPEG, at most 10 MB) as the raw request body. |


## `activateSellerPeppol()`

```php
activateSellerPeppol($id, $peppolActivationRequest): \Fakturnaut\Sdk\Model\PeppolStatusResponse
```

Activates real Peppol for a seller: registers it at our Peppol access point for sending and, if asked for and  nobody else serves its address, for receiving.

Activates real Peppol for a seller: registers it at our Peppol access point for sending and, if asked for and  nobody else serves its address, for receiving. Repeating the call returns the existing registration (200).

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller
$peppolActivationRequest = new \Fakturnaut\Sdk\Model\PeppolActivationRequest(); // \Fakturnaut\Sdk\Model\PeppolActivationRequest | whether the seller also wants to receive through us

try {
    $result = $apiInstance->activateSellerPeppol($id, $peppolActivationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->activateSellerPeppol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller | |
| **peppolActivationRequest** | [**\Fakturnaut\Sdk\Model\PeppolActivationRequest**](../Model/PeppolActivationRequest.md)| whether the seller also wants to receive through us | [optional] |

### Return type

[**\Fakturnaut\Sdk\Model\PeppolStatusResponse**](../Model/PeppolStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attestSeller()`

```php
attestSeller($id, $attestationRequest): \Fakturnaut\Sdk\Model\VerificationSummary
```

Confirms that the seller authorised the tenant to issue and receive invoices on its behalf.

Confirms that the seller authorised the tenant to issue and receive invoices on its behalf.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller identifier
$attestationRequest = new \Fakturnaut\Sdk\Model\AttestationRequest(); // \Fakturnaut\Sdk\Model\AttestationRequest | <code>{&quot;confirmed&quot;: true</code>}

try {
    $result = $apiInstance->attestSeller($id, $attestationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->attestSeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller identifier | |
| **attestationRequest** | [**\Fakturnaut\Sdk\Model\AttestationRequest**](../Model/AttestationRequest.md)| &lt;code&gt;{&amp;quot;confirmed&amp;quot;: true&lt;/code&gt;} | |

### Return type

[**\Fakturnaut\Sdk\Model\VerificationSummary**](../Model/VerificationSummary.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSeller()`

```php
createSeller($sellerRequest): \Fakturnaut\Sdk\Model\SellerResponse
```

Creates a seller entity whose data is used on all its invoices, and starts its verification.

Creates a seller entity whose data is used on all its invoices, and starts its verification.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sellerRequest = new \Fakturnaut\Sdk\Model\SellerRequest(); // \Fakturnaut\Sdk\Model\SellerRequest | seller data and the optional authorisation confirmation

try {
    $result = $apiInstance->createSeller($sellerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->createSeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sellerRequest** | [**\Fakturnaut\Sdk\Model\SellerRequest**](../Model/SellerRequest.md)| seller data and the optional authorisation confirmation | |

### Return type

[**\Fakturnaut\Sdk\Model\SellerResponse**](../Model/SellerResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableSellerPeppolReceiving()`

```php
enableSellerPeppolReceiving($id): \Fakturnaut\Sdk\Model\PeppolStatusResponse
```

Switches receiving through us on, if nobody else serves the seller's Peppol address.

Switches receiving through us on, if nobody else serves the seller's Peppol address.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller

try {
    $result = $apiInstance->enableSellerPeppolReceiving($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->enableSellerPeppolReceiving: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller | |

### Return type

[**\Fakturnaut\Sdk\Model\PeppolStatusResponse**](../Model/PeppolStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeller()`

```php
getSeller($id): \Fakturnaut\Sdk\Model\SellerResponse
```

Returns a seller entity.

Returns a seller entity.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller identifier

try {
    $result = $apiInstance->getSeller($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getSeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller identifier | |

### Return type

[**\Fakturnaut\Sdk\Model\SellerResponse**](../Model/SellerResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellerPeppol()`

```php
getSellerPeppol($id): \Fakturnaut\Sdk\Model\PeppolStatusResponse
```

Returns a seller's Peppol registration.

Returns a seller's Peppol registration.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller

try {
    $result = $apiInstance->getSellerPeppol($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getSellerPeppol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller | |

### Return type

[**\Fakturnaut\Sdk\Model\PeppolStatusResponse**](../Model/PeppolStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellerVerification()`

```php
getSellerVerification($id): \Fakturnaut\Sdk\Model\VerificationResponse
```

Returns the verification details: state, history, VAT ID checks and uploaded documents.

Returns the verification details: state, history, VAT ID checks and uploaded documents.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller identifier

try {
    $result = $apiInstance->getSellerVerification($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getSellerVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller identifier | |

### Return type

[**\Fakturnaut\Sdk\Model\VerificationResponse**](../Model/VerificationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSellers()`

```php
listSellers($page, $size): \Fakturnaut\Sdk\Model\PageDtoSellerResponse
```

Lists the tenant's seller entities by name.

Lists the tenant's seller entities by name.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int | zero-based page number
$size = 20; // int | page size, 1 to 100

try {
    $result = $apiInstance->listSellers($page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->listSellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| zero-based page number | [optional] [default to 0] |
| **size** | **int**| page size, 1 to 100 | [optional] [default to 20] |

### Return type

[**\Fakturnaut\Sdk\Model\PageDtoSellerResponse**](../Model/PageDtoSellerResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewSellerPeppolVerification()`

```php
renewSellerPeppolVerification($id): \Fakturnaut\Sdk\Model\PeppolStatusResponse
```

Asks the access point for a new identity-check link (the old one may be lost or expired).

Asks the access point for a new identity-check link (the old one may be lost or expired).

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller

try {
    $result = $apiInstance->renewSellerPeppolVerification($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->renewSellerPeppolVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller | |

### Return type

[**\Fakturnaut\Sdk\Model\PeppolStatusResponse**](../Model/PeppolStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSeller()`

```php
updateSeller($id, $sellerRequest): \Fakturnaut\Sdk\Model\SellerResponse
```

Replaces a seller entity's data.

Replaces a seller entity's data. Changing its name, VAT ID or Peppol address restarts the verification; with  Peppol activated, a new VAT ID or register number goes to the access point, which asks for a new identity check.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller identifier
$sellerRequest = new \Fakturnaut\Sdk\Model\SellerRequest(); // \Fakturnaut\Sdk\Model\SellerRequest | new seller data

try {
    $result = $apiInstance->updateSeller($id, $sellerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->updateSeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller identifier | |
| **sellerRequest** | [**\Fakturnaut\Sdk\Model\SellerRequest**](../Model/SellerRequest.md)| new seller data | |

### Return type

[**\Fakturnaut\Sdk\Model\SellerResponse**](../Model/SellerResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadSellerDocument()`

```php
uploadSellerDocument($id, $type, $body, $fileName): \Fakturnaut\Sdk\Model\DocumentEntry
```

Uploads a supporting document (PDF, PNG or JPEG, at most 10 MB) as the raw request body.

Uploads a supporting document (PDF, PNG or JPEG, at most 10 MB) as the raw request body.

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


$apiInstance = new Fakturnaut\Sdk\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | seller identifier
$type = 'type_example'; // string | <code>commercial-register</code>, <code>trade-registration</code> or <code>signed-authorization</code>
$body = '/path/to/file.txt'; // \SplFileObject | The file as the raw request body
$fileName = 'document'; // string | original file name

try {
    $result = $apiInstance->uploadSellerDocument($id, $type, $body, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->uploadSellerDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| seller identifier | |
| **type** | **string**| &lt;code&gt;commercial-register&lt;/code&gt;, &lt;code&gt;trade-registration&lt;/code&gt; or &lt;code&gt;signed-authorization&lt;/code&gt; | |
| **body** | **\SplFileObject****\SplFileObject**| The file as the raw request body | |
| **fileName** | **string**| original file name | [optional] [default to &#39;document&#39;] |

### Return type

[**\Fakturnaut\Sdk\Model\DocumentEntry**](../Model/DocumentEntry.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

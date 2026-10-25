# Problem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessPoint** | [**\Fakturnaut\Sdk\Model\ProblemAccessPoint**](ProblemAccessPoint.md) |  | [optional]
**code** | **string** | Stable error code, e.g. invoice.invalid or sandbox.live-only | [optional]
**detail** | **string** | Explanation in English | [optional]
**errors** | [**\Fakturnaut\Sdk\Model\ProblemErrorsInner[]**](ProblemErrorsInner.md) | Invalid fields, for request.invalid | [optional]
**findings** | [**\Fakturnaut\Sdk\Model\FindingDto[]**](FindingDto.md) | Rule violations, for invoice.invalid | [optional]
**instance** | **string** | Request path | [optional]
**message** | [**\Fakturnaut\Sdk\Model\LocalizedText**](LocalizedText.md) | Plain-language explanation in German and English, for document.unreadable | [optional]
**status** | **int** | HTTP status code |
**title** | **string** | Short summary of the HTTP status | [optional]
**type** | **string** | Problem type URI; about:blank for most errors | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

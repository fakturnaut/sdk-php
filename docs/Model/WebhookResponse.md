# WebhookResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdAt** | **\DateTime** | creation time | [optional]
**disabledAt** | **\DateTime** | removal time | [optional]
**events** | **string[]** | event types it receives; empty means all | [optional]
**id** | **string** | identifier | [optional]
**secret** | **string** | signing secret; only in the response that created the endpoint or rotated its secret | [optional]
**url** | **string** | target URL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

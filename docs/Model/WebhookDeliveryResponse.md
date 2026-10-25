# WebhookDeliveryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attempts** | **int** | attempts so far | [optional]
**createdAt** | **\DateTime** | creation time | [optional]
**eventId** | **string** | event identifier | [optional]
**eventType** | **string** | event type | [optional]
**id** | **string** | identifier | [optional]
**lastError** | **string** | error of the last attempt | [optional]
**lastStatusCode** | **int** | HTTP status of the last attempt | [optional]
**nextAttemptAt** | **\DateTime** | next attempt (pending only) | [optional]
**status** | **string** | &lt;code&gt;PENDING&lt;/code&gt;, &lt;code&gt;DELIVERED&lt;/code&gt; or &lt;code&gt;FAILED&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

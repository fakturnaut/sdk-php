# VerificationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attestationVersion** | **string** | version of the confirmed text, if attested | [optional]
**attestedAt** | **\DateTime** | when the tenant confirmed, if attested | [optional]
**checks** | [**\Fakturnaut\Sdk\Model\VatCheckEntry[]**](VatCheckEntry.md) | VAT ID checks, newest first | [optional]
**documents** | [**\Fakturnaut\Sdk\Model\DocumentEntry[]**](DocumentEntry.md) | supporting documents, newest first | [optional]
**history** | [**\Fakturnaut\Sdk\Model\HistoryEntry[]**](HistoryEntry.md) | status changes, oldest first | [optional]
**verification** | [**\Fakturnaut\Sdk\Model\VerificationSummary**](VerificationSummary.md) | current state | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

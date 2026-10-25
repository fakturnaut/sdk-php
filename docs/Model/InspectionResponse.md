# InspectionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**findings** | [**\Fakturnaut\Sdk\Model\FindingDto[]**](FindingDto.md) | all findings | [optional]
**format** | [**\Fakturnaut\Sdk\Model\LocalizedText**](LocalizedText.md) | detected format, e.g. \&quot;XRechnung (UBL)\&quot;; &lt;code&gt;null&lt;/code&gt; if unreadable | [optional]
**html** | **string** | readable HTML view; &lt;code&gt;null&lt;/code&gt; if unreadable | [optional]
**invoice** | [**\Fakturnaut\Sdk\Model\InvoiceSummaryDto**](InvoiceSummaryDto.md) | key data; &lt;code&gt;null&lt;/code&gt; if unreadable | [optional]
**summary** | [**\Fakturnaut\Sdk\Model\LocalizedText**](LocalizedText.md) | plain-language verdict | [optional]
**valid** | **bool** | &lt;code&gt;true&lt;/code&gt; if the document is a valid e-invoice | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

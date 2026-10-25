# DeliveryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | &lt;code&gt;peppol&lt;/code&gt;, &lt;code&gt;email&lt;/code&gt; or &lt;code&gt;anaf&lt;/code&gt; | [optional]
**createdAt** | **\DateTime** | creation time | [optional]
**error** | **string** | last error | [optional]
**externalId** | **string** | identifier at the channel (access point document ID, e-mail Message-ID, ANAF upload index) | [optional]
**failure** | [**\Fakturnaut\Sdk\Model\DeliveryFailure**](DeliveryFailure.md) | why a Peppol delivery did not arrive, if it did not | [optional]
**id** | **string** | identifier | [optional]
**invoiceId** | **string** | delivered invoice | [optional]
**peppol** | [**\Fakturnaut\Sdk\Model\PeppolReferences**](PeppolReferences.md) | access point references of a real Peppol delivery, if any | [optional]
**recipient** | **string** | recipient | [optional]
**simulated** | **bool** | &lt;code&gt;true&lt;/code&gt; if nothing was really sent (simulated Peppol access point) | [optional]
**status** | **string** | &lt;code&gt;PENDING&lt;/code&gt;, &lt;code&gt;SENT&lt;/code&gt;, &lt;code&gt;DELIVERED&lt;/code&gt;, &lt;code&gt;REJECTED&lt;/code&gt;, &lt;code&gt;UNCONFIRMED&lt;/code&gt;,      &lt;code&gt;FAILED&lt;/code&gt; or &lt;code&gt;OUTCOME_UNKNOWN&lt;/code&gt; (the access point may have the invoice; it is looked for, never      resent blindly) | [optional]
**updatedAt** | **\DateTime** | last status change | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

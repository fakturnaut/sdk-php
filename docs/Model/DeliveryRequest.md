# DeliveryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | &lt;code&gt;peppol&lt;/code&gt;, &lt;code&gt;email&lt;/code&gt; or &lt;code&gt;anaf&lt;/code&gt; |
**fallbackEmail** | **string** | Peppol only: if the Peppol delivery fails (for example the buyer is not on Peppol), the      invoice is sent to this address by e-mail, with the usual e-mail rules | [optional]
**recipient** | **string** | Peppol participant ID (e.g. &lt;code&gt;9930:DE123456788&lt;/code&gt; or &lt;code&gt;0204:991-33333TEST-33&lt;/code&gt;), e-mail      address, or for ANAF the numeric CIF that receives ANAF&#39;s error messages. Optional for Peppol: without it the      buyer&#39;s electronic address in the invoice (BT-49) is used | [optional]
**resend** | **bool** | &lt;code&gt;true&lt;/code&gt; to deliver again to a recipient that already has a pending or successful delivery | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

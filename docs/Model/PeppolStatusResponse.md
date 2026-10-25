# PeppolStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdAt** | **\DateTime** | when Peppol was activated | [optional]
**explanation** | [**\Fakturnaut\Sdk\Model\PeppolTexts**](PeppolTexts.md) | who must open the link, and why | [optional]
**receiveRequested** | **bool** | whether the seller asked to receive through us | [optional]
**receiving** | **bool** | whether the seller is registered to receive Peppol invoices through us | [optional]
**receivingBlocked** | [**\Fakturnaut\Sdk\Model\PeppolReceivingBlocked**](PeppolReceivingBlocked.md) | why receiving is off although requested | [optional]
**status** | **string** | the access point&#39;s identity check: &lt;code&gt;pending&lt;/code&gt;, &lt;code&gt;verified&lt;/code&gt;, &lt;code&gt;rejected&lt;/code&gt; or      &lt;code&gt;error&lt;/code&gt; | [optional]
**statusChangedAt** | **\DateTime** | when the identity check last changed | [optional]
**statusMessage** | **string** | the message behind &lt;code&gt;statusReason&lt;/code&gt;, in English | [optional]
**statusReason** | **string** | why the status is &lt;code&gt;error&lt;/code&gt;: &lt;code&gt;identifiers-pending&lt;/code&gt; (a new VAT ID or register      number has not reached the access point yet; retried), &lt;code&gt;identifiers-invalid&lt;/code&gt; (the new identifiers      cannot be used for Peppol), &lt;code&gt;identifiers-refused&lt;/code&gt; (the access point refused them; correct the seller),      or &lt;code&gt;access-point&lt;/code&gt; (the access point&#39;s own message) | [optional]
**updatedAt** | **\DateTime** | last change | [optional]
**verificationUrl** | **string** | the link an authorised representative opens for the identity check; only for keys with      scope &lt;code&gt;admin&lt;/code&gt; and while the check is not verified | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

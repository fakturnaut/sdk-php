# ReceivedDocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentType** | **string** | Peppol document type | [optional]
**href** | **string** | API path to download the document as received | [optional]
**id** | **string** | identifier | [optional]
**kind** | **string** | &lt;code&gt;invoice&lt;/code&gt;, &lt;code&gt;credit-note&lt;/code&gt;, &lt;code&gt;other&lt;/code&gt; (orders, responses, ...) or &lt;code&gt;document&lt;/code&gt;      (received before documents were classified) | [optional]
**messageId** | **string** | access point message identifier | [optional]
**pdfHref** | **string** | API path of a readable PDF view, for invoices and credit notes | [optional]
**receivedAt** | **\DateTime** | time of receipt | [optional]
**reportHref** | **string** | API path of the validation report, if one is stored | [optional]
**sellerId** | **string** | receiving seller entity | [optional]
**sender** | **string** | sending participant | [optional]
**validation** | **string** | our validation result for invoices and credit notes: &lt;code&gt;valid&lt;/code&gt; or &lt;code&gt;invalid&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

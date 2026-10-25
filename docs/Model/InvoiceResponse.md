# InvoiceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amountDue** | **float** | amount due (BT-115) | [optional]
**buyerName** | **string** | buyer name (BT-44) | [optional]
**createdAt** | **\DateTime** | archiving time | [optional]
**currency** | **string** | currency (BT-5) | [optional]
**documents** | [**\Fakturnaut\Sdk\Model\DocumentDto[]**](DocumentDto.md) | archived documents (empty in list results) | [optional]
**findings** | [**\Fakturnaut\Sdk\Model\FindingDto[]**](FindingDto.md) | warnings and information found while issuing; &lt;code&gt;null&lt;/code&gt; when not freshly issued | [optional]
**id** | **string** | identifier | [optional]
**issueDate** | **\DateTime** | issue date (BT-2) | [optional]
**number** | **string** | invoice number (BT-1) | [optional]
**sellerId** | **string** | issuing seller entity | [optional]
**typeCode** | **string** | type code (BT-3) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

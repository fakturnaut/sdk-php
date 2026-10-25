# VatCheckEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cached** | **bool** | whether an answer from the last 24 hours was reused | [optional]
**checkedAt** | **\DateTime** | when it was checked | [optional]
**errorCode** | **string** | the registry&#39;s error code when unavailable | [optional]
**id** | **string** | identifier | [optional]
**nameScore** | **int** | similarity 0–100 with the seller&#39;s name, if a name came back | [optional]
**outcome** | **string** | &lt;code&gt;valid&lt;/code&gt;, &lt;code&gt;invalid&lt;/code&gt;, &lt;code&gt;malformed&lt;/code&gt; or &lt;code&gt;unavailable&lt;/code&gt; | [optional]
**registeredName** | **string** | name the registry returned, if any | [optional]
**requestIdentifier** | **string** | the registry&#39;s consultation reference, if any | [optional]
**vatId** | **string** | checked VAT ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

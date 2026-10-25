# SellerResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountName** | **string** | holder of the default account | [optional]
**bic** | **string** | BIC of the default account | [optional]
**createdAt** | **\DateTime** | creation time | [optional]
**iban** | **string** | default account | [optional]
**id** | **string** | identifier | [optional]
**party** | [**\Fakturnaut\Sdk\Model\PartyDto**](PartyDto.md) | seller party data | [optional]
**verification** | [**\Fakturnaut\Sdk\Model\VerificationSummary**](VerificationSummary.md) | verification state (real Peppol needs &lt;code&gt;verified&lt;/code&gt;, ADR 0012) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

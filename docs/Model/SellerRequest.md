# SellerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountName** | **string** | holder of the default account | [optional]
**authorizationConfirmed** | **bool** | &lt;code&gt;true&lt;/code&gt; to confirm that the seller authorised the tenant to issue and      receive invoices on its behalf (attestation &lt;code&gt;seller-authorization-v1&lt;/code&gt;, needed for verification) | [optional]
**bic** | **string** | BIC of the default account | [optional]
**iban** | **string** | default account for SEPA credit transfer | [optional]
**party** | [**\Fakturnaut\Sdk\Model\PartyDto**](PartyDto.md) | seller party data (BG-4) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

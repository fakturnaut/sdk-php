# PartyDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Fakturnaut\Sdk\Model\AddressDto**](AddressDto.md) | postal address |
**contact** | [**\Fakturnaut\Sdk\Model\ContactDto**](ContactDto.md) | contact details | [optional]
**electronicAddress** | **string** | electronic address (BT-34 / BT-49) | [optional]
**electronicAddressScheme** | **string** | EAS code, e.g. &lt;code&gt;EM&lt;/code&gt; or &lt;code&gt;0204&lt;/code&gt; | [optional]
**identifier** | **string** | party identifier (e.g. GLN) | [optional]
**identifierScheme** | **string** | ISO 6523 scheme of the identifier | [optional]
**legalRegistrationId** | **string** | legal registration identifier | [optional]
**name** | **string** | registered name |
**taxNumber** | **string** | local tax number (sellers only) | [optional]
**tradingName** | **string** | trading name | [optional]
**vatId** | **string** | VAT identifier with country prefix | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

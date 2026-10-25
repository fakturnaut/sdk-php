# PaymentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountName** | **string** | account holder (BT-85) | [optional]
**bic** | **string** | payee BIC (BT-86) | [optional]
**creditorId** | **string** | SEPA creditor identifier (BT-90) | [optional]
**debitedIban** | **string** | IBAN to be debited (BT-91) | [optional]
**iban** | **string** | payee IBAN (BT-84) | [optional]
**mandateReference** | **string** | SEPA mandate reference (BT-89) | [optional]
**meansCode** | **string** | UNTDID 4461 code, default 58 (SEPA credit transfer) | [optional]
**remittanceInformation** | **string** | reference to quote with the payment (BT-83) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# InvoiceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowances** | [**\Fakturnaut\Sdk\Model\AllowanceChargeDto[]**](AllowanceChargeDto.md) | document-level allowances (BG-20) | [optional]
**buyer** | [**\Fakturnaut\Sdk\Model\PartyDto**](PartyDto.md) | buyer (BG-7) |
**buyerReference** | **string** | buyer reference or Leitweg-ID (BT-10) | [optional]
**charges** | [**\Fakturnaut\Sdk\Model\AllowanceChargeDto[]**](AllowanceChargeDto.md) | document-level charges (BG-21) | [optional]
**contractReference** | **string** | contract reference (BT-12) | [optional]
**currency** | **string** | ISO 4217 currency (BT-5), default EUR | [optional]
**deliveryAddress** | [**\Fakturnaut\Sdk\Model\AddressDto**](AddressDto.md) | the address the goods go to (BG-15), needed for intra-community supplies (BR-IC-12) | [optional]
**deliveryDate** | **\DateTime** | actual delivery date (BT-72) | [optional]
**deliveryPartyName** | **string** | the name of the party receiving the goods (BT-70) | [optional]
**dueDate** | **\DateTime** | payment due date (BT-9) | [optional]
**formats** | **string[]** | formats to generate: &lt;code&gt;xrechnung-ubl&lt;/code&gt;, &lt;code&gt;xrechnung-cii&lt;/code&gt;, &lt;code&gt;zugferd&lt;/code&gt;,      &lt;code&gt;ro-efactura-ubl&lt;/code&gt;, &lt;code&gt;ro-efactura-cii&lt;/code&gt;; none means the seller country&#39;s formats | [optional]
**invoicePeriod** | [**\Fakturnaut\Sdk\Model\PeriodDto**](PeriodDto.md) | invoicing period (BG-14) | [optional]
**issueDate** | **\DateTime** | issue date (BT-2) |
**lines** | [**\Fakturnaut\Sdk\Model\LineDto[]**](LineDto.md) | invoice lines (BG-25) |
**notes** | [**\Fakturnaut\Sdk\Model\Note[]**](Note.md) | invoice notes (BG-1) | [optional]
**number** | **string** | invoice number (BT-1) |
**payment** | [**\Fakturnaut\Sdk\Model\PaymentDto**](PaymentDto.md) | payment instructions (BG-16); default: SEPA transfer to the seller&#39;s account | [optional]
**paymentTerms** | **string** | payment terms text (BT-20) | [optional]
**precedingInvoices** | [**\Fakturnaut\Sdk\Model\PrecedingInvoice[]**](PrecedingInvoice.md) | preceding invoices, for credit notes and corrections (BG-3) | [optional]
**prepaidAmount** | **float** | amount already paid (BT-113) | [optional]
**projectReference** | **string** | project reference (BT-11) | [optional]
**purchaseOrderReference** | **string** | purchase order reference (BT-13) | [optional]
**seller** | [**\Fakturnaut\Sdk\Model\PartyDto**](PartyDto.md) | seller party data (public create tool only; the API takes it from the seller entity) | [optional]
**sellerId** | **string** | seller entity issuing the invoice (API; required there) | [optional]
**taxRepresentative** | [**\Fakturnaut\Sdk\Model\TaxRepresentativeDto**](TaxRepresentativeDto.md) | seller tax representative (BG-11) | [optional]
**typeCode** | **string** | UNTDID 1001 type code (BT-3), default 380 | [optional]
**vatAccounting** | [**\Fakturnaut\Sdk\Model\VatAccountingDto**](VatAccountingDto.md) | VAT accounting currency and the VAT total in it (BT-6, BT-111), e.g. RON for a Romanian      seller&#39;s EUR invoice | [optional]
**vatExemptions** | [**\Fakturnaut\Sdk\Model\VatExemptionDto[]**](VatExemptionDto.md) | exemption reasons per VAT category, overriding the country defaults (BT-120/121) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

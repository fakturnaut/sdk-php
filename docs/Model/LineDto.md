# LineDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowances** | [**\Fakturnaut\Sdk\Model\AllowanceChargeDto[]**](AllowanceChargeDto.md) | line allowances | [optional]
**baseQuantity** | **float** | price base quantity (BT-149) | [optional]
**charges** | [**\Fakturnaut\Sdk\Model\AllowanceChargeDto[]**](AllowanceChargeDto.md) | line charges | [optional]
**description** | **string** | item description (BT-154) | [optional]
**id** | **string** | line identifier, default its position | [optional]
**name** | **string** | item name (BT-153) |
**netPrice** | **float** | net unit price (BT-146) |
**period** | [**\Fakturnaut\Sdk\Model\PeriodDto**](PeriodDto.md) | line period | [optional]
**quantity** | **float** | invoiced quantity (BT-129) |
**sellerItemId** | **string** | seller&#39;s item identifier (BT-155) | [optional]
**unitCode** | **string** | UN/ECE Rec. 20 unit code (BT-130), default C62 | [optional]
**vatCategory** | **string** | VAT category code, default S | [optional]
**vatRate** | **float** | VAT rate in percent | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

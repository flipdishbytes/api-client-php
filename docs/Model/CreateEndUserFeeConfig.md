# CreateEndUserFeeConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The order channel this fee config applies to | 
**payment_method** | **string** | The payment method this fee config applies to | 
**min_order_amount** | **double** | Order amount below which MinFixedFee is charged instead of the percent/fixed calculation | [optional] 
**min_fixed_fee** | **double** | Fixed fee charged for orders at or below MinOrderAmount | [optional] 
**percent_fee** | **double** | Percentage fee applied to the order amount | [optional] 
**fixed_fee** | **double** | Fixed fee compared against the percentage fee - the greater of the two is charged | [optional] 
**cap** | **double** | Maximum fee that can be charged | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



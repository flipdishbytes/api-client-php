# LoyaltyCampaignBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orders_before_receiving_voucher** | **int** | Number of orders customer needs to make, before receiving voucher | [optional] 
**percent_discount_amount** | **int** | Discount amount in percents | [optional] 
**max_discount** | **double** | Maximum discount for percentage discounts | [optional] 
**rounding_strategy** | **int** | Controls how the loyalty voucher&#39;s amount is rounded | [optional] 
**should_include_orders_with_loyalty_voucher** | **bool** | Controls whether we should include orders with loyalty vouchers in the campaign calculation | [optional] 
**voucher_valid_period_days** | **int** | Number of days for which the voucher will be valid. | [optional] 
**include_delivery_fee** | **bool** | Discount will include delivery fee | [optional] 
**auto_apply_resulting_vouchers** | **bool** | Automatically apply resulting vouchers | [optional] 
**include_existing_orders** | **bool** | Campaign will apply to existing orders | [optional] 
**is_enabled** | **bool** | Is campaign enabled | [optional] 
**store_ids** | **int[]** | Ids of stores this campaign applies to | [optional] 
**app_id** | **string** | The app that this campaign belongs to. | [optional] 
**force_discount** | **bool** | Controls whether the voucher generated from this campaign will override discount exclusions | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



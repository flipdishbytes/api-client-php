# LoyaltyCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | Id of campaign | [optional] 
**statistics** | [**\Flipdish\Client\Models\CampaignStatistics**](CampaignStatistics.md) | Statistics of campaign | [optional] 
**stores** | [**\Flipdish\Client\Models\StoreCampaignStartTime[]**](StoreCampaignStartTime.md) | Stores this campaign applies to with campaign start time in Utc | [optional] 
**orders_before_receiving_voucher** | **int** | Number of orders customer needs to make, before receiving voucher | [optional] 
**percent_discount_amount** | **int** | Discount amount in percents | [optional] 
**voucher_valid_period_days** | **int** | Number of days for which the voucher will be valid. | [optional] 
**include_delivery_fee** | **bool** | Discount will include delivery fee | [optional] 
**auto_apply_resulting_vouchers** | **bool** | Automatically apply resulting vouchers | [optional] 
**include_existing_orders** | **bool** | Campaign will apply to existing orders | [optional] 
**is_enabled** | **bool** | Is campaign enabled | [optional] 
**store_ids** | **int[]** | Ids of stores this campaign applies to | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



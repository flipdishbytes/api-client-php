# RetentionCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | Id of campaign | [optional] 
**statistics** | [**\Flipdish\\Client\Models\CampaignStatistics**](CampaignStatistics.md) | Statistics of campaign | [optional] 
**stores** | [**\Flipdish\\Client\Models\StoreCampaignStartTime[]**](StoreCampaignStartTime.md) | Stores this campaign applies to with campaign start time in Utc | [optional] 
**public_id** | **string** | Permanent reference to the item. | [optional] 
**notify_customer_after_minutes** | **int** | Time in minutes, after which customer will receive retention voucher if he/she does not order | [optional] 
**percent_discount_amount** | **int** | Discount amount in percents | [optional] 
**lump_discount_amount** | **double** | Discount amount in sum of money | [optional] 
**voucher_valid_period_days** | **int** | Number of days for which the voucher will be valid. | [optional] 
**include_delivery_fee** | **bool** | Discount will include delivery fee | [optional] 
**auto_apply_resulting_vouchers** | **bool** | Automatically apply resulting vouchers | [optional] 
**include_existing_orders** | **bool** | Campaign will apply to existing orders | [optional] 
**is_enabled** | **bool** | Is campaign enabled | [optional] 
**store_ids** | **int[]** | Ids of stores this campaign applies to | [optional] 
**app_id** | **string** | The app that this campaign belongs to. | [optional] 
**force_discount** | **bool** | Controls whether the voucher generated from this campaign will override discount exclusions | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



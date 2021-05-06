# PayoutStore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **int** | The id of the Store. | [optional] 
**store_name** | **string** | Name of the store | [optional] 
**amount** | **double** | Amount of the payout for this Store | [optional] 
**online_revenue** | [**\Flipdish\Client\Models\RevenueDetail**](RevenueDetail.md) | Revenue details (DEPRECATED: Use Revenue) | [optional] 
**revenue** | [**\Flipdish\Client\Models\RevenueDetail**](RevenueDetail.md) | Revenue details | [optional] 
**revenue_adjustments** | [**\Flipdish\Client\Models\RevenueAdjustmentsDetails**](RevenueAdjustmentsDetails.md) | Revenue Adjustments breakdown | [optional] 
**flipdish_fees** | [**\Flipdish\Client\Models\FlipdishFeesDetails**](FlipdishFeesDetails.md) | Fees breakdown | [optional] 
**chargebacks** | [**\Flipdish\Client\Models\ChargebackDetails**](ChargebackDetails.md) | Chargebacks breakdown | [optional] 
**other_charges** | [**\Flipdish\Client\Models\OtherChargesDetails**](OtherChargesDetails.md) | Breakdown of other charges | [optional] 
**balance** | [**\Flipdish\Client\Models\BalanceDetails**](BalanceDetails.md) | Period opening and closing balance | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



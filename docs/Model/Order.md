# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store** | [**\Flipdish\Client\Models\StoreSummary**](StoreSummary.md) | Store summary | [optional] 
**customer** | [**\Flipdish\Client\Models\CustomerSummary**](CustomerSummary.md) | Customer summary | [optional] 
**voucher** | [**\Flipdish\Client\Models\OrderVoucherSummary**](OrderVoucherSummary.md) | Voucher summary | [optional] 
**fees** | [**\Flipdish\Client\Models\FeeSummary**](FeeSummary.md) | Fee summary | [optional] 
**order_items** | [**\Flipdish\Client\Models\OrderItem[]**](OrderItem.md) | Ordered items | [optional] 
**delivery_location** | [**\Flipdish\Client\Models\DeliveryLocation**](DeliveryLocation.md) | Delivery location for delivery orders | [optional] 
**customer_location** | [**\Flipdish\Client\Models\Coordinates**](Coordinates.md) | Customer location | [optional] 
**order_id** | **int** | Order identifier | [optional] 
**delivery_type** | **string** | Delivery type | [optional] 
**pickup_location_type** | **string** | Pickup location type | [optional] 
**tip_amount** | **double** | Tip amount | [optional] 
**delivery_amount** | **double** | Delivery amount | [optional] 
**order_items_amount** | **double** | Ordered items amount | [optional] 
**amount** | **double** | This is the sum of the OrderItemsAmount, DeliveryAmount, TipAmount and Voucher.Amount (which is usually negative) and OnlineOrderingFee for cash orders.  It does not include the OnlineOrderingFee in the case of card orders as this fee is charged by Flipdish directly to the customer. | [optional] 
**processing_fee** | **double** | This contains the online ordering processing fee. For card payments this is charged directly to the customer and for cash orders it is paid by the customer to the store. It is tax inclusive. | [optional] 
**payment_account_type** | **string** | Payment account type | [optional] 
**payment_account_description** | **string** | Payment account description (like Visa ****2371 or Apple Pay. or Cash) | [optional] 
**order_state** | **string** | Order state | [optional] 
**is_pre_order** | **bool** | Is pre-order | [optional] 
**placed_time** | [**\DateTime**](\DateTime.md) | Order placed time | [optional] 
**requested_for_time** | [**\DateTime**](\DateTime.md) | Order requested for | [optional] 
**chef_note** | **string** | Chef note | [optional] 
**app_type** | **string** | Used app type | [optional] 
**user_rating** | **int** | User rating | [optional] 
**payment_status** | **string** | Status of the payment | [optional] 
**rejection_reason** | **string** | Rejection reason. Can have value if the order is rejected. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



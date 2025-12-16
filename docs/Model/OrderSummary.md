# OrderSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order identifier | [optional] 
**delivery_type** | **string** | Delivery type | [optional] 
**pickup_location_type** | **string** | Pickup location type | [optional] 
**table_service_catagory** | **string** | Table service category | [optional] 
**order_state** | **string** | Order state | [optional] 
**requested_for_time** | [**\DateTime**](\DateTime.md) | Order requested for | [optional] 
**store_name** | **string** | Name of the store | [optional] 
**store_iana_time_zone** | **string** | Store IANA time zone | [optional] 
**customer_name** | **string** | Name of the customer | [optional] 
**customer_phone_number** | **string** | Phone number of customer | [optional] 
**amount** | **double** | This is the sum of the OrderItemsAmount, DeliveryAmount, TipAmount and Voucher.Amount (which is usually negative) and OnlineOrderingFee  It does include the OnlineOrderingFee | [optional] 
**refunded_amount** | **double** | Refunded amount | [optional] 
**payment_account_type** | **string** | Payment Account | [optional] 
**payment_status** | **string** | Status of the payment | [optional] 
**currency** | **string** | Currency of payment | [optional] 
**app_type** | **string** | Type of app end user is on | [optional] 
**local_order_id** | **string** | Local order Id. This is used for displaying a \&quot;shorter\&quot; order ID for customers (eg. Kiosk orders) | [optional] 
**drop_off_location_id** | **int** | id of the collection/drop off location | [optional] 
**drop_off_location** | **string** | Represents table service drop off location | [optional] 
**accepted_for** | [**\DateTime**](\DateTime.md) | Time store has accepted the order for | [optional] 
**channel** | [**\Flipdish\\Client\Models\Channel**](Channel.md) | Channel where the Order comes from | [optional] 
**in_fraud_zone** | **bool** | Was order made within a fraud zone | [optional] 
**unusual_high_value_order** | **bool** | Is order of unusually high value | [optional] 
**channel_order_id** | **string** | ChannelOrderId from external channel | [optional] 
**channel_order_display_id** | **string** | ChannelOrderDisplayId from external channel | [optional] 
**order_drop_off_location** | [**\Flipdish\\Client\Models\OrderDropOffLocation**](OrderDropOffLocation.md) | DropOffLocation selected for this order | [optional] 
**order_batch_info** | [**\Flipdish\\Client\Models\OrderBatchSummary**](OrderBatchSummary.md) | OrderBatch information | [optional] 
**delivery_location** | [**\Flipdish\\Client\Models\DeliveryLocation**](DeliveryLocation.md) | Delivery location details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



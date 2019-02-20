# OrderSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order identifier | [optional] 
**delivery_type** | **string** | Delivery type | [optional] 
**order_state** | **string** | Order state | [optional] 
**requested_for_time** | [**\DateTime**](\DateTime.md) | Order requested for | [optional] 
**store_name** | **string** | Name of the store | [optional] 
**store_iana_time_zone** | **string** | Store IANA time zone | [optional] 
**customer_name** | **string** | Name of the customer | [optional] 
**customer_phone_number** | **string** | Phone number of customer | [optional] 
**amount** | **double** | This is the sum of the OrderItemsAmount, DeliveryAmount, TipAmount and Voucher.Amount (which is usually negative) and OnlineOrderingFee for cash orders.  It does not include the OnlineOrderingFee in the case of card orders as this fee is charged by Flipdish directly to the customer. | [optional] 
**payment_status** | **string** | Status of the payment | [optional] 
**currency** | **string** | Currency of payment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# CustomerDeliveryTrackingOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order Id | [optional] 
**address** | **string** | Pretified address string in country format | [optional] 
**delivery_notes** | **string** | Delivery Notes | [optional] 
**store_phone_number** | **string** | Phone number of the store | [optional] 
**app_icon_url** | **string** | App Icon of the store | [optional] 
**order_tracking_code** | **string** | Order Tracking Code | [optional] 
**payment_method_description** | **string** | Payment method description i.e Cash/Card/iDeal/Paypal | [optional] 
**last_four_digits** | **string** | Last 4 digits of the card if applicable otherwise null | [optional] 
**order_lines** | [**\Flipdish\Client\Models\CustomerDeliveryTrackingOrderLine[]**](CustomerDeliveryTrackingOrderLine.md) | Order lines of the order | [optional] 
**total_amount** | **double** | Total amount for the order including tax | [optional] 
**currency** | **string** | Currency | [optional] 
**latitude** | **double** | Customer Location Latitude | [optional] 
**longitude** | **double** | Customer Location Longitude | [optional] 
**placed** | [**\DateTime**](\DateTime.md) | Order placed time | [optional] 
**requested_for** | [**\DateTime**](\DateTime.md) | Order requested for | [optional] 
**driver_id** | **int** | Driver Id | [optional] 
**driver_name** | **string** | Driver Name | [optional] 
**driver_image** | **string** | Driver Image | [optional] 
**estimated_minutes_for_delivery** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



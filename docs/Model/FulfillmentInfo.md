# FulfillmentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dispatch_type** | **string** | [Required] Dispatch Type (i.e Pickup / Delivery) | [optional] 
**requested_for_utc** | [**\DateTime**](\DateTime.md) | [Required] Time the order is requested for | [optional] 
**location** | [**\Flipdish\\Client\Models\Location**](Location.md) | Location the order is to be delivered to  [Required] Delivery  [Not Required] Pickup | [optional] 
**dispatch_amount** | [**\Flipdish\\Client\Models\Price**](Price.md) | Price of the dispatch, normally 0 for collection and a value for delivery  [Required] Delivery  [Not Required] Pickup | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# OrderIngestSubmitOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_type** | **string** | [Required] Indicated the name from where the request is coming from | [optional] 
**store_id** | **int** | [Required] Store Id | [optional] 
**currency_code** | **string** | [Required] Currency Code  These must match three letter codes ISO 4127 http://en.wikipedia.org/wiki/ISO_4217 | [optional] 
**cart** | [**\Flipdish\\Client\Models\Cart**](Cart.md) | [Required] Cart of the user | [optional] 
**fulfillment_info** | [**\Flipdish\\Client\Models\FulfillmentInfo**](FulfillmentInfo.md) | [Required] Relevant fulfillment Information | [optional] 
**channel_order_id** | **string** | [Required] Order ID in the external System | [optional] 
**channel_public_order_id** | **string** | [Optional] Public Order ID in the external System | [optional] 
**order_date_utc** | [**\DateTime**](\DateTime.md) | Date the order was placed at in UTC  [Required] | [optional] 
**payment_info** | [**\Flipdish\\Client\Models\PaymentInfo**](PaymentInfo.md) | Payment Information  [Required] | [optional] 
**contact** | [**\Flipdish\\Client\Models\Contact**](Contact.md) | Contact Information  [Required] | [optional] 
**tip_amount** | **double** | Tip amount | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



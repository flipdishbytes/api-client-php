# OrderCapacityConfigUpdatedEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | The event name | [optional] 
**store_id** | **int** | Id of the store whose order capacity configuration has been updated | [optional] 
**user** | [**\Flipdish\\Client\Models\UserEventInfo**](UserEventInfo.md) | User which updated order capacity configuration for this store | [optional] 
**description** | **string** | Description | [optional] 
**order_capacity_config** | [**\Flipdish\\Client\Models\StoreOrderCapacityConfigEditModel**](StoreOrderCapacityConfigEditModel.md) | Updated order capacity configuration | [optional] 
**flipdish_event_id** | **string** | The identitfier of the event | [optional] 
**create_time** | [**\DateTime**](\DateTime.md) | The time of creation of the event | [optional] 
**position** | **int** | Position | [optional] 
**app_id** | **string** | App id | [optional] 
**org_id** | **string** | Org id | [optional] 
**ip_address** | **string** | Ip Address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# ExternalStoreEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | The event name | [optional] 
**store_id** | **int** | Store Id | [optional] 
**user** | [**\Flipdish\\Client\Models\UserEventInfo**](UserEventInfo.md) | User which did the action | [optional] 
**description** | **string** | Description | [optional] 
**description_format** | **string** | Description with format placeholders | [optional] 
**description_fields** | **string** | Description with format placeholders | [optional] 
**description_id** | **string** | Description | [optional] 
**ref1** | **string** | Ref (reference field) | [optional] 
**ref2** | **string** | Ref2 (reference field) | [optional] 
**ref3** | **string** | Ref3 (reference field) | [optional] 
**ref4** | **string** | Ref4 (reference field) | [optional] 
**order_id** | **int** | Order Id | [optional] 
**tags** | **string[]** | Tags | [optional] 
**field_changes** | [**\Flipdish\\Client\Models\FieldChangeInformation[]**](FieldChangeInformation.md) | Field changes list | [optional] 
**flipdish_event_id** | **string** | The identitfier of the event | [optional] 
**create_time** | [**\DateTime**](\DateTime.md) | The time of creation of the event | [optional] 
**position** | **int** | Position | [optional] 
**app_id** | **string** | App id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



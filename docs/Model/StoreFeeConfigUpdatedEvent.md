# StoreFeeConfigUpdatedEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | The event name | [optional] 
**store_id** | **int** | Store Id | [optional] 
**store_group_id** | **int** | Store group Id | [optional] 
**user** | [**\Flipdish\\Client\Models\UserEventInfo**](UserEventInfo.md) | User which updated this store address | [optional] 
**description** | **string** | Description | [optional] 
**changes** | **string** | Diff between before and after | [optional] 
**store_fee_config** | [**\Flipdish\\Client\Models\StoreFeeConfig**](StoreFeeConfig.md) | Store fee config | [optional] 
**flipdish_event_id** | **string** | The identitfier of the event | [optional] 
**create_time** | [**\DateTime**](\DateTime.md) | The time of creation of the event | [optional] 
**position** | **int** | Position | [optional] 
**app_id** | **string** | App id | [optional] 
**org_id** | **string** | Org id | [optional] 
**ip_address** | **string** | Ip Address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



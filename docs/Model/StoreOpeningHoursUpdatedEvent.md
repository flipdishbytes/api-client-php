# StoreOpeningHoursUpdatedEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_name** | **string** | The event name | [optional] 
**store_id** | **int** | Store Id | [optional] 
**store_group_id** | **int** | Store group Id | [optional] 
**user** | [**\Flipdish\Client\Models\UserEventInfo**](UserEventInfo.md) | User which updated opening hours for this store | [optional] 
**delivery_type** | **string** | Type of opening hours Delivery / Pickup | [optional] 
**business_hours_period_old** | [**\Flipdish\Client\Models\BusinessHoursPeriod**](BusinessHoursPeriod.md) | The period that was updated | [optional] 
**business_hours_period** | [**\Flipdish\Client\Models\BusinessHoursPeriod**](BusinessHoursPeriod.md) | The new values of the period | [optional] 
**description** | **string** | Description | [optional] 
**flipdish_event_id** | **string** | The identitfier of the event | [optional] 
**create_time** | [**\DateTime**](\DateTime.md) | The time of creation of the event | [optional] 
**position** | **int** | Position | [optional] 
**app_id** | **string** | App id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



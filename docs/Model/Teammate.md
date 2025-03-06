# Teammate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**teammate_id** | **string** | Unique indentifier | [optional] 
**name** | **string** | Name | [optional] 
**last_activity** | [**\DateTime**](\DateTime.md) | Last activity | [optional] 
**app_id** | **string** | Access level is for this App | [optional] 
**invitation_status** | **string** | Invitation status | [optional] 
**email** | **string** | Email address | [optional] 
**app_access_level** | **string** | App access level | [optional] 
**has_access_to_all_stores** | **bool** | The user has access to all stores for the app (including new stores that added later) | [optional] 
**store_ids** | **int[]** | Store IDs the user has access to (if HasAccessToAllStores is false) | [optional] 
**property_ids** | **string[]** | Property Ids the user has access to (if HasAccessToAllStores is false) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# AppStoreAppSubscriptionSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_subscriptions** | **int** | Total subscriptions (per the AppId subscription setup) | [optional] 
**used_subscriptions** | **int** | Number of subscriptions configured and enabled | [optional] 
**subscription_account_is_setup_for_client** | **bool** | Is client setup for subscriptions | [optional] 
**subscription_accounts** | [**\Flipdish\\Client\Models\AppStoreAppSubscriptionAccount[]**](AppStoreAppSubscriptionAccount.md) | Available accounts for subscriptions (only if requesting user has enough permissions to see the list, otherwise empty list or null) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# WebhookSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Webhook subscription identifier | [optional] 
**owner_user_id** | **int** | Webhook subscription owner user identifier | [optional] 
**version** | **string** | Webhook subscription owner user identifier | [optional] 
**event_names** | **string[]** | Webhook subscription event names | [optional] 
**callback_url** | **string** | Callback url. Flipdish system POST messages to this url. | [optional] 
**enabled** | **bool** | Is webhook subscription enabled. | [optional] 
**verify_token** | **string** | This is your token which will be in the Header of each POST request from Flipdish with name: X-Verify-Token. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



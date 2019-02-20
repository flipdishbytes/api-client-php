# Subscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_id** | **int** | The subscription identifier | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Starting date of the subscription | [optional] 
**status** | **string** | Status of the subscription (TrialPeriod, Ongoing, Unpaid, Canceled) | [optional] 
**user_id** | **int** | Flipdish user identifier | [optional] 
**subscription_plan** | [**\Flipdish\Client\Model\SubscriptionPlan**](SubscriptionPlan.md) | Subscription Plan | [optional] 
**card** | [**\Flipdish\Client\Model\Card**](Card.md) | Card | [optional] 
**app_id** | **string** | App name Id of the subscription | 
**vat_number** | **string** | Last 4 digits of the card | [optional] 
**vat_country_code** | **string** | Expiry date of the card | 
**quantity** | **int** | Number of physical restaurants | [optional] 
**subscription_plan_id** | **int** | Subscription plan identifier | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# UserInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | The user&#39;s phone number. | [optional] 
**email** | **string** | The user&#39;s email address. | [optional] 
**email_confirmed** | **bool** | Indicates if the user&#39;s email address has been confirmed. | [optional] 
**prevent_from_using_cards** | **bool** | Indicates if the user is prevented from using cards. | [optional] 
**is_user_phone_number_blocked** | **bool** | Indicates if the user&#39;s phone number is blocked. | [optional] 
**user_white_labels** | [**\Flipdish\\Client\Models\UserWhiteLabelInfo[]**](UserWhiteLabelInfo.md) | List of white label information associated with the user. | [optional] 
**user_id** | **int** | The unique identifier for the user. | [optional] 
**user_name** | **string** | The user&#39;s username. | [optional] 
**customer_name** | **string** | The customer&#39;s name. | [optional] 
**has_logged_in** | **bool** | Indicates if the user has logged in. | [optional] 
**disable_app_rating_control** | **bool** | Indicates if the app rating control is disabled for the user. | [optional] 
**globally_opted_out** | **bool** | Indicates if the user has globally opted out. | [optional] 
**completed_order_count** | **int** | The number of completed orders by the user. | [optional] 
**cancelled_order_count** | **int** | The number of cancelled orders by the user. | [optional] 
**order_total_value** | **double** | The total value of orders placed by the user. | [optional] 
**ts_most_recent_order** | [**\DateTime**](\DateTime.md) | The timestamp of the user&#39;s most recent order. | [optional] 
**ts_first_order** | [**\DateTime**](\DateTime.md) | The timestamp of the user&#39;s first order. | [optional] 
**is_restaurant_user** | **bool** | Indicates if the user is a restaurant user. | [optional] 
**installs** | [**\Flipdish\\Client\Models\AppInstall[]**](AppInstall.md) | List of app installs associated with the user. | [optional] 
**delivery_locations** | [**\Flipdish\\Client\Models\DeliveryLocation[]**](DeliveryLocation.md) | List of delivery locations associated with the user. | [optional] 
**payment_accounts** | [**\Flipdish\\Client\Models\PaymentAccount[]**](PaymentAccount.md) | List of payment accounts associated with the user. | [optional] 
**language_id** | **string** | The language identifier for the user. | [optional] 
**current_language_name** | **string** | Current language name for the user. | [optional] 
**languages** | [**\Flipdish\\Client\Models\Language[]**](Language.md) | Available languages that the user can choose from. | [optional] 
**sales_force_contact_id** | **string** | The Salesforce contact ID for the user. | [optional] 
**stripe_customer_id** | **string** | The Stripe customer ID for the user. | [optional] 
**user_monthly_commissions** | [**\Flipdish\\Client\Models\UserMonthlyCommission[]**](UserMonthlyCommission.md) | User&#39;s monthly commissions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



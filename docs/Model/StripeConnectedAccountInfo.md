# StripeConnectedAccountInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_status** | **string** | Stripe connected account status | [optional] 
**stripe_id** | **string** | Stripe connected account id | [optional] 
**card_payment_status** | **string** | Current status of the Card Payment capability of the account | [optional] 
**payout_schedule_interval** | **string** | Payouts Schedule Interval | [optional] 
**payouts_enabled** | **bool** | Payouts Enabled status | [optional] 
**payouts_paused** | **bool** | Flag indicating if payouts are paused | [optional] 
**payments_enabled** | **bool** | Flag indicating if payments are enabled | [optional] 
**disabled_reason** | **string** | If the Stripe connected account is disabled, this is Stripe&#39;s raw  requirements.disabled_reason describing why, as last recorded from a Stripe  connected-account webhook. Known values are requirements.fields_needed,  requirements.past_due, requirements.pending_verification,  rejected.fraud, rejected.terms_of_service, rejected.listed,  rejected.other and platform_paused, but Stripe can introduce new ones, so  the value is passed through unmapped (the same way  CapabilityRequirementsInfo.DisabledReason is). null when the account is  not disabled. Note that {Flipdish.PublicModels.V1.BankAccount.StripeConnectedAccountInfo.AccountStatus} is a deliberately lossy mapping of  this value and the two can legitimately disagree - do not derive one from the other. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



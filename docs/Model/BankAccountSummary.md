# BankAccountSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id of this account | [optional] 
**store_names** | **string[]** | Store Names that are attached to this account | [optional] 
**account_state** | **string** | Status of Account | [optional] 
**currency_code** | **string** | Currency of Account | [optional] 
**stripe_connected_account_info** | [**\Flipdish\\Client\Models\StripeConnectedAccountInfo**](StripeConnectedAccountInfo.md) | Information about the Stripe connected account associated with this bank account (if any) | [optional] 
**account_name** | **string** | Name of this account | [optional] 
**iban** | **string** | IBAN of this account | [optional] 
**swift** | **string** | SWIFT of this bank account | [optional] 
**national_clearing_code** | **string** | National Clearing Code (BSB in Australia, Routing Number in USA/Canada, NCC in NZ) | [optional] 
**populated_account_fields** | [**\Flipdish\\Client\Models\AccountFieldKeyValuePair[]**](AccountFieldKeyValuePair.md) | A list of one or more populated account fields (field key-value pairs).  If this list contains at least one item, the Iban, Swift and NationalClearingCode fields will be ignored. | [optional] 
**rejection_reason** | **string** | Reason for Rejection | [optional] 
**business_type** | **string** | Business Type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



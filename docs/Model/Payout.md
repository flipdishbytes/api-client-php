# Payout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_id** | **int** | The id of the payout. | [optional] 
**payee_bank_account_id** | **int** | Bank account identifier | [optional] 
**account_name** | **string** | Account name of the payout destination | [optional] 
**payout_status** | **string** | Status of the payout | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | Date payout was created | [optional] 
**period_start_time** | [**\DateTime**](\DateTime.md) | This payout includes operations after at this date (inclusive) | [optional] 
**period_end_time** | [**\DateTime**](\DateTime.md) | This payout includes operations before at this date (exclusive) | [optional] 
**destination_bank** | **string** | Destination bank name | [optional] 
**destination_account** | **string** | Last 4 digits of the destination bank IBAN | [optional] 
**amount** | **double** | Payout amount | [optional] 
**payout_type** | **string** | Type of payout source | [optional] 
**currency** | **string** | Payout currency | [optional] 
**cutoff_date** | [**\DateTime**](\DateTime.md) | Payouts before this date do not have a details breakdown | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



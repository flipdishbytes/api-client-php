# BankAccountDetailsUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_address** | **string** | Address of the bank account | [optional] 
**account_holder_address** | **string** | Address of the payee | [optional] 
**vat_number** | **string** | Account Holders Vat Number | [optional] 
**store_ids** | **int[]** | List of stores to attach to Account | [optional] 
**bank_name** | **string** | Name of Bank | [optional] 
**account_name** | **string** | Name of this account | [optional] 
**iban** | **string** | IBAN of this account | [optional] 
**swift** | **string** | SWIFT of this bank account | [optional] 
**national_clearing_code** | **string** | National Clearing Code (BSB in Australia, Routing Number in USA/Canada, NCC in NZ) | [optional] 
**populated_account_fields** | [**\Flipdish\Client\Models\AccountFieldKeyValuePair[]**](AccountFieldKeyValuePair.md) | A list of one or more populated account fields (field key-value pairs).  If this list contains at least one item, the Iban, Swift and NationalClearingCode fields will be ignored. | [optional] 
**rejection_reason** | **string** | Reason for Rejection | [optional] 
**business_type** | **string** | Business Type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



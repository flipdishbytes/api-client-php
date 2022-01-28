# BankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id of this account | [optional] 
**account_name** | **string** | Name of this account | [optional] 
**iban** | **string** | IBAN of this account | [optional] 
**swift** | **string** | SWIFT of this bank account | [optional] 
**populated_account_fields** | [**\Flipdish\\Client\Models\AccountFieldKeyValuePair[]**](AccountFieldKeyValuePair.md) | A list of one or more populated account fields (field key-value pairs).  If this list contains at least one item, the Iban, Swift and NationalClearingCode fields should be ignored. | [optional] 
**account_state** | **string** | Status of Account | [optional] 
**store_names** | **string[]** | Store Names that are attached to this account | [optional] 
**bank_address** | **string** | Address lf the bank | [optional] 
**bank_country_code** | **string** | CountryCode of the Bank Account | [optional] 
**account_holder_address** | **string** | Account Holders Address | [optional] 
**account_holder_country_code** | **string** | Account Holders Country Code | [optional] 
**vat_number** | **string** | Account Holders Vat Number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



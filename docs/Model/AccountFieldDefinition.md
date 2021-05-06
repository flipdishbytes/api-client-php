# AccountFieldDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Depending on the Key, the field&#39;s value will be stored in a different field in PayeeBankAccountData | [optional] 
**display_name** | **string** | Display name of the field | [optional] 
**type** | **string** | There are some fields that are of type known to the frontend (IBAN, Swift) -- for those frontend should use its own validation library, e.g. ibantools | [optional] 
**min_length** | **int** | Minimum length of the field | [optional] 
**max_length** | **int** | Maximum length of the field | [optional] 
**digits_only** | **bool** | Is the field digits (numeric) only | [optional] 
**regex** | **string** | Regex for validating the field (if specified) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



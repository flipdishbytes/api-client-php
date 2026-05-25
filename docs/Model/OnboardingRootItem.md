# OnboardingRootItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**menu_id** | **int** | Id of the menu associated to the current store. | [optional] 
**bank_account_id** | **int** | Id of the bank account, associated to the current store. | [optional] 
**onboarding_item_id** | **int** | Item internal id. | [optional] 
**title** | **string** | Item title in the items panel. | [optional] 
**description** | **string** | Item detailed information. | [optional] 
**status** | **string** | Whether the item is pending, completed or was dismissed. | [optional] 
**type** | **string** | Defines if the item is a global milestone, a category or a simple item. | [optional] 
**items** | [**\Flipdish\\Client\Models\OnboardingItem[]**](OnboardingItem.md) | Nested items (subitems). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# CreateFullMenuItemOptionSetItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**menu_item_option_set_item_id** | **int** | Menu item option set item identifier | [optional] 
**metadata** | [**\Flipdish\\Client\Models\CreateMetadata[]**](CreateMetadata.md) | List of metadata | [optional] 
**tax_rate_name** | **string** | Tax rate name | [optional] 
**next_menu_item_option_set_id** | **int** | if null, next option set is next. if -1, this is the final option set | [optional] 
**name** | **string** | Name | [optional] 
**price** | **double** | Price | [optional] 
**deposit_return_fee** | **double** | An optional fee that can be added to the price of the item. | [optional] 
**is_available** | **bool** | Is available | [optional] 
**display_order** | **int** | Display order. Displayed in ascending order. | [optional] 
**cell_layout_type** | **string** | Small | Medium | Large  Affects the layout of the menu. | [optional] 
**image_url** | **string** | Image url | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



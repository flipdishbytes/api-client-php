# MenuItemOptionSetItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**menu_item_option_set_item_id** | **int** | Menu item option set item identifier | [optional] 
**public_id** | **string** | Permanent reference to the item. | [optional] 
**metadata** | [**\Flipdish\\Client\Models\CreateMetadata[]**](CreateMetadata.md) | List of metadata | [optional] 
**next_menu_item_option_set_id** | **int** | if null, next option set is next. if -1, this is the final option set | [optional] 
**catalog_item_id** | **string** | Catalog item Id when the OptionSet is associated to a Product | [optional] 
**tax_rate_name** | **string** | Tax rate name | [optional] 
**tax_rate_id** | **int** |  | [optional] 
**tax_value** | **double** |  | [optional] 
**name** | **string** | Name | [optional] 
**price** | **double** | Price | [optional] 
**deposit_return_fee** | **double** | An optional fee that can be added to the price of the item. | [optional] 
**is_available** | **bool** | Is available | [optional] 
**display_order** | **int** | Display order. Displayed in ascending order. | [optional] 
**cell_layout_type** | **string** | Small | Medium | Large  Affects the layout of the menu. | [optional] 
**image_url** | **string** | Image url | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



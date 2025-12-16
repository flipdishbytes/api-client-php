# MenuItemOptionSet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**menu_item_option_set_id** | **int** | Menu item option set identifier | [optional] 
**image_name** | **string** | Image Name | [optional] 
**image_url** | **string** | Image url | [optional] 
**menu_item_option_set_items** | [**\Flipdish\\Client\Models\MenuItemOptionSetItem[]**](MenuItemOptionSetItem.md) | Option set items | [optional] 
**public_id** | **string** | Permanent reference to the item. | [optional] 
**catalog_item_id** | **string** | Catalog item Id when the OptionSet is associated to a Product | [optional] 
**name** | **string** | Menu item option set name | [optional] 
**is_master_option_set** | **bool** | Is master option set. This can affect the layout of the options in the menu displayed to the customer. Usually it is true if the option could be considerd a standalone item as opposed to an addition (\&quot;with ketchup\&quot;) or modifier (\&quot;large\&quot;). | [optional] 
**display_order** | **int** | Display order. Displayed in ascending order. | [optional] 
**min_select_count** | **int** | Minimum items must be selected | [optional] 
**max_select_count** | **int** | Maximum number of items can be selected | [optional] 
**cell_layout_type** | **string** | Small | Medium | Large  Affects the layout of the menu. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



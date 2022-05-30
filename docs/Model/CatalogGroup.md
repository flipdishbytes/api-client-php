# CatalogGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**catalog_group_id** | **string** | Unique catalog group id | [optional] 
**catalog_item_id** | **string** | Unique catalog item id | [optional] 
**is_archived** | **bool** | Returns true if the group is archived | [optional] 
**min_select_count** | **int** | Minimum number of items that the user has to select | [optional] 
**max_select_count** | **int** | Maximum number of items that the user has to select | [optional] 
**items** | [**\Flipdish\\Client\Models\CatalogItemReference[]**](CatalogItemReference.md) | Collection of items associated with this product | [optional] 
**metafields** | [**\Flipdish\\Client\Models\Metafield[]**](Metafield.md) | Collection of metafields | [optional] 
**group_type** | **string** | Type of group (ModifierGroup, etc) | 
**sku** | **string** | Stock Keeping Unit (SKU) | 
**name** | **string** | Group name | 
**autogenerate_display_text** | **bool** | Autogenerate display text in ordering applications | [optional] 
**image_file_name** | **string** | Image File Name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# MenuSectionItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**menu_item_id** | **int** | Menu item identifier. This ID may change at any time. Use &#x60;PublicId&#x60; if you need a perminant reference to the item. | [optional] 
**actual_price** | **double** | Actual price - the minimum price possible when all required option set items prices are included. | [optional] 
**image_url** | **string** | Image url | [optional] 
**menu_item_option_sets** | [**\Flipdish\Client\Model\MenuItemOptionSet[]**](MenuItemOptionSet.md) | Menu item option sets | [optional] 
**daily_special_hours** | [**\Flipdish\Client\Model\BusinessHoursPeriod[]**](BusinessHoursPeriod.md) | Daily special hours | [optional] 
**public_id** | **string** | Permanent reference to the item. | [optional] 
**name** | **string** | Menu item name (like \&quot;Korma\&quot;) | [optional] 
**description** | **string** | Description (like \&quot;A lovely dish from the east\&quot;) | [optional] 
**spiciness_rating** | **string** | Spiciness rating | [optional] 
**price** | **double** | Price - this is only used when there is no master option set and should be set to 0 if a master option set exists. | [optional] 
**display_order** | **int** | Display order | [optional] 
**alcohol** | **bool** | To be set true if the item or an option of the item contains an alcoholic drink. | [optional] 
**is_available** | **bool** | True if we accept orders for this item still | [optional] 
**cell_layout_type** | **string** | Small | Medium | Large  Affects the layout of the menu. | [optional] 
**disable_vouchers** | **bool** | If true, then vouchers won&#39;t be applied for this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



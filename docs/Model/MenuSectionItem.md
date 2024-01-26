# MenuSectionItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actual_price** | **double** | Actual price - the minimum price possible when all required option set items prices are included. | [optional] 
**menu_item_option_sets** | [**\Flipdish\\Client\Models\MenuItemOptionSet[]**](MenuItemOptionSet.md) | Menu item option sets | [optional] 
**daily_special_hours** | [**\Flipdish\\Client\Models\BusinessHoursPeriod[]**](BusinessHoursPeriod.md) | Daily special hours | [optional] 
**public_id** | **string** | Permanent reference to the item. | [optional] 
**tax_rate_name** | **string** | Tax rate name | [optional] 
**tax_rate_id** | **int** | TaxRate | [optional] 
**tax_value** | **double** | TaxValue - the tax associated with this item, based on TaxRate / TaxType and Currency (currency determines decimal point precision) | [optional] 
**exclude_from_voucher_discounting** | **bool** | If true, the item is excluded from voucher discount calculations | [optional] 
**metadata** | [**\Flipdish\\Client\Models\CreateMetadata[]**](CreateMetadata.md) | List of metadata | [optional] 
**catalog_item_id** | **string** | Catalog item Id when the Item is associated to a Product | [optional] 
**name** | **string** | Menu item name (like \&quot;Korma\&quot;) | [optional] 
**description** | **string** | Description (like \&quot;A lovely dish from the east\&quot;) | [optional] 
**spiciness_rating** | **string** | Spiciness rating | [optional] 
**price** | **double** | Price - this is only used when there is no master option set and should be set to 0 if a master option set exists. | [optional] 
**deposit_return_fee** | **double** | An optional fee that can be added to the price of the item. | [optional] 
**display_order** | **int** | Display order | [optional] 
**alcohol** | **bool** | To be set true if the item or an option of the item contains an alcoholic drink. | [optional] 
**is_available** | **bool** | True if we accept orders for this item still | [optional] 
**cell_layout_type** | **string** | Small | Medium | Large  Affects the layout of the menu. | [optional] 
**disable_vouchers** | **bool** | If true, then vouchers won&#39;t be applied for this item | [optional] 
**image_name** | **string** | Image url | [optional] 
**image_url** | **string** | Image url | [optional] 
**menu_item_id** | **int** | Menu Item Id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



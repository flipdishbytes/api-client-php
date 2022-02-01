# LightspeedSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **string** | Company Id | [optional] 
**use_o_auth** | **bool** | Use OAuth for authentication | [optional] 
**enabled** | **bool** | Enabled | [optional] 
**estimated_minutes_for_delivery** | **int** | Estimated minutes for delivery | [optional] 
**estimated_minutes_for_collection** | **int** | Estimated minutes for collection | [optional] 
**geographic_location** | **string** | Geographic location (euc1, nae1, euw2, ....)) | [optional] 
**establishment** | **bool** | Is the CompanyId an establishment (kind of the store of a group of store) | [optional] 
**voucher_id** | **string** | The Lightspeed voucher identifier to map with our | [optional] 
**delivery_fee_id** | **string** | The Lightspeed delivery fee identifier to map with our | [optional] 
**processing_fee_id** | **string** | The Lightspeed processing fee identifier to map with our | [optional] 
**price_type** | **string** | Which price to choose from Lightspeed menu | [optional] 
**menu_id** | **int** | The menu id of the store | [optional] 
**collection_table_id** | **int** | Collection Table ID to send orders | [optional] 
**delivery_table_id** | **int** | Delivery Table ID to send orders | [optional] 
**collection_table_ids** | **map[string,string]** | Collection Table IDs to send orders to | [optional] 
**delivery_table_ids** | **map[string,string]** | Delivery Table IDs to send orders to | [optional] 
**use_tax_inclusive_prices** | **bool** | Exclude tax | [optional] 
**skip_status_check_and_accept_order_after_sending** | **bool** | WARNING: only use this option if the Liteserver is not synchronizing within max 5 minutes with Lightspeed cloud! | [optional] 
**send_table_number_to_table_id** | **bool** | Send Table Number to Table Id | [optional] 
**add_chef_note_to_product** | **bool** | Add ChefNote To Product | [optional] 
**chef_note_item_id** | **string** | The Lightspeed Chef Note Item Id to map | [optional] 
**chef_note_modifier_id** | **string** | The Lightspeed Chef Note Modifier Id to map | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



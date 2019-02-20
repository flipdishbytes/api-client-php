# VoucherWithStats

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_used** | **int** | Total times the voucher was used | [optional] 
**total_customers** | **int** | Total amount of customers who used this voucher | [optional] 
**total_amount_from_orders** | **double** | Total amount of money from orders | [optional] 
**total_discounted** | **double** | Total amount of money given away | [optional] 
**average_order_size** | **double** | Average Order Size | [optional] 
**voucher_id** | **int** | Voucher Id | [optional] 
**code** | **string** | Voucher Code | [optional] 
**status** | **string** | Voucher Status | [optional] 
**voucher_type** | **string** | Voucher Type | [optional] 
**voucher_sub_type** | **string** | Voucher Sub Type | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Voucher Expires On (Time in UTC) | [optional] 
**add_item_details** | [**\Flipdish\Client\Models\AddItemDetails**](AddItemDetails.md) | Add item details | [optional] 
**credit_note_details** | [**\Flipdish\Client\Models\CreditNoteDetails**](CreditNoteDetails.md) | Credit note details | [optional] 
**lump_discount_details** | [**\Flipdish\Client\Models\LumpDiscountDetails**](LumpDiscountDetails.md) | Lump discount details | [optional] 
**percent_discount_details** | [**\Flipdish\Client\Models\PercentDiscountDetails**](PercentDiscountDetails.md) | Percent discount details | [optional] 
**currency** | **string** | Currency of the voucher | [optional] 
**description** | **string** | Voucher Description (Visible on printout) | [optional] 
**is_enabled** | **bool** | Is voucher enabled | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | Voucher Expires On (Time in UTC) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



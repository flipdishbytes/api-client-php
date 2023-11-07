# CreateVoucher

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucher_type** | **string** | Voucher Type | [optional] 
**promotion** | [**\Flipdish\\Client\Models\CreatePromotion**](CreatePromotion.md) | Create Promotion details | [optional] 
**credit_note_details** | [**\Flipdish\\Client\Models\CreditNoteDetails**](CreditNoteDetails.md) | Credit note details | [optional] 
**lump_discount_details** | [**\Flipdish\\Client\Models\LumpDiscountDetails**](LumpDiscountDetails.md) | Lump discount details | [optional] 
**percent_discount_details** | [**\Flipdish\\Client\Models\PercentDiscountDetails**](PercentDiscountDetails.md) | Percent discount details | [optional] 
**code** | **string** | Voucher Code | [optional] 
**description** | **string** | Voucher Description (Visible on printout) | [optional] 
**stores** | **int[]** | Stores that this voucher applies to | [optional] 
**valid_on_orders_over** | **double** | Valid on orders on or above | [optional] 
**takes_priority** | **bool** | Takes priority | [optional] 
**is_enabled** | **bool** | Is voucher enabled | [optional] 
**is_automatically_applied** | **bool** | Is voucher automatically applied | [optional] 
**include_delivery_fee** | **bool** | Include delivery fees | [optional] 
**is_valid_for_delivery_orders** | **bool** | Valid for delivery orders | [optional] 
**is_valid_for_pickup_orders** | **bool** | Valid for pickup orders | [optional] 
**is_valid_for_orders_payed_online** | **bool** | Valid for orders payed online | [optional] 
**is_valid_for_orders_payed_by_cash** | **bool** | Valid for orders payed in cash | [optional] 
**is_valid_for_first_order_only** | **bool** | Valid only on the first order by the customer | [optional] 
**is_valid_once_per_customer** | **bool** | Valid once per customer | [optional] 
**is_valid_only_once** | **bool** | Valid only once, by any customer (once used cannot be used again by any other customer) | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Voucher Starts On (Time in UTC) | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | Voucher Expires On (Time in UTC) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



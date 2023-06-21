# Subscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**products** | [**\Flipdish\\Client\Models\SubscriptionProduct[]**](SubscriptionProduct.md) | Products | 
**next_invoice_amount** | **double** | Next invoice amount | [optional] 
**next_invoice_billing_date** | [**\DateTime**](\DateTime.md) | Next invoice billing date | [optional] 
**upcoming_invoice_items** | [**\Flipdish\\Client\Models\InvoiceItem[]**](InvoiceItem.md) | Upcoming invoice items | [optional] 
**upcoming_invoice_discounts** | [**\Flipdish\\Client\Models\InvoiceDiscount[]**](InvoiceDiscount.md) | Upcoming invoice discounts | [optional] 
**upcoming_invoice** | [**\Flipdish\\Client\Models\UpcomingInvoice**](UpcomingInvoice.md) | Upcoming invoice | [optional] 
**subscription_id** | **string** | The subscription identifier | 
**name** | **string** |  | 
**status** | **string** | Status | 
**currency** | **string** | Currency | 
**user** | **string** | User | 
**default_payment_description** | **string** | Default payment description | [optional] 
**cancellation_date** | [**\DateTime**](\DateTime.md) | Cancellation Date | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



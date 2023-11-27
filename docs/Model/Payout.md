# Payout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_id** | **int** | The id of the payout. | [optional] 
**payee_bank_account_id** | **int** | Bank account identifier | [optional] 
**account_name** | **string** | Account name of the payout destination | [optional] 
**payout_status** | **string** | Status of the payout | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | Date payout was created | [optional] 
**period_start_time** | [**\DateTime**](\DateTime.md) | This payout includes operations after at this date (inclusive) | [optional] 
**period_end_time** | [**\DateTime**](\DateTime.md) | This payout includes operations before at this date (exclusive) | [optional] 
**destination_bank** | **string** | Destination bank name | [optional] 
**destination_account** | **string** | Last 4 digits of the destination bank IBAN | [optional] 
**amount** | **double** | Payout amount | [optional] 
**payout_type** | **string** | Type of payout source | [optional] 
**currency** | **string** | Payout currency | [optional] 
**cutoff_date** | [**\DateTime**](\DateTime.md) | Payouts before this date do not have a details breakdown | [optional] 
**online_sales_amount** | **double** | Payout online sales amount | [optional] 
**online_sales_delivery_charges** | **double** | Payout online sales delivery charges | [optional] 
**online_sales_tips** | **double** | Payout online sales tips | [optional] 
**online_sales_service_charges** | **double** | Payout online sales service charges | [optional] 
**online_sales_refunded_fees** | **double** | Payout online sales refunded fees | [optional] 
**online_sales_fees** | **double** | Payout online sales fees | [optional] 
**pos_sales_fees** | **double** | Payout online sales fees | [optional] 
**delivery_fees** | **double** | Delivery fees | [optional] 
**tip_fees** | **double** | Tip fees | [optional] 
**online_sales_refunded_amount** | **double** | Payout online sales refunded amount | [optional] 
**pos_sales_refunded_amount** | **double** | POS Payout online sales refunded amount | [optional] 
**online_sales_tax** | **double** | Payout online sales tax | [optional] 
**total_online_revenue** | **double** | Payout total online revenue | [optional] 
**cash_sales_fees** | **double** | Payout cash sales fees | [optional] 
**cash_sales_refunded_fees** | **double** | Payout cash sales refunded fees | [optional] 
**customer_cash_fees** | **double** | Payout cash fees charged to customer | [optional] 
**sales_fees_vat** | **double** | Payout sales fees vat | [optional] 
**total_fees** | **double** | Payout total fees | [optional] 
**total_online_revenue_adjustments** | **double** | Payout total online revenue adjustments | [optional] 
**chargeback_amount** | **double** | Payout chargeback amount | [optional] 
**pos_sales_chargeback_amount** | **double** | POS Payout chargeback amount | [optional] 
**chargeback_refunded_fees** | **double** | Payout chargeback refunded fees | [optional] 
**total_chargeback_cost** | **double** | Payout chargebacks total cost | [optional] 
**total_other_charges** | **double** | Payout other charges total | [optional] 
**opening_balance** | **double** | Payout opening balance | [optional] 
**closing_balance** | **double** | Payout closing balance | [optional] 
**pay_green_sales_amount** | **double** | Amount of sales through PayGreen (restaurant vouchers) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



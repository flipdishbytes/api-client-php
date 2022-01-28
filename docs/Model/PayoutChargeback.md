# PayoutChargeback

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | The id of the order the chargeback was for | [optional] 
**order_currency** | **string** | Order currency | [optional] 
**payout_id** | **int** | The id of the payout the order is related to | [optional] 
**order_date** | [**\DateTime**](\DateTime.md) | The date the order was placed | [optional] 
**order_type** | **string** | Order type (online or cash) | [optional] 
**chargeback_date** | [**\DateTime**](\DateTime.md) | The date the chargeback was done | [optional] 
**store_id** | **int** | Store id | [optional] 
**chargeback_amount** | **double** | Chargeback amount | [optional] 
**refunded_fees** | **double** | Amount of refunded fees | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



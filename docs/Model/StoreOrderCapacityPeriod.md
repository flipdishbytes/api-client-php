# StoreOrderCapacityPeriod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_order_number_per_store_interval** | **int** | The maximum number of orders per each store order interval in this order capacity period.  E.g. for a period from 9:00 till 11:00, if the store&#39;s interval is 10 minutes, and MaxOrderNumberPerStoreInterval is set to 5,  it means that within each 10-minute interval between 9:00 and 11:00 (i.e. 9:00-9:10, 9:10-9:20, .. , 10:50-11:00) it will be possible to  request at most 5 orders. | [optional] 
**day_of_the_week** | **string** | Day of the week the period pertains to | [optional] 
**period_start_hour** | **int** | The hour the period starts at | [optional] 
**period_start_minutes** | **int** | The minutes after the hour the period starts at | [optional] 
**period_end_hour** | **int** | The hour the period ends at | [optional] 
**period_end_minutes** | **int** | The minutes after the hour the period ends at | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



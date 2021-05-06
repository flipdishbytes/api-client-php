# HttpRequestAndResponseLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** | Id of the log | [optional] 
**verb** | **string** | Verb associated with the HTTP call. | [optional] 
**request_uri** | **string** | Http request URI. | [optional] 
**status_code** | **int** | Http response status code. | [optional] 
**reason_phrase** | **string** | Http response status line. | [optional] 
**call_duration_in_milliseconds** | **int** | Call duration representing the duration of the HTTP call in milliseconds. | [optional] 
**user_id** | **string** | Identity of the caller. | [optional] 
**ip_address** | **string** | Ip address of the caller | [optional] 
**created_date_time** | **string** | Timestamp at which the HTTP call took place. | [optional] 
**request_headers** | **map[string,string]** | Http request headers. | [optional] 
**request_body** | **string** | Http request body, if any. | [optional] 
**request_length** | **int** | Http request content-length | [optional] 
**response_headers** | **map[string,string]** | Http response headers. | [optional] 
**response_body** | **string** | Http response body. | [optional] 
**response_length** | **int** | Http response content-length | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



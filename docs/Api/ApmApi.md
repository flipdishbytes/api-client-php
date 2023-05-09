# Flipdish\\Client\ApmApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApmStatus**](ApmApi.md#getApmStatus) | **GET** /api/v1.0/{appId}/apm/status | 
[**getBasicStatistics**](ApmApi.md#getBasicStatistics) | **GET** /api/v1.0/{appId}/apm/statistics | 
[**getCalendarWeekStatistics**](ApmApi.md#getCalendarWeekStatistics) | **GET** /api/v1.0/{appId}/apm/statistics/calendar | 
[**getCallsStatistics**](ApmApi.md#getCallsStatistics) | **GET** /api/v1.0/{appId}/apm/statistics/calls/{aggregateDataBy} | 
[**getOrderStatistics**](ApmApi.md#getOrderStatistics) | **GET** /api/v1.0/{appId}/apm/statistics/orders/{aggregateDataBy} | 
[**getPaginatedCallList**](ApmApi.md#getPaginatedCallList) | **GET** /api/v1.0/{appId}/apm/calls | 


# **getApmStatus**
> \Flipdish\\Client\Models\RestApiResultApmStatus getApmStatus($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ApmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getApmStatus($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApmApi->getApmStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultApmStatus**](../Model/RestApiResultApmStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBasicStatistics**
> \Flipdish\\Client\Models\RestApiResultApmStatistics getBasicStatistics($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ApmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->getBasicStatistics($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApmApi->getBasicStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultApmStatistics**](../Model/RestApiResultApmStatistics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalendarWeekStatistics**
> \Flipdish\\Client\Models\RestApiArrayResultApmHourlyDataPoint getCalendarWeekStatistics($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ApmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->getCalendarWeekStatistics($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApmApi->getCalendarWeekStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultApmHourlyDataPoint**](../Model/RestApiArrayResultApmHourlyDataPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsStatistics**
> \Flipdish\\Client\Models\RestApiArrayResultApmDataPoint getCallsStatistics($app_id, $aggregate_data_by, $data_point_limit, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ApmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$aggregate_data_by = "aggregate_data_by_example"; // string | 
$data_point_limit = 56; // int | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->getCallsStatistics($app_id, $aggregate_data_by, $data_point_limit, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApmApi->getCallsStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **aggregate_data_by** | **string**|  |
 **data_point_limit** | **int**|  | [optional]
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultApmDataPoint**](../Model/RestApiArrayResultApmDataPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderStatistics**
> \Flipdish\\Client\Models\RestApiArrayResultApmCurrencyDataPoint getOrderStatistics($app_id, $aggregate_data_by, $data_point_limit, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ApmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$aggregate_data_by = "aggregate_data_by_example"; // string | 
$data_point_limit = 56; // int | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->getOrderStatistics($app_id, $aggregate_data_by, $data_point_limit, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApmApi->getOrderStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **aggregate_data_by** | **string**|  |
 **data_point_limit** | **int**|  | [optional]
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultApmCurrencyDataPoint**](../Model/RestApiArrayResultApmCurrencyDataPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaginatedCallList**
> \Flipdish\\Client\Models\RestApiPaginationResultPhoneCall getPaginatedCallList($app_id, $page, $limit, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ApmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->getPaginatedCallList($app_id, $page, $limit, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApmApi->getPaginatedCallList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultPhoneCall**](../Model/RestApiPaginationResultPhoneCall.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


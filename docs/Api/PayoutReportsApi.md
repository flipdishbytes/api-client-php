# Flipdish\\Client\PayoutReportsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayoutReport3Details**](PayoutReportsApi.md#getPayoutReport3Details) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/details | 
[**getPayoutReport3Orders**](PayoutReportsApi.md#getPayoutReport3Orders) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/orders | 
[**getPayoutReport3Overview**](PayoutReportsApi.md#getPayoutReport3Overview) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/overview | 
[**payoutReport3ExportPayoutOnlineOrders**](PayoutReportsApi.md#payoutReport3ExportPayoutOnlineOrders) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/export/onlineorders | 
[**payoutReport3ExportPayoutOrders**](PayoutReportsApi.md#payoutReport3ExportPayoutOrders) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/export/orders | 
[**payoutReport3ExportPayoutPosSales**](PayoutReportsApi.md#payoutReport3ExportPayoutPosSales) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/export/possales | 


# **getPayoutReport3Details**
> \Flipdish\\Client\Models\RestApiResultPayoutReport3Details getPayoutReport3Details($app_id, $bank_account_id, $payout_id, $store_ids)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->getPayoutReport3Details($app_id, $bank_account_id, $payout_id, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->getPayoutReport3Details: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultPayoutReport3Details**](../Model/RestApiResultPayoutReport3Details.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutReport3Orders**
> \Flipdish\\Client\Models\RestApiPaginationResultPayoutReport3PayoutOrder getPayoutReport3Orders($app_id, $bank_account_id, $payout_id, $store_ids, $page, $limit)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getPayoutReport3Orders($app_id, $bank_account_id, $payout_id, $store_ids, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->getPayoutReport3Orders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultPayoutReport3PayoutOrder**](../Model/RestApiPaginationResultPayoutReport3PayoutOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutReport3Overview**
> \Flipdish\\Client\Models\RestApiResultPayoutReport3Overview getPayoutReport3Overview($app_id, $bank_account_id, $payout_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 

try {
    $result = $apiInstance->getPayoutReport3Overview($app_id, $bank_account_id, $payout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->getPayoutReport3Overview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPayoutReport3Overview**](../Model/RestApiResultPayoutReport3Overview.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutReport3ExportPayoutOnlineOrders**
> \Flipdish\\Client\Models\RestApiResultFileCreationResult payoutReport3ExportPayoutOnlineOrders($app_id, $bank_account_id, $payout_id, $start_date, $end_date, $payout_request_ids_bank_account_ids, $payout_request_ids_states)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = "bank_account_id_example"; // string | 
$payout_id = "payout_id_example"; // string | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payout_request_ids_bank_account_ids = array(56); // int[] | List of bank account ids to search for
$payout_request_ids_states = array("payout_request_ids_states_example"); // string[] | List of {Flipdish.PublicModels.V1.Payouts.PayoutStatus} so search for

try {
    $result = $apiInstance->payoutReport3ExportPayoutOnlineOrders($app_id, $bank_account_id, $payout_id, $start_date, $end_date, $payout_request_ids_bank_account_ids, $payout_request_ids_states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->payoutReport3ExportPayoutOnlineOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **string**|  |
 **payout_id** | **string**|  |
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **payout_request_ids_bank_account_ids** | [**int[]**](../Model/int.md)| List of bank account ids to search for | [optional]
 **payout_request_ids_states** | [**string[]**](../Model/string.md)| List of {Flipdish.PublicModels.V1.Payouts.PayoutStatus} so search for | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultFileCreationResult**](../Model/RestApiResultFileCreationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutReport3ExportPayoutOrders**
> \Flipdish\\Client\Models\RestApiResultFileCreationResult payoutReport3ExportPayoutOrders($app_id, $bank_account_id, $payout_id, $stores)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$stores = array(56); // int[] | 

try {
    $result = $apiInstance->payoutReport3ExportPayoutOrders($app_id, $bank_account_id, $payout_id, $stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->payoutReport3ExportPayoutOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **stores** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultFileCreationResult**](../Model/RestApiResultFileCreationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutReport3ExportPayoutPosSales**
> \Flipdish\\Client\Models\RestApiResultFileCreationResult payoutReport3ExportPayoutPosSales($app_id, $bank_account_id, $payout_id, $stores)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$stores = array(56); // int[] | 

try {
    $result = $apiInstance->payoutReport3ExportPayoutPosSales($app_id, $bank_account_id, $payout_id, $stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->payoutReport3ExportPayoutPosSales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **stores** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultFileCreationResult**](../Model/RestApiResultFileCreationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


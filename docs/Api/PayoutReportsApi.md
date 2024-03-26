# Flipdish\\Client\PayoutReportsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayoutReport3Details**](PayoutReportsApi.md#getPayoutReport3Details) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/details | 
[**getPayoutReport3Orders**](PayoutReportsApi.md#getPayoutReport3Orders) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/orders | 
[**getPayoutReport3Overview**](PayoutReportsApi.md#getPayoutReport3Overview) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId}/overview | 


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


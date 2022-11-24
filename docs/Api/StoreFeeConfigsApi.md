# Flipdish\\Client\StoreFeeConfigsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcessingFeeConfigsByStoreId**](StoreFeeConfigsApi.md#getProcessingFeeConfigsByStoreId) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs | Get processing fee configs by store identifier
[**getProcessingFeeConfigsByStoreIdAndPaymentAccountType**](StoreFeeConfigsApi.md#getProcessingFeeConfigsByStoreIdAndPaymentAccountType) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs/{paymentAccountType} | Get processing fee configs by store identifier and paymentAccountType
[**getStoreFeeConfig**](StoreFeeConfigsApi.md#getStoreFeeConfig) | **GET** /api/v1.0/stores/{storeId}/feeConfig | Get Store feeConfig


# **getProcessingFeeConfigsByStoreId**
> \Flipdish\\Client\Models\RestApiArrayResultProcessingFeeConfig getProcessingFeeConfigsByStoreId($store_id, $app_name_id)

Get processing fee configs by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreFeeConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$app_name_id = "app_name_id_example"; // string | App Name Id(Not used, still here for compatability reasons)

try {
    $result = $apiInstance->getProcessingFeeConfigsByStoreId($store_id, $app_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreFeeConfigsApi->getProcessingFeeConfigsByStoreId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **app_name_id** | **string**| App Name Id(Not used, still here for compatability reasons) | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultProcessingFeeConfig**](../Model/RestApiArrayResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessingFeeConfigsByStoreIdAndPaymentAccountType**
> \Flipdish\\Client\Models\RestApiResultProcessingFeeConfig getProcessingFeeConfigsByStoreIdAndPaymentAccountType($store_id, $payment_account_type, $app_name_id)

Get processing fee configs by store identifier and paymentAccountType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreFeeConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$payment_account_type = "payment_account_type_example"; // string | 
$app_name_id = "app_name_id_example"; // string | App Name Id(Not used, still here for compatability reasons)

try {
    $result = $apiInstance->getProcessingFeeConfigsByStoreIdAndPaymentAccountType($store_id, $payment_account_type, $app_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreFeeConfigsApi->getProcessingFeeConfigsByStoreIdAndPaymentAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **payment_account_type** | **string**|  |
 **app_name_id** | **string**| App Name Id(Not used, still here for compatability reasons) | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultProcessingFeeConfig**](../Model/RestApiResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreFeeConfig**
> \Flipdish\\Client\Models\StoreFeeConfig getStoreFeeConfig($store_id)

Get Store feeConfig

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreFeeConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $result = $apiInstance->getStoreFeeConfig($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreFeeConfigsApi->getStoreFeeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

[**\Flipdish\\Client\Models\StoreFeeConfig**](../Model/StoreFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


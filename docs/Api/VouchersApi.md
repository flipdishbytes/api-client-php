# Flipdish\\Client\VouchersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVoucher**](VouchersApi.md#createVoucher) | **POST** /api/v1.0/vouchers/{appId} | 
[**getVoucherById**](VouchersApi.md#getVoucherById) | **GET** /api/v1.0/vouchers/{voucherId} | 
[**getVoucherStatsById**](VouchersApi.md#getVoucherStatsById) | **GET** /api/v1.0/vouchers/stats/{voucherId} | 
[**getVouchers**](VouchersApi.md#getVouchers) | **GET** /api/v1.0/{appId}/vouchers/summaries | 
[**updateVoucher**](VouchersApi.md#updateVoucher) | **POST** /api/v1.0/vouchers/{voucherId} | 
[**updateVoucherUsage**](VouchersApi.md#updateVoucherUsage) | **POST** /api/v1.0/{appId}/vouchers/{voucherId}/usage | 


# **createVoucher**
> \Flipdish\\Client\Models\RestApiResultVoucherWithStats createVoucher($app_id, $voucher)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$voucher = new \Flipdish\\Client\Models\CreateVoucher(); // \Flipdish\\Client\Models\CreateVoucher | 

try {
    $result = $apiInstance->createVoucher($app_id, $voucher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->createVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **voucher** | [**\Flipdish\\Client\Models\CreateVoucher**](../Model/CreateVoucher.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultVoucherWithStats**](../Model/RestApiResultVoucherWithStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucherById**
> \Flipdish\\Client\Models\RestApiResultVoucherWithStats getVoucherById($voucher_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | 

try {
    $result = $apiInstance->getVoucherById($voucher_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVoucherById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultVoucherWithStats**](../Model/RestApiResultVoucherWithStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucherStatsById**
> \Flipdish\\Client\Models\RestApiArrayResultVoucherDataPoint getVoucherStatsById($voucher_id, $aggregate_data_by, $data_point_limit)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | 
$aggregate_data_by = "aggregate_data_by_example"; // string | 
$data_point_limit = 56; // int | 

try {
    $result = $apiInstance->getVoucherStatsById($voucher_id, $aggregate_data_by, $data_point_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVoucherStatsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**|  |
 **aggregate_data_by** | **string**|  |
 **data_point_limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultVoucherDataPoint**](../Model/RestApiArrayResultVoucherDataPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVouchers**
> \Flipdish\\Client\Models\RestApiPaginationResultVoucherSummary getVouchers($app_id, $page_index, $page_size, $search_codes, $status_search, $type_search, $sub_type_search, $store_ids, $channel_restrictions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$page_index = 56; // int | 
$page_size = 56; // int | 
$search_codes = array("search_codes_example"); // string[] | 
$status_search = array("status_search_example"); // string[] | 
$type_search = array("type_search_example"); // string[] | 
$sub_type_search = array("sub_type_search_example"); // string[] | 
$store_ids = array(56); // int[] | 
$channel_restrictions = array("channel_restrictions_example"); // string[] | 

try {
    $result = $apiInstance->getVouchers($app_id, $page_index, $page_size, $search_codes, $status_search, $type_search, $sub_type_search, $store_ids, $channel_restrictions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **page_index** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **search_codes** | [**string[]**](../Model/string.md)|  | [optional]
 **status_search** | [**string[]**](../Model/string.md)|  | [optional]
 **type_search** | [**string[]**](../Model/string.md)|  | [optional]
 **sub_type_search** | [**string[]**](../Model/string.md)|  | [optional]
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **channel_restrictions** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultVoucherSummary**](../Model/RestApiPaginationResultVoucherSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVoucher**
> \Flipdish\\Client\Models\RestApiResultVoucherWithStats updateVoucher($voucher_id, $voucher, $store_id, $percent_value, $lump_value, $max_discount_amount)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | 
$voucher = new \Flipdish\\Client\Models\UpdateVoucher(); // \Flipdish\\Client\Models\UpdateVoucher | 
$store_id = array(56); // int[] | 
$percent_value = 56; // int | 
$lump_value = 1.2; // double | 
$max_discount_amount = 1.2; // double | 

try {
    $result = $apiInstance->updateVoucher($voucher_id, $voucher, $store_id, $percent_value, $lump_value, $max_discount_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**|  |
 **voucher** | [**\Flipdish\\Client\Models\UpdateVoucher**](../Model/UpdateVoucher.md)|  |
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]
 **percent_value** | **int**|  | [optional]
 **lump_value** | **double**|  | [optional]
 **max_discount_amount** | **double**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultVoucherWithStats**](../Model/RestApiResultVoucherWithStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVoucherUsage**
> updateVoucherUsage($app_id, $voucher_id, $voucher_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$voucher_id = 56; // int | 
$voucher_usage = new \Flipdish\\Client\Models\UpdateVoucherUsage(); // \Flipdish\\Client\Models\UpdateVoucherUsage | 

try {
    $apiInstance->updateVoucherUsage($app_id, $voucher_id, $voucher_usage);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucherUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **voucher_id** | **int**|  |
 **voucher_usage** | [**\Flipdish\\Client\Models\UpdateVoucherUsage**](../Model/UpdateVoucherUsage.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


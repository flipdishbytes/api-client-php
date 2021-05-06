# Flipdish\Client\VouchersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVoucher**](VouchersApi.md#createVoucher) | **POST** /api/v1.0/vouchers/{appId} | [PRIVATE API] Create voucher
[**getVoucherById**](VouchersApi.md#getVoucherById) | **GET** /api/v1.0/vouchers/{voucherId} | [PRIVATE API] Get voucher by identifier
[**getVoucherStatsById**](VouchersApi.md#getVoucherStatsById) | **GET** /api/v1.0/vouchers/stats/{voucherId} | [PRIVATE API] Get voucher stats by identifier
[**getVouchers**](VouchersApi.md#getVouchers) | **GET** /api/v1.0/{appId}/vouchers/summaries | [PRIVATE API] Get vouchers summaries for App Id
[**updateVoucher**](VouchersApi.md#updateVoucher) | **POST** /api/v1.0/vouchers/{voucherId} | [PRIVATE API] Updates voucher


# **createVoucher**
> \Flipdish\Client\Models\RestApiResultVoucherWithStats createVoucher($app_id, $voucher)

[PRIVATE API] Create voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$voucher = new \Flipdish\Client\Models\CreateVoucher(); // \Flipdish\Client\Models\CreateVoucher | Voucher Details

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
 **app_id** | **string**| App Name Id |
 **voucher** | [**\Flipdish\Client\Models\CreateVoucher**](../Model/CreateVoucher.md)| Voucher Details |

### Return type

[**\Flipdish\Client\Models\RestApiResultVoucherWithStats**](../Model/RestApiResultVoucherWithStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucherById**
> \Flipdish\Client\Models\RestApiResultVoucherWithStats getVoucherById($voucher_id)

[PRIVATE API] Get voucher by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | Id of the voucher

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
 **voucher_id** | **int**| Id of the voucher |

### Return type

[**\Flipdish\Client\Models\RestApiResultVoucherWithStats**](../Model/RestApiResultVoucherWithStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucherStatsById**
> \Flipdish\Client\Models\RestApiArrayResultVoucherDataPoint getVoucherStatsById($voucher_id, $aggregate_data_by, $data_point_limit)

[PRIVATE API] Get voucher stats by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | Id of the voucher
$aggregate_data_by = "aggregate_data_by_example"; // string | Aggregate data by day \\ week \\ month
$data_point_limit = 56; // int | Amount of data points per request

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
 **voucher_id** | **int**| Id of the voucher |
 **aggregate_data_by** | **string**| Aggregate data by day \\ week \\ month |
 **data_point_limit** | **int**| Amount of data points per request | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultVoucherDataPoint**](../Model/RestApiArrayResultVoucherDataPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVouchers**
> \Flipdish\Client\Models\RestApiPaginationResultVoucherSummary getVouchers($app_id, $page_index, $page_size, $search_codes, $status_search, $type_search, $sub_type_search, $store_ids)

[PRIVATE API] Get vouchers summaries for App Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id
$page_index = 56; // int | Page Number
$page_size = 56; // int | Page Size
$search_codes = array("search_codes_example"); // string[] | Search by Voucher Code\\s
$status_search = array("status_search_example"); // string[] | Search by Status
$type_search = array("type_search_example"); // string[] | Search by Type
$sub_type_search = array("sub_type_search_example"); // string[] | Search by Sub Type
$store_ids = array(56); // int[] | Search by Store Ids

try {
    $result = $apiInstance->getVouchers($app_id, $page_index, $page_size, $search_codes, $status_search, $type_search, $sub_type_search, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id |
 **page_index** | **int**| Page Number | [optional]
 **page_size** | **int**| Page Size | [optional]
 **search_codes** | [**string[]**](../Model/string.md)| Search by Voucher Code\\s | [optional]
 **status_search** | [**string[]**](../Model/string.md)| Search by Status | [optional]
 **type_search** | [**string[]**](../Model/string.md)| Search by Type | [optional]
 **sub_type_search** | [**string[]**](../Model/string.md)| Search by Sub Type | [optional]
 **store_ids** | [**int[]**](../Model/int.md)| Search by Store Ids | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultVoucherSummary**](../Model/RestApiPaginationResultVoucherSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVoucher**
> \Flipdish\Client\Models\RestApiResultVoucherWithStats updateVoucher($voucher_id, $voucher, $store_id, $percent_value, $lump_value, $free_item_id)

[PRIVATE API] Updates voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = 56; // int | Id of the voucher
$voucher = new \Flipdish\Client\Models\VoucherBase(); // \Flipdish\Client\Models\VoucherBase | Updated details for the voucher
$store_id = array(56); // int[] | 
$percent_value = 56; // int | Percent voucher value (can have 1 of 3)
$lump_value = 1.2; // double | Lump voucher value (can have 1 of 3)
$free_item_id = 56; // int | Free Item Id (can have 1 of 3)

try {
    $result = $apiInstance->updateVoucher($voucher_id, $voucher, $store_id, $percent_value, $lump_value, $free_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **int**| Id of the voucher |
 **voucher** | [**\Flipdish\Client\Models\VoucherBase**](../Model/VoucherBase.md)| Updated details for the voucher |
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]
 **percent_value** | **int**| Percent voucher value (can have 1 of 3) | [optional]
 **lump_value** | **double**| Lump voucher value (can have 1 of 3) | [optional]
 **free_item_id** | **int**| Free Item Id (can have 1 of 3) | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiResultVoucherWithStats**](../Model/RestApiResultVoucherWithStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


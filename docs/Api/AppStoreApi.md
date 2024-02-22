# Flipdish\\Client\AppStoreApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppStoreApp**](AppStoreApi.md#getAppStoreApp) | **GET** /api/v1.0/appstore/apps/{appStoreAppId} | 
[**getAppStoreApps**](AppStoreApi.md#getAppStoreApps) | **GET** /api/v1.0/appstore/apps | 


# **getAppStoreApp**
> \Flipdish\\Client\Models\RestApiResultAppStoreApp getAppStoreApp($app_store_app_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAppStoreApp($app_store_app_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->getAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**|  |
 **app_id** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreApp**](../Model/RestApiResultAppStoreApp.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreApps**
> \Flipdish\\Client\Models\RestApiPaginationResultAppStoreAppSummary getAppStoreApps($search, $page, $limit, $exclude_not_owned)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 
$exclude_not_owned = true; // bool | 

try {
    $result = $apiInstance->getAppStoreApps($search, $page, $limit, $exclude_not_owned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->getAppStoreApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **exclude_not_owned** | **bool**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultAppStoreAppSummary**](../Model/RestApiPaginationResultAppStoreAppSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\EndUserFeesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEndUserFeeConfig**](EndUserFeesApi.md#createEndUserFeeConfig) | **POST** /api/v1.0/{appId}/stores/{storeId}/end-user-fees | 
[**getEndUserFeesForStore**](EndUserFeesApi.md#getEndUserFeesForStore) | **GET** /api/v1.0/{appId}/stores/{storeId}/end-user-fees | 


# **createEndUserFeeConfig**
> object createEndUserFeeConfig($input, $app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EndUserFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Flipdish\\Client\Models\CreateEndUserFeeConfig(); // \Flipdish\\Client\Models\CreateEndUserFeeConfig | 
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->createEndUserFeeConfig($input, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndUserFeesApi->createEndUserFeeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Flipdish\\Client\Models\CreateEndUserFeeConfig**](../Model/CreateEndUserFeeConfig.md)|  |
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEndUserFeesForStore**
> \Flipdish\\Client\Models\RestApiResultGetEndUserFeeConfigsResponse getEndUserFeesForStore($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EndUserFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getEndUserFeesForStore($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndUserFeesApi->getEndUserFeesForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultGetEndUserFeeConfigsResponse**](../Model/RestApiResultGetEndUserFeeConfigsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


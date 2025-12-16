# Flipdish\\Client\TipsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tipConfigGet**](TipsApi.md#tipConfigGet) | **GET** /api/v1.0/stores/{storeId}/tipconfig | 
[**tipConfigUpsert**](TipsApi.md#tipConfigUpsert) | **POST** /api/v1.0/stores/{storeId}/tipconfig | 


# **tipConfigGet**
> \Flipdish\\Client\Models\RestApiResultTipConfiguration tipConfigGet($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\TipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $result = $apiInstance->tipConfigGet($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipsApi->tipConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultTipConfiguration**](../Model/RestApiResultTipConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tipConfigUpsert**
> \Flipdish\\Client\Models\RestApiResultTipConfiguration tipConfigUpsert($store_id, $update_config)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\TipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$update_config = new \Flipdish\\Client\Models\UpdateTipConfiguration(); // \Flipdish\\Client\Models\UpdateTipConfiguration | 

try {
    $result = $apiInstance->tipConfigUpsert($store_id, $update_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TipsApi->tipConfigUpsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **update_config** | [**\Flipdish\\Client\Models\UpdateTipConfiguration**](../Model/UpdateTipConfiguration.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultTipConfiguration**](../Model/RestApiResultTipConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


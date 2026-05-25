# Flipdish\\Client\LightspeedApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateMenu**](LightspeedApi.md#generateMenu) | **POST** /api/v1.0/lightspeed/{storeId}/menu/generate | 
[**getStoreSettings**](LightspeedApi.md#getStoreSettings) | **GET** /api/v1.0/lightspeed/{storeId}/settings | 
[**saveStoreSettings**](LightspeedApi.md#saveStoreSettings) | **POST** /api/v1.0/lightspeed/{storeId}/settings | 


# **generateMenu**
> generateMenu($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LightspeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $apiInstance->generateMenu($store_id);
} catch (Exception $e) {
    echo 'Exception when calling LightspeedApi->generateMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreSettings**
> \Flipdish\\Client\Models\RestApiResultLightspeedSettings getStoreSettings($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LightspeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $result = $apiInstance->getStoreSettings($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightspeedApi->getStoreSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLightspeedSettings**](../Model/RestApiResultLightspeedSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveStoreSettings**
> \Flipdish\\Client\Models\RestApiResultLightspeedSettings saveStoreSettings($store_id, $lightspeed_settings)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LightspeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$lightspeed_settings = new \Flipdish\\Client\Models\LightspeedSettings(); // \Flipdish\\Client\Models\LightspeedSettings | 

try {
    $result = $apiInstance->saveStoreSettings($store_id, $lightspeed_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightspeedApi->saveStoreSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **lightspeed_settings** | [**\Flipdish\\Client\Models\LightspeedSettings**](../Model/LightspeedSettings.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLightspeedSettings**](../Model/RestApiResultLightspeedSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


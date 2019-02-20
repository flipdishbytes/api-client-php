# Flipdish\Client\LightspeedApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lightspeedGenerateMenu**](LightspeedApi.md#lightspeedGenerateMenu) | **POST** /api/v1.0/lightspeed/{storeId}/menu/generate | 
[**lightspeedGetStoreSettings**](LightspeedApi.md#lightspeedGetStoreSettings) | **GET** /api/v1.0/lightspeed/{storeId}/settings | 
[**lightspeedSaveStoreSettings**](LightspeedApi.md#lightspeedSaveStoreSettings) | **POST** /api/v1.0/lightspeed/{storeId}/settings | 


# **lightspeedGenerateMenu**
> object lightspeedGenerateMenu($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\LightspeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $result = $apiInstance->lightspeedGenerateMenu($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightspeedApi->lightspeedGenerateMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lightspeedGetStoreSettings**
> \Flipdish\Client\Models\RestApiResultLightspeedSettings lightspeedGetStoreSettings($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\LightspeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $result = $apiInstance->lightspeedGetStoreSettings($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightspeedApi->lightspeedGetStoreSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\Client\Models\RestApiResultLightspeedSettings**](../Model/RestApiResultLightspeedSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lightspeedSaveStoreSettings**
> \Flipdish\Client\Models\RestApiResultLightspeedSettings lightspeedSaveStoreSettings($store_id, $lightspeed_settings)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\LightspeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$lightspeed_settings = new \Flipdish\Client\Models\LightspeedSettings(); // \Flipdish\Client\Models\LightspeedSettings | 

try {
    $result = $apiInstance->lightspeedSaveStoreSettings($store_id, $lightspeed_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightspeedApi->lightspeedSaveStoreSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **lightspeed_settings** | [**\Flipdish\Client\Models\LightspeedSettings**](../Model/LightspeedSettings.md)|  |

### Return type

[**\Flipdish\Client\Models\RestApiResultLightspeedSettings**](../Model/RestApiResultLightspeedSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


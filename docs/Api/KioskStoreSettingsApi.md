# Flipdish\\Client\KioskStoreSettingsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllKioskSettingsForStore**](KioskStoreSettingsApi.md#getAllKioskSettingsForStore) | **GET** /api/v1.0/{appId}/kiosksettings/store/{storeId} | 
[**getAllStoreSettingsForKioskHydra**](KioskStoreSettingsApi.md#getAllStoreSettingsForKioskHydra) | **GET** /api/v1.0/kioskstoresettings | 
[**updateCashSettingForKiosk**](KioskStoreSettingsApi.md#updateCashSettingForKiosk) | **POST** /api/v1.0/{appId}/kiosksettings/cash | 


# **getAllKioskSettingsForStore**
> \Flipdish\\Client\Models\RestApiResultStoreKioskSettings getAllKioskSettingsForStore($store_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\KioskStoreSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAllKioskSettingsForStore($store_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KioskStoreSettingsApi->getAllKioskSettingsForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStoreKioskSettings**](../Model/RestApiResultStoreKioskSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllStoreSettingsForKioskHydra**
> \Flipdish\\Client\Models\RestApiResultKioskStoreSettings getAllStoreSettingsForKioskHydra()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\KioskStoreSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllStoreSettingsForKioskHydra();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KioskStoreSettingsApi->getAllStoreSettingsForKioskHydra: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiResultKioskStoreSettings**](../Model/RestApiResultKioskStoreSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCashSettingForKiosk**
> \Flipdish\\Client\Models\RestApiResultKioskCashSetting updateCashSettingForKiosk($app_id, $device_id, $is_cash_enabled)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\KioskStoreSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$is_cash_enabled = true; // bool | 

try {
    $result = $apiInstance->updateCashSettingForKiosk($app_id, $device_id, $is_cash_enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KioskStoreSettingsApi->updateCashSettingForKiosk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |
 **is_cash_enabled** | **bool**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultKioskCashSetting**](../Model/RestApiResultKioskCashSetting.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


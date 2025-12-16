# Flipdish\\Client\DeviceApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignDevice**](DeviceApi.md#assignDevice) | **POST** /api/v1.0/{appId}/devices/assign | 
[**enrollDevice**](DeviceApi.md#enrollDevice) | **POST** /api/v1.0/{appId}/devices/enroll | 
[**getDeviceDetails**](DeviceApi.md#getDeviceDetails) | **GET** /api/v1.0/{appId}/devices/device/{deviceModel}/{deviceId} | 
[**searchDevices**](DeviceApi.md#searchDevices) | **GET** /api/v1.0/{appId}/devices/search | 


# **assignDevice**
> \Flipdish\\Client\Models\RestApiResultClientDeviceEnrollmentResult assignDevice($app_id, $assign_device_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$assign_device_request = new \Flipdish\\Client\Models\ClientDeviceAssignEnrolledDevice(); // \Flipdish\\Client\Models\ClientDeviceAssignEnrolledDevice | 

try {
    $result = $apiInstance->assignDevice($app_id, $assign_device_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->assignDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **assign_device_request** | [**\Flipdish\\Client\Models\ClientDeviceAssignEnrolledDevice**](../Model/ClientDeviceAssignEnrolledDevice.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultClientDeviceEnrollmentResult**](../Model/RestApiResultClientDeviceEnrollmentResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollDevice**
> \Flipdish\\Client\Models\RestApiResultClientDeviceEnrollmentResult enrollDevice($app_id, $device_enrollment_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_enrollment_request = new \Flipdish\\Client\Models\ClientDeviceEnroll(); // \Flipdish\\Client\Models\ClientDeviceEnroll | 

try {
    $result = $apiInstance->enrollDevice($app_id, $device_enrollment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->enrollDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_enrollment_request** | [**\Flipdish\\Client\Models\ClientDeviceEnroll**](../Model/ClientDeviceEnroll.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultClientDeviceEnrollmentResult**](../Model/RestApiResultClientDeviceEnrollmentResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceDetails**
> \Flipdish\\Client\Models\RestApiResultClientDevice getDeviceDetails($app_id, $device_model, $device_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_model = "device_model_example"; // string | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->getDeviceDetails($app_id, $device_model, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->getDeviceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_model** | **string**|  |
 **device_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultClientDevice**](../Model/RestApiResultClientDevice.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDevices**
> \Flipdish\\Client\Models\RestApiArrayResultClientDeviceSummary searchDevices($app_id, $store_id, $device_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$device_model = "device_model_example"; // string | 

try {
    $result = $apiInstance->searchDevices($app_id, $store_id, $device_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->searchDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  | [optional]
 **device_model** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultClientDeviceSummary**](../Model/RestApiArrayResultClientDeviceSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


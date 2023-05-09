# Flipdish\\Client\DeliveryTrackingApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignDriverToOrder**](DeliveryTrackingApi.md#assignDriverToOrder) | **POST** /api/v1.0/{appId}/drivers/{driverId}/orders/{orderId} | 
[**assignDriverToOrders**](DeliveryTrackingApi.md#assignDriverToOrders) | **POST** /api/v1.0/{appId}/drivers/{driverId}/orders | 
[**getDrivers**](DeliveryTrackingApi.md#getDrivers) | **GET** /api/v1.0/{appId}/drivers | 
[**inviteDriverToApp**](DeliveryTrackingApi.md#inviteDriverToApp) | **POST** /api/v1.0/{appId}/drivers | 
[**removeDriverFromApp**](DeliveryTrackingApi.md#removeDriverFromApp) | **DELETE** /api/v1.0/{appId}/drivers/{driverId} | 
[**unassignDriverFromOrder**](DeliveryTrackingApi.md#unassignDriverFromOrder) | **DELETE** /api/v1.0/{appId}/orders/{orderId}/driver | 


# **assignDriverToOrder**
> assignDriverToOrder($app_id, $order_id, $driver_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$order_id = 56; // int | 
$driver_id = 56; // int | 

try {
    $apiInstance->assignDriverToOrder($app_id, $order_id, $driver_id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTrackingApi->assignDriverToOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_id** | **int**|  |
 **driver_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignDriverToOrders**
> assignDriverToOrders($app_id, $driver_id, $order_id_and_sequence_numbers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$driver_id = 56; // int | 
$order_id_and_sequence_numbers = array(new \Flipdish\\Client\Models\OrderIdAndSequenceNumber()); // \Flipdish\\Client\Models\OrderIdAndSequenceNumber[] | 

try {
    $apiInstance->assignDriverToOrders($app_id, $driver_id, $order_id_and_sequence_numbers);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTrackingApi->assignDriverToOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **driver_id** | **int**|  |
 **order_id_and_sequence_numbers** | [**\Flipdish\\Client\Models\OrderIdAndSequenceNumber[]**](../Model/OrderIdAndSequenceNumber.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDrivers**
> \Flipdish\\Client\Models\RestApiArrayResultDriver getDrivers($app_id, $name, $phone_number, $store_id, $presence)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$name = "name_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$store_id = 56; // int | 
$presence = "presence_example"; // string | 

try {
    $result = $apiInstance->getDrivers($app_id, $name, $phone_number, $store_id, $presence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTrackingApi->getDrivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **name** | **string**|  | [optional]
 **phone_number** | **string**|  | [optional]
 **store_id** | **int**|  | [optional]
 **presence** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultDriver**](../Model/RestApiArrayResultDriver.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteDriverToApp**
> \Flipdish\\Client\Models\RestApiResultDriver inviteDriverToApp($app_id, $driver_invitation)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$driver_invitation = new \Flipdish\\Client\Models\DriverInvitation(); // \Flipdish\\Client\Models\DriverInvitation | 

try {
    $result = $apiInstance->inviteDriverToApp($app_id, $driver_invitation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTrackingApi->inviteDriverToApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **driver_invitation** | [**\Flipdish\\Client\Models\DriverInvitation**](../Model/DriverInvitation.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultDriver**](../Model/RestApiResultDriver.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDriverFromApp**
> removeDriverFromApp($app_id, $driver_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$driver_id = 56; // int | 

try {
    $apiInstance->removeDriverFromApp($app_id, $driver_id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTrackingApi->removeDriverFromApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **driver_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignDriverFromOrder**
> unassignDriverFromOrder($app_id, $order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$order_id = 56; // int | 

try {
    $apiInstance->unassignDriverFromOrder($app_id, $order_id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTrackingApi->unassignDriverFromOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


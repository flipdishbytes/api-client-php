# Flipdish\\Client\DeliveryTrackingApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignDriverToOrder**](DeliveryTrackingApi.md#assignDriverToOrder) | **POST** /api/v1.0/{appId}/drivers/{driverId}/orders/{orderId} | [PRIVATE] Assign driver to order
[**assignDriverToOrders**](DeliveryTrackingApi.md#assignDriverToOrders) | **POST** /api/v1.0/{appId}/drivers/{driverId}/orders | Assign driver to multiple orders
[**getDrivers**](DeliveryTrackingApi.md#getDrivers) | **GET** /api/v1.0/{appId}/drivers | [PRIVATE] Get drivers by App
[**inviteDriverToApp**](DeliveryTrackingApi.md#inviteDriverToApp) | **POST** /api/v1.0/{appId}/drivers | [PRIVATE] Invite driver
[**removeDriverFromApp**](DeliveryTrackingApi.md#removeDriverFromApp) | **DELETE** /api/v1.0/{appId}/drivers/{driverId} | [PRIVATE] Unassign driver from app
[**unassignDriverFromOrder**](DeliveryTrackingApi.md#unassignDriverFromOrder) | **DELETE** /api/v1.0/{appId}/orders/{orderId}/driver | [PRIVATE] Unassign driver from order


# **assignDriverToOrder**
> assignDriverToOrder($app_id, $order_id, $driver_id)

[PRIVATE] Assign driver to order

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
$app_id = "app_id_example"; // string | Application identifier
$order_id = 56; // int | Order Id
$driver_id = 56; // int | Driver Id

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
 **app_id** | **string**| Application identifier |
 **order_id** | **int**| Order Id |
 **driver_id** | **int**| Driver Id |

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

Assign driver to multiple orders

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
$app_id = "app_id_example"; // string | Application identifier
$driver_id = 56; // int | Driver Id
$order_id_and_sequence_numbers = array(new \Flipdish\\Client\Models\OrderIdAndSequenceNumber()); // \Flipdish\\Client\Models\OrderIdAndSequenceNumber[] | Array of object containing OrderId and Sequence

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
 **app_id** | **string**| Application identifier |
 **driver_id** | **int**| Driver Id |
 **order_id_and_sequence_numbers** | [**\Flipdish\\Client\Models\OrderIdAndSequenceNumber[]**](../Model/OrderIdAndSequenceNumber.md)| Array of object containing OrderId and Sequence |

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

[PRIVATE] Get drivers by App

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
$app_id = "app_id_example"; // string | Application identifier
$name = "name_example"; // string | Driver's username
$phone_number = "phone_number_example"; // string | Driver's phone number
$store_id = 56; // int | Store Id
$presence = "presence_example"; // string | Offline/Online

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
 **app_id** | **string**| Application identifier |
 **name** | **string**| Driver&#39;s username | [optional]
 **phone_number** | **string**| Driver&#39;s phone number | [optional]
 **store_id** | **int**| Store Id | [optional]
 **presence** | **string**| Offline/Online | [optional]

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

[PRIVATE] Invite driver

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
$app_id = "app_id_example"; // string | Application identifier
$driver_invitation = new \Flipdish\\Client\Models\DriverInvitation(); // \Flipdish\\Client\Models\DriverInvitation | Driver invitation model

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
 **app_id** | **string**| Application identifier |
 **driver_invitation** | [**\Flipdish\\Client\Models\DriverInvitation**](../Model/DriverInvitation.md)| Driver invitation model |

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

[PRIVATE] Unassign driver from app

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
$app_id = "app_id_example"; // string | Application identifier
$driver_id = 56; // int | Driver Id

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
 **app_id** | **string**| Application identifier |
 **driver_id** | **int**| Driver Id |

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

[PRIVATE] Unassign driver from order

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
$app_id = "app_id_example"; // string | Application identifier
$order_id = 56; // int | Order Id

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
 **app_id** | **string**| Application identifier |
 **order_id** | **int**| Order Id |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


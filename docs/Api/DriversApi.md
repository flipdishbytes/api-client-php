# Flipdish\\Client\DriversApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDriverNotificationToken**](DriversApi.md#addDriverNotificationToken) | **POST** /api/v1.0/drivers/token | 
[**deleteDriverProfileImage**](DriversApi.md#deleteDriverProfileImage) | **DELETE** /api/v1.0/drivers/profile/image | 
[**driverLogin**](DriversApi.md#driverLogin) | **POST** /api/v1.0/drivers/login | 
[**driverRequestLoginCodeSms**](DriversApi.md#driverRequestLoginCodeSms) | **POST** /api/v1.0/drivers/pin | 
[**getDriverProfile**](DriversApi.md#getDriverProfile) | **GET** /api/v1.0/drivers/profile | 
[**getStoresForDriver**](DriversApi.md#getStoresForDriver) | **GET** /api/v1.0/drivers/assignedstores | 
[**removeDriverNotificationToken**](DriversApi.md#removeDriverNotificationToken) | **DELETE** /api/v1.0/drivers/token | 
[**setDriverPresenceForStore**](DriversApi.md#setDriverPresenceForStore) | **POST** /api/v1.0/drivers/stores/{storeId}/presence/{presence} | 
[**setDriverProfileImage**](DriversApi.md#setDriverProfileImage) | **POST** /api/v1.0/drivers/profile/image | 
[**updateDeliveryTrackingStatus**](DriversApi.md#updateDeliveryTrackingStatus) | **POST** /api/v1.0/orders/{orderId}/tracking/{deliveryTrackingStatus} | 
[**updateDriverProfile**](DriversApi.md#updateDriverProfile) | **POST** /api/v1.0/drivers/profile | 


# **addDriverNotificationToken**
> addDriverNotificationToken($update_driver_token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_driver_token = new \Flipdish\\Client\Models\UpdateDriverNotificationToken(); // \Flipdish\\Client\Models\UpdateDriverNotificationToken | 

try {
    $apiInstance->addDriverNotificationToken($update_driver_token);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->addDriverNotificationToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_driver_token** | [**\Flipdish\\Client\Models\UpdateDriverNotificationToken**](../Model/UpdateDriverNotificationToken.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDriverProfileImage**
> deleteDriverProfileImage()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteDriverProfileImage();
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->deleteDriverProfileImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driverLogin**
> driverLogin($driver_login_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_login_model = new \Flipdish\\Client\Models\DriverLoginModel(); // \Flipdish\\Client\Models\DriverLoginModel | 

try {
    $apiInstance->driverLogin($driver_login_model);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driverLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_login_model** | [**\Flipdish\\Client\Models\DriverLoginModel**](../Model/DriverLoginModel.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driverRequestLoginCodeSms**
> driverRequestLoginCodeSms($driver_request_login_pin_model)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_request_login_pin_model = new \Flipdish\\Client\Models\DriverRequestLoginPinModel(); // \Flipdish\\Client\Models\DriverRequestLoginPinModel | 

try {
    $apiInstance->driverRequestLoginCodeSms($driver_request_login_pin_model);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driverRequestLoginCodeSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_request_login_pin_model** | [**\Flipdish\\Client\Models\DriverRequestLoginPinModel**](../Model/DriverRequestLoginPinModel.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDriverProfile**
> \Flipdish\\Client\Models\RestApiResultDriver getDriverProfile()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDriverProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getDriverProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiResultDriver**](../Model/RestApiResultDriver.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresForDriver**
> \Flipdish\\Client\Models\RestApiArrayResultDriverStore getStoresForDriver()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStoresForDriver();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->getStoresForDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultDriverStore**](../Model/RestApiArrayResultDriverStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDriverNotificationToken**
> removeDriverNotificationToken($remove_driver_token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remove_driver_token = new \Flipdish\\Client\Models\UpdateDriverNotificationToken(); // \Flipdish\\Client\Models\UpdateDriverNotificationToken | 

try {
    $apiInstance->removeDriverNotificationToken($remove_driver_token);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->removeDriverNotificationToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remove_driver_token** | [**\Flipdish\\Client\Models\UpdateDriverNotificationToken**](../Model/UpdateDriverNotificationToken.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDriverPresenceForStore**
> setDriverPresenceForStore($store_id, $presence)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$presence = "presence_example"; // string | 

try {
    $apiInstance->setDriverPresenceForStore($store_id, $presence);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->setDriverPresenceForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **presence** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDriverProfileImage**
> \Flipdish\\Client\Models\RestApiStringResult setDriverProfileImage()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->setDriverProfileImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->setDriverProfileImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeliveryTrackingStatus**
> \Flipdish\\Client\Models\RestApiStringResult updateDeliveryTrackingStatus($order_id, $delivery_tracking_status)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 
$delivery_tracking_status = "delivery_tracking_status_example"; // string | 

try {
    $result = $apiInstance->updateDeliveryTrackingStatus($order_id, $delivery_tracking_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->updateDeliveryTrackingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **delivery_tracking_status** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDriverProfile**
> updateDriverProfile($update_driver_profile)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DriversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_driver_profile = new \Flipdish\\Client\Models\UpdateDriverProfileModel(); // \Flipdish\\Client\Models\UpdateDriverProfileModel | 

try {
    $apiInstance->updateDriverProfile($update_driver_profile);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->updateDriverProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_driver_profile** | [**\Flipdish\\Client\Models\UpdateDriverProfileModel**](../Model/UpdateDriverProfileModel.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


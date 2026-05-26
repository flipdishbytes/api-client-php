# Flipdish\\Client\DriversApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**driversAddDriverNotificationToken**](DriversApi.md#driversAddDriverNotificationToken) | **POST** /api/v1.0/drivers/token | 
[**driversDeleteDriverProfileImage**](DriversApi.md#driversDeleteDriverProfileImage) | **DELETE** /api/v1.0/drivers/profile/image | 
[**driversDriverLogin**](DriversApi.md#driversDriverLogin) | **POST** /api/v1.0/drivers/login | 
[**driversDriverRequestLoginCodeSms**](DriversApi.md#driversDriverRequestLoginCodeSms) | **POST** /api/v1.0/drivers/pin | 
[**driversGetDriverProfile**](DriversApi.md#driversGetDriverProfile) | **GET** /api/v1.0/drivers/profile | 
[**driversGetStoresForDriver**](DriversApi.md#driversGetStoresForDriver) | **GET** /api/v1.0/drivers/assignedstores | 
[**driversRemoveDriverNotificationToken**](DriversApi.md#driversRemoveDriverNotificationToken) | **DELETE** /api/v1.0/drivers/token | 
[**driversSetDriverPresenceForStore**](DriversApi.md#driversSetDriverPresenceForStore) | **POST** /api/v1.0/drivers/stores/{storeId}/presence/{presence} | 
[**driversSetDriverProfileImage**](DriversApi.md#driversSetDriverProfileImage) | **POST** /api/v1.0/drivers/profile/image | 
[**driversUpdateDeliveryTrackingStatus**](DriversApi.md#driversUpdateDeliveryTrackingStatus) | **POST** /api/v1.0/orders/{orderId}/tracking/{deliveryTrackingStatus} | 
[**driversUpdateDriverProfile**](DriversApi.md#driversUpdateDriverProfile) | **POST** /api/v1.0/drivers/profile | 


# **driversAddDriverNotificationToken**
> object driversAddDriverNotificationToken($update_driver_token)



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
    $result = $apiInstance->driversAddDriverNotificationToken($update_driver_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversAddDriverNotificationToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_driver_token** | [**\Flipdish\\Client\Models\UpdateDriverNotificationToken**](../Model/UpdateDriverNotificationToken.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversDeleteDriverProfileImage**
> object driversDeleteDriverProfileImage()



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
    $result = $apiInstance->driversDeleteDriverProfileImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversDeleteDriverProfileImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversDriverLogin**
> object driversDriverLogin($driver_login_model)



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
    $result = $apiInstance->driversDriverLogin($driver_login_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversDriverLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_login_model** | [**\Flipdish\\Client\Models\DriverLoginModel**](../Model/DriverLoginModel.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversDriverRequestLoginCodeSms**
> object driversDriverRequestLoginCodeSms($driver_request_login_pin_model)



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
    $result = $apiInstance->driversDriverRequestLoginCodeSms($driver_request_login_pin_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversDriverRequestLoginCodeSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_request_login_pin_model** | [**\Flipdish\\Client\Models\DriverRequestLoginPinModel**](../Model/DriverRequestLoginPinModel.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversGetDriverProfile**
> object driversGetDriverProfile()



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
    $result = $apiInstance->driversGetDriverProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversGetDriverProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversGetStoresForDriver**
> object driversGetStoresForDriver()



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
    $result = $apiInstance->driversGetStoresForDriver();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversGetStoresForDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversRemoveDriverNotificationToken**
> object driversRemoveDriverNotificationToken($remove_driver_token)



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
    $result = $apiInstance->driversRemoveDriverNotificationToken($remove_driver_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversRemoveDriverNotificationToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remove_driver_token** | [**\Flipdish\\Client\Models\UpdateDriverNotificationToken**](../Model/UpdateDriverNotificationToken.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversSetDriverPresenceForStore**
> object driversSetDriverPresenceForStore($store_id, $presence)



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
    $result = $apiInstance->driversSetDriverPresenceForStore($store_id, $presence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversSetDriverPresenceForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **presence** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversSetDriverProfileImage**
> object driversSetDriverProfileImage()



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
    $result = $apiInstance->driversSetDriverProfileImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversSetDriverProfileImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversUpdateDeliveryTrackingStatus**
> object driversUpdateDeliveryTrackingStatus($order_id, $delivery_tracking_status)



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
    $result = $apiInstance->driversUpdateDeliveryTrackingStatus($order_id, $delivery_tracking_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversUpdateDeliveryTrackingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **delivery_tracking_status** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversUpdateDriverProfile**
> object driversUpdateDriverProfile($update_driver_profile)



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
    $result = $apiInstance->driversUpdateDriverProfile($update_driver_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriversApi->driversUpdateDriverProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_driver_profile** | [**\Flipdish\\Client\Models\UpdateDriverProfileModel**](../Model/UpdateDriverProfileModel.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


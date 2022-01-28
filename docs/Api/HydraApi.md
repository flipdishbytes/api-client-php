# Flipdish\\Client\HydraApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignEmv**](HydraApi.md#assignEmv) | **POST** /api/v1.0/{appId}/hydra/emvterminal/assign/{hydraConfigId}/{emvTerminalId} | Assign an EMV terminal to a kiosk
[**attachStoreToKiosk**](HydraApi.md#attachStoreToKiosk) | **POST** /api/v1.0/{appId}/AttachStoreToKiosk/{deviceId}/store/{storeId} | [Private]
[**attachStoreToTerminal**](HydraApi.md#attachStoreToTerminal) | **POST** /api/v1.0/{appId}/hydra/{deviceId}/attach/{storeId} | [Private]
[**cancelEmvPayment**](HydraApi.md#cancelEmvPayment) | **POST** /api/v1.0/{appId}/hydra/cancelemvpayment/{orderId} | 
[**detachStoreFromTerminal**](HydraApi.md#detachStoreFromTerminal) | **POST** /api/v1.0/{appId}/hydra/{deviceId}/detach/{storeId} | [Private]
[**getAttachedDevice**](HydraApi.md#getAttachedDevice) | **GET** /api/v1.0/{appId}/hydra/{deviceType}/{deviceId} | [Private]
[**getAttachedDevices**](HydraApi.md#getAttachedDevices) | **GET** /api/v1.0/{appId}/hydra/{deviceType}/list | [Private]
[**getEMVTerminalDetails**](HydraApi.md#getEMVTerminalDetails) | **GET** /api/v1.0/{appId}/hydra/emvterminal | [Private]
[**getEmvOrderState**](HydraApi.md#getEmvOrderState) | **GET** /api/v1.0/{appId}/hydra/emvorderstate/{orderId} | [Private]
[**getKioskCashPaymentSettings**](HydraApi.md#getKioskCashPaymentSettings) | **GET** /api/v1.0/{appId}/kioskcashsettings/{deviceId} | Get the status of Cash Payment Methon on Kisok
[**getRegistration**](HydraApi.md#getRegistration) | **GET** /api/v1.0/hydra/registration | 
[**getSettings**](HydraApi.md#getSettings) | **GET** /api/v1.0/hydra/settings | [Private]
[**hydraCreateEmv**](HydraApi.md#hydraCreateEmv) | **POST** /api/v1.0/{appId}/emvterminals | [Private]
[**hydraDeleteEmv**](HydraApi.md#hydraDeleteEmv) | **DELETE** /api/v1.0/{appId}/emvterminals/{id} | [Private]
[**hydraDetachStoreFromKiosk**](HydraApi.md#hydraDetachStoreFromKiosk) | **DELETE** /api/v1.0/{appId}/DetachStoreFromKiosk/{deviceId}/store/{storeId} | [Private]
[**hydraGetEmvsForAppId**](HydraApi.md#hydraGetEmvsForAppId) | **GET** /api/v1.0/{appId}/emvterminals | List EMV terminals belonging to the given AppNameId
[**loginWithDeviceId**](HydraApi.md#loginWithDeviceId) | **POST** /api/v1.0/hydra/{deviceId}/login | [Private]
[**register**](HydraApi.md#register) | **POST** /api/v1.0/{appId}/hydra/registration | [Private]
[**unAssign**](HydraApi.md#unAssign) | **DELETE** /api/v1.0/{appId}/hydra/{deviceId}/registration | [Private]
[**unassignEmv**](HydraApi.md#unassignEmv) | **POST** /api/v1.0/{appId}/hydra/emvterminal/unassign/{hydraConfigId} | Unassign the currently assigned EMV terminal from a kiosk
[**updateKioskCashVisibilitySettings**](HydraApi.md#updateKioskCashVisibilitySettings) | **POST** /api/v1.0/{appId}/kioskupdatecashsettings | Update the Cash Payment Methon Visiability on Kisok


# **assignEmv**
> assignEmv($app_id, $hydra_config_id, $emv_terminal_id)

Assign an EMV terminal to a kiosk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$hydra_config_id = 56; // int | 
$emv_terminal_id = 56; // int | 

try {
    $apiInstance->assignEmv($app_id, $hydra_config_id, $emv_terminal_id);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->assignEmv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **hydra_config_id** | **int**|  |
 **emv_terminal_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachStoreToKiosk**
> \Flipdish\\Client\Models\RestApiResultHydraStatus attachStoreToKiosk($app_id, $store_id, $device_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->attachStoreToKiosk($app_id, $store_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->attachStoreToKiosk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **device_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraStatus**](../Model/RestApiResultHydraStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachStoreToTerminal**
> \Flipdish\\Client\Models\RestApiResultHydraStatus attachStoreToTerminal($app_id, $device_id, $store_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->attachStoreToTerminal($app_id, $device_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->attachStoreToTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraStatus**](../Model/RestApiResultHydraStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelEmvPayment**
> cancelEmvPayment($order_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->cancelEmvPayment($order_id, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->cancelEmvPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachStoreFromTerminal**
> \Flipdish\\Client\Models\RestApiResultHydraStatus detachStoreFromTerminal($app_id, $device_id, $store_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->detachStoreFromTerminal($app_id, $device_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->detachStoreFromTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraStatus**](../Model/RestApiResultHydraStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachedDevice**
> \Flipdish\\Client\Models\RestApiResultHydraDeviceDetails getAttachedDevice($app_id, $device_type, $device_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_type = "device_type_example"; // string | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->getAttachedDevice($app_id, $device_type, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getAttachedDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_type** | **string**|  |
 **device_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraDeviceDetails**](../Model/RestApiResultHydraDeviceDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachedDevices**
> \Flipdish\\Client\Models\RestApiPaginationResultHydraDeviceDetails getAttachedDevices($app_id, $device_type, $page_index, $page_size, $store_id, $device_name, $device_serial)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_type = "device_type_example"; // string | 
$page_index = 56; // int | 
$page_size = 56; // int | 
$store_id = 56; // int | 
$device_name = "device_name_example"; // string | 
$device_serial = "device_serial_example"; // string | 

try {
    $result = $apiInstance->getAttachedDevices($app_id, $device_type, $page_index, $page_size, $store_id, $device_name, $device_serial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getAttachedDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_type** | **string**|  |
 **page_index** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **store_id** | **int**|  | [optional]
 **device_name** | **string**|  | [optional]
 **device_serial** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultHydraDeviceDetails**](../Model/RestApiPaginationResultHydraDeviceDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEMVTerminalDetails**
> \Flipdish\\Client\Models\RestApiResultPaymentTerminalDetails getEMVTerminalDetails($app_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getEMVTerminalDetails($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getEMVTerminalDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPaymentTerminalDetails**](../Model/RestApiResultPaymentTerminalDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmvOrderState**
> \Flipdish\\Client\Models\RestApiResultPaymentTerminalTransactionDetails getEmvOrderState($order_id, $app_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getEmvOrderState($order_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getEmvOrderState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPaymentTerminalTransactionDetails**](../Model/RestApiResultPaymentTerminalTransactionDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKioskCashPaymentSettings**
> \Flipdish\\Client\Models\RestApiArrayResultKioskCashPaymentSettings getKioskCashPaymentSettings($app_id, $device_id)

Get the status of Cash Payment Methon on Kisok

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->getKioskCashPaymentSettings($app_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getKioskCashPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultKioskCashPaymentSettings**](../Model/RestApiArrayResultKioskCashPaymentSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistration**
> \Flipdish\\Client\Models\RestApiResultHydraStatus getRegistration()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRegistration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraStatus**](../Model/RestApiResultHydraStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettings**
> \Flipdish\\Client\Models\RestApiResultHydraConfig getSettings()

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraConfig**](../Model/RestApiResultHydraConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hydraCreateEmv**
> object hydraCreateEmv($app_id, $emv)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$emv = new \Flipdish\\Client\Models\EmvTerminal(); // \Flipdish\\Client\Models\EmvTerminal | 

try {
    $result = $apiInstance->hydraCreateEmv($app_id, $emv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->hydraCreateEmv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **emv** | [**\Flipdish\\Client\Models\EmvTerminal**](../Model/EmvTerminal.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hydraDeleteEmv**
> object hydraDeleteEmv($app_id, $id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$id = 56; // int | 

try {
    $result = $apiInstance->hydraDeleteEmv($app_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->hydraDeleteEmv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hydraDetachStoreFromKiosk**
> \Flipdish\\Client\Models\RestApiResultHydraStatus hydraDetachStoreFromKiosk($app_id, $store_id, $device_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->hydraDetachStoreFromKiosk($app_id, $store_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->hydraDetachStoreFromKiosk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **device_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraStatus**](../Model/RestApiResultHydraStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hydraGetEmvsForAppId**
> \Flipdish\\Client\Models\RestApiArrayResultEmvTerminalWithAssignments hydraGetEmvsForAppId($app_id)

List EMV terminals belonging to the given AppNameId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->hydraGetEmvsForAppId($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->hydraGetEmvsForAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultEmvTerminalWithAssignments**](../Model/RestApiArrayResultEmvTerminalWithAssignments.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginWithDeviceId**
> loginWithDeviceId($device_id, $hydra_user_type, $serial_number)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = "device_id_example"; // string | 
$hydra_user_type = "hydra_user_type_example"; // string | 
$serial_number = "serial_number_example"; // string | 

try {
    $apiInstance->loginWithDeviceId($device_id, $hydra_user_type, $serial_number);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->loginWithDeviceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**|  |
 **hydra_user_type** | **string**|  | [optional]
 **serial_number** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> \Flipdish\\Client\Models\RestApiResultHydraStatus register($app_id, $hydra_registration)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$hydra_registration = new \Flipdish\\Client\Models\HydraRegistrationRequest(); // \Flipdish\\Client\Models\HydraRegistrationRequest | 

try {
    $result = $apiInstance->register($app_id, $hydra_registration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **hydra_registration** | [**\Flipdish\\Client\Models\HydraRegistrationRequest**](../Model/HydraRegistrationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultHydraStatus**](../Model/RestApiResultHydraStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unAssign**
> unAssign($app_id, $device_id)

[Private]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 

try {
    $apiInstance->unAssign($app_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->unAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignEmv**
> unassignEmv($app_id, $hydra_config_id)

Unassign the currently assigned EMV terminal from a kiosk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$hydra_config_id = 56; // int | 

try {
    $apiInstance->unassignEmv($app_id, $hydra_config_id);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->unassignEmv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **hydra_config_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKioskCashVisibilitySettings**
> updateKioskCashVisibilitySettings($app_id, $device_id, $is_cash_enabled)

Update the Cash Payment Methon Visiability on Kisok

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\HydraApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$is_cash_enabled = true; // bool | 

try {
    $apiInstance->updateKioskCashVisibilitySettings($app_id, $device_id, $is_cash_enabled);
} catch (Exception $e) {
    echo 'Exception when calling HydraApi->updateKioskCashVisibilitySettings: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


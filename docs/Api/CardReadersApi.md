# Flipdish\Client\CardReadersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizeStripeTerminal**](CardReadersApi.md#authorizeStripeTerminal) | **POST** /api/v1.0/cardreaders/authorize/stripe | Get Authorization Key for Stripe Terminal
[**authorizeStripeTerminal_0**](CardReadersApi.md#authorizeStripeTerminal_0) | **POST** /api/v1.0/{appId}/stripeterminal/authorize | Get Authorization Key for Stripe Terminal
[**getBluetoothTerminalStatus**](CardReadersApi.md#getBluetoothTerminalStatus) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/status | Get the status of the bluetooth terminal
[**initiateBluetoothTerminalDeviceUpdateCheck**](CardReadersApi.md#initiateBluetoothTerminalDeviceUpdateCheck) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/checkForUpdate | Trigger check for Bluetooth device update on Kiosk
[**initiateKioskBluetoothPairingMode**](CardReadersApi.md#initiateKioskBluetoothPairingMode) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/pair | Initiate stripe terminal pairing mode
[**initiateKioskUpdateInstallForBluetoothTerminal**](CardReadersApi.md#initiateKioskUpdateInstallForBluetoothTerminal) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/installUpdate | 
[**unpairCurrentlyPairedBluetoothDevice**](CardReadersApi.md#unpairCurrentlyPairedBluetoothDevice) | **DELETE** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/unpair | Unpair the currently paired stripe terminal


# **authorizeStripeTerminal**
> \Flipdish\Client\Models\RestApiResultStripeTerminalPrivateKey authorizeStripeTerminal()

Get Authorization Key for Stripe Terminal

Can only be called by Kiosk  [BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authorizeStripeTerminal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->authorizeStripeTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\Client\Models\RestApiResultStripeTerminalPrivateKey**](../Model/RestApiResultStripeTerminalPrivateKey.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authorizeStripeTerminal_0**
> \Flipdish\Client\Models\RestApiResultStripeTerminalPrivateKey authorizeStripeTerminal_0($app_id)

Get Authorization Key for Stripe Terminal

Can only be called by Kiosk  [BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->authorizeStripeTerminal_0($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->authorizeStripeTerminal_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiResultStripeTerminalPrivateKey**](../Model/RestApiResultStripeTerminalPrivateKey.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBluetoothTerminalStatus**
> \Flipdish\Client\Models\RestApiResultBluetoothTerminalStatus getBluetoothTerminalStatus($app_id, $device_id)

Get the status of the bluetooth terminal

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 

try {
    $result = $apiInstance->getBluetoothTerminalStatus($app_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->getBluetoothTerminalStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiResultBluetoothTerminalStatus**](../Model/RestApiResultBluetoothTerminalStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateBluetoothTerminalDeviceUpdateCheck**
> initiateBluetoothTerminalDeviceUpdateCheck($app_id, $device_id, $terminal_type)

Trigger check for Bluetooth device update on Kiosk

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$terminal_type = "terminal_type_example"; // string | 

try {
    $apiInstance->initiateBluetoothTerminalDeviceUpdateCheck($app_id, $device_id, $terminal_type);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->initiateBluetoothTerminalDeviceUpdateCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |
 **terminal_type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateKioskBluetoothPairingMode**
> initiateKioskBluetoothPairingMode($app_id, $device_id, $terminal_type)

Initiate stripe terminal pairing mode

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$terminal_type = "terminal_type_example"; // string | 

try {
    $apiInstance->initiateKioskBluetoothPairingMode($app_id, $device_id, $terminal_type);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->initiateKioskBluetoothPairingMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |
 **terminal_type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateKioskUpdateInstallForBluetoothTerminal**
> initiateKioskUpdateInstallForBluetoothTerminal($app_id, $device_id, $terminal_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$terminal_type = "terminal_type_example"; // string | 

try {
    $apiInstance->initiateKioskUpdateInstallForBluetoothTerminal($app_id, $device_id, $terminal_type);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->initiateKioskUpdateInstallForBluetoothTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **device_id** | **string**|  |
 **terminal_type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unpairCurrentlyPairedBluetoothDevice**
> unpairCurrentlyPairedBluetoothDevice($app_id, $device_id)

Unpair the currently paired stripe terminal

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 

try {
    $apiInstance->unpairCurrentlyPairedBluetoothDevice($app_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->unpairCurrentlyPairedBluetoothDevice: ', $e->getMessage(), PHP_EOL;
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


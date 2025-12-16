# Flipdish\\Client\CardReadersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCurrentlyInitiatedBluetoothDeviceUpdate**](CardReadersApi.md#cancelCurrentlyInitiatedBluetoothDeviceUpdate) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/cancelUpdate | 
[**cancelReaderAction**](CardReadersApi.md#cancelReaderAction) | **POST** /api/v1.0/{appId}/payments/terminals/stripe/{readerId}/cancel_action | 
[**cardReadersGetReader**](CardReadersApi.md#cardReadersGetReader) | **GET** /api/v1.0/{appId}/payments/terminals/stripe/{readerId} | 
[**generateStripeTerminalLocation**](CardReadersApi.md#generateStripeTerminalLocation) | **POST** /api/v1.0/{appId}/stripeterminal/location | 
[**getBluetoothTerminalStatus**](CardReadersApi.md#getBluetoothTerminalStatus) | **GET** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/status | 
[**getStripeConnectionToken**](CardReadersApi.md#getStripeConnectionToken) | **GET** /api/v1.0/{appId}/stripeterminal/connectiontoken | 
[**initiateBluetoothTerminalDeviceUpdateCheck**](CardReadersApi.md#initiateBluetoothTerminalDeviceUpdateCheck) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/checkForUpdate | 
[**initiateKioskBluetoothPairingMode**](CardReadersApi.md#initiateKioskBluetoothPairingMode) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/pair | 
[**initiateKioskBluetoothUpdateInstall**](CardReadersApi.md#initiateKioskBluetoothUpdateInstall) | **POST** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/{terminalType}/installUpdate | 
[**initiateReaderProcessPaymentIntent**](CardReadersApi.md#initiateReaderProcessPaymentIntent) | **POST** /api/v1.0/{appId}/payments/terminals/stripe/{readerId}/processPaymentIntent | 
[**registerStripeTerminal**](CardReadersApi.md#registerStripeTerminal) | **POST** /api/v1.0/{appId}/payments/terminals/stripe/register | 
[**unRegisterTerminal**](CardReadersApi.md#unRegisterTerminal) | **DELETE** /api/v1.0/{appId}/payments/terminals/stripe/unregister | 
[**unpairCurrentlyPairedBluetoothDevice**](CardReadersApi.md#unpairCurrentlyPairedBluetoothDevice) | **DELETE** /api/v1.0/{appId}/cardreaders/kiosk/{deviceId}/bluetooth/unpair | 


# **cancelCurrentlyInitiatedBluetoothDeviceUpdate**
> cancelCurrentlyInitiatedBluetoothDeviceUpdate($app_id, $device_id, $terminal_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$terminal_type = "terminal_type_example"; // string | 

try {
    $apiInstance->cancelCurrentlyInitiatedBluetoothDeviceUpdate($app_id, $device_id, $terminal_type);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->cancelCurrentlyInitiatedBluetoothDeviceUpdate: ', $e->getMessage(), PHP_EOL;
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

# **cancelReaderAction**
> \Flipdish\\Client\Models\RestApiResultCardReader cancelReaderAction($reader_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reader_id = "reader_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->cancelReaderAction($reader_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->cancelReaderAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reader_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCardReader**](../Model/RestApiResultCardReader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cardReadersGetReader**
> \Flipdish\\Client\Models\RestApiResultCardReader cardReadersGetReader($reader_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reader_id = "reader_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->cardReadersGetReader($reader_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->cardReadersGetReader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reader_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCardReader**](../Model/RestApiResultCardReader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateStripeTerminalLocation**
> \Flipdish\\Client\Models\RestApiResultStripeTerminalLocation generateStripeTerminalLocation($geo_point_request, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$geo_point_request = new \Flipdish\\Client\Models\GeoPointRequest(); // \Flipdish\\Client\Models\GeoPointRequest | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->generateStripeTerminalLocation($geo_point_request, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->generateStripeTerminalLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geo_point_request** | [**\Flipdish\\Client\Models\GeoPointRequest**](../Model/GeoPointRequest.md)|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStripeTerminalLocation**](../Model/RestApiResultStripeTerminalLocation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBluetoothTerminalStatus**
> \Flipdish\\Client\Models\RestApiResultBluetoothTerminalStatus getBluetoothTerminalStatus($app_id, $device_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
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

[**\Flipdish\\Client\Models\RestApiResultBluetoothTerminalStatus**](../Model/RestApiResultBluetoothTerminalStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStripeConnectionToken**
> \Flipdish\\Client\Models\RestApiResultStripeTerminalConnectionToken getStripeConnectionToken($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getStripeConnectionToken($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->getStripeConnectionToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStripeTerminalConnectionToken**](../Model/RestApiResultStripeTerminalConnectionToken.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateBluetoothTerminalDeviceUpdateCheck**
> initiateBluetoothTerminalDeviceUpdateCheck($app_id, $device_id, $terminal_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
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



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
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

# **initiateKioskBluetoothUpdateInstall**
> initiateKioskBluetoothUpdateInstall($app_id, $device_id, $terminal_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$device_id = "device_id_example"; // string | 
$terminal_type = "terminal_type_example"; // string | 

try {
    $apiInstance->initiateKioskBluetoothUpdateInstall($app_id, $device_id, $terminal_type);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->initiateKioskBluetoothUpdateInstall: ', $e->getMessage(), PHP_EOL;
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

# **initiateReaderProcessPaymentIntent**
> \Flipdish\\Client\Models\RestApiResultCardReader initiateReaderProcessPaymentIntent($request, $reader_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Flipdish\\Client\Models\ProcessPaymentIntentRequest(); // \Flipdish\\Client\Models\ProcessPaymentIntentRequest | 
$reader_id = "reader_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->initiateReaderProcessPaymentIntent($request, $reader_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->initiateReaderProcessPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Flipdish\\Client\Models\ProcessPaymentIntentRequest**](../Model/ProcessPaymentIntentRequest.md)|  |
 **reader_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCardReader**](../Model/RestApiResultCardReader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerStripeTerminal**
> \Flipdish\\Client\Models\RestApiResultCardReader registerStripeTerminal($request, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Flipdish\\Client\Models\CardReaderRegistrationRequest(); // \Flipdish\\Client\Models\CardReaderRegistrationRequest | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->registerStripeTerminal($request, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->registerStripeTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Flipdish\\Client\Models\CardReaderRegistrationRequest**](../Model/CardReaderRegistrationRequest.md)|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCardReader**](../Model/RestApiResultCardReader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unRegisterTerminal**
> \Flipdish\\Client\Models\RestApiResultCardReader unRegisterTerminal($request, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Flipdish\\Client\Models\UnRegisterCardReaderRequest(); // \Flipdish\\Client\Models\UnRegisterCardReaderRequest | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->unRegisterTerminal($request, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardReadersApi->unRegisterTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Flipdish\\Client\Models\UnRegisterCardReaderRequest**](../Model/UnRegisterCardReaderRequest.md)|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCardReader**](../Model/RestApiResultCardReader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unpairCurrentlyPairedBluetoothDevice**
> unpairCurrentlyPairedBluetoothDevice($app_id, $device_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CardReadersApi(
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


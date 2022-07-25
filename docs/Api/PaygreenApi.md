# Flipdish\\Client\PaygreenApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayGreenConfiguration**](PaygreenApi.md#createPayGreenConfiguration) | **POST** /api/v1.0/{appId}/restaurant-vouchers/paygreen | 
[**deletePaygreenConfiguration**](PaygreenApi.md#deletePaygreenConfiguration) | **DELETE** /api/v1.0/{appId}/restaurant-vouchers/paygreen/{paygreenConfigurationId} | 
[**getPaygreenConfigurations**](PaygreenApi.md#getPaygreenConfigurations) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen | 
[**getStoreAvailablePayGreenConfigurations**](PaygreenApi.md#getStoreAvailablePayGreenConfigurations) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores/{storeId}/available-configurations | 
[**getStorePayGreenConfiguration**](PaygreenApi.md#getStorePayGreenConfiguration) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores | 
[**getStorePayGreenConfiguration_**](PaygreenApi.md#getStorePayGreenConfiguration_) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores/{storeId} | 
[**listPayGreenConfigurations**](PaygreenApi.md#listPayGreenConfigurations) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/{paygreenConfigurationId} | 
[**updatePayGreenConfiguration**](PaygreenApi.md#updatePayGreenConfiguration) | **POST** /api/v1.0/{appId}/restaurant-vouchers/paygreen/{paygreenConfigurationId} | 
[**updateStorePayGreenConfiguration_**](PaygreenApi.md#updateStorePayGreenConfiguration_) | **POST** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores/{storeId} | 


# **createPayGreenConfiguration**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenConfiguration createPayGreenConfiguration($app_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$request = new \Flipdish\\Client\Models\CreatePayGreenConfigurationRequest(); // \Flipdish\\Client\Models\CreatePayGreenConfigurationRequest | 

try {
    $result = $apiInstance->createPayGreenConfiguration($app_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->createPayGreenConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **request** | [**\Flipdish\\Client\Models\CreatePayGreenConfigurationRequest**](../Model/CreatePayGreenConfigurationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenConfiguration**](../Model/RestApiResultRestaurantVoucherPaygreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaygreenConfiguration**
> object deletePaygreenConfiguration($app_id, $paygreen_configuration_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$paygreen_configuration_id = 56; // int | 

try {
    $result = $apiInstance->deletePaygreenConfiguration($app_id, $paygreen_configuration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->deletePaygreenConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **paygreen_configuration_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaygreenConfigurations**
> \Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPaygreenConfiguration getPaygreenConfigurations($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getPaygreenConfigurations($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->getPaygreenConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPaygreenConfiguration**](../Model/RestApiArrayResultRestaurantVoucherPaygreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreAvailablePayGreenConfigurations**
> \Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPaygreenConfigurationSummary getStoreAvailablePayGreenConfigurations($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getStoreAvailablePayGreenConfigurations($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->getStoreAvailablePayGreenConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPaygreenConfigurationSummary**](../Model/RestApiArrayResultRestaurantVoucherPaygreenConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorePayGreenConfiguration**
> \Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherEligibleStore getStorePayGreenConfiguration($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getStorePayGreenConfiguration($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->getStorePayGreenConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherEligibleStore**](../Model/RestApiArrayResultRestaurantVoucherEligibleStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorePayGreenConfiguration_**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenStoreConfiguration getStorePayGreenConfiguration_($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getStorePayGreenConfiguration_($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->getStorePayGreenConfiguration_: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenStoreConfiguration**](../Model/RestApiResultRestaurantVoucherPaygreenStoreConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayGreenConfigurations**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenConfiguration listPayGreenConfigurations($app_id, $paygreen_configuration_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$paygreen_configuration_id = 56; // int | 

try {
    $result = $apiInstance->listPayGreenConfigurations($app_id, $paygreen_configuration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->listPayGreenConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **paygreen_configuration_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenConfiguration**](../Model/RestApiResultRestaurantVoucherPaygreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayGreenConfiguration**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenConfiguration updatePayGreenConfiguration($app_id, $paygreen_configuration_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$paygreen_configuration_id = 56; // int | 
$request = new \Flipdish\\Client\Models\UpdatePayGreenConfigurationRequest(); // \Flipdish\\Client\Models\UpdatePayGreenConfigurationRequest | 

try {
    $result = $apiInstance->updatePayGreenConfiguration($app_id, $paygreen_configuration_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->updatePayGreenConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **paygreen_configuration_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\UpdatePayGreenConfigurationRequest**](../Model/UpdatePayGreenConfigurationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenConfiguration**](../Model/RestApiResultRestaurantVoucherPaygreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStorePayGreenConfiguration_**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenStoreConfiguration updateStorePayGreenConfiguration_($app_id, $store_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaygreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$request = new \Flipdish\\Client\Models\UpdateStorePaygreenConfigurationRequest(); // \Flipdish\\Client\Models\UpdateStorePaygreenConfigurationRequest | 

try {
    $result = $apiInstance->updateStorePayGreenConfiguration_($app_id, $store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygreenApi->updateStorePayGreenConfiguration_: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\UpdateStorePaygreenConfigurationRequest**](../Model/UpdateStorePaygreenConfigurationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPaygreenStoreConfiguration**](../Model/RestApiResultRestaurantVoucherPaygreenStoreConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\RestaurantVouchersPayGreenApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayGreenConfiguration**](RestaurantVouchersPayGreenApi.md#createPayGreenConfiguration) | **POST** /api/v1.0/{appId}/restaurant-vouchers/paygreen | 
[**deletePayGreenConfiguration**](RestaurantVouchersPayGreenApi.md#deletePayGreenConfiguration) | **DELETE** /api/v1.0/{appId}/restaurant-vouchers/paygreen/{paygreenConfigurationId} | 
[**getElegibleStores**](RestaurantVouchersPayGreenApi.md#getElegibleStores) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores | 
[**getPayGreenConfigurations**](RestaurantVouchersPayGreenApi.md#getPayGreenConfigurations) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen | 
[**getStoreAvailablePayGreenConfigurations**](RestaurantVouchersPayGreenApi.md#getStoreAvailablePayGreenConfigurations) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores/{storeId}/available-configurations | 
[**getStorePayGreenConfiguration_**](RestaurantVouchersPayGreenApi.md#getStorePayGreenConfiguration_) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores/{storeId} | 
[**listPayGreenConfigurations**](RestaurantVouchersPayGreenApi.md#listPayGreenConfigurations) | **GET** /api/v1.0/{appId}/restaurant-vouchers/paygreen/{paygreenConfigurationId} | 
[**updatePayGreenConfiguration**](RestaurantVouchersPayGreenApi.md#updatePayGreenConfiguration) | **POST** /api/v1.0/{appId}/restaurant-vouchers/paygreen/{paygreenConfigurationId} | 
[**updateStorePayGreenConfiguration_**](RestaurantVouchersPayGreenApi.md#updateStorePayGreenConfiguration_) | **POST** /api/v1.0/{appId}/restaurant-vouchers/paygreen/stores/{storeId} | 


# **createPayGreenConfiguration**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenConfiguration createPayGreenConfiguration($app_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
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
    echo 'Exception when calling RestaurantVouchersPayGreenApi->createPayGreenConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **request** | [**\Flipdish\\Client\Models\CreatePayGreenConfigurationRequest**](../Model/CreatePayGreenConfigurationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenConfiguration**](../Model/RestApiResultRestaurantVoucherPayGreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePayGreenConfiguration**
> object deletePayGreenConfiguration($app_id, $paygreen_configuration_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$paygreen_configuration_id = 56; // int | 

try {
    $result = $apiInstance->deletePayGreenConfiguration($app_id, $paygreen_configuration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantVouchersPayGreenApi->deletePayGreenConfiguration: ', $e->getMessage(), PHP_EOL;
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

# **getElegibleStores**
> \Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherEligibleStore getElegibleStores($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getElegibleStores($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantVouchersPayGreenApi->getElegibleStores: ', $e->getMessage(), PHP_EOL;
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

# **getPayGreenConfigurations**
> \Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPayGreenConfiguration getPayGreenConfigurations($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getPayGreenConfigurations($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantVouchersPayGreenApi->getPayGreenConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPayGreenConfiguration**](../Model/RestApiArrayResultRestaurantVoucherPayGreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreAvailablePayGreenConfigurations**
> \Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPayGreenConfigurationSummary getStoreAvailablePayGreenConfigurations($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
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
    echo 'Exception when calling RestaurantVouchersPayGreenApi->getStoreAvailablePayGreenConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestaurantVoucherPayGreenConfigurationSummary**](../Model/RestApiArrayResultRestaurantVoucherPayGreenConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStorePayGreenConfiguration_**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenStoreConfiguration getStorePayGreenConfiguration_($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
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
    echo 'Exception when calling RestaurantVouchersPayGreenApi->getStorePayGreenConfiguration_: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenStoreConfiguration**](../Model/RestApiResultRestaurantVoucherPayGreenStoreConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayGreenConfigurations**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenConfiguration listPayGreenConfigurations($app_id, $paygreen_configuration_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
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
    echo 'Exception when calling RestaurantVouchersPayGreenApi->listPayGreenConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **paygreen_configuration_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenConfiguration**](../Model/RestApiResultRestaurantVoucherPayGreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayGreenConfiguration**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenConfiguration updatePayGreenConfiguration($app_id, $paygreen_configuration_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
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
    echo 'Exception when calling RestaurantVouchersPayGreenApi->updatePayGreenConfiguration: ', $e->getMessage(), PHP_EOL;
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

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenConfiguration**](../Model/RestApiResultRestaurantVoucherPayGreenConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStorePayGreenConfiguration_**
> \Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenStoreConfiguration updateStorePayGreenConfiguration_($app_id, $store_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\RestaurantVouchersPayGreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$request = new \Flipdish\\Client\Models\UpdateStorePayGreenConfigurationRequest(); // \Flipdish\\Client\Models\UpdateStorePayGreenConfigurationRequest | 

try {
    $result = $apiInstance->updateStorePayGreenConfiguration_($app_id, $store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantVouchersPayGreenApi->updateStorePayGreenConfiguration_: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\UpdateStorePayGreenConfigurationRequest**](../Model/UpdateStorePayGreenConfigurationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestaurantVoucherPayGreenStoreConfiguration**](../Model/RestApiResultRestaurantVoucherPayGreenStoreConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


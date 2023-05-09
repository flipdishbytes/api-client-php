# Flipdish\\Client\FulfillmentStateConfigurationApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillmentStatesConfig**](FulfillmentStateConfigurationApi.md#createFulfillmentStatesConfig) | **POST** /api/v1.0/{appId}/fulfillment/configuration/states | 
[**deleteFulfillmentStatesConfig**](FulfillmentStateConfigurationApi.md#deleteFulfillmentStatesConfig) | **DELETE** /api/v1.0/{appId}/fulfillment/configuration/states/{configId} | 
[**getFulfillmentStatesConfiguration**](FulfillmentStateConfigurationApi.md#getFulfillmentStatesConfiguration) | **GET** /api/v1.0/{appId}/fulfillment/configuration/states/{configId} | 
[**getFulfillmentStatesConfigurationTemplate**](FulfillmentStateConfigurationApi.md#getFulfillmentStatesConfigurationTemplate) | **GET** /api/v1.0/{appId}/fulfillment/configuration/states_template | 
[**searchFulfillmentStatesConfigurations**](FulfillmentStateConfigurationApi.md#searchFulfillmentStatesConfigurations) | **GET** /api/v1.0/{appId}/fulfillment/configuration/states | 
[**updateFulfillmentStatesConfig**](FulfillmentStateConfigurationApi.md#updateFulfillmentStatesConfig) | **POST** /api/v1.0/{appId}/fulfillment/configuration/states/{configId} | 


# **createFulfillmentStatesConfig**
> \Flipdish\\Client\Models\RestApiResultFulfillmentStatesConfiguration createFulfillmentStatesConfig($app_id, $fulfillment_state_configuration)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FulfillmentStateConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$fulfillment_state_configuration = new \Flipdish\\Client\Models\CreateFulfillmentStatesConfiguration(); // \Flipdish\\Client\Models\CreateFulfillmentStatesConfiguration | 

try {
    $result = $apiInstance->createFulfillmentStatesConfig($app_id, $fulfillment_state_configuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->createFulfillmentStatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **fulfillment_state_configuration** | [**\Flipdish\\Client\Models\CreateFulfillmentStatesConfiguration**](../Model/CreateFulfillmentStatesConfiguration.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultFulfillmentStatesConfiguration**](../Model/RestApiResultFulfillmentStatesConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentStatesConfig**
> \Flipdish\\Client\Models\RestApiStringResult deleteFulfillmentStatesConfig($app_id, $config_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FulfillmentStateConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$config_id = "config_id_example"; // string | 

try {
    $result = $apiInstance->deleteFulfillmentStatesConfig($app_id, $config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->deleteFulfillmentStatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentStatesConfiguration**
> \Flipdish\\Client\Models\FulfillmentStatesConfiguration getFulfillmentStatesConfiguration($app_id, $config_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FulfillmentStateConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$config_id = "config_id_example"; // string | 

try {
    $result = $apiInstance->getFulfillmentStatesConfiguration($app_id, $config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->getFulfillmentStatesConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\FulfillmentStatesConfiguration**](../Model/FulfillmentStatesConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentStatesConfigurationTemplate**
> \Flipdish\\Client\Models\FulfillmentStatesConfiguration getFulfillmentStatesConfigurationTemplate($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FulfillmentStateConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getFulfillmentStatesConfigurationTemplate($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->getFulfillmentStatesConfigurationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\FulfillmentStatesConfiguration**](../Model/FulfillmentStatesConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchFulfillmentStatesConfigurations**
> \Flipdish\\Client\Models\RestApiArrayResultFulfillmentStatesConfigurationSummary searchFulfillmentStatesConfigurations($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FulfillmentStateConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->searchFulfillmentStatesConfigurations($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->searchFulfillmentStatesConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultFulfillmentStatesConfigurationSummary**](../Model/RestApiArrayResultFulfillmentStatesConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentStatesConfig**
> updateFulfillmentStatesConfig($app_id, $config_id, $update_fulfillment_states_configuration)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FulfillmentStateConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$config_id = "config_id_example"; // string | 
$update_fulfillment_states_configuration = new \Flipdish\\Client\Models\UpdateFulfillmentStatesConfiguration(); // \Flipdish\\Client\Models\UpdateFulfillmentStatesConfiguration | 

try {
    $apiInstance->updateFulfillmentStatesConfig($app_id, $config_id, $update_fulfillment_states_configuration);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->updateFulfillmentStatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_id** | **string**|  |
 **update_fulfillment_states_configuration** | [**\Flipdish\\Client\Models\UpdateFulfillmentStatesConfiguration**](../Model/UpdateFulfillmentStatesConfiguration.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


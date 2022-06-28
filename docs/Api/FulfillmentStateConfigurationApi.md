# Flipdish\\Client\FulfillmentStateConfigurationApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillmentStatesConfig**](FulfillmentStateConfigurationApi.md#createFulfillmentStatesConfig) | **POST** /api/v1.0/{appId}/fulfillment/configuration/states | Create fulfillment configuration
[**deleteFulfillmentStatesConfig**](FulfillmentStateConfigurationApi.md#deleteFulfillmentStatesConfig) | **DELETE** /api/v1.0/{appId}/fulfillment/configuration/states/{configId} | Delete fulfillment states configuration
[**getFulfillmentStatesConfiguration**](FulfillmentStateConfigurationApi.md#getFulfillmentStatesConfiguration) | **GET** /api/v1.0/{appId}/fulfillment/configuration/states/{configId} | Get fulfillment configuration
[**searchFulfillmentStatesConfigurations**](FulfillmentStateConfigurationApi.md#searchFulfillmentStatesConfigurations) | **GET** /api/v1.0/{appId}/fulfillment/configuration/states | List fulfillment configurations for AppId
[**updateFulfillmentStatesConfig**](FulfillmentStateConfigurationApi.md#updateFulfillmentStatesConfig) | **POST** /api/v1.0/{appId}/fulfillment/configuration/states/{configId} | Update fulfillment configuration


# **createFulfillmentStatesConfig**
> object createFulfillmentStatesConfig($app_id)

Create fulfillment configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App id

try {
    $result = $apiInstance->createFulfillmentStatesConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStateConfigurationApi->createFulfillmentStatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App id |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentStatesConfig**
> \Flipdish\\Client\Models\RestApiStringResult deleteFulfillmentStatesConfig($app_id, $config_id)

Delete fulfillment states configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App id
$config_id = "config_id_example"; // string | Fulfillment states configuration id

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
 **app_id** | **string**| App id |
 **config_id** | **string**| Fulfillment states configuration id |

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

Get fulfillment configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App id
$config_id = "config_id_example"; // string | App store app configuration id

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
 **app_id** | **string**| App id |
 **config_id** | **string**| App store app configuration id |

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

List fulfillment configurations for AppId

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App id

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
 **app_id** | **string**| App id |

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

Update fulfillment configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App id
$config_id = "config_id_example"; // string | Fulfillment states configuration id
$update_fulfillment_states_configuration = new \Flipdish\\Client\Models\UpdateFulfillmentStatesConfiguration(); // \Flipdish\\Client\Models\UpdateFulfillmentStatesConfiguration | Update fulfillment states configuration

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
 **app_id** | **string**| App id |
 **config_id** | **string**| Fulfillment states configuration id |
 **update_fulfillment_states_configuration** | [**\Flipdish\\Client\Models\UpdateFulfillmentStatesConfiguration**](../Model/UpdateFulfillmentStatesConfiguration.md)| Update fulfillment states configuration |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


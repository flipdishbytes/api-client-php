# Flipdish\\Client\OnboardingApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOnboardingConfig**](OnboardingApi.md#getOnboardingConfig) | **GET** /api/v1.0/clients/{appId}/onboarding/config | 
[**getOnboardingConfigs**](OnboardingApi.md#getOnboardingConfigs) | **GET** /api/v1.0/clients/{appId}/onboarding/configs | 
[**getOnboardingItems**](OnboardingApi.md#getOnboardingItems) | **GET** /api/v1.0/clients/{appId}/onboarding/stores/{storeId} | 
[**getOnboardingItemsV2**](OnboardingApi.md#getOnboardingItemsV2) | **GET** /api/v1.0/clients/{appId}/onboarding/stores | 
[**updateOnboardingConfig**](OnboardingApi.md#updateOnboardingConfig) | **POST** /api/v1.0/clients/{appId}/onboarding/config | 
[**updateOnboardingConfigById**](OnboardingApi.md#updateOnboardingConfigById) | **POST** /api/v1.0/clients/{appId}/onboarding/config/{configId} | 
[**updateOnboardingItem**](OnboardingApi.md#updateOnboardingItem) | **POST** /api/v1.0/clients/{appId}/onboarding/stores/{storeId}/items/{onboardingItemId} | 
[**updateOnboardingItemV2**](OnboardingApi.md#updateOnboardingItemV2) | **POST** /api/v1.0/clients/{appId}/onboarding/stores/items/{onboardingItemId} | 


# **getOnboardingConfig**
> \Flipdish\\Client\Models\RestApiResultOnboardingConfig getOnboardingConfig($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getOnboardingConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOnboardingConfig**](../Model/RestApiResultOnboardingConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingConfigs**
> \Flipdish\\Client\Models\RestApiArrayResultOnboardingConfig getOnboardingConfigs($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getOnboardingConfigs($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOnboardingConfig**](../Model/RestApiArrayResultOnboardingConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingItems**
> \Flipdish\\Client\Models\RestApiResultOnboardingProcess getOnboardingItems($app_id, $store_id, $milestone_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$milestone_id = 56; // int | 

try {
    $result = $apiInstance->getOnboardingItems($app_id, $store_id, $milestone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **milestone_id** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultOnboardingProcess**](../Model/RestApiResultOnboardingProcess.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOnboardingItemsV2**
> \Flipdish\\Client\Models\RestApiResultOnboardingProcess getOnboardingItemsV2($app_id, $store_id, $milestone_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$milestone_id = 56; // int | 

try {
    $result = $apiInstance->getOnboardingItemsV2($app_id, $store_id, $milestone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getOnboardingItemsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  | [optional]
 **milestone_id** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultOnboardingProcess**](../Model/RestApiResultOnboardingProcess.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOnboardingConfig**
> updateOnboardingConfig($app_id, $config_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$config_update = new \Flipdish\\Client\Models\OnboardingConfigUpdate(); // \Flipdish\\Client\Models\OnboardingConfigUpdate | 

try {
    $apiInstance->updateOnboardingConfig($app_id, $config_update);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->updateOnboardingConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_update** | [**\Flipdish\\Client\Models\OnboardingConfigUpdate**](../Model/OnboardingConfigUpdate.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOnboardingConfigById**
> updateOnboardingConfigById($app_id, $config_id, $config_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$config_id = 56; // int | 
$config_update = new \Flipdish\\Client\Models\OnboardingConfigUpdate(); // \Flipdish\\Client\Models\OnboardingConfigUpdate | 

try {
    $apiInstance->updateOnboardingConfigById($app_id, $config_id, $config_update);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->updateOnboardingConfigById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_id** | **int**|  |
 **config_update** | [**\Flipdish\\Client\Models\OnboardingConfigUpdate**](../Model/OnboardingConfigUpdate.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOnboardingItem**
> updateOnboardingItem($app_id, $store_id, $onboarding_item_id, $item_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$onboarding_item_id = 56; // int | 
$item_update = new \Flipdish\\Client\Models\OnboardingItemUpdate(); // \Flipdish\\Client\Models\OnboardingItemUpdate | 

try {
    $apiInstance->updateOnboardingItem($app_id, $store_id, $onboarding_item_id, $item_update);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->updateOnboardingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **onboarding_item_id** | **int**|  |
 **item_update** | [**\Flipdish\\Client\Models\OnboardingItemUpdate**](../Model/OnboardingItemUpdate.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOnboardingItemV2**
> updateOnboardingItemV2($app_id, $onboarding_item_id, $item_update, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$onboarding_item_id = 56; // int | 
$item_update = new \Flipdish\\Client\Models\OnboardingItemUpdate(); // \Flipdish\\Client\Models\OnboardingItemUpdate | 
$store_id = 56; // int | 

try {
    $apiInstance->updateOnboardingItemV2($app_id, $onboarding_item_id, $item_update, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->updateOnboardingItemV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **onboarding_item_id** | **int**|  |
 **item_update** | [**\Flipdish\\Client\Models\OnboardingItemUpdate**](../Model/OnboardingItemUpdate.md)|  |
 **store_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


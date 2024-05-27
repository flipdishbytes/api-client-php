# Flipdish\\Client\OnboardingApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**onboardingGetOnboardingConfig**](OnboardingApi.md#onboardingGetOnboardingConfig) | **GET** /api/v1.0/clients/{appId}/onboarding/config | 
[**onboardingGetOnboardingConfigs**](OnboardingApi.md#onboardingGetOnboardingConfigs) | **GET** /api/v1.0/clients/{appId}/onboarding/configs | 
[**onboardingGetOnboardingItems**](OnboardingApi.md#onboardingGetOnboardingItems) | **GET** /api/v1.0/clients/{appId}/onboarding/stores/{storeId} | 
[**onboardingUpdateOnboardingConfig**](OnboardingApi.md#onboardingUpdateOnboardingConfig) | **POST** /api/v1.0/clients/{appId}/onboarding/config | 
[**onboardingUpdateOnboardingConfigById**](OnboardingApi.md#onboardingUpdateOnboardingConfigById) | **POST** /api/v1.0/clients/{appId}/onboarding/config/{configId} | 
[**onboardingUpdateOnboardingItem**](OnboardingApi.md#onboardingUpdateOnboardingItem) | **POST** /api/v1.0/clients/{appId}/onboarding/stores/{storeId}/items/{onboardingItemId} | 


# **onboardingGetOnboardingConfig**
> object onboardingGetOnboardingConfig($app_id)



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
    $result = $apiInstance->onboardingGetOnboardingConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingGetOnboardingConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onboardingGetOnboardingConfigs**
> object onboardingGetOnboardingConfigs($app_id)



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
    $result = $apiInstance->onboardingGetOnboardingConfigs($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingGetOnboardingConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onboardingGetOnboardingItems**
> object onboardingGetOnboardingItems($app_id, $store_id, $milestone_id)



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
    $result = $apiInstance->onboardingGetOnboardingItems($app_id, $store_id, $milestone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingGetOnboardingItems: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onboardingUpdateOnboardingConfig**
> object onboardingUpdateOnboardingConfig($app_id, $config_update)



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
    $result = $apiInstance->onboardingUpdateOnboardingConfig($app_id, $config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingUpdateOnboardingConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_update** | [**\Flipdish\\Client\Models\OnboardingConfigUpdate**](../Model/OnboardingConfigUpdate.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onboardingUpdateOnboardingConfigById**
> object onboardingUpdateOnboardingConfigById($app_id, $config_id, $config_update)



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
    $result = $apiInstance->onboardingUpdateOnboardingConfigById($app_id, $config_id, $config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingUpdateOnboardingConfigById: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onboardingUpdateOnboardingItem**
> object onboardingUpdateOnboardingItem($app_id, $store_id, $onboarding_item_id, $item_update)



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
    $result = $apiInstance->onboardingUpdateOnboardingItem($app_id, $store_id, $onboarding_item_id, $item_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingUpdateOnboardingItem: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\AppStoreConfigurationsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreConfigurationsAppStoreHandleOauthResponseCode**](AppStoreConfigurationsApi.md#appStoreConfigurationsAppStoreHandleOauthResponseCode) | **GET** /api/v1.0/appstore/oauthresponse/{appStoreAppId}/responsecode | 
[**createAppStoreConfig**](AppStoreConfigurationsApi.md#createAppStoreConfig) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config | 
[**deleteAppStoreConfig**](AppStoreConfigurationsApi.md#deleteAppStoreConfig) | **DELETE** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | 
[**executeConfigurationAction**](AppStoreConfigurationsApi.md#executeConfigurationAction) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId}/action | 
[**getAppStoreConfig**](AppStoreConfigurationsApi.md#getAppStoreConfig) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | 
[**getConfiguredAppSingleApp**](AppStoreConfigurationsApi.md#getConfiguredAppSingleApp) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId} | 
[**getConfiguredAppWithSubscriptionsSingleApp**](AppStoreConfigurationsApi.md#getConfiguredAppWithSubscriptionsSingleApp) | **GET** /api/v1.0/{appId}/appstore/apps_subscriptions/{appStoreAppId} | 
[**getConfiguredApps**](AppStoreConfigurationsApi.md#getConfiguredApps) | **GET** /api/v1.0/{appId}/appstore/apps | 
[**updateAppStoreConfig**](AppStoreConfigurationsApi.md#updateAppStoreConfig) | **PUT** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | 
[**updateAppStoreConfigSettingValues**](AppStoreConfigurationsApi.md#updateAppStoreConfigSettingValues) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId}/updatesettings | 


# **appStoreConfigurationsAppStoreHandleOauthResponseCode**
> object appStoreConfigurationsAppStoreHandleOauthResponseCode($app_store_app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $result = $apiInstance->appStoreConfigurationsAppStoreHandleOauthResponseCode($app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->appStoreConfigurationsAppStoreHandleOauthResponseCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppStoreConfig**
> \Flipdish\\Client\Models\RestApiResultAppStoreAppConfiguration createAppStoreConfig($app_id, $app_store_app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $result = $apiInstance->createAppStoreConfig($app_id, $app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->createAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreAppConfiguration**](../Model/RestApiResultAppStoreAppConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppStoreConfig**
> \Flipdish\\Client\Models\RestApiStringResult deleteAppStoreConfig($app_id, $app_store_app_id, $config_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$config_id = "config_id_example"; // string | 

try {
    $result = $apiInstance->deleteAppStoreConfig($app_id, $app_store_app_id, $config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->deleteAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **config_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeConfigurationAction**
> \Flipdish\\Client\Models\RestApiResultExecuteConfigurationActionResult executeConfigurationAction($app_id, $app_store_app_id, $config_id, $execute_configuration_action_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$config_id = "config_id_example"; // string | 
$execute_configuration_action_request = new \Flipdish\\Client\Models\ExecuteConfigurationActionRequest(); // \Flipdish\\Client\Models\ExecuteConfigurationActionRequest | 

try {
    $result = $apiInstance->executeConfigurationAction($app_id, $app_store_app_id, $config_id, $execute_configuration_action_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->executeConfigurationAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **config_id** | **string**|  |
 **execute_configuration_action_request** | [**\Flipdish\\Client\Models\ExecuteConfigurationActionRequest**](../Model/ExecuteConfigurationActionRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultExecuteConfigurationActionResult**](../Model/RestApiResultExecuteConfigurationActionResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreConfig**
> \Flipdish\\Client\Models\RestApiResultAppStoreAppConfiguration getAppStoreConfig($app_id, $app_store_app_id, $config_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$config_id = "config_id_example"; // string | 

try {
    $result = $apiInstance->getAppStoreConfig($app_id, $app_store_app_id, $config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->getAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **config_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreAppConfiguration**](../Model/RestApiResultAppStoreAppConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredAppSingleApp**
> \Flipdish\\Client\Models\RestApiArrayResultAppStoreAppConfigurationSummary getConfiguredAppSingleApp($app_id, $app_store_app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $result = $apiInstance->getConfiguredAppSingleApp($app_id, $app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->getConfiguredAppSingleApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppStoreAppConfigurationSummary**](../Model/RestApiArrayResultAppStoreAppConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredAppWithSubscriptionsSingleApp**
> \Flipdish\\Client\Models\RestApiResultAppStoreAppConfigurationsWithSubscriptions getConfiguredAppWithSubscriptionsSingleApp($app_id, $app_store_app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $result = $apiInstance->getConfiguredAppWithSubscriptionsSingleApp($app_id, $app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->getConfiguredAppWithSubscriptionsSingleApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreAppConfigurationsWithSubscriptions**](../Model/RestApiResultAppStoreAppConfigurationsWithSubscriptions.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredApps**
> \Flipdish\\Client\Models\RestApiArrayResultAppStoreAppSummary getConfiguredApps($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getConfiguredApps($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->getConfiguredApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppStoreAppSummary**](../Model/RestApiArrayResultAppStoreAppSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreConfig**
> updateAppStoreConfig($app_id, $app_store_app_id, $config_id, $update_app_store_app_configuration)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$config_id = "config_id_example"; // string | 
$update_app_store_app_configuration = new \Flipdish\\Client\Models\UpdateAppStoreAppConfiguration(); // \Flipdish\\Client\Models\UpdateAppStoreAppConfiguration | 

try {
    $apiInstance->updateAppStoreConfig($app_id, $app_store_app_id, $config_id, $update_app_store_app_configuration);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->updateAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **config_id** | **string**|  |
 **update_app_store_app_configuration** | [**\Flipdish\\Client\Models\UpdateAppStoreAppConfiguration**](../Model/UpdateAppStoreAppConfiguration.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreConfigSettingValues**
> updateAppStoreConfigSettingValues($app_id, $app_store_app_id, $config_id, $update_app_store_app_configuration_values)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$config_id = "config_id_example"; // string | 
$update_app_store_app_configuration_values = new \Flipdish\\Client\Models\UpdateAppStoreAppConfigurationValuesBatch(); // \Flipdish\\Client\Models\UpdateAppStoreAppConfigurationValuesBatch | 

try {
    $apiInstance->updateAppStoreConfigSettingValues($app_id, $app_store_app_id, $config_id, $update_app_store_app_configuration_values);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->updateAppStoreConfigSettingValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **config_id** | **string**|  |
 **update_app_store_app_configuration_values** | [**\Flipdish\\Client\Models\UpdateAppStoreAppConfigurationValuesBatch**](../Model/UpdateAppStoreAppConfigurationValuesBatch.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


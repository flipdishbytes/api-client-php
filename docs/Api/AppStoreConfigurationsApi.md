# Flipdish\\Client\AppStoreConfigurationsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppStoreConfig**](AppStoreConfigurationsApi.md#createAppStoreConfig) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config | Create app store app configuration
[**deleteAppStoreConfig**](AppStoreConfigurationsApi.md#deleteAppStoreConfig) | **DELETE** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | Delete app store app configuration
[**getAppStoreConfig**](AppStoreConfigurationsApi.md#getAppStoreConfig) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | Get app store app configuration
[**getConfiguredAppSingleApp**](AppStoreConfigurationsApi.md#getConfiguredAppSingleApp) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId} | Get list of app store app configurations for one app store app
[**getConfiguredApps**](AppStoreConfigurationsApi.md#getConfiguredApps) | **GET** /api/v1.0/{appId}/appstore/apps | Get list of app store apps which have been configured
[**updateAppStoreConfig**](AppStoreConfigurationsApi.md#updateAppStoreConfig) | **PUT** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | Update app store app configuration


# **createAppStoreConfig**
> \Flipdish\\Client\Models\RestApiResultAppConfigurationSummary createAppStoreConfig($app_id, $app_store_app_id)

Create app store app configuration

[BETA - this endpoint is under development, do not use it in your production system] This adds an Application to a Whitelabel that can later be configured to specific stores

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
$app_id = "app_id_example"; // string | App Id
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id

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
 **app_id** | **string**| App Id |
 **app_store_app_id** | **string**| App Store App Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppConfigurationSummary**](../Model/RestApiResultAppConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppStoreConfig**
> \Flipdish\\Client\Models\RestApiStringResult deleteAppStoreConfig($app_id, $app_store_app_id, $config_id)

Delete app store app configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App Id
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id
$config_id = "config_id_example"; // string | App Store Configuration Id

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
 **app_id** | **string**| App Id |
 **app_store_app_id** | **string**| App Store App Id |
 **config_id** | **string**| App Store Configuration Id |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreConfig**
> \Flipdish\\Client\Models\AppConfigurationDetail getAppStoreConfig($app_id, $app_store_app_id, $config_id)

Get app store app configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App Id
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id
$config_id = "config_id_example"; // string | App Store Configuration Id

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
 **app_id** | **string**| App Id |
 **app_store_app_id** | **string**| App Store App Id |
 **config_id** | **string**| App Store Configuration Id |

### Return type

[**\Flipdish\\Client\Models\AppConfigurationDetail**](../Model/AppConfigurationDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredAppSingleApp**
> \Flipdish\\Client\Models\RestApiArrayResultAppConfigurationSummary getConfiguredAppSingleApp($app_id, $app_store_app_id)

Get list of app store app configurations for one app store app

[ALPHA - this endpoint is not ready to be consumed]

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
$app_id = "app_id_example"; // string | App Id
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id

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
 **app_id** | **string**| App Id |
 **app_store_app_id** | **string**| App Store App Id |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppConfigurationSummary**](../Model/RestApiArrayResultAppConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredApps**
> \Flipdish\\Client\Models\RestApiArrayResultAppConfigurationHeader getConfiguredApps($app_id)

Get list of app store apps which have been configured

[ALPHA - this endpoint is not ready to be consumed]

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
$app_id = "app_id_example"; // string | App Id

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
 **app_id** | **string**| App Id |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppConfigurationHeader**](../Model/RestApiArrayResultAppConfigurationHeader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreConfig**
> updateAppStoreConfig($app_id, $app_store_app_id, $config_id, $app_configuration_base)

Update app store app configuration

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App Id
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id
$config_id = "config_id_example"; // string | App Store Configuration Id
$app_configuration_base = new \Flipdish\\Client\Models\AppConfiguration(); // \Flipdish\\Client\Models\AppConfiguration | App Store Configuration Base

try {
    $apiInstance->updateAppStoreConfig($app_id, $app_store_app_id, $config_id, $app_configuration_base);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreConfigurationsApi->updateAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **app_store_app_id** | **string**| App Store App Id |
 **config_id** | **string**| App Store Configuration Id |
 **app_configuration_base** | [**\Flipdish\\Client\Models\AppConfiguration**](../Model/AppConfiguration.md)| App Store Configuration Base |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\AppStoreConfigurationsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appStoreConfigurationsAppStoreHandleOauthResponseCode**](AppStoreConfigurationsApi.md#appStoreConfigurationsAppStoreHandleOauthResponseCode) | **GET** /api/v1.0/appstore/oauthresponse/{appStoreAppId}/responsecode | Process the OAuth response code (bounce back redirect from external OAuth provider after successful authentication)  the query string will contain state and code
[**createAppStoreConfig**](AppStoreConfigurationsApi.md#createAppStoreConfig) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config | Create App store app configuration
[**deleteAppStoreConfig**](AppStoreConfigurationsApi.md#deleteAppStoreConfig) | **DELETE** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | Delete App store app configuration
[**executeConfigurationAction**](AppStoreConfigurationsApi.md#executeConfigurationAction) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId}/action | Execute configuration action on a configuration item (eg. handle button press)
[**getAppStoreConfig**](AppStoreConfigurationsApi.md#getAppStoreConfig) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | Get App store app configuration
[**getConfiguredAppSingleApp**](AppStoreConfigurationsApi.md#getConfiguredAppSingleApp) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId} | Get list of App store app configurations for one App store app
[**getConfiguredApps**](AppStoreConfigurationsApi.md#getConfiguredApps) | **GET** /api/v1.0/{appId}/appstore/apps | Get list of App store apps which have been configured
[**updateAppStoreConfig**](AppStoreConfigurationsApi.md#updateAppStoreConfig) | **PUT** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId} | Update App store app configuration
[**updateAppStoreConfigSettingValues**](AppStoreConfigurationsApi.md#updateAppStoreConfigSettingValues) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/config/{configId}/updatesettings | Update AppStore App Configuration values, specified settings only


# **appStoreConfigurationsAppStoreHandleOauthResponseCode**
> object appStoreConfigurationsAppStoreHandleOauthResponseCode($app_store_app_id)

Process the OAuth response code (bounce back redirect from external OAuth provider after successful authentication)  the query string will contain state and code

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

Create App store app configuration

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
$app_id = "app_id_example"; // string | App id
$app_store_app_id = "app_store_app_id_example"; // string | App store app id

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
 **app_id** | **string**| App id |
 **app_store_app_id** | **string**| App store app id |

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

Delete App store app configuration

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
$app_id = "app_id_example"; // string | App id
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$config_id = "config_id_example"; // string | App store app configuration id

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
 **app_id** | **string**| App id |
 **app_store_app_id** | **string**| App store app id |
 **config_id** | **string**| App store app configuration id |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeConfigurationAction**
> \Flipdish\\Client\Models\ExecuteConfigurationActionResult executeConfigurationAction($app_id, $app_store_app_id, $config_id, $execute_configuration_action_request)

Execute configuration action on a configuration item (eg. handle button press)

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
$app_store_app_id = "app_store_app_id_example"; // string | AppStore App Id
$config_id = "config_id_example"; // string | AppStore App configuration Id
$execute_configuration_action_request = new \Flipdish\\Client\Models\ExecuteConfigurationActionRequest(); // \Flipdish\\Client\Models\ExecuteConfigurationActionRequest | Action request details

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
 **app_id** | **string**| App Id |
 **app_store_app_id** | **string**| AppStore App Id |
 **config_id** | **string**| AppStore App configuration Id |
 **execute_configuration_action_request** | [**\Flipdish\\Client\Models\ExecuteConfigurationActionRequest**](../Model/ExecuteConfigurationActionRequest.md)| Action request details |

### Return type

[**\Flipdish\\Client\Models\ExecuteConfigurationActionResult**](../Model/ExecuteConfigurationActionResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreConfig**
> \Flipdish\\Client\Models\AppStoreAppConfiguration getAppStoreConfig($app_id, $app_store_app_id, $config_id)

Get App store app configuration

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
$app_id = "app_id_example"; // string | App id
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$config_id = "config_id_example"; // string | App store app configuration id

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
 **app_id** | **string**| App id |
 **app_store_app_id** | **string**| App store app id |
 **config_id** | **string**| App store app configuration id |

### Return type

[**\Flipdish\\Client\Models\AppStoreAppConfiguration**](../Model/AppStoreAppConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredAppSingleApp**
> \Flipdish\\Client\Models\RestApiArrayResultAppStoreAppConfigurationSummary getConfiguredAppSingleApp($app_id, $app_store_app_id)

Get list of App store app configurations for one App store app

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
$app_id = "app_id_example"; // string | App id
$app_store_app_id = "app_store_app_id_example"; // string | App store app id

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
 **app_id** | **string**| App id |
 **app_store_app_id** | **string**| App store app id |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppStoreAppConfigurationSummary**](../Model/RestApiArrayResultAppStoreAppConfigurationSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguredApps**
> \Flipdish\\Client\Models\RestApiArrayResultAppStoreAppConfigurationHeader getConfiguredApps($app_id)

Get list of App store apps which have been configured

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
$app_id = "app_id_example"; // string | App id

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
 **app_id** | **string**| App id |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppStoreAppConfigurationHeader**](../Model/RestApiArrayResultAppStoreAppConfigurationHeader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreConfig**
> updateAppStoreConfig($app_id, $app_store_app_id, $config_id, $update_app_store_app_configuration)

Update App store app configuration

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
$app_id = "app_id_example"; // string | App id
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$config_id = "config_id_example"; // string | App store app configuration id
$update_app_store_app_configuration = new \Flipdish\\Client\Models\UpdateAppStoreAppConfiguration(); // \Flipdish\\Client\Models\UpdateAppStoreAppConfiguration | Update App store app configuration

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
 **app_id** | **string**| App id |
 **app_store_app_id** | **string**| App store app id |
 **config_id** | **string**| App store app configuration id |
 **update_app_store_app_configuration** | [**\Flipdish\\Client\Models\UpdateAppStoreAppConfiguration**](../Model/UpdateAppStoreAppConfiguration.md)| Update App store app configuration |

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

Update AppStore App Configuration values, specified settings only

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


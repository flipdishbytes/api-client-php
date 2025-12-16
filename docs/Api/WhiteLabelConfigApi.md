# Flipdish\\Client\WhiteLabelConfigApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppGeneralConfig**](WhiteLabelConfigApi.md#getAppGeneralConfig) | **GET** /api/v1.0/whitelabelconfig/{appId}/general | 
[**getAppStoreConfig**](WhiteLabelConfigApi.md#getAppStoreConfig) | **GET** /api/v1.0/whitelabelconfig/{appId}/appstore | 
[**getPlayStoreConfig**](WhiteLabelConfigApi.md#getPlayStoreConfig) | **GET** /api/v1.0/whitelabelconfig/{appId}/playstore | 
[**getWhiteLabelConfig**](WhiteLabelConfigApi.md#getWhiteLabelConfig) | **GET** /api/v1.0/whitelabelconfig/id/{wlid} | 
[**getWhiteLabelConfigByAppNameId**](WhiteLabelConfigApi.md#getWhiteLabelConfigByAppNameId) | **GET** /api/v1.0/whitelabelconfig/name/{appId} | 
[**healthCheck**](WhiteLabelConfigApi.md#healthCheck) | **GET** /api/v1.0/whitelabelconfig/health | 
[**updateAppGeneralConfig**](WhiteLabelConfigApi.md#updateAppGeneralConfig) | **POST** /api/v1.0/whitelabelconfig/{appId}/general | 
[**updateAppStoreConfig**](WhiteLabelConfigApi.md#updateAppStoreConfig) | **POST** /api/v1.0/whitelabelconfig/{appId}/appstore | 
[**updatePlayStoreConfig**](WhiteLabelConfigApi.md#updatePlayStoreConfig) | **POST** /api/v1.0/whitelabelconfig/{appId}/playstore | 
[**uploadAppStoreIcon**](WhiteLabelConfigApi.md#uploadAppStoreIcon) | **POST** /api/v1.0/whitelabelconfig/{appId}/app-store-icon | 


# **getAppGeneralConfig**
> \Flipdish\\Client\Models\RestApiResultAppGeneralConfigModel getAppGeneralConfig($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAppGeneralConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->getAppGeneralConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppGeneralConfigModel**](../Model/RestApiResultAppGeneralConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreConfig**
> \Flipdish\\Client\Models\RestApiResultAppStoreConfigModel getAppStoreConfig($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAppStoreConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->getAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreConfigModel**](../Model/RestApiResultAppStoreConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlayStoreConfig**
> \Flipdish\\Client\Models\RestApiResultPlayStoreConfigModel getPlayStoreConfig($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getPlayStoreConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->getPlayStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPlayStoreConfigModel**](../Model/RestApiResultPlayStoreConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhiteLabelConfig**
> \Flipdish\\Client\Models\RestApiResultWhiteLabelConfigModel getWhiteLabelConfig($wlid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wlid = 56; // int | 

try {
    $result = $apiInstance->getWhiteLabelConfig($wlid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->getWhiteLabelConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wlid** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultWhiteLabelConfigModel**](../Model/RestApiResultWhiteLabelConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhiteLabelConfigByAppNameId**
> \Flipdish\\Client\Models\RestApiResultWhiteLabelConfigModel getWhiteLabelConfigByAppNameId($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getWhiteLabelConfigByAppNameId($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->getWhiteLabelConfigByAppNameId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultWhiteLabelConfigModel**](../Model/RestApiResultWhiteLabelConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **healthCheck**
> string healthCheck()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->healthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->healthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppGeneralConfig**
> \Flipdish\\Client\Models\RestApiResultAppGeneralConfigModel updateAppGeneralConfig($app_id, $app_general_config)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_general_config = new \Flipdish\\Client\Models\AppGeneralConfigModel(); // \Flipdish\\Client\Models\AppGeneralConfigModel | 

try {
    $result = $apiInstance->updateAppGeneralConfig($app_id, $app_general_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->updateAppGeneralConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_general_config** | [**\Flipdish\\Client\Models\AppGeneralConfigModel**](../Model/AppGeneralConfigModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppGeneralConfigModel**](../Model/RestApiResultAppGeneralConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreConfig**
> \Flipdish\\Client\Models\RestApiResultAppStoreConfigModel updateAppStoreConfig($app_id, $app_store_config)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_config = new \Flipdish\\Client\Models\AppStoreConfigModel(); // \Flipdish\\Client\Models\AppStoreConfigModel | 

try {
    $result = $apiInstance->updateAppStoreConfig($app_id, $app_store_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->updateAppStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_config** | [**\Flipdish\\Client\Models\AppStoreConfigModel**](../Model/AppStoreConfigModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreConfigModel**](../Model/RestApiResultAppStoreConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlayStoreConfig**
> \Flipdish\\Client\Models\RestApiResultPlayStoreConfigModel updatePlayStoreConfig($app_id, $play_store_config)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$play_store_config = new \Flipdish\\Client\Models\PlayStoreConfigModel(); // \Flipdish\\Client\Models\PlayStoreConfigModel | 

try {
    $result = $apiInstance->updatePlayStoreConfig($app_id, $play_store_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->updatePlayStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **play_store_config** | [**\Flipdish\\Client\Models\PlayStoreConfigModel**](../Model/PlayStoreConfigModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPlayStoreConfigModel**](../Model/RestApiResultPlayStoreConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAppStoreIcon**
> \Flipdish\\Client\Models\RestApiResultAssetResultModel uploadAppStoreIcon($app_id, $file)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$file = new \Flipdish\\Client\Models\HttpPostedFileBase(); // \Flipdish\\Client\Models\HttpPostedFileBase | 

try {
    $result = $apiInstance->uploadAppStoreIcon($app_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelConfigApi->uploadAppStoreIcon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **file** | [**\Flipdish\\Client\Models\HttpPostedFileBase**](../Model/HttpPostedFileBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAssetResultModel**](../Model/RestApiResultAssetResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


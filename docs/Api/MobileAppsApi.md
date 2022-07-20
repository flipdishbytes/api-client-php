# Flipdish\\Client\MobileAppsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editAppConfigSalesChannel**](MobileAppsApi.md#editAppConfigSalesChannel) | **POST** /api/v1.0/mobileapps/{appId}/saleschannel | Set the application sales channel configuration
[**getAppConfig**](MobileAppsApi.md#getAppConfig) | **GET** /api/v1.0/mobileapps/{appId}/config | Get mobile app configuration
[**getAppDetails**](MobileAppsApi.md#getAppDetails) | **GET** /api/v1.0/mobileapps/{appId}/details | Get mobile app details
[**getMobileAppsSubmissionStatus**](MobileAppsApi.md#getMobileAppsSubmissionStatus) | **GET** /api/v1.0/mobileapps/{appId}/submissionstatus{plataformType} | Get mobile app submitted status
[**getStatistics**](MobileAppsApi.md#getStatistics) | **GET** /api/v1.0/mobileapps/{appId}/statistics | Get statistics mobile apps
[**setAppConfig**](MobileAppsApi.md#setAppConfig) | **POST** /api/v1.0/mobileapps/{appId}/config | Set mobile app configuration
[**submission**](MobileAppsApi.md#submission) | **POST** /api/v1.0/mobileapps/{appId}/submission | Submission form mobile apps
[**uploadMobileAppsImage**](MobileAppsApi.md#uploadMobileAppsImage) | **POST** /api/v1.0/mobileapps/{appId}/image | Upload a Mobile Apps Image


# **editAppConfigSalesChannel**
> \Flipdish\\Client\Models\RestApiResultAppConfigSalesChannel editAppConfigSalesChannel($app_id, $app_config_sales_channel)

Set the application sales channel configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_config_sales_channel = new \Flipdish\\Client\Models\AppConfigSalesChannel(); // \Flipdish\\Client\Models\AppConfigSalesChannel | 

try {
    $result = $apiInstance->editAppConfigSalesChannel($app_id, $app_config_sales_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->editAppConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_config_sales_channel** | [**\Flipdish\\Client\Models\AppConfigSalesChannel**](../Model/AppConfigSalesChannel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppConfigSalesChannel**](../Model/RestApiResultAppConfigSalesChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppConfig**
> \Flipdish\\Client\Models\RestApiResultMobileAppsDetails getAppConfig($app_id)

Get mobile app configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAppConfig($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsDetails**](../Model/RestApiResultMobileAppsDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppDetails**
> \Flipdish\\Client\Models\RestApiResultMobileAppsDetails getAppDetails($app_id)

Get mobile app details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAppDetails($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getAppDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsDetails**](../Model/RestApiResultMobileAppsDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMobileAppsSubmissionStatus**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmissionStatus getMobileAppsSubmissionStatus($app_id, $plataform_type)

Get mobile app submitted status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$plataform_type = "plataform_type_example"; // string | 

try {
    $result = $apiInstance->getMobileAppsSubmissionStatus($app_id, $plataform_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getMobileAppsSubmissionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **plataform_type** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsSubmissionStatus**](../Model/RestApiResultMobileAppsSubmissionStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatistics**
> \Flipdish\\Client\Models\RestApiArrayResultMobileAppsStatistics getStatistics($app_id, $platform_types)

Get statistics mobile apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$platform_types = array("platform_types_example"); // string[] | 

try {
    $result = $apiInstance->getStatistics($app_id, $platform_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **platform_types** | [**string[]**](../Model/string.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMobileAppsStatistics**](../Model/RestApiArrayResultMobileAppsStatistics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAppConfig**
> \Flipdish\\Client\Models\RestApiResult setAppConfig($app_id, $config_update)

Set mobile app configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$config_update = new \Flipdish\\Client\Models\MobileAppConfig(); // \Flipdish\\Client\Models\MobileAppConfig | 

try {
    $result = $apiInstance->setAppConfig($app_id, $config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->setAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **config_update** | [**\Flipdish\\Client\Models\MobileAppConfig**](../Model/MobileAppConfig.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResult**](../Model/RestApiResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submission**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmission submission($app_id, $mobile_apps_submission)

Submission form mobile apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$mobile_apps_submission = new \Flipdish\\Client\Models\MobileAppsSubmission(); // \Flipdish\\Client\Models\MobileAppsSubmission | 

try {
    $result = $apiInstance->submission($app_id, $mobile_apps_submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->submission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **mobile_apps_submission** | [**\Flipdish\\Client\Models\MobileAppsSubmission**](../Model/MobileAppsSubmission.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsSubmission**](../Model/RestApiResultMobileAppsSubmission.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMobileAppsImage**
> \Flipdish\\Client\Models\RestApiResultMobileAppsImage uploadMobileAppsImage($app_id, $image)

Upload a Mobile Apps Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MobileAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$image = "/path/to/file.txt"; // \SplFileObject | Mobile Apps image

try {
    $result = $apiInstance->uploadMobileAppsImage($app_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->uploadMobileAppsImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **image** | **\SplFileObject**| Mobile Apps image |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsImage**](../Model/RestApiResultMobileAppsImage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\MobileAppsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editAppConfigSalesChannel**](MobileAppsApi.md#editAppConfigSalesChannel) | **POST** /api/v1.0/mobileapps/{appId}/submission | Submission form mobile apps
[**editAppConfigSalesChannel_0**](MobileAppsApi.md#editAppConfigSalesChannel_0) | **POST** /api/v1.0/mobileapps/{appId}/saleschannel | Set the application sales channel configuration
[**getAppDetails**](MobileAppsApi.md#getAppDetails) | **GET** /api/v1.0/mobileapps/{appId}/details | Get mobile app details
[**uploadMobileAppsImage**](MobileAppsApi.md#uploadMobileAppsImage) | **POST** /api/v1.0/mobileapps/{appId}/image | Upload a Mobile Apps Image


# **editAppConfigSalesChannel**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmission editAppConfigSalesChannel($app_id, $mobile_apps_submission)

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
    $result = $apiInstance->editAppConfigSalesChannel($app_id, $mobile_apps_submission);
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
 **mobile_apps_submission** | [**\Flipdish\\Client\Models\MobileAppsSubmission**](../Model/MobileAppsSubmission.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsSubmission**](../Model/RestApiResultMobileAppsSubmission.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editAppConfigSalesChannel_0**
> \Flipdish\\Client\Models\RestApiResultAppConfigSalesChannel editAppConfigSalesChannel_0($app_id, $app_config_sales_channel)

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
    $result = $apiInstance->editAppConfigSalesChannel_0($app_id, $app_config_sales_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->editAppConfigSalesChannel_0: ', $e->getMessage(), PHP_EOL;
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


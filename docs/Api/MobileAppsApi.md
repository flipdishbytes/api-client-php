# Flipdish\\Client\MobileAppsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppConfigSalesChannel**](MobileAppsApi.md#getAppConfigSalesChannel) | **GET** /api/v1.0/mobileapps/{appId}/saleschannel/details | 
[**getStatistics**](MobileAppsApi.md#getStatistics) | **GET** /api/v1.0/mobileapps/{appId}/statistics | 
[**getSubmissionDetails**](MobileAppsApi.md#getSubmissionDetails) | **GET** /api/v1.0/mobileapps/{appId}/submission/details | 
[**getSubmissionStatus**](MobileAppsApi.md#getSubmissionStatus) | **GET** /api/v1.0/mobileapps/{appId}/submission/{submissionId}/status | 
[**publish**](MobileAppsApi.md#publish) | **POST** /api/v1.0/mobileapps/{appId}/submission/{submissionId}/publish | 
[**resubmission**](MobileAppsApi.md#resubmission) | **POST** /api/v1.0/mobileapps/{appId}/resubmission | 
[**submission**](MobileAppsApi.md#submission) | **POST** /api/v1.0/mobileapps/{appId}/submission | 
[**unpublish**](MobileAppsApi.md#unpublish) | **POST** /api/v1.0/mobileapps/{appId}/submission/{submissionId}/unpublish | 
[**updateAppConfigSalesChannel**](MobileAppsApi.md#updateAppConfigSalesChannel) | **POST** /api/v1.0/mobileapps/{appId}/saleschannel | 
[**updateSubmissionStatus**](MobileAppsApi.md#updateSubmissionStatus) | **POST** /api/v1.0/mobileapps/{appId}/submission/{submissionId}/status | 
[**uploadImage**](MobileAppsApi.md#uploadImage) | **POST** /api/v1.0/mobileapps/{appId}/submission/image | 


# **getAppConfigSalesChannel**
> \Flipdish\\Client\Models\RestApiResultAppConfigSalesChannel getAppConfigSalesChannel($app_id)



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
    $result = $apiInstance->getAppConfigSalesChannel($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getAppConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppConfigSalesChannel**](../Model/RestApiResultAppConfigSalesChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatistics**
> \Flipdish\\Client\Models\RestApiArrayResultMobileAppsStatistics getStatistics($app_id, $platform_types)



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

# **getSubmissionDetails**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmissionDetails getSubmissionDetails($app_id)



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
    $result = $apiInstance->getSubmissionDetails($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getSubmissionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsSubmissionDetails**](../Model/RestApiResultMobileAppsSubmissionDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmissionStatus**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmissionStatus getSubmissionStatus($app_id, $submission_id)



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
$submission_id = 56; // int | 

try {
    $result = $apiInstance->getSubmissionStatus($app_id, $submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->getSubmissionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **submission_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMobileAppsSubmissionStatus**](../Model/RestApiResultMobileAppsSubmissionStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publish**
> \Flipdish\\Client\Models\RestApiResultRestApiIntegerResult publish($app_id, $submission_id, $platform_type)



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
$submission_id = 56; // int | 
$platform_type = "platform_type_example"; // string | 

try {
    $result = $apiInstance->publish($app_id, $submission_id, $platform_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->publish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **submission_id** | **int**|  |
 **platform_type** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultRestApiIntegerResult**](../Model/RestApiResultRestApiIntegerResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resubmission**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmission resubmission($app_id, $mobile_apps_submission)



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
    $result = $apiInstance->resubmission($app_id, $mobile_apps_submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->resubmission: ', $e->getMessage(), PHP_EOL;
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

# **submission**
> \Flipdish\\Client\Models\RestApiResultMobileAppsSubmission submission($app_id, $mobile_apps_submission)



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

# **unpublish**
> \Flipdish\\Client\Models\RestApiIntegerResult unpublish($app_id, $submission_id, $platform_type)



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
$submission_id = 56; // int | 
$platform_type = "platform_type_example"; // string | 

try {
    $result = $apiInstance->unpublish($app_id, $submission_id, $platform_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->unpublish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **submission_id** | **int**|  |
 **platform_type** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiIntegerResult**](../Model/RestApiIntegerResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppConfigSalesChannel**
> \Flipdish\\Client\Models\RestApiResultAppConfigSalesChannel updateAppConfigSalesChannel($app_id, $app_config_sales_channel)



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
    $result = $apiInstance->updateAppConfigSalesChannel($app_id, $app_config_sales_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->updateAppConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
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

# **updateSubmissionStatus**
> \Flipdish\\Client\Models\RestApiResultUpdateMobileAppsSubmissionStatus updateSubmissionStatus($app_id, $submission_id, $update_submission_status)



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
$submission_id = 56; // int | 
$update_submission_status = new \Flipdish\\Client\Models\UpdateMobileAppsSubmissionStatus(); // \Flipdish\\Client\Models\UpdateMobileAppsSubmissionStatus | 

try {
    $result = $apiInstance->updateSubmissionStatus($app_id, $submission_id, $update_submission_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->updateSubmissionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **submission_id** | **int**|  |
 **update_submission_status** | [**\Flipdish\\Client\Models\UpdateMobileAppsSubmissionStatus**](../Model/UpdateMobileAppsSubmissionStatus.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultUpdateMobileAppsSubmissionStatus**](../Model/RestApiResultUpdateMobileAppsSubmissionStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadImage**
> \Flipdish\\Client\Models\RestApiResultMobileAppsImage uploadImage($app_id, $image)



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
    $result = $apiInstance->uploadImage($app_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileAppsApi->uploadImage: ', $e->getMessage(), PHP_EOL;
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


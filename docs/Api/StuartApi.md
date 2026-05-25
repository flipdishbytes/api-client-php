# Flipdish\\Client\StuartApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJob**](StuartApi.md#cancelJob) | **DELETE** /api/v1.0/stuart/jobs/{jobId} | 
[**getJob**](StuartApi.md#getJob) | **GET** /api/v1.0/stuart/jobs/{jobId} | 
[**getStuartSettings**](StuartApi.md#getStuartSettings) | **GET** /api/v1.0/stuart/settings/{storeId} | 
[**postStuartSettings**](StuartApi.md#postStuartSettings) | **POST** /api/v1.0/stuart/settings/{storeId} | 


# **cancelJob**
> cancelJob($job_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StuartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int | 
$store_id = 56; // int | 

try {
    $apiInstance->cancelJob($job_id, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling StuartApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**|  |
 **store_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**
> \Flipdish\\Client\Models\RestApiResultJobResponse getJob($job_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StuartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getJob($job_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StuartApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultJobResponse**](../Model/RestApiResultJobResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStuartSettings**
> \Flipdish\\Client\Models\RestApiResultStuartSettings getStuartSettings($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StuartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $result = $apiInstance->getStuartSettings($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StuartApi->getStuartSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStuartSettings**](../Model/RestApiResultStuartSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStuartSettings**
> object postStuartSettings($store_id, $stuart_settings)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StuartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$stuart_settings = new \Flipdish\\Client\Models\StuartSettings(); // \Flipdish\\Client\Models\StuartSettings | 

try {
    $result = $apiInstance->postStuartSettings($store_id, $stuart_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StuartApi->postStuartSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **stuart_settings** | [**\Flipdish\\Client\Models\StuartSettings**](../Model/StuartSettings.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


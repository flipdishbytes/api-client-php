# Flipdish\\Client\WhiteLabelBuildsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**healthCheck**](WhiteLabelBuildsApi.md#healthCheck) | **GET** /api/v1.0/whitelabelbuilds/health | 
[**submitAndroidApps**](WhiteLabelBuildsApi.md#submitAndroidApps) | **POST** /api/v1.0/whitelabelbuilds/android/multiple | 
[**submitAndroidBuild**](WhiteLabelBuildsApi.md#submitAndroidBuild) | **POST** /api/v1.0/whitelabelbuilds/{appId}/android | 
[**submitIosApps**](WhiteLabelBuildsApi.md#submitIosApps) | **POST** /api/v1.0/whitelabelbuilds/ios/multiple | 
[**submitIosBuild**](WhiteLabelBuildsApi.md#submitIosBuild) | **POST** /api/v1.0/whitelabelbuilds/{appId}/ios | 


# **healthCheck**
> string healthCheck()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelBuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->healthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelBuildsApi->healthCheck: ', $e->getMessage(), PHP_EOL;
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

# **submitAndroidApps**
> \Flipdish\\Client\Models\RestApiResultBuildResultModel submitAndroidApps($white_label_ids, $branch, $build_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelBuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$white_label_ids = "white_label_ids_example"; // string | 
$branch = "branch_example"; // string | 
$build_type = "build_type_example"; // string | 

try {
    $result = $apiInstance->submitAndroidApps($white_label_ids, $branch, $build_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelBuildsApi->submitAndroidApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **white_label_ids** | **string**|  |
 **branch** | **string**|  | [optional]
 **build_type** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultBuildResultModel**](../Model/RestApiResultBuildResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitAndroidBuild**
> \Flipdish\\Client\Models\RestApiResultBuildResultModel submitAndroidBuild($app_id, $branch, $lane, $build_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelBuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$branch = "branch_example"; // string | 
$lane = "lane_example"; // string | 
$build_type = "build_type_example"; // string | 

try {
    $result = $apiInstance->submitAndroidBuild($app_id, $branch, $lane, $build_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelBuildsApi->submitAndroidBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **branch** | **string**|  |
 **lane** | **string**|  |
 **build_type** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBuildResultModel**](../Model/RestApiResultBuildResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitIosApps**
> \Flipdish\\Client\Models\RestApiResultBuildResultModel submitIosApps($white_label_ids, $branch, $build_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelBuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$white_label_ids = "white_label_ids_example"; // string | 
$branch = "branch_example"; // string | 
$build_type = "build_type_example"; // string | 

try {
    $result = $apiInstance->submitIosApps($white_label_ids, $branch, $build_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelBuildsApi->submitIosApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **white_label_ids** | **string**|  |
 **branch** | **string**|  | [optional]
 **build_type** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultBuildResultModel**](../Model/RestApiResultBuildResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitIosBuild**
> \Flipdish\\Client\Models\RestApiResultBuildResultModel submitIosBuild($app_id, $build_type, $branch, $submit_for_review)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelBuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$build_type = "build_type_example"; // string | 
$branch = "branch_example"; // string | 
$submit_for_review = true; // bool | 

try {
    $result = $apiInstance->submitIosBuild($app_id, $build_type, $branch, $submit_for_review);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelBuildsApi->submitIosBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **build_type** | **string**|  |
 **branch** | **string**|  |
 **submit_for_review** | **bool**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultBuildResultModel**](../Model/RestApiResultBuildResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


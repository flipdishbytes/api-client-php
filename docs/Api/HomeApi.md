# Flipdish\Client\HomeApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeHomeAction**](HomeApi.md#completeHomeAction) | **POST** /api/v1.0/{appId}/home/{homeActionId} | [PRIVATE API] Complete Home Action
[**dismissOldPortalAction**](HomeApi.md#dismissOldPortalAction) | **POST** /api/v1.0/home/dismissoldportalaction | [PRIVATE API] Complete Home Action
[**getHomeActions**](HomeApi.md#getHomeActions) | **GET** /api/v1.0/{appId}/home | [PRIVATE API] Get Home Actions
[**getHomeStatistics**](HomeApi.md#getHomeStatistics) | **GET** /api/v1.0/{appId}/home/stats | [PRIVATE API] Get Home Statistics


# **completeHomeAction**
> object completeHomeAction($app_id, $home_action_id, $is_dismissed)

[PRIVATE API] Complete Home Action

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\HomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$home_action_id = 56; // int | Id of the action
$is_dismissed = true; // bool | 

try {
    $result = $apiInstance->completeHomeAction($app_id, $home_action_id, $is_dismissed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomeApi->completeHomeAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **home_action_id** | **int**| Id of the action |
 **is_dismissed** | **bool**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dismissOldPortalAction**
> object dismissOldPortalAction()

[PRIVATE API] Complete Home Action

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\HomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dismissOldPortalAction();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomeApi->dismissOldPortalAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHomeActions**
> \Flipdish\Client\Models\RestApiArrayResultHomeAction getHomeActions($app_id)

[PRIVATE API] Get Home Actions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\HomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id

try {
    $result = $apiInstance->getHomeActions($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomeApi->getHomeActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultHomeAction**](../Model/RestApiArrayResultHomeAction.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHomeStatistics**
> \Flipdish\Client\Models\RestApiResultHomeStatistics getHomeStatistics($app_id)

[PRIVATE API] Get Home Statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\HomeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id

try {
    $result = $apiInstance->getHomeStatistics($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HomeApi->getHomeStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |

### Return type

[**\Flipdish\Client\Models\RestApiResultHomeStatistics**](../Model/RestApiResultHomeStatistics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


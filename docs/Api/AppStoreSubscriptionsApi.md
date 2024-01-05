# Flipdish\\Client\AppStoreSubscriptionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppStoreSubscription**](AppStoreSubscriptionsApi.md#createAppStoreSubscription) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/subscriptions | 
[**createAppStoreSubscription_0**](AppStoreSubscriptionsApi.md#createAppStoreSubscription_0) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/subscriptions | 
[**deleteAppSubscription**](AppStoreSubscriptionsApi.md#deleteAppSubscription) | **DELETE** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/subscriptions/{subscriptionId} | 
[**getAppStoreSubscriptionChangeJobStatus**](AppStoreSubscriptionsApi.md#getAppStoreSubscriptionChangeJobStatus) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/subscriptions/jobs/{jobId} | 
[**updateAppStoreSubscription**](AppStoreSubscriptionsApi.md#updateAppStoreSubscription) | **POST** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/subscriptions/{subscriptionId} | 


# **createAppStoreSubscription**
> \Flipdish\\Client\Models\RestApiArrayResultAppStoreSubscriptionItem createAppStoreSubscription($app_id, $app_store_app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $result = $apiInstance->createAppStoreSubscription($app_id, $app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreSubscriptionsApi->createAppStoreSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAppStoreSubscriptionItem**](../Model/RestApiArrayResultAppStoreSubscriptionItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppStoreSubscription_0**
> \Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionJobResponse createAppStoreSubscription_0($app_id, $app_store_app_id, $add_app_store_subscription_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$add_app_store_subscription_request = new \Flipdish\\Client\Models\AddAppStoreSubscriptionRequest(); // \Flipdish\\Client\Models\AddAppStoreSubscriptionRequest | 

try {
    $result = $apiInstance->createAppStoreSubscription_0($app_id, $app_store_app_id, $add_app_store_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreSubscriptionsApi->createAppStoreSubscription_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **add_app_store_subscription_request** | [**\Flipdish\\Client\Models\AddAppStoreSubscriptionRequest**](../Model/AddAppStoreSubscriptionRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionJobResponse**](../Model/RestApiResultAppStoreSubscriptionJobResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppSubscription**
> \Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionJobResponse deleteAppSubscription($app_id, $app_store_app_id, $subscription_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 

try {
    $result = $apiInstance->deleteAppSubscription($app_id, $app_store_app_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreSubscriptionsApi->deleteAppSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **subscription_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionJobResponse**](../Model/RestApiResultAppStoreSubscriptionJobResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreSubscriptionChangeJobStatus**
> \Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionChangeJobStatusResponse getAppStoreSubscriptionChangeJobStatus($app_id, $app_store_app_id, $job_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$job_id = "job_id_example"; // string | 

try {
    $result = $apiInstance->getAppStoreSubscriptionChangeJobStatus($app_id, $app_store_app_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreSubscriptionsApi->getAppStoreSubscriptionChangeJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **job_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionChangeJobStatusResponse**](../Model/RestApiResultAppStoreSubscriptionChangeJobStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreSubscription**
> \Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionJobResponse updateAppStoreSubscription($app_id, $app_store_app_id, $subscription_id, $update_app_store_subscription_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$update_app_store_subscription_request = new \Flipdish\\Client\Models\UpdateAppStoreSubscriptionRequest(); // \Flipdish\\Client\Models\UpdateAppStoreSubscriptionRequest | 

try {
    $result = $apiInstance->updateAppStoreSubscription($app_id, $app_store_app_id, $subscription_id, $update_app_store_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreSubscriptionsApi->updateAppStoreSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **subscription_id** | **string**|  |
 **update_app_store_subscription_request** | [**\Flipdish\\Client\Models\UpdateAppStoreSubscriptionRequest**](../Model/UpdateAppStoreSubscriptionRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreSubscriptionJobResponse**](../Model/RestApiResultAppStoreSubscriptionJobResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


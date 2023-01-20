# Flipdish\\Client\SubscriptionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscriptionById**](SubscriptionsApi.md#getSubscriptionById) | **GET** /api/v1.0/{appId}/subscriptions/{subscriptionId} | Get subscription by id
[**getSubscriptionsForApp**](SubscriptionsApi.md#getSubscriptionsForApp) | **GET** /api/v1.0/{appId}/subscriptions | Get list of subscriptions for an App


# **getSubscriptionById**
> \Flipdish\\Client\Models\RestApiResultSubscription getSubscriptionById($app_id, $subscription_id)

Get subscription by id

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Id
$subscription_id = "subscription_id_example"; // string | Subscription Id

try {
    $result = $apiInstance->getSubscriptionById($app_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **subscription_id** | **string**| Subscription Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultSubscription**](../Model/RestApiResultSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionsForApp**
> \Flipdish\\Client\Models\RestApiArrayResultSubscriptionSummary getSubscriptionsForApp($app_id, $store_id)

Get list of subscriptions for an App

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Id
$store_id = array(56); // int[] | Store id to filter subscriptions (optional)

try {
    $result = $apiInstance->getSubscriptionsForApp($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **store_id** | [**int[]**](../Model/int.md)| Store id to filter subscriptions (optional) |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultSubscriptionSummary**](../Model/RestApiArrayResultSubscriptionSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# Flipdish\\Client\SubscriptionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscriptionById**](SubscriptionsApi.md#getSubscriptionById) | **GET** /api/v1.0/{appId}/subscriptions/{subscriptionId} | 
[**getSubscriptionsForApp**](SubscriptionsApi.md#getSubscriptionsForApp) | **GET** /api/v1.0/{appId}/subscriptions | 
[**hasCustomerGotPaymentMethodOnFile**](SubscriptionsApi.md#hasCustomerGotPaymentMethodOnFile) | **GET** /api/v1.0/{appId}/subscriptions/hasPaymentMethod | 


# **getSubscriptionById**
> \Flipdish\\Client\Models\RestApiResultSubscription getSubscriptionById($app_id, $subscription_id)



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
$app_id = "app_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 

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
 **app_id** | **string**|  |
 **subscription_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultSubscription**](../Model/RestApiResultSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionsForApp**
> \Flipdish\\Client\Models\RestApiArrayResultSubscriptionSummary getSubscriptionsForApp($app_id, $exclude_not_owned_subscriptions, $store_id, $exclude_cancelled_subscriptions)



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
$app_id = "app_id_example"; // string | 
$exclude_not_owned_subscriptions = true; // bool | 
$store_id = array(56); // int[] | 
$exclude_cancelled_subscriptions = true; // bool | 

try {
    $result = $apiInstance->getSubscriptionsForApp($app_id, $exclude_not_owned_subscriptions, $store_id, $exclude_cancelled_subscriptions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **exclude_not_owned_subscriptions** | **bool**|  | [optional]
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]
 **exclude_cancelled_subscriptions** | **bool**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultSubscriptionSummary**](../Model/RestApiArrayResultSubscriptionSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hasCustomerGotPaymentMethodOnFile**
> \Flipdish\\Client\Models\RestApiResultHasPaymentMethodResponse hasCustomerGotPaymentMethodOnFile($app_id, $email)



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
$app_id = "app_id_example"; // string | 
$email = "email_example"; // string | 

try {
    $result = $apiInstance->hasCustomerGotPaymentMethodOnFile($app_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->hasCustomerGotPaymentMethodOnFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **email** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultHasPaymentMethodResponse**](../Model/RestApiResultHasPaymentMethodResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


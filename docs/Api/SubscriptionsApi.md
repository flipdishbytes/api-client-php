# Flipdish\\Client\SubscriptionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscriptionById**](SubscriptionsApi.md#getSubscriptionById) | **GET** /api/v1.0/{appId}/subscriptions/{subscriptionId} | Get subscription by id
[**getSubscriptionInvoices**](SubscriptionsApi.md#getSubscriptionInvoices) | **GET** /api/v1.0/{appId}/subscriptions/{subscriptionId}/invoices | Get list of invoices for a subscription by id
[**getSubscriptionsForApp**](SubscriptionsApi.md#getSubscriptionsForApp) | **GET** /api/v1.0/{appId}/subscriptions | Get list of subscriptions for an App


# **getSubscriptionById**
> \Flipdish\\Client\Models\Subscription getSubscriptionById($app_id, $subscription_id)

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

[**\Flipdish\\Client\Models\Subscription**](../Model/Subscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionInvoices**
> \Flipdish\\Client\Models\RestApiPaginationResultInvoice getSubscriptionInvoices($app_id, $subscription_id, $limit, $starting_after_id)

Get list of invoices for a subscription by id

[BETA - this endpoint is under development, do not use it in your production system] Due to the nature of this request, page will always remain as 0.

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
$limit = 56; // int | Limit of invoices to return
$starting_after_id = "starting_after_id_example"; // string | Id for use in pagination. This defines your last known invoice in the list. For instance, if you make a list request and receive 10 invoices, last invoice ends with in_xxx, your subsequent call should include startingAfterId=in_xxx in order to fetch the next page of the invoices list.

try {
    $result = $apiInstance->getSubscriptionInvoices($app_id, $subscription_id, $limit, $starting_after_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **subscription_id** | **string**| Subscription Id |
 **limit** | **int**| Limit of invoices to return | [optional]
 **starting_after_id** | **string**| Id for use in pagination. This defines your last known invoice in the list. For instance, if you make a list request and receive 10 invoices, last invoice ends with in_xxx, your subsequent call should include startingAfterId&#x3D;in_xxx in order to fetch the next page of the invoices list. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultInvoice**](../Model/RestApiPaginationResultInvoice.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionsForApp**
> \Flipdish\\Client\Models\RestApiArrayResultSubscriptionSummary getSubscriptionsForApp($app_id, $exclude_not_owned_subscriptions)

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
$exclude_not_owned_subscriptions = true; // bool | Exclude not owned subscriptions. Set to true to only view your subscriptions

try {
    $result = $apiInstance->getSubscriptionsForApp($app_id, $exclude_not_owned_subscriptions);
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
 **exclude_not_owned_subscriptions** | **bool**| Exclude not owned subscriptions. Set to true to only view your subscriptions | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultSubscriptionSummary**](../Model/RestApiArrayResultSubscriptionSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


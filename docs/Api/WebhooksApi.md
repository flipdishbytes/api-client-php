# Flipdish\Client\WebhooksApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**craeteWebhookSubscription**](WebhooksApi.md#craeteWebhookSubscription) | **POST** /api/v1.0/webhooks/{clientId}/subscriptions | Create a webhook subscription for you Oauth client
[**createWebhookSubscriptionEventNames**](WebhooksApi.md#createWebhookSubscriptionEventNames) | **POST** /api/v1.0/webhooks/{clientId}/subscriptions/{webhookSubscriptionId}/events/{eventName} | Add event name to your webhook subscription
[**deleteWebhookSubscription**](WebhooksApi.md#deleteWebhookSubscription) | **DELETE** /api/v1.0/webhooks/{clientId}/subscriptions/{webhookSubscriptionId} | Delete you webhook subscription
[**deleteWebhookSubscriptionEventName**](WebhooksApi.md#deleteWebhookSubscriptionEventName) | **DELETE** /api/v1.0/webhooks/{clientId}/subscriptions/{webhookSubscriptionId}/events/{eventName} | Remove event name to your webhook subscription
[**getWebhookEventNames**](WebhooksApi.md#getWebhookEventNames) | **GET** /api/v1.0/webhooks/events | Get all webhook subscription event names
[**getWebhookEventNamesBySubscriptionId**](WebhooksApi.md#getWebhookEventNamesBySubscriptionId) | **GET** /api/v1.0/webhooks/{clientId}/subscriptions/{webhookSubscriptionId}/events | Get your webhook subscriptions selected event names
[**getWebhookLogs**](WebhooksApi.md#getWebhookLogs) | **GET** /api/v1.0/webhooks/{clientId}/subscriptions/{webhookSubscriptionId}/logs | Get logs for your webhook subscription
[**getWebhookSubscriptions**](WebhooksApi.md#getWebhookSubscriptions) | **GET** /api/v1.0/webhooks/{clientId}/subscriptions | Get all webhook subscriptions by your Oauth client id
[**updateWebhookSubscription**](WebhooksApi.md#updateWebhookSubscription) | **PUT** /api/v1.0/webhooks/{clientId}/subscriptions/{webhookSubscriptionId} | Update a webhook subscription object


# **craeteWebhookSubscription**
> \Flipdish\Client\Models\RestApiIntegerResult craeteWebhookSubscription($client_id, $webhook_subscription)

Create a webhook subscription for you Oauth client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription = new \Flipdish\Client\Models\WebhookSubscription(); // \Flipdish\Client\Models\WebhookSubscription | Webhook subscription object

try {
    $result = $apiInstance->craeteWebhookSubscription($client_id, $webhook_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->craeteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription** | [**\Flipdish\Client\Models\WebhookSubscription**](../Model/WebhookSubscription.md)| Webhook subscription object |

### Return type

[**\Flipdish\Client\Models\RestApiIntegerResult**](../Model/RestApiIntegerResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWebhookSubscriptionEventNames**
> createWebhookSubscriptionEventNames($client_id, $webhook_subscription_id, $event_name)

Add event name to your webhook subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$event_name = "event_name_example"; // string | Webhook subscription event name

try {
    $apiInstance->createWebhookSubscriptionEventNames($client_id, $webhook_subscription_id, $event_name);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhookSubscriptionEventNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **event_name** | **string**| Webhook subscription event name |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhookSubscription**
> deleteWebhookSubscription($client_id, $webhook_subscription_id)

Delete you webhook subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier

try {
    $apiInstance->deleteWebhookSubscription($client_id, $webhook_subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhookSubscriptionEventName**
> deleteWebhookSubscriptionEventName($client_id, $webhook_subscription_id, $event_name)

Remove event name to your webhook subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$event_name = "event_name_example"; // string | Webhook subscription event name

try {
    $apiInstance->deleteWebhookSubscriptionEventName($client_id, $webhook_subscription_id, $event_name);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSubscriptionEventName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **event_name** | **string**| Webhook subscription event name |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventNames**
> \Flipdish\Client\Models\RestApiStringArrayResult getWebhookEventNames()

Get all webhook subscription event names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhookEventNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookEventNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventNamesBySubscriptionId**
> \Flipdish\Client\Models\RestApiStringArrayResult getWebhookEventNamesBySubscriptionId($client_id, $webhook_subscription_id)

Get your webhook subscriptions selected event names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier

try {
    $result = $apiInstance->getWebhookEventNamesBySubscriptionId($client_id, $webhook_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookEventNamesBySubscriptionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |

### Return type

[**\Flipdish\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookLogs**
> \Flipdish\Client\Models\RestApiPaginationResultWebhookLog getWebhookLogs($client_id, $webhook_subscription_id, $start, $end, $page, $limit)

Get logs for your webhook subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time
$page = 56; // int | Page number
$limit = 56; // int | Page size

try {
    $result = $apiInstance->getWebhookLogs($client_id, $webhook_subscription_id, $start, $end, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **start** | **\DateTime**| Start time |
 **end** | **\DateTime**| End time |
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Page size | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultWebhookLog**](../Model/RestApiPaginationResultWebhookLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookSubscriptions**
> \Flipdish\Client\Models\RestApiArrayResultWebhookSubscription getWebhookSubscriptions($client_id)

Get all webhook subscriptions by your Oauth client id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier

try {
    $result = $apiInstance->getWebhookSubscriptions($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultWebhookSubscription**](../Model/RestApiArrayResultWebhookSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookSubscription**
> updateWebhookSubscription($client_id, $webhook_subscription_id, $webhook_subscription)

Update a webhook subscription object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Oauth client identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$webhook_subscription = new \Flipdish\Client\Models\WebhookSubscription(); // \Flipdish\Client\Models\WebhookSubscription | Webhook subscription object

try {
    $apiInstance->updateWebhookSubscription($client_id, $webhook_subscription_id, $webhook_subscription);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Oauth client identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **webhook_subscription** | [**\Flipdish\Client\Models\WebhookSubscription**](../Model/WebhookSubscription.md)| Webhook subscription object |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\Client\WebhooksApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**craeteWebhookSubscription**](WebhooksApi.md#craeteWebhookSubscription) | **POST** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions | Create a webhook subscription for you Oauth App
[**createWebhookSubscriptionEventNames**](WebhooksApi.md#createWebhookSubscriptionEventNames) | **POST** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId}/events/{eventName} | Add event name to your webhook subscription
[**deleteWebhookSubscription**](WebhooksApi.md#deleteWebhookSubscription) | **DELETE** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId} | Delete you webhook subscription
[**deleteWebhookSubscriptionEventName**](WebhooksApi.md#deleteWebhookSubscriptionEventName) | **DELETE** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId}/events/{eventName} | Remove event name to your webhook subscription
[**getWebhookEventNames**](WebhooksApi.md#getWebhookEventNames) | **GET** /api/v1.0/{appId}/webhooks/events | Get all webhook subscription event names
[**getWebhookEventNamesBySubscriptionId**](WebhooksApi.md#getWebhookEventNamesBySubscriptionId) | **GET** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId}/events | Get your webhook subscriptions selected event names
[**getWebhookEventSample**](WebhooksApi.md#getWebhookEventSample) | **GET** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId}/events/{eventName}/test | Get a sample event from a webhook subscription
[**getWebhookLogs**](WebhooksApi.md#getWebhookLogs) | **GET** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId}/logs | Get logs for your webhook subscription
[**getWebhookSubscriptions**](WebhooksApi.md#getWebhookSubscriptions) | **GET** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions | Get all webhook subscriptions by your Oauth App id
[**updateWebhookSubscription**](WebhooksApi.md#updateWebhookSubscription) | **PUT** /api/v1.0/{appId}/webhooks/{oauthAppId}/subscriptions/{webhookSubscriptionId} | Update a webhook subscription object


# **craeteWebhookSubscription**
> \Flipdish\Client\Models\RestApiIntegerResult craeteWebhookSubscription($oauth_app_id, $webhook_subscription, $app_id)

Create a webhook subscription for you Oauth App

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription = new \Flipdish\Client\Models\WebhookSubscription(); // \Flipdish\Client\Models\WebhookSubscription | Webhook subscription object
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->craeteWebhookSubscription($oauth_app_id, $webhook_subscription, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->craeteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription** | [**\Flipdish\Client\Models\WebhookSubscription**](../Model/WebhookSubscription.md)| Webhook subscription object |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiIntegerResult**](../Model/RestApiIntegerResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWebhookSubscriptionEventNames**
> createWebhookSubscriptionEventNames($oauth_app_id, $webhook_subscription_id, $event_name, $app_id)

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$event_name = "event_name_example"; // string | Webhook subscription event name
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->createWebhookSubscriptionEventNames($oauth_app_id, $webhook_subscription_id, $event_name, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhookSubscriptionEventNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **event_name** | **string**| Webhook subscription event name |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhookSubscription**
> deleteWebhookSubscription($oauth_app_id, $webhook_subscription_id, $app_id)

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->deleteWebhookSubscription($oauth_app_id, $webhook_subscription_id, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhookSubscriptionEventName**
> deleteWebhookSubscriptionEventName($oauth_app_id, $webhook_subscription_id, $event_name, $app_id)

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$event_name = "event_name_example"; // string | Webhook subscription event name
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->deleteWebhookSubscriptionEventName($oauth_app_id, $webhook_subscription_id, $event_name, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSubscriptionEventName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **event_name** | **string**| Webhook subscription event name |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventNames**
> \Flipdish\Client\Models\RestApiStringArrayResult getWebhookEventNames($app_id)

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
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getWebhookEventNames($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookEventNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventNamesBySubscriptionId**
> \Flipdish\Client\Models\RestApiStringArrayResult getWebhookEventNamesBySubscriptionId($oauth_app_id, $webhook_subscription_id, $app_id)

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getWebhookEventNamesBySubscriptionId($oauth_app_id, $webhook_subscription_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookEventNamesBySubscriptionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEventSample**
> \Flipdish\Client\Models\WebhookEventSample getWebhookEventSample($event_name, $app_id, $oauth_app_id, $webhook_subscription_id, $version)

Get a sample event from a webhook subscription

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
$event_name = "event_name_example"; // string | 
$app_id = "app_id_example"; // string | 
$oauth_app_id = "oauth_app_id_example"; // string | 
$webhook_subscription_id = "webhook_subscription_id_example"; // string | 
$version = "version_example"; // string | 

try {
    $result = $apiInstance->getWebhookEventSample($event_name, $app_id, $oauth_app_id, $webhook_subscription_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookEventSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_name** | **string**|  |
 **app_id** | **string**|  |
 **oauth_app_id** | **string**|  |
 **webhook_subscription_id** | **string**|  |
 **version** | **string**|  | [optional]

### Return type

[**\Flipdish\Client\Models\WebhookEventSample**](../Model/WebhookEventSample.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookLogs**
> \Flipdish\Client\Models\RestApiPaginationResultWebhookLog getWebhookLogs($oauth_app_id, $webhook_subscription_id, $start, $end, $app_id, $page, $limit)

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time
$app_id = "app_id_example"; // string | 
$page = 56; // int | Page number
$limit = 56; // int | Page size

try {
    $result = $apiInstance->getWebhookLogs($oauth_app_id, $webhook_subscription_id, $start, $end, $app_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **start** | **\DateTime**| Start time |
 **end** | **\DateTime**| End time |
 **app_id** | **string**|  |
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
> \Flipdish\Client\Models\RestApiPaginationResultWebhookSubscription getWebhookSubscriptions($oauth_app_id, $app_id, $page, $limit)

Get all webhook subscriptions by your Oauth App id

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$app_id = "app_id_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getWebhookSubscriptions($oauth_app_id, $app_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **app_id** | **string**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultWebhookSubscription**](../Model/RestApiPaginationResultWebhookSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhookSubscription**
> updateWebhookSubscription($oauth_app_id, $webhook_subscription_id, $webhook_subscription, $app_id)

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
$oauth_app_id = "oauth_app_id_example"; // string | Oauth App identifier
$webhook_subscription_id = 56; // int | Webhook subscription identifier
$webhook_subscription = new \Flipdish\Client\Models\WebhookSubscription(); // \Flipdish\Client\Models\WebhookSubscription | Webhook subscription object
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->updateWebhookSubscription($oauth_app_id, $webhook_subscription_id, $webhook_subscription, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhookSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Oauth App identifier |
 **webhook_subscription_id** | **int**| Webhook subscription identifier |
 **webhook_subscription** | [**\Flipdish\Client\Models\WebhookSubscription**](../Model/WebhookSubscription.md)| Webhook subscription object |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


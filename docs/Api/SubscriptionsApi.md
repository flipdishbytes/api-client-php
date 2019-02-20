# Flipdish\Client\SubscriptionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionsCancelSubscription**](SubscriptionsApi.md#subscriptionsCancelSubscription) | **DELETE** /api/v1.0/subscriptions/{subscriptionId} | Cancel the subscription
[**subscriptionsGetCard**](SubscriptionsApi.md#subscriptionsGetCard) | **GET** /api/v1.0/subscriptions/{subscriptionId}/card | Get the card linked to the subscription
[**subscriptionsGetPlansByCurrency**](SubscriptionsApi.md#subscriptionsGetPlansByCurrency) | **GET** /api/v1.0/subscriptions/plans | Get avaialble plans for currency&#39;s user
[**subscriptionsGetSubscription**](SubscriptionsApi.md#subscriptionsGetSubscription) | **GET** /api/v1.0/subscriptions/{subscriptionId} | Get the subscription including the payment history
[**subscriptionsGetUserSubscriptionByAppId**](SubscriptionsApi.md#subscriptionsGetUserSubscriptionByAppId) | **GET** /api/v1.0/subscriptions | Get subscription by appId
[**subscriptionsReplaceOldCardWithNewCard**](SubscriptionsApi.md#subscriptionsReplaceOldCardWithNewCard) | **POST** /api/v1.0/subscriptions/{subscriptionId}/card/new | Add a new card and replace the old one
[**subscriptionsSubscribe**](SubscriptionsApi.md#subscriptionsSubscribe) | **POST** /api/v1.0/subscriptions | Create a new subscription
[**subscriptionsUpdateCardExpiringDate**](SubscriptionsApi.md#subscriptionsUpdateCardExpiringDate) | **POST** /api/v1.0/subscriptions/{subscriptionId}/card | Update card expiring date
[**subscriptionsUpdateSubscription**](SubscriptionsApi.md#subscriptionsUpdateSubscription) | **POST** /api/v1.0/subscriptions/{subscriptionId} | Update the subscription


# **subscriptionsCancelSubscription**
> object subscriptionsCancelSubscription($subscription_id)

Cancel the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription identifier

try {
    $result = $apiInstance->subscriptionsCancelSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsCancelSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription identifier |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGetCard**
> \Flipdish\Client\Models\RestApiResultCard subscriptionsGetCard($subscription_id)

Get the card linked to the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription identifier

try {
    $result = $apiInstance->subscriptionsGetCard($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultCard**](../Model/RestApiResultCard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGetPlansByCurrency**
> \Flipdish\Client\Models\RestApiResultSubscriptionPlansResponse subscriptionsGetPlansByCurrency()

Get avaialble plans for currency's user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsGetPlansByCurrency();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetPlansByCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\Client\Models\RestApiResultSubscriptionPlansResponse**](../Model/RestApiResultSubscriptionPlansResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGetSubscription**
> \Flipdish\Client\Models\RestApiResultSubscription subscriptionsGetSubscription($subscription_id)

Get the subscription including the payment history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription Identifier

try {
    $result = $apiInstance->subscriptionsGetSubscription($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription Identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultSubscription**](../Model/RestApiResultSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGetUserSubscriptionByAppId**
> \Flipdish\Client\Models\RestApiResultSubscription subscriptionsGetUserSubscriptionByAppId($app_id)

Get subscription by appId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The string app identifier

try {
    $result = $apiInstance->subscriptionsGetUserSubscriptionByAppId($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetUserSubscriptionByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The string app identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultSubscription**](../Model/RestApiResultSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsReplaceOldCardWithNewCard**
> object subscriptionsReplaceOldCardWithNewCard($subscription_id, $card)

Add a new card and replace the old one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription identifier
$card = new \Flipdish\Client\Models\CardWithToken(); // \Flipdish\Client\Models\CardWithToken | Token Id

try {
    $result = $apiInstance->subscriptionsReplaceOldCardWithNewCard($subscription_id, $card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsReplaceOldCardWithNewCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription identifier |
 **card** | [**\Flipdish\Client\Models\CardWithToken**](../Model/CardWithToken.md)| Token Id |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscribe**
> object subscriptionsSubscribe($subscription)

Create a new subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = new \Flipdish\Client\Models\SubscriptionWithToken(); // \Flipdish\Client\Models\SubscriptionWithToken | Data necessary to create a new subscription

try {
    $result = $apiInstance->subscriptionsSubscribe($subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription** | [**\Flipdish\Client\Models\SubscriptionWithToken**](../Model/SubscriptionWithToken.md)| Data necessary to create a new subscription |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsUpdateCardExpiringDate**
> \Flipdish\Client\Models\RestApiResultCard subscriptionsUpdateCardExpiringDate($subscription_id, $card)

Update card expiring date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription identifier
$card = new \Flipdish\Client\Models\CardBase(); // \Flipdish\Client\Models\CardBase | Data to update card expiring date

try {
    $result = $apiInstance->subscriptionsUpdateCardExpiringDate($subscription_id, $card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdateCardExpiringDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription identifier |
 **card** | [**\Flipdish\Client\Models\CardBase**](../Model/CardBase.md)| Data to update card expiring date |

### Return type

[**\Flipdish\Client\Models\RestApiResultCard**](../Model/RestApiResultCard.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsUpdateSubscription**
> object subscriptionsUpdateSubscription($subscription_id, $subscription)

Update the subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription identifier
$subscription = new \Flipdish\Client\Models\SubscriptionBase(); // \Flipdish\Client\Models\SubscriptionBase | Data to update the subscription

try {
    $result = $apiInstance->subscriptionsUpdateSubscription($subscription_id, $subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription identifier |
 **subscription** | [**\Flipdish\Client\Models\SubscriptionBase**](../Model/SubscriptionBase.md)| Data to update the subscription |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\Client\PushNotificationsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePushNotification**](PushNotificationsApi.md#deletePushNotification) | **DELETE** /api/v1.0/{appId}/pushnotifications/{scheduledPushNotificationId} | [PRIVATE] Push notification to cutomers
[**getPushNotifications**](PushNotificationsApi.md#getPushNotifications) | **GET** /api/v1.0/{appId}/pushnotifications | [PRIVATE] Push notification to cutomers
[**schedulePushNotification**](PushNotificationsApi.md#schedulePushNotification) | **POST** /api/v1.0/{appId}/pushnotifications | [PRIVATE] Push notification to cutomers
[**updatePushNotification**](PushNotificationsApi.md#updatePushNotification) | **POST** /api/v1.0/{appId}/pushnotifications/{scheduledPushNotificationId} | [PRIVATE] Update the push notification


# **deletePushNotification**
> deletePushNotification($app_id, $scheduled_push_notification_id)

[PRIVATE] Push notification to cutomers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PushNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$scheduled_push_notification_id = 56; // int | ID of Scheduled push notifiaction to delete

try {
    $apiInstance->deletePushNotification($app_id, $scheduled_push_notification_id);
} catch (Exception $e) {
    echo 'Exception when calling PushNotificationsApi->deletePushNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **scheduled_push_notification_id** | **int**| ID of Scheduled push notifiaction to delete |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushNotifications**
> \Flipdish\Client\Models\RestApiPaginationResultPushNotificationResponse getPushNotifications($app_id, $page, $limit)

[PRIVATE] Push notification to cutomers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PushNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getPushNotifications($app_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushNotificationsApi->getPushNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultPushNotificationResponse**](../Model/RestApiPaginationResultPushNotificationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schedulePushNotification**
> \Flipdish\Client\Models\RestApiResultPushNotificationResponse schedulePushNotification($app_id, $notification)

[PRIVATE] Push notification to cutomers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PushNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id
$notification = new \Flipdish\Client\Models\PushNotificationRequest(); // \Flipdish\Client\Models\PushNotificationRequest | Notification to send

try {
    $result = $apiInstance->schedulePushNotification($app_id, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushNotificationsApi->schedulePushNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id |
 **notification** | [**\Flipdish\Client\Models\PushNotificationRequest**](../Model/PushNotificationRequest.md)| Notification to send |

### Return type

[**\Flipdish\Client\Models\RestApiResultPushNotificationResponse**](../Model/RestApiResultPushNotificationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePushNotification**
> \Flipdish\Client\Models\RestApiResultPushNotificationResponse updatePushNotification($app_id, $scheduled_push_notification_id, $notification)

[PRIVATE] Update the push notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PushNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id
$scheduled_push_notification_id = 56; // int | Notification Id
$notification = new \Flipdish\Client\Models\PushNotificationRequest(); // \Flipdish\Client\Models\PushNotificationRequest | Notification to send

try {
    $result = $apiInstance->updatePushNotification($app_id, $scheduled_push_notification_id, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushNotificationsApi->updatePushNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id |
 **scheduled_push_notification_id** | **int**| Notification Id |
 **notification** | [**\Flipdish\Client\Models\PushNotificationRequest**](../Model/PushNotificationRequest.md)| Notification to send |

### Return type

[**\Flipdish\Client\Models\RestApiResultPushNotificationResponse**](../Model/RestApiResultPushNotificationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


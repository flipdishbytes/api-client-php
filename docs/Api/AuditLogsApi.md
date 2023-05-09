# Flipdish\\Client\AuditLogsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderAuditLog**](AuditLogsApi.md#addOrderAuditLog) | **POST** /api/v1.0/auditlogs/orders/{orderId} | 
[**addStoreAuditLogEvent**](AuditLogsApi.md#addStoreAuditLogEvent) | **POST** /api/v1.0/auditlogs/stores/{storeId} | 


# **addOrderAuditLog**
> addOrderAuditLog($order_id, $external_event_create)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AuditLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 
$external_event_create = array(new \Flipdish\\Client\Models\ExternalStoreAuditLog()); // \Flipdish\\Client\Models\ExternalStoreAuditLog[] | 

try {
    $apiInstance->addOrderAuditLog($order_id, $external_event_create);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogsApi->addOrderAuditLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **external_event_create** | [**\Flipdish\\Client\Models\ExternalStoreAuditLog[]**](../Model/ExternalStoreAuditLog.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStoreAuditLogEvent**
> addStoreAuditLogEvent($store_id, $external_event_create)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AuditLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$external_event_create = array(new \Flipdish\\Client\Models\ExternalStoreAuditLog()); // \Flipdish\\Client\Models\ExternalStoreAuditLog[] | 

try {
    $apiInstance->addStoreAuditLogEvent($store_id, $external_event_create);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogsApi->addStoreAuditLogEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **external_event_create** | [**\Flipdish\\Client\Models\ExternalStoreAuditLog[]**](../Model/ExternalStoreAuditLog.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\OrderBatchingConfigurationApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](OrderBatchingConfigurationApi.md#get) | **GET** /api/v1.0/stores/{storeId}/order-batching-configuration | Returns order batching configuration for a specific store
[**post**](OrderBatchingConfigurationApi.md#post) | **POST** /api/v1.0/stores/{storeId}/order-batching-configuration | Sets order batching configuration for a specific store


# **get**
> \Flipdish\\Client\Models\RestApiResultOrderBatchingConfiguration get($store_id)

Returns order batching configuration for a specific store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrderBatchingConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Id

try {
    $result = $apiInstance->get($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchingConfigurationApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderBatchingConfiguration**](../Model/RestApiResultOrderBatchingConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($store_id, $set_order_batching_configuration)

Sets order batching configuration for a specific store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrderBatchingConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Id
$set_order_batching_configuration = new \Flipdish\\Client\Models\SetOrderBatchingConfiguration(); // \Flipdish\\Client\Models\SetOrderBatchingConfiguration | SetOrderBatchingConfiguration

try {
    $apiInstance->post($store_id, $set_order_batching_configuration);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchingConfigurationApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store Id |
 **set_order_batching_configuration** | [**\Flipdish\\Client\Models\SetOrderBatchingConfiguration**](../Model/SetOrderBatchingConfiguration.md)| SetOrderBatchingConfiguration |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


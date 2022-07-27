# Flipdish\\Client\OrderBatchesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllOrderBatches**](OrderBatchesApi.md#getAllOrderBatches) | **GET** /api/v1.0/{appId}/stores/{storeId}/order-batches | Returns order batches
[**getOrderBatch**](OrderBatchesApi.md#getOrderBatch) | **GET** /api/v1.0/{appId}/stores/{storeId}/order-batches/{batchId} | Returns the order batch details


# **getAllOrderBatches**
> \Flipdish\\Client\Models\RestApiArrayResultOrderBatchItem getAllOrderBatches($app_id, $store_id, $created_from, $created_to)

Returns order batches

Entries are sorted by date, from the most recent. At most 100 entries are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrderBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Id
$store_id = 56; // int | Store Id
$created_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for retrieving the entries
$created_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for retrieving the entries

try {
    $result = $apiInstance->getAllOrderBatches($app_id, $store_id, $created_from, $created_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchesApi->getAllOrderBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **store_id** | **int**| Store Id |
 **created_from** | **\DateTime**| Start date for retrieving the entries | [optional]
 **created_to** | **\DateTime**| End date for retrieving the entries | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOrderBatchItem**](../Model/RestApiArrayResultOrderBatchItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderBatch**
> \Flipdish\\Client\Models\RestApiResultOrderBatch getOrderBatch($app_id, $store_id, $batch_id)

Returns the order batch details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrderBatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Id
$store_id = 56; // int | Store Id
$batch_id = 56; // int | Order Batch Id

try {
    $result = $apiInstance->getOrderBatch($app_id, $store_id, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchesApi->getOrderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **store_id** | **int**| Store Id |
 **batch_id** | **int**| Order Batch Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderBatch**](../Model/RestApiResultOrderBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


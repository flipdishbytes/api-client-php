# Flipdish\\Client\OrderBatchesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllOrderBatches**](OrderBatchesApi.md#getAllOrderBatches) | **GET** /api/v1.0/{appId}/order-batches | 
[**getOrderBatch**](OrderBatchesApi.md#getOrderBatch) | **GET** /api/v1.0/{appId}/order-batches/{orderBatchId} | 


# **getAllOrderBatches**
> \Flipdish\\Client\Models\RestApiArrayResultOrderBatch getAllOrderBatches($app_id, $store_ids, $created_from, $created_to)



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
$app_id = "app_id_example"; // string | 
$store_ids = array(56); // int[] | 
$created_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getAllOrderBatches($app_id, $store_ids, $created_from, $created_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchesApi->getAllOrderBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **created_from** | **\DateTime**|  | [optional]
 **created_to** | **\DateTime**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOrderBatch**](../Model/RestApiArrayResultOrderBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderBatch**
> \Flipdish\\Client\Models\RestApiResultOrderBatch getOrderBatch($app_id, $order_batch_id)



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
$app_id = "app_id_example"; // string | 
$order_batch_id = 56; // int | 

try {
    $result = $apiInstance->getOrderBatch($app_id, $order_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchesApi->getOrderBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_batch_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderBatch**](../Model/RestApiResultOrderBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\OrderBatchApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllOrderBatches**](OrderBatchApi.md#getAllOrderBatches) | **GET** /api/v1.0/{appId}/stores/{storeId}/order-batches | Returns order batches created in a given time range


# **getAllOrderBatches**
> \Flipdish\\Client\Models\RestApiArrayResultOrderBatchItem getAllOrderBatches($app_id, $store_id, $start_date, $end_date)

Returns order batches created in a given time range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrderBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Id
$store_id = 56; // int | Store Id
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date

try {
    $result = $apiInstance->getAllOrderBatches($app_id, $store_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderBatchApi->getAllOrderBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **store_id** | **int**| Store Id |
 **start_date** | **\DateTime**| Start Date |
 **end_date** | **\DateTime**| End Date |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOrderBatchItem**](../Model/RestApiArrayResultOrderBatchItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


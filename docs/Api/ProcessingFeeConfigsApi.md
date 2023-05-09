# Flipdish\\Client\ProcessingFeeConfigsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcessingFeeConfigsByStoreIds**](ProcessingFeeConfigsApi.md#getProcessingFeeConfigsByStoreIds) | **GET** /api/v1.0/processingfeeconfigs | 


# **getProcessingFeeConfigsByStoreIds**
> \Flipdish\\Client\Models\RestApiArrayResultProcessingFeeConfig getProcessingFeeConfigsByStoreIds($store_ids)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ProcessingFeeConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->getProcessingFeeConfigsByStoreIds($store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingFeeConfigsApi->getProcessingFeeConfigsByStoreIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_ids** | [**int[]**](../Model/int.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultProcessingFeeConfig**](../Model/RestApiArrayResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


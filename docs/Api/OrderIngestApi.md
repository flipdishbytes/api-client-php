# Flipdish\\Client\OrderIngestApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderIngestSubmitNewOrder**](OrderIngestApi.md#orderIngestSubmitNewOrder) | **POST** /api/v1.0/{appNameId}/order-ingest/submit | Provides an ability to ingest a 3rd party order into Flipdish ecosystem


# **orderIngestSubmitNewOrder**
> \Flipdish\\Client\Models\RestApiResultOrderIngestSubmitOrderResponse orderIngestSubmitNewOrder($order, $app_name_id)

Provides an ability to ingest a 3rd party order into Flipdish ecosystem

[ALPHA - this endpoint is under internal development, it is not available just yet to use in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrderIngestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \Flipdish\\Client\Models\OrderIngestSubmitOrderRequest(); // \Flipdish\\Client\Models\OrderIngestSubmitOrderRequest | 
$app_name_id = "app_name_id_example"; // string | 

try {
    $result = $apiInstance->orderIngestSubmitNewOrder($order, $app_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderIngestApi->orderIngestSubmitNewOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Flipdish\\Client\Models\OrderIngestSubmitOrderRequest**](../Model/OrderIngestSubmitOrderRequest.md)|  |
 **app_name_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderIngestSubmitOrderResponse**](../Model/RestApiResultOrderIngestSubmitOrderResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\PaymentsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderPaymentInformation**](PaymentsApi.md#getOrderPaymentInformation) | **GET** /api/v1.0/payments/payment/{orderId}/refundable | Returns payment refund information related to the order with the order id


# **getOrderPaymentInformation**
> \Flipdish\\Client\Models\RestApiResultOrderPaymentInformation getOrderPaymentInformation($order_id)

Returns payment refund information related to the order with the order id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order identifier

try {
    $result = $apiInstance->getOrderPaymentInformation($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getOrderPaymentInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderPaymentInformation**](../Model/RestApiResultOrderPaymentInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


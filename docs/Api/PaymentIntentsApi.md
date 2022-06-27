# Flipdish\\Client\PaymentIntentsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentIntent**](PaymentIntentsApi.md#getPaymentIntent) | **GET** /api/v1.0/payment_intents/{paymentIntentId} | Returns stripe payment intent for a given id


# **getPaymentIntent**
> \Flipdish\\Client\Models\RestApiResultPaymentIntent getPaymentIntent($payment_intent_id)

Returns stripe payment intent for a given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PaymentIntentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_intent_id = "payment_intent_id_example"; // string | Stripe payment intent identifier

try {
    $result = $apiInstance->getPaymentIntent($payment_intent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentIntentsApi->getPaymentIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_intent_id** | **string**| Stripe payment intent identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPaymentIntent**](../Model/RestApiResultPaymentIntent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\GoogleFoodOrderPrototypeApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrder**](GoogleFoodOrderPrototypeApi.md#createOrder) | **POST** /api/v1.0/{appId}/googleorder | 
[**submitOrder**](GoogleFoodOrderPrototypeApi.md#submitOrder) | **POST** /api/v1.0/{appId}/googleorder/{orderId}/submit | 


# **createOrder**
> \Flipdish\\Client\Models\RestApiResultSubmitOrderResponseDm createOrder($app_id, $order_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\GoogleFoodOrderPrototypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$order_request = new \Flipdish\\Client\Models\CreateOrderRequest(); // \Flipdish\\Client\Models\CreateOrderRequest | 

try {
    $result = $apiInstance->createOrder($app_id, $order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleFoodOrderPrototypeApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_request** | [**\Flipdish\\Client\Models\CreateOrderRequest**](../Model/CreateOrderRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultSubmitOrderResponseDm**](../Model/RestApiResultSubmitOrderResponseDm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitOrder**
> \Flipdish\\Client\Models\RestApiResultSubmitOrderResponseDm submitOrder($app_id, $order_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\GoogleFoodOrderPrototypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$order_id = 56; // int | 
$request = new \Flipdish\\Client\Models\SubmitOrderRequest(); // \Flipdish\\Client\Models\SubmitOrderRequest | 

try {
    $result = $apiInstance->submitOrder($app_id, $order_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleFoodOrderPrototypeApi->submitOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\SubmitOrderRequest**](../Model/SubmitOrderRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultSubmitOrderResponseDm**](../Model/RestApiResultSubmitOrderResponseDm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


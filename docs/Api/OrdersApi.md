# Flipdish\Client\OrdersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptOrder**](OrdersApi.md#acceptOrder) | **POST** /api/v1.0/orders/{id}/accept | Accept order
[**getOrderById**](OrdersApi.md#getOrderById) | **GET** /api/v1.0/orders/{id} | Get order by ID
[**getOrders**](OrdersApi.md#getOrders) | **GET** /api/v1.0/orders | Get orders by filter
[**getOrdersSummary**](OrdersApi.md#getOrdersSummary) | **GET** /api/v1.0/{appId}/orders/summaries | [PRIVATE API] Get summary of orders by filter
[**refundOrder**](OrdersApi.md#refundOrder) | **POST** /api/v1.0/orders/{id}/refund | Refund order
[**rejectOrder**](OrdersApi.md#rejectOrder) | **POST** /api/v1.0/orders/{id}/reject | Reject order


# **acceptOrder**
> acceptOrder($id, $accept_object)

Accept order

To accept an order, you create an `accept` object and send it to Flipdish API using HTTP POST method. `Id` path parameter identifies the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier
$accept_object = new \Flipdish\Client\Models\Accept(); // \Flipdish\Client\Models\Accept | 

try {
    $apiInstance->acceptOrder($id, $accept_object);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acceptOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order identifier |
 **accept_object** | [**\Flipdish\Client\Models\Accept**](../Model/Accept.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderById**
> \Flipdish\Client\Models\RestApiResultOrder getOrderById($id)

Get order by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier

try {
    $result = $apiInstance->getOrderById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultOrder**](../Model/RestApiResultOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Flipdish\Client\Models\RestApiPaginationResultOrder getOrders($physical_restaurant_id, $state, $page, $limit)

Get orders by filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$physical_restaurant_id = array(56); // int[] | Physical restaurant identifiers
$state = array("state_example"); // string[] | Order states
$page = 56; // int | Requested page number
$limit = 56; // int | Requested page limit

try {
    $result = $apiInstance->getOrders($physical_restaurant_id, $state, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **physical_restaurant_id** | [**int[]**](../Model/int.md)| Physical restaurant identifiers | [optional]
 **state** | [**string[]**](../Model/string.md)| Order states | [optional]
 **page** | **int**| Requested page number | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultOrder**](../Model/RestApiPaginationResultOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersSummary**
> \Flipdish\Client\Models\RestApiPaginationResultOrderSummary getOrdersSummary($app_id, $search_query, $physical_restaurant_id, $state, $page, $limit)

[PRIVATE API] Get summary of orders by filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$search_query = "search_query_example"; // string | Query string
$physical_restaurant_id = array(56); // int[] | Physical restaurant identifiers
$state = array("state_example"); // string[] | Order states
$page = 56; // int | Requested page number
$limit = 56; // int | Requested page limit

try {
    $result = $apiInstance->getOrdersSummary($app_id, $search_query, $physical_restaurant_id, $state, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **search_query** | **string**| Query string | [optional]
 **physical_restaurant_id** | [**int[]**](../Model/int.md)| Physical restaurant identifiers | [optional]
 **state** | [**string[]**](../Model/string.md)| Order states | [optional]
 **page** | **int**| Requested page number | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultOrderSummary**](../Model/RestApiPaginationResultOrderSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundOrder**
> refundOrder($id, $refund_object)

Refund order

To refund an order, you create a `refund` object and send it to Flipdish API using HTTP POST method. `Id` path parameter identifies the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier
$refund_object = new \Flipdish\Client\Models\Refund(); // \Flipdish\Client\Models\Refund | 

try {
    $apiInstance->refundOrder($id, $refund_object);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order identifier |
 **refund_object** | [**\Flipdish\Client\Models\Refund**](../Model/Refund.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectOrder**
> rejectOrder($id, $reject_object)

Reject order

To reject an order, you create a `reject` object and send it to Flipdish API using HTTP POST method. `Id` path parameter identifies the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier
$reject_object = new \Flipdish\Client\Models\Reject(); // \Flipdish\Client\Models\Reject | 

try {
    $apiInstance->rejectOrder($id, $reject_object);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->rejectOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order identifier |
 **reject_object** | [**\Flipdish\Client\Models\Reject**](../Model/Reject.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


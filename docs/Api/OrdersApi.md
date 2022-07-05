# Flipdish\\Client\OrdersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptOrder**](OrdersApi.md#acceptOrder) | **POST** /api/v1.0/orders/{id}/accept | Accept order
[**dispatchOrder**](OrdersApi.md#dispatchOrder) | **POST** /api/v1.0/orders/{id}/dispatch | Dispatch order
[**getDeliveryInformation**](OrdersApi.md#getDeliveryInformation) | **GET** /api/v1.0/orders/{orderId}/deliveryinfo | Get order delivery information
[**getFulfillmentStatus**](OrdersApi.md#getFulfillmentStatus) | **GET** /api/v1.0/orders/{orderId}/fulfillmentstatus | Get order fulfillment status
[**getOrderById**](OrdersApi.md#getOrderById) | **GET** /api/v1.0/orders/{id} | Get order by ID
[**getOrders**](OrdersApi.md#getOrders) | **GET** /api/v1.0/orders | Get orders by filter
[**getOrdersSummary**](OrdersApi.md#getOrdersSummary) | **GET** /api/v1.0/{appId}/orders/summaries | [PRIVATE API] Get summary of orders by filter
[**refundOrder**](OrdersApi.md#refundOrder) | **POST** /api/v1.0/orders/{id}/refund | Refund order
[**rejectOrder**](OrdersApi.md#rejectOrder) | **POST** /api/v1.0/orders/{id}/reject | Reject order
[**searchFulfillmentStatuses**](OrdersApi.md#searchFulfillmentStatuses) | **GET** /api/v1.0/{appId}/orders/fulfillmentstatuses | Get fulfillment status for a list of orders
[**updateDeliveryInformation**](OrdersApi.md#updateDeliveryInformation) | **POST** /api/v1.0/orders/{orderId}/deliveryinfo | Add/update delivery-related information to an order
[**updateFulfillmentStatus**](OrdersApi.md#updateFulfillmentStatus) | **POST** /api/v1.0/{appId}/orders/{orderId}/fulfillmentstatus | Add/update fulfillment status information to an order


# **acceptOrder**
> acceptOrder($id, $accept_object)

Accept order

To accept an order, you create an `accept` object and send it to Flipdish API using HTTP POST method. `Id` path parameter identifies the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier
$accept_object = new \Flipdish\\Client\Models\Accept(); // \Flipdish\\Client\Models\Accept | Order accept parameters (eg: EstimatedMinutesForDelivery)

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
 **accept_object** | [**\Flipdish\\Client\Models\Accept**](../Model/Accept.md)| Order accept parameters (eg: EstimatedMinutesForDelivery) |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dispatchOrder**
> dispatchOrder($id)

Dispatch order

To dispatch an order send a POST request with `Id` path parameter which identifies the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier

try {
    $apiInstance->dispatchOrder($id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->dispatchOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryInformation**
> \Flipdish\\Client\Models\RestApiResultOrderDeliveryInformation getDeliveryInformation($order_id)

Get order delivery information

Returns an orders delivery information. This would be used to display the latest known delivery information on a screen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Flipdish Order Id

try {
    $result = $apiInstance->getDeliveryInformation($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getDeliveryInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Flipdish Order Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderDeliveryInformation**](../Model/RestApiResultOrderDeliveryInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentStatus**
> \Flipdish\\Client\Models\RestApiResultOrderFulfillmentStatus getFulfillmentStatus($order_id)

Get order fulfillment status

[BETA - this endpoint is under development, do not use it in your production system] Returns an order's fulfillment status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Flipdish Order Id

try {
    $result = $apiInstance->getFulfillmentStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getFulfillmentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Flipdish Order Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderFulfillmentStatus**](../Model/RestApiResultOrderFulfillmentStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderById**
> \Flipdish\\Client\Models\RestApiResultOrder getOrderById($id)

Get order by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
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

[**\Flipdish\\Client\Models\RestApiResultOrder**](../Model/RestApiResultOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Flipdish\\Client\Models\RestApiPaginationResultOrder getOrders($physical_restaurant_id, $state, $from, $to, $page, $limit)

Get orders by filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$physical_restaurant_id = array(56); // int[] | Physical restaurant identifiers
$state = array("state_example"); // string[] | Order states
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Order has been placed after this parameter value
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Order has been placed before this parameter value
$page = 56; // int | Requested page number
$limit = 56; // int | Requested page limit

try {
    $result = $apiInstance->getOrders($physical_restaurant_id, $state, $from, $to, $page, $limit);
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
 **from** | **\DateTime**| Order has been placed after this parameter value | [optional]
 **to** | **\DateTime**| Order has been placed before this parameter value | [optional]
 **page** | **int**| Requested page number | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultOrder**](../Model/RestApiPaginationResultOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersSummary**
> \Flipdish\\Client\Models\RestApiPaginationResultOrderSummary getOrdersSummary($app_id, $search_query, $physical_restaurant_id, $state, $page, $limit, $order_by_requested_for_time, $channels)

[PRIVATE API] Get summary of orders by filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
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
$order_by_requested_for_time = true; // bool | 
$channels = array("channels_example"); // string[] | 

try {
    $result = $apiInstance->getOrdersSummary($app_id, $search_query, $physical_restaurant_id, $state, $page, $limit, $order_by_requested_for_time, $channels);
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
 **order_by_requested_for_time** | **bool**|  | [optional]
 **channels** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultOrderSummary**](../Model/RestApiPaginationResultOrderSummary.md)

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
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier
$refund_object = new \Flipdish\\Client\Models\Refund(); // \Flipdish\\Client\Models\Refund | 

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
 **refund_object** | [**\Flipdish\\Client\Models\Refund**](../Model/Refund.md)|  |

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
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Order identifier
$reject_object = new \Flipdish\\Client\Models\Reject(); // \Flipdish\\Client\Models\Reject | 

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
 **reject_object** | [**\Flipdish\\Client\Models\Reject**](../Model/Reject.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchFulfillmentStatuses**
> \Flipdish\\Client\Models\RestApiArrayResultOrderFulfillmentStatus searchFulfillmentStatuses($app_id, $order_ids)

Get fulfillment status for a list of orders

[BETA - this endpoint is under development, do not use it in your production system] Returns fulfillment status for list of orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Id
$order_ids = "order_ids_example"; // string | Flipdish Order Id list, comma separated

try {
    $result = $apiInstance->searchFulfillmentStatuses($app_id, $order_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->searchFulfillmentStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **order_ids** | **string**| Flipdish Order Id list, comma separated |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOrderFulfillmentStatus**](../Model/RestApiArrayResultOrderFulfillmentStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeliveryInformation**
> updateDeliveryInformation($order_id, $delivery_information)

Add/update delivery-related information to an order

Returns an order's delivery information. This would be used to display the latest known delivery information on a screen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Flipdish Order Id
$delivery_information = new \Flipdish\\Client\Models\OrderDeliveryInformationBase(); // \Flipdish\\Client\Models\OrderDeliveryInformationBase | Delivery Information

try {
    $apiInstance->updateDeliveryInformation($order_id, $delivery_information);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateDeliveryInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Flipdish Order Id |
 **delivery_information** | [**\Flipdish\\Client\Models\OrderDeliveryInformationBase**](../Model/OrderDeliveryInformationBase.md)| Delivery Information |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentStatus**
> updateFulfillmentStatus($app_id, $order_id, $fulfillment_status_request)

Add/update fulfillment status information to an order

[BETA - this endpoint is under development, do not use it in your production system] Updates an order's fulfillment status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$order_id = 56; // int | Flipdish Order Id
$fulfillment_status_request = new \Flipdish\\Client\Models\OrderFulfillmentStatusBase(); // \Flipdish\\Client\Models\OrderFulfillmentStatusBase | Fulfillment Status

try {
    $apiInstance->updateFulfillmentStatus($app_id, $order_id, $fulfillment_status_request);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateFulfillmentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_id** | **int**| Flipdish Order Id |
 **fulfillment_status_request** | [**\Flipdish\\Client\Models\OrderFulfillmentStatusBase**](../Model/OrderFulfillmentStatusBase.md)| Fulfillment Status |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


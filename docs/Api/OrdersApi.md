# Flipdish\\Client\OrdersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptOrder**](OrdersApi.md#acceptOrder) | **POST** /api/v1.0/orders/{id}/accept | 
[**dispatchOrder**](OrdersApi.md#dispatchOrder) | **POST** /api/v1.0/orders/{id}/dispatch | 
[**getDeliveryInformation**](OrdersApi.md#getDeliveryInformation) | **GET** /api/v1.0/orders/{orderId}/deliveryinfo | 
[**getFulfillmentState**](OrdersApi.md#getFulfillmentState) | **GET** /api/v1.0/orders/{orderId}/fulfillment/state | 
[**getFulfillmentStatusWithDetailsAndActions**](OrdersApi.md#getFulfillmentStatusWithDetailsAndActions) | **GET** /api/v1.0/orders/{orderId}/fulfillment/state/details | 
[**getOrderById**](OrdersApi.md#getOrderById) | **GET** /api/v1.0/orders/{id} | 
[**getOrders**](OrdersApi.md#getOrders) | **GET** /api/v1.0/orders | 
[**getOrdersSummary**](OrdersApi.md#getOrdersSummary) | **GET** /api/v1.0/{appId}/orders/summaries | 
[**refundOrder**](OrdersApi.md#refundOrder) | **POST** /api/v1.0/orders/{id}/refund | 
[**rejectOrder**](OrdersApi.md#rejectOrder) | **POST** /api/v1.0/orders/{id}/reject | 
[**searchFulfillmentStatuses**](OrdersApi.md#searchFulfillmentStatuses) | **GET** /api/v1.0/{appId}/orders/fulfillmentstatuses | 
[**updateDeliveryInformation**](OrdersApi.md#updateDeliveryInformation) | **POST** /api/v1.0/orders/{orderId}/deliveryinfo | 
[**updateFulfillmentState**](OrdersApi.md#updateFulfillmentState) | **POST** /api/v1.0/orders/{orderId}/fulfillment/state | 


# **acceptOrder**
> acceptOrder($id, $accept_object)



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
$id = 56; // int | 
$accept_object = new \Flipdish\\Client\Models\Accept(); // \Flipdish\\Client\Models\Accept | 

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
 **id** | **int**|  |
 **accept_object** | [**\Flipdish\\Client\Models\Accept**](../Model/Accept.md)|  |

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
$id = 56; // int | 

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
 **id** | **int**|  |

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
$order_id = 56; // int | 

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
 **order_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderDeliveryInformation**](../Model/RestApiResultOrderDeliveryInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentState**
> \Flipdish\\Client\Models\RestApiResultOrderFulfillmentStatus getFulfillmentState($order_id)



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
$order_id = 56; // int | 

try {
    $result = $apiInstance->getFulfillmentState($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getFulfillmentState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderFulfillmentStatus**](../Model/RestApiResultOrderFulfillmentStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentStatusWithDetailsAndActions**
> \Flipdish\\Client\Models\RestApiResultOrderFulfillmentStatusWithConfigurationActions getFulfillmentStatusWithDetailsAndActions($order_id)



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
$order_id = 56; // int | 

try {
    $result = $apiInstance->getFulfillmentStatusWithDetailsAndActions($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getFulfillmentStatusWithDetailsAndActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderFulfillmentStatusWithConfigurationActions**](../Model/RestApiResultOrderFulfillmentStatusWithConfigurationActions.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderById**
> \Flipdish\\Client\Models\RestApiResultOrder getOrderById($id)



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
$id = 56; // int | 

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
 **id** | **int**|  |

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
$physical_restaurant_id = array(56); // int[] | 
$state = array("state_example"); // string[] | 
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 56; // int | 
$limit = 56; // int | 

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
 **physical_restaurant_id** | [**int[]**](../Model/int.md)|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **from** | **\DateTime**|  | [optional]
 **to** | **\DateTime**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultOrder**](../Model/RestApiPaginationResultOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersSummary**
> \Flipdish\\Client\Models\RestApiPaginationResultOrderSummary getOrdersSummary($app_id, $search_query, $physical_restaurant_id, $state, $page, $limit, $order_by_requested_for_time, $channels, $order_ids, $from, $to)



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
$search_query = "search_query_example"; // string | 
$physical_restaurant_id = array(56); // int[] | 
$state = array("state_example"); // string[] | 
$page = 56; // int | 
$limit = 56; // int | 
$order_by_requested_for_time = true; // bool | 
$channels = array("channels_example"); // string[] | 
$order_ids = array(56); // int[] | 
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getOrdersSummary($app_id, $search_query, $physical_restaurant_id, $state, $page, $limit, $order_by_requested_for_time, $channels, $order_ids, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **search_query** | **string**|  | [optional]
 **physical_restaurant_id** | [**int[]**](../Model/int.md)|  | [optional]
 **state** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **order_by_requested_for_time** | **bool**|  | [optional]
 **channels** | [**string[]**](../Model/string.md)|  | [optional]
 **order_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **from** | **\DateTime**|  | [optional]
 **to** | **\DateTime**|  | [optional]

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
$id = 56; // int | 
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
 **id** | **int**|  |
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
$id = 56; // int | 
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
 **id** | **int**|  |
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
$order_ids = "order_ids_example"; // string | 

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
 **app_id** | **string**|  |
 **order_ids** | **string**|  |

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
$order_id = 56; // int | 
$delivery_information = new \Flipdish\\Client\Models\OrderDeliveryInformationBase(); // \Flipdish\\Client\Models\OrderDeliveryInformationBase | 

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
 **order_id** | **int**|  |
 **delivery_information** | [**\Flipdish\\Client\Models\OrderDeliveryInformationBase**](../Model/OrderDeliveryInformationBase.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentState**
> updateFulfillmentState($order_id, $fulfillment_status_request)



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
$order_id = 56; // int | 
$fulfillment_status_request = new \Flipdish\\Client\Models\OrderFulfillmentStatusUpdate(); // \Flipdish\\Client\Models\OrderFulfillmentStatusUpdate | 

try {
    $apiInstance->updateFulfillmentState($order_id, $fulfillment_status_request);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateFulfillmentState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **fulfillment_status_request** | [**\Flipdish\\Client\Models\OrderFulfillmentStatusUpdate**](../Model/OrderFulfillmentStatusUpdate.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


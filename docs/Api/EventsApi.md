# Flipdish\Client\EventsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerEvents**](EventsApi.md#getCustomerEvents) | **GET** /api/v1.0/events/customer/{customerId} | Get customer events  For technical reasons, the number of records returned is limited to 100.
[**getEvents**](EventsApi.md#getEvents) | **GET** /api/v1.0/events | Get events  For technical reasons, the number of records returned is limited to 100.
[**getEventsById**](EventsApi.md#getEventsById) | **GET** /api/v1.0/events/{eventId} | Get event by Id  For technical reasons, the number of records returned is limited to 100.
[**getMenuEvents**](EventsApi.md#getMenuEvents) | **GET** /api/v1.0/events/menu/{menuId} | Get menu events  For technical reasons, the number of records returned is limited to 100.
[**getOrderEvents**](EventsApi.md#getOrderEvents) | **GET** /api/v1.0/events/order/{orderId} | Get order events  For technical reasons, the number of records returned is limited to 100.
[**getOrderEventsByCustomer**](EventsApi.md#getOrderEventsByCustomer) | **GET** /api/v1.0/events/order | Get order events by customer  For technical reasons, the number of records returned is limited to 100.
[**getStoreEvents**](EventsApi.md#getStoreEvents) | **GET** /api/v1.0/events/store/{storeId} | Get store events  For technical reasons, the number of records returned is limited to 100.
[**getUserEvents**](EventsApi.md#getUserEvents) | **GET** /api/v1.0/events/user/{userId} | Get user events  For technical reasons, the number of records returned is limited to 100.
[**getWhiteLabelEvents**](EventsApi.md#getWhiteLabelEvents) | **GET** /api/v1.0/events/whitelabel/{whitelabelId} | Get WhiteLabel events  For technical reasons, the number of records returned is limited to 100.


# **getCustomerEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getCustomerEvents($customer_id, $limit, $page, $start, $end, $name)

Get customer events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | Customer identifier identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getCustomerEvents($customer_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getCustomerEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer identifier identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getEvents($store_id, $white_label_id, $customer_id, $limit, $page, $start, $end, $name)

Get events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Id
$white_label_id = 56; // int | White Label Id
$customer_id = 56; // int | Customer Id
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getEvents($store_id, $white_label_id, $customer_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store Id | [optional]
 **white_label_id** | **int**| White Label Id | [optional]
 **customer_id** | **int**| Customer Id | [optional]
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventsById**
> \Flipdish\Client\Models\EventSearchResult getEventsById($event_id)

Get event by Id  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = "event_id_example"; // string | Event identifier (Guid)

try {
    $result = $apiInstance->getEventsById($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_id** | [**string**](../Model/.md)| Event identifier (Guid) |

### Return type

[**\Flipdish\Client\Models\EventSearchResult**](../Model/EventSearchResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getMenuEvents($menu_id, $limit, $page, $start, $end, $name)

Get menu events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu Identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getMenuEvents($menu_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getMenuEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu Identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getOrderEvents($order_id, $limit, $page, $start, $end, $name)

Get order events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | Order identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getOrderEvents($order_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getOrderEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderEventsByCustomer**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getOrderEventsByCustomer($customer_id, $limit, $page, $start, $end, $name)

Get order events by customer  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | Customer identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getOrderEventsByCustomer($customer_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getOrderEventsByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getStoreEvents($store_id, $limit, $page, $start, $end, $name)

Get store events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Id of the store
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getStoreEvents($store_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getStoreEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Id of the store |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getUserEvents($user_id, $limit, $page, $start, $end, $name)

Get user events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | User identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getUserEvents($user_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getUserEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhiteLabelEvents**
> \Flipdish\Client\Models\RestApiEventSearchPaginationResult getWhiteLabelEvents($whitelabel_id, $limit, $page, $start, $end, $name)

Get WhiteLabel events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whitelabel_id = 56; // int | White Label Identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$name = array("name_example"); // string[] | Event names to filter in

try {
    $result = $apiInstance->getWhiteLabelEvents($whitelabel_id, $limit, $page, $start, $end, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getWhiteLabelEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whitelabel_id** | **int**| White Label Identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **name** | [**string[]**](../Model/string.md)| Event names to filter in | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


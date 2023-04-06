# Flipdish\\Client\EventsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerEvents**](EventsApi.md#getCustomerEvents) | **GET** /api/v1.0/{appId}/events/customer/{customerId} | Get customer events  For technical reasons, the number of records returned is limited to 100.
[**getEvents**](EventsApi.md#getEvents) | **GET** /api/v1.0/{appId}/events | Get events  For technical reasons, the number of records returned is limited to 100.
[**getEventsById**](EventsApi.md#getEventsById) | **GET** /api/v1.0/{appId}/events/{eventId} | Get event by Id  For technical reasons, the number of records returned is limited to 100.
[**getMenuEvents**](EventsApi.md#getMenuEvents) | **GET** /api/v1.0/{appId}/events/menu/{menuId} | Get menu events  For technical reasons, the number of records returned is limited to 100.
[**getOrderEvents**](EventsApi.md#getOrderEvents) | **GET** /api/v1.0/{appId}/events/order/{orderId} | Get order events  For technical reasons, the number of records returned is limited to 100.
[**getOrderEventsByCustomer**](EventsApi.md#getOrderEventsByCustomer) | **GET** /api/v1.0/{appId}/events/order | Get order events by customer  For technical reasons, the number of records returned is limited to 100.
[**getStoreEvents**](EventsApi.md#getStoreEvents) | **GET** /api/v1.0/{appId}/events/store/{storeId} | Get store events  For technical reasons, the number of records returned is limited to 100.
[**getUserEvents**](EventsApi.md#getUserEvents) | **GET** /api/v1.0/{appId}/events/user/{userId} | Get user events  For technical reasons, the number of records returned is limited to 100.
[**getWhiteLabelEvents**](EventsApi.md#getWhiteLabelEvents) | **GET** /api/v1.0/{appId}/events/whitelabel/{whitelabelId} | Get WhiteLabel events  For technical reasons, the number of records returned is limited to 100.


# **getCustomerEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getCustomerEvents($app_id, $customer_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get customer events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$customer_id = 56; // int | Customer identifier identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getCustomerEvents($app_id, $customer_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getCustomerEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **customer_id** | **int**| Customer identifier identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getEvents($app_id, $white_label_id, $customer_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$white_label_id = 56; // int | White Label Id
$customer_id = 56; // int | Customer Id
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getEvents($app_id, $white_label_id, $customer_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **white_label_id** | **int**| White Label Id | [optional]
 **customer_id** | **int**| Customer Id | [optional]
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventsById**
> \Flipdish\\Client\Models\EventSearchResult getEventsById($event_id, $app_id)

Get event by Id  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = "event_id_example"; // string | Event identifier (Guid)
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getEventsById($event_id, $app_id);
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
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\EventSearchResult**](../Model/EventSearchResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getMenuEvents($app_id, $menu_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id2, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get menu events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$menu_id = 56; // int | Menu Identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id2 = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getMenuEvents($app_id, $menu_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id2, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getMenuEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **menu_id** | **int**| Menu Identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id2** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getOrderEvents($app_id, $order_id, $limit, $page, $start, $end, $order_id2, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get order events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$order_id = 56; // int | Order identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id2 = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getOrderEvents($app_id, $order_id, $limit, $page, $start, $end, $order_id2, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getOrderEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **order_id** | **int**| Order identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id2** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderEventsByCustomer**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getOrderEventsByCustomer($app_id, $customer_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get order events by customer  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$customer_id = 56; // int | Customer identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getOrderEventsByCustomer($app_id, $customer_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getOrderEventsByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **customer_id** | **int**| Customer identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getStoreEvents($app_id, $store_id, $limit, $page, $start, $end, $order_id, $store_id2, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get store events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | Id of the store
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id2 = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getStoreEvents($app_id, $store_id, $limit, $page, $start, $end, $order_id, $store_id2, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getStoreEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**| Id of the store |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id2** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getUserEvents($app_id, $user_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id2, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get user events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$user_id = 56; // int | User identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id2 = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getUserEvents($app_id, $user_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id2, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getUserEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **user_id** | **int**| User identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id2** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhiteLabelEvents**
> \Flipdish\\Client\Models\RestApiEventSearchPaginationResult getWhiteLabelEvents($app_id, $whitelabel_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id)

Get WhiteLabel events  For technical reasons, the number of records returned is limited to 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$whitelabel_id = 56; // int | White Label Identifier
$limit = 56; // int | The maximum elements to return
$page = 56; // int | The index of the page to return, starting by 1
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$order_id = 56; // int | Events that have Order Id
$store_id = 56; // int | Events that have Store Id
$store_id_list = array(56); // int[] | Events that have Store Id List
$store_group_id = 56; // int | Events that have Store Group Id
$user_id = 56; // int | Events that have User Id
$menu_id = 56; // int | Events that have Menu Id
$campaign_id = 56; // int | Events that have Campaign Id
$user_email = "user_email_example"; // string | Events that have User Email
$user_name = "user_name_example"; // string | Events that have User Name
$voucher_code = "voucher_code_example"; // string | Events that have voucher code
$event_type = array("event_type_example"); // string[] | Events that have event type\\s
$flipdish_event_id = "flipdish_event_id_example"; // string | Unique Identifier of Event, if this is specified, all other criteria are ignored.

try {
    $result = $apiInstance->getWhiteLabelEvents($app_id, $whitelabel_id, $limit, $page, $start, $end, $order_id, $store_id, $store_id_list, $store_group_id, $user_id, $menu_id, $campaign_id, $user_email, $user_name, $voucher_code, $event_type, $flipdish_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getWhiteLabelEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **whitelabel_id** | **int**| White Label Identifier |
 **limit** | **int**| The maximum elements to return | [optional]
 **page** | **int**| The index of the page to return, starting by 1 | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **order_id** | **int**| Events that have Order Id | [optional]
 **store_id** | **int**| Events that have Store Id | [optional]
 **store_id_list** | [**int[]**](../Model/int.md)| Events that have Store Id List | [optional]
 **store_group_id** | **int**| Events that have Store Group Id | [optional]
 **user_id** | **int**| Events that have User Id | [optional]
 **menu_id** | **int**| Events that have Menu Id | [optional]
 **campaign_id** | **int**| Events that have Campaign Id | [optional]
 **user_email** | **string**| Events that have User Email | [optional]
 **user_name** | **string**| Events that have User Name | [optional]
 **voucher_code** | **string**| Events that have voucher code | [optional]
 **event_type** | [**string[]**](../Model/string.md)| Events that have event type\\s | [optional]
 **flipdish_event_id** | **string**| Unique Identifier of Event, if this is specified, all other criteria are ignored. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiEventSearchPaginationResult**](../Model/RestApiEventSearchPaginationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


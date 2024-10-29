# Flipdish\\Client\InvoicesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoices**](InvoicesApi.md#getInvoices) | **GET** /api/v1.0/{appId}/invoices | 
[**invoicePdf**](InvoicesApi.md#invoicePdf) | **GET** /api/v1.0/{appId}/invoices/InvoicePdf | 
[**listInvoices**](InvoicesApi.md#listInvoices) | **GET** /api/v1.0/{appId}/invoices/ListInvoices | 
[**listSubscriptionInvoices**](InvoicesApi.md#listSubscriptionInvoices) | **GET** /api/v1.0/{appId}/invoices/ListSubscriptionInvoices | 


# **getInvoices**
> \Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultSubscriptionInvoice getInvoices($app_id, $subscription_id, $limit, $page_id, $exclude_not_owned_invoices, $date_from, $date_to, $invoice_number, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$limit = 56; // int | 
$page_id = "page_id_example"; // string | 
$exclude_not_owned_invoices = true; // bool | 
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = "invoice_number_example"; // string | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->getInvoices($app_id, $subscription_id, $limit, $page_id, $exclude_not_owned_invoices, $date_from, $date_to, $invoice_number, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **page_id** | **string**|  | [optional]
 **exclude_not_owned_invoices** | **bool**|  | [optional]
 **date_from** | **\DateTime**|  | [optional]
 **date_to** | **\DateTime**|  | [optional]
 **invoice_number** | **string**|  | [optional]
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultSubscriptionInvoice**](../Model/RestApiFinanceSearchPaginationResultSubscriptionInvoice.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicePdf**
> invoicePdf($invoice_number, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->invoicePdf($invoice_number, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicePdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**|  |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInvoices**
> object listInvoices($store_id, $app_id, $limit, $page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$app_id = "app_id_example"; // string | 
$limit = 56; // int | 
$page = 56; // int | 

try {
    $result = $apiInstance->listInvoices($store_id, $app_id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **app_id** | **string**|  |
 **limit** | **int**|  | [optional]
 **page** | **int**|  | [optional]

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSubscriptionInvoices**
> \Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultSubscriptionInvoice listSubscriptionInvoices($app_id, $subscription_id, $limit, $page_id, $exclude_not_owned_invoices, $date_from, $date_to, $invoice_number, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$limit = 56; // int | 
$page_id = "page_id_example"; // string | 
$exclude_not_owned_invoices = true; // bool | 
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_number = "invoice_number_example"; // string | 
$store_id = array(56); // int[] | 

try {
    $result = $apiInstance->listSubscriptionInvoices($app_id, $subscription_id, $limit, $page_id, $exclude_not_owned_invoices, $date_from, $date_to, $invoice_number, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listSubscriptionInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **subscription_id** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **page_id** | **string**|  | [optional]
 **exclude_not_owned_invoices** | **bool**|  | [optional]
 **date_from** | **\DateTime**|  | [optional]
 **date_to** | **\DateTime**|  | [optional]
 **invoice_number** | **string**|  | [optional]
 **store_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultSubscriptionInvoice**](../Model/RestApiFinanceSearchPaginationResultSubscriptionInvoice.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


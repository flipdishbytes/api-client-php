# Flipdish\\Client\InvoicesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoices**](InvoicesApi.md#getInvoices) | **GET** /api/v1.0/{appId}/invoices | Get list of invoices


# **getInvoices**
> \Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultInvoice getInvoices($app_id, $subscription_id, $limit, $page_id, $exclude_not_owned_invoices, $date_from, $date_to)

Get list of invoices

[BETA - this endpoint is under development, do not use it in your production system]

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
$app_id = "app_id_example"; // string | App Id
$subscription_id = "subscription_id_example"; // string | Subscription Id (optional)
$limit = 56; // int | Limit of invoices to return (optional)
$page_id = "page_id_example"; // string | Id for use in pagination. Use the next_page value returned in a previous response to request subsequent results. Do not include this on the first call (optional)
$exclude_not_owned_invoices = true; // bool | Exclude not owned invoices. Set to true to only view your invoices (optional)
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter starting from this date (optional)
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter ending from this date (optional)

try {
    $result = $apiInstance->getInvoices($app_id, $subscription_id, $limit, $page_id, $exclude_not_owned_invoices, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Id |
 **subscription_id** | **string**| Subscription Id (optional) | [optional]
 **limit** | **int**| Limit of invoices to return (optional) | [optional]
 **page_id** | **string**| Id for use in pagination. Use the next_page value returned in a previous response to request subsequent results. Do not include this on the first call (optional) | [optional]
 **exclude_not_owned_invoices** | **bool**| Exclude not owned invoices. Set to true to only view your invoices (optional) | [optional]
 **date_from** | **\DateTime**| Filter starting from this date (optional) | [optional]
 **date_to** | **\DateTime**| Filter ending from this date (optional) | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultInvoice**](../Model/RestApiFinanceSearchPaginationResultInvoice.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


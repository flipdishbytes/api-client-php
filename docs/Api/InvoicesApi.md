# Flipdish\\Client\InvoicesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoices**](InvoicesApi.md#getInvoices) | **GET** /api/v1.0/{appId}/invoices | Get list of invoices


# **getInvoices**
> \Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultInvoice getInvoices($app_id, $subscription_id, $limit, $page_id)

Get list of invoices

[BETA - this endpoint is under development, do not use it in your production system] Due to the nature of this request, page will always remain as 0.

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
$limit = 56; // int | Limit of invoices to return
$page_id = "page_id_example"; // string | Id for use in pagination. Use the next_page value returned in a previous response to request subsequent results. Do not include this on the first call

try {
    $result = $apiInstance->getInvoices($app_id, $subscription_id, $limit, $page_id);
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
 **limit** | **int**| Limit of invoices to return | [optional]
 **page_id** | **string**| Id for use in pagination. Use the next_page value returned in a previous response to request subsequent results. Do not include this on the first call | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiFinanceSearchPaginationResultInvoice**](../Model/RestApiFinanceSearchPaginationResultInvoice.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


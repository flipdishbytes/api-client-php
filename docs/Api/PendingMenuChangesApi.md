# Flipdish\\Client\PendingMenuChangesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPendingMenuChanges**](PendingMenuChangesApi.md#getPendingMenuChanges) | **GET** /api/v1.0/{appId}/menus/pendingmenuchanges | Get menu pending changes from Catalog groups and items


# **getPendingMenuChanges**
> \Flipdish\\Client\Models\RestApiPaginationResultPendingMenuChanges getPendingMenuChanges($app_id, $menu_id, $catalog_element_id, $page, $limit)

Get menu pending changes from Catalog groups and items

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PendingMenuChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$menu_id = 56; // int | 
$catalog_element_id = "catalog_element_id_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getPendingMenuChanges($app_id, $menu_id, $catalog_element_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PendingMenuChangesApi->getPendingMenuChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **menu_id** | **int**|  | [optional]
 **catalog_element_id** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultPendingMenuChanges**](../Model/RestApiPaginationResultPendingMenuChanges.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


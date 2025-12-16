# Flipdish\\Client\CatalogChangesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPendingMenuChanges**](CatalogChangesApi.md#getPendingMenuChanges) | **GET** /api/v1.0/{appId}/menus/catalog-changes | Get menu pending changes from Catalog groups and items
[**getPendingMenuChangesSummaries**](CatalogChangesApi.md#getPendingMenuChangesSummaries) | **GET** /api/v1.0/{appId}/menus/catalog-changes/summaries | Get menu pending changes summaries by appId
[**publishPendingMenuChanges**](CatalogChangesApi.md#publishPendingMenuChanges) | **POST** /api/v1.0/{appId}/menus/catalog-changes/publish | Update menus with the pending changes from Catalog groups and items


# **getPendingMenuChanges**
> \Flipdish\\Client\Models\RestApiPaginationResultPendingMenuChanges getPendingMenuChanges($app_id, $menu_id, $catalog_item_id, $page, $limit)

Get menu pending changes from Catalog groups and items

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$menu_id = 56; // int | 
$catalog_item_id = "catalog_item_id_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getPendingMenuChanges($app_id, $menu_id, $catalog_item_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogChangesApi->getPendingMenuChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **menu_id** | **int**|  | [optional]
 **catalog_item_id** | **string**|  | [optional]
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

# **getPendingMenuChangesSummaries**
> \Flipdish\\Client\Models\RestApiArrayResultPendingMenuChangesSummaries getPendingMenuChangesSummaries($app_id)

Get menu pending changes summaries by appId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getPendingMenuChangesSummaries($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogChangesApi->getPendingMenuChangesSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultPendingMenuChangesSummaries**](../Model/RestApiArrayResultPendingMenuChangesSummaries.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishPendingMenuChanges**
> publishPendingMenuChanges($app_id, $publish_menu_changes)

Update menus with the pending changes from Catalog groups and items

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$publish_menu_changes = new \Flipdish\\Client\Models\PublishMenuChanges(); // \Flipdish\\Client\Models\PublishMenuChanges | 

try {
    $apiInstance->publishPendingMenuChanges($app_id, $publish_menu_changes);
} catch (Exception $e) {
    echo 'Exception when calling CatalogChangesApi->publishPendingMenuChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **publish_menu_changes** | [**\Flipdish\\Client\Models\PublishMenuChanges**](../Model/PublishMenuChanges.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


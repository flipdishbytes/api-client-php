# Flipdish\\Client\CatalogItemsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveCatalogItem**](CatalogItemsApi.md#archiveCatalogItem) | **POST** /api/v1.0/{appId}/catalog/items/{catalogItemId}/archive | Archive Catalog Item
[**createCatalogItem**](CatalogItemsApi.md#createCatalogItem) | **POST** /api/v1.0/{appId}/catalog/items | Create a Catalog Item
[**deleteCatalogItemImage**](CatalogItemsApi.md#deleteCatalogItemImage) | **DELETE** /api/v1.0/{appId}/catalog/items/{catalogItemId}/image | Delete a CatalogItem Image
[**duplicateCatalogItem**](CatalogItemsApi.md#duplicateCatalogItem) | **POST** /api/v1.0/{appId}/catalog/items/{catalogItemId}/duplicate | Duplicate Catalog Item
[**getCatalogItemById**](CatalogItemsApi.md#getCatalogItemById) | **GET** /api/v1.0/{appId}/catalog/items/{catalogItemId} | Get item by Id
[**getItems**](CatalogItemsApi.md#getItems) | **GET** /api/v1.0/{appId}/catalog/items | Get paginated items by app name id filtered by types
[**updateCatalogItem**](CatalogItemsApi.md#updateCatalogItem) | **POST** /api/v1.0/{appId}/catalog/items/{catalogItemId} | Update Catalog Item
[**uploadCatalogItemImage**](CatalogItemsApi.md#uploadCatalogItemImage) | **POST** /api/v1.0/{appId}/catalog/items/{catalogItemId}/image | Upload a Catalog Item Image


# **archiveCatalogItem**
> archiveCatalogItem($app_id, $catalog_item_id)

Archive Catalog Item

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->archiveCatalogItem($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->archiveCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCatalogItem**
> \Flipdish\\Client\Models\RestApiResultCatalogItem createCatalogItem($app_id, $create_catalog_item)

Create a Catalog Item

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$create_catalog_item = new \Flipdish\\Client\Models\CreateCatalogItem(); // \Flipdish\\Client\Models\CreateCatalogItem | 

try {
    $result = $apiInstance->createCatalogItem($app_id, $create_catalog_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->createCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **create_catalog_item** | [**\Flipdish\\Client\Models\CreateCatalogItem**](../Model/CreateCatalogItem.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCatalogItem**](../Model/RestApiResultCatalogItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCatalogItemImage**
> deleteCatalogItemImage($app_id, $catalog_item_id)

Delete a CatalogItem Image

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->deleteCatalogItemImage($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->deleteCatalogItemImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateCatalogItem**
> duplicateCatalogItem($app_id, $catalog_item_id)

Duplicate Catalog Item

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->duplicateCatalogItem($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->duplicateCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCatalogItemById**
> \Flipdish\\Client\Models\CatalogItem getCatalogItemById($app_id, $catalog_item_id)

Get item by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $result = $apiInstance->getCatalogItemById($app_id, $catalog_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->getCatalogItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\CatalogItem**](../Model/CatalogItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItems**
> \Flipdish\\Client\Models\RestApiPaginationResultCatalogItem getItems($app_id, $item_types, $search_term, $page, $limit)

Get paginated items by app name id filtered by types

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$item_types = array("item_types_example"); // string[] | 
$search_term = "search_term_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getItems($app_id, $item_types, $search_term, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->getItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **item_types** | [**string[]**](../Model/string.md)|  |
 **search_term** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultCatalogItem**](../Model/RestApiPaginationResultCatalogItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCatalogItem**
> updateCatalogItem($app_id, $catalog_item_id, $update_catalog_item)

Update Catalog Item

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 
$update_catalog_item = new \Flipdish\\Client\Models\UpdateCatalogItem(); // \Flipdish\\Client\Models\UpdateCatalogItem | 

try {
    $apiInstance->updateCatalogItem($app_id, $catalog_item_id, $update_catalog_item);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->updateCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |
 **update_catalog_item** | [**\Flipdish\\Client\Models\UpdateCatalogItem**](../Model/UpdateCatalogItem.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCatalogItemImage**
> \Flipdish\\Client\Models\RestApiStringResult uploadCatalogItemImage($app_id, $catalog_item_id, $image)

Upload a Catalog Item Image

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 
$image = "/path/to/file.txt"; // \SplFileObject | Catalog Item image

try {
    $result = $apiInstance->uploadCatalogItemImage($app_id, $catalog_item_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogItemsApi->uploadCatalogItemImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |
 **image** | **\SplFileObject**| Catalog Item image |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


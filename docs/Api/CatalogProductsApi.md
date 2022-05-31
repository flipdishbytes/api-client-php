# Flipdish\\Client\CatalogProductsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveProduct**](CatalogProductsApi.md#archiveProduct) | **POST** /api/v1.0/{appId}/catalog/products/{catalogItemId}/archive | Archive Product
[**createProduct**](CatalogProductsApi.md#createProduct) | **POST** /api/v1.0/{appId}/catalog/products | Create a Product
[**duplicateProduct**](CatalogProductsApi.md#duplicateProduct) | **POST** /api/v1.0/{appId}/catalog/products/{catalogItemId}/duplicate | Duplicate Product
[**getProductById**](CatalogProductsApi.md#getProductById) | **GET** /api/v1.0/{appId}/catalog/products/{catalogItemId} | Get Product by Id
[**getProducts**](CatalogProductsApi.md#getProducts) | **GET** /api/v1.0/{appId}/catalog/products | Get paginated products by app name id filtered by types
[**updateProduct**](CatalogProductsApi.md#updateProduct) | **POST** /api/v1.0/{appId}/catalog/products/{catalogItemId} | Update Product


# **archiveProduct**
> archiveProduct($app_id, $catalog_item_id)

Archive Product

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->archiveProduct($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductsApi->archiveProduct: ', $e->getMessage(), PHP_EOL;
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

# **createProduct**
> \Flipdish\\Client\Models\RestApiResultProduct createProduct($app_id, $create_product)

Create a Product

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$create_product = new \Flipdish\\Client\Models\CreateProduct(); // \Flipdish\\Client\Models\CreateProduct | 

try {
    $result = $apiInstance->createProduct($app_id, $create_product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **create_product** | [**\Flipdish\\Client\Models\CreateProduct**](../Model/CreateProduct.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultProduct**](../Model/RestApiResultProduct.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateProduct**
> duplicateProduct($app_id, $catalog_item_id)

Duplicate Product

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->duplicateProduct($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductsApi->duplicateProduct: ', $e->getMessage(), PHP_EOL;
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

# **getProductById**
> \Flipdish\\Client\Models\Product getProductById($app_id, $catalog_item_id)

Get Product by Id

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $result = $apiInstance->getProductById($app_id, $catalog_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductsApi->getProductById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\Product**](../Model/Product.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducts**
> \Flipdish\\Client\Models\RestApiPaginationResultProduct getProducts($app_id, $product_types, $search_term, $page, $limit)

Get paginated products by app name id filtered by types

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$product_types = array("product_types_example"); // string[] | 
$search_term = "search_term_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getProducts($app_id, $product_types, $search_term, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **product_types** | [**string[]**](../Model/string.md)|  |
 **search_term** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultProduct**](../Model/RestApiPaginationResultProduct.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> updateProduct($app_id, $catalog_item_id, $update_product)

Update Product

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_item_id = "catalog_item_id_example"; // string | 
$update_product = new \Flipdish\\Client\Models\UpdateProduct(); // \Flipdish\\Client\Models\UpdateProduct | 

try {
    $apiInstance->updateProduct($app_id, $catalog_item_id, $update_product);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |
 **update_product** | [**\Flipdish\\Client\Models\UpdateProduct**](../Model/UpdateProduct.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


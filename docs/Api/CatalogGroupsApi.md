# Flipdish\\Client\CatalogGroupsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveCatalogGroup**](CatalogGroupsApi.md#archiveCatalogGroup) | **POST** /api/v1.0/{appId}/catalog/groups/{catalogGroupId}/archive | Archive Catalog Group
[**createCatalogGroup**](CatalogGroupsApi.md#createCatalogGroup) | **POST** /api/v1.0/{appId}/catalog/groups | Create a Catalog Group
[**duplicateCatalogGroup**](CatalogGroupsApi.md#duplicateCatalogGroup) | **POST** /api/v1.0/{appId}/catalog/groups/{catalogGroupId}/duplicate | Duplicate Catalog Group
[**getCatalogGroupById**](CatalogGroupsApi.md#getCatalogGroupById) | **GET** /api/v1.0/{appId}/catalog/groups/{catalogGroupId} | Get group by Id
[**getGroups**](CatalogGroupsApi.md#getGroups) | **GET** /api/v1.0/{appId}/catalog/groups | Get paginated groups by app name id filtered by types
[**updateCatalogGroup**](CatalogGroupsApi.md#updateCatalogGroup) | **POST** /api/v1.0/{appId}/catalog/groups/{catalogGroupId} | Update Catalog Group


# **archiveCatalogGroup**
> archiveCatalogGroup($app_id, $catalog_group_id)

Archive Catalog Group

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_group_id = "catalog_group_id_example"; // string | 

try {
    $apiInstance->archiveCatalogGroup($app_id, $catalog_group_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->archiveCatalogGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_group_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCatalogGroup**
> \Flipdish\\Client\Models\RestApiResultCatalogGroup createCatalogGroup($app_id, $create_catalog_group)

Create a Catalog Group

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$create_catalog_group = new \Flipdish\\Client\Models\CreateCatalogGroup(); // \Flipdish\\Client\Models\CreateCatalogGroup | 

try {
    $result = $apiInstance->createCatalogGroup($app_id, $create_catalog_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->createCatalogGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **create_catalog_group** | [**\Flipdish\\Client\Models\CreateCatalogGroup**](../Model/CreateCatalogGroup.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCatalogGroup**](../Model/RestApiResultCatalogGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateCatalogGroup**
> duplicateCatalogGroup($app_id, $catalog_group_id)

Duplicate Catalog Group

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_group_id = "catalog_group_id_example"; // string | 

try {
    $apiInstance->duplicateCatalogGroup($app_id, $catalog_group_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->duplicateCatalogGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_group_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCatalogGroupById**
> \Flipdish\\Client\Models\CatalogGroup getCatalogGroupById($app_id, $catalog_group_id)

Get group by Id

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_group_id = "catalog_group_id_example"; // string | 

try {
    $result = $apiInstance->getCatalogGroupById($app_id, $catalog_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->getCatalogGroupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_group_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\CatalogGroup**](../Model/CatalogGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Flipdish\\Client\Models\RestApiPaginationResultCatalogGroup getGroups($app_id, $group_types, $search_term, $page, $limit)

Get paginated groups by app name id filtered by types

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$group_types = array("group_types_example"); // string[] | 
$search_term = "search_term_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getGroups($app_id, $group_types, $search_term, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **group_types** | [**string[]**](../Model/string.md)|  |
 **search_term** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultCatalogGroup**](../Model/RestApiPaginationResultCatalogGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCatalogGroup**
> updateCatalogGroup($app_id, $catalog_group_id, $update_catalog_group)

Update Catalog Group

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$catalog_group_id = "catalog_group_id_example"; // string | 
$update_catalog_group = new \Flipdish\\Client\Models\UpdateCatalogGroup(); // \Flipdish\\Client\Models\UpdateCatalogGroup | 

try {
    $apiInstance->updateCatalogGroup($app_id, $catalog_group_id, $update_catalog_group);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->updateCatalogGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_group_id** | **string**|  |
 **update_catalog_group** | [**\Flipdish\\Client\Models\UpdateCatalogGroup**](../Model/UpdateCatalogGroup.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


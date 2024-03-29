# Flipdish\\Client\CatalogGroupsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveGroup**](CatalogGroupsApi.md#archiveGroup) | **POST** /api/v1.0/{appId}/catalog/groups/{catalogItemId}/archive | Archive Catalog Group
[**createGroup**](CatalogGroupsApi.md#createGroup) | **POST** /api/v1.0/{appId}/catalog/groups | Create a Catalog Group
[**duplicateGroup**](CatalogGroupsApi.md#duplicateGroup) | **POST** /api/v1.0/{appId}/catalog/groups/{catalogItemId}/duplicate | Duplicate Catalog Group
[**getGroupById**](CatalogGroupsApi.md#getGroupById) | **GET** /api/v1.0/{appId}/catalog/groups/{catalogItemId} | Get group by Id
[**getGroups**](CatalogGroupsApi.md#getGroups) | **GET** /api/v1.0/{appId}/catalog/groups | Get paginated groups by app name id filtered by types
[**updateGroup**](CatalogGroupsApi.md#updateGroup) | **POST** /api/v1.0/{appId}/catalog/groups/{catalogItemId} | Update Catalog Group


# **archiveGroup**
> archiveGroup($app_id, $catalog_item_id)

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
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->archiveGroup($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->archiveGroup: ', $e->getMessage(), PHP_EOL;
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

# **createGroup**
> \Flipdish\\Client\Models\RestApiResultGroup createGroup($app_id, $create_group)

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
$create_group = new \Flipdish\\Client\Models\CreateGroup(); // \Flipdish\\Client\Models\CreateGroup | 

try {
    $result = $apiInstance->createGroup($app_id, $create_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **create_group** | [**\Flipdish\\Client\Models\CreateGroup**](../Model/CreateGroup.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultGroup**](../Model/RestApiResultGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateGroup**
> duplicateGroup($app_id, $catalog_item_id)

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
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $apiInstance->duplicateGroup($app_id, $catalog_item_id);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->duplicateGroup: ', $e->getMessage(), PHP_EOL;
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

# **getGroupById**
> \Flipdish\\Client\Models\Group getGroupById($app_id, $catalog_item_id)

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
$catalog_item_id = "catalog_item_id_example"; // string | 

try {
    $result = $apiInstance->getGroupById($app_id, $catalog_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->getGroupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\Group**](../Model/Group.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Flipdish\\Client\Models\RestApiPaginationResultGroup getGroups($app_id, $group_types, $search_term, $page, $limit)

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

[**\Flipdish\\Client\Models\RestApiPaginationResultGroup**](../Model/RestApiPaginationResultGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> updateGroup($app_id, $catalog_item_id, $update_group)

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
$catalog_item_id = "catalog_item_id_example"; // string | 
$update_group = new \Flipdish\\Client\Models\UpdateGroup(); // \Flipdish\\Client\Models\UpdateGroup | 

try {
    $apiInstance->updateGroup($app_id, $catalog_item_id, $update_group);
} catch (Exception $e) {
    echo 'Exception when calling CatalogGroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **catalog_item_id** | **string**|  |
 **update_group** | [**\Flipdish\\Client\Models\UpdateGroup**](../Model/UpdateGroup.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\MenuSectionItemsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneMenuSectionItem**](MenuSectionItemsApi.md#cloneMenuSectionItem) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/clone | 
[**createMenuSectionItem**](MenuSectionItemsApi.md#createMenuSectionItem) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems | 
[**createMenuSectionItemFromCatalogItems**](MenuSectionItemsApi.md#createMenuSectionItemFromCatalogItems) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/add-catalogitems | 
[**deleteMenuSectionItem**](MenuSectionItemsApi.md#deleteMenuSectionItem) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId} | 
[**deleteMenuSectionItemImage**](MenuSectionItemsApi.md#deleteMenuSectionItemImage) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/image | 
[**getMenuItemById**](MenuSectionItemsApi.md#getMenuItemById) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId} | Get menu item by identifier
[**getMenuItems**](MenuSectionItemsApi.md#getMenuItems) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems | Get menu items
[**moveMenuItem**](MenuSectionItemsApi.md#moveMenuItem) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/setorder/{destinationDisplayOrder} | 
[**setSectionItemTax**](MenuSectionItemsApi.md#setSectionItemTax) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/taxrate/{taxRateId} | 
[**updateMenuSectionItem**](MenuSectionItemsApi.md#updateMenuSectionItem) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId} | 
[**uploadMenuSectionItemImage**](MenuSectionItemsApi.md#uploadMenuSectionItemImage) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/image | 


# **cloneMenuSectionItem**
> \Flipdish\\Client\Models\RestApiResultMenuSectionItem cloneMenuSectionItem($menu_id, $menu_section_id, $menu_section_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 

try {
    $result = $apiInstance->cloneMenuSectionItem($menu_id, $menu_section_id, $menu_section_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->cloneMenuSectionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuSectionItem**](../Model/RestApiResultMenuSectionItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMenuSectionItem**
> object createMenuSectionItem($menu_id, $menu_section_id, $menu_section_item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item = new \Flipdish\\Client\Models\MenuSectionItemBase(); // \Flipdish\\Client\Models\MenuSectionItemBase | 

try {
    $result = $apiInstance->createMenuSectionItem($menu_id, $menu_section_id, $menu_section_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->createMenuSectionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item** | [**\Flipdish\\Client\Models\MenuSectionItemBase**](../Model/MenuSectionItemBase.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMenuSectionItemFromCatalogItems**
> object createMenuSectionItemFromCatalogItems($menu_id, $menu_section_id, $create_from_catalog_items)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$create_from_catalog_items = new \Flipdish\\Client\Models\CreateMenuSectionItemFromCatalogItems(); // \Flipdish\\Client\Models\CreateMenuSectionItemFromCatalogItems | 

try {
    $result = $apiInstance->createMenuSectionItemFromCatalogItems($menu_id, $menu_section_id, $create_from_catalog_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->createMenuSectionItemFromCatalogItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **create_from_catalog_items** | [**\Flipdish\\Client\Models\CreateMenuSectionItemFromCatalogItems**](../Model/CreateMenuSectionItemFromCatalogItems.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuSectionItem**
> deleteMenuSectionItem($menu_id, $menu_section_id, $menu_section_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 

try {
    $apiInstance->deleteMenuSectionItem($menu_id, $menu_section_id, $menu_section_item_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->deleteMenuSectionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuSectionItemImage**
> deleteMenuSectionItemImage($menu_id, $menu_section_id, $menu_section_item_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 

try {
    $apiInstance->deleteMenuSectionItemImage($menu_id, $menu_section_id, $menu_section_item_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->deleteMenuSectionItemImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemById**
> \Flipdish\\Client\Models\RestApiResultMenuSectionItem getMenuItemById($menu_id, $menu_section_id, $menu_section_item_id)

Get menu item by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu item identifier

try {
    $result = $apiInstance->getMenuItemById($menu_id, $menu_section_id, $menu_section_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->getMenuItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu item identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuSectionItem**](../Model/RestApiResultMenuSectionItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItems**
> \Flipdish\\Client\Models\RestApiArrayResultMenuSectionItem getMenuItems($menu_id, $menu_section_id)

Get menu items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier

try {
    $result = $apiInstance->getMenuItems($menu_id, $menu_section_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->getMenuItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuSectionItem**](../Model/RestApiArrayResultMenuSectionItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveMenuItem**
> moveMenuItem($menu_id, $menu_section_id, $menu_section_item_id, $destination_display_order)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 
$destination_display_order = 56; // int | 

try {
    $apiInstance->moveMenuItem($menu_id, $menu_section_id, $menu_section_item_id, $destination_display_order);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->moveMenuItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |
 **destination_display_order** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSectionItemTax**
> setSectionItemTax($menu_id, $menu_section_id, $menu_section_item_id, $tax_rate_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 
$tax_rate_id = 56; // int | 

try {
    $apiInstance->setSectionItemTax($menu_id, $menu_section_id, $menu_section_item_id, $tax_rate_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->setSectionItemTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |
 **tax_rate_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenuSectionItem**
> updateMenuSectionItem($menu_id, $menu_section_id, $menu_section_item_id, $menu_section_item, $undo_after)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 
$menu_section_item = new \Flipdish\\Client\Models\MenuSectionItemBase(); // \Flipdish\\Client\Models\MenuSectionItemBase | 
$undo_after = 1.2; // double | 

try {
    $apiInstance->updateMenuSectionItem($menu_id, $menu_section_id, $menu_section_item_id, $menu_section_item, $undo_after);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->updateMenuSectionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |
 **menu_section_item** | [**\Flipdish\\Client\Models\MenuSectionItemBase**](../Model/MenuSectionItemBase.md)|  |
 **undo_after** | **double**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMenuSectionItemImage**
> \Flipdish\\Client\Models\RestApiStringResult uploadMenuSectionItemImage($menu_id, $menu_section_id, $menu_section_item_id, $image)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | 
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 
$image = "/path/to/file.txt"; // \SplFileObject | Menu section item image

try {
    $result = $apiInstance->uploadMenuSectionItemImage($menu_id, $menu_section_id, $menu_section_item_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionItemsApi->uploadMenuSectionItemImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |
 **image** | **\SplFileObject**| Menu section item image |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


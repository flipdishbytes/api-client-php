# Flipdish\Client\MenuOptionSetItemsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMenuItemOptionSetItem**](MenuOptionSetItemsApi.md#addMenuItemOptionSetItem) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems | Create menu item option set item
[**deleteOptionSetItemImage**](MenuOptionSetItemsApi.md#deleteOptionSetItemImage) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems/{menuItemOptionSetItemId}/image | Delete menu item option set item image
[**getMenuItemOptionSetItemById**](MenuOptionSetItemsApi.md#getMenuItemOptionSetItemById) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems/{menuItemOptionSetItemId} | Get menu item option set item by identifier
[**getMenuItemOptionSetItems**](MenuOptionSetItemsApi.md#getMenuItemOptionSetItems) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems | Get menu item option set items
[**removeMenuItemOptionSetItem**](MenuOptionSetItemsApi.md#removeMenuItemOptionSetItem) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems/{menuItemOptionSetItemId} | Delete menu item option set item
[**setOptionSetItemTax**](MenuOptionSetItemsApi.md#setOptionSetItemTax) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems/{menuItemOptionSetItemId}/taxrate/{taxRateId} | [Private API] Set Tax Rate on OptionSetItem
[**updateMenuItemOptionSetItem**](MenuOptionSetItemsApi.md#updateMenuItemOptionSetItem) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems/{menuItemOptionSetItemId} | Update menu item option set item
[**uploadOptionSetItemImage**](MenuOptionSetItemsApi.md#uploadOptionSetItemImage) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/optionsetitems/{menuItemOptionSetItemId}/image | Upload menu item option set item image


# **addMenuItemOptionSetItem**
> object addMenuItemOptionSetItem($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item)

Create menu item option set item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set_item = new \Flipdish\Client\Models\MenuItemOptionSetItemBase(); // \Flipdish\Client\Models\MenuItemOptionSetItemBase | Option set item

try {
    $result = $apiInstance->addMenuItemOptionSetItem($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->addMenuItemOptionSetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |
 **menu_item_option_set_item** | [**\Flipdish\Client\Models\MenuItemOptionSetItemBase**](../Model/MenuItemOptionSetItemBase.md)| Option set item |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOptionSetItemImage**
> deleteOptionSetItemImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id)

Delete menu item option set item image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set_item_id = 56; // int | Option set item identifier

try {
    $apiInstance->deleteOptionSetItemImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->deleteOptionSetItemImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |
 **menu_item_option_set_item_id** | **int**| Option set item identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemOptionSetItemById**
> \Flipdish\Client\Models\RestApiResultMenuItemOptionSetItem getMenuItemOptionSetItemById($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id)

Get menu item option set item by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set_item_id = 56; // int | Option set item identifier

try {
    $result = $apiInstance->getMenuItemOptionSetItemById($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->getMenuItemOptionSetItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |
 **menu_item_option_set_item_id** | **int**| Option set item identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultMenuItemOptionSetItem**](../Model/RestApiResultMenuItemOptionSetItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemOptionSetItems**
> \Flipdish\Client\Models\RestApiArrayResultMenuItemOptionSetItem getMenuItemOptionSetItems($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id)

Get menu item option set items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier

try {
    $result = $apiInstance->getMenuItemOptionSetItems($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->getMenuItemOptionSetItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultMenuItemOptionSetItem**](../Model/RestApiArrayResultMenuItemOptionSetItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMenuItemOptionSetItem**
> removeMenuItemOptionSetItem($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id)

Delete menu item option set item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set_item_id = 56; // int | Option set item identifier

try {
    $apiInstance->removeMenuItemOptionSetItem($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->removeMenuItemOptionSetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |
 **menu_item_option_set_item_id** | **int**| Option set item identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setOptionSetItemTax**
> setOptionSetItemTax($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id, $tax_rate_id)

[Private API] Set Tax Rate on OptionSetItem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | 
$menu_section_item_id = 56; // int | 
$option_set_id = 56; // int | 
$menu_item_option_set_item_id = 56; // int | Option set item identifier
$tax_rate_id = 56; // int | Tax Rate to use

try {
    $apiInstance->setOptionSetItemTax($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id, $tax_rate_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->setOptionSetItemTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**|  |
 **menu_section_item_id** | **int**|  |
 **option_set_id** | **int**|  |
 **menu_item_option_set_item_id** | **int**| Option set item identifier |
 **tax_rate_id** | **int**| Tax Rate to use |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenuItemOptionSetItem**
> updateMenuItemOptionSetItem($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id, $menu_item_option_set_item, $undo_after)

Update menu item option set item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set_item_id = 56; // int | Option set item identifier
$menu_item_option_set_item = new \Flipdish\Client\Models\MenuItemOptionSetItemBase(); // \Flipdish\Client\Models\MenuItemOptionSetItemBase | Option set item (delta)
$undo_after = 1.2; // double | An optional time period, in hours, after which the hide-section operaton will be undone.

try {
    $apiInstance->updateMenuItemOptionSetItem($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id, $menu_item_option_set_item, $undo_after);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->updateMenuItemOptionSetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |
 **menu_item_option_set_item_id** | **int**| Option set item identifier |
 **menu_item_option_set_item** | [**\Flipdish\Client\Models\MenuItemOptionSetItemBase**](../Model/MenuItemOptionSetItemBase.md)| Option set item (delta) |
 **undo_after** | **double**| An optional time period, in hours, after which the hide-section operaton will be undone. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOptionSetItemImage**
> \Flipdish\Client\Models\RestApiStringResult uploadOptionSetItemImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id, $image)

Upload menu item option set item image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set_item_id = 56; // int | Option set item identifier
$image = "/path/to/file.txt"; // \SplFileObject | Option set item image

try {
    $result = $apiInstance->uploadOptionSetItemImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set_item_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetItemsApi->uploadOptionSetItemImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Option set identifier |
 **menu_item_option_set_item_id** | **int**| Option set item identifier |
 **image** | **\SplFileObject**| Option set item image |

### Return type

[**\Flipdish\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


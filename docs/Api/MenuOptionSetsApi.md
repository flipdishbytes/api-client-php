# Flipdish\Client\MenuOptionSetsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMenuItemOptionSet**](MenuOptionSetsApi.md#createMenuItemOptionSet) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets | Create menu item option set
[**deleteMenuItemOptionSet**](MenuOptionSetsApi.md#deleteMenuItemOptionSet) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId} | Delete menu item option set
[**deleteOptionSetImage**](MenuOptionSetsApi.md#deleteOptionSetImage) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/image | Delete option set image
[**getMenuItemOptionSetById**](MenuOptionSetsApi.md#getMenuItemOptionSetById) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId} | Get menu item option set by identifier
[**getMenuItemOptionSets**](MenuOptionSetsApi.md#getMenuItemOptionSets) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets | Get menu item option sets
[**updateMenuItemOptionSet**](MenuOptionSetsApi.md#updateMenuItemOptionSet) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId} | Update menu item option set
[**uploadOptionSetImage**](MenuOptionSetsApi.md#uploadOptionSetImage) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitems/{menuSectionItemId}/optionsets/{optionSetId}/image | Upload menu item option set image


# **createMenuItemOptionSet**
> object createMenuItemOptionSet($menu_id, $menu_section_id, $menu_section_item_id, $menu_item_option_set)

Create menu item option set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$menu_item_option_set = new \Flipdish\Client\Model\MenuItemOptionSetBase(); // \Flipdish\Client\Model\MenuItemOptionSetBase | Menu item option set

try {
    $result = $apiInstance->createMenuItemOptionSet($menu_id, $menu_section_id, $menu_section_item_id, $menu_item_option_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->createMenuItemOptionSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **menu_item_option_set** | [**\Flipdish\Client\Model\MenuItemOptionSetBase**](../Model/MenuItemOptionSetBase.md)| Menu item option set |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuItemOptionSet**
> deleteMenuItemOptionSet($menu_id, $menu_section_item_id, $menu_section_id, $option_set_id)

Delete menu item option set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$menu_section_id = 56; // int | Menu section identifier
$option_set_id = 56; // int | Option set identifier

try {
    $apiInstance->deleteMenuItemOptionSet($menu_id, $menu_section_item_id, $menu_section_id, $option_set_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->deleteMenuItemOptionSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **option_set_id** | **int**| Option set identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOptionSetImage**
> deleteOptionSetImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id)

Delete option set image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
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
    $apiInstance->deleteOptionSetImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->deleteOptionSetImage: ', $e->getMessage(), PHP_EOL;
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

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemOptionSetById**
> \Flipdish\Client\Model\RestApiResultMenuItemOptionSet getMenuItemOptionSetById($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id)

Get menu item option set by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Menu item option set identifier

try {
    $result = $apiInstance->getMenuItemOptionSetById($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->getMenuItemOptionSetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |
 **option_set_id** | **int**| Menu item option set identifier |

### Return type

[**\Flipdish\Client\Model\RestApiResultMenuItemOptionSet**](../Model/RestApiResultMenuItemOptionSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemOptionSets**
> \Flipdish\Client\Model\RestApiArrayResultMenuItemOptionSet getMenuItemOptionSets($menu_id, $menu_section_id, $menu_section_item_id)

Get menu item option sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier

try {
    $result = $apiInstance->getMenuItemOptionSets($menu_id, $menu_section_id, $menu_section_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->getMenuItemOptionSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_item_id** | **int**| Menu section item identifier |

### Return type

[**\Flipdish\Client\Model\RestApiArrayResultMenuItemOptionSet**](../Model/RestApiArrayResultMenuItemOptionSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenuItemOptionSet**
> updateMenuItemOptionSet($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set)

Update menu item option set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$menu_item_option_set = new \Flipdish\Client\Model\MenuItemOptionSetBase(); // \Flipdish\Client\Model\MenuItemOptionSetBase | Menu item option set (delta)

try {
    $apiInstance->updateMenuItemOptionSet($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $menu_item_option_set);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->updateMenuItemOptionSet: ', $e->getMessage(), PHP_EOL;
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
 **menu_item_option_set** | [**\Flipdish\Client\Model\MenuItemOptionSetBase**](../Model/MenuItemOptionSetBase.md)| Menu item option set (delta) |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOptionSetImage**
> \Flipdish\Client\Model\RestApiStringResult uploadOptionSetImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $image)

Upload menu item option set image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\MenuOptionSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_item_id = 56; // int | Menu section item identifier
$option_set_id = 56; // int | Option set identifier
$image = "/path/to/file.txt"; // \SplFileObject | Option set image

try {
    $result = $apiInstance->uploadOptionSetImage($menu_id, $menu_section_id, $menu_section_item_id, $option_set_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuOptionSetsApi->uploadOptionSetImage: ', $e->getMessage(), PHP_EOL;
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
 **image** | **\SplFileObject**| Option set image |

### Return type

[**\Flipdish\Client\Model\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


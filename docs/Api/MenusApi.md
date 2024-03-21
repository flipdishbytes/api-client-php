# Flipdish\\Client\MenusApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDraftMenuFromExistingMenu**](MenusApi.md#createDraftMenuFromExistingMenu) | **POST** /api/v1.0/menus/{menuId}/clone/{newName} | [PRIVATE API] Clone a menu, (without attaching stores)
[**createNewMenuAsync**](MenusApi.md#createNewMenuAsync) | **POST** /api/v1.0/{appId}/menus/async | Create a new menu asynchronously
[**createNewMenuForApp**](MenusApi.md#createNewMenuForApp) | **POST** /api/v1.0/{appId}/menus | Create a new menu
[**deleteMenu**](MenusApi.md#deleteMenu) | **DELETE** /api/v1.0/menus/{menuId} | [PRIVATE API] Mark a Menu as Deleted
[**deleteMenuImage**](MenusApi.md#deleteMenuImage) | **DELETE** /api/v1.0/menus/{menuId}/image | Delete menu image
[**deleteMenuItemMetadata**](MenusApi.md#deleteMenuItemMetadata) | **DELETE** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/{key}/store/{storeId} | Delete menu item metadata
[**getAllMenuMetadataByMenuIdAndStoreId**](MenusApi.md#getAllMenuMetadataByMenuIdAndStoreId) | **GET** /api/v1.0/menus/{menuId}/metadata/store/{storeId} | Get all menu metadata by menu ID and store ID
[**getMenuById**](MenusApi.md#getMenuById) | **GET** /api/v1.0/menus/{menuId} | Get menu by identifier
[**getMenuItemMetadata**](MenusApi.md#getMenuItemMetadata) | **GET** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/store/{storeId} | Get menu item metadata
[**getMenuItemMetadataByKey**](MenusApi.md#getMenuItemMetadataByKey) | **GET** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/{key}/store/{storeId} | Get menu item metadata by key
[**getMenuItemOptionSetItemMetadata**](MenusApi.md#getMenuItemOptionSetItemMetadata) | **GET** /api/v1.0/menus/{menuId}/optionsetitem/{optionSetItemId}/metadata/store/{storeId} | Get menu item option set item metadata by key
[**getMenuName**](MenusApi.md#getMenuName) | **GET** /api/v1.0/menus/{menuId}/name | [PRIVATE API] Get Menus Name
[**getMenuStoreNames**](MenusApi.md#getMenuStoreNames) | **GET** /api/v1.0/menus/{menuId}/stores | [PRIVATE API] Get menus store names
[**getMenuTaxDetails**](MenusApi.md#getMenuTaxDetails) | **GET** /api/v1.0/menus/{menuId}/tax | [PRIVATE API] Get menus tax details
[**getMenusByAppId**](MenusApi.md#getMenusByAppId) | **GET** /api/v1.0/{appId}/menus | [PRIVATE API] Get menus by appId
[**getMenusCheckpoints**](MenusApi.md#getMenusCheckpoints) | **GET** /api/v1.0/menus/{menuId}/checkpoints | [PRIVATE API]Get a Menus Checkpoints
[**menusDeleteTaxRate**](MenusApi.md#menusDeleteTaxRate) | **DELETE** /api/v1.0/menus/{menuId}/tax/{taxId} | [PRIVATE API] Remove a Menus Tax Rate, can only remove a tax rate that does not have items/optionSetItems attached
[**menusGetMenuBulkShowHide**](MenusApi.md#menusGetMenuBulkShowHide) | **GET** /api/v1.0/menus/{menuId}/bulkshowhide/list | Get bulk show/hide menu items and option set items
[**menusSetDisplayOnMenuTax**](MenusApi.md#menusSetDisplayOnMenuTax) | **POST** /api/v1.0/menus/{menuId}/tax/show/{show} | [PRIVATE API] Set if tax shows for a Menu
[**menusSetItemDisplayOrders**](MenusApi.md#menusSetItemDisplayOrders) | **POST** /api/v1.0/menus/{menuId}/sectiondisplayorders | [PRIVATE API] Re-arrange Sections within a Menu
[**menusShowHideBulkItems**](MenusApi.md#menusShowHideBulkItems) | **POST** /api/v1.0/menus/{menuId}/bulkshowhide | Bulk show/hide menu items or option set items
[**menusUpdateTaxType**](MenusApi.md#menusUpdateTaxType) | **POST** /api/v1.0/menus/{menuId}/tax/type/{type} | [PRIVATE API] Set the type of Tax on a Menu
[**menusUpsertTaxRate**](MenusApi.md#menusUpsertTaxRate) | **POST** /api/v1.0/menus/{menuId}/taxrate | [PRIVATE API] Add/Update a Tax Rate
[**restoreAMenuCheckpoint**](MenusApi.md#restoreAMenuCheckpoint) | **POST** /api/v1.0/menus/{menuId}/checkpoints/{checkpointId}/restore | [PRIVATE API] Restore a Menu to a checkpoint
[**setMenuItemMetadata**](MenusApi.md#setMenuItemMetadata) | **PUT** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/store/{storeId} | Update menu item metadata
[**setMenuItemOptionSetItemMetadata**](MenusApi.md#setMenuItemOptionSetItemMetadata) | **PUT** /api/v1.0/menus/{menuId}/optionsetitem/{optionSetItemId}/metadata/store/{storeId} | Update menu item option set item metadata
[**setMenuLock**](MenusApi.md#setMenuLock) | **POST** /api/v1.0/menus/{menuId}/lock | [PRIVATE API] Lock/Unlock a Menu for Editing
[**setMenuName**](MenusApi.md#setMenuName) | **POST** /api/v1.0/menus/{menuId}/name | [PRIVATE API] Set Menus Name
[**updateMenu**](MenusApi.md#updateMenu) | **POST** /api/v1.0/menus/{menuId} | Update menu
[**uploadMenuImage**](MenusApi.md#uploadMenuImage) | **POST** /api/v1.0/menus/{menuId}/image | Upload menu image
[**uploadNewMenuForApp**](MenusApi.md#uploadNewMenuForApp) | **POST** /api/v1.0/{appId}/menus/xlsx | Create a new menu from xlsx file.


# **createDraftMenuFromExistingMenu**
> \Flipdish\\Client\Models\RestApiResultMenu createDraftMenuFromExistingMenu($menu_id, $new_name)

[PRIVATE API] Clone a menu, (without attaching stores)

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$new_name = "new_name_example"; // string | Name of the new Menu

try {
    $result = $apiInstance->createDraftMenuFromExistingMenu($menu_id, $new_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createDraftMenuFromExistingMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **new_name** | **string**| Name of the new Menu |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenu**](../Model/RestApiResultMenu.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewMenuAsync**
> object createNewMenuAsync($app_id, $menu)

Create a new menu asynchronously

You must listen to the webhook menu.async_creation.completed to know when the menu is ready

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App id
$menu = new \Flipdish\\Client\Models\CreateFullMenu(); // \Flipdish\\Client\Models\CreateFullMenu | Menu

try {
    $result = $apiInstance->createNewMenuAsync($app_id, $menu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createNewMenuAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App id |
 **menu** | [**\Flipdish\\Client\Models\CreateFullMenu**](../Model/CreateFullMenu.md)| Menu |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewMenuForApp**
> int createNewMenuForApp($app_id, $menu)

Create a new menu

[DEPRECATED] - Please use the async version as this endpoint may timeout for large menus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App identifier
$menu = new \Flipdish\\Client\Models\CreateFullMenu(); // \Flipdish\\Client\Models\CreateFullMenu | Menu. If empty the system will create a menu with default items

try {
    $result = $apiInstance->createNewMenuForApp($app_id, $menu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createNewMenuForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App identifier |
 **menu** | [**\Flipdish\\Client\Models\CreateFullMenu**](../Model/CreateFullMenu.md)| Menu. If empty the system will create a menu with default items |

### Return type

**int**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenu**
> deleteMenu($menu_id)

[PRIVATE API] Mark a Menu as Deleted

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu Identifier

try {
    $apiInstance->deleteMenu($menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->deleteMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu Identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuImage**
> deleteMenuImage($menu_id)

Delete menu image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $apiInstance->deleteMenuImage($menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->deleteMenuImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuItemMetadata**
> deleteMenuItemMetadata($menu_id, $store_id, $menu_item_id, $key)

Delete menu item metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier
$menu_item_id = 56; // int | Menu item identifier
$key = "key_example"; // string | Metadata key

try {
    $apiInstance->deleteMenuItemMetadata($menu_id, $store_id, $menu_item_id, $key);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->deleteMenuItemMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |
 **menu_item_id** | **int**| Menu item identifier |
 **key** | **string**| Metadata key |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMenuMetadataByMenuIdAndStoreId**
> \Flipdish\\Client\Models\RestApiArrayResultAllMetadataResult getAllMenuMetadataByMenuIdAndStoreId($menu_id, $store_id)

Get all menu metadata by menu ID and store ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier

try {
    $result = $apiInstance->getAllMenuMetadataByMenuIdAndStoreId($menu_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getAllMenuMetadataByMenuIdAndStoreId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAllMetadataResult**](../Model/RestApiArrayResultAllMetadataResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuById**
> \Flipdish\\Client\Models\RestApiResultMenu getMenuById($menu_id)

Get menu by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenuById($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenu**](../Model/RestApiResultMenu.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemMetadata**
> \Flipdish\\Client\Models\RestApiArrayResultMetadata getMenuItemMetadata($menu_id, $store_id, $menu_item_id)

Get menu item metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier
$menu_item_id = 56; // int | Menu item identifier

try {
    $result = $apiInstance->getMenuItemMetadata($menu_id, $store_id, $menu_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuItemMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |
 **menu_item_id** | **int**| Menu item identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMetadata**](../Model/RestApiArrayResultMetadata.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemMetadataByKey**
> \Flipdish\\Client\Models\RestApiResultMetadata getMenuItemMetadataByKey($menu_id, $store_id, $menu_item_id, $key)

Get menu item metadata by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier
$menu_item_id = 56; // int | Menu item identifier
$key = "key_example"; // string | Metadata key

try {
    $result = $apiInstance->getMenuItemMetadataByKey($menu_id, $store_id, $menu_item_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuItemMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |
 **menu_item_id** | **int**| Menu item identifier |
 **key** | **string**| Metadata key |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMetadata**](../Model/RestApiResultMetadata.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuItemOptionSetItemMetadata**
> \Flipdish\\Client\Models\RestApiResultMetadata getMenuItemOptionSetItemMetadata($menu_id, $store_id, $option_set_item_id)

Get menu item option set item metadata by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier
$option_set_item_id = 56; // int | Menu item option set item identifier

try {
    $result = $apiInstance->getMenuItemOptionSetItemMetadata($menu_id, $store_id, $option_set_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuItemOptionSetItemMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |
 **option_set_item_id** | **int**| Menu item option set item identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMetadata**](../Model/RestApiResultMetadata.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuName**
> string getMenuName($menu_id)

[PRIVATE API] Get Menus Name

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenuName($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuStoreNames**
> \Flipdish\\Client\Models\RestApiArrayResultMenuStoreNames getMenuStoreNames($menu_id)

[PRIVATE API] Get menus store names

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenuStoreNames($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuStoreNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuStoreNames**](../Model/RestApiArrayResultMenuStoreNames.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuTaxDetails**
> \Flipdish\\Client\Models\RestApiArrayResultMenuTaxDetails getMenuTaxDetails($menu_id)

[PRIVATE API] Get menus tax details

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenuTaxDetails($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuTaxDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuTaxDetails**](../Model/RestApiArrayResultMenuTaxDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenusByAppId**
> \Flipdish\\Client\Models\RestApiArrayResultMenuSummary getMenusByAppId($app_id)

[PRIVATE API] Get menus by appId

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Get Menus for this appId

try {
    $result = $apiInstance->getMenusByAppId($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenusByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Get Menus for this appId |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuSummary**](../Model/RestApiArrayResultMenuSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenusCheckpoints**
> \Flipdish\\Client\Models\RestApiArrayResultMenuCheckpoint getMenusCheckpoints($menu_id)

[PRIVATE API]Get a Menus Checkpoints

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenusCheckpoints($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenusCheckpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuCheckpoint**](../Model/RestApiArrayResultMenuCheckpoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusDeleteTaxRate**
> menusDeleteTaxRate($menu_id, $tax_id)

[PRIVATE API] Remove a Menus Tax Rate, can only remove a tax rate that does not have items/optionSetItems attached

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$tax_id = 56; // int | Id of Menu Tax to be removed

try {
    $apiInstance->menusDeleteTaxRate($menu_id, $tax_id);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusDeleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **tax_id** | **int**| Id of Menu Tax to be removed |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusGetMenuBulkShowHide**
> \Flipdish\\Client\Models\RestApiArrayResultMenuElementListResponse menusGetMenuBulkShowHide($menu_id, $is_available)

Get bulk show/hide menu items and option set items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu id
$is_available = true; // bool | Is available flag

try {
    $result = $apiInstance->menusGetMenuBulkShowHide($menu_id, $is_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusGetMenuBulkShowHide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu id |
 **is_available** | **bool**| Is available flag |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuElementListResponse**](../Model/RestApiArrayResultMenuElementListResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusSetDisplayOnMenuTax**
> menusSetDisplayOnMenuTax($menu_id, $show)

[PRIVATE API] Set if tax shows for a Menu

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$show = true; // bool | Boolean show or dont show tax (Exclusive tax type can only ever be TRUE)

try {
    $apiInstance->menusSetDisplayOnMenuTax($menu_id, $show);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusSetDisplayOnMenuTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **show** | **bool**| Boolean show or dont show tax (Exclusive tax type can only ever be TRUE) |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusSetItemDisplayOrders**
> menusSetItemDisplayOrders($menu_id, $display_orders)

[PRIVATE API] Re-arrange Sections within a Menu

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$display_orders = new \Flipdish\\Client\Models\MenuObjectDisplayOrders(); // \Flipdish\\Client\Models\MenuObjectDisplayOrders | Section Ids and their new display order

try {
    $apiInstance->menusSetItemDisplayOrders($menu_id, $display_orders);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusSetItemDisplayOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **display_orders** | [**\Flipdish\\Client\Models\MenuObjectDisplayOrders**](../Model/MenuObjectDisplayOrders.md)| Section Ids and their new display order |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusShowHideBulkItems**
> \Flipdish\\Client\Models\RestApiArrayResultMenuElementEditResponse menusShowHideBulkItems($menu_id, $menu_elements, $is_available)

Bulk show/hide menu items or option set items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu id
$menu_elements = array(new \Flipdish\\Client\Models\MenuElementHide()); // \Flipdish\\Client\Models\MenuElementHide[] | Elements to be show/hide
$is_available = true; // bool | Is available flag

try {
    $result = $apiInstance->menusShowHideBulkItems($menu_id, $menu_elements, $is_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusShowHideBulkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu id |
 **menu_elements** | [**\Flipdish\\Client\Models\MenuElementHide[]**](../Model/MenuElementHide.md)| Elements to be show/hide |
 **is_available** | **bool**| Is available flag |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuElementEditResponse**](../Model/RestApiArrayResultMenuElementEditResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusUpdateTaxType**
> menusUpdateTaxType($menu_id, $type)

[PRIVATE API] Set the type of Tax on a Menu

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$type = "type_example"; // string | Type of Tax

try {
    $apiInstance->menusUpdateTaxType($menu_id, $type);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusUpdateTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **type** | **string**| Type of Tax |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusUpsertTaxRate**
> \Flipdish\\Client\Models\MenuTaxRate menusUpsertTaxRate($menu_id, $tax_rate)

[PRIVATE API] Add/Update a Tax Rate

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$tax_rate = new \Flipdish\\Client\Models\MenuTaxRate(); // \Flipdish\\Client\Models\MenuTaxRate | Tax rate to add/update

try {
    $result = $apiInstance->menusUpsertTaxRate($menu_id, $tax_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->menusUpsertTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **tax_rate** | [**\Flipdish\\Client\Models\MenuTaxRate**](../Model/MenuTaxRate.md)| Tax rate to add/update |

### Return type

[**\Flipdish\\Client\Models\MenuTaxRate**](../Model/MenuTaxRate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreAMenuCheckpoint**
> restoreAMenuCheckpoint($menu_id, $checkpoint_id)

[PRIVATE API] Restore a Menu to a checkpoint

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$checkpoint_id = 56; // int | Checkpoint to restore menu to

try {
    $apiInstance->restoreAMenuCheckpoint($menu_id, $checkpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->restoreAMenuCheckpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **checkpoint_id** | **int**| Checkpoint to restore menu to |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuItemMetadata**
> setMenuItemMetadata($menu_id, $store_id, $menu_item_id, $metadata)

Update menu item metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier
$menu_item_id = 56; // int | Menu item identifier
$metadata = new \Flipdish\\Client\Models\Metadata(); // \Flipdish\\Client\Models\Metadata | Metadata object

try {
    $apiInstance->setMenuItemMetadata($menu_id, $store_id, $menu_item_id, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->setMenuItemMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |
 **menu_item_id** | **int**| Menu item identifier |
 **metadata** | [**\Flipdish\\Client\Models\Metadata**](../Model/Metadata.md)| Metadata object |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuItemOptionSetItemMetadata**
> setMenuItemOptionSetItemMetadata($menu_id, $store_id, $option_set_item_id, $metadata)

Update menu item option set item metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$store_id = 56; // int | Store identifier
$option_set_item_id = 56; // int | Menu item option set item identifier
$metadata = new \Flipdish\\Client\Models\Metadata(); // \Flipdish\\Client\Models\Metadata | Metadata object

try {
    $apiInstance->setMenuItemOptionSetItemMetadata($menu_id, $store_id, $option_set_item_id, $metadata);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->setMenuItemOptionSetItemMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **store_id** | **int**| Store identifier |
 **option_set_item_id** | **int**| Menu item option set item identifier |
 **metadata** | [**\Flipdish\\Client\Models\Metadata**](../Model/Metadata.md)| Metadata object |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuLock**
> setMenuLock($menu_id, $locked)

[PRIVATE API] Lock/Unlock a Menu for Editing

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$locked = true; // bool | True: Locks menu for editing, False: Unlocks for editing

try {
    $apiInstance->setMenuLock($menu_id, $locked);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->setMenuLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **locked** | **bool**| True: Locks menu for editing, False: Unlocks for editing |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuName**
> setMenuName($menu_id, $name)

[PRIVATE API] Set Menus Name

[PRIVATE API]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$name = "name_example"; // string | Name to set for this Menu

try {
    $apiInstance->setMenuName($menu_id, $name);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->setMenuName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **name** | **string**| Name to set for this Menu |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenu**
> updateMenu($menu_id, $menu)

Update menu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu = new \Flipdish\\Client\Models\MenuBase(); // \Flipdish\\Client\Models\MenuBase | Full menu data

try {
    $apiInstance->updateMenu($menu_id, $menu);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->updateMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu** | [**\Flipdish\\Client\Models\MenuBase**](../Model/MenuBase.md)| Full menu data |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMenuImage**
> \Flipdish\\Client\Models\RestApiStringResult uploadMenuImage($menu_id, $image)

Upload menu image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$image = "/path/to/file.txt"; // \SplFileObject | Menu image

try {
    $result = $apiInstance->uploadMenuImage($menu_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->uploadMenuImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **image** | **\SplFileObject**| Menu image |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadNewMenuForApp**
> int uploadNewMenuForApp($app_id, $menu)

Create a new menu from xlsx file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App identifier
$menu = "/path/to/file.txt"; // \SplFileObject | Uploaded xlsx menu

try {
    $result = $apiInstance->uploadNewMenuForApp($app_id, $menu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->uploadNewMenuForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App identifier |
 **menu** | **\SplFileObject**| Uploaded xlsx menu |

### Return type

**int**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


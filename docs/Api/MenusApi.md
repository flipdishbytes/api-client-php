# Flipdish\\Client\MenusApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDraftMenuFromExistingMenu**](MenusApi.md#createDraftMenuFromExistingMenu) | **POST** /api/v1.0/menus/{menuId}/clone/{newName} | 
[**createNewMenuAsync**](MenusApi.md#createNewMenuAsync) | **POST** /api/v1.0/{appId}/menus/async | 
[**createNewMenuForApp**](MenusApi.md#createNewMenuForApp) | **POST** /api/v1.0/{appId}/menus | 
[**deleteMenu**](MenusApi.md#deleteMenu) | **DELETE** /api/v1.0/menus/{menuId} | 
[**deleteMenuImage**](MenusApi.md#deleteMenuImage) | **DELETE** /api/v1.0/menus/{menuId}/image | 
[**deleteMenuItemMetadata**](MenusApi.md#deleteMenuItemMetadata) | **DELETE** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/{key}/store/{storeId} | 
[**deleteTaxRate**](MenusApi.md#deleteTaxRate) | **DELETE** /api/v1.0/menus/{menuId}/tax/{taxId} | 
[**getAllMenuMetadataByMenuIdAndStoreId**](MenusApi.md#getAllMenuMetadataByMenuIdAndStoreId) | **GET** /api/v1.0/menus/{menuId}/metadata/store/{storeId} | Get all menu metadata by menu ID and store ID
[**getMenuBulkShowHide**](MenusApi.md#getMenuBulkShowHide) | **GET** /api/v1.0/menus/{menuId}/bulkshowhide/list | 
[**getMenuById**](MenusApi.md#getMenuById) | **GET** /api/v1.0/menus/{menuId} | Get menu by identifier
[**getMenuItemMetadata**](MenusApi.md#getMenuItemMetadata) | **GET** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/store/{storeId} | Get menu item metadata
[**getMenuItemMetadataByKey**](MenusApi.md#getMenuItemMetadataByKey) | **GET** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/{key}/store/{storeId} | Get menu item metadata by key
[**getMenuItemOptionSetItemMetadata**](MenusApi.md#getMenuItemOptionSetItemMetadata) | **GET** /api/v1.0/menus/{menuId}/optionsetitem/{optionSetItemId}/metadata/store/{storeId} | Get menu item option set item metadata by key
[**getMenuName**](MenusApi.md#getMenuName) | **GET** /api/v1.0/menus/{menuId}/name | Get Menus Name
[**getMenuStoreNames**](MenusApi.md#getMenuStoreNames) | **GET** /api/v1.0/menus/{menuId}/stores | Get menus store names
[**getMenuTaxDetails**](MenusApi.md#getMenuTaxDetails) | **GET** /api/v1.0/menus/{menuId}/tax | Get menus tax details
[**getMenusByAppId**](MenusApi.md#getMenusByAppId) | **GET** /api/v1.0/{appId}/menus | Get menus by appId
[**getMenusCheckpoints**](MenusApi.md#getMenusCheckpoints) | **GET** /api/v1.0/menus/{menuId}/checkpoints | Get a Menus Checkpoints
[**restoreAMenuCheckpoint**](MenusApi.md#restoreAMenuCheckpoint) | **POST** /api/v1.0/menus/{menuId}/checkpoints/{checkpointId}/restore | 
[**setDisplayOnMenuTax**](MenusApi.md#setDisplayOnMenuTax) | **POST** /api/v1.0/menus/{menuId}/tax/show/{show} | 
[**setItemDisplayOrders**](MenusApi.md#setItemDisplayOrders) | **POST** /api/v1.0/menus/{menuId}/sectiondisplayorders | 
[**setMenuItemMetadata**](MenusApi.md#setMenuItemMetadata) | **PUT** /api/v1.0/menus/{menuId}/menuitem/{menuItemId}/metadata/store/{storeId} | 
[**setMenuItemOptionSetItemMetadata**](MenusApi.md#setMenuItemOptionSetItemMetadata) | **PUT** /api/v1.0/menus/{menuId}/optionsetitem/{optionSetItemId}/metadata/store/{storeId} | 
[**setMenuLock**](MenusApi.md#setMenuLock) | **POST** /api/v1.0/menus/{menuId}/lock | 
[**setMenuName**](MenusApi.md#setMenuName) | **POST** /api/v1.0/menus/{menuId}/name | 
[**showHideBulkItems**](MenusApi.md#showHideBulkItems) | **POST** /api/v1.0/menus/{menuId}/bulkshowhide | 
[**updateMenu**](MenusApi.md#updateMenu) | **POST** /api/v1.0/menus/{menuId} | 
[**updateTaxType**](MenusApi.md#updateTaxType) | **POST** /api/v1.0/menus/{menuId}/tax/type/{type} | 
[**uploadMenuImage**](MenusApi.md#uploadMenuImage) | **POST** /api/v1.0/menus/{menuId}/image | 
[**uploadNewMenuForApp**](MenusApi.md#uploadNewMenuForApp) | **POST** /api/v1.0/{appId}/menus/xlsx | 
[**upsertTaxRate**](MenusApi.md#upsertTaxRate) | **POST** /api/v1.0/menus/{menuId}/taxrate | 


# **createDraftMenuFromExistingMenu**
> \Flipdish\\Client\Models\RestApiResultMenu createDraftMenuFromExistingMenu($menu_id, $new_name)



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
$menu_id = 56; // int | 
$new_name = "new_name_example"; // string | 

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
 **menu_id** | **int**|  |
 **new_name** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenu**](../Model/RestApiResultMenu.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewMenuAsync**
> object createNewMenuAsync($app_id, $menu, $org_id)



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
$app_id = "app_id_example"; // string | 
$menu = new \Flipdish\\Client\Models\CreateFullMenu(); // \Flipdish\\Client\Models\CreateFullMenu | 
$org_id = "org_id_example"; // string | 

try {
    $result = $apiInstance->createNewMenuAsync($app_id, $menu, $org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->createNewMenuAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **menu** | [**\Flipdish\\Client\Models\CreateFullMenu**](../Model/CreateFullMenu.md)|  |
 **org_id** | **string**|  | [optional]

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
$app_id = "app_id_example"; // string | 
$menu = new \Flipdish\\Client\Models\CreateFullMenu(); // \Flipdish\\Client\Models\CreateFullMenu | 

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
 **app_id** | **string**|  |
 **menu** | [**\Flipdish\\Client\Models\CreateFullMenu**](../Model/CreateFullMenu.md)|  |

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
$menu_id = 56; // int | 

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
 **menu_id** | **int**|  |

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
$menu_id = 56; // int | 

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
 **menu_id** | **int**|  |

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
$menu_id = 56; // int | 
$store_id = 56; // int | 
$menu_item_id = 56; // int | 
$key = "key_example"; // string | 

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
 **menu_id** | **int**|  |
 **store_id** | **int**|  |
 **menu_item_id** | **int**|  |
 **key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxRate**
> deleteTaxRate($menu_id, $tax_id)



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
$menu_id = 56; // int | 
$tax_id = 56; // int | 

try {
    $apiInstance->deleteTaxRate($menu_id, $tax_id);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->deleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **tax_id** | **int**|  |

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

# **getMenuBulkShowHide**
> \Flipdish\\Client\Models\RestApiArrayResultMenuElementListResponse getMenuBulkShowHide($menu_id, $is_available)



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
$menu_id = 56; // int | 
$is_available = true; // bool | 

try {
    $result = $apiInstance->getMenuBulkShowHide($menu_id, $is_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->getMenuBulkShowHide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **is_available** | **bool**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuElementListResponse**](../Model/RestApiArrayResultMenuElementListResponse.md)

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

Get Menus Name

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

Get menus store names

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

Get menus tax details

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

Get menus by appId

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

Get a Menus Checkpoints

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

# **restoreAMenuCheckpoint**
> restoreAMenuCheckpoint($menu_id, $checkpoint_id)



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
$menu_id = 56; // int | 
$checkpoint_id = 56; // int | 

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
 **menu_id** | **int**|  |
 **checkpoint_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDisplayOnMenuTax**
> setDisplayOnMenuTax($menu_id, $show)



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
$menu_id = 56; // int | 
$show = true; // bool | 

try {
    $apiInstance->setDisplayOnMenuTax($menu_id, $show);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->setDisplayOnMenuTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **show** | **bool**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setItemDisplayOrders**
> setItemDisplayOrders($menu_id, $display_orders)



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
$menu_id = 56; // int | 
$display_orders = new \Flipdish\\Client\Models\MenuObjectDisplayOrders(); // \Flipdish\\Client\Models\MenuObjectDisplayOrders | 

try {
    $apiInstance->setItemDisplayOrders($menu_id, $display_orders);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->setItemDisplayOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **display_orders** | [**\Flipdish\\Client\Models\MenuObjectDisplayOrders**](../Model/MenuObjectDisplayOrders.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuItemMetadata**
> setMenuItemMetadata($menu_id, $store_id, $menu_item_id, $metadata)



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
$menu_id = 56; // int | 
$store_id = 56; // int | 
$menu_item_id = 56; // int | 
$metadata = new \Flipdish\\Client\Models\Metadata(); // \Flipdish\\Client\Models\Metadata | 

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
 **menu_id** | **int**|  |
 **store_id** | **int**|  |
 **menu_item_id** | **int**|  |
 **metadata** | [**\Flipdish\\Client\Models\Metadata**](../Model/Metadata.md)|  |

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
$menu_id = 56; // int | 
$store_id = 56; // int | 
$option_set_item_id = 56; // int | 
$metadata = new \Flipdish\\Client\Models\Metadata(); // \Flipdish\\Client\Models\Metadata | 

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
 **menu_id** | **int**|  |
 **store_id** | **int**|  |
 **option_set_item_id** | **int**|  |
 **metadata** | [**\Flipdish\\Client\Models\Metadata**](../Model/Metadata.md)|  |

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
$menu_id = 56; // int | 
$locked = true; // bool | 

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
 **menu_id** | **int**|  |
 **locked** | **bool**|  |

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
$menu_id = 56; // int | 
$name = "name_example"; // string | 

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
 **menu_id** | **int**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showHideBulkItems**
> \Flipdish\\Client\Models\RestApiArrayResultMenuElementEditResponse showHideBulkItems($menu_id, $menu_elements, $is_available)



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
$menu_id = 56; // int | 
$menu_elements = array(new \Flipdish\\Client\Models\MenuElementHide()); // \Flipdish\\Client\Models\MenuElementHide[] | 
$is_available = true; // bool | 

try {
    $result = $apiInstance->showHideBulkItems($menu_id, $menu_elements, $is_available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->showHideBulkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **menu_elements** | [**\Flipdish\\Client\Models\MenuElementHide[]**](../Model/MenuElementHide.md)|  |
 **is_available** | **bool**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuElementEditResponse**](../Model/RestApiArrayResultMenuElementEditResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenu**
> updateMenu($menu_id, $menu)



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
$menu_id = 56; // int | 
$menu = new \Flipdish\\Client\Models\MenuBase(); // \Flipdish\\Client\Models\MenuBase | 

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
 **menu_id** | **int**|  |
 **menu** | [**\Flipdish\\Client\Models\MenuBase**](../Model/MenuBase.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxType**
> updateTaxType($menu_id, $type)



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
$menu_id = 56; // int | 
$type = "type_example"; // string | 

try {
    $apiInstance->updateTaxType($menu_id, $type);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->updateTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMenuImage**
> \Flipdish\\Client\Models\RestApiStringResult uploadMenuImage($menu_id, $image)



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
$menu_id = 56; // int | 
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
 **menu_id** | **int**|  |
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
$app_id = "app_id_example"; // string | 
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
 **app_id** | **string**|  |
 **menu** | **\SplFileObject**| Uploaded xlsx menu |

### Return type

**int**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upsertTaxRate**
> \Flipdish\\Client\Models\MenuTaxRate upsertTaxRate($menu_id, $tax_rate)



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
$menu_id = 56; // int | 
$tax_rate = new \Flipdish\\Client\Models\MenuTaxRate(); // \Flipdish\\Client\Models\MenuTaxRate | 

try {
    $result = $apiInstance->upsertTaxRate($menu_id, $tax_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusApi->upsertTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**|  |
 **tax_rate** | [**\Flipdish\\Client\Models\MenuTaxRate**](../Model/MenuTaxRate.md)|  |

### Return type

[**\Flipdish\\Client\Models\MenuTaxRate**](../Model/MenuTaxRate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\MenusNutritionInfoApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrUpdateMenuItemNutritionInfo**](MenusNutritionInfoApi.md#addOrUpdateMenuItemNutritionInfo) | **POST** /api/v1.0/menus/{menuId}/menuItem/{publicId}/nutrition | Add or update menuitem nutrition info by menu item&#39;s publicId
[**addOrUpdateMenuItemOptionSetItemNutritionInfo**](MenusNutritionInfoApi.md#addOrUpdateMenuItemOptionSetItemNutritionInfo) | **POST** /api/v1.0/menus/{menuId}/menuItemOption/{publicId}/nutrition | Add or update menuitem optionsetitem nutrition info its publicId
[**addOrUpdateMenuNutritionInfoByMenuId**](MenusNutritionInfoApi.md#addOrUpdateMenuNutritionInfoByMenuId) | **POST** /api/v1.0/menus/{menuId}/nutrition | Add or update menu nutrition by identifier
[**deleteMenuNutritionInfoByMenuId**](MenusNutritionInfoApi.md#deleteMenuNutritionInfoByMenuId) | **DELETE** /api/v1.0/menus/{menuId}/nutrition | Delete menu nutrition information by menuId
[**getAllergens**](MenusNutritionInfoApi.md#getAllergens) | **GET** /api/v1.0/{appId}/menus/nutrition/allergens | Get allergens
[**getMenuNutritionInfoByMenuId**](MenusNutritionInfoApi.md#getMenuNutritionInfoByMenuId) | **GET** /api/v1.0/menus/{menuId}/nutrition | Get menu nutrition by menuId


# **addOrUpdateMenuItemNutritionInfo**
> \Flipdish\\Client\Models\RestApiResultMenuNutritionInfoHeader addOrUpdateMenuItemNutritionInfo($menu_id, $public_id, $add_or_update_model)

Add or update menuitem nutrition info by menu item's publicId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$public_id = "public_id_example"; // string | Menu item's publicId
$add_or_update_model = new \Flipdish\\Client\Models\ItemNutritionInfoAddUpdateModel(); // \Flipdish\\Client\Models\ItemNutritionInfoAddUpdateModel | 

try {
    $result = $apiInstance->addOrUpdateMenuItemNutritionInfo($menu_id, $public_id, $add_or_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoApi->addOrUpdateMenuItemNutritionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **public_id** | **string**| Menu item&#39;s publicId |
 **add_or_update_model** | [**\Flipdish\\Client\Models\ItemNutritionInfoAddUpdateModel**](../Model/ItemNutritionInfoAddUpdateModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuNutritionInfoHeader**](../Model/RestApiResultMenuNutritionInfoHeader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrUpdateMenuItemOptionSetItemNutritionInfo**
> \Flipdish\\Client\Models\RestApiResultMenuNutritionInfoHeader addOrUpdateMenuItemOptionSetItemNutritionInfo($menu_id, $public_id, $add_or_update_model)

Add or update menuitem optionsetitem nutrition info its publicId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$public_id = "public_id_example"; // string | Menu item's publicId
$add_or_update_model = new \Flipdish\\Client\Models\ItemNutritionInfoAddUpdateModel(); // \Flipdish\\Client\Models\ItemNutritionInfoAddUpdateModel | 

try {
    $result = $apiInstance->addOrUpdateMenuItemOptionSetItemNutritionInfo($menu_id, $public_id, $add_or_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoApi->addOrUpdateMenuItemOptionSetItemNutritionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **public_id** | [**string**](../Model/.md)| Menu item&#39;s publicId |
 **add_or_update_model** | [**\Flipdish\\Client\Models\ItemNutritionInfoAddUpdateModel**](../Model/ItemNutritionInfoAddUpdateModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuNutritionInfoHeader**](../Model/RestApiResultMenuNutritionInfoHeader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrUpdateMenuNutritionInfoByMenuId**
> \Flipdish\\Client\Models\RestApiResultMenuNutritionInfoHeader addOrUpdateMenuNutritionInfoByMenuId($menu_id)

Add or update menu nutrition by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->addOrUpdateMenuNutritionInfoByMenuId($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoApi->addOrUpdateMenuNutritionInfoByMenuId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuNutritionInfoHeader**](../Model/RestApiResultMenuNutritionInfoHeader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuNutritionInfoByMenuId**
> object deleteMenuNutritionInfoByMenuId($menu_id)

Delete menu nutrition information by menuId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->deleteMenuNutritionInfoByMenuId($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoApi->deleteMenuNutritionInfoByMenuId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllergens**
> \Flipdish\\Client\Models\RestApiArrayResultAllergen getAllergens($app_id, $language_id)

Get allergens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$language_id = "language_id_example"; // string | 

try {
    $result = $apiInstance->getAllergens($app_id, $language_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoApi->getAllergens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **language_id** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultAllergen**](../Model/RestApiArrayResultAllergen.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuNutritionInfoByMenuId**
> \Flipdish\\Client\Models\RestApiResultNutritionInfo getMenuNutritionInfoByMenuId($menu_id)

Get menu nutrition by menuId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenuNutritionInfoByMenuId($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoApi->getMenuNutritionInfoByMenuId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultNutritionInfo**](../Model/RestApiResultNutritionInfo.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


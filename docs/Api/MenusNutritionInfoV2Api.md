# Flipdish\\Client\MenusNutritionInfoV2Api

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrUpdateMenuItemNutritionInfoV2**](MenusNutritionInfoV2Api.md#addOrUpdateMenuItemNutritionInfoV2) | **POST** /api/v1.0/{appId}/menus/{menuId}/menuItem/{publicId}/nutritionv2 | Add or update menuitem nutrition info by menu item&#39;s publicId
[**addOrUpdateMenuItemOptionSetItemNutritionInfoV2**](MenusNutritionInfoV2Api.md#addOrUpdateMenuItemOptionSetItemNutritionInfoV2) | **POST** /api/v1.0/{appId}/menus/{menuId}/menuItemOption/{publicId}/nutritionv2 | Add or update menuitem option set item&#39;s nutrition info by its publicId
[**getAllergensV2**](MenusNutritionInfoV2Api.md#getAllergensV2) | **GET** /api/v1.0/{appId}/menus/nutritionv2/allergens | Get allergens
[**getMenuNutritionInfoV2ByMenuId**](MenusNutritionInfoV2Api.md#getMenuNutritionInfoV2ByMenuId) | **GET** /api/v1.0/{appId}/menus/{menuId}/nutritionv2 | Get menu nutrition by menuId


# **addOrUpdateMenuItemNutritionInfoV2**
> object addOrUpdateMenuItemNutritionInfoV2($menu_id, $public_id, $add_or_update_model, $app_id)

Add or update menuitem nutrition info by menu item's publicId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$public_id = "public_id_example"; // string | Menu item's publicId
$add_or_update_model = new \Flipdish\\Client\Models\ItemNutritionInfoV2AddUpdateModel(); // \Flipdish\\Client\Models\ItemNutritionInfoV2AddUpdateModel | Allergen ids
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->addOrUpdateMenuItemNutritionInfoV2($menu_id, $public_id, $add_or_update_model, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoV2Api->addOrUpdateMenuItemNutritionInfoV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **public_id** | **string**| Menu item&#39;s publicId |
 **add_or_update_model** | [**\Flipdish\\Client\Models\ItemNutritionInfoV2AddUpdateModel**](../Model/ItemNutritionInfoV2AddUpdateModel.md)| Allergen ids |
 **app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrUpdateMenuItemOptionSetItemNutritionInfoV2**
> object addOrUpdateMenuItemOptionSetItemNutritionInfoV2($menu_id, $public_id, $add_or_update_model, $app_id)

Add or update menuitem option set item's nutrition info by its publicId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$public_id = "public_id_example"; // string | Menu item option set item's publicId
$add_or_update_model = new \Flipdish\\Client\Models\ItemNutritionInfoV2AddUpdateModel(); // \Flipdish\\Client\Models\ItemNutritionInfoV2AddUpdateModel | Allergen ids
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->addOrUpdateMenuItemOptionSetItemNutritionInfoV2($menu_id, $public_id, $add_or_update_model, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoV2Api->addOrUpdateMenuItemOptionSetItemNutritionInfoV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **public_id** | **string**| Menu item option set item&#39;s publicId |
 **add_or_update_model** | [**\Flipdish\\Client\Models\ItemNutritionInfoV2AddUpdateModel**](../Model/ItemNutritionInfoV2AddUpdateModel.md)| Allergen ids |
 **app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllergensV2**
> \Flipdish\\Client\Models\RestApiArrayResultAllergen getAllergensV2($app_id, $language_id)

Get allergens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$language_id = "language_id_example"; // string | 

try {
    $result = $apiInstance->getAllergensV2($app_id, $language_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoV2Api->getAllergensV2: ', $e->getMessage(), PHP_EOL;
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

# **getMenuNutritionInfoV2ByMenuId**
> \Flipdish\\Client\Models\RestApiResultNutritionInfoV2 getMenuNutritionInfoV2ByMenuId($app_id, $menu_id, $language_id)

Get menu nutrition by menuId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenusNutritionInfoV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$menu_id = 56; // int | Menu identifier
$language_id = "language_id_example"; // string | 

try {
    $result = $apiInstance->getMenuNutritionInfoV2ByMenuId($app_id, $menu_id, $language_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenusNutritionInfoV2Api->getMenuNutritionInfoV2ByMenuId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **menu_id** | **int**| Menu identifier |
 **language_id** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultNutritionInfoV2**](../Model/RestApiResultNutritionInfoV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


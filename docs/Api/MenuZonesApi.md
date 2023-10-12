# Flipdish\\Client\MenuZonesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMenuZone**](MenuZonesApi.md#addMenuZone) | **POST** /api/v1.0/menus/{menuId}/zones | Adds a new menu zone to a menu.
[**deleteMenuZone**](MenuZonesApi.md#deleteMenuZone) | **DELETE** /api/v1.0/menus/{menuId}/zones/{menuZoneId} | Deletes a menu zone.
[**deleteMenuZoneImage**](MenuZonesApi.md#deleteMenuZoneImage) | **DELETE** /api/v1.0/menus/{menuId}/zones/{menuZoneId}/image | Deletes a menu zone image.
[**flipMenuZones**](MenuZonesApi.md#flipMenuZones) | **PUT** /api/v1.0/menus/{menuId}/zones/{menuZoneId}/flip/{menuZoneI2} | Flips the order of two menu zones.
[**getMenuZone**](MenuZonesApi.md#getMenuZone) | **GET** /api/v1.0/menus/{menuId}/zones/{menuZoneId} | Gets a specific menu zone for a given zone id
[**getMenuZonesForMenuId**](MenuZonesApi.md#getMenuZonesForMenuId) | **GET** /api/v1.0/menus/{menuId}/zones | Gets all the menu zones for a menu
[**setMenuSectionMenuZone**](MenuZonesApi.md#setMenuSectionMenuZone) | **PUT** /api/v1.0/menus/{menuId}/zones/{menuZoneId}/section/{menuSectionId} | Sets a zone to a menu section.
[**setMenuZoneDescription**](MenuZonesApi.md#setMenuZoneDescription) | **PUT** /api/v1.0/menus/{menuId}/zones/{menuZoneId}/description | Sets the description of a menu zone.
[**setMenuZoneName**](MenuZonesApi.md#setMenuZoneName) | **PUT** /api/v1.0/menus/{menuId}/zones/{menuZoneId}/name/{menuZoneName} | Sets the name of a menu zone.
[**updateMenuZone**](MenuZonesApi.md#updateMenuZone) | **PUT** /api/v1.0/menus/{menuId}/zones/{menuZoneId} | Updates a menu zone.
[**uploadMenuZoneImage**](MenuZonesApi.md#uploadMenuZoneImage) | **POST** /api/v1.0/menus/{menuId}/zones/{menuZoneId}/image | Uploads an image for a menu zone.


# **addMenuZone**
> \Flipdish\\Client\Models\RestApiResultMenuZone addMenuZone($menu_id, $menu_zone)

Adds a new menu zone to a menu.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | The menu id.
$menu_zone = new \Flipdish\\Client\Models\MenuZone(); // \Flipdish\\Client\Models\MenuZone | The object containing the new zone. This is optional and not supplying it will generate an empty default zone.

try {
    $result = $apiInstance->addMenuZone($menu_id, $menu_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->addMenuZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| The menu id. |
 **menu_zone** | [**\Flipdish\\Client\Models\MenuZone**](../Model/MenuZone.md)| The object containing the new zone. This is optional and not supplying it will generate an empty default zone. |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuZone**](../Model/RestApiResultMenuZone.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuZone**
> deleteMenuZone($menu_zone_id, $menu_id)

Deletes a menu zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | The menu zone id.
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->deleteMenuZone($menu_zone_id, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->deleteMenuZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| The menu zone id. |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuZoneImage**
> deleteMenuZoneImage($menu_zone_id, $menu_id)

Deletes a menu zone image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | The zone Id/
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->deleteMenuZoneImage($menu_zone_id, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->deleteMenuZoneImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| The zone Id/ |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flipMenuZones**
> flipMenuZones($menu_zone_id, $menu_zone_i2, $menu_id)

Flips the order of two menu zones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | Source.
$menu_zone_i2 = 56; // int | Destination.
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->flipMenuZones($menu_zone_id, $menu_zone_i2, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->flipMenuZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| Source. |
 **menu_zone_i2** | **int**| Destination. |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuZone**
> \Flipdish\\Client\Models\RestApiResultMenuZone getMenuZone($menu_id, $menu_zone_id)

Gets a specific menu zone for a given zone id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | The menu id.
$menu_zone_id = 56; // int | The menu zone id.

try {
    $result = $apiInstance->getMenuZone($menu_id, $menu_zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->getMenuZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| The menu id. |
 **menu_zone_id** | **int**| The menu zone id. |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuZone**](../Model/RestApiResultMenuZone.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuZonesForMenuId**
> \Flipdish\\Client\Models\RestApiArrayResultMenuZone getMenuZonesForMenuId($menu_id)

Gets all the menu zones for a menu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | The menu id to load zones for

try {
    $result = $apiInstance->getMenuZonesForMenuId($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->getMenuZonesForMenuId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| The menu id to load zones for |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuZone**](../Model/RestApiArrayResultMenuZone.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuSectionMenuZone**
> setMenuSectionMenuZone($menu_zone_id, $menu_section_id, $menu_id)

Sets a zone to a menu section.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | The menu id.
$menu_section_id = 56; // int | The menu section id.
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->setMenuSectionMenuZone($menu_zone_id, $menu_section_id, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->setMenuSectionMenuZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| The menu id. |
 **menu_section_id** | **int**| The menu section id. |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuZoneDescription**
> setMenuZoneDescription($menu_zone_id, $description, $menu_id)

Sets the description of a menu zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | The zone id.
$description = "description_example"; // string | The new description. Add as a raw string in the request, without any JSON wrapper.
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->setMenuZoneDescription($menu_zone_id, $description, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->setMenuZoneDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| The zone id. |
 **description** | **string**| The new description. Add as a raw string in the request, without any JSON wrapper. |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuZoneName**
> setMenuZoneName($menu_zone_id, $menu_zone_name, $menu_id)

Sets the name of a menu zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | The menu zone id.
$menu_zone_name = "menu_zone_name_example"; // string | The new name.
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->setMenuZoneName($menu_zone_id, $menu_zone_name, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->setMenuZoneName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| The menu zone id. |
 **menu_zone_name** | **string**| The new name. |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenuZone**
> updateMenuZone($menu_id, $menu_zone_id, $menu_zone)

Updates a menu zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | The menu id.
$menu_zone_id = 56; // int | The menu zone id.
$menu_zone = new \Flipdish\\Client\Models\MenuZone(); // \Flipdish\\Client\Models\MenuZone | The object containing the updated values.

try {
    $apiInstance->updateMenuZone($menu_id, $menu_zone_id, $menu_zone);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->updateMenuZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| The menu id. |
 **menu_zone_id** | **int**| The menu zone id. |
 **menu_zone** | [**\Flipdish\\Client\Models\MenuZone**](../Model/MenuZone.md)| The object containing the updated values. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMenuZoneImage**
> uploadMenuZoneImage($menu_zone_id, $file, $menu_id)

Uploads an image for a menu zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_zone_id = 56; // int | The zone id.
$file = array(new \Flipdish\\Client\Models\HttpPostedFileBase()); // \Flipdish\\Client\Models\HttpPostedFileBase[] | The file to upload.
$menu_id = "menu_id_example"; // string | 

try {
    $apiInstance->uploadMenuZoneImage($menu_zone_id, $file, $menu_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuZonesApi->uploadMenuZoneImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_zone_id** | **int**| The zone id. |
 **file** | [**\Flipdish\\Client\Models\HttpPostedFileBase[]**](../Model/HttpPostedFileBase.md)| The file to upload. |
 **menu_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


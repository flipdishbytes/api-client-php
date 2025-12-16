# Flipdish\\Client\MenuSectionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneMenuSection**](MenuSectionsApi.md#cloneMenuSection) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/clone | Clone menu section
[**createMenuAvailabilityForDay**](MenuSectionsApi.md#createMenuAvailabilityForDay) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/availability/times/{dayOfWeek} | Set/update menu section availability hours.
[**createMenuSection**](MenuSectionsApi.md#createMenuSection) | **POST** /api/v1.0/menus/{menuId}/sections | Create menu section
[**createMenuSectionAvailability**](MenuSectionsApi.md#createMenuSectionAvailability) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/availability | Create menu availability type
[**deleteMenuSection**](MenuSectionsApi.md#deleteMenuSection) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId} | Delete menu section
[**deleteMenuSectionImage**](MenuSectionsApi.md#deleteMenuSectionImage) | **DELETE** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/image | Delete menu section image
[**getMenuSectionById**](MenuSectionsApi.md#getMenuSectionById) | **GET** /api/v1.0/menus/{menuId}/sections/{menuSectionId} | Get menu section by identifier
[**getMenuSections**](MenuSectionsApi.md#getMenuSections) | **GET** /api/v1.0/menus/{menuId}/sections | Get menu sections
[**menuSectionsSetItemDisplayOrders**](MenuSectionsApi.md#menuSectionsSetItemDisplayOrders) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/sectionitemdisplayorders | Re-arrange Items within a Section
[**updateMenuSection**](MenuSectionsApi.md#updateMenuSection) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId} | Update menu section
[**uploadMenuSectionImage**](MenuSectionsApi.md#uploadMenuSectionImage) | **POST** /api/v1.0/menus/{menuId}/sections/{menuSectionId}/image | Upload menu section image


# **cloneMenuSection**
> \Flipdish\\Client\Models\RestApiResultMenuSection cloneMenuSection($menu_id, $menu_section_id)

Clone menu section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier

try {
    $result = $apiInstance->cloneMenuSection($menu_id, $menu_section_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->cloneMenuSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuSection**](../Model/RestApiResultMenuSection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMenuAvailabilityForDay**
> object createMenuAvailabilityForDay($menu_id, $menu_section_id, $day_of_week, $business_hours_period)

Set/update menu section availability hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$day_of_week = "day_of_week_example"; // string | Day of the  week
$business_hours_period = new \Flipdish\\Client\Models\BusinessHoursPeriodBase(); // \Flipdish\\Client\Models\BusinessHoursPeriodBase | Menu section active hours, note: DayOfWeek property will be overriden by the path parameter.

try {
    $result = $apiInstance->createMenuAvailabilityForDay($menu_id, $menu_section_id, $day_of_week, $business_hours_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->createMenuAvailabilityForDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **day_of_week** | **string**| Day of the  week |
 **business_hours_period** | [**\Flipdish\\Client\Models\BusinessHoursPeriodBase**](../Model/BusinessHoursPeriodBase.md)| Menu section active hours, note: DayOfWeek property will be overriden by the path parameter. |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMenuSection**
> object createMenuSection($menu_id, $menu_section)

Create menu section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section = new \Flipdish\\Client\Models\MenuSectionBase(); // \Flipdish\\Client\Models\MenuSectionBase | Menu section

try {
    $result = $apiInstance->createMenuSection($menu_id, $menu_section);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->createMenuSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section** | [**\Flipdish\\Client\Models\MenuSectionBase**](../Model/MenuSectionBase.md)| Menu section |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMenuSectionAvailability**
> object createMenuSectionAvailability($menu_id, $menu_section_id, $menu_section_availability)

Create menu availability type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section_availability = new \Flipdish\\Client\Models\MenuSectionAvailabilityBase(); // \Flipdish\\Client\Models\MenuSectionAvailabilityBase | DisplayAlways, DisplayBasedOnTimes, DisplayAlwaysStartCollapsed, DisplayAlwaysStartCollapsedBasedOnTimes

try {
    $result = $apiInstance->createMenuSectionAvailability($menu_id, $menu_section_id, $menu_section_availability);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->createMenuSectionAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section_availability** | [**\Flipdish\\Client\Models\MenuSectionAvailabilityBase**](../Model/MenuSectionAvailabilityBase.md)| DisplayAlways, DisplayBasedOnTimes, DisplayAlwaysStartCollapsed, DisplayAlwaysStartCollapsedBasedOnTimes |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuSection**
> deleteMenuSection($menu_id, $menu_section_id)

Delete menu section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier

try {
    $apiInstance->deleteMenuSection($menu_id, $menu_section_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->deleteMenuSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMenuSectionImage**
> deleteMenuSectionImage($menu_id, $menu_section_id)

Delete menu section image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier

try {
    $apiInstance->deleteMenuSectionImage($menu_id, $menu_section_id);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->deleteMenuSectionImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuSectionById**
> \Flipdish\\Client\Models\RestApiResultMenuSection getMenuSectionById($menu_id, $menu_section_id)

Get menu section by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier

try {
    $result = $apiInstance->getMenuSectionById($menu_id, $menu_section_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->getMenuSectionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMenuSection**](../Model/RestApiResultMenuSection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMenuSections**
> \Flipdish\\Client\Models\RestApiArrayResultMenuSection getMenuSections($menu_id)

Get menu sections

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier

try {
    $result = $apiInstance->getMenuSections($menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->getMenuSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultMenuSection**](../Model/RestApiArrayResultMenuSection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menuSectionsSetItemDisplayOrders**
> menuSectionsSetItemDisplayOrders($menu_id, $menu_section_id, $display_orders)

Re-arrange Items within a Section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$display_orders = new \Flipdish\\Client\Models\MenuObjectDisplayOrders(); // \Flipdish\\Client\Models\MenuObjectDisplayOrders | Item Ids and their new display order

try {
    $apiInstance->menuSectionsSetItemDisplayOrders($menu_id, $menu_section_id, $display_orders);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->menuSectionsSetItemDisplayOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **display_orders** | [**\Flipdish\\Client\Models\MenuObjectDisplayOrders**](../Model/MenuObjectDisplayOrders.md)| Item Ids and their new display order |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMenuSection**
> updateMenuSection($menu_id, $menu_section_id, $menu_section, $undo_after)

Update menu section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$menu_section = new \Flipdish\\Client\Models\MenuSectionBase(); // \Flipdish\\Client\Models\MenuSectionBase | Menu section changes (delta)
$undo_after = 1.2; // double | An optional time period, in hours, after which the hide-section operation will be undone.

try {
    $apiInstance->updateMenuSection($menu_id, $menu_section_id, $menu_section, $undo_after);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->updateMenuSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **menu_section** | [**\Flipdish\\Client\Models\MenuSectionBase**](../Model/MenuSectionBase.md)| Menu section changes (delta) |
 **undo_after** | **double**| An optional time period, in hours, after which the hide-section operation will be undone. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMenuSectionImage**
> \Flipdish\\Client\Models\RestApiStringResult uploadMenuSectionImage($menu_id, $menu_section_id, $image)

Upload menu section image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MenuSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Menu identifier
$menu_section_id = 56; // int | Menu section identifier
$image = "/path/to/file.txt"; // \SplFileObject | Menu section image

try {
    $result = $apiInstance->uploadMenuSectionImage($menu_id, $menu_section_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MenuSectionsApi->uploadMenuSectionImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Menu identifier |
 **menu_section_id** | **int**| Menu section identifier |
 **image** | **\SplFileObject**| Menu section image |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\LocationAreasApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLocationArea**](LocationAreasApi.md#createLocationArea) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas | Create a Location Area, i.e: Room, Floor, Parking lot
[**getLocationArea**](LocationAreasApi.md#getLocationArea) | **GET** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId} | Retrieve a Location Area
[**getLocationsForStore**](LocationAreasApi.md#getLocationsForStore) | **GET** /api/v1.0/{appId}/stores/{storeId}/location-areas | Retrieve all Location Areas for a Store
[**updateLocationArea**](LocationAreasApi.md#updateLocationArea) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/update | Update a Location Area, i.e: Room, Floor, Car park space


# **createLocationArea**
> object createLocationArea($location_area_input, $app_id, $store_id)

Create a Location Area, i.e: Room, Floor, Parking lot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_area_input = new \Flipdish\\Client\Models\CreateLocationArea(); // \Flipdish\\Client\Models\CreateLocationArea | Input data for creating the Location Area
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store

try {
    $result = $apiInstance->createLocationArea($location_area_input, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAreasApi->createLocationArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_area_input** | [**\Flipdish\\Client\Models\CreateLocationArea**](../Model/CreateLocationArea.md)| Input data for creating the Location Area |
 **app_id** | **string**| AppId i.e: (fd1234) |
 **store_id** | **int**| Id of the Store |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationArea**
> \Flipdish\\Client\Models\RestApiResultLocationAreaWithLocations getLocationArea($location_area_id, $app_id, $store_id)

Retrieve a Location Area

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_area_id = 56; // int | Id of the Location Area
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store

try {
    $result = $apiInstance->getLocationArea($location_area_id, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAreasApi->getLocationArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_area_id** | **int**| Id of the Location Area |
 **app_id** | **string**| AppId i.e: (fd1234) |
 **store_id** | **int**| Id of the Store |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLocationAreaWithLocations**](../Model/RestApiResultLocationAreaWithLocations.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationsForStore**
> \Flipdish\\Client\Models\RestApiArrayResultLocationAreaWithLocations getLocationsForStore($app_id, $store_id)

Retrieve all Location Areas for a Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store

try {
    $result = $apiInstance->getLocationsForStore($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAreasApi->getLocationsForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| AppId i.e: (fd1234) |
 **store_id** | **int**| Id of the Store |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultLocationAreaWithLocations**](../Model/RestApiArrayResultLocationAreaWithLocations.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocationArea**
> \Flipdish\\Client\Models\LocationArea updateLocationArea($location_area_input, $app_id, $store_id, $location_area_id)

Update a Location Area, i.e: Room, Floor, Car park space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationAreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_area_input = new \Flipdish\\Client\Models\UpdateLocationArea(); // \Flipdish\\Client\Models\UpdateLocationArea | Input data for updating the Location Area
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store
$location_area_id = "location_area_id_example"; // string | 

try {
    $result = $apiInstance->updateLocationArea($location_area_input, $app_id, $store_id, $location_area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAreasApi->updateLocationArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_area_input** | [**\Flipdish\\Client\Models\UpdateLocationArea**](../Model/UpdateLocationArea.md)| Input data for updating the Location Area |
 **app_id** | **string**| AppId i.e: (fd1234) |
 **store_id** | **int**| Id of the Store |
 **location_area_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\LocationArea**](../Model/LocationArea.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


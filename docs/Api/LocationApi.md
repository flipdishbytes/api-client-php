# Flipdish\\Client\LocationApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLocation**](LocationApi.md#createLocation) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location | Create a Location i.e: Table, Hotel Room, Car park space
[**moveLocation**](LocationApi.md#moveLocation) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location/{locationId}/move | Move a Location to a different location Area
[**updateLocation**](LocationApi.md#updateLocation) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location/{locationId}/update | Update a Location i.e: Table, Hotel Room, Car park space


# **createLocation**
> object createLocation($create_location_input, $location_area_id, $app_id, $store_id)

Create a Location i.e: Table, Hotel Room, Car park space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_location_input = new \Flipdish\\Client\Models\CreateLocation(); // \Flipdish\\Client\Models\CreateLocation | Input data for creating the Location
$location_area_id = 56; // int | Id of the Location area where the Location belongs
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store

try {
    $result = $apiInstance->createLocation($create_location_input, $location_area_id, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->createLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_location_input** | [**\Flipdish\\Client\Models\CreateLocation**](../Model/CreateLocation.md)| Input data for creating the Location |
 **location_area_id** | **int**| Id of the Location area where the Location belongs |
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

# **moveLocation**
> object moveLocation($location_id, $location_area_id, $new_location_area_id, $app_id, $store_id)

Move a Location to a different location Area

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | Id of the Location that will be moved
$location_area_id = 56; // int | Id of the new Location area that it should be moved to
$new_location_area_id = 56; // int | Id of the new Location area that it should be moved to
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store

try {
    $result = $apiInstance->moveLocation($location_id, $location_area_id, $new_location_area_id, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->moveLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the Location that will be moved |
 **location_area_id** | **int**| Id of the new Location area that it should be moved to |
 **new_location_area_id** | **int**| Id of the new Location area that it should be moved to |
 **app_id** | **string**| AppId i.e: (fd1234) |
 **store_id** | **int**| Id of the Store |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocation**
> \Flipdish\\Client\Models\RestApiResultLocationAreaLocation updateLocation($update_location_input, $location_area_id, $location_id, $app_id, $store_id)

Update a Location i.e: Table, Hotel Room, Car park space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_location_input = new \Flipdish\\Client\Models\CreateLocation(); // \Flipdish\\Client\Models\CreateLocation | Input data for updating the Location
$location_area_id = 56; // int | Id of the Location area where the Location belongs
$location_id = 56; // int | Id of the Location to be updated
$app_id = "app_id_example"; // string | AppId i.e: (fd1234)
$store_id = 56; // int | Id of the Store

try {
    $result = $apiInstance->updateLocation($update_location_input, $location_area_id, $location_id, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->updateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_location_input** | [**\Flipdish\\Client\Models\CreateLocation**](../Model/CreateLocation.md)| Input data for updating the Location |
 **location_area_id** | **int**| Id of the Location area where the Location belongs |
 **location_id** | **int**| Id of the Location to be updated |
 **app_id** | **string**| AppId i.e: (fd1234) |
 **store_id** | **int**| Id of the Store |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLocationAreaLocation**](../Model/RestApiResultLocationAreaLocation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


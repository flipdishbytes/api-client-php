# Flipdish\\Client\LocationApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLocation**](LocationApi.md#createLocation) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location | 
[**deleteLocation**](LocationApi.md#deleteLocation) | **DELETE** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location/{locationId}/delete | 
[**mapLocationToExternalId**](LocationApi.md#mapLocationToExternalId) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location/{locationId}/map-external | 
[**moveLocation**](LocationApi.md#moveLocation) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location/{locationId}/move | 
[**updateLocation**](LocationApi.md#updateLocation) | **POST** /api/v1.0/{appId}/stores/{storeId}/location-areas/{locationAreaId}/location/{locationId}/update | 


# **createLocation**
> object createLocation($create_location_input, $location_area_id, $app_id, $store_id)



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
$create_location_input = array(new \Flipdish\\Client\Models\CreateLocation()); // \Flipdish\\Client\Models\CreateLocation[] | 
$location_area_id = 56; // int | 
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

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
 **create_location_input** | [**\Flipdish\\Client\Models\CreateLocation[]**](../Model/CreateLocation.md)|  |
 **location_area_id** | **int**|  |
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocation**
> object deleteLocation($location_id, $location_area_id, $app_id, $store_id)



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
$location_id = 56; // int | 
$location_area_id = 56; // int | 
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->deleteLocation($location_id, $location_area_id, $app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->deleteLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  |
 **location_area_id** | **int**|  |
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mapLocationToExternalId**
> \Flipdish\\Client\Models\RestApiResultMappedLocation mapLocationToExternalId($location_id, $location_area_id, $app_id, $store_id, $external_location_id)



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
$location_id = 56; // int | 
$location_area_id = 56; // int | 
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$external_location_id = "external_location_id_example"; // string | 

try {
    $result = $apiInstance->mapLocationToExternalId($location_id, $location_area_id, $app_id, $store_id, $external_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->mapLocationToExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  |
 **location_area_id** | **int**|  |
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **external_location_id** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultMappedLocation**](../Model/RestApiResultMappedLocation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveLocation**
> object moveLocation($location_id, $location_area_id, $new_location_area_id, $app_id, $store_id)



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
$location_id = 56; // int | 
$location_area_id = 56; // int | 
$new_location_area_id = 56; // int | 
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

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
 **location_id** | **int**|  |
 **location_area_id** | **int**|  |
 **new_location_area_id** | **int**|  |
 **app_id** | **string**|  |
 **store_id** | **int**|  |

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
$update_location_input = new \Flipdish\\Client\Models\CreateLocation(); // \Flipdish\\Client\Models\CreateLocation | 
$location_area_id = 56; // int | 
$location_id = 56; // int | 
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

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
 **update_location_input** | [**\Flipdish\\Client\Models\CreateLocation**](../Model/CreateLocation.md)|  |
 **location_area_id** | **int**|  |
 **location_id** | **int**|  |
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLocationAreaLocation**](../Model/RestApiResultLocationAreaLocation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


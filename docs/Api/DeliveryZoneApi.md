# Flipdish\\Client\DeliveryZoneApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDeliveryZone**](DeliveryZoneApi.md#addDeliveryZone) | **POST** /api/v1.0/stores/{storeId}/deliveryzones | 
[**getDeliveryZones**](DeliveryZoneApi.md#getDeliveryZones) | **GET** /api/v1.0/stores/{storeId}/deliveryzones | 
[**removeDeliveryZone**](DeliveryZoneApi.md#removeDeliveryZone) | **DELETE** /api/v1.0/stores/{storeId}/deliveryzones/{deliveryZoneId} | 
[**updateDeliveryZone**](DeliveryZoneApi.md#updateDeliveryZone) | **POST** /api/v1.0/stores/{storeId}/deliveryzones/{deliveryZoneId} | 


# **addDeliveryZone**
> \Flipdish\\Client\Models\RestApiResultDeliveryZone addDeliveryZone($store_id, $delivery_zone_base)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$delivery_zone_base = new \Flipdish\\Client\Models\DeliveryZoneBase(); // \Flipdish\\Client\Models\DeliveryZoneBase | 

try {
    $result = $apiInstance->addDeliveryZone($store_id, $delivery_zone_base);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryZoneApi->addDeliveryZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **delivery_zone_base** | [**\Flipdish\\Client\Models\DeliveryZoneBase**](../Model/DeliveryZoneBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultDeliveryZone**](../Model/RestApiResultDeliveryZone.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryZones**
> \Flipdish\\Client\Models\RestApiArrayResultDeliveryZone getDeliveryZones($store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 

try {
    $result = $apiInstance->getDeliveryZones($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryZoneApi->getDeliveryZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultDeliveryZone**](../Model/RestApiArrayResultDeliveryZone.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDeliveryZone**
> removeDeliveryZone($store_id, $delivery_zone_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$delivery_zone_id = 56; // int | 

try {
    $apiInstance->removeDeliveryZone($store_id, $delivery_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryZoneApi->removeDeliveryZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **delivery_zone_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeliveryZone**
> \Flipdish\\Client\Models\RestApiResultDeliveryZone updateDeliveryZone($store_id, $delivery_zone_id, $delivery_zone)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\DeliveryZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$delivery_zone_id = 56; // int | 
$delivery_zone = new \Flipdish\\Client\Models\DeliveryZoneBase(); // \Flipdish\\Client\Models\DeliveryZoneBase | 

try {
    $result = $apiInstance->updateDeliveryZone($store_id, $delivery_zone_id, $delivery_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryZoneApi->updateDeliveryZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **delivery_zone_id** | **int**|  |
 **delivery_zone** | [**\Flipdish\\Client\Models\DeliveryZoneBase**](../Model/DeliveryZoneBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultDeliveryZone**](../Model/RestApiResultDeliveryZone.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


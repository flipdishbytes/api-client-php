# Flipdish\Client\StoreOrderCapacityApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStoreOrderCapacity**](StoreOrderCapacityApi.md#getStoreOrderCapacity) | **GET** /api/v1.0/{appId}/storeordercapacity/{storeId}/{deliveryType} | Get store&#39;s order capacity configuration
[**updateStoreOrderCapacityConfig**](StoreOrderCapacityApi.md#updateStoreOrderCapacityConfig) | **POST** /api/v1.0/{appId}/storeordercapacity/{storeId} | Create or update a store&#39;s order capacity configuration


# **getStoreOrderCapacity**
> \Flipdish\Client\Models\RestApiResultStoreOrderCapacityConfig getStoreOrderCapacity($app_id, $store_id, $delivery_type)

Get store's order capacity configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreOrderCapacityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$store_id = 56; // int | Store Id
$delivery_type = "delivery_type_example"; // string | Delivery / Pickup

try {
    $result = $apiInstance->getStoreOrderCapacity($app_id, $store_id, $delivery_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreOrderCapacityApi->getStoreOrderCapacity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **store_id** | **int**| Store Id |
 **delivery_type** | **string**| Delivery / Pickup |

### Return type

[**\Flipdish\Client\Models\RestApiResultStoreOrderCapacityConfig**](../Model/RestApiResultStoreOrderCapacityConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreOrderCapacityConfig**
> updateStoreOrderCapacityConfig($store_id, $delivery_type, $new_order_capacity_config, $app_id)

Create or update a store's order capacity configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreOrderCapacityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | Delivery / Pickup
$new_order_capacity_config = new \Flipdish\Client\Models\StoreOrderCapacityConfigEditModel(); // \Flipdish\Client\Models\StoreOrderCapacityConfigEditModel | new order capacity configuration
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->updateStoreOrderCapacityConfig($store_id, $delivery_type, $new_order_capacity_config, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling StoreOrderCapacityApi->updateStoreOrderCapacityConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| Delivery / Pickup |
 **new_order_capacity_config** | [**\Flipdish\Client\Models\StoreOrderCapacityConfigEditModel**](../Model/StoreOrderCapacityConfigEditModel.md)| new order capacity configuration |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


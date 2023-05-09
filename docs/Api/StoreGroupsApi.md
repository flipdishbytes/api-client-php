# Flipdish\\Client\StoreGroupsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStoreGroup**](StoreGroupsApi.md#createStoreGroup) | **POST** /api/v1.0/{appNameId}/storegroups | 
[**getStoreGroup**](StoreGroupsApi.md#getStoreGroup) | **GET** /api/v1.0/storegroups/{storeGroupId} | 
[**getStoreGroups**](StoreGroupsApi.md#getStoreGroups) | **GET** /api/v1.0/{appNameId}/storegroups | 
[**getStoreGroupsExtended**](StoreGroupsApi.md#getStoreGroupsExtended) | **GET** /api/v1.0/{appNameId}/storegroups/extended | 
[**removeStoreGroup**](StoreGroupsApi.md#removeStoreGroup) | **DELETE** /api/v1.0/storegroups/{storeGroupId} | 
[**setMenuMessagePerDeliveryType**](StoreGroupsApi.md#setMenuMessagePerDeliveryType) | **POST** /api/v1.0/storegroups/{storeGroupId}/{deliveryType}/MenuMessagePerDeliveryType | 
[**updateStoreGroup**](StoreGroupsApi.md#updateStoreGroup) | **POST** /api/v1.0/storegroups/{storeGroupId} | 


# **createStoreGroup**
> \Flipdish\\Client\Models\RestApiResultStoreGroup createStoreGroup($app_name_id, $store_group)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name_id = "app_name_id_example"; // string | 
$store_group = new \Flipdish\\Client\Models\StoreGroupBase(); // \Flipdish\\Client\Models\StoreGroupBase | 

try {
    $result = $apiInstance->createStoreGroup($app_name_id, $store_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->createStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name_id** | **string**|  |
 **store_group** | [**\Flipdish\\Client\Models\StoreGroupBase**](../Model/StoreGroupBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStoreGroup**](../Model/RestApiResultStoreGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreGroup**
> \Flipdish\\Client\Models\RestApiResultStoreGroup getStoreGroup($store_group_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | 

try {
    $result = $apiInstance->getStoreGroup($store_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->getStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_group_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStoreGroup**](../Model/RestApiResultStoreGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreGroups**
> \Flipdish\\Client\Models\RestApiPaginationResultStoreGroup getStoreGroups($app_name_id, $search_query, $page, $limit)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name_id = "app_name_id_example"; // string | 
$search_query = "search_query_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getStoreGroups($app_name_id, $search_query, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->getStoreGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name_id** | **string**|  |
 **search_query** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultStoreGroup**](../Model/RestApiPaginationResultStoreGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreGroupsExtended**
> \Flipdish\\Client\Models\RestApiPaginationResultStoreGroupExtended getStoreGroupsExtended($app_name_id, $search_query, $page, $limit, $grouping_radius)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name_id = "app_name_id_example"; // string | 
$search_query = "search_query_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 
$grouping_radius = 56; // int | 

try {
    $result = $apiInstance->getStoreGroupsExtended($app_name_id, $search_query, $page, $limit, $grouping_radius);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->getStoreGroupsExtended: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_name_id** | **string**|  |
 **search_query** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **grouping_radius** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultStoreGroupExtended**](../Model/RestApiPaginationResultStoreGroupExtended.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeStoreGroup**
> removeStoreGroup($store_group_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | 

try {
    $apiInstance->removeStoreGroup($store_group_id);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->removeStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_group_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMenuMessagePerDeliveryType**
> setMenuMessagePerDeliveryType($store_group_id, $delivery_type, $menu_message)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | 
$delivery_type = "delivery_type_example"; // string | 
$menu_message = "menu_message_example"; // string | 

try {
    $apiInstance->setMenuMessagePerDeliveryType($store_group_id, $delivery_type, $menu_message);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->setMenuMessagePerDeliveryType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_group_id** | **int**|  |
 **delivery_type** | **string**|  |
 **menu_message** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreGroup**
> \Flipdish\\Client\Models\RestApiResultStoreGroupBase updateStoreGroup($store_group_id, $store_group)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | 
$store_group = new \Flipdish\\Client\Models\StoreGroupBase(); // \Flipdish\\Client\Models\StoreGroupBase | 

try {
    $result = $apiInstance->updateStoreGroup($store_group_id, $store_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreGroupsApi->updateStoreGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_group_id** | **int**|  |
 **store_group** | [**\Flipdish\\Client\Models\StoreGroupBase**](../Model/StoreGroupBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStoreGroupBase**](../Model/RestApiResultStoreGroupBase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


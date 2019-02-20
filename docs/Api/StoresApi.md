# Flipdish\Client\StoresApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneStore**](StoresApi.md#cloneStore) | **POST** /api/v1.0/stores/{storeId}/clone | Clone store with store clone settings
[**createBusinessHoursOverrideByStoreId**](StoresApi.md#createBusinessHoursOverrideByStoreId) | **POST** /api/v1.0/stores/{storeId}/businesshoursoverrides | Create Business Hours Override for a store
[**createStore**](StoresApi.md#createStore) | **POST** /api/v1.0/stores | Create store with Store Group identifier
[**deleteBusinessHoursOverride**](StoresApi.md#deleteBusinessHoursOverride) | **DELETE** /api/v1.0/stores/{storeId}/businesshoursoverrides/{businessHoursOverrideId} | Delete Business Hours Override for a store
[**getBusinessHours**](StoresApi.md#getBusinessHours) | **GET** /api/v1.0/stores/{storeId}/availability/{deliveryType} | Get Bussiness hours
[**getBusinessHoursOverrideByStoreId**](StoresApi.md#getBusinessHoursOverrideByStoreId) | **GET** /api/v1.0/stores/{storeId}/businesshoursoverrides | Get business hours overrides by store identifier
[**getProcessingFeeConfigsByStoreId**](StoresApi.md#getProcessingFeeConfigsByStoreId) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs | Get processing fee configs by store identifier
[**getProcessingFeeConfigsByStoreIdAndPaymentAccountType**](StoresApi.md#getProcessingFeeConfigsByStoreIdAndPaymentAccountType) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs/{paymentAccountType} | Get processing fee configs by store identifier
[**getStoreById**](StoresApi.md#getStoreById) | **GET** /api/v1.0/stores/{storeId} | Get store by identifier
[**getStores**](StoresApi.md#getStores) | **GET** /api/v1.0/stores | Get all stores
[**getStoresByAppId**](StoresApi.md#getStoresByAppId) | **GET** /api/v1.0/{appId}/stores | Get all stores by app name id
[**setBusinessHours**](StoresApi.md#setBusinessHours) | **POST** /api/v1.0/stores/{storeId}/availability/{deliveryType} | Set Bussiness hours
[**updateStore**](StoresApi.md#updateStore) | **POST** /api/v1.0/stores/{storeId} | Update store by identifier
[**updateStoreAddress**](StoresApi.md#updateStoreAddress) | **POST** /api/v1.0/stores/{storeId}/address | Update store address
[**updateStoreAddressCoordinates**](StoresApi.md#updateStoreAddressCoordinates) | **POST** /api/v1.0/stores/{storeId}/address/coordinates | Update store address coordinates


# **cloneStore**
> \Flipdish\Client\Models\RestApiResultStore cloneStore($store_id, $settings)

Clone store with store clone settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$settings = new \Flipdish\Client\Models\StoreCloneSettings(); // \Flipdish\Client\Models\StoreCloneSettings | Settings for cloning the store

try {
    $result = $apiInstance->cloneStore($store_id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->cloneStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **settings** | [**\Flipdish\Client\Models\StoreCloneSettings**](../Model/StoreCloneSettings.md)| Settings for cloning the store |

### Return type

[**\Flipdish\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBusinessHoursOverrideByStoreId**
> \Flipdish\Client\Models\RestApiResultBusinessHoursOverride createBusinessHoursOverrideByStoreId($store_id, $business_hours_override)

Create Business Hours Override for a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$business_hours_override = new \Flipdish\Client\Models\BusinessHoursOverrideBase(); // \Flipdish\Client\Models\BusinessHoursOverrideBase | Business Hours Override

try {
    $result = $apiInstance->createBusinessHoursOverrideByStoreId($store_id, $business_hours_override);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createBusinessHoursOverrideByStoreId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **business_hours_override** | [**\Flipdish\Client\Models\BusinessHoursOverrideBase**](../Model/BusinessHoursOverrideBase.md)| Business Hours Override |

### Return type

[**\Flipdish\Client\Models\RestApiResultBusinessHoursOverride**](../Model/RestApiResultBusinessHoursOverride.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStore**
> \Flipdish\Client\Models\RestApiResultStore createStore($store_group_id, $store)

Create store with Store Group identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | Store Group identifier
$store = new \Flipdish\Client\Models\StoreCreateBase(); // \Flipdish\Client\Models\StoreCreateBase | Store

try {
    $result = $apiInstance->createStore($store_group_id, $store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_group_id** | **int**| Store Group identifier |
 **store** | [**\Flipdish\Client\Models\StoreCreateBase**](../Model/StoreCreateBase.md)| Store |

### Return type

[**\Flipdish\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBusinessHoursOverride**
> \Flipdish\Client\Models\RestApiArrayResultRestApiDefaultResponse deleteBusinessHoursOverride($store_id, $business_hours_override_id)

Delete Business Hours Override for a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$business_hours_override_id = 56; // int | 

try {
    $result = $apiInstance->deleteBusinessHoursOverride($store_id, $business_hours_override_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->deleteBusinessHoursOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **business_hours_override_id** | **int**|  |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultRestApiDefaultResponse**](../Model/RestApiArrayResultRestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessHours**
> \Flipdish\Client\Models\RestApiArrayResultBusinessHoursPeriod getBusinessHours($store_id, $delivery_type)

Get Bussiness hours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | Deliery type

try {
    $result = $apiInstance->getBusinessHours($store_id, $delivery_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getBusinessHours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| Deliery type |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultBusinessHoursPeriod**](../Model/RestApiArrayResultBusinessHoursPeriod.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessHoursOverrideByStoreId**
> \Flipdish\Client\Models\RestApiPaginationResultBusinessHoursOverride getBusinessHoursOverrideByStoreId($store_id, $after, $page, $limit)

Get business hours overrides by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return results that ended after this datetime. Default value is the current datetime.
$page = 56; // int | Requested page index
$limit = 56; // int | Requested page limit

try {
    $result = $apiInstance->getBusinessHoursOverrideByStoreId($store_id, $after, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getBusinessHoursOverrideByStoreId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **after** | **\DateTime**| Return results that ended after this datetime. Default value is the current datetime. | [optional]
 **page** | **int**| Requested page index | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultBusinessHoursOverride**](../Model/RestApiPaginationResultBusinessHoursOverride.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessingFeeConfigsByStoreId**
> \Flipdish\Client\Models\RestApiArrayResultProcessingFeeConfig getProcessingFeeConfigsByStoreId($store_id, $app_name_id)

Get processing fee configs by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$app_name_id = "app_name_id_example"; // string | App Name Id(Not used, still here for compatability reasons)

try {
    $result = $apiInstance->getProcessingFeeConfigsByStoreId($store_id, $app_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getProcessingFeeConfigsByStoreId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **app_name_id** | **string**| App Name Id(Not used, still here for compatability reasons) | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultProcessingFeeConfig**](../Model/RestApiArrayResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessingFeeConfigsByStoreIdAndPaymentAccountType**
> \Flipdish\Client\Models\RestApiResultProcessingFeeConfig getProcessingFeeConfigsByStoreIdAndPaymentAccountType($store_id, $payment_account_type, $app_name_id)

Get processing fee configs by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$payment_account_type = "payment_account_type_example"; // string | 
$app_name_id = "app_name_id_example"; // string | App Name Id(Not used, still here for compatability reasons)

try {
    $result = $apiInstance->getProcessingFeeConfigsByStoreIdAndPaymentAccountType($store_id, $payment_account_type, $app_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getProcessingFeeConfigsByStoreIdAndPaymentAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **payment_account_type** | **string**|  |
 **app_name_id** | **string**| App Name Id(Not used, still here for compatability reasons) | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiResultProcessingFeeConfig**](../Model/RestApiResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreById**
> \Flipdish\Client\Models\RestApiResultStore getStoreById($store_id)

Get store by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $result = $apiInstance->getStoreById($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStores**
> \Flipdish\Client\Models\RestApiPaginationResultStore getStores($search_query, $page, $limit, $store_group_id)

Get all stores

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_query = "search_query_example"; // string | Search query
$page = 56; // int | Requested page index
$limit = 56; // int | Requested page limit
$store_group_id = 56; // int | Store Group Id

try {
    $result = $apiInstance->getStores($search_query, $page, $limit, $store_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_query** | **string**| Search query | [optional]
 **page** | **int**| Requested page index | [optional]
 **limit** | **int**| Requested page limit | [optional]
 **store_group_id** | **int**| Store Group Id | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultStore**](../Model/RestApiPaginationResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresByAppId**
> \Flipdish\Client\Models\RestApiPaginationResultStore getStoresByAppId($app_id, $search_query, $page, $limit)

Get all stores by app name id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$search_query = "search_query_example"; // string | Search query
$page = 56; // int | Requested page index
$limit = 56; // int | Requested page limit

try {
    $result = $apiInstance->getStoresByAppId($app_id, $search_query, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoresByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **search_query** | **string**| Search query | [optional]
 **page** | **int**| Requested page index | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultStore**](../Model/RestApiPaginationResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBusinessHours**
> \Flipdish\Client\Models\RestApiResultBusinessHoursPeriod setBusinessHours($store_id, $delivery_type, $business_hours_period)

Set Bussiness hours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | Deliery type
$business_hours_period = new \Flipdish\Client\Models\BusinessHoursPeriodBase(); // \Flipdish\Client\Models\BusinessHoursPeriodBase | Business Hours Period

try {
    $result = $apiInstance->setBusinessHours($store_id, $delivery_type, $business_hours_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->setBusinessHours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| Deliery type |
 **business_hours_period** | [**\Flipdish\Client\Models\BusinessHoursPeriodBase**](../Model/BusinessHoursPeriodBase.md)| Business Hours Period |

### Return type

[**\Flipdish\Client\Models\RestApiResultBusinessHoursPeriod**](../Model/RestApiResultBusinessHoursPeriod.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStore**
> \Flipdish\Client\Models\RestApiResultStore updateStore($store_id, $store)

Update store by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Group identifier
$store = new \Flipdish\Client\Models\StoreBase(); // \Flipdish\Client\Models\StoreBase | Store

try {
    $result = $apiInstance->updateStore($store_id, $store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store Group identifier |
 **store** | [**\Flipdish\Client\Models\StoreBase**](../Model/StoreBase.md)| Store |

### Return type

[**\Flipdish\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreAddress**
> \Flipdish\Client\Models\RestApiResultStoreAddress updateStoreAddress($store_id, $store_address)

Update store address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$store_address = new \Flipdish\Client\Models\StoreAddressBase(); // \Flipdish\Client\Models\StoreAddressBase | Store address

try {
    $result = $apiInstance->updateStoreAddress($store_id, $store_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updateStoreAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **store_address** | [**\Flipdish\Client\Models\StoreAddressBase**](../Model/StoreAddressBase.md)| Store address |

### Return type

[**\Flipdish\Client\Models\RestApiResultStoreAddress**](../Model/RestApiResultStoreAddress.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreAddressCoordinates**
> \Flipdish\Client\Models\RestApiResultCoordinates updateStoreAddressCoordinates($store_id, $coordinates, $app_name_id)

Update store address coordinates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$coordinates = new \Flipdish\Client\Models\Coordinates(); // \Flipdish\Client\Models\Coordinates | Store address coordinates
$app_name_id = "app_name_id_example"; // string | App Name Id(Not used, still here for compatability reasons)

try {
    $result = $apiInstance->updateStoreAddressCoordinates($store_id, $coordinates, $app_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updateStoreAddressCoordinates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **coordinates** | [**\Flipdish\Client\Models\Coordinates**](../Model/Coordinates.md)| Store address coordinates |
 **app_name_id** | **string**| App Name Id(Not used, still here for compatability reasons) | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiResultCoordinates**](../Model/RestApiResultCoordinates.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


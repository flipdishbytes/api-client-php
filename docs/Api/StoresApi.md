# Flipdish\\Client\StoresApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveStore**](StoresApi.md#archiveStore) | **POST** /api/v1.0/stores/{storeId}/archive | Archive store
[**assignMenu**](StoresApi.md#assignMenu) | **POST** /api/v1.0/stores/{storeId}/menu/{menuId} | Assign Menu to Store
[**cloneStore**](StoresApi.md#cloneStore) | **POST** /api/v1.0/stores/{storeId}/clone | Clone store with store clone settings
[**configureStoreServiceCharge**](StoresApi.md#configureStoreServiceCharge) | **POST** /api/v1.0/stores/{storeId}/servicecharge | Configure Store Service Charge; Idempotent Operation
[**createBusinessHoursOverrideByStoreId**](StoresApi.md#createBusinessHoursOverrideByStoreId) | **POST** /api/v1.0/stores/{storeId}/businesshoursoverrides | Create Business Hours Override for a store
[**createStore**](StoresApi.md#createStore) | **POST** /api/v1.0/stores | Create store with Store Group identifier
[**deleteBusinessHoursOverride**](StoresApi.md#deleteBusinessHoursOverride) | **DELETE** /api/v1.0/stores/{storeId}/businesshoursoverrides/{businessHoursOverrideId} | Delete Business Hours Override for a store
[**getBankAccountForStore**](StoresApi.md#getBankAccountForStore) | **GET** /api/v1.0/stores/{storeId}/bankaccount | Get Stores Bank Account Id
[**getBusinessHours**](StoresApi.md#getBusinessHours) | **GET** /api/v1.0/stores/{storeId}/availability/{deliveryType} | Get Business hours
[**getBusinessHoursOverrideByStoreId**](StoresApi.md#getBusinessHoursOverrideByStoreId) | **GET** /api/v1.0/stores/{storeId}/businesshoursoverrides | Get business hours overrides by store identifier
[**getEndOfDayReport**](StoresApi.md#getEndOfDayReport) | **GET** /api/v1.0/stores/{storeId}/endofdayreport | Get store end of day report
[**getPreOrderConfig**](StoresApi.md#getPreOrderConfig) | **GET** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType} | Get the pre order config for a store, by type
[**getPreOrderPreview**](StoresApi.md#getPreOrderPreview) | **GET** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType}/preview | Get the Preview times of the pre-order configuration
[**getProcessingFeeConfigsByStoreId**](StoresApi.md#getProcessingFeeConfigsByStoreId) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs | Get processing fee configs by store identifier
[**getProcessingFeeConfigsByStoreIdAndPaymentAccountType**](StoresApi.md#getProcessingFeeConfigsByStoreIdAndPaymentAccountType) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs/{paymentAccountType} | Get processing fee configs by store identifier
[**getStoreById**](StoresApi.md#getStoreById) | **GET** /api/v1.0/stores/{storeId} | Get store by identifier
[**getStoreHeadersByAppId**](StoresApi.md#getStoreHeadersByAppId) | **GET** /api/v1.0/{appId}/stores/header | Get all stores by app name id
[**getStoreNetSales**](StoresApi.md#getStoreNetSales) | **GET** /api/v1.0/{appId}/stores/stats | Get stores statistics by app name id and storeIds
[**getStoreServiceCharge**](StoresApi.md#getStoreServiceCharge) | **GET** /api/v1.0/stores/{storeId}/servicecharge | Retrieve Store Service Charge
[**getStores**](StoresApi.md#getStores) | **GET** /api/v1.0/stores | Get all stores, excluding archived ones
[**getStoresByAppId**](StoresApi.md#getStoresByAppId) | **GET** /api/v1.0/{appId}/stores | Get all stores by app name id
[**publishStore**](StoresApi.md#publishStore) | **POST** /api/v1.0/stores/{storeId}/publish | Publish store
[**setBusinessHours**](StoresApi.md#setBusinessHours) | **POST** /api/v1.0/stores/{storeId}/availability/{deliveryType} | Set Business hours
[**setPreOrdeEnabled**](StoresApi.md#setPreOrdeEnabled) | **POST** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType}/enabled | UPDATE pre order config for a store, by type
[**unpublishStore**](StoresApi.md#unpublishStore) | **POST** /api/v1.0/stores/{storeId}/unpublish | Unpublish store
[**updatePreOrderConfig**](StoresApi.md#updatePreOrderConfig) | **POST** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType} | UPDATE pre order config for a store, by type
[**updateStore**](StoresApi.md#updateStore) | **POST** /api/v1.0/stores/{storeId} | Update store by identifier
[**updateStoreAddress**](StoresApi.md#updateStoreAddress) | **POST** /api/v1.0/stores/{storeId}/address | Update store address
[**updateStoreAddressCoordinates**](StoresApi.md#updateStoreAddressCoordinates) | **POST** /api/v1.0/stores/{storeId}/address/coordinates | Update store address coordinates


# **archiveStore**
> archiveStore($store_id)

Archive store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $apiInstance->archiveStore($store_id);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->archiveStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignMenu**
> \Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse assignMenu($store_id, $menu_id)

Assign Menu to Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$menu_id = 56; // int | Id of Menu to assign to store

try {
    $result = $apiInstance->assignMenu($store_id, $menu_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->assignMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **menu_id** | **int**| Id of Menu to assign to store |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse**](../Model/RestApiArrayResultRestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneStore**
> \Flipdish\\Client\Models\RestApiResultStore cloneStore($store_id, $settings)

Clone store with store clone settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$settings = new \Flipdish\\Client\Models\StoreCloneSettings(); // \Flipdish\\Client\Models\StoreCloneSettings | Settings for cloning the store

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
 **settings** | [**\Flipdish\\Client\Models\StoreCloneSettings**](../Model/StoreCloneSettings.md)| Settings for cloning the store |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureStoreServiceCharge**
> object configureStoreServiceCharge($store_id, $service_charge)

Configure Store Service Charge; Idempotent Operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$service_charge = new \Flipdish\\Client\Models\ServiceCharge(); // \Flipdish\\Client\Models\ServiceCharge | Service charge

try {
    $result = $apiInstance->configureStoreServiceCharge($store_id, $service_charge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->configureStoreServiceCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **service_charge** | [**\Flipdish\\Client\Models\ServiceCharge**](../Model/ServiceCharge.md)| Service charge |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBusinessHoursOverrideByStoreId**
> \Flipdish\\Client\Models\RestApiResultBusinessHoursOverride createBusinessHoursOverrideByStoreId($store_id, $business_hours_override)

Create Business Hours Override for a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$business_hours_override = new \Flipdish\\Client\Models\BusinessHoursOverrideBase(); // \Flipdish\\Client\Models\BusinessHoursOverrideBase | Business Hours Override

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
 **business_hours_override** | [**\Flipdish\\Client\Models\BusinessHoursOverrideBase**](../Model/BusinessHoursOverrideBase.md)| Business Hours Override |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBusinessHoursOverride**](../Model/RestApiResultBusinessHoursOverride.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStore**
> \Flipdish\\Client\Models\RestApiResultStore createStore($store_group_id, $store)

Create store with Store Group identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | Store Group identifier
$store = new \Flipdish\\Client\Models\StoreCreateBase(); // \Flipdish\\Client\Models\StoreCreateBase | Store

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
 **store** | [**\Flipdish\\Client\Models\StoreCreateBase**](../Model/StoreCreateBase.md)| Store |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBusinessHoursOverride**
> \Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse deleteBusinessHoursOverride($store_id, $business_hours_override_id)

Delete Business Hours Override for a store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse**](../Model/RestApiArrayResultRestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankAccountForStore**
> \Flipdish\\Client\Models\RestApiResultAssignedBankAccount getBankAccountForStore($store_id)

Get Stores Bank Account Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $result = $apiInstance->getBankAccountForStore($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getBankAccountForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAssignedBankAccount**](../Model/RestApiResultAssignedBankAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessHours**
> \Flipdish\\Client\Models\RestApiArrayResultBusinessHoursPeriod getBusinessHours($store_id, $delivery_type)

Get Business hours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | Delivery type

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
 **delivery_type** | **string**| Delivery type |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultBusinessHoursPeriod**](../Model/RestApiArrayResultBusinessHoursPeriod.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessHoursOverrideByStoreId**
> \Flipdish\\Client\Models\RestApiPaginationResultBusinessHoursOverride getBusinessHoursOverrideByStoreId($store_id, $after, $page, $limit)

Get business hours overrides by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiPaginationResultBusinessHoursOverride**](../Model/RestApiPaginationResultBusinessHoursOverride.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEndOfDayReport**
> \Flipdish\\Client\Models\RestApiResultStoreEndOfDayReport getEndOfDayReport($store_id, $date)

Get store end of day report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Store identifier

try {
    $result = $apiInstance->getEndOfDayReport($store_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getEndOfDayReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **date** | **\DateTime**| Store identifier | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultStoreEndOfDayReport**](../Model/RestApiResultStoreEndOfDayReport.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPreOrderConfig**
> \Flipdish\\Client\Models\RestApiResultPreOrderConfig getPreOrderConfig($store_id, $delivery_type)

Get the pre order config for a store, by type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | \"delivery\" or \"pickup\"

try {
    $result = $apiInstance->getPreOrderConfig($store_id, $delivery_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getPreOrderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| \&quot;delivery\&quot; or \&quot;pickup\&quot; |

### Return type

[**\Flipdish\\Client\Models\RestApiResultPreOrderConfig**](../Model/RestApiResultPreOrderConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPreOrderPreview**
> \Flipdish\\Client\Models\RestApiArrayResultPreOrderTime getPreOrderPreview($store_id, $delivery_type, $pre_order_config_lead_time_minutes, $pre_order_config_interval_minutes, $pre_order_config_max_order_ahead_days, $pre_order_config_include_asap, $pre_order_config_include_more_granular_initial_time, $pre_order_config_cut_off_time_previous_day_basic, $pre_order_config_cut_off_time_current_day_basic, $pre_order_config_pre_order_time_display_type, $pre_order_config_always_appear_open, $pre_order_config_require_explicit_select_always)

Get the Preview times of the pre-order configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | \"delivery\" or \"pickup\"
$pre_order_config_lead_time_minutes = 56; // int | Lead Time in Minutes
$pre_order_config_interval_minutes = 56; // int | Interval in minutes
$pre_order_config_max_order_ahead_days = 56; // int | Max Days to order ahead
$pre_order_config_include_asap = true; // bool | Show ASAP as option
$pre_order_config_include_more_granular_initial_time = true; // bool | Granual Init' Time
$pre_order_config_cut_off_time_previous_day_basic = "pre_order_config_cut_off_time_previous_day_basic_example"; // string | Cut off time previous day
$pre_order_config_cut_off_time_current_day_basic = "pre_order_config_cut_off_time_current_day_basic_example"; // string | Cut off time current day
$pre_order_config_pre_order_time_display_type = "pre_order_config_pre_order_time_display_type_example"; // string | Type of time displayed.
$pre_order_config_always_appear_open = true; // bool | Specifies whether a customer can pre-order outside the store opening hours or not.
$pre_order_config_require_explicit_select_always = true; // bool | Force customer to select collection time.

try {
    $result = $apiInstance->getPreOrderPreview($store_id, $delivery_type, $pre_order_config_lead_time_minutes, $pre_order_config_interval_minutes, $pre_order_config_max_order_ahead_days, $pre_order_config_include_asap, $pre_order_config_include_more_granular_initial_time, $pre_order_config_cut_off_time_previous_day_basic, $pre_order_config_cut_off_time_current_day_basic, $pre_order_config_pre_order_time_display_type, $pre_order_config_always_appear_open, $pre_order_config_require_explicit_select_always);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getPreOrderPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| \&quot;delivery\&quot; or \&quot;pickup\&quot; |
 **pre_order_config_lead_time_minutes** | **int**| Lead Time in Minutes | [optional]
 **pre_order_config_interval_minutes** | **int**| Interval in minutes | [optional]
 **pre_order_config_max_order_ahead_days** | **int**| Max Days to order ahead | [optional]
 **pre_order_config_include_asap** | **bool**| Show ASAP as option | [optional]
 **pre_order_config_include_more_granular_initial_time** | **bool**| Granual Init&#39; Time | [optional]
 **pre_order_config_cut_off_time_previous_day_basic** | **string**| Cut off time previous day | [optional]
 **pre_order_config_cut_off_time_current_day_basic** | **string**| Cut off time current day | [optional]
 **pre_order_config_pre_order_time_display_type** | **string**| Type of time displayed. | [optional]
 **pre_order_config_always_appear_open** | **bool**| Specifies whether a customer can pre-order outside the store opening hours or not. | [optional]
 **pre_order_config_require_explicit_select_always** | **bool**| Force customer to select collection time. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultPreOrderTime**](../Model/RestApiArrayResultPreOrderTime.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessingFeeConfigsByStoreId**
> \Flipdish\\Client\Models\RestApiArrayResultProcessingFeeConfig getProcessingFeeConfigsByStoreId($store_id, $app_name_id)

Get processing fee configs by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiArrayResultProcessingFeeConfig**](../Model/RestApiArrayResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessingFeeConfigsByStoreIdAndPaymentAccountType**
> \Flipdish\\Client\Models\RestApiResultProcessingFeeConfig getProcessingFeeConfigsByStoreIdAndPaymentAccountType($store_id, $payment_account_type, $app_name_id)

Get processing fee configs by store identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiResultProcessingFeeConfig**](../Model/RestApiResultProcessingFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreById**
> \Flipdish\\Client\Models\RestApiResultStore getStoreById($store_id)

Get store by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreHeadersByAppId**
> \Flipdish\\Client\Models\RestApiPaginationResultStoreHeader getStoreHeadersByAppId($app_id, $store_name_query, $page, $limit)

Get all stores by app name id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$store_name_query = "store_name_query_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getStoreHeadersByAppId($app_id, $store_name_query, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreHeadersByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **store_name_query** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultStoreHeader**](../Model/RestApiPaginationResultStoreHeader.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreNetSales**
> \Flipdish\\Client\Models\RestApiArrayResultStoreStatistics getStoreNetSales($app_id, $store_id)

Get stores statistics by app name id and storeIds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$store_id = array(56); // int[] | Store Ids

try {
    $result = $apiInstance->getStoreNetSales($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreNetSales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **store_id** | [**int[]**](../Model/int.md)| Store Ids |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultStoreStatistics**](../Model/RestApiArrayResultStoreStatistics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreServiceCharge**
> \Flipdish\\Client\Models\ServiceCharge getStoreServiceCharge($store_id)

Retrieve Store Service Charge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $result = $apiInstance->getStoreServiceCharge($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreServiceCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

[**\Flipdish\\Client\Models\ServiceCharge**](../Model/ServiceCharge.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStores**
> \Flipdish\\Client\Models\RestApiPaginationResultStore getStores($search_query, $page, $limit, $store_group_id)

Get all stores, excluding archived ones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiPaginationResultStore**](../Model/RestApiPaginationResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresByAppId**
> \Flipdish\\Client\Models\RestApiPaginationResultStore getStoresByAppId($app_id, $search_query, $page, $limit)

Get all stores by app name id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
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

[**\Flipdish\\Client\Models\RestApiPaginationResultStore**](../Model/RestApiPaginationResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishStore**
> publishStore($store_id)

Publish store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $apiInstance->publishStore($store_id);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->publishStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBusinessHours**
> \Flipdish\\Client\Models\RestApiResultBusinessHoursPeriod setBusinessHours($store_id, $delivery_type, $business_hours_period)

Set Business hours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | Delivery type
$business_hours_period = new \Flipdish\\Client\Models\BusinessHoursPeriodBase(); // \Flipdish\\Client\Models\BusinessHoursPeriodBase | Business Hours Period

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
 **delivery_type** | **string**| Delivery type |
 **business_hours_period** | [**\Flipdish\\Client\Models\BusinessHoursPeriodBase**](../Model/BusinessHoursPeriodBase.md)| Business Hours Period |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBusinessHoursPeriod**](../Model/RestApiResultBusinessHoursPeriod.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPreOrdeEnabled**
> \Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse setPreOrdeEnabled($store_id, $delivery_type, $enabled)

UPDATE pre order config for a store, by type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | \"delivery\" or \"pickup\"
$enabled = true; // bool | Update pre order config values

try {
    $result = $apiInstance->setPreOrdeEnabled($store_id, $delivery_type, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->setPreOrdeEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| \&quot;delivery\&quot; or \&quot;pickup\&quot; |
 **enabled** | **bool**| Update pre order config values |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse**](../Model/RestApiArrayResultRestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unpublishStore**
> unpublishStore($store_id)

Unpublish store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier

try {
    $apiInstance->unpublishStore($store_id);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->unpublishStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePreOrderConfig**
> \Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse updatePreOrderConfig($store_id, $delivery_type, $pre_order_config)

UPDATE pre order config for a store, by type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$delivery_type = "delivery_type_example"; // string | \"delivery\" or \"pickup\"
$pre_order_config = new \Flipdish\\Client\Models\PreOrderConfig(); // \Flipdish\\Client\Models\PreOrderConfig | Update pre order config values

try {
    $result = $apiInstance->updatePreOrderConfig($store_id, $delivery_type, $pre_order_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updatePreOrderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store identifier |
 **delivery_type** | **string**| \&quot;delivery\&quot; or \&quot;pickup\&quot; |
 **pre_order_config** | [**\Flipdish\\Client\Models\PreOrderConfig**](../Model/PreOrderConfig.md)| Update pre order config values |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse**](../Model/RestApiArrayResultRestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStore**
> \Flipdish\\Client\Models\RestApiResultStore updateStore($store_id, $store)

Update store by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Group identifier
$store = new \Flipdish\\Client\Models\StoreBase(); // \Flipdish\\Client\Models\StoreBase | Store

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
 **store** | [**\Flipdish\\Client\Models\StoreBase**](../Model/StoreBase.md)| Store |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreAddress**
> \Flipdish\\Client\Models\RestApiResultStoreAddress updateStoreAddress($store_id, $store_address)

Update store address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$store_address = new \Flipdish\\Client\Models\StoreAddressBase(); // \Flipdish\\Client\Models\StoreAddressBase | Store address

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
 **store_address** | [**\Flipdish\\Client\Models\StoreAddressBase**](../Model/StoreAddressBase.md)| Store address |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStoreAddress**](../Model/RestApiResultStoreAddress.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreAddressCoordinates**
> \Flipdish\\Client\Models\RestApiResultCoordinates updateStoreAddressCoordinates($store_id, $coordinates, $app_name_id)

Update store address coordinates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store identifier
$coordinates = new \Flipdish\\Client\Models\Coordinates(); // \Flipdish\\Client\Models\Coordinates | Store address coordinates
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
 **coordinates** | [**\Flipdish\\Client\Models\Coordinates**](../Model/Coordinates.md)| Store address coordinates |
 **app_name_id** | **string**| App Name Id(Not used, still here for compatability reasons) | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultCoordinates**](../Model/RestApiResultCoordinates.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


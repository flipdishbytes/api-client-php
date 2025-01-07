# Flipdish\\Client\StoresApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveStore**](StoresApi.md#archiveStore) | **POST** /api/v1.0/stores/{storeId}/archive | 
[**assignMenu**](StoresApi.md#assignMenu) | **POST** /api/v1.0/stores/{storeId}/menu/{menuId} | 
[**cloneStore**](StoresApi.md#cloneStore) | **POST** /api/v1.0/stores/{storeId}/clone | 
[**configureStoreServiceCharge**](StoresApi.md#configureStoreServiceCharge) | **POST** /api/v1.0/stores/{storeId}/servicecharge | 
[**createBusinessHoursOverrideByStoreId**](StoresApi.md#createBusinessHoursOverrideByStoreId) | **POST** /api/v1.0/stores/{storeId}/businesshoursoverrides | 
[**createStore**](StoresApi.md#createStore) | **POST** /api/v1.0/stores | 
[**createStoreInProperty**](StoresApi.md#createStoreInProperty) | **POST** /api/v1.0/properties/{propertyId}/stores | 
[**deleteBusinessHoursOverride**](StoresApi.md#deleteBusinessHoursOverride) | **DELETE** /api/v1.0/stores/{storeId}/businesshoursoverrides/{businessHoursOverrideId} | 
[**getBankAccountForStore**](StoresApi.md#getBankAccountForStore) | **GET** /api/v1.0/stores/{storeId}/bankaccount | 
[**getBusinessHours**](StoresApi.md#getBusinessHours) | **GET** /api/v1.0/stores/{storeId}/availability/{deliveryType} | 
[**getBusinessHoursOverrideByStoreId**](StoresApi.md#getBusinessHoursOverrideByStoreId) | **GET** /api/v1.0/stores/{storeId}/businesshoursoverrides | 
[**getEndOfDayReport**](StoresApi.md#getEndOfDayReport) | **GET** /api/v1.0/stores/{storeId}/endofdayreport | 
[**getPreOrderConfig**](StoresApi.md#getPreOrderConfig) | **GET** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType} | 
[**getPreOrderPreview**](StoresApi.md#getPreOrderPreview) | **GET** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType}/preview | 
[**getProcessingFeeConfigsByStoreId**](StoresApi.md#getProcessingFeeConfigsByStoreId) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs | 
[**getProcessingFeeConfigsByStoreIdAndPaymentAccountType**](StoresApi.md#getProcessingFeeConfigsByStoreIdAndPaymentAccountType) | **GET** /api/v1.0/stores/{storeId}/processingfeeconfigs/{paymentAccountType} | 
[**getStoreById**](StoresApi.md#getStoreById) | **GET** /api/v1.0/stores/{storeId} | 
[**getStoreDeliveryFeeConfig**](StoresApi.md#getStoreDeliveryFeeConfig) | **GET** /api/v1.0/stores/{storeId}/feeConfig/deliveryZones | 
[**getStoreFeeConfig**](StoresApi.md#getStoreFeeConfig) | **GET** /api/v1.0/stores/{storeId}/feeConfig | 
[**getStoreHeadersByAppId**](StoresApi.md#getStoreHeadersByAppId) | **GET** /api/v1.0/{appId}/stores/header | 
[**getStoreLeadTimes**](StoresApi.md#getStoreLeadTimes) | **GET** /api/v1.0/stores/{storeId}/leadTimes | 
[**getStoreNetSales**](StoresApi.md#getStoreNetSales) | **GET** /api/v1.0/{appId}/stores/stats | 
[**getStoreServiceCharge**](StoresApi.md#getStoreServiceCharge) | **GET** /api/v1.0/stores/{storeId}/servicecharge | 
[**getStores**](StoresApi.md#getStores) | **GET** /api/v1.0/stores | 
[**getStoresByAppId**](StoresApi.md#getStoresByAppId) | **GET** /api/v1.0/{appId}/stores | 
[**getStoresByStoreIdWithValidations**](StoresApi.md#getStoresByStoreIdWithValidations) | **GET** /api/v1.0/{appId}/storevalidation/kiosk | 
[**publishStore**](StoresApi.md#publishStore) | **POST** /api/v1.0/stores/{storeId}/publish | 
[**putStoreDeliveryFeeConfig**](StoresApi.md#putStoreDeliveryFeeConfig) | **PUT** /api/v1.0/stores/{storeId}/feeConfig/deliveryZones | 
[**setBusinessHours**](StoresApi.md#setBusinessHours) | **POST** /api/v1.0/stores/{storeId}/availability/{deliveryType} | 
[**setPreOrdeEnabled**](StoresApi.md#setPreOrdeEnabled) | **POST** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType}/enabled | 
[**setStoreLeadTimes**](StoresApi.md#setStoreLeadTimes) | **POST** /api/v1.0/stores/{storeId}/leadTimes | 
[**storesSetPropertyId**](StoresApi.md#storesSetPropertyId) | **POST** /api/v1.0/stores/{storeId}/propertyId/{propertyId} | 
[**supportedSalesChannelsTypes**](StoresApi.md#supportedSalesChannelsTypes) | **POST** /api/v1.0/properties/{propertyId}/stores/{storeId}/supportedSalesChannels | 
[**unpublishStore**](StoresApi.md#unpublishStore) | **POST** /api/v1.0/stores/{storeId}/unpublish | 
[**updatePreOrderConfig**](StoresApi.md#updatePreOrderConfig) | **POST** /api/v1.0/stores/{storeId}/preorderconfig/{deliveryType} | 
[**updateStore**](StoresApi.md#updateStore) | **POST** /api/v1.0/stores/{storeId} | 
[**updateStoreAddress**](StoresApi.md#updateStoreAddress) | **POST** /api/v1.0/stores/{storeId}/address | 
[**updateStoreAddressCoordinates**](StoresApi.md#updateStoreAddressCoordinates) | **POST** /api/v1.0/stores/{storeId}/address/coordinates | 
[**updateStoreAddressForm**](StoresApi.md#updateStoreAddressForm) | **POST** /api/v1.0/stores/{storeId}/addressform | 


# **archiveStore**
> archiveStore($store_id)



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
 **store_id** | **int**|  |

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
$menu_id = 56; // int | 

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
 **store_id** | **int**|  |
 **menu_id** | **int**|  |

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
$settings = new \Flipdish\\Client\Models\StoreCloneSettings(); // \Flipdish\\Client\Models\StoreCloneSettings | 

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
 **store_id** | **int**|  |
 **settings** | [**\Flipdish\\Client\Models\StoreCloneSettings**](../Model/StoreCloneSettings.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configureStoreServiceCharge**
> \Flipdish\\Client\Models\RestApiResultServiceCharge configureStoreServiceCharge($store_id, $service_charge)



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
$service_charge = new \Flipdish\\Client\Models\ServiceCharge(); // \Flipdish\\Client\Models\ServiceCharge | 

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
 **store_id** | **int**|  |
 **service_charge** | [**\Flipdish\\Client\Models\ServiceCharge**](../Model/ServiceCharge.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultServiceCharge**](../Model/RestApiResultServiceCharge.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBusinessHoursOverrideByStoreId**
> \Flipdish\\Client\Models\RestApiResultBusinessHoursOverride createBusinessHoursOverrideByStoreId($store_id, $business_hours_override)



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
$business_hours_override = new \Flipdish\\Client\Models\BusinessHoursOverrideBase(); // \Flipdish\\Client\Models\BusinessHoursOverrideBase | 

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
 **store_id** | **int**|  |
 **business_hours_override** | [**\Flipdish\\Client\Models\BusinessHoursOverrideBase**](../Model/BusinessHoursOverrideBase.md)|  |

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
$store_group_id = 56; // int | 
$store = new \Flipdish\\Client\Models\StoreCreateBase(); // \Flipdish\\Client\Models\StoreCreateBase | 

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
 **store_group_id** | **int**|  |
 **store** | [**\Flipdish\\Client\Models\StoreCreateBase**](../Model/StoreCreateBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoreInProperty**
> \Flipdish\\Client\Models\RestApiResultStore createStoreInProperty($store_group_id, $property_id, $store, $auto_assign_menu)



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
$store_group_id = 56; // int | 
$property_id = "property_id_example"; // string | 
$store = new \Flipdish\\Client\Models\StoreCreateBase(); // \Flipdish\\Client\Models\StoreCreateBase | 
$auto_assign_menu = true; // bool | 

try {
    $result = $apiInstance->createStoreInProperty($store_group_id, $property_id, $store, $auto_assign_menu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createStoreInProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_group_id** | **int**|  |
 **property_id** | **string**|  |
 **store** | [**\Flipdish\\Client\Models\StoreCreateBase**](../Model/StoreCreateBase.md)|  |
 **auto_assign_menu** | **bool**|  | [optional]

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
 **store_id** | **int**|  |

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
$delivery_type = "delivery_type_example"; // string | 

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
 **store_id** | **int**|  |
 **delivery_type** | **string**|  |

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
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 56; // int | 
$limit = 56; // int | 

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
 **store_id** | **int**|  |
 **after** | **\DateTime**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

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
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

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
 **store_id** | **int**|  |
 **date** | **\DateTime**|  | [optional]

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
$delivery_type = "delivery_type_example"; // string | 

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
 **store_id** | **int**|  |
 **delivery_type** | **string**|  |

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
$delivery_type = "delivery_type_example"; // string | 
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
 **store_id** | **int**|  |
 **delivery_type** | **string**|  |
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
$app_name_id = "app_name_id_example"; // string | 

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
 **store_id** | **int**|  |
 **app_name_id** | **string**|  | [optional]

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
$payment_account_type = "payment_account_type_example"; // string | 
$app_name_id = "app_name_id_example"; // string | 

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
 **store_id** | **int**|  |
 **payment_account_type** | **string**|  |
 **app_name_id** | **string**|  | [optional]

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
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStore**](../Model/RestApiResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreDeliveryFeeConfig**
> \Flipdish\\Client\Models\RestApiArrayResultStoreDeliveryZoneFeeConfig getStoreDeliveryFeeConfig($store_id)



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

try {
    $result = $apiInstance->getStoreDeliveryFeeConfig($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreDeliveryFeeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultStoreDeliveryZoneFeeConfig**](../Model/RestApiArrayResultStoreDeliveryZoneFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreFeeConfig**
> \Flipdish\\Client\Models\StoreFeeConfig getStoreFeeConfig($store_id)



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

try {
    $result = $apiInstance->getStoreFeeConfig($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreFeeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\StoreFeeConfig**](../Model/StoreFeeConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreHeadersByAppId**
> \Flipdish\\Client\Models\RestApiPaginationResultStoreHeader getStoreHeadersByAppId($app_id, $store_name_query, $sales_channel_type, $page, $limit)



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
$app_id = "app_id_example"; // string | 
$store_name_query = "store_name_query_example"; // string | 
$sales_channel_type = "sales_channel_type_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getStoreHeadersByAppId($app_id, $store_name_query, $sales_channel_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreHeadersByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_name_query** | **string**|  | [optional]
 **sales_channel_type** | **string**|  | [optional]
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

# **getStoreLeadTimes**
> \Flipdish\\Client\Models\RestApiResultOrderLeadTimes getStoreLeadTimes($store_id)



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

try {
    $result = $apiInstance->getStoreLeadTimes($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoreLeadTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderLeadTimes**](../Model/RestApiResultOrderLeadTimes.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreNetSales**
> \Flipdish\\Client\Models\RestApiArrayResultStoreStatistics getStoreNetSales($app_id, $store_id)



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
$app_id = "app_id_example"; // string | 
$store_id = array(56); // int[] | 

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
 **app_id** | **string**|  |
 **store_id** | [**int[]**](../Model/int.md)|  |

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
 **store_id** | **int**|  |

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
$search_query = "search_query_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 
$store_group_id = 56; // int | 

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
 **search_query** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **store_group_id** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultStore**](../Model/RestApiPaginationResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresByAppId**
> \Flipdish\\Client\Models\RestApiPaginationResultStore getStoresByAppId($app_id, $search_query, $sales_channel_type, $page, $limit)



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
$app_id = "app_id_example"; // string | 
$search_query = "search_query_example"; // string | 
$sales_channel_type = "sales_channel_type_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getStoresByAppId($app_id, $search_query, $sales_channel_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoresByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **search_query** | **string**|  | [optional]
 **sales_channel_type** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultStore**](../Model/RestApiPaginationResultStore.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresByStoreIdWithValidations**
> \Flipdish\\Client\Models\RestApiPaginationResultStoreValidationConfig getStoresByStoreIdWithValidations($store_id, $app_id, $page, $limit)



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
$store_id = array(56); // int[] | 
$app_id = "app_id_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getStoresByStoreIdWithValidations($store_id, $app_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStoresByStoreIdWithValidations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | [**int[]**](../Model/int.md)|  |
 **app_id** | **string**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultStoreValidationConfig**](../Model/RestApiPaginationResultStoreValidationConfig.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishStore**
> publishStore($store_id)



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
 **store_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStoreDeliveryFeeConfig**
> putStoreDeliveryFeeConfig($store_id, $fee_config_update_request)



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
$fee_config_update_request = new \Flipdish\\Client\Models\StoreDeliveryZoneFeeConfigUpdateRequest(); // \Flipdish\\Client\Models\StoreDeliveryZoneFeeConfigUpdateRequest | 

try {
    $apiInstance->putStoreDeliveryFeeConfig($store_id, $fee_config_update_request);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->putStoreDeliveryFeeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **fee_config_update_request** | [**\Flipdish\\Client\Models\StoreDeliveryZoneFeeConfigUpdateRequest**](../Model/StoreDeliveryZoneFeeConfigUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBusinessHours**
> \Flipdish\\Client\Models\RestApiResultBusinessHoursPeriod setBusinessHours($store_id, $delivery_type, $business_hours_period)



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
$delivery_type = "delivery_type_example"; // string | 
$business_hours_period = new \Flipdish\\Client\Models\BusinessHoursPeriodBase(); // \Flipdish\\Client\Models\BusinessHoursPeriodBase | 

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
 **store_id** | **int**|  |
 **delivery_type** | **string**|  |
 **business_hours_period** | [**\Flipdish\\Client\Models\BusinessHoursPeriodBase**](../Model/BusinessHoursPeriodBase.md)|  |

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
$delivery_type = "delivery_type_example"; // string | 
$enabled = true; // bool | 

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
 **store_id** | **int**|  |
 **delivery_type** | **string**|  |
 **enabled** | **bool**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRestApiDefaultResponse**](../Model/RestApiArrayResultRestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setStoreLeadTimes**
> \Flipdish\\Client\Models\RestApiResultOrderLeadTimes setStoreLeadTimes($store_id, $lead_time)



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
$lead_time = new \Flipdish\\Client\Models\LeadTime(); // \Flipdish\\Client\Models\LeadTime | 

try {
    $result = $apiInstance->setStoreLeadTimes($store_id, $lead_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->setStoreLeadTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **lead_time** | [**\Flipdish\\Client\Models\LeadTime**](../Model/LeadTime.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrderLeadTimes**](../Model/RestApiResultOrderLeadTimes.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storesSetPropertyId**
> object storesSetPropertyId($store_id, $property_id)



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
$property_id = "property_id_example"; // string | 

try {
    $result = $apiInstance->storesSetPropertyId($store_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->storesSetPropertyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **property_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supportedSalesChannelsTypes**
> supportedSalesChannelsTypes($property_id, $store_id, $sales_channel_types)



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
$property_id = "property_id_example"; // string | 
$store_id = 56; // int | 
$sales_channel_types = array(new \Flipdish\\Client\Models\string[]()); // string[] | 

try {
    $apiInstance->supportedSalesChannelsTypes($property_id, $store_id, $sales_channel_types);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->supportedSalesChannelsTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  |
 **store_id** | **int**|  |
 **sales_channel_types** | **string[]**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unpublishStore**
> unpublishStore($store_id)



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
 **store_id** | **int**|  |

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
$delivery_type = "delivery_type_example"; // string | 
$pre_order_config = new \Flipdish\\Client\Models\PreOrderConfig(); // \Flipdish\\Client\Models\PreOrderConfig | 

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
 **store_id** | **int**|  |
 **delivery_type** | **string**|  |
 **pre_order_config** | [**\Flipdish\\Client\Models\PreOrderConfig**](../Model/PreOrderConfig.md)|  |

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
$store = new \Flipdish\\Client\Models\StoreBase(); // \Flipdish\\Client\Models\StoreBase | 

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
 **store_id** | **int**|  |
 **store** | [**\Flipdish\\Client\Models\StoreBase**](../Model/StoreBase.md)|  |

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
$store_address = new \Flipdish\\Client\Models\StoreAddressBase(); // \Flipdish\\Client\Models\StoreAddressBase | 

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
 **store_id** | **int**|  |
 **store_address** | [**\Flipdish\\Client\Models\StoreAddressBase**](../Model/StoreAddressBase.md)|  |

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
$coordinates = new \Flipdish\\Client\Models\Coordinates(); // \Flipdish\\Client\Models\Coordinates | 
$app_name_id = "app_name_id_example"; // string | 

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
 **store_id** | **int**|  |
 **coordinates** | [**\Flipdish\\Client\Models\Coordinates**](../Model/Coordinates.md)|  |
 **app_name_id** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultCoordinates**](../Model/RestApiResultCoordinates.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreAddressForm**
> object updateStoreAddressForm($store_id, $address)



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
$address = new \Flipdish\\Client\Models\StoreAddressForm(); // \Flipdish\\Client\Models\StoreAddressForm | 

try {
    $result = $apiInstance->updateStoreAddressForm($store_id, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->updateStoreAddressForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **address** | [**\Flipdish\\Client\Models\StoreAddressForm**](../Model/StoreAddressForm.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


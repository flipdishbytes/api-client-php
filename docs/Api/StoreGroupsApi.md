# Flipdish\Client\StoreGroupsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStoreGroup**](StoreGroupsApi.md#createStoreGroup) | **POST** /api/v1.0/{appNameId}/storegroups | Creates a Store Group  It will be attached to an existing App
[**getStoreGroup**](StoreGroupsApi.md#getStoreGroup) | **GET** /api/v1.0/storegroups/{storeGroupId} | Returns a Store Groups
[**getStoreGroups**](StoreGroupsApi.md#getStoreGroups) | **GET** /api/v1.0/{appNameId}/storegroups | Returns a paginated list of Store Groups
[**removeStoreGroup**](StoreGroupsApi.md#removeStoreGroup) | **DELETE** /api/v1.0/storegroups/{storeGroupId} | Deletes a Store Group  Can only remove a store group if there is no stores attached to the group
[**updateStoreGroup**](StoreGroupsApi.md#updateStoreGroup) | **POST** /api/v1.0/storegroups/{storeGroupId} | Updates Store Group


# **createStoreGroup**
> \Flipdish\Client\Models\RestApiResultStoreGroup createStoreGroup($app_name_id, $store_group)

Creates a Store Group  It will be attached to an existing App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name_id = "app_name_id_example"; // string | App Name Id
$store_group = new \Flipdish\Client\Models\StoreGroupBase(); // \Flipdish\Client\Models\StoreGroupBase | Store group definition

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
 **app_name_id** | **string**| App Name Id |
 **store_group** | [**\Flipdish\Client\Models\StoreGroupBase**](../Model/StoreGroupBase.md)| Store group definition |

### Return type

[**\Flipdish\Client\Models\RestApiResultStoreGroup**](../Model/RestApiResultStoreGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreGroup**
> \Flipdish\Client\Models\RestApiResultStoreGroup getStoreGroup($store_group_id)

Returns a Store Groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | Store Group Id

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
 **store_group_id** | **int**| Store Group Id |

### Return type

[**\Flipdish\Client\Models\RestApiResultStoreGroup**](../Model/RestApiResultStoreGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreGroups**
> \Flipdish\Client\Models\RestApiPaginationResultStoreGroup getStoreGroups($app_name_id, $search_query, $page, $limit)

Returns a paginated list of Store Groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_name_id = "app_name_id_example"; // string | App Name Id
$search_query = "search_query_example"; // string | Search query
$page = 56; // int | Requested page index
$limit = 56; // int | Requested page limit

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
 **app_name_id** | **string**| App Name Id |
 **search_query** | **string**| Search query | [optional]
 **page** | **int**| Requested page index | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultStoreGroup**](../Model/RestApiPaginationResultStoreGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeStoreGroup**
> removeStoreGroup($store_group_id)

Deletes a Store Group  Can only remove a store group if there is no stores attached to the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | Store Group Id

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
 **store_group_id** | **int**| Store Group Id |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoreGroup**
> \Flipdish\Client\Models\RestApiResultStoreGroupBase updateStoreGroup($store_group_id, $store_group)

Updates Store Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\StoreGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_group_id = 56; // int | Store Group Id
$store_group = new \Flipdish\Client\Models\StoreGroupBase(); // \Flipdish\Client\Models\StoreGroupBase | Store Group Delta

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
 **store_group_id** | **int**| Store Group Id |
 **store_group** | [**\Flipdish\Client\Models\StoreGroupBase**](../Model/StoreGroupBase.md)| Store Group Delta |

### Return type

[**\Flipdish\Client\Models\RestApiResultStoreGroupBase**](../Model/RestApiResultStoreGroupBase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


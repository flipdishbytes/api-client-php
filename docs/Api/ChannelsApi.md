# Flipdish\\Client\ChannelsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignAppIdToSalesChannel**](ChannelsApi.md#assignAppIdToSalesChannel) | **POST** /api/v1.0/{appId}/channels/{channelId}/assign-appId | Assign a given AppId to a Sales Channel
[**assignStoreToChannel**](ChannelsApi.md#assignStoreToChannel) | **POST** /api/v1.0/{appId}/channels/assign-store | Assign a Store to a Sales Channel
[**attachStoreToSalesChannel**](ChannelsApi.md#attachStoreToSalesChannel) | **POST** /api/v1.0/{appId}/channels/{channelId}/stores/{storeId} | Attachs the specified store to the given sales channel.
[**channelsGetStoreChannelStoreMapping**](ChannelsApi.md#channelsGetStoreChannelStoreMapping) | **GET** /api/v1.0/{appId}/channels/channelstores | 
[**channelsSetStoreChannelStoreMapping**](ChannelsApi.md#channelsSetStoreChannelStoreMapping) | **POST** /api/v1.0/{appId}/channels/channelstores | 
[**detachAllStoresFromSalesChannel**](ChannelsApi.md#detachAllStoresFromSalesChannel) | **DELETE** /api/v1.0/{appId}/channels/{channelId}/stores | Detaches all the stores from the given sales channel.
[**detachStoreFromSalesChannel**](ChannelsApi.md#detachStoreFromSalesChannel) | **DELETE** /api/v1.0/{appId}/channels/{channelId}/stores/{storeId} | Detaches the specified store from the given sales channel.
[**getAssignedChannels**](ChannelsApi.md#getAssignedChannels) | **GET** /api/v1.0/{appId}/channels/assigned-channels | Returns a list of sales channels that are assigned to a given whitelabel
[**getChannel**](ChannelsApi.md#getChannel) | **GET** /api/v1.0/{appId}/channels/{id} | 
[**getChannels**](ChannelsApi.md#getChannels) | **GET** /api/v1.0/{appId}/channels | 
[**getNotAssignedChannels**](ChannelsApi.md#getNotAssignedChannels) | **GET** /api/v1.0/{appId}/channels/available-channels | Returns a list of sales channels that are not yet assigned to a given whitelabel
[**getStoresAssignedToChannel**](ChannelsApi.md#getStoresAssignedToChannel) | **GET** /api/v1.0/{appId}/channels/{channelId}/assigned-stores | Returns a list of store that are assigned to the given sales channel.
[**getStoresBySalesChannel**](ChannelsApi.md#getStoresBySalesChannel) | **GET** /api/v1.0/{appId}/channels/{channelId}/stores | Returns a list of store ids attached to the given channel type for the specified app.
[**unassignStoreFromChannel**](ChannelsApi.md#unassignStoreFromChannel) | **POST** /api/v1.0/{appId}/channels/unassign-store | Unassign a Store from a Sales Channel


# **assignAppIdToSalesChannel**
> object assignAppIdToSalesChannel($app_id, $channel_id)

Assign a given AppId to a Sales Channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameIdxxx)
$channel_id = 56; // int | Channel Id (123, 456)

try {
    $result = $apiInstance->assignAppIdToSalesChannel($app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->assignAppIdToSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameIdxxx) |
 **channel_id** | **int**| Channel Id (123, 456) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignStoreToChannel**
> object assignStoreToChannel($store_id, $app_id, $channel_id)

Assign a Store to a Sales Channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Id (123, 456)
$app_id = "app_id_example"; // string | AppId (AppNameIdxxx)
$channel_id = 56; // int | Channel Id (123, 456)

try {
    $result = $apiInstance->assignStoreToChannel($store_id, $app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->assignStoreToChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store Id (123, 456) |
 **app_id** | **string**| AppId (AppNameIdxxx) |
 **channel_id** | **int**| Channel Id (123, 456) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachStoreToSalesChannel**
> object attachStoreToSalesChannel($app_id, $channel_id, $store_id)

Attachs the specified store to the given sales channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameId)
$channel_id = 56; // int | Type of sales channel (Android, IOS, Web, etc.)
$store_id = 56; // int | Store Id (Phyisical Restaurant) to attach.

try {
    $result = $apiInstance->attachStoreToSalesChannel($app_id, $channel_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->attachStoreToSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameId) |
 **channel_id** | **int**| Type of sales channel (Android, IOS, Web, etc.) |
 **store_id** | **int**| Store Id (Phyisical Restaurant) to attach. |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsGetStoreChannelStoreMapping**
> \Flipdish\\Client\Models\RestApiArrayResultStoreChannelStoreMapping channelsGetStoreChannelStoreMapping($app_id, $channel_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$channel_id = 56; // int | 

try {
    $result = $apiInstance->channelsGetStoreChannelStoreMapping($app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsGetStoreChannelStoreMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **channel_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultStoreChannelStoreMapping**](../Model/RestApiArrayResultStoreChannelStoreMapping.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsSetStoreChannelStoreMapping**
> \Flipdish\\Client\Models\RestApiArrayResultStoreChannelStoreMapping channelsSetStoreChannelStoreMapping($app_id, $channel_id, $stores)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$channel_id = 56; // int | 
$stores = array(new \Flipdish\\Client\Models\ChannelStoreMapping()); // \Flipdish\\Client\Models\ChannelStoreMapping[] | 

try {
    $result = $apiInstance->channelsSetStoreChannelStoreMapping($app_id, $channel_id, $stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSetStoreChannelStoreMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **channel_id** | **int**|  |
 **stores** | [**\Flipdish\\Client\Models\ChannelStoreMapping[]**](../Model/ChannelStoreMapping.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultStoreChannelStoreMapping**](../Model/RestApiArrayResultStoreChannelStoreMapping.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachAllStoresFromSalesChannel**
> object detachAllStoresFromSalesChannel($app_id, $channel_id)

Detaches all the stores from the given sales channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameId)
$channel_id = 56; // int | Type of sales channel (Android, IOS, Web, etc.)

try {
    $result = $apiInstance->detachAllStoresFromSalesChannel($app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->detachAllStoresFromSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameId) |
 **channel_id** | **int**| Type of sales channel (Android, IOS, Web, etc.) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachStoreFromSalesChannel**
> object detachStoreFromSalesChannel($app_id, $channel_id, $store_id)

Detaches the specified store from the given sales channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameId)
$channel_id = 56; // int | Type of sales channel (Android, IOS, Web, etc.)
$store_id = 56; // int | Store Id (Phyisical Restaurant) to detach.

try {
    $result = $apiInstance->detachStoreFromSalesChannel($app_id, $channel_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->detachStoreFromSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameId) |
 **channel_id** | **int**| Type of sales channel (Android, IOS, Web, etc.) |
 **store_id** | **int**| Store Id (Phyisical Restaurant) to detach. |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssignedChannels**
> object getAssignedChannels($app_id)

Returns a list of sales channels that are assigned to a given whitelabel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameIdxxx)

try {
    $result = $apiInstance->getAssignedChannels($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getAssignedChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameIdxxx) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannel**
> \Flipdish\\Client\Models\RestApiPaginationResultChannel getChannel($id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getChannel($id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultChannel**](../Model/RestApiPaginationResultChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannels**
> \Flipdish\\Client\Models\RestApiPaginationResultChannel getChannels($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getChannels($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultChannel**](../Model/RestApiPaginationResultChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotAssignedChannels**
> object getNotAssignedChannels($app_id)

Returns a list of sales channels that are not yet assigned to a given whitelabel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameIdxxx)

try {
    $result = $apiInstance->getNotAssignedChannels($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getNotAssignedChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameIdxxx) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresAssignedToChannel**
> object getStoresAssignedToChannel($app_id, $channel_id)

Returns a list of store that are assigned to the given sales channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameId)
$channel_id = 56; // int | Sales channel (Android, IOS, Web, etc.)

try {
    $result = $apiInstance->getStoresAssignedToChannel($app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getStoresAssignedToChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameId) |
 **channel_id** | **int**| Sales channel (Android, IOS, Web, etc.) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoresBySalesChannel**
> \Flipdish\\Client\Models\Response getStoresBySalesChannel($app_id, $channel_id)

Returns a list of store ids attached to the given channel type for the specified app.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application Id (AppNameId)
$channel_id = 56; // int | Type of sales channel (Android, IOS, Web, etc.)

try {
    $result = $apiInstance->getStoresBySalesChannel($app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getStoresBySalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application Id (AppNameId) |
 **channel_id** | **int**| Type of sales channel (Android, IOS, Web, etc.) |

### Return type

[**\Flipdish\\Client\Models\Response**](../Model/Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignStoreFromChannel**
> object unassignStoreFromChannel($store_id, $app_id, $channel_id)

Unassign a Store from a Sales Channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | Store Id (123, 456)
$app_id = "app_id_example"; // string | AppId (AppNameIdxxx)
$channel_id = 56; // int | Channel Id (123, 456)

try {
    $result = $apiInstance->unassignStoreFromChannel($store_id, $app_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->unassignStoreFromChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**| Store Id (123, 456) |
 **app_id** | **string**| AppId (AppNameIdxxx) |
 **channel_id** | **int**| Channel Id (123, 456) |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


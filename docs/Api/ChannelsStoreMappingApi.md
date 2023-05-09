# Flipdish\\Client\ChannelsStoreMappingApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsGetStoreChannelStoreMapping**](ChannelsStoreMappingApi.md#channelsGetStoreChannelStoreMapping) | **GET** /api/v1.0/{appId}/channels/storemappings | 
[**channelsSetStoreChannelStoreMapping**](ChannelsStoreMappingApi.md#channelsSetStoreChannelStoreMapping) | **POST** /api/v1.0/{appId}/channels/storemappings | 


# **channelsGetStoreChannelStoreMapping**
> \Flipdish\\Client\Models\RestApiArrayResultStoreChannelStoreMapping channelsGetStoreChannelStoreMapping($app_id, $channel_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\ChannelsStoreMappingApi(
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
    echo 'Exception when calling ChannelsStoreMappingApi->channelsGetStoreChannelStoreMapping: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Flipdish\\Client\Api\ChannelsStoreMappingApi(
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
    echo 'Exception when calling ChannelsStoreMappingApi->channelsSetStoreChannelStoreMapping: ', $e->getMessage(), PHP_EOL;
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


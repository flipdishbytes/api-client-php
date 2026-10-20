# Flipdish\\Client\WebOrderPageApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWebOrderPage**](WebOrderPageApi.md#getWebOrderPage) | **GET** /api/v1.0/apps/{appId}/weborderpage | 
[**setWebOrderPage**](WebOrderPageApi.md#setWebOrderPage) | **POST** /api/v1.0/apps/{appId}/weborderpage | 


# **getWebOrderPage**
> \Flipdish\\Client\Models\RestApiResultWebOrderPage getWebOrderPage($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebOrderPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getWebOrderPage($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebOrderPageApi->getWebOrderPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultWebOrderPage**](../Model/RestApiResultWebOrderPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setWebOrderPage**
> setWebOrderPage($app_id, $set_web_order_page)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebOrderPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$set_web_order_page = new \Flipdish\\Client\Models\SetWebOrderPage(); // \Flipdish\\Client\Models\SetWebOrderPage | 

try {
    $apiInstance->setWebOrderPage($app_id, $set_web_order_page);
} catch (Exception $e) {
    echo 'Exception when calling WebOrderPageApi->setWebOrderPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **set_web_order_page** | [**\Flipdish\\Client\Models\SetWebOrderPage**](../Model/SetWebOrderPage.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


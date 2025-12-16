# Flipdish\\Client\AppStoreEntitlementsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppStoreAppEntitlements**](AppStoreEntitlementsApi.md#getAppStoreAppEntitlements) | **GET** /api/v1.0/{appId}/appstore/apps/{appStoreAppId}/entitlements | 


# **getAppStoreAppEntitlements**
> \Flipdish\\Client\Models\RestApiResultAppStoreAppEntitlements getAppStoreAppEntitlements($app_id, $app_store_app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $result = $apiInstance->getAppStoreAppEntitlements($app_id, $app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreEntitlementsApi->getAppStoreAppEntitlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreAppEntitlements**](../Model/RestApiResultAppStoreAppEntitlements.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


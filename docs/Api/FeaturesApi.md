# Flipdish\\Client\FeaturesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disableFeatures**](FeaturesApi.md#disableFeatures) | **POST** /api/v1.0/{appId}/features/disable | 
[**enableFeatures**](FeaturesApi.md#enableFeatures) | **POST** /api/v1.0/{appId}/features/enable | 


# **disableFeatures**
> \Flipdish\\Client\Models\RestApiStringArrayResult disableFeatures($app_id, $features)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$features = array(new \Flipdish\\Client\Models\string[]()); // string[] | 

try {
    $result = $apiInstance->disableFeatures($app_id, $features);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->disableFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **features** | **string[]**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableFeatures**
> \Flipdish\\Client\Models\RestApiStringArrayResult enableFeatures($app_id, $features)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$features = array(new \Flipdish\\Client\Models\string[]()); // string[] | 

try {
    $result = $apiInstance->enableFeatures($app_id, $features);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->enableFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **features** | **string[]**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


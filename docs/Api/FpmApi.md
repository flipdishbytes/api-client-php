# Flipdish\\Client\FpmApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFpmForStore**](FpmApi.md#createFpmForStore) | **POST** /api/v1.0/{storeId}/fpm | 
[**editFpmForStore**](FpmApi.md#editFpmForStore) | **POST** /api/v1.0/{storeId}/fpm/edit | 


# **createFpmForStore**
> object createFpmForStore($store_id, $phone_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$phone_number = "phone_number_example"; // string | 

try {
    $result = $apiInstance->createFpmForStore($store_id, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FpmApi->createFpmForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **phone_number** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editFpmForStore**
> editFpmForStore($store_id, $telephony_config)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 56; // int | 
$telephony_config = new \Flipdish\\Client\Models\TelephonyConfig(); // \Flipdish\\Client\Models\TelephonyConfig | 

try {
    $apiInstance->editFpmForStore($store_id, $telephony_config);
} catch (Exception $e) {
    echo 'Exception when calling FpmApi->editFpmForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |
 **telephony_config** | [**\Flipdish\\Client\Models\TelephonyConfig**](../Model/TelephonyConfig.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


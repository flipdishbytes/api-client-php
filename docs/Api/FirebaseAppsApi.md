# Flipdish\\Client\FirebaseAppsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFirebaseApp**](FirebaseAppsApi.md#addFirebaseApp) | **POST** /api/v1.0/FirebaseApp | 
[**deleteFirebaseApp**](FirebaseAppsApi.md#deleteFirebaseApp) | **DELETE** /api/v1.0/FirebaseApp/{whiteLabelId} | 
[**getFirebaseApp**](FirebaseAppsApi.md#getFirebaseApp) | **GET** /api/v1.0/FirebaseApp/{whitelabelId} | 


# **addFirebaseApp**
> object addFirebaseApp($firebase_app)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FirebaseAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firebase_app = new \Flipdish\\Client\Models\FirebaseApp(); // \Flipdish\\Client\Models\FirebaseApp | 

try {
    $result = $apiInstance->addFirebaseApp($firebase_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseAppsApi->addFirebaseApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firebase_app** | [**\Flipdish\\Client\Models\FirebaseApp**](../Model/FirebaseApp.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFirebaseApp**
> object deleteFirebaseApp($white_label_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FirebaseAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$white_label_id = 56; // int | 

try {
    $result = $apiInstance->deleteFirebaseApp($white_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseAppsApi->deleteFirebaseApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **white_label_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFirebaseApp**
> getFirebaseApp($whitelabel_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\FirebaseAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whitelabel_id = 56; // int | 

try {
    $apiInstance->getFirebaseApp($whitelabel_id);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseAppsApi->getFirebaseApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whitelabel_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


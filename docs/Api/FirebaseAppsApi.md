# Flipdish\\Client\FirebaseAppsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**firebaseAppsAddFirebaseApp**](FirebaseAppsApi.md#firebaseAppsAddFirebaseApp) | **POST** /api/v1.0/FirebaseApp | 
[**firebaseAppsDeleteFirebaseApp**](FirebaseAppsApi.md#firebaseAppsDeleteFirebaseApp) | **DELETE** /api/v1.0/FirebaseApp/{whiteLabelId} | 
[**firebaseAppsGetFirebaseApp**](FirebaseAppsApi.md#firebaseAppsGetFirebaseApp) | **GET** /api/v1.0/FirebaseApp/{whitelabelId} | 


# **firebaseAppsAddFirebaseApp**
> object firebaseAppsAddFirebaseApp($firebase_app)



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
    $result = $apiInstance->firebaseAppsAddFirebaseApp($firebase_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseAppsApi->firebaseAppsAddFirebaseApp: ', $e->getMessage(), PHP_EOL;
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

# **firebaseAppsDeleteFirebaseApp**
> object firebaseAppsDeleteFirebaseApp($white_label_id)



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
    $result = $apiInstance->firebaseAppsDeleteFirebaseApp($white_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseAppsApi->firebaseAppsDeleteFirebaseApp: ', $e->getMessage(), PHP_EOL;
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

# **firebaseAppsGetFirebaseApp**
> object firebaseAppsGetFirebaseApp($whitelabel_id)



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
    $result = $apiInstance->firebaseAppsGetFirebaseApp($whitelabel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseAppsApi->firebaseAppsGetFirebaseApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whitelabel_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


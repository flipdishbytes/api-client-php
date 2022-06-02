# Flipdish\\Client\AppStoreDeveloperApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appVerificationUpdate**](AppStoreDeveloperApi.md#appVerificationUpdate) | **PUT** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/verification | Update App store app verification
[**createAppStoreApp**](AppStoreDeveloperApi.md#createAppStoreApp) | **POST** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps | Create App store app
[**deleteAppStoreApp**](AppStoreDeveloperApi.md#deleteAppStoreApp) | **DELETE** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId} | Delete App store app
[**updateAppStoreApp**](AppStoreDeveloperApi.md#updateAppStoreApp) | **PUT** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId} | Update App store app
[**uploadAppStoreAppLogo**](AppStoreDeveloperApi.md#uploadAppStoreAppLogo) | **POST** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/logo | Upload the App store app logo \\ icon


# **appVerificationUpdate**
> appVerificationUpdate($oauth_app_id, $app_store_app_id, $verification_status)

Update App store app verification

[BETA - this endpoint is under development, do not use it in your production system][Note: Only Flipdish staff can verify apps]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | OAuth App identifier
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$verification_status = "verification_status_example"; // string | New verification status

try {
    $apiInstance->appVerificationUpdate($oauth_app_id, $app_store_app_id, $verification_status);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->appVerificationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| OAuth App identifier |
 **app_store_app_id** | **string**| App store app id |
 **verification_status** | **string**| New verification status |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppStoreApp**
> \Flipdish\\Client\Models\RestApiResultAppStoreApp createAppStoreApp($oauth_app_id, $create_app_store_app)

Create App store app

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | OAuth App identifier
$create_app_store_app = new \Flipdish\\Client\Models\CreateAppStoreApp(); // \Flipdish\\Client\Models\CreateAppStoreApp | App store app

try {
    $result = $apiInstance->createAppStoreApp($oauth_app_id, $create_app_store_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->createAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| OAuth App identifier |
 **create_app_store_app** | [**\Flipdish\\Client\Models\CreateAppStoreApp**](../Model/CreateAppStoreApp.md)| App store app |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppStoreApp**](../Model/RestApiResultAppStoreApp.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppStoreApp**
> \Flipdish\\Client\Models\RestApiStringResult deleteAppStoreApp($oauth_app_id, $app_store_app_id)

Delete App store app

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | OAuth App identifier
$app_store_app_id = "app_store_app_id_example"; // string | App store app id

try {
    $result = $apiInstance->deleteAppStoreApp($oauth_app_id, $app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->deleteAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| OAuth App identifier |
 **app_store_app_id** | **string**| App store app id |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreApp**
> updateAppStoreApp($oauth_app_id, $app_store_app_id, $app_store_app)

Update App store app

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | OAuth App identifier
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$app_store_app = new \Flipdish\\Client\Models\UpdateAppStoreApp(); // \Flipdish\\Client\Models\UpdateAppStoreApp | Update App store app

try {
    $apiInstance->updateAppStoreApp($oauth_app_id, $app_store_app_id, $app_store_app);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->updateAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| OAuth App identifier |
 **app_store_app_id** | **string**| App store app id |
 **app_store_app** | [**\Flipdish\\Client\Models\UpdateAppStoreApp**](../Model/UpdateAppStoreApp.md)| Update App store app |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAppStoreAppLogo**
> uploadAppStoreAppLogo($oauth_app_id, $app_store_app_id, $image)

Upload the App store app logo \\ icon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | OAuth App identifier
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$image = "/path/to/file.txt"; // \SplFileObject | App Store App Logo

try {
    $apiInstance->uploadAppStoreAppLogo($oauth_app_id, $app_store_app_id, $image);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->uploadAppStoreAppLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| OAuth App identifier |
 **app_store_app_id** | **string**| App store app id |
 **image** | **\SplFileObject**| App Store App Logo |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


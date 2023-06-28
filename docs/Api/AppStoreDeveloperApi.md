# Flipdish\\Client\AppStoreDeveloperApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appVerificationUpdate**](AppStoreDeveloperApi.md#appVerificationUpdate) | **PUT** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/verification | 
[**createAppStoreApp**](AppStoreDeveloperApi.md#createAppStoreApp) | **POST** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps | 
[**deleteAppStoreApp**](AppStoreDeveloperApi.md#deleteAppStoreApp) | **DELETE** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId} | 
[**getAppExternalProduct**](AppStoreDeveloperApi.md#getAppExternalProduct) | **GET** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/external_product | 
[**getExternalFunctionSigningKey**](AppStoreDeveloperApi.md#getExternalFunctionSigningKey) | **GET** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/external_function_signing_key | 
[**updateAppStoreApp**](AppStoreDeveloperApi.md#updateAppStoreApp) | **PUT** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId} | 
[**updateExternalProduct**](AppStoreDeveloperApi.md#updateExternalProduct) | **PUT** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/external_product | 
[**uploadAppStoreAppLogo**](AppStoreDeveloperApi.md#uploadAppStoreAppLogo) | **POST** /api/v1.0/oauthclients/{oauthAppId}/appstore/apps/{appStoreAppId}/logo | 


# **appVerificationUpdate**
> appVerificationUpdate($oauth_app_id, $app_store_app_id, $verification_status)



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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$verification_status = "verification_status_example"; // string | 

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
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **verification_status** | **string**|  |

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
$oauth_app_id = "oauth_app_id_example"; // string | 
$create_app_store_app = new \Flipdish\\Client\Models\CreateAppStoreApp(); // \Flipdish\\Client\Models\CreateAppStoreApp | 

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
 **oauth_app_id** | **string**|  |
 **create_app_store_app** | [**\Flipdish\\Client\Models\CreateAppStoreApp**](../Model/CreateAppStoreApp.md)|  |

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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

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
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppExternalProduct**
> getAppExternalProduct($oauth_app_id, $app_store_app_id)



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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $apiInstance->getAppExternalProduct($oauth_app_id, $app_store_app_id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->getAppExternalProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalFunctionSigningKey**
> getExternalFunctionSigningKey($oauth_app_id, $app_store_app_id)



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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 

try {
    $apiInstance->getExternalFunctionSigningKey($oauth_app_id, $app_store_app_id);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->getExternalFunctionSigningKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreApp**
> updateAppStoreApp($oauth_app_id, $app_store_app_id, $app_store_app)



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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$app_store_app = new \Flipdish\\Client\Models\UpdateAppStoreApp(); // \Flipdish\\Client\Models\UpdateAppStoreApp | 

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
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **app_store_app** | [**\Flipdish\\Client\Models\UpdateAppStoreApp**](../Model/UpdateAppStoreApp.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalProduct**
> updateExternalProduct($oauth_app_id, $app_store_app_id, $app_store_app_external_product)



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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
$app_store_app_external_product = new \Flipdish\\Client\Models\UpdateAppStoreAppExternalProduct(); // \Flipdish\\Client\Models\UpdateAppStoreAppExternalProduct | 

try {
    $apiInstance->updateExternalProduct($oauth_app_id, $app_store_app_id, $app_store_app_external_product);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreDeveloperApi->updateExternalProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **app_store_app_external_product** | [**\Flipdish\\Client\Models\UpdateAppStoreAppExternalProduct**](../Model/UpdateAppStoreAppExternalProduct.md)|  |

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
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_store_app_id = "app_store_app_id_example"; // string | 
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
 **oauth_app_id** | **string**|  |
 **app_store_app_id** | **string**|  |
 **image** | **\SplFileObject**| App Store App Logo |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


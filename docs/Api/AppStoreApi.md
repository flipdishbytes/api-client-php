# Flipdish\\Client\AppStoreApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appVerificationUpdate**](AppStoreApi.md#appVerificationUpdate) | **PUT** /api/v1.0/appstore/apps/{appStoreAppId}/verification | Update app store app verification
[**createAppStoreApp**](AppStoreApi.md#createAppStoreApp) | **POST** /api/v1.0/appstore/apps | Create app store app
[**deleteAppStoreApp**](AppStoreApi.md#deleteAppStoreApp) | **DELETE** /api/v1.0/appstore/apps/{appStoreAppId} | Delete app store app
[**getAppStoreApp**](AppStoreApi.md#getAppStoreApp) | **GET** /api/v1.0/appstore/apps/{appStoreAppId} | Get app store app details
[**getAppStoreApps**](AppStoreApi.md#getAppStoreApps) | **GET** /api/v1.0/appstore/apps | Get list of app store app summaries
[**updateAppStoreApp**](AppStoreApi.md#updateAppStoreApp) | **PUT** /api/v1.0/appstore/apps/{appStoreAppId} | Update app store app
[**uploadAppStoreAppLogo**](AppStoreApi.md#uploadAppStoreAppLogo) | **POST** /api/v1.0/appstore/apps/{appStoreAppId}/logo | Upload the app store app logo \\ icon


# **appVerificationUpdate**
> appVerificationUpdate($app_store_app_id, $verification_status)

Update app store app verification

[BETA - this endpoint is under development, do not use it in your production system][Note: Only Flipdish staff can verify apps]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id
$verification_status = "verification_status_example"; // string | New Verification Status

try {
    $apiInstance->appVerificationUpdate($app_store_app_id, $verification_status);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->appVerificationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**| App Store App Id |
 **verification_status** | **string**| New Verification Status |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppStoreApp**
> \Flipdish\\Client\Models\RestApiResultAppDetail createAppStoreApp($app_detail_base)

Create app store app

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_detail_base = new \Flipdish\\Client\Models\AppDetailBase(); // \Flipdish\\Client\Models\AppDetailBase | App Store App Detail Base

try {
    $result = $apiInstance->createAppStoreApp($app_detail_base);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->createAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_detail_base** | [**\Flipdish\\Client\Models\AppDetailBase**](../Model/AppDetailBase.md)| App Store App Detail Base |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAppDetail**](../Model/RestApiResultAppDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppStoreApp**
> \Flipdish\\Client\Models\RestApiStringResult deleteAppStoreApp($app_store_app_id)

Delete app store app

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id

try {
    $result = $apiInstance->deleteAppStoreApp($app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->deleteAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**| App Store App Id |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreApp**
> \Flipdish\\Client\Models\AppDetail getAppStoreApp($app_store_app_id)

Get app store app details

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id

try {
    $result = $apiInstance->getAppStoreApp($app_store_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->getAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**| App Store App Id |

### Return type

[**\Flipdish\\Client\Models\AppDetail**](../Model/AppDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreApps**
> \Flipdish\\Client\Models\RestApiPaginationResultAppSummary getAppStoreApps($search, $page, $limit, $exclude_not_owned)

Get list of app store app summaries

Only returns verified applications [BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | Query app store app name
$page = 56; // int | Requested page index
$limit = 56; // int | Requested page limit
$exclude_not_owned = true; // bool | Exclude app store apps that user is not the owner off

try {
    $result = $apiInstance->getAppStoreApps($search, $page, $limit, $exclude_not_owned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->getAppStoreApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Query app store app name |
 **page** | **int**| Requested page index | [optional]
 **limit** | **int**| Requested page limit | [optional]
 **exclude_not_owned** | **bool**| Exclude app store apps that user is not the owner off | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultAppSummary**](../Model/RestApiPaginationResultAppSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreApp**
> updateAppStoreApp($app_store_app_id, $app_detail)

Update app store app

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id
$app_detail = new \Flipdish\\Client\Models\AppDetail(); // \Flipdish\\Client\Models\AppDetail | App Store App Detail

try {
    $apiInstance->updateAppStoreApp($app_store_app_id, $app_detail);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->updateAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**| App Store App Id |
 **app_detail** | [**\Flipdish\\Client\Models\AppDetail**](../Model/AppDetail.md)| App Store App Detail |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAppStoreAppLogo**
> uploadAppStoreAppLogo($app_store_app_id, $image)

Upload the app store app logo \\ icon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AppStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_store_app_id = "app_store_app_id_example"; // string | App Store App Id
$image = "/path/to/file.txt"; // \SplFileObject | App Store App Logo

try {
    $apiInstance->uploadAppStoreAppLogo($app_store_app_id, $image);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->uploadAppStoreAppLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_store_app_id** | **string**| App Store App Id |
 **image** | **\SplFileObject**| App Store App Logo |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


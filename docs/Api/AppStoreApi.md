# Flipdish\\Client\AppStoreApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appVerificationUpdate**](AppStoreApi.md#appVerificationUpdate) | **PUT** /api/v1.0/appstore/apps/{appStoreAppId}/verification | Update App store app verification
[**createAppStoreApp**](AppStoreApi.md#createAppStoreApp) | **POST** /api/v1.0/appstore/apps | Create App store app
[**deleteAppStoreApp**](AppStoreApi.md#deleteAppStoreApp) | **DELETE** /api/v1.0/appstore/apps/{appStoreAppId} | Delete App store app
[**getAppStoreApp**](AppStoreApi.md#getAppStoreApp) | **GET** /api/v1.0/appstore/apps/{appStoreAppId} | Get App store app
[**getAppStoreApps**](AppStoreApi.md#getAppStoreApps) | **GET** /api/v1.0/appstore/apps | Get list of App store app summaries
[**updateAppStoreApp**](AppStoreApi.md#updateAppStoreApp) | **PUT** /api/v1.0/appstore/apps/{appStoreAppId} | Update App store app
[**uploadAppStoreAppLogo**](AppStoreApi.md#uploadAppStoreAppLogo) | **POST** /api/v1.0/appstore/apps/{appStoreAppId}/logo | Upload the App store app logo \\ icon


# **appVerificationUpdate**
> appVerificationUpdate($app_store_app_id, $verification_status)

Update App store app verification

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
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$verification_status = "verification_status_example"; // string | New verification status

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
 **app_store_app_id** | **string**| App store app id |
 **verification_status** | **string**| New verification status |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppStoreApp**
> \Flipdish\\Client\Models\RestApiResultAppStoreApp createAppStoreApp($create_app_store_app)

Create App store app

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
$create_app_store_app = new \Flipdish\\Client\Models\CreateAppStoreApp(); // \Flipdish\\Client\Models\CreateAppStoreApp | App store app

try {
    $result = $apiInstance->createAppStoreApp($create_app_store_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->createAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> \Flipdish\\Client\Models\RestApiStringResult deleteAppStoreApp($app_store_app_id)

Delete App store app

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
$app_store_app_id = "app_store_app_id_example"; // string | App store app id

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
 **app_store_app_id** | **string**| App store app id |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreApp**
> \Flipdish\\Client\Models\AppStoreApp getAppStoreApp($app_store_app_id)

Get App store app

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
$app_store_app_id = "app_store_app_id_example"; // string | App store app id

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
 **app_store_app_id** | **string**| App store app id |

### Return type

[**\Flipdish\\Client\Models\AppStoreApp**](../Model/AppStoreApp.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppStoreApps**
> \Flipdish\\Client\Models\RestApiPaginationResultAppStoreAppSummary getAppStoreApps($search, $page, $limit, $exclude_not_owned)

Get list of App store app summaries

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
$search = "search_example"; // string | Query App store app name
$page = 56; // int | Requested page index
$limit = 56; // int | Requested page limit
$exclude_not_owned = true; // bool | Exclude App store apps that user is not the owner off

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
 **search** | **string**| Query App store app name |
 **page** | **int**| Requested page index | [optional]
 **limit** | **int**| Requested page limit | [optional]
 **exclude_not_owned** | **bool**| Exclude App store apps that user is not the owner off | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultAppStoreAppSummary**](../Model/RestApiPaginationResultAppStoreAppSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppStoreApp**
> updateAppStoreApp($app_store_app_id, $app_store_app)

Update App store app

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
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
$app_store_app = new \Flipdish\\Client\Models\UpdateAppStoreApp(); // \Flipdish\\Client\Models\UpdateAppStoreApp | Update App store app

try {
    $apiInstance->updateAppStoreApp($app_store_app_id, $app_store_app);
} catch (Exception $e) {
    echo 'Exception when calling AppStoreApi->updateAppStoreApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> uploadAppStoreAppLogo($app_store_app_id, $image)

Upload the App store app logo \\ icon

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
$app_store_app_id = "app_store_app_id_example"; // string | App store app id
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


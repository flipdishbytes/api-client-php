# Flipdish\\Client\OAuthClientsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRedirectUri**](OAuthClientsApi.md#addRedirectUri) | **POST** /api/v1.0/{appId}/oauthclients/{oauthAppId}/redirecturis | 
[**createOAuthApp**](OAuthClientsApi.md#createOAuthApp) | **POST** /api/v1.0/{appId}/oauthclients | 
[**deleteOAuthApp**](OAuthClientsApi.md#deleteOAuthApp) | **DELETE** /api/v1.0/{appId}/oauthclients/{oauthAppId} | 
[**getOAuthApps**](OAuthClientsApi.md#getOAuthApps) | **GET** /api/v1.0/{appId}/oauthclients | 
[**getOAuthClientByClientId**](OAuthClientsApi.md#getOAuthClientByClientId) | **GET** /api/v1.0/{appId}/oauthclients/{oauthAppId} | 
[**getOAuthClientSecret**](OAuthClientsApi.md#getOAuthClientSecret) | **GET** /api/v1.0/{appId}/oauthclients/{oauthAppId}/secret | 
[**getOauthAccessToken**](OAuthClientsApi.md#getOauthAccessToken) | **GET** /api/v1.0/{appId}/oauthclients/{oauthAppId}/accesstoken | 
[**getRedirectUris**](OAuthClientsApi.md#getRedirectUris) | **GET** /api/v1.0/{appId}/oauthclients/{oauthAppId}/redirecturis | 
[**oAuthClientsGetApplications**](OAuthClientsApi.md#oAuthClientsGetApplications) | **GET** /api/v1.0/{appId}/oauthclients/appnames | 
[**removeRedirectUri**](OAuthClientsApi.md#removeRedirectUri) | **DELETE** /api/v1.0/{appId}/oauthclients/{oauthAppId}/redirecturis/{uriId} | 
[**updateOAuthApp**](OAuthClientsApi.md#updateOAuthApp) | **POST** /api/v1.0/{appId}/oauthclients/{oauthAppId} | 


# **addRedirectUri**
> \Flipdish\\Client\Models\RestApiResultOauthClientRedirectUri addRedirectUri($oauth_app_id, $uri, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$uri = "uri_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->addRedirectUri($oauth_app_id, $uri, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->addRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **uri** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOauthClientRedirectUri**](../Model/RestApiResultOauthClientRedirectUri.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthApp**
> createOAuthApp($o_auth_app, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_app = new \Flipdish\\Client\Models\OAuthApp(); // \Flipdish\\Client\Models\OAuthApp | 
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->createOAuthApp($o_auth_app, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->createOAuthApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_app** | [**\Flipdish\\Client\Models\OAuthApp**](../Model/OAuthApp.md)|  |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthApp**
> deleteOAuthApp($oauth_app_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->deleteOAuthApp($oauth_app_id, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->deleteOAuthApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthApps**
> \Flipdish\\Client\Models\RestApiArrayResultOAuthApp getOAuthApps($app_id, $oauth_app_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$oauth_app_name = "oauth_app_name_example"; // string | 

try {
    $result = $apiInstance->getOAuthApps($app_id, $oauth_app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **oauth_app_name** | **string**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOAuthApp**](../Model/RestApiArrayResultOAuthApp.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClientByClientId**
> \Flipdish\\Client\Models\RestApiResultOAuthApp getOAuthClientByClientId($oauth_app_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getOAuthClientByClientId($oauth_app_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClientByClientId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOAuthApp**](../Model/RestApiResultOAuthApp.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClientSecret**
> \Flipdish\\Client\Models\RestApiStringResult getOAuthClientSecret($oauth_app_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getOAuthClientSecret($oauth_app_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClientSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOauthAccessToken**
> \Flipdish\\Client\Models\RestApiStringResult getOauthAccessToken($oauth_app_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getOauthAccessToken($oauth_app_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOauthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRedirectUris**
> \Flipdish\\Client\Models\RestApiArrayResultOauthClientRedirectUri getRedirectUris($oauth_app_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getRedirectUris($oauth_app_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getRedirectUris: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultOauthClientRedirectUri**](../Model/RestApiArrayResultOauthClientRedirectUri.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oAuthClientsGetApplications**
> object oAuthClientsGetApplications($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->oAuthClientsGetApplications($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->oAuthClientsGetApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeRedirectUri**
> removeRedirectUri($oauth_app_id, $uri_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$uri_id = 56; // int | 
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->removeRedirectUri($oauth_app_id, $uri_id, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->removeRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **uri_id** | **int**|  |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOAuthApp**
> updateOAuthApp($oauth_app_id, $o_auth_app, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | 
$o_auth_app = new \Flipdish\\Client\Models\OAuthApp(); // \Flipdish\\Client\Models\OAuthApp | 
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->updateOAuthApp($oauth_app_id, $o_auth_app, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->updateOAuthApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**|  |
 **o_auth_app** | [**\Flipdish\\Client\Models\OAuthApp**](../Model/OAuthApp.md)|  |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


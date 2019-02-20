# Flipdish\Client\OAuthClientsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRedirectUri**](OAuthClientsApi.md#addRedirectUri) | **POST** /api/v1.0/oauthclients/{oAuthClientId}/redirecturis | Create OAuth client redirect uri
[**createOAuthClient**](OAuthClientsApi.md#createOAuthClient) | **POST** /api/v1.0/oauthclients | Create OAuth client
[**deleteOAuthClient**](OAuthClientsApi.md#deleteOAuthClient) | **DELETE** /api/v1.0/oauthclients/{oAuthClientId} | Delete OAuth client
[**getOAuthClientByClientId**](OAuthClientsApi.md#getOAuthClientByClientId) | **GET** /api/v1.0/oauthclients/{clientId} | Get OAuth client by identifier
[**getOAuthClientSecret**](OAuthClientsApi.md#getOAuthClientSecret) | **GET** /api/v1.0/oauthclients/{clientId}/secret | Get OAuth client secret key
[**getOAuthClients**](OAuthClientsApi.md#getOAuthClients) | **GET** /api/v1.0/oauthclients | Get all OAuth client
[**getOauthAccessToken**](OAuthClientsApi.md#getOauthAccessToken) | **GET** /api/v1.0/oauthclients/{oAuthClientId}/accesstoken | Get OAuth access token for client
[**getRedirectUris**](OAuthClientsApi.md#getRedirectUris) | **GET** /api/v1.0/oauthclients/{oAuthClientId}/redirecturis | Get OAuth client redirect uris
[**removeRedirectUri**](OAuthClientsApi.md#removeRedirectUri) | **DELETE** /api/v1.0/oauthclients/{oAuthClientId}/redirecturis/{uriId} | Delete OAuth client redirect uri


# **addRedirectUri**
> \Flipdish\Client\Models\RestApiResultOauthClientRedirectUri addRedirectUri($o_auth_client_id, $uri)

Create OAuth client redirect uri

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_client_id = "o_auth_client_id_example"; // string | OAuth client identifier
$uri = "uri_example"; // string | Redirect uri

try {
    $result = $apiInstance->addRedirectUri($o_auth_client_id, $uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->addRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_client_id** | **string**| OAuth client identifier |
 **uri** | **string**| Redirect uri |

### Return type

[**\Flipdish\Client\Models\RestApiResultOauthClientRedirectUri**](../Model/RestApiResultOauthClientRedirectUri.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOAuthClient**
> createOAuthClient($o_auth_client)

Create OAuth client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_client = new \Flipdish\Client\Models\OAuthClient(); // \Flipdish\Client\Models\OAuthClient | OAuth client

try {
    $apiInstance->createOAuthClient($o_auth_client);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_client** | [**\Flipdish\Client\Models\OAuthClient**](../Model/OAuthClient.md)| OAuth client |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClient**
> deleteOAuthClient($o_auth_client_id)

Delete OAuth client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_client_id = "o_auth_client_id_example"; // string | OAuth client identifier

try {
    $apiInstance->deleteOAuthClient($o_auth_client_id);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_client_id** | **string**| OAuth client identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClientByClientId**
> \Flipdish\Client\Models\RestApiResultOAuthClient getOAuthClientByClientId($client_id)

Get OAuth client by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | OAuth client identifier

try {
    $result = $apiInstance->getOAuthClientByClientId($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClientByClientId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| OAuth client identifier |

### Return type

[**\Flipdish\Client\Models\RestApiResultOAuthClient**](../Model/RestApiResultOAuthClient.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClientSecret**
> \Flipdish\Client\Models\RestApiStringResult getOAuthClientSecret($client_id)

Get OAuth client secret key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | OAuth client identifier

try {
    $result = $apiInstance->getOAuthClientSecret($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClientSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| OAuth client identifier |

### Return type

[**\Flipdish\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClients**
> \Flipdish\Client\Models\RestApiArrayResultOAuthClient getOAuthClients()

Get all OAuth client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOAuthClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOAuthClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultOAuthClient**](../Model/RestApiArrayResultOAuthClient.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOauthAccessToken**
> \Flipdish\Client\Models\RestApiStringResult getOauthAccessToken($o_auth_client_id)

Get OAuth access token for client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_client_id = "o_auth_client_id_example"; // string | OAuth client identifier

try {
    $result = $apiInstance->getOauthAccessToken($o_auth_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getOauthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_client_id** | **string**| OAuth client identifier |

### Return type

[**\Flipdish\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRedirectUris**
> \Flipdish\Client\Models\RestApiArrayResultOauthClientRedirectUri getRedirectUris($o_auth_client_id)

Get OAuth client redirect uris

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_client_id = "o_auth_client_id_example"; // string | OAuth client identifier

try {
    $result = $apiInstance->getRedirectUris($o_auth_client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->getRedirectUris: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_client_id** | **string**| OAuth client identifier |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultOauthClientRedirectUri**](../Model/RestApiArrayResultOauthClientRedirectUri.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeRedirectUri**
> removeRedirectUri($o_auth_client_id, $uri_id)

Delete OAuth client redirect uri

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\OAuthClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth_client_id = "o_auth_client_id_example"; // string | OAuth client identifier
$uri_id = 56; // int | Redirect uri identifier

try {
    $apiInstance->removeRedirectUri($o_auth_client_id, $uri_id);
} catch (Exception $e) {
    echo 'Exception when calling OAuthClientsApi->removeRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_client_id** | **string**| OAuth client identifier |
 **uri_id** | **int**| Redirect uri identifier |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


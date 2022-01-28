# Flipdish\\Client\AuthorizationTokensApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthorizationTokens**](AuthorizationTokensApi.md#getAuthorizationTokens) | **GET** /api/v1.0/{appId}/authorizationtokens/{oauthAppId} | Get authorization tokens
[**revokeToken**](AuthorizationTokensApi.md#revokeToken) | **DELETE** /api/v1.0/{appId}/authorizationtokens/{key} | Revoke token


# **getAuthorizationTokens**
> \Flipdish\\Client\Models\RestApiPaginationResultOAuthTokenModel getAuthorizationTokens($oauth_app_id, $app_id, $page, $limit)

Get authorization tokens



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AuthorizationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_app_id = "oauth_app_id_example"; // string | Client identifier
$app_id = "app_id_example"; // string | 
$page = 56; // int | Requested page number
$limit = 56; // int | Requested page limit

try {
    $result = $apiInstance->getAuthorizationTokens($oauth_app_id, $app_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationTokensApi->getAuthorizationTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oauth_app_id** | **string**| Client identifier |
 **app_id** | **string**|  |
 **page** | **int**| Requested page number | [optional]
 **limit** | **int**| Requested page limit | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultOAuthTokenModel**](../Model/RestApiPaginationResultOAuthTokenModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeToken**
> revokeToken($key, $app_id)

Revoke token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AuthorizationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Token identifier key
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->revokeToken($key, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationTokensApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Token identifier key |
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


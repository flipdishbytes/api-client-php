# Flipdish\Client\TeammatesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTeammate**](TeammatesApi.md#createTeammate) | **POST** /api/v1.0/{appId}/teammates | Create teammate and send an invite.
[**deleteTeammate**](TeammatesApi.md#deleteTeammate) | **DELETE** /api/v1.0/{appId}/teammates/{id} | Delete teammate
[**getTeammateByAppIdAndTeammateId**](TeammatesApi.md#getTeammateByAppIdAndTeammateId) | **GET** /api/v1.0/{appId}/teammates/{id} | Get a teammates by email address
[**getTeammatesByAppId**](TeammatesApi.md#getTeammatesByAppId) | **GET** /api/v1.0/{appId}/teammates | Get all teammates
[**redeemInvitation**](TeammatesApi.md#redeemInvitation) | **GET** /api/v1.0/{appId}/teammates/redeem/{otc} | Redeem one-time code from invitation
[**updateTeammate**](TeammatesApi.md#updateTeammate) | **POST** /api/v1.0/{appId}/teammates/{id} | Update teammates (this method does not support Deltas!)


# **createTeammate**
> \Flipdish\Client\Models\RestApiResultTeammate createTeammate($app_id, $teammate)

Create teammate and send an invite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\TeammatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$teammate = new \Flipdish\Client\Models\CreateTeammate(); // \Flipdish\Client\Models\CreateTeammate | teammate model

try {
    $result = $apiInstance->createTeammate($app_id, $teammate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeammatesApi->createTeammate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **teammate** | [**\Flipdish\Client\Models\CreateTeammate**](../Model/CreateTeammate.md)| teammate model |

### Return type

[**\Flipdish\Client\Models\RestApiResultTeammate**](../Model/RestApiResultTeammate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTeammate**
> deleteTeammate($app_id, $id)

Delete teammate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\TeammatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $apiInstance->deleteTeammate($app_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling TeammatesApi->deleteTeammate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeammateByAppIdAndTeammateId**
> \Flipdish\Client\Models\RestApiResultTeammate getTeammateByAppIdAndTeammateId($app_id, $id)

Get a teammates by email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\TeammatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTeammateByAppIdAndTeammateId($app_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeammatesApi->getTeammateByAppIdAndTeammateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiResultTeammate**](../Model/RestApiResultTeammate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeammatesByAppId**
> \Flipdish\Client\Models\RestApiArrayResultTeammate getTeammatesByAppId($app_id)

Get all teammates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\TeammatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getTeammatesByAppId($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeammatesApi->getTeammatesByAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultTeammate**](../Model/RestApiArrayResultTeammate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **redeemInvitation**
> \Flipdish\Client\Models\RestApiResultRedeemInvitationResult redeemInvitation($otc, $app_id)

Redeem one-time code from invitation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\TeammatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$otc = "otc_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->redeemInvitation($otc, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeammatesApi->redeemInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **otc** | **string**|  |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\Client\Models\RestApiResultRedeemInvitationResult**](../Model/RestApiResultRedeemInvitationResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeammate**
> \Flipdish\Client\Models\RestApiResultTeammate updateTeammate($app_id, $id, $teammate)

Update teammates (this method does not support Deltas!)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\TeammatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$id = "id_example"; // string | teammate identifier
$teammate = new \Flipdish\Client\Models\TeammateBase(); // \Flipdish\Client\Models\TeammateBase | teammate model

try {
    $result = $apiInstance->updateTeammate($app_id, $id, $teammate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeammatesApi->updateTeammate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **id** | **string**| teammate identifier |
 **teammate** | [**\Flipdish\Client\Models\TeammateBase**](../Model/TeammateBase.md)| teammate model |

### Return type

[**\Flipdish\Client\Models\RestApiResultTeammate**](../Model/RestApiResultTeammate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\SmsProviderCredentialsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBrandSmsProviderCredentialByServiceType**](SmsProviderCredentialsApi.md#getBrandSmsProviderCredentialByServiceType) | **GET** /api/v1.0/sms-providers/orgs/{orgId}/brands/{brandId}/provider-credentials/{serviceType} | 
[**getBrandSmsProviderCredentials**](SmsProviderCredentialsApi.md#getBrandSmsProviderCredentials) | **GET** /api/v1.0/sms-providers/orgs/{orgId}/brands/{brandId}/provider-credentials | 
[**smsProviderCredentialDelete**](SmsProviderCredentialsApi.md#smsProviderCredentialDelete) | **DELETE** /api/v1.0/sms-providers/orgs/{orgId}/brands/{brandId}/provider-credentials/{serviceType} | 
[**smsProviderCredentialUpdate**](SmsProviderCredentialsApi.md#smsProviderCredentialUpdate) | **POST** /api/v1.0/sms-providers/orgs/{orgId}/brands/{brandId}/provider-credentials/{serviceType} | 
[**smsProviderCredentialsBulkUpsert**](SmsProviderCredentialsApi.md#smsProviderCredentialsBulkUpsert) | **POST** /api/v1.0/sms-providers/bulk-upsert | 


# **getBrandSmsProviderCredentialByServiceType**
> \Flipdish\\Client\Models\RestApiResultSmsProviderCredential getBrandSmsProviderCredentialByServiceType($org_id, $brand_id, $service_type, $with_fallback)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SmsProviderCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | 
$brand_id = "brand_id_example"; // string | 
$service_type = "service_type_example"; // string | 
$with_fallback = true; // bool | 

try {
    $result = $apiInstance->getBrandSmsProviderCredentialByServiceType($org_id, $brand_id, $service_type, $with_fallback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsProviderCredentialsApi->getBrandSmsProviderCredentialByServiceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **string**|  |
 **brand_id** | **string**|  |
 **service_type** | **string**|  |
 **with_fallback** | **bool**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultSmsProviderCredential**](../Model/RestApiResultSmsProviderCredential.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandSmsProviderCredentials**
> \Flipdish\\Client\Models\RestApiArrayResultSmsProviderCredential getBrandSmsProviderCredentials($org_id, $brand_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SmsProviderCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | 
$brand_id = "brand_id_example"; // string | 

try {
    $result = $apiInstance->getBrandSmsProviderCredentials($org_id, $brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsProviderCredentialsApi->getBrandSmsProviderCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **string**|  |
 **brand_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultSmsProviderCredential**](../Model/RestApiArrayResultSmsProviderCredential.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsProviderCredentialDelete**
> \Flipdish\\Client\Models\RestApiResultSmsProviderCredential smsProviderCredentialDelete($org_id, $brand_id, $service_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SmsProviderCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | 
$brand_id = "brand_id_example"; // string | 
$service_type = "service_type_example"; // string | 

try {
    $result = $apiInstance->smsProviderCredentialDelete($org_id, $brand_id, $service_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsProviderCredentialsApi->smsProviderCredentialDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **string**|  |
 **brand_id** | **string**|  |
 **service_type** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultSmsProviderCredential**](../Model/RestApiResultSmsProviderCredential.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsProviderCredentialUpdate**
> \Flipdish\\Client\Models\RestApiResultSmsProviderCredential smsProviderCredentialUpdate($org_id, $brand_id, $service_type, $credential)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SmsProviderCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | 
$brand_id = "brand_id_example"; // string | 
$service_type = "service_type_example"; // string | 
$credential = new \Flipdish\\Client\Models\SmsProviderCredentialUpdateRequest(); // \Flipdish\\Client\Models\SmsProviderCredentialUpdateRequest | 

try {
    $result = $apiInstance->smsProviderCredentialUpdate($org_id, $brand_id, $service_type, $credential);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsProviderCredentialsApi->smsProviderCredentialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **string**|  |
 **brand_id** | **string**|  |
 **service_type** | **string**|  |
 **credential** | [**\Flipdish\\Client\Models\SmsProviderCredentialUpdateRequest**](../Model/SmsProviderCredentialUpdateRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultSmsProviderCredential**](../Model/RestApiResultSmsProviderCredential.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsProviderCredentialsBulkUpsert**
> \Flipdish\\Client\Models\RestApiArrayResultSmsProviderCredential smsProviderCredentialsBulkUpsert($credentials)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SmsProviderCredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials = array(new \Flipdish\\Client\Models\SmsProviderCredential()); // \Flipdish\\Client\Models\SmsProviderCredential[] | 

try {
    $result = $apiInstance->smsProviderCredentialsBulkUpsert($credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsProviderCredentialsApi->smsProviderCredentialsBulkUpsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\Flipdish\\Client\Models\SmsProviderCredential[]**](../Model/SmsProviderCredential.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultSmsProviderCredential**](../Model/RestApiArrayResultSmsProviderCredential.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


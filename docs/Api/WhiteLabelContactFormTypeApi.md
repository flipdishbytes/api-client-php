# Flipdish\\Client\WhiteLabelContactFormTypeApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppContactFormType**](WhiteLabelContactFormTypeApi.md#getAppContactFormType) | **GET** /api/v1.0/whitelabelconfig/{appId}/contact-form-type | 
[**updateAppContactFormType**](WhiteLabelContactFormTypeApi.md#updateAppContactFormType) | **POST** /api/v1.0/whitelabelconfig/{appId}/contact-form-type | 


# **getAppContactFormType**
> \Flipdish\\Client\Models\RestApiResultContactFormTypeConfigModel getAppContactFormType($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelContactFormTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getAppContactFormType($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelContactFormTypeApi->getAppContactFormType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultContactFormTypeConfigModel**](../Model/RestApiResultContactFormTypeConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppContactFormType**
> \Flipdish\\Client\Models\RestApiResultContactFormTypeConfigModel updateAppContactFormType($app_id, $contact_form_type_config)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WhiteLabelContactFormTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$contact_form_type_config = new \Flipdish\\Client\Models\ContactFormTypeConfigModel(); // \Flipdish\\Client\Models\ContactFormTypeConfigModel | 

try {
    $result = $apiInstance->updateAppContactFormType($app_id, $contact_form_type_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhiteLabelContactFormTypeApi->updateAppContactFormType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **contact_form_type_config** | [**\Flipdish\\Client\Models\ContactFormTypeConfigModel**](../Model/ContactFormTypeConfigModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultContactFormTypeConfigModel**](../Model/RestApiResultContactFormTypeConfigModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


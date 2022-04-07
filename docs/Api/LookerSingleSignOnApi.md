# Flipdish\\Client\LookerSingleSignOnApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLookerCustomerReportingEmbedUrl**](LookerSingleSignOnApi.md#getLookerCustomerReportingEmbedUrl) | **GET** /api/v1.0/{appId}/looker/sso/CustomerReporting | 
[**getSSOEndpoint**](LookerSingleSignOnApi.md#getSSOEndpoint) | **GET** /api/v1.0/{appId}/looker/sso | Get the single sign on embed URL for PerformanceSummary Dashboard


# **getLookerCustomerReportingEmbedUrl**
> \Flipdish\\Client\Models\DashboardEmbed getLookerCustomerReportingEmbedUrl($app_id, $embed_path)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LookerSingleSignOnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$embed_path = "embed_path_example"; // string | 

try {
    $result = $apiInstance->getLookerCustomerReportingEmbedUrl($app_id, $embed_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookerSingleSignOnApi->getLookerCustomerReportingEmbedUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **embed_path** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\DashboardEmbed**](../Model/DashboardEmbed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSSOEndpoint**
> \Flipdish\\Client\Models\DashboardEmbed getSSOEndpoint($app_id, $embed_path)

Get the single sign on embed URL for PerformanceSummary Dashboard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\LookerSingleSignOnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | AppNameId
$embed_path = "embed_path_example"; // string | Embed URL of the dashboard

try {
    $result = $apiInstance->getSSOEndpoint($app_id, $embed_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookerSingleSignOnApi->getSSOEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| AppNameId |
 **embed_path** | **string**| Embed URL of the dashboard |

### Return type

[**\Flipdish\\Client\Models\DashboardEmbed**](../Model/DashboardEmbed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\Client\ContentSecurityPolicyApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contentSecurityPolicyReport**](ContentSecurityPolicyApi.md#contentSecurityPolicyReport) | **POST** /api/v1.0/csp/report | 


# **contentSecurityPolicyReport**
> object contentSecurityPolicyReport($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\ContentSecurityPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Flipdish\Client\Models\CspReportRequest(); // \Flipdish\Client\Models\CspReportRequest | 

try {
    $result = $apiInstance->contentSecurityPolicyReport($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentSecurityPolicyApi->contentSecurityPolicyReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Flipdish\Client\Models\CspReportRequest**](../Model/CspReportRequest.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


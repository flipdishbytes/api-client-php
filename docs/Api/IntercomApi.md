# Flipdish\\Client\IntercomApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userHash**](IntercomApi.md#userHash) | **GET** /api/v1.0/intercom/userHash | 


# **userHash**
> \Flipdish\\Client\Models\RestApiResultIntercomUserHash userHash()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\IntercomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userHash();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntercomApi->userHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiResultIntercomUserHash**](../Model/RestApiResultIntercomUserHash.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


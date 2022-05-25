# Flipdish\\Client\StripeCustomConnectAdminApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**initializeBankAccountConnectedAccount**](StripeCustomConnectAdminApi.md#initializeBankAccountConnectedAccount) | **POST** /api/v1.0/customconnect/initialize-bank-account | Create a new Bank Account and Stripe connected account


# **initializeBankAccountConnectedAccount**
> \Flipdish\\Client\Models\RestApiResultBankAccountDetail initializeBankAccountConnectedAccount($accounts)

Create a new Bank Account and Stripe connected account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounts = array(new \Flipdish\\Client\Models\int[]()); // int[] | Accounts to be initialized in stripe

try {
    $result = $apiInstance->initializeBankAccountConnectedAccount($accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectAdminApi->initializeBankAccountConnectedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounts** | **int[]**| Accounts to be initialized in stripe |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBankAccountDetail**](../Model/RestApiResultBankAccountDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


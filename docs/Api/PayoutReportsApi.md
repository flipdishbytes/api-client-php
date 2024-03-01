# Flipdish\\Client\PayoutReportsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayoutReport3**](PayoutReportsApi.md#getPayoutReport3) | **GET** /api/v1.0/{appId}/reporting/reports/payouts3/{bankAccountId}/{payoutId} | 


# **getPayoutReport3**
> object getPayoutReport3($app_id, $bank_account_id, $payout_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 

try {
    $result = $apiInstance->getPayoutReport3($app_id, $bank_account_id, $payout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutReportsApi->getPayoutReport3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\\Client\PayoutsExportApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportPayoutChargebacks**](PayoutsExportApi.md#exportPayoutChargebacks) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/chargebacks/export | Export a list of payout&#39;s chargebacks as CSV
[**exportPayoutOrders**](PayoutsExportApi.md#exportPayoutOrders) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/orders/export | Export a list of payout&#39;s orders as CSV
[**exportPayoutOtherCharges**](PayoutsExportApi.md#exportPayoutOtherCharges) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/othercharges/export | Export a list of payout&#39;s other charges as CSV
[**exportPayoutRefunds**](PayoutsExportApi.md#exportPayoutRefunds) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/refunds/export | Export a list of payout&#39;s refunds as CSV
[**exportPayoutStores**](PayoutsExportApi.md#exportPayoutStores) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/export | Export payout&#39;s details as CSV
[**exportPayouts**](PayoutsExportApi.md#exportPayouts) | **GET** /api/v1.0/{appId}/payouts/export | Export payouts as CSV


# **exportPayoutChargebacks**
> string exportPayoutChargebacks($app_id, $bank_account_id, $payout_id, $store_ids)

Export a list of payout's chargebacks as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutsExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->exportPayoutChargebacks($app_id, $bank_account_id, $payout_id, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsExportApi->exportPayoutChargebacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPayoutOrders**
> string exportPayoutOrders($app_id, $bank_account_id, $payout_id, $store_ids)

Export a list of payout's orders as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutsExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->exportPayoutOrders($app_id, $bank_account_id, $payout_id, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsExportApi->exportPayoutOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPayoutOtherCharges**
> string exportPayoutOtherCharges($app_id, $bank_account_id, $payout_id, $store_ids)

Export a list of payout's other charges as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutsExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->exportPayoutOtherCharges($app_id, $bank_account_id, $payout_id, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsExportApi->exportPayoutOtherCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPayoutRefunds**
> string exportPayoutRefunds($app_id, $bank_account_id, $payout_id, $store_ids)

Export a list of payout's refunds as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutsExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->exportPayoutRefunds($app_id, $bank_account_id, $payout_id, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsExportApi->exportPayoutRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPayoutStores**
> string exportPayoutStores($app_id, $bank_account_id, $payout_id, $store_ids)

Export payout's details as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutsExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->exportPayoutStores($app_id, $bank_account_id, $payout_id, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsExportApi->exportPayoutStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPayouts**
> string exportPayouts($app_id, $start_date, $end_date, $payout_request_ids_bank_account_ids, $payout_request_ids_states)

Export payouts as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\PayoutsExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payout_request_ids_bank_account_ids = array(56); // int[] | List of bank account ids to search for
$payout_request_ids_states = array("payout_request_ids_states_example"); // string[] | List of {Flipdish.PublicModels.V1.Payouts.PayoutStatus} so search for

try {
    $result = $apiInstance->exportPayouts($app_id, $start_date, $end_date, $payout_request_ids_bank_account_ids, $payout_request_ids_states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsExportApi->exportPayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **payout_request_ids_bank_account_ids** | [**int[]**](../Model/int.md)| List of bank account ids to search for | [optional]
 **payout_request_ids_states** | [**string[]**](../Model/string.md)| List of {Flipdish.PublicModels.V1.Payouts.PayoutStatus} so search for | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Flipdish\Client\PayoutsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportPayoutChargebacks**](PayoutsApi.md#exportPayoutChargebacks) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/chargebacks/export | Export a list of payout&#39;s chargebacks as CSV
[**exportPayoutOrders**](PayoutsApi.md#exportPayoutOrders) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/orders/export | Export a list of payout&#39;s orders as CSV
[**exportPayoutOtherCharges**](PayoutsApi.md#exportPayoutOtherCharges) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/othercharges/export | Export a list of payout&#39;s other charges as CSV
[**exportPayoutRefunds**](PayoutsApi.md#exportPayoutRefunds) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/refunds/export | Export a list of payout&#39;s refunds as CSV
[**exportPayoutStores**](PayoutsApi.md#exportPayoutStores) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/export | Export payout&#39;s details as CSV
[**getPayout**](PayoutsApi.md#getPayout) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId} | Get Payout details broken down by Store
[**getPayoutChargebacks**](PayoutsApi.md#getPayoutChargebacks) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/chargebacks | Get list of payout&#39;s chargebacks
[**getPayoutOrders**](PayoutsApi.md#getPayoutOrders) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/orders | Get list of payout&#39;s orders
[**getPayoutOtherCharges**](PayoutsApi.md#getPayoutOtherCharges) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/othercharges | Get list of payout&#39;s other charges
[**getPayoutRefunds**](PayoutsApi.md#getPayoutRefunds) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/payouts/{payoutId}/refunds | Get list of payout&#39;s refunds
[**getPayoutSummaries**](PayoutsApi.md#getPayoutSummaries) | **GET** /api/v1.0/{appId}/payouts/summaries | Get list of payout summaries
[**getPayouts**](PayoutsApi.md#getPayouts) | **GET** /api/v1.0/{appId}/payouts | Get list of payouts


# **exportPayoutChargebacks**
> string exportPayoutChargebacks($app_id, $bank_account_id, $payout_id, $store_ids)

Export a list of payout's chargebacks as CSV

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
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
    echo 'Exception when calling PayoutsApi->exportPayoutChargebacks: ', $e->getMessage(), PHP_EOL;
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
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
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
    echo 'Exception when calling PayoutsApi->exportPayoutOrders: ', $e->getMessage(), PHP_EOL;
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
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
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
    echo 'Exception when calling PayoutsApi->exportPayoutOtherCharges: ', $e->getMessage(), PHP_EOL;
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
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
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
    echo 'Exception when calling PayoutsApi->exportPayoutRefunds: ', $e->getMessage(), PHP_EOL;
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
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
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
    echo 'Exception when calling PayoutsApi->exportPayoutStores: ', $e->getMessage(), PHP_EOL;
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

# **getPayout**
> \Flipdish\Client\Models\PayoutDetail getPayout($app_id, $bank_account_id, $payout_id)

Get Payout details broken down by Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 

try {
    $result = $apiInstance->getPayout($app_id, $bank_account_id, $payout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayout: ', $e->getMessage(), PHP_EOL;
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

[**\Flipdish\Client\Models\PayoutDetail**](../Model/PayoutDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutChargebacks**
> \Flipdish\Client\Models\RestApiPaginationResultPayoutChargeback getPayoutChargebacks($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids)

Get list of payout's chargebacks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$page = 56; // int | 
$limit = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->getPayoutChargebacks($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutChargebacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultPayoutChargeback**](../Model/RestApiPaginationResultPayoutChargeback.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutOrders**
> \Flipdish\Client\Models\RestApiPaginationResultPayoutOrder getPayoutOrders($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids)

Get list of payout's orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$page = 56; // int | 
$limit = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->getPayoutOrders($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultPayoutOrder**](../Model/RestApiPaginationResultPayoutOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutOtherCharges**
> \Flipdish\Client\Models\RestApiPaginationResultPayoutOtherCharge getPayoutOtherCharges($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids)

Get list of payout's other charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$page = 56; // int | 
$limit = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->getPayoutOtherCharges($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutOtherCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultPayoutOtherCharge**](../Model/RestApiPaginationResultPayoutOtherCharge.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutRefunds**
> \Flipdish\Client\Models\RestApiPaginationResultPayoutRefund getPayoutRefunds($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids)

Get list of payout's refunds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payout_id = 56; // int | 
$page = 56; // int | 
$limit = 56; // int | 
$store_ids = array(56); // int[] | 

try {
    $result = $apiInstance->getPayoutRefunds($app_id, $bank_account_id, $payout_id, $page, $limit, $store_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  |
 **payout_id** | **int**|  |
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **store_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultPayoutRefund**](../Model/RestApiPaginationResultPayoutRefund.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutSummaries**
> \Flipdish\Client\Models\RestApiArrayResultPayoutSummary getPayoutSummaries($app_id, $bank_account_id, $payee_bank_account_data_id, $start_date, $end_date, $status)

Get list of payout summaries

BETA - this endpoint is under development, do not use it in your production system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payee_bank_account_data_id = 56; // int | Deprecated
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 

try {
    $result = $apiInstance->getPayoutSummaries($app_id, $bank_account_id, $payee_bank_account_data_id, $start_date, $end_date, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayoutSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  | [optional]
 **payee_bank_account_data_id** | **int**| Deprecated | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultPayoutSummary**](../Model/RestApiArrayResultPayoutSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayouts**
> \Flipdish\Client\Models\RestApiPaginationResultPayout getPayouts($app_id, $bank_account_id, $payee_bank_account_data_id, $start_date, $end_date, $status, $page, $limit)

Get list of payouts

BETA - this endpoint is under development, do not use it in your production system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$bank_account_id = 56; // int | 
$payee_bank_account_data_id = 56; // int | Deprecated
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getPayouts($app_id, $bank_account_id, $payee_bank_account_data_id, $start_date, $end_date, $status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->getPayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **bank_account_id** | **int**|  | [optional]
 **payee_bank_account_data_id** | **int**| Deprecated | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultPayout**](../Model/RestApiPaginationResultPayout.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


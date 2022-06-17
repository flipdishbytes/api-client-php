# Flipdish\\Client\StripeCustomConnectApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBankAccountAndConnectedAccount**](StripeCustomConnectApi.md#createBankAccountAndConnectedAccount) | **POST** /api/v1.0/{appId}/customconnect/bank-account | Create a new Bank Account and Stripe connected account
[**createStripeConnectedAccount**](StripeCustomConnectApi.md#createStripeConnectedAccount) | **POST** /api/v1.0/{appId}/customconnect/{bankAccountId}/create-update-account | Create or update a Stripe connected account associated with the bank account of bankAccountId
[**createStripeConnectedAccountLink**](StripeCustomConnectApi.md#createStripeConnectedAccountLink) | **POST** /api/v1.0/{appId}/customconnect/{stripeConnectedAccountId}/create-account-link | Gets a single-use Stripe URL for the given account
[**getVerificationStatus**](StripeCustomConnectApi.md#getVerificationStatus) | **GET** /api/v1.0/{appId}/customconnect/verification-status | Gets the current verification status of the given connected account
[**setBankAccountBusinessType**](StripeCustomConnectApi.md#setBankAccountBusinessType) | **POST** /api/v1.0/{appId}/customconnect/bank-account/{bankAccountId}/businesstype | Update bank account&#39;s BusinessType and create a Stripe Connected Account
[**stripeCustomConnectRefresh**](StripeCustomConnectApi.md#stripeCustomConnectRefresh) | **GET** /api/v1.0/{appId}/customconnect/refresh-link | 
[**updateBankAccountDetails**](StripeCustomConnectApi.md#updateBankAccountDetails) | **POST** /api/v1.0/{appId}/customconnect/{bankAccountId}/update-bank-account-details | Update bank account details
[**updatePayoutSchedule**](StripeCustomConnectApi.md#updatePayoutSchedule) | **POST** /api/v1.0/{appId}/customconnect/update-payout-schedule/{stripeConnectedAccountId}/{interval} | Update Stripe Connection Account&#39;s payout schedule


# **createBankAccountAndConnectedAccount**
> \Flipdish\\Client\Models\RestApiResultBankAccountDetail createBankAccountAndConnectedAccount($app_id, $account)

Create a new Bank Account and Stripe connected account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$account = new \Flipdish\\Client\Models\BankAccountCreate(); // \Flipdish\\Client\Models\BankAccountCreate | Account to be created

try {
    $result = $apiInstance->createBankAccountAndConnectedAccount($app_id, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->createBankAccountAndConnectedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **account** | [**\Flipdish\\Client\Models\BankAccountCreate**](../Model/BankAccountCreate.md)| Account to be created |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBankAccountDetail**](../Model/RestApiResultBankAccountDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStripeConnectedAccount**
> \Flipdish\\Client\Models\RestApiResultStripeConnectedAccount createStripeConnectedAccount($app_id, $bank_account_id)

Create or update a Stripe connected account associated with the bank account of bankAccountId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$bank_account_id = 56; // int | Bank Account Id

try {
    $result = $apiInstance->createStripeConnectedAccount($app_id, $bank_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->createStripeConnectedAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **bank_account_id** | **int**| Bank Account Id |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStripeConnectedAccount**](../Model/RestApiResultStripeConnectedAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStripeConnectedAccountLink**
> \Flipdish\\Client\Models\RestApiResultStripeConnectedAccount createStripeConnectedAccountLink($app_id, $stripe_connected_account_id, $stripe_account_link_request)

Gets a single-use Stripe URL for the given account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$stripe_connected_account_id = "stripe_connected_account_id_example"; // string | Stripe Connected Account Id
$stripe_account_link_request = new \Flipdish\\Client\Models\StripeAccountLinkRequest(); // \Flipdish\\Client\Models\StripeAccountLinkRequest | 

try {
    $result = $apiInstance->createStripeConnectedAccountLink($app_id, $stripe_connected_account_id, $stripe_account_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->createStripeConnectedAccountLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **stripe_connected_account_id** | **string**| Stripe Connected Account Id |
 **stripe_account_link_request** | [**\Flipdish\\Client\Models\StripeAccountLinkRequest**](../Model/StripeAccountLinkRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStripeConnectedAccount**](../Model/RestApiResultStripeConnectedAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVerificationStatus**
> \Flipdish\\Client\Models\RestApiResultStripeConnectedAccount getVerificationStatus($app_id, $stripe_connected_account_id)

Gets the current verification status of the given connected account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$stripe_connected_account_id = "stripe_connected_account_id_example"; // string | 

try {
    $result = $apiInstance->getVerificationStatus($app_id, $stripe_connected_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->getVerificationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **stripe_connected_account_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStripeConnectedAccount**](../Model/RestApiResultStripeConnectedAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBankAccountBusinessType**
> \Flipdish\\Client\Models\RestApiResultBankAccountDetail setBankAccountBusinessType($app_id, $bank_account_id, $business_type)

Update bank account's BusinessType and create a Stripe Connected Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$bank_account_id = 56; // int | Bank Account Id
$business_type = "business_type_example"; // string | Bank Account business type

try {
    $result = $apiInstance->setBankAccountBusinessType($app_id, $bank_account_id, $business_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->setBankAccountBusinessType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **bank_account_id** | **int**| Bank Account Id |
 **business_type** | **string**| Bank Account business type |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBankAccountDetail**](../Model/RestApiResultBankAccountDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stripeCustomConnectRefresh**
> object stripeCustomConnectRefresh($link_request_id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_request_id = 56; // int | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->stripeCustomConnectRefresh($link_request_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->stripeCustomConnectRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link_request_id** | **int**|  |
 **app_id** | **string**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankAccountDetails**
> \Flipdish\\Client\Models\RestApiResultStripeConnectedAccount updateBankAccountDetails($app_id, $bank_account_id, $update_request)

Update bank account details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$bank_account_id = 56; // int | Bank Account Id
$update_request = new \Flipdish\\Client\Models\BankAccountDetailsUpdateRequest(); // \Flipdish\\Client\Models\BankAccountDetailsUpdateRequest | fields to be updated

try {
    $result = $apiInstance->updateBankAccountDetails($app_id, $bank_account_id, $update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->updateBankAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |
 **bank_account_id** | **int**| Bank Account Id |
 **update_request** | [**\Flipdish\\Client\Models\BankAccountDetailsUpdateRequest**](../Model/BankAccountDetailsUpdateRequest.md)| fields to be updated |

### Return type

[**\Flipdish\\Client\Models\RestApiResultStripeConnectedAccount**](../Model/RestApiResultStripeConnectedAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayoutSchedule**
> \Flipdish\\Client\Models\RestApiResultModelBase updatePayoutSchedule($app_id, $stripe_connected_account_id, $interval)

Update Stripe Connection Account's payout schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\StripeCustomConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$stripe_connected_account_id = "stripe_connected_account_id_example"; // string | 
$interval = "interval_example"; // string | 

try {
    $result = $apiInstance->updatePayoutSchedule($app_id, $stripe_connected_account_id, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StripeCustomConnectApi->updatePayoutSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **stripe_connected_account_id** | **string**|  |
 **interval** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultModelBase**](../Model/RestApiResultModelBase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


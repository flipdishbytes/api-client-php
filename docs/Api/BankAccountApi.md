# Flipdish\\Client\BankAccountApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachBankAccountToStore**](BankAccountApi.md#attachBankAccountToStore) | **POST** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/store/{storeId} | [PRIVATE API] Attach Bank Account to Store
[**createBankAccount**](BankAccountApi.md#createBankAccount) | **POST** /api/v1.0/{appId}/bankaccounts | Create a new Bank Account and attach to this App
[**deleteBankAccount**](BankAccountApi.md#deleteBankAccount) | **DELETE** /api/v1.0/{appId}/bankaccounts/{bankAccountId} | Delete BankAccount
[**getBankAccountById**](BankAccountApi.md#getBankAccountById) | **GET** /api/v1.0/{appId}/bankaccounts/{bankAccountId} | Get BankAccount Detail by Id
[**getBankAccounts**](BankAccountApi.md#getBankAccounts) | **GET** /api/v1.0/{appId}/bankaccounts | Get List of BankAccounts for WL
[**getCountriesWithFieldDefinitions**](BankAccountApi.md#getCountriesWithFieldDefinitions) | **GET** /api/v1.0/{appId}/bankaccounts/countries-field-definitions | Get bank account fields definitions
[**getFieldDefinitions**](BankAccountApi.md#getFieldDefinitions) | **GET** /api/v1.0/{appId}/bankaccounts/field-definitions | Get bank account fields definitions
[**updateBankAccount**](BankAccountApi.md#updateBankAccount) | **POST** /api/v1.0/{appId}/bankaccounts/{bankAccountId} | Update BankAccount
[**updateBankAccountState**](BankAccountApi.md#updateBankAccountState) | **POST** /api/v1.0/{appId}/bankaccounts/{bankAccountId}/state/{state} | [PRIVATE API] Update State of Bank Account


# **attachBankAccountToStore**
> attachBankAccountToStore($app_id, $bank_account_id, $store_id)

[PRIVATE API] Attach Bank Account to Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$bank_account_id = 56; // int | Id of account to be updated
$store_id = 56; // int | Store to be attached to Bank account

try {
    $apiInstance->attachBankAccountToStore($app_id, $bank_account_id, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->attachBankAccountToStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **bank_account_id** | **int**| Id of account to be updated |
 **store_id** | **int**| Store to be attached to Bank account |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBankAccount**
> \Flipdish\\Client\Models\RestApiResultBankAccountDetail createBankAccount($app_id, $account)

Create a new Bank Account and attach to this App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$account = new \Flipdish\\Client\Models\BankAccountCreate(); // \Flipdish\\Client\Models\BankAccountCreate | Account to be created

try {
    $result = $apiInstance->createBankAccount($app_id, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->createBankAccount: ', $e->getMessage(), PHP_EOL;
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

# **deleteBankAccount**
> deleteBankAccount($app_id, $bank_account_id)

Delete BankAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$bank_account_id = 56; // int | Id of account to be marked as deleted

try {
    $apiInstance->deleteBankAccount($app_id, $bank_account_id);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->deleteBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **bank_account_id** | **int**| Id of account to be marked as deleted |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankAccountById**
> \Flipdish\\Client\Models\RestApiResultBankAccountDetail getBankAccountById($bank_account_id, $app_id)

Get BankAccount Detail by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account_id = 56; // int | Id of account
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getBankAccountById($bank_account_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->getBankAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | **int**| Id of account |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultBankAccountDetail**](../Model/RestApiResultBankAccountDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankAccounts**
> \Flipdish\\Client\Models\RestApiArrayResultBankAccountSummary getBankAccounts($app_id)

Get List of BankAccounts for WL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name

try {
    $result = $apiInstance->getBankAccounts($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->getBankAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultBankAccountSummary**](../Model/RestApiArrayResultBankAccountSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountriesWithFieldDefinitions**
> \Flipdish\\Client\Models\RestApiArrayResultCountryWithAccountFieldsDefinitions getCountriesWithFieldDefinitions($app_id)

Get bank account fields definitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getCountriesWithFieldDefinitions($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->getCountriesWithFieldDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultCountryWithAccountFieldsDefinitions**](../Model/RestApiArrayResultCountryWithAccountFieldsDefinitions.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFieldDefinitions**
> \Flipdish\\Client\Models\RestApiResultAccountFieldsDefinitions getFieldDefinitions($app_id)

Get bank account fields definitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getFieldDefinitions($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->getFieldDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAccountFieldsDefinitions**](../Model/RestApiResultAccountFieldsDefinitions.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankAccount**
> updateBankAccount($app_id, $bank_account_id, $account)

Update BankAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$bank_account_id = 56; // int | Id of account to be updated
$account = new \Flipdish\\Client\Models\BankAccountCreate(); // \Flipdish\\Client\Models\BankAccountCreate | Details to update account with

try {
    $apiInstance->updateBankAccount($app_id, $bank_account_id, $account);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->updateBankAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **bank_account_id** | **int**| Id of account to be updated |
 **account** | [**\Flipdish\\Client\Models\BankAccountCreate**](../Model/BankAccountCreate.md)| Details to update account with |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBankAccountState**
> updateBankAccountState($app_id, $bank_account_id, $state, $reason)

[PRIVATE API] Update State of Bank Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\BankAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name
$bank_account_id = 56; // int | Id of account to be updated
$state = "state_example"; // string | New state
$reason = "reason_example"; // string | Reason for state change, Mandatory for rejections

try {
    $apiInstance->updateBankAccountState($app_id, $bank_account_id, $state, $reason);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountApi->updateBankAccountState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name |
 **bank_account_id** | **int**| Id of account to be updated |
 **state** | **string**| New state |
 **reason** | **string**| Reason for state change, Mandatory for rejections |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


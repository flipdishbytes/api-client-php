# Flipdish\\Client\CustomersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerById**](CustomersApi.md#getCustomerById) | **GET** /api/v1.0/{appId}/customers/{customerId} | 
[**updateCustomerById**](CustomersApi.md#updateCustomerById) | **POST** /api/v1.0/{appId}/customers/{customerId} | 


# **getCustomerById**
> \Flipdish\\Client\Models\RestApiResultCustomer getCustomerById($app_id, $customer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$customer_id = 56; // int | 

try {
    $result = $apiInstance->getCustomerById($app_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **customer_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCustomer**](../Model/RestApiResultCustomer.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerById**
> \Flipdish\\Client\Models\RestApiResultCustomer updateCustomerById($app_id, $customer_id, $update_customer)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$customer_id = 56; // int | 
$update_customer = new \Flipdish\\Client\Models\CustomerUpdateModel(); // \Flipdish\\Client\Models\CustomerUpdateModel | 

try {
    $result = $apiInstance->updateCustomerById($app_id, $customer_id, $update_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **customer_id** | **int**|  |
 **update_customer** | [**\Flipdish\\Client\Models\CustomerUpdateModel**](../Model/CustomerUpdateModel.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCustomer**](../Model/RestApiResultCustomer.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


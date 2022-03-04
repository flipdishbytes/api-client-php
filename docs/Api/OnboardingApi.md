# Flipdish\\Client\OnboardingApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**onboardingGetOnboardingItems**](OnboardingApi.md#onboardingGetOnboardingItems) | **GET** /api/v1.0/clients/{appId}/onboarding/stores/{storeId} | 
[**onboardingUpdateOnboardingItem**](OnboardingApi.md#onboardingUpdateOnboardingItem) | **POST** /api/v1.0/clients/{appId}/onboarding/stores/{storeId}/items/{onboardingItemId} | 


# **onboardingGetOnboardingItems**
> object onboardingGetOnboardingItems($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->onboardingGetOnboardingItems($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingGetOnboardingItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **onboardingUpdateOnboardingItem**
> object onboardingUpdateOnboardingItem($app_id, $store_id, $onboarding_item_id, $item_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 
$onboarding_item_id = 56; // int | 
$item_update = new \Flipdish\\Client\Models\OnboardingItemUpdate(); // \Flipdish\\Client\Models\OnboardingItemUpdate | 

try {
    $result = $apiInstance->onboardingUpdateOnboardingItem($app_id, $store_id, $onboarding_item_id, $item_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->onboardingUpdateOnboardingItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |
 **onboarding_item_id** | **int**|  |
 **item_update** | [**\Flipdish\\Client\Models\OnboardingItemUpdate**](../Model/OnboardingItemUpdate.md)|  |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


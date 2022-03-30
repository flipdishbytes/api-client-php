# Flipdish\\Client\AddressApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**formByApp**](AddressApi.md#formByApp) | **GET** /api/v1.0/app/{appId}/address/form | Provides a dyamic form definition based for the country of the given appId, with labels localized using the provided language.
[**formByCountry**](AddressApi.md#formByCountry) | **GET** /api/v1.0/address/country/{countryCode}/form | Provides a dyamic form definition for the given country code, with labels localized using the provided language.
[**formatGoogleAddress**](AddressApi.md#formatGoogleAddress) | **POST** /api/v1.0/address/google | Maps a Google Address Object to the values of the dynamic form associated with the address country and returns the dynamic form.


# **formByApp**
> \Flipdish\\Client\Models\RestApiResultAddressFormResponse formByApp($app_id, $language)

Provides a dyamic form definition based for the country of the given appId, with labels localized using the provided language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application (WhiteLabel) Id (WhiteLabelId or AppNameId).
$language = "language_example"; // string | (Optional) ISO culture info code, e.g.: en-IE, the default is en-US.

try {
    $result = $apiInstance->formByApp($app_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->formByApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application (WhiteLabel) Id (WhiteLabelId or AppNameId). |
 **language** | **string**| (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultAddressFormResponse**](../Model/RestApiResultAddressFormResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formByCountry**
> \Flipdish\\Client\Models\RestApiResultAddressFormResponse formByCountry($country_code, $language)

Provides a dyamic form definition for the given country code, with labels localized using the provided language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2 letter ISO country code, e.g.: IE.
$language = "language_example"; // string | (Optional) ISO culture info code, e.g.: en-IE, the default is en-US.

try {
    $result = $apiInstance->formByCountry($country_code, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->formByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2 letter ISO country code, e.g.: IE. |
 **language** | **string**| (Optional) ISO culture info code, e.g.: en-IE, the default is en-US. | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiResultAddressFormResponse**](../Model/RestApiResultAddressFormResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **formatGoogleAddress**
> \Flipdish\\Client\Models\RestApiResultAddressFormResponse formatGoogleAddress($google_address)

Maps a Google Address Object to the values of the dynamic form associated with the address country and returns the dynamic form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$google_address = new \Flipdish\\Client\Models\GoogleAddress(); // \Flipdish\\Client\Models\GoogleAddress | A Google address object, as it is retuned from the maps API.

try {
    $result = $apiInstance->formatGoogleAddress($google_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->formatGoogleAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **google_address** | [**\Flipdish\\Client\Models\GoogleAddress**](../Model/GoogleAddress.md)| A Google address object, as it is retuned from the maps API. |

### Return type

[**\Flipdish\\Client\Models\RestApiResultAddressFormResponse**](../Model/RestApiResultAddressFormResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


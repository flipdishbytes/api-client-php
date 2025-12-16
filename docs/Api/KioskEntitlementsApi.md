# Flipdish\\Client\KioskEntitlementsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryKioskEntitlementsByOrgId**](KioskEntitlementsApi.md#queryKioskEntitlementsByOrgId) | **GET** /api/v1.0/orgs/{orgId}/kiosk/entitlements | 


# **queryKioskEntitlementsByOrgId**
> \Flipdish\\Client\Models\RestApiResultKioskEntitlementsResult queryKioskEntitlementsByOrgId($org_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\KioskEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = "org_id_example"; // string | 

try {
    $result = $apiInstance->queryKioskEntitlementsByOrgId($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KioskEntitlementsApi->queryKioskEntitlementsByOrgId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultKioskEntitlementsResult**](../Model/RestApiResultKioskEntitlementsResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


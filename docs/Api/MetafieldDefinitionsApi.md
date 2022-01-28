# Flipdish\\Client\MetafieldDefinitionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMetafieldDefinitions**](MetafieldDefinitionsApi.md#getMetafieldDefinitions) | **GET** /api/v1.0/{appId}/metafields/definitions/{ownerEntity} | Get paginated groups by app name id filtered by types


# **getMetafieldDefinitions**
> \Flipdish\\Client\Models\RestApiPaginationResultMetafieldDefinition getMetafieldDefinitions($app_id, $owner_entity, $search_term, $page, $limit)

Get paginated groups by app name id filtered by types

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\MetafieldDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$owner_entity = "owner_entity_example"; // string | 
$search_term = "search_term_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getMetafieldDefinitions($app_id, $owner_entity, $search_term, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetafieldDefinitionsApi->getMetafieldDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **owner_entity** | **string**|  |
 **search_term** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultMetafieldDefinition**](../Model/RestApiPaginationResultMetafieldDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


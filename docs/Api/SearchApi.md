# Flipdish\\Client\SearchApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchRestaurants**](SearchApi.md#searchRestaurants) | **GET** /api/v1.0/search/restaurants | 


# **searchRestaurants**
> \Flipdish\\Client\Models\RestApiPaginationResultRestaurant searchRestaurants($query, $country_id, $include_archived_stores, $search_type, $published_status, $page, $limit)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | 
$country_id = "country_id_example"; // string | 
$include_archived_stores = "include_archived_stores_example"; // string | 
$search_type = "search_type_example"; // string | 
$published_status = "published_status_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->searchRestaurants($query, $country_id, $include_archived_stores, $search_type, $published_status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchRestaurants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  |
 **country_id** | **string**|  |
 **include_archived_stores** | **string**|  | [optional]
 **search_type** | **string**|  | [optional]
 **published_status** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultRestaurant**](../Model/RestApiPaginationResultRestaurant.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


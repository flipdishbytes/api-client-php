# Flipdish\Client\HttpRequestResponseLogsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLogs**](HttpRequestResponseLogsApi.md#getLogs) | **GET** /api/v1.0/{appId}/interactions/logs | Get API interaction logs


# **getLogs**
> \Flipdish\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog getLogs($start, $end, $app_id, $filter_by_user_id, $guid, $page, $limit)

Get API interaction logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\HttpRequestResponseLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date time
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date time
$app_id = "app_id_example"; // string | 
$filter_by_user_id = 56; // int | User id (optional)
$guid = "guid_example"; // string | Id of the log
$page = 56; // int | Page number
$limit = 56; // int | Page size

try {
    $result = $apiInstance->getLogs($start, $end, $app_id, $filter_by_user_id, $guid, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HttpRequestResponseLogsApi->getLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Start date time |
 **end** | **\DateTime**| End date time |
 **app_id** | **string**|  |
 **filter_by_user_id** | **int**| User id (optional) | [optional]
 **guid** | **string**| Id of the log | [optional]
 **page** | **int**| Page number | [optional]
 **limit** | **int**| Page size | [optional]

### Return type

[**\Flipdish\Client\Models\RestApiPaginationResultHttpRequestAndResponseLog**](../Model/RestApiPaginationResultHttpRequestAndResponseLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


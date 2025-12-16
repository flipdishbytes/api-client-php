# Flipdish\\Client\CatalogImagesApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadCatalogImage**](CatalogImagesApi.md#uploadCatalogImage) | **POST** /api/v1.0/{appId}/catalog/images | Upload a Catalog Image


# **uploadCatalogImage**
> \Flipdish\\Client\Models\CatalogImage uploadCatalogImage($app_id, $image)

Upload a Catalog Image

[BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CatalogImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$image = "/path/to/file.txt"; // \SplFileObject | Catalog image

try {
    $result = $apiInstance->uploadCatalogImage($app_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogImagesApi->uploadCatalogImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **image** | **\SplFileObject**| Catalog image |

### Return type

[**\Flipdish\\Client\Models\CatalogImage**](../Model/CatalogImage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


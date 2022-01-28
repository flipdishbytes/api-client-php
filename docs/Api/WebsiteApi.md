# Flipdish\\Client\WebsiteApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTestimonial**](WebsiteApi.md#addTestimonial) | **POST** /api/v1.0/{appId}/website/testimonial | Add a testimonial
[**deleteTestimonial**](WebsiteApi.md#deleteTestimonial) | **DELETE** /api/v1.0/{appId}/website/testimonial/{testimonialId} | Delete a testimonial
[**deleteWebsiteImage**](WebsiteApi.md#deleteWebsiteImage) | **DELETE** /api/v1.0/{appId}/website/image/{imageId} | Delete Website Image
[**editTestimonial**](WebsiteApi.md#editTestimonial) | **POST** /api/v1.0/{appId}/website/testimonial/{testimonialId} | Edit a testimonial
[**getIndexConfiguration**](WebsiteApi.md#getIndexConfiguration) | **GET** /api/v1.0/{appId}/website/index | Get Index Configuration
[**setIndexConfiguration**](WebsiteApi.md#setIndexConfiguration) | **POST** /api/v1.0/{appId}/website/index | Set Index Configuration
[**uploadWebsiteImage**](WebsiteApi.md#uploadWebsiteImage) | **POST** /api/v1.0/{appId}/website/image/{imageLocation} | Upload Website Image
[**websiteCheckNow**](WebsiteApi.md#websiteCheckNow) | **GET** /api/v1.0/{appId}/website/dnscheck | Triggers a Check DNS Process


# **addTestimonial**
> \Flipdish\\Client\Models\RestApiResultWebsiteTestimonial addTestimonial($app_id, $testimonial)

Add a testimonial

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$testimonial = new \Flipdish\\Client\Models\WebsiteTestimonialBase(); // \Flipdish\\Client\Models\WebsiteTestimonialBase | Testimonial to be added

try {
    $result = $apiInstance->addTestimonial($app_id, $testimonial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->addTestimonial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **testimonial** | [**\Flipdish\\Client\Models\WebsiteTestimonialBase**](../Model/WebsiteTestimonialBase.md)| Testimonial to be added |

### Return type

[**\Flipdish\\Client\Models\RestApiResultWebsiteTestimonial**](../Model/RestApiResultWebsiteTestimonial.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTestimonial**
> deleteTestimonial($app_id, $testimonial_id)

Delete a testimonial

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$testimonial_id = 56; // int | Id of the testimonial to delete

try {
    $apiInstance->deleteTestimonial($app_id, $testimonial_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->deleteTestimonial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **testimonial_id** | **int**| Id of the testimonial to delete |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebsiteImage**
> deleteWebsiteImage($app_id, $image_id)

Delete Website Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$image_id = 56; // int | Id of the image

try {
    $apiInstance->deleteWebsiteImage($app_id, $image_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->deleteWebsiteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **image_id** | **int**| Id of the image |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTestimonial**
> \Flipdish\\Client\Models\RestApiResultWebsiteTestimonial editTestimonial($app_id, $testimonial_id, $testimonial)

Edit a testimonial

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$testimonial_id = 56; // int | Id of the testimonial to edit
$testimonial = new \Flipdish\\Client\Models\WebsiteTestimonialBase(); // \Flipdish\\Client\Models\WebsiteTestimonialBase | New values of the testimonial

try {
    $result = $apiInstance->editTestimonial($app_id, $testimonial_id, $testimonial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->editTestimonial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **testimonial_id** | **int**| Id of the testimonial to edit |
 **testimonial** | [**\Flipdish\\Client\Models\WebsiteTestimonialBase**](../Model/WebsiteTestimonialBase.md)| New values of the testimonial |

### Return type

[**\Flipdish\\Client\Models\RestApiResultWebsiteTestimonial**](../Model/RestApiResultWebsiteTestimonial.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIndexConfiguration**
> \Flipdish\\Client\Models\RestApiResultIndexPage getIndexConfiguration($app_id)

Get Index Configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier

try {
    $result = $apiInstance->getIndexConfiguration($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->getIndexConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |

### Return type

[**\Flipdish\\Client\Models\RestApiResultIndexPage**](../Model/RestApiResultIndexPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setIndexConfiguration**
> \Flipdish\\Client\Models\RestApiResultIndexPageBase setIndexConfiguration($app_id, $index_page)

Set Index Configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$index_page = new \Flipdish\\Client\Models\IndexPageBase(); // \Flipdish\\Client\Models\IndexPageBase | New index page definition

try {
    $result = $apiInstance->setIndexConfiguration($app_id, $index_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->setIndexConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **index_page** | [**\Flipdish\\Client\Models\IndexPageBase**](../Model/IndexPageBase.md)| New index page definition |

### Return type

[**\Flipdish\\Client\Models\RestApiResultIndexPageBase**](../Model/RestApiResultIndexPageBase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadWebsiteImage**
> \Flipdish\\Client\Models\RestApiResultWebsiteImage uploadWebsiteImage($app_id, $image_location, $image)

Upload Website Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | Application identifier
$image_location = "image_location_example"; // string | Section for which to upload the image
$image = "/path/to/file.txt"; // \SplFileObject | App Logo

try {
    $result = $apiInstance->uploadWebsiteImage($app_id, $image_location, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->uploadWebsiteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application identifier |
 **image_location** | **string**| Section for which to upload the image |
 **image** | **\SplFileObject**| App Logo |

### Return type

[**\Flipdish\\Client\Models\RestApiResultWebsiteImage**](../Model/RestApiResultWebsiteImage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **websiteCheckNow**
> websiteCheckNow($app_id)

Triggers a Check DNS Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $apiInstance->websiteCheckNow($app_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->websiteCheckNow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


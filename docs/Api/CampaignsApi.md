# Flipdish\\Client\CampaignsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLoyaltyCampaign**](CampaignsApi.md#createLoyaltyCampaign) | **POST** /api/v1.0/{appId}/campaigns/loyalty | 
[**createRetentionCampaign**](CampaignsApi.md#createRetentionCampaign) | **POST** /api/v1.0/{appId}/campaigns/retention | 
[**fetchLoyaltyCampaignByPublicId**](CampaignsApi.md#fetchLoyaltyCampaignByPublicId) | **GET** /api/v1.0/{appId}/campaigns/loyalty/publicId/{campaignPublicId} | 
[**getLoyaltyCampaignsForApp**](CampaignsApi.md#getLoyaltyCampaignsForApp) | **GET** /api/v1.0/{appId}/campaigns/loyalty | 
[**getLoyaltyCampaignsForStore**](CampaignsApi.md#getLoyaltyCampaignsForStore) | **GET** /api/v1.0/{appId}/campaigns/loyalty/{storeId} | 
[**getRetentionCampaignsForApp**](CampaignsApi.md#getRetentionCampaignsForApp) | **GET** /api/v1.0/{appId}/campaigns/retention | 
[**getRetentionCampaignsForStore**](CampaignsApi.md#getRetentionCampaignsForStore) | **GET** /api/v1.0/{appId}/campaigns/retention/{storeId} | 
[**getStoreList**](CampaignsApi.md#getStoreList) | **GET** /api/v1.0/{appId}/campaigns/stores | 
[**removeCampaign**](CampaignsApi.md#removeCampaign) | **DELETE** /api/v1.0/{appId}/campaigns/{campaignId} | 
[**updateLoyaltyCampaign**](CampaignsApi.md#updateLoyaltyCampaign) | **POST** /api/v1.0/{appId}/campaigns/loyalty/{campaignId} | 
[**updateRetentionCampaign**](CampaignsApi.md#updateRetentionCampaign) | **POST** /api/v1.0/{appId}/campaigns/retention/{campaignId} | 


# **createLoyaltyCampaign**
> \Flipdish\\Client\Models\RestApiResultLoyaltyCampaign createLoyaltyCampaign($app_id, $campaign)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$campaign = new \Flipdish\\Client\Models\LoyaltyCampaignBase(); // \Flipdish\\Client\Models\LoyaltyCampaignBase | 

try {
    $result = $apiInstance->createLoyaltyCampaign($app_id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createLoyaltyCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **campaign** | [**\Flipdish\\Client\Models\LoyaltyCampaignBase**](../Model/LoyaltyCampaignBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLoyaltyCampaign**](../Model/RestApiResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRetentionCampaign**
> \Flipdish\\Client\Models\RestApiResultRetentionCampaign createRetentionCampaign($app_id, $campaign)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$campaign = new \Flipdish\\Client\Models\RetentionCampaignBase(); // \Flipdish\\Client\Models\RetentionCampaignBase | 

try {
    $result = $apiInstance->createRetentionCampaign($app_id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createRetentionCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **campaign** | [**\Flipdish\\Client\Models\RetentionCampaignBase**](../Model/RetentionCampaignBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRetentionCampaign**](../Model/RestApiResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchLoyaltyCampaignByPublicId**
> \Flipdish\\Client\Models\RestApiArrayResultLoyaltyCampaign fetchLoyaltyCampaignByPublicId($app_id, $campaign_public_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$campaign_public_id = "campaign_public_id_example"; // string | 

try {
    $result = $apiInstance->fetchLoyaltyCampaignByPublicId($app_id, $campaign_public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->fetchLoyaltyCampaignByPublicId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **campaign_public_id** | [**string**](../Model/.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultLoyaltyCampaign**](../Model/RestApiArrayResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyCampaignsForApp**
> \Flipdish\\Client\Models\RestApiArrayResultLoyaltyCampaign getLoyaltyCampaignsForApp($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getLoyaltyCampaignsForApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getLoyaltyCampaignsForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultLoyaltyCampaign**](../Model/RestApiArrayResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyCampaignsForStore**
> \Flipdish\\Client\Models\RestApiArrayResultLoyaltyCampaign getLoyaltyCampaignsForStore($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getLoyaltyCampaignsForStore($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getLoyaltyCampaignsForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultLoyaltyCampaign**](../Model/RestApiArrayResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRetentionCampaignsForApp**
> \Flipdish\\Client\Models\RestApiArrayResultRetentionCampaign getRetentionCampaignsForApp($app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getRetentionCampaignsForApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getRetentionCampaignsForApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRetentionCampaign**](../Model/RestApiArrayResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRetentionCampaignsForStore**
> \Flipdish\\Client\Models\RestApiArrayResultRetentionCampaign getRetentionCampaignsForStore($app_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getRetentionCampaignsForStore($app_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getRetentionCampaignsForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultRetentionCampaign**](../Model/RestApiArrayResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreList**
> \Flipdish\\Client\Models\RestApiArrayResultStoreListItem getStoreList($app_id, $only_published)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$only_published = true; // bool | 

try {
    $result = $apiInstance->getStoreList($app_id, $only_published);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getStoreList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **only_published** | **bool**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultStoreListItem**](../Model/RestApiArrayResultStoreListItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCampaign**
> removeCampaign($app_id, $campaign_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$campaign_id = 56; // int | 

try {
    $apiInstance->removeCampaign($app_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->removeCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **campaign_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoyaltyCampaign**
> \Flipdish\\Client\Models\RestApiResultLoyaltyCampaign updateLoyaltyCampaign($app_id, $campaign_id, $campaign)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$campaign_id = 56; // int | 
$campaign = new \Flipdish\\Client\Models\LoyaltyCampaignBase(); // \Flipdish\\Client\Models\LoyaltyCampaignBase | 

try {
    $result = $apiInstance->updateLoyaltyCampaign($app_id, $campaign_id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateLoyaltyCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **campaign_id** | **int**|  |
 **campaign** | [**\Flipdish\\Client\Models\LoyaltyCampaignBase**](../Model/LoyaltyCampaignBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultLoyaltyCampaign**](../Model/RestApiResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRetentionCampaign**
> \Flipdish\\Client\Models\RestApiResultRetentionCampaign updateRetentionCampaign($app_id, $campaign_id, $campaign)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$campaign_id = 56; // int | 
$campaign = new \Flipdish\\Client\Models\RetentionCampaignBase(); // \Flipdish\\Client\Models\RetentionCampaignBase | 

try {
    $result = $apiInstance->updateRetentionCampaign($app_id, $campaign_id, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateRetentionCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **campaign_id** | **int**|  |
 **campaign** | [**\Flipdish\\Client\Models\RetentionCampaignBase**](../Model/RetentionCampaignBase.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultRetentionCampaign**](../Model/RestApiResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


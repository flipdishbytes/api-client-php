# Flipdish\Client\CampaignsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLoyaltyCampaign**](CampaignsApi.md#createLoyaltyCampaign) | **POST** /api/v1.0/{appId}/campaigns/loyalty | Creates loyalty campaign
[**createRetentionCampaign**](CampaignsApi.md#createRetentionCampaign) | **POST** /api/v1.0/{appId}/campaigns/retention | Creates retention campaign
[**getLoyaltyCampaignsForApp**](CampaignsApi.md#getLoyaltyCampaignsForApp) | **GET** /api/v1.0/{appId}/campaigns/loyalty | Gets loyalty campaigns for app
[**getLoyaltyCampaignsForStore**](CampaignsApi.md#getLoyaltyCampaignsForStore) | **GET** /api/v1.0/{appId}/campaigns/loyalty/{storeId} | Gets loyalty campaigns for store
[**getRetentionCampaignsForApp**](CampaignsApi.md#getRetentionCampaignsForApp) | **GET** /api/v1.0/{appId}/campaigns/retention | Gets retention campaigns for app
[**getRetentionCampaignsForStore**](CampaignsApi.md#getRetentionCampaignsForStore) | **GET** /api/v1.0/{appId}/campaigns/retention/{storeId} | Gets retention campaigns for store
[**getStoreList**](CampaignsApi.md#getStoreList) | **GET** /api/v1.0/{appId}/campaigns/stores | Gets list of stores for app
[**removeCampaign**](CampaignsApi.md#removeCampaign) | **DELETE** /api/v1.0/{appId}/campaigns/{campaignId} | Deletes a campaign
[**updateLoyaltyCampaign**](CampaignsApi.md#updateLoyaltyCampaign) | **POST** /api/v1.0/{appId}/campaigns/loyalty/{campaignId} | Updates loyalty campaign
[**updateRetentionCampaign**](CampaignsApi.md#updateRetentionCampaign) | **POST** /api/v1.0/{appId}/campaigns/retention/{campaignId} | Updates retention campaign


# **createLoyaltyCampaign**
> \Flipdish\Client\Models\RestApiResultLoyaltyCampaign createLoyaltyCampaign($app_id, $campaign)

Creates loyalty campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$campaign = new \Flipdish\Client\Models\LoyaltyCampaignBase(); // \Flipdish\Client\Models\LoyaltyCampaignBase | Loyalty campaign details

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
 **app_id** | **string**| App Name Id |
 **campaign** | [**\Flipdish\Client\Models\LoyaltyCampaignBase**](../Model/LoyaltyCampaignBase.md)| Loyalty campaign details |

### Return type

[**\Flipdish\Client\Models\RestApiResultLoyaltyCampaign**](../Model/RestApiResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRetentionCampaign**
> \Flipdish\Client\Models\RestApiResultRetentionCampaign createRetentionCampaign($app_id, $campaign)

Creates retention campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$campaign = new \Flipdish\Client\Models\RetentionCampaignBase(); // \Flipdish\Client\Models\RetentionCampaignBase | Retention campaign details

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
 **app_id** | **string**| App Name Id |
 **campaign** | [**\Flipdish\Client\Models\RetentionCampaignBase**](../Model/RetentionCampaignBase.md)| Retention campaign details |

### Return type

[**\Flipdish\Client\Models\RestApiResultRetentionCampaign**](../Model/RestApiResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyCampaignsForApp**
> \Flipdish\Client\Models\RestApiArrayResultLoyaltyCampaign getLoyaltyCampaignsForApp($app_id)

Gets loyalty campaigns for app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id

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
 **app_id** | **string**| App Name Id |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultLoyaltyCampaign**](../Model/RestApiArrayResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoyaltyCampaignsForStore**
> \Flipdish\Client\Models\RestApiArrayResultLoyaltyCampaign getLoyaltyCampaignsForStore($app_id, $store_id)

Gets loyalty campaigns for store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$store_id = 56; // int | Store Id

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
 **app_id** | **string**| App Name Id |
 **store_id** | **int**| Store Id |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultLoyaltyCampaign**](../Model/RestApiArrayResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRetentionCampaignsForApp**
> \Flipdish\Client\Models\RestApiArrayResultRetentionCampaign getRetentionCampaignsForApp($app_id)

Gets retention campaigns for app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id

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
 **app_id** | **string**| App Name Id |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultRetentionCampaign**](../Model/RestApiArrayResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRetentionCampaignsForStore**
> \Flipdish\Client\Models\RestApiArrayResultRetentionCampaign getRetentionCampaignsForStore($app_id, $store_id)

Gets retention campaigns for store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$store_id = 56; // int | Store Id

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
 **app_id** | **string**| App Name Id |
 **store_id** | **int**| Store Id |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultRetentionCampaign**](../Model/RestApiArrayResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreList**
> \Flipdish\Client\Models\RestApiArrayResultStoreListItem getStoreList($app_id)

Gets list of stores for app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id

try {
    $result = $apiInstance->getStoreList($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getStoreList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App Name Id |

### Return type

[**\Flipdish\Client\Models\RestApiArrayResultStoreListItem**](../Model/RestApiArrayResultStoreListItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCampaign**
> removeCampaign($app_id, $campaign_id)

Deletes a campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$campaign_id = 56; // int | Campaign Id

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
 **app_id** | **string**| App Name Id |
 **campaign_id** | **int**| Campaign Id |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoyaltyCampaign**
> \Flipdish\Client\Models\RestApiResultLoyaltyCampaign updateLoyaltyCampaign($app_id, $campaign_id, $campaign)

Updates loyalty campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$campaign_id = 56; // int | Loyalty campaign Id
$campaign = new \Flipdish\Client\Models\LoyaltyCampaignBase(); // \Flipdish\Client\Models\LoyaltyCampaignBase | Loyalty campaign details

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
 **app_id** | **string**| App Name Id |
 **campaign_id** | **int**| Loyalty campaign Id |
 **campaign** | [**\Flipdish\Client\Models\LoyaltyCampaignBase**](../Model/LoyaltyCampaignBase.md)| Loyalty campaign details |

### Return type

[**\Flipdish\Client\Models\RestApiResultLoyaltyCampaign**](../Model/RestApiResultLoyaltyCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRetentionCampaign**
> \Flipdish\Client\Models\RestApiResultRetentionCampaign updateRetentionCampaign($app_id, $campaign_id, $campaign)

Updates retention campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | App Name Id
$campaign_id = 56; // int | Retention campaign Id
$campaign = new \Flipdish\Client\Models\RetentionCampaignBase(); // \Flipdish\Client\Models\RetentionCampaignBase | Retention campaign details

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
 **app_id** | **string**| App Name Id |
 **campaign_id** | **int**| Retention campaign Id |
 **campaign** | [**\Flipdish\Client\Models\RetentionCampaignBase**](../Model/RetentionCampaignBase.md)| Retention campaign details |

### Return type

[**\Flipdish\Client\Models\RestApiResultRetentionCampaign**](../Model/RestApiResultRetentionCampaign.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


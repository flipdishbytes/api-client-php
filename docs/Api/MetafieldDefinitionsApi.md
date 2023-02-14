# Flipdish\\Client\MetafieldDefinitionsApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMetafieldDefinition**](MetafieldDefinitionsApi.md#createMetafieldDefinition) | **POST** /api/v1.0/{appId}/metafields/definitions/{ownerEntity} | 
[**getMetafieldDefinitionByKey**](MetafieldDefinitionsApi.md#getMetafieldDefinitionByKey) | **GET** /api/v1.0/{appId}/metafields/definitions/{ownerEntity}/{key} | 
[**getMetafieldDefinitions**](MetafieldDefinitionsApi.md#getMetafieldDefinitions) | **GET** /api/v1.0/{appId}/metafields/definitions/{ownerEntity} | 
[**getOwnerEntityConfigurations**](MetafieldDefinitionsApi.md#getOwnerEntityConfigurations) | **GET** /api/v1.0/{appId}/metafields/definitions | 
[**getOwnerEntityRecommendations**](MetafieldDefinitionsApi.md#getOwnerEntityRecommendations) | **GET** /api/v1.0/{appId}/metafields/definitions/recommendations/{ownerEntity} | 
[**updateMetafieldDefinition**](MetafieldDefinitionsApi.md#updateMetafieldDefinition) | **POST** /api/v1.0/{appId}/metafields/definitions/{ownerEntity}/{key} | 


# **createMetafieldDefinition**
> \Flipdish\\Client\Models\RestApiResultMetafieldDefinition createMetafieldDefinition($app_id, $owner_entity, $create_metafield_definition)



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
$create_metafield_definition = new \Flipdish\\Client\Models\CreateMetafieldDefinition(); // \Flipdish\\Client\Models\CreateMetafieldDefinition | 

try {
    $result = $apiInstance->createMetafieldDefinition($app_id, $owner_entity, $create_metafield_definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetafieldDefinitionsApi->createMetafieldDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **owner_entity** | **string**|  |
 **create_metafield_definition** | [**\Flipdish\\Client\Models\CreateMetafieldDefinition**](../Model/CreateMetafieldDefinition.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMetafieldDefinition**](../Model/RestApiResultMetafieldDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetafieldDefinitionByKey**
> \Flipdish\\Client\Models\RestApiResultMetafieldDefinition getMetafieldDefinitionByKey($app_id, $owner_entity, $key)



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
$key = "key_example"; // string | 

try {
    $result = $apiInstance->getMetafieldDefinitionByKey($app_id, $owner_entity, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetafieldDefinitionsApi->getMetafieldDefinitionByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **owner_entity** | **string**|  |
 **key** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMetafieldDefinition**](../Model/RestApiResultMetafieldDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetafieldDefinitions**
> \Flipdish\\Client\Models\RestApiPaginationResultMetafieldDefinition getMetafieldDefinitions($app_id, $owner_entity, $search_term, $page, $limit)



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

# **getOwnerEntityConfigurations**
> \Flipdish\\Client\Models\OwnerEntityConfigurations getOwnerEntityConfigurations($app_id)



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

try {
    $result = $apiInstance->getOwnerEntityConfigurations($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetafieldDefinitionsApi->getOwnerEntityConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\OwnerEntityConfigurations**](../Model/OwnerEntityConfigurations.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOwnerEntityRecommendations**
> \Flipdish\\Client\Models\RestApiPaginationResultMetafieldDefinitionRecommendation getOwnerEntityRecommendations($app_id, $owner_entity, $search_term, $page, $limit)



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
    $result = $apiInstance->getOwnerEntityRecommendations($app_id, $owner_entity, $search_term, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetafieldDefinitionsApi->getOwnerEntityRecommendations: ', $e->getMessage(), PHP_EOL;
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

[**\Flipdish\\Client\Models\RestApiPaginationResultMetafieldDefinitionRecommendation**](../Model/RestApiPaginationResultMetafieldDefinitionRecommendation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetafieldDefinition**
> \Flipdish\\Client\Models\RestApiResultMetafieldDefinition updateMetafieldDefinition($app_id, $owner_entity, $key, $update_metafield_definition)



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
$key = "key_example"; // string | 
$update_metafield_definition = new \Flipdish\\Client\Models\UpdateMetafieldDefinition(); // \Flipdish\\Client\Models\UpdateMetafieldDefinition | 

try {
    $result = $apiInstance->updateMetafieldDefinition($app_id, $owner_entity, $key, $update_metafield_definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetafieldDefinitionsApi->updateMetafieldDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **owner_entity** | **string**|  |
 **key** | **string**|  |
 **update_metafield_definition** | [**\Flipdish\\Client\Models\UpdateMetafieldDefinition**](../Model/UpdateMetafieldDefinition.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultMetafieldDefinition**](../Model/RestApiResultMetafieldDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


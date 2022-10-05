# Flipdish\\Client\CrossSellApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCrossSellMenuItems**](CrossSellApi.md#getCrossSellMenuItems) | **GET** /api/v1.0/{appId}/crossSell/menuItems | Get all Menu items by MenuId for cross sells


# **getCrossSellMenuItems**
> \Flipdish\\Client\Models\RestApiResultCrossSellMenuItems getCrossSellMenuItems($menu_id, $menu_item_id, $limit, $total_value, $app_id)

Get all Menu items by MenuId for cross sells

Can be called by any flipdish kiosk  [BETA - this endpoint is under development, do not use it in your production system]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\CrossSellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$menu_id = 56; // int | Requested MenuId
$menu_item_id = array(56); // int[] | Selected Menu items
$limit = 56; // int | Set the limit of items returned
$total_value = 1.2; // double | Get the total cost of items in the basket
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->getCrossSellMenuItems($menu_id, $menu_item_id, $limit, $total_value, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrossSellApi->getCrossSellMenuItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menu_id** | **int**| Requested MenuId |
 **menu_item_id** | [**int[]**](../Model/int.md)| Selected Menu items |
 **limit** | **int**| Set the limit of items returned |
 **total_value** | **double**| Get the total cost of items in the basket |
 **app_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultCrossSellMenuItems**](../Model/RestApiResultCrossSellMenuItems.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


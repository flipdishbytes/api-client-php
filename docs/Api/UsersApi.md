# Flipdish\\Client\UsersApi

All URIs are relative to *https://api.flipdish.co*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserNote**](UsersApi.md#addUserNote) | **POST** /api/v1.0/users/{userId}/AddUserNote | 
[**addUserToRole**](UsersApi.md#addUserToRole) | **POST** /api/v1.0/users/{userId}/AddUserToRole/{roleName} | 
[**anonymizeUser**](UsersApi.md#anonymizeUser) | **POST** /api/v1.0/users/{userId}/AnonymizeUser | 
[**blockUserPhoneNumber**](UsersApi.md#blockUserPhoneNumber) | **POST** /api/v1.0/users/{userId}/BlockUserPhoneNumber | 
[**createUserDeliveryLocation**](UsersApi.md#createUserDeliveryLocation) | **POST** /api/v1.0/users/{userId}/deliveryLocations | 
[**getPreviousOrderCountForStore**](UsersApi.md#getPreviousOrderCountForStore) | **GET** /api/v1.0/users/{userId}/previousordercount/{storeId} | 
[**getRestaurantUserAccounts**](UsersApi.md#getRestaurantUserAccounts) | **GET** /api/v1.0/users/{userId}/RestaurantUserAccounts | 
[**getRestaurantUserStores**](UsersApi.md#getRestaurantUserStores) | **GET** /api/v1.0/users/{userId}/RestaurantUserStores | 
[**getRoles**](UsersApi.md#getRoles) | **GET** /api/v1.0/users/roles | 
[**getRolesAndUnassignedRoles**](UsersApi.md#getRolesAndUnassignedRoles) | **GET** /api/v1.0/users/{userId}/roles | 
[**getUserById**](UsersApi.md#getUserById) | **GET** /api/v1.0/users/{userId} | 
[**getUserDeliveryLocationsForAdmin**](UsersApi.md#getUserDeliveryLocationsForAdmin) | **GET** /api/v1.0/users/{userId}/deliveryLocations | 
[**getUserNotes**](UsersApi.md#getUserNotes) | **GET** /api/v1.0/users/{userId}/UserNotes | 
[**getUserOrderByIdForAdmin**](UsersApi.md#getUserOrderByIdForAdmin) | **GET** /api/v1.0/users/{userId}/orders/{orderId} | 
[**getUserOrdersForAdmin**](UsersApi.md#getUserOrdersForAdmin) | **GET** /api/v1.0/users/{userId}/orders | 
[**getUserSmsConversationItems**](UsersApi.md#getUserSmsConversationItems) | **GET** /api/v1.0/users/{userId}/smsConversationItems | 
[**hideUserDeliveryLocation**](UsersApi.md#hideUserDeliveryLocation) | **POST** /api/v1.0/users/{userId}/deliveryLocations/{deliveryLocationId}/hide | 
[**markUserAsFraudulent**](UsersApi.md#markUserAsFraudulent) | **POST** /api/v1.0/users/{userId}/MarkUserAsFraudulent | 
[**markUserAsSuspicious**](UsersApi.md#markUserAsSuspicious) | **POST** /api/v1.0/users/{userId}/MarkUserAsSuspicious | 
[**removeFlipdishAccountIdForUser**](UsersApi.md#removeFlipdishAccountIdForUser) | **POST** /api/v1.0/users/{userId}/RemoveFlipdishAccountId/{accountId} | 
[**removeUserFromRole**](UsersApi.md#removeUserFromRole) | **POST** /api/v1.0/users/{userId}/RemoveUserFromRole/{roleName} | 
[**resetMfa**](UsersApi.md#resetMfa) | **POST** /api/v1.0/users/{userId}/ResetMfa | 
[**searchFlipdishAccounts**](UsersApi.md#searchFlipdishAccounts) | **GET** /api/v1.0/users/searchFlipdishAccounts | 
[**searchUsers**](UsersApi.md#searchUsers) | **GET** /api/v1.0/users/search | 
[**sendUserPushNotification**](UsersApi.md#sendUserPushNotification) | **POST** /api/v1.0/users/{userId}/pushNotifications | 
[**sendUserSms**](UsersApi.md#sendUserSms) | **POST** /api/v1.0/users/{userId}/sms | 
[**setCustomerName**](UsersApi.md#setCustomerName) | **POST** /api/v1.0/users/{userId}/SetCustomerName | 
[**setFlipdishAccountIdForUser**](UsersApi.md#setFlipdishAccountIdForUser) | **POST** /api/v1.0/users/{userId}/SetFlipdishAccountId/{accountId} | 
[**setUserDeliveryLocationCoordinates**](UsersApi.md#setUserDeliveryLocationCoordinates) | **POST** /api/v1.0/users/{userId}/deliveryLocations/{deliveryLocationId}/coordinates | 
[**setUserDeliveryLocationField**](UsersApi.md#setUserDeliveryLocationField) | **POST** /api/v1.0/users/{userId}/deliveryLocations/{deliveryLocationId}/fields | 
[**setUserLanguage**](UsersApi.md#setUserLanguage) | **POST** /api/v1.0/users/{userId}/SetLanguage/{languageId} | 
[**unblockUserPhoneNumber**](UsersApi.md#unblockUserPhoneNumber) | **POST** /api/v1.0/users/{userId}/UnblockUserPhoneNumber | 


# **addUserNote**
> \Flipdish\\Client\Models\RestApiDefaultResponse addUserNote($user_id, $note)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$note = "note_example"; // string | 

try {
    $result = $apiInstance->addUserNote($user_id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->addUserNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **note** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUserToRole**
> \Flipdish\\Client\Models\RestApiResultUserRole addUserToRole($user_id, $role_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$role_name = "role_name_example"; // string | 

try {
    $result = $apiInstance->addUserToRole($user_id, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->addUserToRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **role_name** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultUserRole**](../Model/RestApiResultUserRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **anonymizeUser**
> \Flipdish\\Client\Models\RestApiDefaultResponse anonymizeUser($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->anonymizeUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->anonymizeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockUserPhoneNumber**
> \Flipdish\\Client\Models\RestApiDefaultResponse blockUserPhoneNumber($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->blockUserPhoneNumber($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->blockUserPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUserDeliveryLocation**
> \Flipdish\\Client\Models\RestApiDefaultResponse createUserDeliveryLocation($user_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$request = new \Flipdish\\Client\Models\CreateUserDeliveryLocationRequest(); // \Flipdish\\Client\Models\CreateUserDeliveryLocationRequest | 

try {
    $result = $apiInstance->createUserDeliveryLocation($user_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUserDeliveryLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\CreateUserDeliveryLocationRequest**](../Model/CreateUserDeliveryLocationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPreviousOrderCountForStore**
> \Flipdish\\Client\Models\RestApiStringResult getPreviousOrderCountForStore($user_id, $store_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$store_id = 56; // int | 

try {
    $result = $apiInstance->getPreviousOrderCountForStore($user_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getPreviousOrderCountForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **store_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiStringResult**](../Model/RestApiStringResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestaurantUserAccounts**
> \Flipdish\\Client\Models\RestApiArrayResultUserFlipdishAccount getRestaurantUserAccounts($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->getRestaurantUserAccounts($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getRestaurantUserAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultUserFlipdishAccount**](../Model/RestApiArrayResultUserFlipdishAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestaurantUserStores**
> \Flipdish\\Client\Models\RestApiArrayResultUserStoreInfo getRestaurantUserStores($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->getRestaurantUserStores($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getRestaurantUserStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultUserStoreInfo**](../Model/RestApiArrayResultUserStoreInfo.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \Flipdish\\Client\Models\RestApiStringArrayResult getRoles()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flipdish\\Client\Models\RestApiStringArrayResult**](../Model/RestApiStringArrayResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRolesAndUnassignedRoles**
> \Flipdish\\Client\Models\RestApiResultUserRole getRolesAndUnassignedRoles($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->getRolesAndUnassignedRoles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getRolesAndUnassignedRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultUserRole**](../Model/RestApiResultUserRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserById**
> \Flipdish\\Client\Models\RestApiResultUserInfo getUserById($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->getUserById($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultUserInfo**](../Model/RestApiResultUserInfo.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDeliveryLocationsForAdmin**
> \Flipdish\\Client\Models\RestApiArrayResultUserDeliveryLocationAdmin getUserDeliveryLocationsForAdmin($user_id, $white_label_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$white_label_id = 56; // int | 

try {
    $result = $apiInstance->getUserDeliveryLocationsForAdmin($user_id, $white_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDeliveryLocationsForAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **white_label_id** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultUserDeliveryLocationAdmin**](../Model/RestApiArrayResultUserDeliveryLocationAdmin.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserNotes**
> \Flipdish\\Client\Models\RestApiArrayResultUserNote getUserNotes($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->getUserNotes($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultUserNote**](../Model/RestApiArrayResultUserNote.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserOrderByIdForAdmin**
> \Flipdish\\Client\Models\RestApiResultOrder getUserOrderByIdForAdmin($user_id, $order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$order_id = 56; // int | 

try {
    $result = $apiInstance->getUserOrderByIdForAdmin($user_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserOrderByIdForAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **order_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultOrder**](../Model/RestApiResultOrder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserOrdersForAdmin**
> \Flipdish\\Client\Models\RestApiArrayResultUserOrderSummary getUserOrdersForAdmin($user_id, $skip, $take, $white_label_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$skip = 56; // int | 
$take = 56; // int | 
$white_label_id = 56; // int | 

try {
    $result = $apiInstance->getUserOrdersForAdmin($user_id, $skip, $take, $white_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserOrdersForAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **white_label_id** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultUserOrderSummary**](../Model/RestApiArrayResultUserOrderSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserSmsConversationItems**
> \Flipdish\\Client\Models\RestApiArrayResultUserSmsChatItem getUserSmsConversationItems($user_id, $most_recent_count)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$most_recent_count = 56; // int | 

try {
    $result = $apiInstance->getUserSmsConversationItems($user_id, $most_recent_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserSmsConversationItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **most_recent_count** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultUserSmsChatItem**](../Model/RestApiArrayResultUserSmsChatItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hideUserDeliveryLocation**
> \Flipdish\\Client\Models\RestApiDefaultResponse hideUserDeliveryLocation($user_id, $delivery_location_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$delivery_location_id = 56; // int | 

try {
    $result = $apiInstance->hideUserDeliveryLocation($user_id, $delivery_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->hideUserDeliveryLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **delivery_location_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markUserAsFraudulent**
> \Flipdish\\Client\Models\RestApiDefaultResponse markUserAsFraudulent($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->markUserAsFraudulent($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->markUserAsFraudulent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markUserAsSuspicious**
> \Flipdish\\Client\Models\RestApiDefaultResponse markUserAsSuspicious($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->markUserAsSuspicious($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->markUserAsSuspicious: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFlipdishAccountIdForUser**
> \Flipdish\\Client\Models\RestApiDefaultResponse removeFlipdishAccountIdForUser($user_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->removeFlipdishAccountIdForUser($user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->removeFlipdishAccountIdForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **account_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserFromRole**
> \Flipdish\\Client\Models\RestApiResultUserRole removeUserFromRole($user_id, $role_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$role_name = "role_name_example"; // string | 

try {
    $result = $apiInstance->removeUserFromRole($user_id, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->removeUserFromRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **role_name** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultUserRole**](../Model/RestApiResultUserRole.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetMfa**
> \Flipdish\\Client\Models\RestApiDefaultResponse resetMfa($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->resetMfa($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->resetMfa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchFlipdishAccounts**
> \Flipdish\\Client\Models\RestApiArrayResultFlipdishAccountName searchFlipdishAccounts($search_pattern)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_pattern = "search_pattern_example"; // string | 

try {
    $result = $apiInstance->searchFlipdishAccounts($search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchFlipdishAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_pattern** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiArrayResultFlipdishAccountName**](../Model/RestApiArrayResultFlipdishAccountName.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsers**
> \Flipdish\\Client\Models\RestApiPaginationResultUserSearch searchUsers($search_query, $has_user_logged_in, $user_discriminator, $search_in, $page_index, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_query = "search_query_example"; // string | 
$has_user_logged_in = true; // bool | 
$user_discriminator = "user_discriminator_example"; // string | 
$search_in = "search_in_example"; // string | 
$page_index = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->searchUsers($search_query, $has_user_logged_in, $user_discriminator, $search_in, $page_index, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_query** | **string**|  |
 **has_user_logged_in** | **bool**|  | [optional]
 **user_discriminator** | **string**|  | [optional]
 **search_in** | **string**|  | [optional]
 **page_index** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Flipdish\\Client\Models\RestApiPaginationResultUserSearch**](../Model/RestApiPaginationResultUserSearch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendUserPushNotification**
> \Flipdish\\Client\Models\RestApiResultUserPushNotificationSentResult sendUserPushNotification($user_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$request = new \Flipdish\\Client\Models\SendUserPushNotificationRequest(); // \Flipdish\\Client\Models\SendUserPushNotificationRequest | 

try {
    $result = $apiInstance->sendUserPushNotification($user_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->sendUserPushNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\SendUserPushNotificationRequest**](../Model/SendUserPushNotificationRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiResultUserPushNotificationSentResult**](../Model/RestApiResultUserPushNotificationSentResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendUserSms**
> \Flipdish\\Client\Models\RestApiDefaultResponse sendUserSms($user_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$request = new \Flipdish\\Client\Models\SendUserSmsRequest(); // \Flipdish\\Client\Models\SendUserSmsRequest | 

try {
    $result = $apiInstance->sendUserSms($user_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->sendUserSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\SendUserSmsRequest**](../Model/SendUserSmsRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCustomerName**
> \Flipdish\\Client\Models\RestApiDefaultResponse setCustomerName($user_id, $customer_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$customer_name = "customer_name_example"; // string | 

try {
    $result = $apiInstance->setCustomerName($user_id, $customer_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setCustomerName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **customer_name** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFlipdishAccountIdForUser**
> \Flipdish\\Client\Models\RestApiDefaultResponse setFlipdishAccountIdForUser($user_id, $account_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->setFlipdishAccountIdForUser($user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setFlipdishAccountIdForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **account_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserDeliveryLocationCoordinates**
> \Flipdish\\Client\Models\RestApiDefaultResponse setUserDeliveryLocationCoordinates($user_id, $delivery_location_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$delivery_location_id = 56; // int | 
$request = new \Flipdish\\Client\Models\SetUserDeliveryLocationCoordinatesRequest(); // \Flipdish\\Client\Models\SetUserDeliveryLocationCoordinatesRequest | 

try {
    $result = $apiInstance->setUserDeliveryLocationCoordinates($user_id, $delivery_location_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserDeliveryLocationCoordinates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **delivery_location_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\SetUserDeliveryLocationCoordinatesRequest**](../Model/SetUserDeliveryLocationCoordinatesRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserDeliveryLocationField**
> \Flipdish\\Client\Models\RestApiDefaultResponse setUserDeliveryLocationField($user_id, $delivery_location_id, $request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$delivery_location_id = 56; // int | 
$request = new \Flipdish\\Client\Models\SetUserDeliveryLocationFieldRequest(); // \Flipdish\\Client\Models\SetUserDeliveryLocationFieldRequest | 

try {
    $result = $apiInstance->setUserDeliveryLocationField($user_id, $delivery_location_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserDeliveryLocationField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **delivery_location_id** | **int**|  |
 **request** | [**\Flipdish\\Client\Models\SetUserDeliveryLocationFieldRequest**](../Model/SetUserDeliveryLocationFieldRequest.md)|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserLanguage**
> \Flipdish\\Client\Models\RestApiDefaultResponse setUserLanguage($user_id, $language_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$language_id = "language_id_example"; // string | 

try {
    $result = $apiInstance->setUserLanguage($user_id, $language_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **language_id** | **string**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockUserPhoneNumber**
> \Flipdish\\Client\Models\RestApiDefaultResponse unblockUserPhoneNumber($user_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Flipdish\\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flipdish\\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 

try {
    $result = $apiInstance->unblockUserPhoneNumber($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->unblockUserPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |

### Return type

[**\Flipdish\\Client\Models\RestApiDefaultResponse**](../Model/RestApiDefaultResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


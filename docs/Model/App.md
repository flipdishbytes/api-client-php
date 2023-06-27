# App

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | App Identifier | [optional] 
**has_ios_app** | **bool** | Has iOS app in Apple App Store. This is readonly. | [optional] 
**has_android_app** | **bool** | Has Android app in Google Play Store. This is readonly. | [optional] 
**country_id** | **string** | Country identifier in ISO 3166-1 alpha-2 format.   This code is set automatically based on the locations of the Stores in the App.     The App Country is used    - to determine how to parse mobile phone numbers that are entered in their local numbering format   - to determine if country specific payment methods should be offered   - in various fraud checks | [optional] 
**logo_image_url** | **string** | Application Logo. | [optional] 
**languages** | [**\Flipdish\\Client\Models\Language[]**](Language.md) | Languages that have been selected to be available to customers. | [optional] 
**available_app_languages** | [**\Flipdish\\Client\Models\Language[]**](Language.md) | Lists all languages that are supported by Flipdish. | [optional] 
**app_access_level** | **string** | App access level for the logged in user | [optional] 
**app_resource_set** | **string[]** | Constitutes a list of available resources | [optional] 
**features** | **string[]** | Feature flags. These cannot be set by 3rd parties. | [optional] 
**map_center** | [**\Flipdish\\Client\Models\Coordinates**](Coordinates.md) | Center of the map coordinates. This is used to center the map when the iOS and Android app first open.  This value is automatically set based on the locations of the Stores in the App. | [optional] 
**map_north_east** | [**\Flipdish\\Client\Models\Coordinates**](Coordinates.md) | North East(Top Right) Corner of the map coordinates. This is used to frame the map when the iOS and Android app first open.  This value is automatically set based on the locations of the Stores in the App. | [optional] 
**map_south_west** | [**\Flipdish\\Client\Models\Coordinates**](Coordinates.md) | South West (Bottom Left) Corner of the map coordinates. This is used to frame the map when the iOS and Android app first open.  This value is automatically set based on the locations of the Stores in the App. | [optional] 
**google_maps_api_key_web** | **string** | Key to be passed with Google Maps requests | [optional] 
**name** | **string** | App name.   This is used in various places on the Apple App Store, Google Play Store, mobile apps and websites. | [optional] 
**host_name** | **string** | HostName on which the web-ordering system is allowed to be hosted or that a Flipdish website is hosted on. | [optional] 
**main_color** | **string** | Main color of the web / Android / iOS applications | [optional] 
**kiosk_primary_colour** | **string** | Primary colour used on the Kiosk | [optional] 
**application_category** | **string** | Application Category | [optional] 
**is_panacea_enabled** | **bool** | Panacea is the term used for websites that are hosted on the my.flipdish.com domain. This value is true when the App&#39;s website is hosted on this domain.  The aternative to using Panacea websites is to use a custom domain. | [optional] 
**cookie_consent_prompt_enabled** | **bool** | Cookie Consent Prompt Enabled | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



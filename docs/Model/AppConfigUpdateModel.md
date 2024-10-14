# AppConfigUpdateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | App name.   This is used in various places on the Apple App Store, Google Play Store, mobile apps and websites. | [optional] 
**host_name** | **string** | HostName on which the web-ordering system is allowed to be hosted or that a Flipdish website is hosted on. | [optional] 
**main_color** | **string** | Main color of the web / Android / iOS applications | [optional] 
**kiosk_primary_colour** | **string** | Primary colour used on the Kiosk | [optional] 
**application_category** | **string** | Application Category | [optional] 
**is_panacea_enabled** | **bool** | Panacea is the term used for websites that are hosted on the my.flipdish.com domain. This value is true when the App&#39;s website is hosted on this domain.  The alternative to using Panacea websites is to use a custom domain. | [optional] 
**panacea_vanity_url** | **string** | In case of IsPanaceaEnabled is true, the app can be accessed via https://my.flipdish.com/{PanaceaVanityUrl} | [optional] 
**cookie_consent_prompt_enabled** | **bool** | Cookie Consent Prompt Enabled | [optional] 
**logo_image_url** | **string** | Logo image URL | [optional] 
**country_id** | **string** | Country identifier in ISO 3166-1 alpha-2 format.   This code is set automatically based on the locations of the Stores in the App.     The App Country is used    - to determine how to parse mobile phone numbers that are entered in their local numbering format   - to determine if country specific payment methods should be offered   - in various fraud checks | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



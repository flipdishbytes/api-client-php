# FulfillmentStatusConfigurationItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_id** | **string** | Status Id (no whitespaces) | [optional] 
**status_name** | **string** | Status name | [optional] 
**enabled** | **bool** | Is status enabled | [optional] 
**display_name** | **string** | The short status string that is displayed to users in apps, portal. If empty then Order Status Name is displayed instead | [optional] 
**icon** | **string** | Icon/Image that represents that status visual | [optional] 
**public_description** | **string** | A string which could be used in notification templates with a placeholder (SMS, email, push, web page with status) | [optional] 
**internal** | **bool** | Is internal state (internal states not shown to customers) | [optional] 
**next_statuses** | **string[]** | list of statuses that this status can move to (can be back or forth) | [optional] 
**default_next_status** | [**\Flipdish\\Client\Models\NextStatusWithOrderType[]**](NextStatusWithOrderType.md) | The default next status (on a dropdown or quick button on terminal or portal) | [optional] 
**change_type** | **string** | How will state change (manually or automated, including timed) | [optional] 
**include_in_reports** | **bool** | Include in reports | [optional] 
**is_custom** | **bool** | Is custom state. If not, then it&#39;s a system state | [optional] 
**order_types** | **string[]** | If empty then applies to all ordertypes, otherwise a list of order types this state applies to | [optional] 
**communication** | **bool** | Whether state should fire off a notification to the customer | [optional] 
**image** | **string** | Image (image filename, relative, not absolute URL) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



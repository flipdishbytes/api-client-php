# KioskBluetoothTerminalFirmwareVersionStatusEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**device_id** | **string** | Device Id of the Kiosk | [optional] 
**serial_number** | **string** | Serial Number of the device | [optional] 
**has_firmware_update** | **bool** | Indicates if Payment Terminal has Firmware Update | [optional] 
**has_config_update** | **bool** | Indicates if Payment Terminal has Config Update | [optional] 
**has_key_update** | **bool** | Indicates if Payment Terminal has Key Update | [optional] 
**update_time_estimate** | **string** | ETA to install the update | [optional] 
**user_event_info** | [**\Flipdish\\Client\Models\UserEventInfo**](UserEventInfo.md) | User who made the changes | [optional] 
**event_name** | **string** | The event name | [optional] 
**flipdish_event_id** | **string** | The identitfier of the event | [optional] 
**create_time** | [**\DateTime**](\DateTime.md) | The time of creation of the event | [optional] 
**position** | **int** | Position | [optional] 
**app_id** | **string** | App id | [optional] 
**ip_address** | **string** | Ip Address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



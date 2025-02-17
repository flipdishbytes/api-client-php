<?php
/**
 * KioskBluetoothTerminalFirmwareVersionStatusEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flipdish Open API v1.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flipdish\\Client\Models;

use \ArrayAccess;
use \Flipdish\\Client\ObjectSerializer;

/**
 * KioskBluetoothTerminalFirmwareVersionStatusEvent Class Doc Comment
 *
 * @category Class
 * @description Kiosk Stripe Terminal Update info received event
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KioskBluetoothTerminalFirmwareVersionStatusEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KioskBluetoothTerminalFirmwareVersionStatusEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'device_id' => 'string',
        'serial_number' => 'string',
        'has_firmware_update' => 'bool',
        'has_config_update' => 'bool',
        'has_key_update' => 'bool',
        'update_time_estimate' => 'string',
        'user_event_info' => '\Flipdish\\Client\Models\UserEventInfo',
        'event_name' => 'string',
        'flipdish_event_id' => 'string',
        'create_time' => '\DateTime',
        'position' => 'int',
        'app_id' => 'string',
        'org_id' => 'string',
        'ip_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'device_id' => null,
        'serial_number' => null,
        'has_firmware_update' => null,
        'has_config_update' => null,
        'has_key_update' => null,
        'update_time_estimate' => null,
        'user_event_info' => null,
        'event_name' => null,
        'flipdish_event_id' => 'uuid',
        'create_time' => 'date-time',
        'position' => 'int32',
        'app_id' => null,
        'org_id' => null,
        'ip_address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'device_id' => 'DeviceId',
        'serial_number' => 'SerialNumber',
        'has_firmware_update' => 'HasFirmwareUpdate',
        'has_config_update' => 'HasConfigUpdate',
        'has_key_update' => 'HasKeyUpdate',
        'update_time_estimate' => 'UpdateTimeEstimate',
        'user_event_info' => 'UserEventInfo',
        'event_name' => 'EventName',
        'flipdish_event_id' => 'FlipdishEventId',
        'create_time' => 'CreateTime',
        'position' => 'Position',
        'app_id' => 'AppId',
        'org_id' => 'OrgId',
        'ip_address' => 'IpAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_id' => 'setDeviceId',
        'serial_number' => 'setSerialNumber',
        'has_firmware_update' => 'setHasFirmwareUpdate',
        'has_config_update' => 'setHasConfigUpdate',
        'has_key_update' => 'setHasKeyUpdate',
        'update_time_estimate' => 'setUpdateTimeEstimate',
        'user_event_info' => 'setUserEventInfo',
        'event_name' => 'setEventName',
        'flipdish_event_id' => 'setFlipdishEventId',
        'create_time' => 'setCreateTime',
        'position' => 'setPosition',
        'app_id' => 'setAppId',
        'org_id' => 'setOrgId',
        'ip_address' => 'setIpAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_id' => 'getDeviceId',
        'serial_number' => 'getSerialNumber',
        'has_firmware_update' => 'getHasFirmwareUpdate',
        'has_config_update' => 'getHasConfigUpdate',
        'has_key_update' => 'getHasKeyUpdate',
        'update_time_estimate' => 'getUpdateTimeEstimate',
        'user_event_info' => 'getUserEventInfo',
        'event_name' => 'getEventName',
        'flipdish_event_id' => 'getFlipdishEventId',
        'create_time' => 'getCreateTime',
        'position' => 'getPosition',
        'app_id' => 'getAppId',
        'org_id' => 'getOrgId',
        'ip_address' => 'getIpAddress'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const UPDATE_TIME_ESTIMATE_LESS_THAN_ONE_MINUTE = 'LessThanOneMinute';
    const UPDATE_TIME_ESTIMATE_ONE_TO_TWO_MINUTES = 'OneToTwoMinutes';
    const UPDATE_TIME_ESTIMATE_TWO_TO_FIVE_MINUTES = 'TwoToFiveMinutes';
    const UPDATE_TIME_ESTIMATE_FIVE_TO_FIFTEEN_MINUTES = 'FiveToFifteenMinutes';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateTimeEstimateAllowableValues()
    {
        return [
            self::UPDATE_TIME_ESTIMATE_LESS_THAN_ONE_MINUTE,
            self::UPDATE_TIME_ESTIMATE_ONE_TO_TWO_MINUTES,
            self::UPDATE_TIME_ESTIMATE_TWO_TO_FIVE_MINUTES,
            self::UPDATE_TIME_ESTIMATE_FIVE_TO_FIFTEEN_MINUTES,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['has_firmware_update'] = isset($data['has_firmware_update']) ? $data['has_firmware_update'] : null;
        $this->container['has_config_update'] = isset($data['has_config_update']) ? $data['has_config_update'] : null;
        $this->container['has_key_update'] = isset($data['has_key_update']) ? $data['has_key_update'] : null;
        $this->container['update_time_estimate'] = isset($data['update_time_estimate']) ? $data['update_time_estimate'] : null;
        $this->container['user_event_info'] = isset($data['user_event_info']) ? $data['user_event_info'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['flipdish_event_id'] = isset($data['flipdish_event_id']) ? $data['flipdish_event_id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUpdateTimeEstimateAllowableValues();
        if (!is_null($this->container['update_time_estimate']) && !in_array($this->container['update_time_estimate'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'update_time_estimate', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets device_id
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string $device_id Device Id of the Kiosk
     *
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number Serial Number of the device
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets has_firmware_update
     *
     * @return bool
     */
    public function getHasFirmwareUpdate()
    {
        return $this->container['has_firmware_update'];
    }

    /**
     * Sets has_firmware_update
     *
     * @param bool $has_firmware_update Indicates if Payment Terminal has Firmware Update
     *
     * @return $this
     */
    public function setHasFirmwareUpdate($has_firmware_update)
    {
        $this->container['has_firmware_update'] = $has_firmware_update;

        return $this;
    }

    /**
     * Gets has_config_update
     *
     * @return bool
     */
    public function getHasConfigUpdate()
    {
        return $this->container['has_config_update'];
    }

    /**
     * Sets has_config_update
     *
     * @param bool $has_config_update Indicates if Payment Terminal has Config Update
     *
     * @return $this
     */
    public function setHasConfigUpdate($has_config_update)
    {
        $this->container['has_config_update'] = $has_config_update;

        return $this;
    }

    /**
     * Gets has_key_update
     *
     * @return bool
     */
    public function getHasKeyUpdate()
    {
        return $this->container['has_key_update'];
    }

    /**
     * Sets has_key_update
     *
     * @param bool $has_key_update Indicates if Payment Terminal has Key Update
     *
     * @return $this
     */
    public function setHasKeyUpdate($has_key_update)
    {
        $this->container['has_key_update'] = $has_key_update;

        return $this;
    }

    /**
     * Gets update_time_estimate
     *
     * @return string
     */
    public function getUpdateTimeEstimate()
    {
        return $this->container['update_time_estimate'];
    }

    /**
     * Sets update_time_estimate
     *
     * @param string $update_time_estimate ETA to install the update
     *
     * @return $this
     */
    public function setUpdateTimeEstimate($update_time_estimate)
    {
        $allowedValues = $this->getUpdateTimeEstimateAllowableValues();
        if (!is_null($update_time_estimate) && !in_array($update_time_estimate, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'update_time_estimate', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['update_time_estimate'] = $update_time_estimate;

        return $this;
    }

    /**
     * Gets user_event_info
     *
     * @return \Flipdish\\Client\Models\UserEventInfo
     */
    public function getUserEventInfo()
    {
        return $this->container['user_event_info'];
    }

    /**
     * Sets user_event_info
     *
     * @param \Flipdish\\Client\Models\UserEventInfo $user_event_info User who made the changes
     *
     * @return $this
     */
    public function setUserEventInfo($user_event_info)
    {
        $this->container['user_event_info'] = $user_event_info;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name The event name
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets flipdish_event_id
     *
     * @return string
     */
    public function getFlipdishEventId()
    {
        return $this->container['flipdish_event_id'];
    }

    /**
     * Sets flipdish_event_id
     *
     * @param string $flipdish_event_id The identitfier of the event
     *
     * @return $this
     */
    public function setFlipdishEventId($flipdish_event_id)
    {
        $this->container['flipdish_event_id'] = $flipdish_event_id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime $create_time The time of creation of the event
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id App id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string $org_id Org id
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address Ip Address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



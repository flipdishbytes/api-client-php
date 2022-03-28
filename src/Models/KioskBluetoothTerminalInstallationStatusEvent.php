<?php
/**
 * KioskBluetoothTerminalInstallationStatusEvent
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
 * Swagger Codegen version: 2.4.19
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
 * KioskBluetoothTerminalInstallationStatusEvent Class Doc Comment
 *
 * @category Class
 * @description Kiosk bluetooth terminal Installation Status
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KioskBluetoothTerminalInstallationStatusEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KioskBluetoothTerminalInstallationStatusEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'device_id' => 'string',
        'bluetooth_terminal_type' => 'string',
        'bluetooth_terminal_serial_number' => 'string',
        'user' => '\Flipdish\\Client\Models\UserEventInfo',
        'progress' => 'int',
        'event_name' => 'string',
        'flipdish_event_id' => 'string',
        'create_time' => '\DateTime',
        'position' => 'int',
        'app_id' => 'string',
        'ip_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'device_id' => null,
        'bluetooth_terminal_type' => null,
        'bluetooth_terminal_serial_number' => null,
        'user' => null,
        'progress' => 'int32',
        'event_name' => null,
        'flipdish_event_id' => 'uuid',
        'create_time' => 'date-time',
        'position' => 'int32',
        'app_id' => null,
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
        'bluetooth_terminal_type' => 'BluetoothTerminalType',
        'bluetooth_terminal_serial_number' => 'BluetoothTerminalSerialNumber',
        'user' => 'User',
        'progress' => 'Progress',
        'event_name' => 'EventName',
        'flipdish_event_id' => 'FlipdishEventId',
        'create_time' => 'CreateTime',
        'position' => 'Position',
        'app_id' => 'AppId',
        'ip_address' => 'IpAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_id' => 'setDeviceId',
        'bluetooth_terminal_type' => 'setBluetoothTerminalType',
        'bluetooth_terminal_serial_number' => 'setBluetoothTerminalSerialNumber',
        'user' => 'setUser',
        'progress' => 'setProgress',
        'event_name' => 'setEventName',
        'flipdish_event_id' => 'setFlipdishEventId',
        'create_time' => 'setCreateTime',
        'position' => 'setPosition',
        'app_id' => 'setAppId',
        'ip_address' => 'setIpAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_id' => 'getDeviceId',
        'bluetooth_terminal_type' => 'getBluetoothTerminalType',
        'bluetooth_terminal_serial_number' => 'getBluetoothTerminalSerialNumber',
        'user' => 'getUser',
        'progress' => 'getProgress',
        'event_name' => 'getEventName',
        'flipdish_event_id' => 'getFlipdishEventId',
        'create_time' => 'getCreateTime',
        'position' => 'getPosition',
        'app_id' => 'getAppId',
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

    const BLUETOOTH_TERMINAL_TYPE_CHIPPER_2_X = 'CHIPPER_2X';
    const BLUETOOTH_TERMINAL_TYPE_COTS_DEVICE = 'COTS_DEVICE';
    const BLUETOOTH_TERMINAL_TYPE_VERIFONE_P400 = 'VERIFONE_P400';
    const BLUETOOTH_TERMINAL_TYPE_WISEPAD_3 = 'WISEPAD_3';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBluetoothTerminalTypeAllowableValues()
    {
        return [
            self::BLUETOOTH_TERMINAL_TYPE_CHIPPER_2_X,
            self::BLUETOOTH_TERMINAL_TYPE_COTS_DEVICE,
            self::BLUETOOTH_TERMINAL_TYPE_VERIFONE_P400,
            self::BLUETOOTH_TERMINAL_TYPE_WISEPAD_3,
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
        $this->container['bluetooth_terminal_type'] = isset($data['bluetooth_terminal_type']) ? $data['bluetooth_terminal_type'] : null;
        $this->container['bluetooth_terminal_serial_number'] = isset($data['bluetooth_terminal_serial_number']) ? $data['bluetooth_terminal_serial_number'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['flipdish_event_id'] = isset($data['flipdish_event_id']) ? $data['flipdish_event_id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
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

        $allowedValues = $this->getBluetoothTerminalTypeAllowableValues();
        if (!is_null($this->container['bluetooth_terminal_type']) && !in_array($this->container['bluetooth_terminal_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bluetooth_terminal_type', must be one of '%s'",
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
     * Gets bluetooth_terminal_type
     *
     * @return string
     */
    public function getBluetoothTerminalType()
    {
        return $this->container['bluetooth_terminal_type'];
    }

    /**
     * Sets bluetooth_terminal_type
     *
     * @param string $bluetooth_terminal_type Terminal Type
     *
     * @return $this
     */
    public function setBluetoothTerminalType($bluetooth_terminal_type)
    {
        $allowedValues = $this->getBluetoothTerminalTypeAllowableValues();
        if (!is_null($bluetooth_terminal_type) && !in_array($bluetooth_terminal_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bluetooth_terminal_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bluetooth_terminal_type'] = $bluetooth_terminal_type;

        return $this;
    }

    /**
     * Gets bluetooth_terminal_serial_number
     *
     * @return string
     */
    public function getBluetoothTerminalSerialNumber()
    {
        return $this->container['bluetooth_terminal_serial_number'];
    }

    /**
     * Sets bluetooth_terminal_serial_number
     *
     * @param string $bluetooth_terminal_serial_number Serial number of the terminal
     *
     * @return $this
     */
    public function setBluetoothTerminalSerialNumber($bluetooth_terminal_serial_number)
    {
        $this->container['bluetooth_terminal_serial_number'] = $bluetooth_terminal_serial_number;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Flipdish\\Client\Models\UserEventInfo
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Flipdish\\Client\Models\UserEventInfo $user User who made the change
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int $progress Update Install Progress for Card Reader
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

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



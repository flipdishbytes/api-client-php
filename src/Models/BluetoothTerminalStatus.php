<?php
/**
 * BluetoothTerminalStatus
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
 * BluetoothTerminalStatus Class Doc Comment
 *
 * @category Class
 * @description Status of the bluetooth terminal
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BluetoothTerminalStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BluetoothTerminalStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serial_number' => 'string',
        'software_version' => 'string',
        'device_type' => 'string',
        'status' => 'string',
        'battery_level' => 'float',
        'update_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serial_number' => null,
        'software_version' => null,
        'device_type' => null,
        'status' => null,
        'battery_level' => 'float',
        'update_time' => 'date-time'
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
        'serial_number' => 'SerialNumber',
        'software_version' => 'SoftwareVersion',
        'device_type' => 'DeviceType',
        'status' => 'Status',
        'battery_level' => 'BatteryLevel',
        'update_time' => 'UpdateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serial_number' => 'setSerialNumber',
        'software_version' => 'setSoftwareVersion',
        'device_type' => 'setDeviceType',
        'status' => 'setStatus',
        'battery_level' => 'setBatteryLevel',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serial_number' => 'getSerialNumber',
        'software_version' => 'getSoftwareVersion',
        'device_type' => 'getDeviceType',
        'status' => 'getStatus',
        'battery_level' => 'getBatteryLevel',
        'update_time' => 'getUpdateTime'
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

    const DEVICE_TYPE_CHIPPER_2_X = 'CHIPPER_2X';
    const DEVICE_TYPE_COTS_DEVICE = 'COTS_DEVICE';
    const DEVICE_TYPE_VERIFONE_P400 = 'VERIFONE_P400';
    const DEVICE_TYPE_WISEPAD_3 = 'WISEPAD_3';
    const STATUS_NOT_CONNECTED = 'Not_Connected';
    const STATUS_CONNECTING = 'Connecting';
    const STATUS_CONNECTED = 'Connected';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_CHIPPER_2_X,
            self::DEVICE_TYPE_COTS_DEVICE,
            self::DEVICE_TYPE_VERIFONE_P400,
            self::DEVICE_TYPE_WISEPAD_3,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_CONNECTED,
            self::STATUS_CONNECTING,
            self::STATUS_CONNECTED,
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
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['software_version'] = isset($data['software_version']) ? $data['software_version'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['battery_level'] = isset($data['battery_level']) ? $data['battery_level'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!is_null($this->container['device_type']) && !in_array($this->container['device_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'device_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $serial_number Serial Number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets software_version
     *
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->container['software_version'];
    }

    /**
     * Sets software_version
     *
     * @param string $software_version Software Version
     *
     * @return $this
     */
    public function setSoftwareVersion($software_version)
    {
        $this->container['software_version'] = $software_version;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type Device Type
     *
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!is_null($device_type) && !in_array($device_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'device_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Device Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets battery_level
     *
     * @return float
     */
    public function getBatteryLevel()
    {
        return $this->container['battery_level'];
    }

    /**
     * Sets battery_level
     *
     * @param float $battery_level Indication of the battery level from 0 to 1
     *
     * @return $this
     */
    public function setBatteryLevel($battery_level)
    {
        $this->container['battery_level'] = $battery_level;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param \DateTime $update_time Last time the status was updated
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

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



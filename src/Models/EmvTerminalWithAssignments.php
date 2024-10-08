<?php
/**
 * EmvTerminalWithAssignments
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
 * EmvTerminalWithAssignments Class Doc Comment
 *
 * @category Class
 * @description EMV Payment Terminal
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmvTerminalWithAssignments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmvTerminalWithAssignments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emv_terminal_id' => 'string',
        'terminal_id' => 'string',
        'is_assigned_to_hydra_device' => 'bool',
        'hydra_config_id' => 'int',
        'hydra_device_id' => 'string',
        'hydra_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emv_terminal_id' => null,
        'terminal_id' => null,
        'is_assigned_to_hydra_device' => null,
        'hydra_config_id' => 'int32',
        'hydra_device_id' => null,
        'hydra_name' => null
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
        'emv_terminal_id' => 'EmvTerminalId',
        'terminal_id' => 'TerminalId',
        'is_assigned_to_hydra_device' => 'IsAssignedToHydraDevice',
        'hydra_config_id' => 'HydraConfigId',
        'hydra_device_id' => 'HydraDeviceId',
        'hydra_name' => 'HydraName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emv_terminal_id' => 'setEmvTerminalId',
        'terminal_id' => 'setTerminalId',
        'is_assigned_to_hydra_device' => 'setIsAssignedToHydraDevice',
        'hydra_config_id' => 'setHydraConfigId',
        'hydra_device_id' => 'setHydraDeviceId',
        'hydra_name' => 'setHydraName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emv_terminal_id' => 'getEmvTerminalId',
        'terminal_id' => 'getTerminalId',
        'is_assigned_to_hydra_device' => 'getIsAssignedToHydraDevice',
        'hydra_config_id' => 'getHydraConfigId',
        'hydra_device_id' => 'getHydraDeviceId',
        'hydra_name' => 'getHydraName'
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
        $this->container['emv_terminal_id'] = isset($data['emv_terminal_id']) ? $data['emv_terminal_id'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['is_assigned_to_hydra_device'] = isset($data['is_assigned_to_hydra_device']) ? $data['is_assigned_to_hydra_device'] : null;
        $this->container['hydra_config_id'] = isset($data['hydra_config_id']) ? $data['hydra_config_id'] : null;
        $this->container['hydra_device_id'] = isset($data['hydra_device_id']) ? $data['hydra_device_id'] : null;
        $this->container['hydra_name'] = isset($data['hydra_name']) ? $data['hydra_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets emv_terminal_id
     *
     * @return string
     */
    public function getEmvTerminalId()
    {
        return $this->container['emv_terminal_id'];
    }

    /**
     * Sets emv_terminal_id
     *
     * @param string $emv_terminal_id Flipdish Internal identifier of the Terminal
     *
     * @return $this
     */
    public function setEmvTerminalId($emv_terminal_id)
    {
        $this->container['emv_terminal_id'] = $emv_terminal_id;

        return $this;
    }

    /**
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id External Identifier of the Terminal
     *
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets is_assigned_to_hydra_device
     *
     * @return bool
     */
    public function getIsAssignedToHydraDevice()
    {
        return $this->container['is_assigned_to_hydra_device'];
    }

    /**
     * Sets is_assigned_to_hydra_device
     *
     * @param bool $is_assigned_to_hydra_device true if the terminal is assigned to a hydra device (e.g. a kiosk)
     *
     * @return $this
     */
    public function setIsAssignedToHydraDevice($is_assigned_to_hydra_device)
    {
        $this->container['is_assigned_to_hydra_device'] = $is_assigned_to_hydra_device;

        return $this;
    }

    /**
     * Gets hydra_config_id
     *
     * @return int
     */
    public function getHydraConfigId()
    {
        return $this->container['hydra_config_id'];
    }

    /**
     * Sets hydra_config_id
     *
     * @param int $hydra_config_id hydra device id (null if the terminal is not assigned to any hydra device)
     *
     * @return $this
     */
    public function setHydraConfigId($hydra_config_id)
    {
        $this->container['hydra_config_id'] = $hydra_config_id;

        return $this;
    }

    /**
     * Gets hydra_device_id
     *
     * @return string
     */
    public function getHydraDeviceId()
    {
        return $this->container['hydra_device_id'];
    }

    /**
     * Sets hydra_device_id
     *
     * @param string $hydra_device_id external hydra device id (null if the terminal is not assigned to any hydra device)
     *
     * @return $this
     */
    public function setHydraDeviceId($hydra_device_id)
    {
        $this->container['hydra_device_id'] = $hydra_device_id;

        return $this;
    }

    /**
     * Gets hydra_name
     *
     * @return string
     */
    public function getHydraName()
    {
        return $this->container['hydra_name'];
    }

    /**
     * Sets hydra_name
     *
     * @param string $hydra_name hydra device name (null if the terminal is not assigned to any hydra device)
     *
     * @return $this
     */
    public function setHydraName($hydra_name)
    {
        $this->container['hydra_name'] = $hydra_name;

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



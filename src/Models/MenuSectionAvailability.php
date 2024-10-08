<?php
/**
 * MenuSectionAvailability
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
 * MenuSectionAvailability Class Doc Comment
 *
 * @category Class
 * @description Menu section availability
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenuSectionAvailability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MenuSectionAvailability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_times' => '\Flipdish\\Client\Models\BusinessHoursPeriod[]',
        'availability_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_times' => null,
        'availability_mode' => null
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
        'available_times' => 'AvailableTimes',
        'availability_mode' => 'AvailabilityMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_times' => 'setAvailableTimes',
        'availability_mode' => 'setAvailabilityMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_times' => 'getAvailableTimes',
        'availability_mode' => 'getAvailabilityMode'
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

    const AVAILABILITY_MODE_DISPLAY_ALWAYS = 'DisplayAlways';
    const AVAILABILITY_MODE_DISPLAY_BASED_ON_TIMES = 'DisplayBasedOnTimes';
    const AVAILABILITY_MODE_DISPLAY_ALWAYS_START_COLLAPSED = 'DisplayAlwaysStartCollapsed';
    const AVAILABILITY_MODE_DISPLAY_ALWAYS_START_COLLAPSED_BASED_ON_TIMES = 'DisplayAlwaysStartCollapsedBasedOnTimes';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityModeAllowableValues()
    {
        return [
            self::AVAILABILITY_MODE_DISPLAY_ALWAYS,
            self::AVAILABILITY_MODE_DISPLAY_BASED_ON_TIMES,
            self::AVAILABILITY_MODE_DISPLAY_ALWAYS_START_COLLAPSED,
            self::AVAILABILITY_MODE_DISPLAY_ALWAYS_START_COLLAPSED_BASED_ON_TIMES,
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
        $this->container['available_times'] = isset($data['available_times']) ? $data['available_times'] : null;
        $this->container['availability_mode'] = isset($data['availability_mode']) ? $data['availability_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAvailabilityModeAllowableValues();
        if (!is_null($this->container['availability_mode']) && !in_array($this->container['availability_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'availability_mode', must be one of '%s'",
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
     * Gets available_times
     *
     * @return \Flipdish\\Client\Models\BusinessHoursPeriod[]
     */
    public function getAvailableTimes()
    {
        return $this->container['available_times'];
    }

    /**
     * Sets available_times
     *
     * @param \Flipdish\\Client\Models\BusinessHoursPeriod[] $available_times Available times
     *
     * @return $this
     */
    public function setAvailableTimes($available_times)
    {
        $this->container['available_times'] = $available_times;

        return $this;
    }

    /**
     * Gets availability_mode
     *
     * @return string
     */
    public function getAvailabilityMode()
    {
        return $this->container['availability_mode'];
    }

    /**
     * Sets availability_mode
     *
     * @param string $availability_mode Availability mode
     *
     * @return $this
     */
    public function setAvailabilityMode($availability_mode)
    {
        $allowedValues = $this->getAvailabilityModeAllowableValues();
        if (!is_null($availability_mode) && !in_array($availability_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'availability_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability_mode'] = $availability_mode;

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



<?php
/**
 * SetVoucherValidityPeriodsSimplifiedRequest
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
 * SetVoucherValidityPeriodsSimplifiedRequest Class Doc Comment
 *
 * @category Class
 * @description Set the validity periods of a voucher.
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SetVoucherValidityPeriodsSimplifiedRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SetVoucherValidityPeriodsSimplifiedRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'days_of_week' => 'string[]',
        'start_time' => 'string',
        'end_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'days_of_week' => null,
        'start_time' => null,
        'end_time' => null
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
        'days_of_week' => 'DaysOfWeek',
        'start_time' => 'StartTime',
        'end_time' => 'EndTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'days_of_week' => 'setDaysOfWeek',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'days_of_week' => 'getDaysOfWeek',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime'
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

    const DAYS_OF_WEEK_SUNDAY = 'Sunday';
    const DAYS_OF_WEEK_MONDAY = 'Monday';
    const DAYS_OF_WEEK_TUESDAY = 'Tuesday';
    const DAYS_OF_WEEK_WEDNESDAY = 'Wednesday';
    const DAYS_OF_WEEK_THURSDAY = 'Thursday';
    const DAYS_OF_WEEK_FRIDAY = 'Friday';
    const DAYS_OF_WEEK_SATURDAY = 'Saturday';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDaysOfWeekAllowableValues()
    {
        return [
            self::DAYS_OF_WEEK_SUNDAY,
            self::DAYS_OF_WEEK_MONDAY,
            self::DAYS_OF_WEEK_TUESDAY,
            self::DAYS_OF_WEEK_WEDNESDAY,
            self::DAYS_OF_WEEK_THURSDAY,
            self::DAYS_OF_WEEK_FRIDAY,
            self::DAYS_OF_WEEK_SATURDAY,
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
        $this->container['days_of_week'] = isset($data['days_of_week']) ? $data['days_of_week'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
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
     * Gets days_of_week
     *
     * @return string[]
     */
    public function getDaysOfWeek()
    {
        return $this->container['days_of_week'];
    }

    /**
     * Sets days_of_week
     *
     * @param string[] $days_of_week Days of week when the voucher is valid
     *
     * @return $this
     */
    public function setDaysOfWeek($days_of_week)
    {
        $allowedValues = $this->getDaysOfWeekAllowableValues();
        if (!is_null($days_of_week) && array_diff($days_of_week, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'days_of_week', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time Start time of the day when the voucher is valid
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time End time of the day when the voucher is valid.  If the end time is before the start time, the end time is assumed to be the next day.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

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



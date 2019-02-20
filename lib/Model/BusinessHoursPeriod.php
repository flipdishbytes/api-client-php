<?php
/**
 * BusinessHoursPeriod
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flipdish\Client
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
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flipdish\Client\Model;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * BusinessHoursPeriod Class Doc Comment
 *
 * @category Class
 * @description Business hours period
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessHoursPeriod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessHoursPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'early' => '\Flipdish\Client\Model\Range',
        'late' => '\Flipdish\Client\Model\Range',
        'ranges' => '\Flipdish\Client\Model\Range[]',
        'day_of_week' => 'string',
        'start_time' => 'string',
        'period' => 'string',
        'start_time_early' => 'string',
        'period_early' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'early' => null,
        'late' => null,
        'ranges' => null,
        'day_of_week' => null,
        'start_time' => null,
        'period' => null,
        'start_time_early' => null,
        'period_early' => null
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
        'early' => 'Early',
        'late' => 'Late',
        'ranges' => 'Ranges',
        'day_of_week' => 'DayOfWeek',
        'start_time' => 'StartTime',
        'period' => 'Period',
        'start_time_early' => 'StartTimeEarly',
        'period_early' => 'PeriodEarly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'early' => 'setEarly',
        'late' => 'setLate',
        'ranges' => 'setRanges',
        'day_of_week' => 'setDayOfWeek',
        'start_time' => 'setStartTime',
        'period' => 'setPeriod',
        'start_time_early' => 'setStartTimeEarly',
        'period_early' => 'setPeriodEarly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'early' => 'getEarly',
        'late' => 'getLate',
        'ranges' => 'getRanges',
        'day_of_week' => 'getDayOfWeek',
        'start_time' => 'getStartTime',
        'period' => 'getPeriod',
        'start_time_early' => 'getStartTimeEarly',
        'period_early' => 'getPeriodEarly'
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

    const DAY_OF_WEEK_SUNDAY = 'Sunday';
    const DAY_OF_WEEK_MONDAY = 'Monday';
    const DAY_OF_WEEK_TUESDAY = 'Tuesday';
    const DAY_OF_WEEK_WEDNESDAY = 'Wednesday';
    const DAY_OF_WEEK_THURSDAY = 'Thursday';
    const DAY_OF_WEEK_FRIDAY = 'Friday';
    const DAY_OF_WEEK_SATURDAY = 'Saturday';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayOfWeekAllowableValues()
    {
        return [
            self::DAY_OF_WEEK_SUNDAY,
            self::DAY_OF_WEEK_MONDAY,
            self::DAY_OF_WEEK_TUESDAY,
            self::DAY_OF_WEEK_WEDNESDAY,
            self::DAY_OF_WEEK_THURSDAY,
            self::DAY_OF_WEEK_FRIDAY,
            self::DAY_OF_WEEK_SATURDAY,
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
        $this->container['early'] = isset($data['early']) ? $data['early'] : null;
        $this->container['late'] = isset($data['late']) ? $data['late'] : null;
        $this->container['ranges'] = isset($data['ranges']) ? $data['ranges'] : null;
        $this->container['day_of_week'] = isset($data['day_of_week']) ? $data['day_of_week'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['start_time_early'] = isset($data['start_time_early']) ? $data['start_time_early'] : null;
        $this->container['period_early'] = isset($data['period_early']) ? $data['period_early'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($this->container['day_of_week']) && !in_array($this->container['day_of_week'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'day_of_week', must be one of '%s'",
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
     * Gets early
     *
     * @return \Flipdish\Client\Model\Range
     */
    public function getEarly()
    {
        return $this->container['early'];
    }

    /**
     * Sets early
     *
     * @param \Flipdish\Client\Model\Range $early Early
     *
     * @return $this
     */
    public function setEarly($early)
    {
        $this->container['early'] = $early;

        return $this;
    }

    /**
     * Gets late
     *
     * @return \Flipdish\Client\Model\Range
     */
    public function getLate()
    {
        return $this->container['late'];
    }

    /**
     * Sets late
     *
     * @param \Flipdish\Client\Model\Range $late Late
     *
     * @return $this
     */
    public function setLate($late)
    {
        $this->container['late'] = $late;

        return $this;
    }

    /**
     * Gets ranges
     *
     * @return \Flipdish\Client\Model\Range[]
     */
    public function getRanges()
    {
        return $this->container['ranges'];
    }

    /**
     * Sets ranges
     *
     * @param \Flipdish\Client\Model\Range[] $ranges Ranges
     *
     * @return $this
     */
    public function setRanges($ranges)
    {
        $this->container['ranges'] = $ranges;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param string $day_of_week Day of week
     *
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($day_of_week) && !in_array($day_of_week, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'day_of_week', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['day_of_week'] = $day_of_week;

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
     * @param string $start_time Start time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period Period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets start_time_early
     *
     * @return string
     */
    public function getStartTimeEarly()
    {
        return $this->container['start_time_early'];
    }

    /**
     * Sets start_time_early
     *
     * @param string $start_time_early Start time early
     *
     * @return $this
     */
    public function setStartTimeEarly($start_time_early)
    {
        $this->container['start_time_early'] = $start_time_early;

        return $this;
    }

    /**
     * Gets period_early
     *
     * @return string
     */
    public function getPeriodEarly()
    {
        return $this->container['period_early'];
    }

    /**
     * Sets period_early
     *
     * @param string $period_early Period early
     *
     * @return $this
     */
    public function setPeriodEarly($period_early)
    {
        $this->container['period_early'] = $period_early;

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



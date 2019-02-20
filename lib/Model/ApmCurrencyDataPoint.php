<?php
/**
 * ApmCurrencyDataPoint
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
 * ApmCurrencyDataPoint Class Doc Comment
 *
 * @category Class
 * @description A single data point in timeline graphs related to APM
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApmCurrencyDataPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApmCurrencyDataPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'period_start' => '\DateTime',
        'period_length_in_days' => 'int',
        'currency_data' => '\Flipdish\Client\Model\CurrencyData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'period_start' => 'date-time',
        'period_length_in_days' => 'int32',
        'currency_data' => null
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
        'period_start' => 'PeriodStart',
        'period_length_in_days' => 'PeriodLengthInDays',
        'currency_data' => 'CurrencyData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_start' => 'setPeriodStart',
        'period_length_in_days' => 'setPeriodLengthInDays',
        'currency_data' => 'setCurrencyData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_start' => 'getPeriodStart',
        'period_length_in_days' => 'getPeriodLengthInDays',
        'currency_data' => 'getCurrencyData'
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
        $this->container['period_start'] = isset($data['period_start']) ? $data['period_start'] : null;
        $this->container['period_length_in_days'] = isset($data['period_length_in_days']) ? $data['period_length_in_days'] : null;
        $this->container['currency_data'] = isset($data['currency_data']) ? $data['currency_data'] : null;
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
     * Gets period_start
     *
     * @return \DateTime
     */
    public function getPeriodStart()
    {
        return $this->container['period_start'];
    }

    /**
     * Sets period_start
     *
     * @param \DateTime $period_start Date from which the data point starts
     *
     * @return $this
     */
    public function setPeriodStart($period_start)
    {
        $this->container['period_start'] = $period_start;

        return $this;
    }

    /**
     * Gets period_length_in_days
     *
     * @return int
     */
    public function getPeriodLengthInDays()
    {
        return $this->container['period_length_in_days'];
    }

    /**
     * Sets period_length_in_days
     *
     * @param int $period_length_in_days The length in days that this data point covers
     *
     * @return $this
     */
    public function setPeriodLengthInDays($period_length_in_days)
    {
        $this->container['period_length_in_days'] = $period_length_in_days;

        return $this;
    }

    /**
     * Gets currency_data
     *
     * @return \Flipdish\Client\Model\CurrencyData[]
     */
    public function getCurrencyData()
    {
        return $this->container['currency_data'];
    }

    /**
     * Sets currency_data
     *
     * @param \Flipdish\Client\Model\CurrencyData[] $currency_data The values of this data point
     *
     * @return $this
     */
    public function setCurrencyData($currency_data)
    {
        $this->container['currency_data'] = $currency_data;

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



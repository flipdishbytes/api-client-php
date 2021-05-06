<?php
/**
 * AccountDetailBase
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
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flipdish\Client\Models;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * AccountDetailBase Class Doc Comment
 *
 * @category Class
 * @description Account Details Base
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountDetailBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountDetailBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'language' => 'string',
        'time_zone_info_id' => 'string',
        'display_times_in_user_local_time_zone' => 'bool',
        'show_hidden_features' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'language' => null,
        'time_zone_info_id' => null,
        'display_times_in_user_local_time_zone' => null,
        'show_hidden_features' => null
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
        'name' => 'Name',
        'language' => 'Language',
        'time_zone_info_id' => 'TimeZoneInfoId',
        'display_times_in_user_local_time_zone' => 'DisplayTimesInUserLocalTimeZone',
        'show_hidden_features' => 'ShowHiddenFeatures'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'language' => 'setLanguage',
        'time_zone_info_id' => 'setTimeZoneInfoId',
        'display_times_in_user_local_time_zone' => 'setDisplayTimesInUserLocalTimeZone',
        'show_hidden_features' => 'setShowHiddenFeatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'language' => 'getLanguage',
        'time_zone_info_id' => 'getTimeZoneInfoId',
        'display_times_in_user_local_time_zone' => 'getDisplayTimesInUserLocalTimeZone',
        'show_hidden_features' => 'getShowHiddenFeatures'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['time_zone_info_id'] = isset($data['time_zone_info_id']) ? $data['time_zone_info_id'] : null;
        $this->container['display_times_in_user_local_time_zone'] = isset($data['display_times_in_user_local_time_zone']) ? $data['display_times_in_user_local_time_zone'] : null;
        $this->container['show_hidden_features'] = isset($data['show_hidden_features']) ? $data['show_hidden_features'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language Id
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets time_zone_info_id
     *
     * @return string
     */
    public function getTimeZoneInfoId()
    {
        return $this->container['time_zone_info_id'];
    }

    /**
     * Sets time_zone_info_id
     *
     * @param string $time_zone_info_id Time Zone Info Id
     *
     * @return $this
     */
    public function setTimeZoneInfoId($time_zone_info_id)
    {
        $this->container['time_zone_info_id'] = $time_zone_info_id;

        return $this;
    }

    /**
     * Gets display_times_in_user_local_time_zone
     *
     * @return bool
     */
    public function getDisplayTimesInUserLocalTimeZone()
    {
        return $this->container['display_times_in_user_local_time_zone'];
    }

    /**
     * Sets display_times_in_user_local_time_zone
     *
     * @param bool $display_times_in_user_local_time_zone Display the time in time zone local to the user
     *
     * @return $this
     */
    public function setDisplayTimesInUserLocalTimeZone($display_times_in_user_local_time_zone)
    {
        $this->container['display_times_in_user_local_time_zone'] = $display_times_in_user_local_time_zone;

        return $this;
    }

    /**
     * Gets show_hidden_features
     *
     * @return bool
     */
    public function getShowHiddenFeatures()
    {
        return $this->container['show_hidden_features'];
    }

    /**
     * Sets show_hidden_features
     *
     * @param bool $show_hidden_features Show hidden features
     *
     * @return $this
     */
    public function setShowHiddenFeatures($show_hidden_features)
    {
        $this->container['show_hidden_features'] = $show_hidden_features;

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



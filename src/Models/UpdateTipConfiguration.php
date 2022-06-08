<?php
/**
 * UpdateTipConfiguration
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
 * UpdateTipConfiguration Class Doc Comment
 *
 * @category Class
 * @description Describes the configuration of tipping
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateTipConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateTipConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_enabled' => 'bool',
        'allow_custom_tips' => 'bool',
        'allow_round_up' => 'bool',
        'percentages' => 'double[]',
        'default_percentage' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_enabled' => null,
        'allow_custom_tips' => null,
        'allow_round_up' => null,
        'percentages' => 'double',
        'default_percentage' => 'double'
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
        'is_enabled' => 'IsEnabled',
        'allow_custom_tips' => 'AllowCustomTips',
        'allow_round_up' => 'AllowRoundUp',
        'percentages' => 'Percentages',
        'default_percentage' => 'DefaultPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_enabled' => 'setIsEnabled',
        'allow_custom_tips' => 'setAllowCustomTips',
        'allow_round_up' => 'setAllowRoundUp',
        'percentages' => 'setPercentages',
        'default_percentage' => 'setDefaultPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_enabled' => 'getIsEnabled',
        'allow_custom_tips' => 'getAllowCustomTips',
        'allow_round_up' => 'getAllowRoundUp',
        'percentages' => 'getPercentages',
        'default_percentage' => 'getDefaultPercentage'
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
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['allow_custom_tips'] = isset($data['allow_custom_tips']) ? $data['allow_custom_tips'] : null;
        $this->container['allow_round_up'] = isset($data['allow_round_up']) ? $data['allow_round_up'] : null;
        $this->container['percentages'] = isset($data['percentages']) ? $data['percentages'] : null;
        $this->container['default_percentage'] = isset($data['default_percentage']) ? $data['default_percentage'] : null;
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
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Are tips enabled?
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets allow_custom_tips
     *
     * @return bool
     */
    public function getAllowCustomTips()
    {
        return $this->container['allow_custom_tips'];
    }

    /**
     * Sets allow_custom_tips
     *
     * @param bool $allow_custom_tips Are custom tips allowed?
     *
     * @return $this
     */
    public function setAllowCustomTips($allow_custom_tips)
    {
        $this->container['allow_custom_tips'] = $allow_custom_tips;

        return $this;
    }

    /**
     * Gets allow_round_up
     *
     * @return bool
     */
    public function getAllowRoundUp()
    {
        return $this->container['allow_round_up'];
    }

    /**
     * Sets allow_round_up
     *
     * @param bool $allow_round_up Is round up allowed?
     *
     * @return $this
     */
    public function setAllowRoundUp($allow_round_up)
    {
        $this->container['allow_round_up'] = $allow_round_up;

        return $this;
    }

    /**
     * Gets percentages
     *
     * @return double[]
     */
    public function getPercentages()
    {
        return $this->container['percentages'];
    }

    /**
     * Sets percentages
     *
     * @param double[] $percentages Ordered list of tip breakpoints (smallest -&gt; largest)
     *
     * @return $this
     */
    public function setPercentages($percentages)
    {
        $this->container['percentages'] = $percentages;

        return $this;
    }

    /**
     * Gets default_percentage
     *
     * @return double
     */
    public function getDefaultPercentage()
    {
        return $this->container['default_percentage'];
    }

    /**
     * Sets default_percentage
     *
     * @param double $default_percentage Defines a default percentage, it must be in the list of Percentages
     *
     * @return $this
     */
    public function setDefaultPercentage($default_percentage)
    {
        $this->container['default_percentage'] = $default_percentage;

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



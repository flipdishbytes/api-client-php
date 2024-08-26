<?php
/**
 * DynamicFormRules
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
 * DynamicFormRules Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicFormRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicFormRules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_length' => '\Flipdish\\Client\Models\DynamicFormRule',
        'min_length' => '\Flipdish\\Client\Models\DynamicFormRule',
        'required' => '\Flipdish\\Client\Models\DynamicFormRule',
        'pattern' => '\Flipdish\\Client\Models\DynamicFormRule',
        'predefined' => '\Flipdish\\Client\Models\DynamicFormFieldOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_length' => null,
        'min_length' => null,
        'required' => null,
        'pattern' => null,
        'predefined' => null
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
        'max_length' => 'MaxLength',
        'min_length' => 'MinLength',
        'required' => 'Required',
        'pattern' => 'Pattern',
        'predefined' => 'Predefined'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_length' => 'setMaxLength',
        'min_length' => 'setMinLength',
        'required' => 'setRequired',
        'pattern' => 'setPattern',
        'predefined' => 'setPredefined'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_length' => 'getMaxLength',
        'min_length' => 'getMinLength',
        'required' => 'getRequired',
        'pattern' => 'getPattern',
        'predefined' => 'getPredefined'
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
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['predefined'] = isset($data['predefined']) ? $data['predefined'] : null;
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
     * Gets max_length
     *
     * @return \Flipdish\\Client\Models\DynamicFormRule
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param \Flipdish\\Client\Models\DynamicFormRule $max_length max_length
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets min_length
     *
     * @return \Flipdish\\Client\Models\DynamicFormRule
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param \Flipdish\\Client\Models\DynamicFormRule $min_length min_length
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets required
     *
     * @return \Flipdish\\Client\Models\DynamicFormRule
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param \Flipdish\\Client\Models\DynamicFormRule $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return \Flipdish\\Client\Models\DynamicFormRule
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param \Flipdish\\Client\Models\DynamicFormRule $pattern pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets predefined
     *
     * @return \Flipdish\\Client\Models\DynamicFormFieldOption[]
     */
    public function getPredefined()
    {
        return $this->container['predefined'];
    }

    /**
     * Sets predefined
     *
     * @param \Flipdish\\Client\Models\DynamicFormFieldOption[] $predefined predefined
     *
     * @return $this
     */
    public function setPredefined($predefined)
    {
        $this->container['predefined'] = $predefined;

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



<?php
/**
 * MenuElementHide
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
 * MenuElementHide Class Doc Comment
 *
 * @category Class
 * @description Menu element hide
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenuElementHide implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MenuElementHide';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_element_id' => 'int',
        'menu_element_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_element_id' => 'int32',
        'menu_element_type' => null
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
        'menu_element_id' => 'MenuElementId',
        'menu_element_type' => 'MenuElementType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_element_id' => 'setMenuElementId',
        'menu_element_type' => 'setMenuElementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_element_id' => 'getMenuElementId',
        'menu_element_type' => 'getMenuElementType'
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

    const MENU_ELEMENT_TYPE_ITEM = 'Item';
    const MENU_ELEMENT_TYPE_OPTION_SET_ITEM = 'OptionSetItem';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMenuElementTypeAllowableValues()
    {
        return [
            self::MENU_ELEMENT_TYPE_ITEM,
            self::MENU_ELEMENT_TYPE_OPTION_SET_ITEM,
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
        $this->container['menu_element_id'] = isset($data['menu_element_id']) ? $data['menu_element_id'] : null;
        $this->container['menu_element_type'] = isset($data['menu_element_type']) ? $data['menu_element_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMenuElementTypeAllowableValues();
        if (!is_null($this->container['menu_element_type']) && !in_array($this->container['menu_element_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'menu_element_type', must be one of '%s'",
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
     * Gets menu_element_id
     *
     * @return int
     */
    public function getMenuElementId()
    {
        return $this->container['menu_element_id'];
    }

    /**
     * Sets menu_element_id
     *
     * @param int $menu_element_id id of the menu item or menu option set item
     *
     * @return $this
     */
    public function setMenuElementId($menu_element_id)
    {
        $this->container['menu_element_id'] = $menu_element_id;

        return $this;
    }

    /**
     * Gets menu_element_type
     *
     * @return string
     */
    public function getMenuElementType()
    {
        return $this->container['menu_element_type'];
    }

    /**
     * Sets menu_element_type
     *
     * @param string $menu_element_type Type of menu element
     *
     * @return $this
     */
    public function setMenuElementType($menu_element_type)
    {
        $allowedValues = $this->getMenuElementTypeAllowableValues();
        if (!is_null($menu_element_type) && !in_array($menu_element_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'menu_element_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['menu_element_type'] = $menu_element_type;

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



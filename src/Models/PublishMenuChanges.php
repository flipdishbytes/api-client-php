<?php
/**
 * PublishMenuChanges
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
 * PublishMenuChanges Class Doc Comment
 *
 * @category Class
 * @description Publish Menu Changes
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublishMenuChanges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublishMenuChanges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'catalog_element_id' => 'string',
        'menu_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'catalog_element_id' => null,
        'menu_ids' => 'int32'
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
        'catalog_element_id' => 'CatalogElementId',
        'menu_ids' => 'MenuIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'catalog_element_id' => 'setCatalogElementId',
        'menu_ids' => 'setMenuIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'catalog_element_id' => 'getCatalogElementId',
        'menu_ids' => 'getMenuIds'
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
        $this->container['catalog_element_id'] = isset($data['catalog_element_id']) ? $data['catalog_element_id'] : null;
        $this->container['menu_ids'] = isset($data['menu_ids']) ? $data['menu_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['catalog_element_id']) && (mb_strlen($this->container['catalog_element_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'catalog_element_id', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['catalog_element_id']) && (mb_strlen($this->container['catalog_element_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'catalog_element_id', the character length must be bigger than or equal to 0.";
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
     * Gets catalog_element_id
     *
     * @return string
     */
    public function getCatalogElementId()
    {
        return $this->container['catalog_element_id'];
    }

    /**
     * Sets catalog_element_id
     *
     * @param string $catalog_element_id Optional Catalog element id
     *
     * @return $this
     */
    public function setCatalogElementId($catalog_element_id)
    {
        if (!is_null($catalog_element_id) && (mb_strlen($catalog_element_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $catalog_element_id when calling PublishMenuChanges., must be smaller than or equal to 30.');
        }
        if (!is_null($catalog_element_id) && (mb_strlen($catalog_element_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $catalog_element_id when calling PublishMenuChanges., must be bigger than or equal to 0.');
        }

        $this->container['catalog_element_id'] = $catalog_element_id;

        return $this;
    }

    /**
     * Gets menu_ids
     *
     * @return int[]
     */
    public function getMenuIds()
    {
        return $this->container['menu_ids'];
    }

    /**
     * Sets menu_ids
     *
     * @param int[] $menu_ids Optional Collection of Menu id
     *
     * @return $this
     */
    public function setMenuIds($menu_ids)
    {
        $this->container['menu_ids'] = $menu_ids;

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



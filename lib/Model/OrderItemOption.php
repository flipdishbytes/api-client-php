<?php
/**
 * OrderItemOption
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
 * OrderItemOption Class Doc Comment
 *
 * @category Class
 * @description Order item option
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItemOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItemOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'metadata' => 'map[string,string]',
        'menu_item_option_id' => 'int',
        'is_master_option_set_item' => 'bool',
        'name' => 'string',
        'price' => 'double',
        'menu_item_option_display_order' => 'int',
        'menu_item_option_set_display_order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'metadata' => null,
        'menu_item_option_id' => 'int32',
        'is_master_option_set_item' => null,
        'name' => null,
        'price' => 'double',
        'menu_item_option_display_order' => 'int32',
        'menu_item_option_set_display_order' => 'int32'
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
        'metadata' => 'Metadata',
        'menu_item_option_id' => 'MenuItemOptionId',
        'is_master_option_set_item' => 'IsMasterOptionSetItem',
        'name' => 'Name',
        'price' => 'Price',
        'menu_item_option_display_order' => 'MenuItemOptionDisplayOrder',
        'menu_item_option_set_display_order' => 'MenuItemOptionSetDisplayOrder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metadata' => 'setMetadata',
        'menu_item_option_id' => 'setMenuItemOptionId',
        'is_master_option_set_item' => 'setIsMasterOptionSetItem',
        'name' => 'setName',
        'price' => 'setPrice',
        'menu_item_option_display_order' => 'setMenuItemOptionDisplayOrder',
        'menu_item_option_set_display_order' => 'setMenuItemOptionSetDisplayOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metadata' => 'getMetadata',
        'menu_item_option_id' => 'getMenuItemOptionId',
        'is_master_option_set_item' => 'getIsMasterOptionSetItem',
        'name' => 'getName',
        'price' => 'getPrice',
        'menu_item_option_display_order' => 'getMenuItemOptionDisplayOrder',
        'menu_item_option_set_display_order' => 'getMenuItemOptionSetDisplayOrder'
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
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['menu_item_option_id'] = isset($data['menu_item_option_id']) ? $data['menu_item_option_id'] : null;
        $this->container['is_master_option_set_item'] = isset($data['is_master_option_set_item']) ? $data['is_master_option_set_item'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['menu_item_option_display_order'] = isset($data['menu_item_option_display_order']) ? $data['menu_item_option_display_order'] : null;
        $this->container['menu_item_option_set_display_order'] = isset($data['menu_item_option_set_display_order']) ? $data['menu_item_option_set_display_order'] : null;
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
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata Metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets menu_item_option_id
     *
     * @return int
     */
    public function getMenuItemOptionId()
    {
        return $this->container['menu_item_option_id'];
    }

    /**
     * Sets menu_item_option_id
     *
     * @param int $menu_item_option_id Menu item option identifier
     *
     * @return $this
     */
    public function setMenuItemOptionId($menu_item_option_id)
    {
        $this->container['menu_item_option_id'] = $menu_item_option_id;

        return $this;
    }

    /**
     * Gets is_master_option_set_item
     *
     * @return bool
     */
    public function getIsMasterOptionSetItem()
    {
        return $this->container['is_master_option_set_item'];
    }

    /**
     * Sets is_master_option_set_item
     *
     * @param bool $is_master_option_set_item Is master option set item
     *
     * @return $this
     */
    public function setIsMasterOptionSetItem($is_master_option_set_item)
    {
        $this->container['is_master_option_set_item'] = $is_master_option_set_item;

        return $this;
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
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets menu_item_option_display_order
     *
     * @return int
     */
    public function getMenuItemOptionDisplayOrder()
    {
        return $this->container['menu_item_option_display_order'];
    }

    /**
     * Sets menu_item_option_display_order
     *
     * @param int $menu_item_option_display_order Menu item option display order
     *
     * @return $this
     */
    public function setMenuItemOptionDisplayOrder($menu_item_option_display_order)
    {
        $this->container['menu_item_option_display_order'] = $menu_item_option_display_order;

        return $this;
    }

    /**
     * Gets menu_item_option_set_display_order
     *
     * @return int
     */
    public function getMenuItemOptionSetDisplayOrder()
    {
        return $this->container['menu_item_option_set_display_order'];
    }

    /**
     * Sets menu_item_option_set_display_order
     *
     * @param int $menu_item_option_set_display_order Menu item option set display order
     *
     * @return $this
     */
    public function setMenuItemOptionSetDisplayOrder($menu_item_option_set_display_order)
    {
        $this->container['menu_item_option_set_display_order'] = $menu_item_option_set_display_order;

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



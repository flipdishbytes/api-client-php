<?php
/**
 * NutritionInfoV2
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
 * NutritionInfoV2 Class Doc Comment
 *
 * @category Class
 * @description Menu Nutrition Information. Version 2 (localized).
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NutritionInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NutritionInfoV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_items' => '\Flipdish\\Client\Models\NutritionInfoV2Item[]',
        'menu_item_option_set_items' => '\Flipdish\\Client\Models\NutritionInfoV2Item[]',
        'image_base_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_items' => null,
        'menu_item_option_set_items' => null,
        'image_base_url' => null
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
        'menu_items' => 'MenuItems',
        'menu_item_option_set_items' => 'MenuItemOptionSetItems',
        'image_base_url' => 'ImageBaseUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_items' => 'setMenuItems',
        'menu_item_option_set_items' => 'setMenuItemOptionSetItems',
        'image_base_url' => 'setImageBaseUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_items' => 'getMenuItems',
        'menu_item_option_set_items' => 'getMenuItemOptionSetItems',
        'image_base_url' => 'getImageBaseUrl'
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
        $this->container['menu_items'] = isset($data['menu_items']) ? $data['menu_items'] : null;
        $this->container['menu_item_option_set_items'] = isset($data['menu_item_option_set_items']) ? $data['menu_item_option_set_items'] : null;
        $this->container['image_base_url'] = isset($data['image_base_url']) ? $data['image_base_url'] : null;
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
     * Gets menu_items
     *
     * @return \Flipdish\\Client\Models\NutritionInfoV2Item[]
     */
    public function getMenuItems()
    {
        return $this->container['menu_items'];
    }

    /**
     * Sets menu_items
     *
     * @param \Flipdish\\Client\Models\NutritionInfoV2Item[] $menu_items List of menu item nutrition infos
     *
     * @return $this
     */
    public function setMenuItems($menu_items)
    {
        $this->container['menu_items'] = $menu_items;

        return $this;
    }

    /**
     * Gets menu_item_option_set_items
     *
     * @return \Flipdish\\Client\Models\NutritionInfoV2Item[]
     */
    public function getMenuItemOptionSetItems()
    {
        return $this->container['menu_item_option_set_items'];
    }

    /**
     * Sets menu_item_option_set_items
     *
     * @param \Flipdish\\Client\Models\NutritionInfoV2Item[] $menu_item_option_set_items List of menu item option set nutrition infos
     *
     * @return $this
     */
    public function setMenuItemOptionSetItems($menu_item_option_set_items)
    {
        $this->container['menu_item_option_set_items'] = $menu_item_option_set_items;

        return $this;
    }

    /**
     * Gets image_base_url
     *
     * @return string
     */
    public function getImageBaseUrl()
    {
        return $this->container['image_base_url'];
    }

    /**
     * Sets image_base_url
     *
     * @param string $image_base_url Base url for allergen images
     *
     * @return $this
     */
    public function setImageBaseUrl($image_base_url)
    {
        $this->container['image_base_url'] = $image_base_url;

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



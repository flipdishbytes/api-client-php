<?php
/**
 * MenuSection
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

namespace Flipdish\Client\Models;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * MenuSection Class Doc Comment
 *
 * @category Class
 * @description Menu section
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenuSection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MenuSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_section_id' => 'int',
        'image_url' => 'string',
        'menu_items' => '\Flipdish\Client\Models\MenuSectionItem[]',
        'menu_section_availability' => '\Flipdish\Client\Models\MenuSectionAvailability',
        'public_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'display_order' => 'int',
        'is_available' => 'bool',
        'is_hidden_from_customers' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_section_id' => 'int32',
        'image_url' => null,
        'menu_items' => null,
        'menu_section_availability' => null,
        'public_id' => 'uuid',
        'name' => null,
        'description' => null,
        'display_order' => 'int32',
        'is_available' => null,
        'is_hidden_from_customers' => null
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
        'menu_section_id' => 'MenuSectionId',
        'image_url' => 'ImageUrl',
        'menu_items' => 'MenuItems',
        'menu_section_availability' => 'MenuSectionAvailability',
        'public_id' => 'PublicId',
        'name' => 'Name',
        'description' => 'Description',
        'display_order' => 'DisplayOrder',
        'is_available' => 'IsAvailable',
        'is_hidden_from_customers' => 'IsHiddenFromCustomers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_section_id' => 'setMenuSectionId',
        'image_url' => 'setImageUrl',
        'menu_items' => 'setMenuItems',
        'menu_section_availability' => 'setMenuSectionAvailability',
        'public_id' => 'setPublicId',
        'name' => 'setName',
        'description' => 'setDescription',
        'display_order' => 'setDisplayOrder',
        'is_available' => 'setIsAvailable',
        'is_hidden_from_customers' => 'setIsHiddenFromCustomers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_section_id' => 'getMenuSectionId',
        'image_url' => 'getImageUrl',
        'menu_items' => 'getMenuItems',
        'menu_section_availability' => 'getMenuSectionAvailability',
        'public_id' => 'getPublicId',
        'name' => 'getName',
        'description' => 'getDescription',
        'display_order' => 'getDisplayOrder',
        'is_available' => 'getIsAvailable',
        'is_hidden_from_customers' => 'getIsHiddenFromCustomers'
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
        $this->container['menu_section_id'] = isset($data['menu_section_id']) ? $data['menu_section_id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['menu_items'] = isset($data['menu_items']) ? $data['menu_items'] : null;
        $this->container['menu_section_availability'] = isset($data['menu_section_availability']) ? $data['menu_section_availability'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['is_available'] = isset($data['is_available']) ? $data['is_available'] : null;
        $this->container['is_hidden_from_customers'] = isset($data['is_hidden_from_customers']) ? $data['is_hidden_from_customers'] : null;
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
     * Gets menu_section_id
     *
     * @return int
     */
    public function getMenuSectionId()
    {
        return $this->container['menu_section_id'];
    }

    /**
     * Sets menu_section_id
     *
     * @param int $menu_section_id Menu section identifier
     *
     * @return $this
     */
    public function setMenuSectionId($menu_section_id)
    {
        $this->container['menu_section_id'] = $menu_section_id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Image url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets menu_items
     *
     * @return \Flipdish\Client\Models\MenuSectionItem[]
     */
    public function getMenuItems()
    {
        return $this->container['menu_items'];
    }

    /**
     * Sets menu_items
     *
     * @param \Flipdish\Client\Models\MenuSectionItem[] $menu_items Menu items
     *
     * @return $this
     */
    public function setMenuItems($menu_items)
    {
        $this->container['menu_items'] = $menu_items;

        return $this;
    }

    /**
     * Gets menu_section_availability
     *
     * @return \Flipdish\Client\Models\MenuSectionAvailability
     */
    public function getMenuSectionAvailability()
    {
        return $this->container['menu_section_availability'];
    }

    /**
     * Sets menu_section_availability
     *
     * @param \Flipdish\Client\Models\MenuSectionAvailability $menu_section_availability Menu section availability
     *
     * @return $this
     */
    public function setMenuSectionAvailability($menu_section_availability)
    {
        $this->container['menu_section_availability'] = $menu_section_availability;

        return $this;
    }

    /**
     * Gets public_id
     *
     * @return string
     */
    public function getPublicId()
    {
        return $this->container['public_id'];
    }

    /**
     * Sets public_id
     *
     * @param string $public_id Permanent reference to the item.
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_order
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->container['display_order'];
    }

    /**
     * Sets display_order
     *
     * @param int $display_order Display order
     *
     * @return $this
     */
    public function setDisplayOrder($display_order)
    {
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets is_available
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool $is_available Is available
     *
     * @return $this
     */
    public function setIsAvailable($is_available)
    {
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets is_hidden_from_customers
     *
     * @return bool
     */
    public function getIsHiddenFromCustomers()
    {
        return $this->container['is_hidden_from_customers'];
    }

    /**
     * Sets is_hidden_from_customers
     *
     * @param bool $is_hidden_from_customers Is hidden from customer. Perhaps when the item is out of stock.
     *
     * @return $this
     */
    public function setIsHiddenFromCustomers($is_hidden_from_customers)
    {
        $this->container['is_hidden_from_customers'] = $is_hidden_from_customers;

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



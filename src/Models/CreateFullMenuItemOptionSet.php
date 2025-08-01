<?php
/**
 * CreateFullMenuItemOptionSet
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
 * CreateFullMenuItemOptionSet Class Doc Comment
 *
 * @category Class
 * @description Create menu item option set
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateFullMenuItemOptionSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFullMenuItemOptionSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_item_option_set_id' => 'int',
        'menu_item_option_set_items' => '\Flipdish\\Client\Models\CreateFullMenuItemOptionSetItem[]',
        'name' => 'string',
        'is_master_option_set' => 'bool',
        'display_order' => 'int',
        'min_select_count' => 'int',
        'max_select_count' => 'int',
        'cell_layout_type' => 'string',
        'public_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_item_option_set_id' => 'int32',
        'menu_item_option_set_items' => null,
        'name' => null,
        'is_master_option_set' => null,
        'display_order' => 'int32',
        'min_select_count' => 'int32',
        'max_select_count' => 'int32',
        'cell_layout_type' => null,
        'public_id' => 'uuid'
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
        'menu_item_option_set_id' => 'MenuItemOptionSetId',
        'menu_item_option_set_items' => 'MenuItemOptionSetItems',
        'name' => 'Name',
        'is_master_option_set' => 'IsMasterOptionSet',
        'display_order' => 'DisplayOrder',
        'min_select_count' => 'MinSelectCount',
        'max_select_count' => 'MaxSelectCount',
        'cell_layout_type' => 'CellLayoutType',
        'public_id' => 'PublicId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_item_option_set_id' => 'setMenuItemOptionSetId',
        'menu_item_option_set_items' => 'setMenuItemOptionSetItems',
        'name' => 'setName',
        'is_master_option_set' => 'setIsMasterOptionSet',
        'display_order' => 'setDisplayOrder',
        'min_select_count' => 'setMinSelectCount',
        'max_select_count' => 'setMaxSelectCount',
        'cell_layout_type' => 'setCellLayoutType',
        'public_id' => 'setPublicId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_item_option_set_id' => 'getMenuItemOptionSetId',
        'menu_item_option_set_items' => 'getMenuItemOptionSetItems',
        'name' => 'getName',
        'is_master_option_set' => 'getIsMasterOptionSet',
        'display_order' => 'getDisplayOrder',
        'min_select_count' => 'getMinSelectCount',
        'max_select_count' => 'getMaxSelectCount',
        'cell_layout_type' => 'getCellLayoutType',
        'public_id' => 'getPublicId'
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

    const CELL_LAYOUT_TYPE_SMALL = 'Small';
    const CELL_LAYOUT_TYPE_MEDIUM = 'Medium';
    const CELL_LAYOUT_TYPE_LARGE = 'Large';
    const CELL_LAYOUT_TYPE_HIDDEN_IMAGE = 'HiddenImage';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCellLayoutTypeAllowableValues()
    {
        return [
            self::CELL_LAYOUT_TYPE_SMALL,
            self::CELL_LAYOUT_TYPE_MEDIUM,
            self::CELL_LAYOUT_TYPE_LARGE,
            self::CELL_LAYOUT_TYPE_HIDDEN_IMAGE,
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
        $this->container['menu_item_option_set_id'] = isset($data['menu_item_option_set_id']) ? $data['menu_item_option_set_id'] : null;
        $this->container['menu_item_option_set_items'] = isset($data['menu_item_option_set_items']) ? $data['menu_item_option_set_items'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_master_option_set'] = isset($data['is_master_option_set']) ? $data['is_master_option_set'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['min_select_count'] = isset($data['min_select_count']) ? $data['min_select_count'] : null;
        $this->container['max_select_count'] = isset($data['max_select_count']) ? $data['max_select_count'] : null;
        $this->container['cell_layout_type'] = isset($data['cell_layout_type']) ? $data['cell_layout_type'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 4000)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getCellLayoutTypeAllowableValues();
        if (!is_null($this->container['cell_layout_type']) && !in_array($this->container['cell_layout_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cell_layout_type', must be one of '%s'",
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
     * Gets menu_item_option_set_id
     *
     * @return int
     */
    public function getMenuItemOptionSetId()
    {
        return $this->container['menu_item_option_set_id'];
    }

    /**
     * Sets menu_item_option_set_id
     *
     * @param int $menu_item_option_set_id Menu item option set identifier
     *
     * @return $this
     */
    public function setMenuItemOptionSetId($menu_item_option_set_id)
    {
        $this->container['menu_item_option_set_id'] = $menu_item_option_set_id;

        return $this;
    }

    /**
     * Gets menu_item_option_set_items
     *
     * @return \Flipdish\\Client\Models\CreateFullMenuItemOptionSetItem[]
     */
    public function getMenuItemOptionSetItems()
    {
        return $this->container['menu_item_option_set_items'];
    }

    /**
     * Sets menu_item_option_set_items
     *
     * @param \Flipdish\\Client\Models\CreateFullMenuItemOptionSetItem[] $menu_item_option_set_items Option set items
     *
     * @return $this
     */
    public function setMenuItemOptionSetItems($menu_item_option_set_items)
    {
        $this->container['menu_item_option_set_items'] = $menu_item_option_set_items;

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
     * @param string $name Menu item option set name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateFullMenuItemOptionSet., must be smaller than or equal to 4000.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateFullMenuItemOptionSet., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_master_option_set
     *
     * @return bool
     */
    public function getIsMasterOptionSet()
    {
        return $this->container['is_master_option_set'];
    }

    /**
     * Sets is_master_option_set
     *
     * @param bool $is_master_option_set Is master option set. This can affect the layout of the options in the menu displayed to the customer. Usually it is true if the option could be considerd a standalone item as opposed to an addition (\"with ketchup\") or modifier (\"large\").
     *
     * @return $this
     */
    public function setIsMasterOptionSet($is_master_option_set)
    {
        $this->container['is_master_option_set'] = $is_master_option_set;

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
     * @param int $display_order Display order. Displayed in ascending order.
     *
     * @return $this
     */
    public function setDisplayOrder($display_order)
    {
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets min_select_count
     *
     * @return int
     */
    public function getMinSelectCount()
    {
        return $this->container['min_select_count'];
    }

    /**
     * Sets min_select_count
     *
     * @param int $min_select_count Minimum items must be selected
     *
     * @return $this
     */
    public function setMinSelectCount($min_select_count)
    {
        $this->container['min_select_count'] = $min_select_count;

        return $this;
    }

    /**
     * Gets max_select_count
     *
     * @return int
     */
    public function getMaxSelectCount()
    {
        return $this->container['max_select_count'];
    }

    /**
     * Sets max_select_count
     *
     * @param int $max_select_count Maximum number of items can be selected
     *
     * @return $this
     */
    public function setMaxSelectCount($max_select_count)
    {
        $this->container['max_select_count'] = $max_select_count;

        return $this;
    }

    /**
     * Gets cell_layout_type
     *
     * @return string
     */
    public function getCellLayoutType()
    {
        return $this->container['cell_layout_type'];
    }

    /**
     * Sets cell_layout_type
     *
     * @param string $cell_layout_type Small | Medium | Large  Affects the layout of the menu.
     *
     * @return $this
     */
    public function setCellLayoutType($cell_layout_type)
    {
        $allowedValues = $this->getCellLayoutTypeAllowableValues();
        if (!is_null($cell_layout_type) && !in_array($cell_layout_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cell_layout_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cell_layout_type'] = $cell_layout_type;

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



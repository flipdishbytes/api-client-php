<?php
/**
 * CreateFullMenuItemOptionSetItem
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
 * CreateFullMenuItemOptionSetItem Class Doc Comment
 *
 * @category Class
 * @description Create menu item option set item
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateFullMenuItemOptionSetItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFullMenuItemOptionSetItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_item_option_set_item_id' => 'int',
        'metadata' => '\Flipdish\\Client\Models\CreateMetadata[]',
        'tax_rate_name' => 'string',
        'next_menu_item_option_set_id' => 'int',
        'name' => 'string',
        'price' => 'double',
        'deposit_return_fee' => 'double',
        'is_available' => 'bool',
        'display_order' => 'int',
        'cell_layout_type' => 'string',
        'image_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_item_option_set_item_id' => 'int32',
        'metadata' => null,
        'tax_rate_name' => null,
        'next_menu_item_option_set_id' => 'int32',
        'name' => null,
        'price' => 'double',
        'deposit_return_fee' => 'double',
        'is_available' => null,
        'display_order' => 'int32',
        'cell_layout_type' => null,
        'image_url' => null
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
        'menu_item_option_set_item_id' => 'MenuItemOptionSetItemId',
        'metadata' => 'Metadata',
        'tax_rate_name' => 'TaxRateName',
        'next_menu_item_option_set_id' => 'NextMenuItemOptionSetId',
        'name' => 'Name',
        'price' => 'Price',
        'deposit_return_fee' => 'DepositReturnFee',
        'is_available' => 'IsAvailable',
        'display_order' => 'DisplayOrder',
        'cell_layout_type' => 'CellLayoutType',
        'image_url' => 'ImageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_item_option_set_item_id' => 'setMenuItemOptionSetItemId',
        'metadata' => 'setMetadata',
        'tax_rate_name' => 'setTaxRateName',
        'next_menu_item_option_set_id' => 'setNextMenuItemOptionSetId',
        'name' => 'setName',
        'price' => 'setPrice',
        'deposit_return_fee' => 'setDepositReturnFee',
        'is_available' => 'setIsAvailable',
        'display_order' => 'setDisplayOrder',
        'cell_layout_type' => 'setCellLayoutType',
        'image_url' => 'setImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_item_option_set_item_id' => 'getMenuItemOptionSetItemId',
        'metadata' => 'getMetadata',
        'tax_rate_name' => 'getTaxRateName',
        'next_menu_item_option_set_id' => 'getNextMenuItemOptionSetId',
        'name' => 'getName',
        'price' => 'getPrice',
        'deposit_return_fee' => 'getDepositReturnFee',
        'is_available' => 'getIsAvailable',
        'display_order' => 'getDisplayOrder',
        'cell_layout_type' => 'getCellLayoutType',
        'image_url' => 'getImageUrl'
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
        $this->container['menu_item_option_set_item_id'] = isset($data['menu_item_option_set_item_id']) ? $data['menu_item_option_set_item_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['tax_rate_name'] = isset($data['tax_rate_name']) ? $data['tax_rate_name'] : null;
        $this->container['next_menu_item_option_set_id'] = isset($data['next_menu_item_option_set_id']) ? $data['next_menu_item_option_set_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['deposit_return_fee'] = isset($data['deposit_return_fee']) ? $data['deposit_return_fee'] : null;
        $this->container['is_available'] = isset($data['is_available']) ? $data['is_available'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['cell_layout_type'] = isset($data['cell_layout_type']) ? $data['cell_layout_type'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets menu_item_option_set_item_id
     *
     * @return int
     */
    public function getMenuItemOptionSetItemId()
    {
        return $this->container['menu_item_option_set_item_id'];
    }

    /**
     * Sets menu_item_option_set_item_id
     *
     * @param int $menu_item_option_set_item_id Menu item option set item identifier
     *
     * @return $this
     */
    public function setMenuItemOptionSetItemId($menu_item_option_set_item_id)
    {
        $this->container['menu_item_option_set_item_id'] = $menu_item_option_set_item_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Flipdish\\Client\Models\CreateMetadata[]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Flipdish\\Client\Models\CreateMetadata[] $metadata List of metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets tax_rate_name
     *
     * @return string
     */
    public function getTaxRateName()
    {
        return $this->container['tax_rate_name'];
    }

    /**
     * Sets tax_rate_name
     *
     * @param string $tax_rate_name Tax rate name
     *
     * @return $this
     */
    public function setTaxRateName($tax_rate_name)
    {
        $this->container['tax_rate_name'] = $tax_rate_name;

        return $this;
    }

    /**
     * Gets next_menu_item_option_set_id
     *
     * @return int
     */
    public function getNextMenuItemOptionSetId()
    {
        return $this->container['next_menu_item_option_set_id'];
    }

    /**
     * Sets next_menu_item_option_set_id
     *
     * @param int $next_menu_item_option_set_id if null, next option set is next. if -1, this is the final option set
     *
     * @return $this
     */
    public function setNextMenuItemOptionSetId($next_menu_item_option_set_id)
    {
        $this->container['next_menu_item_option_set_id'] = $next_menu_item_option_set_id;

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
     * Gets deposit_return_fee
     *
     * @return double
     */
    public function getDepositReturnFee()
    {
        return $this->container['deposit_return_fee'];
    }

    /**
     * Sets deposit_return_fee
     *
     * @param double $deposit_return_fee An optional fee that can be added to the price of the item.
     *
     * @return $this
     */
    public function setDepositReturnFee($deposit_return_fee)
    {
        $this->container['deposit_return_fee'] = $deposit_return_fee;

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



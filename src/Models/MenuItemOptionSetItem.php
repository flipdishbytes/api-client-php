<?php
/**
 * MenuItemOptionSetItem
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
 * MenuItemOptionSetItem Class Doc Comment
 *
 * @category Class
 * @description Menu item option set item
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenuItemOptionSetItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MenuItemOptionSetItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_item_option_set_item_id' => 'int',
        'public_id' => 'string',
        'metadata' => '\Flipdish\\Client\Models\CreateMetadata[]',
        'next_menu_item_option_set_id' => 'int',
        'catalog_item_id' => 'string',
        'tax_rate_name' => 'string',
        'tax_rate_id' => 'int',
        'tax_value' => 'double',
        'name' => 'string',
        'price' => 'double',
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
        'public_id' => 'uuid',
        'metadata' => null,
        'next_menu_item_option_set_id' => 'int32',
        'catalog_item_id' => null,
        'tax_rate_name' => null,
        'tax_rate_id' => 'int32',
        'tax_value' => 'double',
        'name' => null,
        'price' => 'double',
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
        'public_id' => 'PublicId',
        'metadata' => 'Metadata',
        'next_menu_item_option_set_id' => 'NextMenuItemOptionSetId',
        'catalog_item_id' => 'CatalogItemId',
        'tax_rate_name' => 'TaxRateName',
        'tax_rate_id' => 'TaxRateId',
        'tax_value' => 'TaxValue',
        'name' => 'Name',
        'price' => 'Price',
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
        'public_id' => 'setPublicId',
        'metadata' => 'setMetadata',
        'next_menu_item_option_set_id' => 'setNextMenuItemOptionSetId',
        'catalog_item_id' => 'setCatalogItemId',
        'tax_rate_name' => 'setTaxRateName',
        'tax_rate_id' => 'setTaxRateId',
        'tax_value' => 'setTaxValue',
        'name' => 'setName',
        'price' => 'setPrice',
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
        'public_id' => 'getPublicId',
        'metadata' => 'getMetadata',
        'next_menu_item_option_set_id' => 'getNextMenuItemOptionSetId',
        'catalog_item_id' => 'getCatalogItemId',
        'tax_rate_name' => 'getTaxRateName',
        'tax_rate_id' => 'getTaxRateId',
        'tax_value' => 'getTaxValue',
        'name' => 'getName',
        'price' => 'getPrice',
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
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['next_menu_item_option_set_id'] = isset($data['next_menu_item_option_set_id']) ? $data['next_menu_item_option_set_id'] : null;
        $this->container['catalog_item_id'] = isset($data['catalog_item_id']) ? $data['catalog_item_id'] : null;
        $this->container['tax_rate_name'] = isset($data['tax_rate_name']) ? $data['tax_rate_name'] : null;
        $this->container['tax_rate_id'] = isset($data['tax_rate_id']) ? $data['tax_rate_id'] : null;
        $this->container['tax_value'] = isset($data['tax_value']) ? $data['tax_value'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
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
     * Gets catalog_item_id
     *
     * @return string
     */
    public function getCatalogItemId()
    {
        return $this->container['catalog_item_id'];
    }

    /**
     * Sets catalog_item_id
     *
     * @param string $catalog_item_id Catalog item Id when the OptionSet is associated to a Product
     *
     * @return $this
     */
    public function setCatalogItemId($catalog_item_id)
    {
        $this->container['catalog_item_id'] = $catalog_item_id;

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
     * Gets tax_rate_id
     *
     * @return int
     */
    public function getTaxRateId()
    {
        return $this->container['tax_rate_id'];
    }

    /**
     * Sets tax_rate_id
     *
     * @param int $tax_rate_id tax_rate_id
     *
     * @return $this
     */
    public function setTaxRateId($tax_rate_id)
    {
        $this->container['tax_rate_id'] = $tax_rate_id;

        return $this;
    }

    /**
     * Gets tax_value
     *
     * @return double
     */
    public function getTaxValue()
    {
        return $this->container['tax_value'];
    }

    /**
     * Sets tax_value
     *
     * @param double $tax_value tax_value
     *
     * @return $this
     */
    public function setTaxValue($tax_value)
    {
        $this->container['tax_value'] = $tax_value;

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



<?php
/**
 * MenuSectionItem
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
 * MenuSectionItem Class Doc Comment
 *
 * @category Class
 * @description Menu item
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenuSectionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MenuSectionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_item_id' => 'int',
        'actual_price' => 'double',
        'menu_item_option_sets' => '\Flipdish\\Client\Models\MenuItemOptionSet[]',
        'daily_special_hours' => '\Flipdish\\Client\Models\BusinessHoursPeriod[]',
        'public_id' => 'string',
        'tax_rate_name' => 'string',
        'tax_rate_id' => 'int',
        'tax_value' => 'double',
        'metadata' => '\Flipdish\\Client\Models\CreateMetadata[]',
        'catalog_item_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'spiciness_rating' => 'string',
        'price' => 'double',
        'display_order' => 'int',
        'alcohol' => 'bool',
        'is_available' => 'bool',
        'cell_layout_type' => 'string',
        'disable_vouchers' => 'bool',
        'image_name' => 'string',
        'image_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_item_id' => 'int32',
        'actual_price' => 'double',
        'menu_item_option_sets' => null,
        'daily_special_hours' => null,
        'public_id' => 'uuid',
        'tax_rate_name' => null,
        'tax_rate_id' => 'int32',
        'tax_value' => 'double',
        'metadata' => null,
        'catalog_item_id' => null,
        'name' => null,
        'description' => null,
        'spiciness_rating' => null,
        'price' => 'double',
        'display_order' => 'int32',
        'alcohol' => null,
        'is_available' => null,
        'cell_layout_type' => null,
        'disable_vouchers' => null,
        'image_name' => null,
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
        'menu_item_id' => 'MenuItemId',
        'actual_price' => 'ActualPrice',
        'menu_item_option_sets' => 'MenuItemOptionSets',
        'daily_special_hours' => 'DailySpecialHours',
        'public_id' => 'PublicId',
        'tax_rate_name' => 'TaxRateName',
        'tax_rate_id' => 'TaxRateId',
        'tax_value' => 'TaxValue',
        'metadata' => 'Metadata',
        'catalog_item_id' => 'CatalogItemId',
        'name' => 'Name',
        'description' => 'Description',
        'spiciness_rating' => 'SpicinessRating',
        'price' => 'Price',
        'display_order' => 'DisplayOrder',
        'alcohol' => 'Alcohol',
        'is_available' => 'IsAvailable',
        'cell_layout_type' => 'CellLayoutType',
        'disable_vouchers' => 'DisableVouchers',
        'image_name' => 'ImageName',
        'image_url' => 'ImageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_item_id' => 'setMenuItemId',
        'actual_price' => 'setActualPrice',
        'menu_item_option_sets' => 'setMenuItemOptionSets',
        'daily_special_hours' => 'setDailySpecialHours',
        'public_id' => 'setPublicId',
        'tax_rate_name' => 'setTaxRateName',
        'tax_rate_id' => 'setTaxRateId',
        'tax_value' => 'setTaxValue',
        'metadata' => 'setMetadata',
        'catalog_item_id' => 'setCatalogItemId',
        'name' => 'setName',
        'description' => 'setDescription',
        'spiciness_rating' => 'setSpicinessRating',
        'price' => 'setPrice',
        'display_order' => 'setDisplayOrder',
        'alcohol' => 'setAlcohol',
        'is_available' => 'setIsAvailable',
        'cell_layout_type' => 'setCellLayoutType',
        'disable_vouchers' => 'setDisableVouchers',
        'image_name' => 'setImageName',
        'image_url' => 'setImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_item_id' => 'getMenuItemId',
        'actual_price' => 'getActualPrice',
        'menu_item_option_sets' => 'getMenuItemOptionSets',
        'daily_special_hours' => 'getDailySpecialHours',
        'public_id' => 'getPublicId',
        'tax_rate_name' => 'getTaxRateName',
        'tax_rate_id' => 'getTaxRateId',
        'tax_value' => 'getTaxValue',
        'metadata' => 'getMetadata',
        'catalog_item_id' => 'getCatalogItemId',
        'name' => 'getName',
        'description' => 'getDescription',
        'spiciness_rating' => 'getSpicinessRating',
        'price' => 'getPrice',
        'display_order' => 'getDisplayOrder',
        'alcohol' => 'getAlcohol',
        'is_available' => 'getIsAvailable',
        'cell_layout_type' => 'getCellLayoutType',
        'disable_vouchers' => 'getDisableVouchers',
        'image_name' => 'getImageName',
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

    const SPICINESS_RATING_NOT_RATED = 'NotRated';
    const SPICINESS_RATING_MILD = 'Mild';
    const SPICINESS_RATING_MEDIUM = 'Medium';
    const SPICINESS_RATING_HOT = 'Hot';
    const CELL_LAYOUT_TYPE_SMALL = 'Small';
    const CELL_LAYOUT_TYPE_MEDIUM = 'Medium';
    const CELL_LAYOUT_TYPE_LARGE = 'Large';
    const CELL_LAYOUT_TYPE_HIDDEN_IMAGE = 'HiddenImage';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpicinessRatingAllowableValues()
    {
        return [
            self::SPICINESS_RATING_NOT_RATED,
            self::SPICINESS_RATING_MILD,
            self::SPICINESS_RATING_MEDIUM,
            self::SPICINESS_RATING_HOT,
        ];
    }
    
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
        $this->container['menu_item_id'] = isset($data['menu_item_id']) ? $data['menu_item_id'] : null;
        $this->container['actual_price'] = isset($data['actual_price']) ? $data['actual_price'] : null;
        $this->container['menu_item_option_sets'] = isset($data['menu_item_option_sets']) ? $data['menu_item_option_sets'] : null;
        $this->container['daily_special_hours'] = isset($data['daily_special_hours']) ? $data['daily_special_hours'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['tax_rate_name'] = isset($data['tax_rate_name']) ? $data['tax_rate_name'] : null;
        $this->container['tax_rate_id'] = isset($data['tax_rate_id']) ? $data['tax_rate_id'] : null;
        $this->container['tax_value'] = isset($data['tax_value']) ? $data['tax_value'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['catalog_item_id'] = isset($data['catalog_item_id']) ? $data['catalog_item_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['spiciness_rating'] = isset($data['spiciness_rating']) ? $data['spiciness_rating'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['alcohol'] = isset($data['alcohol']) ? $data['alcohol'] : null;
        $this->container['is_available'] = isset($data['is_available']) ? $data['is_available'] : null;
        $this->container['cell_layout_type'] = isset($data['cell_layout_type']) ? $data['cell_layout_type'] : null;
        $this->container['disable_vouchers'] = isset($data['disable_vouchers']) ? $data['disable_vouchers'] : null;
        $this->container['image_name'] = isset($data['image_name']) ? $data['image_name'] : null;
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 4000)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getSpicinessRatingAllowableValues();
        if (!is_null($this->container['spiciness_rating']) && !in_array($this->container['spiciness_rating'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'spiciness_rating', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets menu_item_id
     *
     * @return int
     */
    public function getMenuItemId()
    {
        return $this->container['menu_item_id'];
    }

    /**
     * Sets menu_item_id
     *
     * @param int $menu_item_id Menu item identifier. This ID may change at any time. Use `PublicId` if you need a permanent reference to the item.
     *
     * @return $this
     */
    public function setMenuItemId($menu_item_id)
    {
        $this->container['menu_item_id'] = $menu_item_id;

        return $this;
    }

    /**
     * Gets actual_price
     *
     * @return double
     */
    public function getActualPrice()
    {
        return $this->container['actual_price'];
    }

    /**
     * Sets actual_price
     *
     * @param double $actual_price Actual price - the minimum price possible when all required option set items prices are included.
     *
     * @return $this
     */
    public function setActualPrice($actual_price)
    {
        $this->container['actual_price'] = $actual_price;

        return $this;
    }

    /**
     * Gets menu_item_option_sets
     *
     * @return \Flipdish\\Client\Models\MenuItemOptionSet[]
     */
    public function getMenuItemOptionSets()
    {
        return $this->container['menu_item_option_sets'];
    }

    /**
     * Sets menu_item_option_sets
     *
     * @param \Flipdish\\Client\Models\MenuItemOptionSet[] $menu_item_option_sets Menu item option sets
     *
     * @return $this
     */
    public function setMenuItemOptionSets($menu_item_option_sets)
    {
        $this->container['menu_item_option_sets'] = $menu_item_option_sets;

        return $this;
    }

    /**
     * Gets daily_special_hours
     *
     * @return \Flipdish\\Client\Models\BusinessHoursPeriod[]
     */
    public function getDailySpecialHours()
    {
        return $this->container['daily_special_hours'];
    }

    /**
     * Sets daily_special_hours
     *
     * @param \Flipdish\\Client\Models\BusinessHoursPeriod[] $daily_special_hours Daily special hours
     *
     * @return $this
     */
    public function setDailySpecialHours($daily_special_hours)
    {
        $this->container['daily_special_hours'] = $daily_special_hours;

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
     * @param int $tax_rate_id TaxRate
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
     * @param double $tax_value TaxValue - the tax associated with this item, based on TaxRate / TaxType and Currency (currency determines decimal point precision)
     *
     * @return $this
     */
    public function setTaxValue($tax_value)
    {
        $this->container['tax_value'] = $tax_value;

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
     * @param string $catalog_item_id Catalog item Id when the Item is associated to a Product
     *
     * @return $this
     */
    public function setCatalogItemId($catalog_item_id)
    {
        $this->container['catalog_item_id'] = $catalog_item_id;

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
     * @param string $name Menu item name (like \"Korma\")
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MenuSectionItem., must be smaller than or equal to 4000.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MenuSectionItem., must be bigger than or equal to 0.');
        }

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
     * @param string $description Description (like \"A lovely dish from the east\")
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling MenuSectionItem., must be smaller than or equal to 4000.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling MenuSectionItem., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets spiciness_rating
     *
     * @return string
     */
    public function getSpicinessRating()
    {
        return $this->container['spiciness_rating'];
    }

    /**
     * Sets spiciness_rating
     *
     * @param string $spiciness_rating Spiciness rating
     *
     * @return $this
     */
    public function setSpicinessRating($spiciness_rating)
    {
        $allowedValues = $this->getSpicinessRatingAllowableValues();
        if (!is_null($spiciness_rating) && !in_array($spiciness_rating, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'spiciness_rating', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spiciness_rating'] = $spiciness_rating;

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
     * @param double $price Price - this is only used when there is no master option set and should be set to 0 if a master option set exists.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * Gets alcohol
     *
     * @return bool
     */
    public function getAlcohol()
    {
        return $this->container['alcohol'];
    }

    /**
     * Sets alcohol
     *
     * @param bool $alcohol To be set true if the item or an option of the item contains an alcoholic drink.
     *
     * @return $this
     */
    public function setAlcohol($alcohol)
    {
        $this->container['alcohol'] = $alcohol;

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
     * @param bool $is_available True if we accept orders for this item still
     *
     * @return $this
     */
    public function setIsAvailable($is_available)
    {
        $this->container['is_available'] = $is_available;

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
     * Gets disable_vouchers
     *
     * @return bool
     */
    public function getDisableVouchers()
    {
        return $this->container['disable_vouchers'];
    }

    /**
     * Sets disable_vouchers
     *
     * @param bool $disable_vouchers If true, then vouchers won't be applied for this item
     *
     * @return $this
     */
    public function setDisableVouchers($disable_vouchers)
    {
        $this->container['disable_vouchers'] = $disable_vouchers;

        return $this;
    }

    /**
     * Gets image_name
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->container['image_name'];
    }

    /**
     * Sets image_name
     *
     * @param string $image_name Image url
     *
     * @return $this
     */
    public function setImageName($image_name)
    {
        $this->container['image_name'] = $image_name;

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



<?php
/**
 * CatalogItem
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
 * CatalogItem Class Doc Comment
 *
 * @category Class
 * @description CatalogItem
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CatalogItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'catalog_item_id' => 'string',
        'is_archived' => 'bool',
        'groups' => '\Flipdish\\Client\Models\CatalogGroupReference[]',
        'metafields' => '\Flipdish\\Client\Models\Metafield[]',
        'item_type' => 'string',
        'sku' => 'string',
        'name' => 'string',
        'description' => 'string',
        'price' => 'double',
        'image_file_name' => 'string',
        'alcohol' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'catalog_item_id' => null,
        'is_archived' => null,
        'groups' => null,
        'metafields' => null,
        'item_type' => null,
        'sku' => null,
        'name' => null,
        'description' => null,
        'price' => 'double',
        'image_file_name' => null,
        'alcohol' => null
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
        'catalog_item_id' => 'CatalogItemId',
        'is_archived' => 'IsArchived',
        'groups' => 'Groups',
        'metafields' => 'Metafields',
        'item_type' => 'ItemType',
        'sku' => 'Sku',
        'name' => 'Name',
        'description' => 'Description',
        'price' => 'Price',
        'image_file_name' => 'ImageFileName',
        'alcohol' => 'Alcohol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'catalog_item_id' => 'setCatalogItemId',
        'is_archived' => 'setIsArchived',
        'groups' => 'setGroups',
        'metafields' => 'setMetafields',
        'item_type' => 'setItemType',
        'sku' => 'setSku',
        'name' => 'setName',
        'description' => 'setDescription',
        'price' => 'setPrice',
        'image_file_name' => 'setImageFileName',
        'alcohol' => 'setAlcohol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'catalog_item_id' => 'getCatalogItemId',
        'is_archived' => 'getIsArchived',
        'groups' => 'getGroups',
        'metafields' => 'getMetafields',
        'item_type' => 'getItemType',
        'sku' => 'getSku',
        'name' => 'getName',
        'description' => 'getDescription',
        'price' => 'getPrice',
        'image_file_name' => 'getImageFileName',
        'alcohol' => 'getAlcohol'
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

    const ITEM_TYPE_PRODUCT = 'Product';
    const ITEM_TYPE_MODIFIER = 'Modifier';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemTypeAllowableValues()
    {
        return [
            self::ITEM_TYPE_PRODUCT,
            self::ITEM_TYPE_MODIFIER,
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
        $this->container['catalog_item_id'] = isset($data['catalog_item_id']) ? $data['catalog_item_id'] : null;
        $this->container['is_archived'] = isset($data['is_archived']) ? $data['is_archived'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['metafields'] = isset($data['metafields']) ? $data['metafields'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['image_file_name'] = isset($data['image_file_name']) ? $data['image_file_name'] : null;
        $this->container['alcohol'] = isset($data['alcohol']) ? $data['alcohol'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['catalog_item_id']) && (mb_strlen($this->container['catalog_item_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'catalog_item_id', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['catalog_item_id']) && (mb_strlen($this->container['catalog_item_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'catalog_item_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['item_type'] === null) {
            $invalidProperties[] = "'item_type' can't be null";
        }
        $allowedValues = $this->getItemTypeAllowableValues();
        if (!is_null($this->container['item_type']) && !in_array($this->container['item_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'item_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ((mb_strlen($this->container['sku']) > 30)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['sku']) < 0)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 300)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 300.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 3000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 3000.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if (($this->container['price'] < 0)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['image_file_name']) && (mb_strlen($this->container['image_file_name']) > 512)) {
            $invalidProperties[] = "invalid value for 'image_file_name', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['image_file_name']) && (mb_strlen($this->container['image_file_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'image_file_name', the character length must be bigger than or equal to 0.";
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
     * @param string $catalog_item_id Unique catalog Item id
     *
     * @return $this
     */
    public function setCatalogItemId($catalog_item_id)
    {
        if (!is_null($catalog_item_id) && (mb_strlen($catalog_item_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $catalog_item_id when calling CatalogItem., must be smaller than or equal to 30.');
        }
        if (!is_null($catalog_item_id) && (mb_strlen($catalog_item_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $catalog_item_id when calling CatalogItem., must be bigger than or equal to 0.');
        }

        $this->container['catalog_item_id'] = $catalog_item_id;

        return $this;
    }

    /**
     * Gets is_archived
     *
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->container['is_archived'];
    }

    /**
     * Sets is_archived
     *
     * @param bool $is_archived Returns true if the item is archived
     *
     * @return $this
     */
    public function setIsArchived($is_archived)
    {
        $this->container['is_archived'] = $is_archived;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Flipdish\\Client\Models\CatalogGroupReference[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Flipdish\\Client\Models\CatalogGroupReference[] $groups Collection of groups associated with this item
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets metafields
     *
     * @return \Flipdish\\Client\Models\Metafield[]
     */
    public function getMetafields()
    {
        return $this->container['metafields'];
    }

    /**
     * Sets metafields
     *
     * @param \Flipdish\\Client\Models\Metafield[] $metafields Collection of metafields
     *
     * @return $this
     */
    public function setMetafields($metafields)
    {
        $this->container['metafields'] = $metafields;

        return $this;
    }

    /**
     * Gets item_type
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param string $item_type Type of item (Product, Modifier, etc)
     *
     * @return $this
     */
    public function setItemType($item_type)
    {
        $allowedValues = $this->getItemTypeAllowableValues();
        if (!in_array($item_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'item_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Stock Keeping Unit (SKU)
     *
     * @return $this
     */
    public function setSku($sku)
    {
        if ((mb_strlen($sku) > 30)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling CatalogItem., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($sku) < 0)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling CatalogItem., must be bigger than or equal to 0.');
        }

        $this->container['sku'] = $sku;

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
     * @param string $name Item name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CatalogItem., must be smaller than or equal to 300.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CatalogItem., must be bigger than or equal to 0.');
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
     * @param string $description Item description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 3000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CatalogItem., must be smaller than or equal to 3000.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CatalogItem., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

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
     * @param double $price Item price
     *
     * @return $this
     */
    public function setPrice($price)
    {

        if (($price < 0)) {
            throw new \InvalidArgumentException('invalid value for $price when calling CatalogItem., must be bigger than or equal to 0.');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets image_file_name
     *
     * @return string
     */
    public function getImageFileName()
    {
        return $this->container['image_file_name'];
    }

    /**
     * Sets image_file_name
     *
     * @param string $image_file_name Image File Name
     *
     * @return $this
     */
    public function setImageFileName($image_file_name)
    {
        if (!is_null($image_file_name) && (mb_strlen($image_file_name) > 512)) {
            throw new \InvalidArgumentException('invalid length for $image_file_name when calling CatalogItem., must be smaller than or equal to 512.');
        }
        if (!is_null($image_file_name) && (mb_strlen($image_file_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $image_file_name when calling CatalogItem., must be bigger than or equal to 0.');
        }

        $this->container['image_file_name'] = $image_file_name;

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
     * @param bool $alcohol item contains alcohol
     *
     * @return $this
     */
    public function setAlcohol($alcohol)
    {
        $this->container['alcohol'] = $alcohol;

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



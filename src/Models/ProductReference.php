<?php
/**
 * ProductReference
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
 * ProductReference Class Doc Comment
 *
 * @category Class
 * @description Catalog Item associated
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item' => '\Flipdish\\Client\Models\Product',
        'product' => '\Flipdish\\Client\Models\Product',
        'catalog_item_id' => 'string',
        'product_type' => 'string',
        'preselected_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item' => null,
        'product' => null,
        'catalog_item_id' => null,
        'product_type' => null,
        'preselected_quantity' => 'int32'
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
        'item' => 'Item',
        'product' => 'Product',
        'catalog_item_id' => 'CatalogItemId',
        'product_type' => 'ProductType',
        'preselected_quantity' => 'PreselectedQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item' => 'setItem',
        'product' => 'setProduct',
        'catalog_item_id' => 'setCatalogItemId',
        'product_type' => 'setProductType',
        'preselected_quantity' => 'setPreselectedQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item' => 'getItem',
        'product' => 'getProduct',
        'catalog_item_id' => 'getCatalogItemId',
        'product_type' => 'getProductType',
        'preselected_quantity' => 'getPreselectedQuantity'
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

    const PRODUCT_TYPE_PRODUCT = 'Product';
    const PRODUCT_TYPE_MODIFIER = 'Modifier';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductTypeAllowableValues()
    {
        return [
            self::PRODUCT_TYPE_PRODUCT,
            self::PRODUCT_TYPE_MODIFIER,
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['catalog_item_id'] = isset($data['catalog_item_id']) ? $data['catalog_item_id'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['preselected_quantity'] = isset($data['preselected_quantity']) ? $data['preselected_quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['catalog_item_id'] === null) {
            $invalidProperties[] = "'catalog_item_id' can't be null";
        }
        if ((mb_strlen($this->container['catalog_item_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'catalog_item_id', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['catalog_item_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'catalog_item_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($this->container['product_type']) && !in_array($this->container['product_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product_type', must be one of '%s'",
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
     * Gets item
     *
     * @return \Flipdish\\Client\Models\Product
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Flipdish\\Client\Models\Product $item Details of the referenced {Flipdish.Menus.PublicModels.V1.Catalog.Groups.ProductReference.Product}
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Flipdish\\Client\Models\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Flipdish\\Client\Models\Product $product Details of the referenced {Flipdish.Menus.PublicModels.V1.Catalog.Groups.ProductReference.Product}
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
     * @param string $catalog_item_id Identifier of the CatalogItemId to use as SubProduct
     *
     * @return $this
     */
    public function setCatalogItemId($catalog_item_id)
    {
        if ((mb_strlen($catalog_item_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $catalog_item_id when calling ProductReference., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($catalog_item_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $catalog_item_id when calling ProductReference., must be bigger than or equal to 0.');
        }

        $this->container['catalog_item_id'] = $catalog_item_id;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type Type of the SupProduct
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $allowedValues = $this->getProductTypeAllowableValues();
        if (!in_array($product_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets preselected_quantity
     *
     * @return int
     */
    public function getPreselectedQuantity()
    {
        return $this->container['preselected_quantity'];
    }

    /**
     * Sets preselected_quantity
     *
     * @param int $preselected_quantity Quantity of the modifier that will be set when the parent product is placed in the basket
     *
     * @return $this
     */
    public function setPreselectedQuantity($preselected_quantity)
    {
        $this->container['preselected_quantity'] = $preselected_quantity;

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



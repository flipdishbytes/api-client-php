<?php
/**
 * UpdateGroup
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
 * UpdateGroup Class Doc Comment
 *
 * @category Class
 * @description Update Catalog Group
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
        'name' => 'string',
        'autogenerate_display_text' => 'bool',
        'image_file_name' => 'string',
        'min_select_count' => 'int',
        'max_select_count' => 'int',
        'products' => '\Flipdish\\Client\Models\UpdateProductReference[]',
        'metafields' => '\Flipdish\\Client\Models\Metafield[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null,
        'name' => null,
        'autogenerate_display_text' => null,
        'image_file_name' => null,
        'min_select_count' => 'int32',
        'max_select_count' => 'int32',
        'products' => null,
        'metafields' => null
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
        'sku' => 'Sku',
        'name' => 'Name',
        'autogenerate_display_text' => 'AutogenerateDisplayText',
        'image_file_name' => 'ImageFileName',
        'min_select_count' => 'MinSelectCount',
        'max_select_count' => 'MaxSelectCount',
        'products' => 'Products',
        'metafields' => 'Metafields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'name' => 'setName',
        'autogenerate_display_text' => 'setAutogenerateDisplayText',
        'image_file_name' => 'setImageFileName',
        'min_select_count' => 'setMinSelectCount',
        'max_select_count' => 'setMaxSelectCount',
        'products' => 'setProducts',
        'metafields' => 'setMetafields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'name' => 'getName',
        'autogenerate_display_text' => 'getAutogenerateDisplayText',
        'image_file_name' => 'getImageFileName',
        'min_select_count' => 'getMinSelectCount',
        'max_select_count' => 'getMaxSelectCount',
        'products' => 'getProducts',
        'metafields' => 'getMetafields'
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['autogenerate_display_text'] = isset($data['autogenerate_display_text']) ? $data['autogenerate_display_text'] : null;
        $this->container['image_file_name'] = isset($data['image_file_name']) ? $data['image_file_name'] : null;
        $this->container['min_select_count'] = isset($data['min_select_count']) ? $data['min_select_count'] : null;
        $this->container['max_select_count'] = isset($data['max_select_count']) ? $data['max_select_count'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['metafields'] = isset($data['metafields']) ? $data['metafields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 30)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) < 0)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 300)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
        if (!is_null($sku) && (mb_strlen($sku) > 30)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling UpdateGroup., must be smaller than or equal to 30.');
        }
        if (!is_null($sku) && (mb_strlen($sku) < 0)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling UpdateGroup., must be bigger than or equal to 0.');
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
     * @param string $name Group name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdateGroup., must be smaller than or equal to 300.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdateGroup., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets autogenerate_display_text
     *
     * @return bool
     */
    public function getAutogenerateDisplayText()
    {
        return $this->container['autogenerate_display_text'];
    }

    /**
     * Sets autogenerate_display_text
     *
     * @param bool $autogenerate_display_text Autogenerate display text in ordering applications
     *
     * @return $this
     */
    public function setAutogenerateDisplayText($autogenerate_display_text)
    {
        $this->container['autogenerate_display_text'] = $autogenerate_display_text;

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
            throw new \InvalidArgumentException('invalid length for $image_file_name when calling UpdateGroup., must be smaller than or equal to 512.');
        }
        if (!is_null($image_file_name) && (mb_strlen($image_file_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $image_file_name when calling UpdateGroup., must be bigger than or equal to 0.');
        }

        $this->container['image_file_name'] = $image_file_name;

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
     * @param int $min_select_count Minimum number of items that the user has to select
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
     * @param int $max_select_count Maximum number of items that the user has to select
     *
     * @return $this
     */
    public function setMaxSelectCount($max_select_count)
    {
        $this->container['max_select_count'] = $max_select_count;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Flipdish\\Client\Models\UpdateProductReference[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Flipdish\\Client\Models\UpdateProductReference[] $products Collection of items associated with this group
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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


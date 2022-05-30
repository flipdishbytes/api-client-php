<?php
/**
 * CatalogGroupReference
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
 * CatalogGroupReference Class Doc Comment
 *
 * @category Class
 * @description Reference to an existing {Flipdish.PublicModels.V1.Catalog.Groups.CatalogGroup}
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogGroupReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CatalogGroupReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group' => '\Flipdish\\Client\Models\CatalogGroup',
        'catalog_group_id' => 'string',
        'catalog_item_id' => 'string',
        'group_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group' => null,
        'catalog_group_id' => null,
        'catalog_item_id' => null,
        'group_type' => null
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
        'group' => 'Group',
        'catalog_group_id' => 'CatalogGroupId',
        'catalog_item_id' => 'CatalogItemId',
        'group_type' => 'GroupType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group' => 'setGroup',
        'catalog_group_id' => 'setCatalogGroupId',
        'catalog_item_id' => 'setCatalogItemId',
        'group_type' => 'setGroupType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group' => 'getGroup',
        'catalog_group_id' => 'getCatalogGroupId',
        'catalog_item_id' => 'getCatalogItemId',
        'group_type' => 'getGroupType'
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

    const GROUP_TYPE_MODIFIER_GROUP = 'ModifierGroup';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupTypeAllowableValues()
    {
        return [
            self::GROUP_TYPE_MODIFIER_GROUP,
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['catalog_group_id'] = isset($data['catalog_group_id']) ? $data['catalog_group_id'] : null;
        $this->container['catalog_item_id'] = isset($data['catalog_item_id']) ? $data['catalog_item_id'] : null;
        $this->container['group_type'] = isset($data['group_type']) ? $data['group_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['catalog_group_id'] === null) {
            $invalidProperties[] = "'catalog_group_id' can't be null";
        }
        if ((mb_strlen($this->container['catalog_group_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'catalog_group_id', the character length must be smaller than or equal to 30.";
        }

        if ((mb_strlen($this->container['catalog_group_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'catalog_group_id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['catalog_item_id']) && (mb_strlen($this->container['catalog_item_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'catalog_item_id', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['catalog_item_id']) && (mb_strlen($this->container['catalog_item_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'catalog_item_id', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['group_type'] === null) {
            $invalidProperties[] = "'group_type' can't be null";
        }
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!is_null($this->container['group_type']) && !in_array($this->container['group_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'group_type', must be one of '%s'",
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
     * Gets group
     *
     * @return \Flipdish\\Client\Models\CatalogGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Flipdish\\Client\Models\CatalogGroup $group Details of the referenced {Flipdish.PublicModels.V1.Catalog.Items.CatalogItem}
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets catalog_group_id
     *
     * @return string
     */
    public function getCatalogGroupId()
    {
        return $this->container['catalog_group_id'];
    }

    /**
     * Sets catalog_group_id
     *
     * @param string $catalog_group_id Identifier of the ProductId to use as SubProduct
     *
     * @return $this
     */
    public function setCatalogGroupId($catalog_group_id)
    {
        if ((mb_strlen($catalog_group_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $catalog_group_id when calling CatalogGroupReference., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($catalog_group_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $catalog_group_id when calling CatalogGroupReference., must be bigger than or equal to 0.');
        }

        $this->container['catalog_group_id'] = $catalog_group_id;

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
     * @param string $catalog_item_id Identifier of the ProductId to use as SubProduct
     *
     * @return $this
     */
    public function setCatalogItemId($catalog_item_id)
    {
        if (!is_null($catalog_item_id) && (mb_strlen($catalog_item_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $catalog_item_id when calling CatalogGroupReference., must be smaller than or equal to 30.');
        }
        if (!is_null($catalog_item_id) && (mb_strlen($catalog_item_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $catalog_item_id when calling CatalogGroupReference., must be bigger than or equal to 0.');
        }

        $this->container['catalog_item_id'] = $catalog_item_id;

        return $this;
    }

    /**
     * Gets group_type
     *
     * @return string
     */
    public function getGroupType()
    {
        return $this->container['group_type'];
    }

    /**
     * Sets group_type
     *
     * @param string $group_type Type of the SupProduct
     *
     * @return $this
     */
    public function setGroupType($group_type)
    {
        $allowedValues = $this->getGroupTypeAllowableValues();
        if (!in_array($group_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'group_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['group_type'] = $group_type;

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



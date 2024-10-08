<?php
/**
 * StoreListItem
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
 * StoreListItem Class Doc Comment
 *
 * @category Class
 * @description Store id and name
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StoreListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'store_id' => 'int',
        'store_name' => 'string',
        'store_group_id' => 'int',
        'store_group_name' => 'string',
        'has_loyalty_campaign' => 'bool',
        'has_retention_campaign' => 'bool',
        'is_published' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'store_id' => 'int32',
        'store_name' => null,
        'store_group_id' => 'int32',
        'store_group_name' => null,
        'has_loyalty_campaign' => null,
        'has_retention_campaign' => null,
        'is_published' => null
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
        'store_id' => 'StoreId',
        'store_name' => 'StoreName',
        'store_group_id' => 'StoreGroupId',
        'store_group_name' => 'StoreGroupName',
        'has_loyalty_campaign' => 'HasLoyaltyCampaign',
        'has_retention_campaign' => 'HasRetentionCampaign',
        'is_published' => 'IsPublished'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'store_name' => 'setStoreName',
        'store_group_id' => 'setStoreGroupId',
        'store_group_name' => 'setStoreGroupName',
        'has_loyalty_campaign' => 'setHasLoyaltyCampaign',
        'has_retention_campaign' => 'setHasRetentionCampaign',
        'is_published' => 'setIsPublished'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'store_name' => 'getStoreName',
        'store_group_id' => 'getStoreGroupId',
        'store_group_name' => 'getStoreGroupName',
        'has_loyalty_campaign' => 'getHasLoyaltyCampaign',
        'has_retention_campaign' => 'getHasRetentionCampaign',
        'is_published' => 'getIsPublished'
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
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['store_group_id'] = isset($data['store_group_id']) ? $data['store_group_id'] : null;
        $this->container['store_group_name'] = isset($data['store_group_name']) ? $data['store_group_name'] : null;
        $this->container['has_loyalty_campaign'] = isset($data['has_loyalty_campaign']) ? $data['has_loyalty_campaign'] : null;
        $this->container['has_retention_campaign'] = isset($data['has_retention_campaign']) ? $data['has_retention_campaign'] : null;
        $this->container['is_published'] = isset($data['is_published']) ? $data['is_published'] : null;
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
     * Gets store_id
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param int $store_id Store Id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets store_name
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     *
     * @param string $store_name Store Name
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets store_group_id
     *
     * @return int
     */
    public function getStoreGroupId()
    {
        return $this->container['store_group_id'];
    }

    /**
     * Sets store_group_id
     *
     * @param int $store_group_id Store Group Id
     *
     * @return $this
     */
    public function setStoreGroupId($store_group_id)
    {
        $this->container['store_group_id'] = $store_group_id;

        return $this;
    }

    /**
     * Gets store_group_name
     *
     * @return string
     */
    public function getStoreGroupName()
    {
        return $this->container['store_group_name'];
    }

    /**
     * Sets store_group_name
     *
     * @param string $store_group_name Store Group Name
     *
     * @return $this
     */
    public function setStoreGroupName($store_group_name)
    {
        $this->container['store_group_name'] = $store_group_name;

        return $this;
    }

    /**
     * Gets has_loyalty_campaign
     *
     * @return bool
     */
    public function getHasLoyaltyCampaign()
    {
        return $this->container['has_loyalty_campaign'];
    }

    /**
     * Sets has_loyalty_campaign
     *
     * @param bool $has_loyalty_campaign Store has loyalty campaign
     *
     * @return $this
     */
    public function setHasLoyaltyCampaign($has_loyalty_campaign)
    {
        $this->container['has_loyalty_campaign'] = $has_loyalty_campaign;

        return $this;
    }

    /**
     * Gets has_retention_campaign
     *
     * @return bool
     */
    public function getHasRetentionCampaign()
    {
        return $this->container['has_retention_campaign'];
    }

    /**
     * Sets has_retention_campaign
     *
     * @param bool $has_retention_campaign Store has retention campaign
     *
     * @return $this
     */
    public function setHasRetentionCampaign($has_retention_campaign)
    {
        $this->container['has_retention_campaign'] = $has_retention_campaign;

        return $this;
    }

    /**
     * Gets is_published
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->container['is_published'];
    }

    /**
     * Sets is_published
     *
     * @param bool $is_published Is Published store
     *
     * @return $this
     */
    public function setIsPublished($is_published)
    {
        $this->container['is_published'] = $is_published;

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



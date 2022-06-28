<?php
/**
 * FulfillmentStatesConfigurationSummary
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
 * FulfillmentStatesConfigurationSummary Class Doc Comment
 *
 * @category Class
 * @description App store app configuration header information
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentStatesConfigurationSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FulfillmentStatesConfigurationSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_id' => 'string',
        'configuration_uid' => 'string',
        'store_selector_type' => 'string',
        'stores' => '\Flipdish\\Client\Models\FulfillmentStatesConfiguredStore[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_id' => null,
        'configuration_uid' => null,
        'store_selector_type' => null,
        'stores' => null
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
        'app_id' => 'AppId',
        'configuration_uid' => 'ConfigurationUid',
        'store_selector_type' => 'StoreSelectorType',
        'stores' => 'Stores'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'configuration_uid' => 'setConfigurationUid',
        'store_selector_type' => 'setStoreSelectorType',
        'stores' => 'setStores'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'configuration_uid' => 'getConfigurationUid',
        'store_selector_type' => 'getStoreSelectorType',
        'stores' => 'getStores'
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

    const STORE_SELECTOR_TYPE_NONE = 'None';
    const STORE_SELECTOR_TYPE_SINGLE = 'Single';
    const STORE_SELECTOR_TYPE_MULTIPLE = 'Multiple';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStoreSelectorTypeAllowableValues()
    {
        return [
            self::STORE_SELECTOR_TYPE_NONE,
            self::STORE_SELECTOR_TYPE_SINGLE,
            self::STORE_SELECTOR_TYPE_MULTIPLE,
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
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['configuration_uid'] = isset($data['configuration_uid']) ? $data['configuration_uid'] : null;
        $this->container['store_selector_type'] = isset($data['store_selector_type']) ? $data['store_selector_type'] : null;
        $this->container['stores'] = isset($data['stores']) ? $data['stores'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        $allowedValues = $this->getStoreSelectorTypeAllowableValues();
        if (!is_null($this->container['store_selector_type']) && !in_array($this->container['store_selector_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'store_selector_type', must be one of '%s'",
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
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id AppId
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets configuration_uid
     *
     * @return string
     */
    public function getConfigurationUid()
    {
        return $this->container['configuration_uid'];
    }

    /**
     * Sets configuration_uid
     *
     * @param string $configuration_uid Configuration Uid
     *
     * @return $this
     */
    public function setConfigurationUid($configuration_uid)
    {
        $this->container['configuration_uid'] = $configuration_uid;

        return $this;
    }

    /**
     * Gets store_selector_type
     *
     * @return string
     */
    public function getStoreSelectorType()
    {
        return $this->container['store_selector_type'];
    }

    /**
     * Sets store_selector_type
     *
     * @param string $store_selector_type Store selector type
     *
     * @return $this
     */
    public function setStoreSelectorType($store_selector_type)
    {
        $allowedValues = $this->getStoreSelectorTypeAllowableValues();
        if (!is_null($store_selector_type) && !in_array($store_selector_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'store_selector_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['store_selector_type'] = $store_selector_type;

        return $this;
    }

    /**
     * Gets stores
     *
     * @return \Flipdish\\Client\Models\FulfillmentStatesConfiguredStore[]
     */
    public function getStores()
    {
        return $this->container['stores'];
    }

    /**
     * Sets stores
     *
     * @param \Flipdish\\Client\Models\FulfillmentStatesConfiguredStore[] $stores Stores
     *
     * @return $this
     */
    public function setStores($stores)
    {
        $this->container['stores'] = $stores;

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



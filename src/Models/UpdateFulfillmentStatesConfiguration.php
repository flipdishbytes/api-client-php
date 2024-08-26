<?php
/**
 * UpdateFulfillmentStatesConfiguration
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
 * UpdateFulfillmentStatesConfiguration Class Doc Comment
 *
 * @category Class
 * @description Update fulfillment states configuration
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateFulfillmentStatesConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateFulfillmentStatesConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'overwrite_system_template' => 'bool',
        'store_ids' => 'int[]',
        'store_selector_type' => 'string',
        'states' => '\Flipdish\\Client\Models\FulfillmentStatusConfigurationItem[]',
        'automatic_transitions_enabled' => 'bool',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'overwrite_system_template' => null,
        'store_ids' => 'int32',
        'store_selector_type' => null,
        'states' => null,
        'automatic_transitions_enabled' => null,
        'name' => null
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
        'overwrite_system_template' => 'OverwriteSystemTemplate',
        'store_ids' => 'StoreIds',
        'store_selector_type' => 'StoreSelectorType',
        'states' => 'States',
        'automatic_transitions_enabled' => 'AutomaticTransitionsEnabled',
        'name' => 'Name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'overwrite_system_template' => 'setOverwriteSystemTemplate',
        'store_ids' => 'setStoreIds',
        'store_selector_type' => 'setStoreSelectorType',
        'states' => 'setStates',
        'automatic_transitions_enabled' => 'setAutomaticTransitionsEnabled',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'overwrite_system_template' => 'getOverwriteSystemTemplate',
        'store_ids' => 'getStoreIds',
        'store_selector_type' => 'getStoreSelectorType',
        'states' => 'getStates',
        'automatic_transitions_enabled' => 'getAutomaticTransitionsEnabled',
        'name' => 'getName'
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
        $this->container['overwrite_system_template'] = isset($data['overwrite_system_template']) ? $data['overwrite_system_template'] : null;
        $this->container['store_ids'] = isset($data['store_ids']) ? $data['store_ids'] : null;
        $this->container['store_selector_type'] = isset($data['store_selector_type']) ? $data['store_selector_type'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['automatic_transitions_enabled'] = isset($data['automatic_transitions_enabled']) ? $data['automatic_transitions_enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets overwrite_system_template
     *
     * @return bool
     */
    public function getOverwriteSystemTemplate()
    {
        return $this->container['overwrite_system_template'];
    }

    /**
     * Sets overwrite_system_template
     *
     * @param bool $overwrite_system_template Set to true if a system configuration template is to be updated (permissions also needed)
     *
     * @return $this
     */
    public function setOverwriteSystemTemplate($overwrite_system_template)
    {
        $this->container['overwrite_system_template'] = $overwrite_system_template;

        return $this;
    }

    /**
     * Gets store_ids
     *
     * @return int[]
     */
    public function getStoreIds()
    {
        return $this->container['store_ids'];
    }

    /**
     * Sets store_ids
     *
     * @param int[] $store_ids Stores id's
     *
     * @return $this
     */
    public function setStoreIds($store_ids)
    {
        $this->container['store_ids'] = $store_ids;

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
     * @param string $store_selector_type Store Selector Type
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
     * Gets states
     *
     * @return \Flipdish\\Client\Models\FulfillmentStatusConfigurationItem[]
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \Flipdish\\Client\Models\FulfillmentStatusConfigurationItem[] $states Settings
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

        return $this;
    }

    /**
     * Gets automatic_transitions_enabled
     *
     * @return bool
     */
    public function getAutomaticTransitionsEnabled()
    {
        return $this->container['automatic_transitions_enabled'];
    }

    /**
     * Sets automatic_transitions_enabled
     *
     * @param bool $automatic_transitions_enabled Enable automatic transitions
     *
     * @return $this
     */
    public function setAutomaticTransitionsEnabled($automatic_transitions_enabled)
    {
        $this->container['automatic_transitions_enabled'] = $automatic_transitions_enabled;

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



<?php
/**
 * AppStoreAppConfigurationSummary
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
 * AppStoreAppConfigurationSummary Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppStoreAppConfigurationSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppStoreAppConfigurationSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'app_id' => 'string',
        'is_enabled' => 'bool',
        'stores' => '\Flipdish\\Client\Models\ConfiguredStore[]',
        'configuration_type' => 'string',
        'store_selector_type' => 'string',
        'internal' => 'bool',
        'app_store_app_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'logo' => 'string',
        'developer_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'app_id' => null,
        'is_enabled' => null,
        'stores' => null,
        'configuration_type' => null,
        'store_selector_type' => null,
        'internal' => null,
        'app_store_app_id' => null,
        'name' => null,
        'description' => null,
        'logo' => null,
        'developer_name' => null
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
        'id' => 'Id',
        'app_id' => 'AppId',
        'is_enabled' => 'IsEnabled',
        'stores' => 'Stores',
        'configuration_type' => 'ConfigurationType',
        'store_selector_type' => 'StoreSelectorType',
        'internal' => 'Internal',
        'app_store_app_id' => 'AppStoreAppId',
        'name' => 'Name',
        'description' => 'Description',
        'logo' => 'Logo',
        'developer_name' => 'DeveloperName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'app_id' => 'setAppId',
        'is_enabled' => 'setIsEnabled',
        'stores' => 'setStores',
        'configuration_type' => 'setConfigurationType',
        'store_selector_type' => 'setStoreSelectorType',
        'internal' => 'setInternal',
        'app_store_app_id' => 'setAppStoreAppId',
        'name' => 'setName',
        'description' => 'setDescription',
        'logo' => 'setLogo',
        'developer_name' => 'setDeveloperName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'app_id' => 'getAppId',
        'is_enabled' => 'getIsEnabled',
        'stores' => 'getStores',
        'configuration_type' => 'getConfigurationType',
        'store_selector_type' => 'getStoreSelectorType',
        'internal' => 'getInternal',
        'app_store_app_id' => 'getAppStoreAppId',
        'name' => 'getName',
        'description' => 'getDescription',
        'logo' => 'getLogo',
        'developer_name' => 'getDeveloperName'
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

    const CONFIGURATION_TYPE_EXTERNAL_LINK = 'ExternalLink';
    const CONFIGURATION_TYPE_FLIPDISH_HOSTED = 'FlipdishHosted';
    const STORE_SELECTOR_TYPE_NONE = 'None';
    const STORE_SELECTOR_TYPE_SINGLE = 'Single';
    const STORE_SELECTOR_TYPE_MULTIPLE = 'Multiple';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfigurationTypeAllowableValues()
    {
        return [
            self::CONFIGURATION_TYPE_EXTERNAL_LINK,
            self::CONFIGURATION_TYPE_FLIPDISH_HOSTED,
        ];
    }
    
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['stores'] = isset($data['stores']) ? $data['stores'] : null;
        $this->container['configuration_type'] = isset($data['configuration_type']) ? $data['configuration_type'] : null;
        $this->container['store_selector_type'] = isset($data['store_selector_type']) ? $data['store_selector_type'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['app_store_app_id'] = isset($data['app_store_app_id']) ? $data['app_store_app_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['developer_name'] = isset($data['developer_name']) ? $data['developer_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if ($this->container['is_enabled'] === null) {
            $invalidProperties[] = "'is_enabled' can't be null";
        }
        if ($this->container['stores'] === null) {
            $invalidProperties[] = "'stores' can't be null";
        }
        if ($this->container['configuration_type'] === null) {
            $invalidProperties[] = "'configuration_type' can't be null";
        }
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!is_null($this->container['configuration_type']) && !in_array($this->container['configuration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'configuration_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['store_selector_type'] === null) {
            $invalidProperties[] = "'store_selector_type' can't be null";
        }
        $allowedValues = $this->getStoreSelectorTypeAllowableValues();
        if (!is_null($this->container['store_selector_type']) && !in_array($this->container['store_selector_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'store_selector_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['internal'] === null) {
            $invalidProperties[] = "'internal' can't be null";
        }
        if ($this->container['app_store_app_id'] === null) {
            $invalidProperties[] = "'app_store_app_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $app_id app_id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled is_enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets stores
     *
     * @return \Flipdish\\Client\Models\ConfiguredStore[]
     */
    public function getStores()
    {
        return $this->container['stores'];
    }

    /**
     * Sets stores
     *
     * @param \Flipdish\\Client\Models\ConfiguredStore[] $stores stores
     *
     * @return $this
     */
    public function setStores($stores)
    {
        $this->container['stores'] = $stores;

        return $this;
    }

    /**
     * Gets configuration_type
     *
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->container['configuration_type'];
    }

    /**
     * Sets configuration_type
     *
     * @param string $configuration_type configuration_type
     *
     * @return $this
     */
    public function setConfigurationType($configuration_type)
    {
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!in_array($configuration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'configuration_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['configuration_type'] = $configuration_type;

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
     * @param string $store_selector_type store_selector_type
     *
     * @return $this
     */
    public function setStoreSelectorType($store_selector_type)
    {
        $allowedValues = $this->getStoreSelectorTypeAllowableValues();
        if (!in_array($store_selector_type, $allowedValues, true)) {
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
     * Gets internal
     *
     * @return bool
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param bool $internal internal
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets app_store_app_id
     *
     * @return string
     */
    public function getAppStoreAppId()
    {
        return $this->container['app_store_app_id'];
    }

    /**
     * Sets app_store_app_id
     *
     * @param string $app_store_app_id app_store_app_id
     *
     * @return $this
     */
    public function setAppStoreAppId($app_store_app_id)
    {
        $this->container['app_store_app_id'] = $app_store_app_id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets developer_name
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->container['developer_name'];
    }

    /**
     * Sets developer_name
     *
     * @param string $developer_name developer_name
     *
     * @return $this
     */
    public function setDeveloperName($developer_name)
    {
        $this->container['developer_name'] = $developer_name;

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



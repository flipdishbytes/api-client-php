<?php
/**
 * CreateTeammate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flipdish\Client
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

namespace Flipdish\Client\Models;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * CreateTeammate Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateTeammate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateTeammate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'app_access_level' => 'string',
        'has_access_to_all_stores' => 'bool',
        'store_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'app_access_level' => null,
        'has_access_to_all_stores' => null,
        'store_ids' => 'int32'
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
        'email' => 'Email',
        'app_access_level' => 'AppAccessLevel',
        'has_access_to_all_stores' => 'HasAccessToAllStores',
        'store_ids' => 'StoreIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'app_access_level' => 'setAppAccessLevel',
        'has_access_to_all_stores' => 'setHasAccessToAllStores',
        'store_ids' => 'setStoreIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'app_access_level' => 'getAppAccessLevel',
        'has_access_to_all_stores' => 'getHasAccessToAllStores',
        'store_ids' => 'getStoreIds'
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

    const APP_ACCESS_LEVEL_NONE = 'None';
    const APP_ACCESS_LEVEL_OWNER = 'Owner';
    const APP_ACCESS_LEVEL_STORE_OWNER = 'StoreOwner';
    const APP_ACCESS_LEVEL_MANAGED_OWNER = 'ManagedOwner';
    const APP_ACCESS_LEVEL_STORE_MANAGER = 'StoreManager';
    const APP_ACCESS_LEVEL_STORE_STAFF = 'StoreStaff';
    const APP_ACCESS_LEVEL_STORE_READ_ONLY_ACCESS = 'StoreReadOnlyAccess';
    const APP_ACCESS_LEVEL_FINANCE_MANGER = 'FinanceManger';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppAccessLevelAllowableValues()
    {
        return [
            self::APP_ACCESS_LEVEL_NONE,
            self::APP_ACCESS_LEVEL_OWNER,
            self::APP_ACCESS_LEVEL_STORE_OWNER,
            self::APP_ACCESS_LEVEL_MANAGED_OWNER,
            self::APP_ACCESS_LEVEL_STORE_MANAGER,
            self::APP_ACCESS_LEVEL_STORE_STAFF,
            self::APP_ACCESS_LEVEL_STORE_READ_ONLY_ACCESS,
            self::APP_ACCESS_LEVEL_FINANCE_MANGER,
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['app_access_level'] = isset($data['app_access_level']) ? $data['app_access_level'] : null;
        $this->container['has_access_to_all_stores'] = isset($data['has_access_to_all_stores']) ? $data['has_access_to_all_stores'] : null;
        $this->container['store_ids'] = isset($data['store_ids']) ? $data['store_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAppAccessLevelAllowableValues();
        if (!is_null($this->container['app_access_level']) && !in_array($this->container['app_access_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'app_access_level', must be one of '%s'",
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets app_access_level
     *
     * @return string
     */
    public function getAppAccessLevel()
    {
        return $this->container['app_access_level'];
    }

    /**
     * Sets app_access_level
     *
     * @param string $app_access_level App access level
     *
     * @return $this
     */
    public function setAppAccessLevel($app_access_level)
    {
        $allowedValues = $this->getAppAccessLevelAllowableValues();
        if (!is_null($app_access_level) && !in_array($app_access_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'app_access_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['app_access_level'] = $app_access_level;

        return $this;
    }

    /**
     * Gets has_access_to_all_stores
     *
     * @return bool
     */
    public function getHasAccessToAllStores()
    {
        return $this->container['has_access_to_all_stores'];
    }

    /**
     * Sets has_access_to_all_stores
     *
     * @param bool $has_access_to_all_stores The user has access to all stores for the app (including new stores that added later)
     *
     * @return $this
     */
    public function setHasAccessToAllStores($has_access_to_all_stores)
    {
        $this->container['has_access_to_all_stores'] = $has_access_to_all_stores;

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
     * @param int[] $store_ids Store IDs the user has access to (if HasAccessToAllStores is false)
     *
     * @return $this
     */
    public function setStoreIds($store_ids)
    {
        $this->container['store_ids'] = $store_ids;

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



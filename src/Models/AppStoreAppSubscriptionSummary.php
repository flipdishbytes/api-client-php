<?php
/**
 * AppStoreAppSubscriptionSummary
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
 * AppStoreAppSubscriptionSummary Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppStoreAppSubscriptionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppStoreAppSubscriptionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_subscriptions' => 'int',
        'used_subscriptions' => 'int',
        'subscription_account_is_setup_for_client' => 'bool',
        'subscription_accounts' => '\Flipdish\\Client\Models\AppStoreAppSubscriptionAccount[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_subscriptions' => 'int32',
        'used_subscriptions' => 'int32',
        'subscription_account_is_setup_for_client' => null,
        'subscription_accounts' => null
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
        'total_subscriptions' => 'TotalSubscriptions',
        'used_subscriptions' => 'UsedSubscriptions',
        'subscription_account_is_setup_for_client' => 'SubscriptionAccountIsSetupForClient',
        'subscription_accounts' => 'SubscriptionAccounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_subscriptions' => 'setTotalSubscriptions',
        'used_subscriptions' => 'setUsedSubscriptions',
        'subscription_account_is_setup_for_client' => 'setSubscriptionAccountIsSetupForClient',
        'subscription_accounts' => 'setSubscriptionAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_subscriptions' => 'getTotalSubscriptions',
        'used_subscriptions' => 'getUsedSubscriptions',
        'subscription_account_is_setup_for_client' => 'getSubscriptionAccountIsSetupForClient',
        'subscription_accounts' => 'getSubscriptionAccounts'
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
        $this->container['total_subscriptions'] = isset($data['total_subscriptions']) ? $data['total_subscriptions'] : null;
        $this->container['used_subscriptions'] = isset($data['used_subscriptions']) ? $data['used_subscriptions'] : null;
        $this->container['subscription_account_is_setup_for_client'] = isset($data['subscription_account_is_setup_for_client']) ? $data['subscription_account_is_setup_for_client'] : null;
        $this->container['subscription_accounts'] = isset($data['subscription_accounts']) ? $data['subscription_accounts'] : null;
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
     * Gets total_subscriptions
     *
     * @return int
     */
    public function getTotalSubscriptions()
    {
        return $this->container['total_subscriptions'];
    }

    /**
     * Sets total_subscriptions
     *
     * @param int $total_subscriptions total_subscriptions
     *
     * @return $this
     */
    public function setTotalSubscriptions($total_subscriptions)
    {
        $this->container['total_subscriptions'] = $total_subscriptions;

        return $this;
    }

    /**
     * Gets used_subscriptions
     *
     * @return int
     */
    public function getUsedSubscriptions()
    {
        return $this->container['used_subscriptions'];
    }

    /**
     * Sets used_subscriptions
     *
     * @param int $used_subscriptions used_subscriptions
     *
     * @return $this
     */
    public function setUsedSubscriptions($used_subscriptions)
    {
        $this->container['used_subscriptions'] = $used_subscriptions;

        return $this;
    }

    /**
     * Gets subscription_account_is_setup_for_client
     *
     * @return bool
     */
    public function getSubscriptionAccountIsSetupForClient()
    {
        return $this->container['subscription_account_is_setup_for_client'];
    }

    /**
     * Sets subscription_account_is_setup_for_client
     *
     * @param bool $subscription_account_is_setup_for_client subscription_account_is_setup_for_client
     *
     * @return $this
     */
    public function setSubscriptionAccountIsSetupForClient($subscription_account_is_setup_for_client)
    {
        $this->container['subscription_account_is_setup_for_client'] = $subscription_account_is_setup_for_client;

        return $this;
    }

    /**
     * Gets subscription_accounts
     *
     * @return \Flipdish\\Client\Models\AppStoreAppSubscriptionAccount[]
     */
    public function getSubscriptionAccounts()
    {
        return $this->container['subscription_accounts'];
    }

    /**
     * Sets subscription_accounts
     *
     * @param \Flipdish\\Client\Models\AppStoreAppSubscriptionAccount[] $subscription_accounts subscription_accounts
     *
     * @return $this
     */
    public function setSubscriptionAccounts($subscription_accounts)
    {
        $this->container['subscription_accounts'] = $subscription_accounts;

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



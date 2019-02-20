<?php
/**
 * SubscriptionPlansResponse
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
 * Swagger Codegen version: 2.4.2
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
 * SubscriptionPlansResponse Class Doc Comment
 *
 * @category Class
 * @description Available plans and mandatory fields to subscribe
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionPlansResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionPlansResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'publishable_api_key' => 'string',
        'email' => 'string',
        'subscription_plans' => '\Flipdish\Client\Models\SubscriptionPlan[]',
        'app_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'publishable_api_key' => null,
        'email' => null,
        'subscription_plans' => null,
        'app_ids' => null
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
        'publishable_api_key' => 'PublishableApiKey',
        'email' => 'Email',
        'subscription_plans' => 'SubscriptionPlans',
        'app_ids' => 'AppIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'publishable_api_key' => 'setPublishableApiKey',
        'email' => 'setEmail',
        'subscription_plans' => 'setSubscriptionPlans',
        'app_ids' => 'setAppIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'publishable_api_key' => 'getPublishableApiKey',
        'email' => 'getEmail',
        'subscription_plans' => 'getSubscriptionPlans',
        'app_ids' => 'getAppIds'
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
        $this->container['publishable_api_key'] = isset($data['publishable_api_key']) ? $data['publishable_api_key'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['subscription_plans'] = isset($data['subscription_plans']) ? $data['subscription_plans'] : null;
        $this->container['app_ids'] = isset($data['app_ids']) ? $data['app_ids'] : null;
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
     * Gets publishable_api_key
     *
     * @return string
     */
    public function getPublishableApiKey()
    {
        return $this->container['publishable_api_key'];
    }

    /**
     * Sets publishable_api_key
     *
     * @param string $publishable_api_key Stripe publishable api key
     *
     * @return $this
     */
    public function setPublishableApiKey($publishable_api_key)
    {
        $this->container['publishable_api_key'] = $publishable_api_key;

        return $this;
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
     * @param string $email User email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets subscription_plans
     *
     * @return \Flipdish\Client\Models\SubscriptionPlan[]
     */
    public function getSubscriptionPlans()
    {
        return $this->container['subscription_plans'];
    }

    /**
     * Sets subscription_plans
     *
     * @param \Flipdish\Client\Models\SubscriptionPlan[] $subscription_plans Available plans
     *
     * @return $this
     */
    public function setSubscriptionPlans($subscription_plans)
    {
        $this->container['subscription_plans'] = $subscription_plans;

        return $this;
    }

    /**
     * Gets app_ids
     *
     * @return string[]
     */
    public function getAppIds()
    {
        return $this->container['app_ids'];
    }

    /**
     * Sets app_ids
     *
     * @param string[] $app_ids App ids (string name) to which the user belongs
     *
     * @return $this
     */
    public function setAppIds($app_ids)
    {
        $this->container['app_ids'] = $app_ids;

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



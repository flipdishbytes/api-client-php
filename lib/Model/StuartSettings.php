<?php
/**
 * StuartSettings
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

namespace Flipdish\Client\Model;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * StuartSettings Class Doc Comment
 *
 * @category Class
 * @description Stuart settings
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StuartSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StuartSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'client_secret' => 'string',
        'enabled' => 'bool',
        'webhook_url_basic_authentication' => 'string',
        'minutes_to_pickup_before_than_delivery_time' => 'int',
        'package_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => null,
        'client_secret' => null,
        'enabled' => null,
        'webhook_url_basic_authentication' => null,
        'minutes_to_pickup_before_than_delivery_time' => 'int32',
        'package_type' => null
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
        'client_id' => 'ClientId',
        'client_secret' => 'ClientSecret',
        'enabled' => 'Enabled',
        'webhook_url_basic_authentication' => 'WebhookUrlBasicAuthentication',
        'minutes_to_pickup_before_than_delivery_time' => 'MinutesToPickupBeforeThanDeliveryTime',
        'package_type' => 'PackageType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'enabled' => 'setEnabled',
        'webhook_url_basic_authentication' => 'setWebhookUrlBasicAuthentication',
        'minutes_to_pickup_before_than_delivery_time' => 'setMinutesToPickupBeforeThanDeliveryTime',
        'package_type' => 'setPackageType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'enabled' => 'getEnabled',
        'webhook_url_basic_authentication' => 'getWebhookUrlBasicAuthentication',
        'minutes_to_pickup_before_than_delivery_time' => 'getMinutesToPickupBeforeThanDeliveryTime',
        'package_type' => 'getPackageType'
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

    const PACKAGE_TYPE_XSMALL = 'Xsmall';
    const PACKAGE_TYPE_SMALL = 'Small';
    const PACKAGE_TYPE_MEDIUM = 'Medium';
    const PACKAGE_TYPE_LARGE = 'Large';
    const PACKAGE_TYPE_XLARGE = 'Xlarge';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPackageTypeAllowableValues()
    {
        return [
            self::PACKAGE_TYPE_XSMALL,
            self::PACKAGE_TYPE_SMALL,
            self::PACKAGE_TYPE_MEDIUM,
            self::PACKAGE_TYPE_LARGE,
            self::PACKAGE_TYPE_XLARGE,
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['webhook_url_basic_authentication'] = isset($data['webhook_url_basic_authentication']) ? $data['webhook_url_basic_authentication'] : null;
        $this->container['minutes_to_pickup_before_than_delivery_time'] = isset($data['minutes_to_pickup_before_than_delivery_time']) ? $data['minutes_to_pickup_before_than_delivery_time'] : null;
        $this->container['package_type'] = isset($data['package_type']) ? $data['package_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPackageTypeAllowableValues();
        if (!is_null($this->container['package_type']) && !in_array($this->container['package_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'package_type', must be one of '%s'",
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
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Client Id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret Client Secret
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets webhook_url_basic_authentication
     *
     * @return string
     */
    public function getWebhookUrlBasicAuthentication()
    {
        return $this->container['webhook_url_basic_authentication'];
    }

    /**
     * Sets webhook_url_basic_authentication
     *
     * @param string $webhook_url_basic_authentication Webhook url to settle in the Stuart portal
     *
     * @return $this
     */
    public function setWebhookUrlBasicAuthentication($webhook_url_basic_authentication)
    {
        $this->container['webhook_url_basic_authentication'] = $webhook_url_basic_authentication;

        return $this;
    }

    /**
     * Gets minutes_to_pickup_before_than_delivery_time
     *
     * @return int
     */
    public function getMinutesToPickupBeforeThanDeliveryTime()
    {
        return $this->container['minutes_to_pickup_before_than_delivery_time'];
    }

    /**
     * Sets minutes_to_pickup_before_than_delivery_time
     *
     * @param int $minutes_to_pickup_before_than_delivery_time MinutesToPickupBeforeThanDeliveryTime
     *
     * @return $this
     */
    public function setMinutesToPickupBeforeThanDeliveryTime($minutes_to_pickup_before_than_delivery_time)
    {
        $this->container['minutes_to_pickup_before_than_delivery_time'] = $minutes_to_pickup_before_than_delivery_time;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param string $package_type PackageType
     *
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $allowedValues = $this->getPackageTypeAllowableValues();
        if (!is_null($package_type) && !in_array($package_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'package_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['package_type'] = $package_type;

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



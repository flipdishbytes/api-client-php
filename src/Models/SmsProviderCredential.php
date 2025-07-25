<?php
/**
 * SmsProviderCredential
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
 * SmsProviderCredential Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmsProviderCredential implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmsProviderCredential';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'org_id' => 'string',
        'brand_id' => 'string',
        'sms_service_type' => 'string',
        'sender_id' => 'string',
        'username' => 'string',
        'auth_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'org_id' => null,
        'brand_id' => null,
        'sms_service_type' => null,
        'sender_id' => null,
        'username' => null,
        'auth_token' => null
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
        'org_id' => 'OrgId',
        'brand_id' => 'BrandId',
        'sms_service_type' => 'SmsServiceType',
        'sender_id' => 'SenderId',
        'username' => 'Username',
        'auth_token' => 'AuthToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'org_id' => 'setOrgId',
        'brand_id' => 'setBrandId',
        'sms_service_type' => 'setSmsServiceType',
        'sender_id' => 'setSenderId',
        'username' => 'setUsername',
        'auth_token' => 'setAuthToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'org_id' => 'getOrgId',
        'brand_id' => 'getBrandId',
        'sms_service_type' => 'getSmsServiceType',
        'sender_id' => 'getSenderId',
        'username' => 'getUsername',
        'auth_token' => 'getAuthToken'
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

    const SMS_SERVICE_TYPE_NEXMO = 'Nexmo';
    const SMS_SERVICE_TYPE_TWILIO = 'Twilio';
    const SMS_SERVICE_TYPE__DEFAULT = 'Default';
    const SMS_SERVICE_TYPE_MESSAGE_BIRD = 'MessageBird';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSmsServiceTypeAllowableValues()
    {
        return [
            self::SMS_SERVICE_TYPE_NEXMO,
            self::SMS_SERVICE_TYPE_TWILIO,
            self::SMS_SERVICE_TYPE__DEFAULT,
            self::SMS_SERVICE_TYPE_MESSAGE_BIRD,
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
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['sms_service_type'] = isset($data['sms_service_type']) ? $data['sms_service_type'] : null;
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['auth_token'] = isset($data['auth_token']) ? $data['auth_token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSmsServiceTypeAllowableValues();
        if (!is_null($this->container['sms_service_type']) && !in_array($this->container['sms_service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sms_service_type', must be one of '%s'",
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
     * Gets org_id
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string $org_id org_id
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return string
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param string $brand_id brand_id
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets sms_service_type
     *
     * @return string
     */
    public function getSmsServiceType()
    {
        return $this->container['sms_service_type'];
    }

    /**
     * Sets sms_service_type
     *
     * @param string $sms_service_type sms_service_type
     *
     * @return $this
     */
    public function setSmsServiceType($sms_service_type)
    {
        $allowedValues = $this->getSmsServiceTypeAllowableValues();
        if (!is_null($sms_service_type) && !in_array($sms_service_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sms_service_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sms_service_type'] = $sms_service_type;

        return $this;
    }

    /**
     * Gets sender_id
     *
     * @return string
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param string $sender_id sender_id
     *
     * @return $this
     */
    public function setSenderId($sender_id)
    {
        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets auth_token
     *
     * @return string
     */
    public function getAuthToken()
    {
        return $this->container['auth_token'];
    }

    /**
     * Sets auth_token
     *
     * @param string $auth_token auth_token
     *
     * @return $this
     */
    public function setAuthToken($auth_token)
    {
        $this->container['auth_token'] = $auth_token;

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



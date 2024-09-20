<?php
/**
 * AccountDetail
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
 * AccountDetail Class Doc Comment
 *
 * @category Class
 * @description Account details
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'signup_steps' => '\Flipdish\\Client\Models\SignupStep[]',
        'is_verified' => 'bool',
        'is_self_serve_user' => 'bool',
        'account_id' => 'int',
        'name' => 'string',
        'language' => 'string',
        'time_zone_info_id' => 'string',
        'display_times_in_user_local_time_zone' => 'bool',
        'show_hidden_features' => 'bool',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'signup_steps' => null,
        'is_verified' => null,
        'is_self_serve_user' => null,
        'account_id' => 'int32',
        'name' => null,
        'language' => null,
        'time_zone_info_id' => null,
        'display_times_in_user_local_time_zone' => null,
        'show_hidden_features' => null,
        'created_at' => 'date-time'
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
        'signup_steps' => 'SignupSteps',
        'is_verified' => 'IsVerified',
        'is_self_serve_user' => 'IsSelfServeUser',
        'account_id' => 'AccountId',
        'name' => 'Name',
        'language' => 'Language',
        'time_zone_info_id' => 'TimeZoneInfoId',
        'display_times_in_user_local_time_zone' => 'DisplayTimesInUserLocalTimeZone',
        'show_hidden_features' => 'ShowHiddenFeatures',
        'created_at' => 'CreatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'signup_steps' => 'setSignupSteps',
        'is_verified' => 'setIsVerified',
        'is_self_serve_user' => 'setIsSelfServeUser',
        'account_id' => 'setAccountId',
        'name' => 'setName',
        'language' => 'setLanguage',
        'time_zone_info_id' => 'setTimeZoneInfoId',
        'display_times_in_user_local_time_zone' => 'setDisplayTimesInUserLocalTimeZone',
        'show_hidden_features' => 'setShowHiddenFeatures',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'signup_steps' => 'getSignupSteps',
        'is_verified' => 'getIsVerified',
        'is_self_serve_user' => 'getIsSelfServeUser',
        'account_id' => 'getAccountId',
        'name' => 'getName',
        'language' => 'getLanguage',
        'time_zone_info_id' => 'getTimeZoneInfoId',
        'display_times_in_user_local_time_zone' => 'getDisplayTimesInUserLocalTimeZone',
        'show_hidden_features' => 'getShowHiddenFeatures',
        'created_at' => 'getCreatedAt'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['signup_steps'] = isset($data['signup_steps']) ? $data['signup_steps'] : null;
        $this->container['is_verified'] = isset($data['is_verified']) ? $data['is_verified'] : null;
        $this->container['is_self_serve_user'] = isset($data['is_self_serve_user']) ? $data['is_self_serve_user'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['time_zone_info_id'] = isset($data['time_zone_info_id']) ? $data['time_zone_info_id'] : null;
        $this->container['display_times_in_user_local_time_zone'] = isset($data['display_times_in_user_local_time_zone']) ? $data['display_times_in_user_local_time_zone'] : null;
        $this->container['show_hidden_features'] = isset($data['show_hidden_features']) ? $data['show_hidden_features'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * @param string $email Email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets signup_steps
     *
     * @return \Flipdish\\Client\Models\SignupStep[]
     */
    public function getSignupSteps()
    {
        return $this->container['signup_steps'];
    }

    /**
     * Sets signup_steps
     *
     * @param \Flipdish\\Client\Models\SignupStep[] $signup_steps Signup steps
     *
     * @return $this
     */
    public function setSignupSteps($signup_steps)
    {
        $this->container['signup_steps'] = $signup_steps;

        return $this;
    }

    /**
     * Gets is_verified
     *
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->container['is_verified'];
    }

    /**
     * Sets is_verified
     *
     * @param bool $is_verified Is account email verified
     *
     * @return $this
     */
    public function setIsVerified($is_verified)
    {
        $this->container['is_verified'] = $is_verified;

        return $this;
    }

    /**
     * Gets is_self_serve_user
     *
     * @return bool
     */
    public function getIsSelfServeUser()
    {
        return $this->container['is_self_serve_user'];
    }

    /**
     * Sets is_self_serve_user
     *
     * @param bool $is_self_serve_user is the account a Self Server
     *
     * @return $this
     */
    public function setIsSelfServeUser($is_self_serve_user)
    {
        $this->container['is_self_serve_user'] = $is_self_serve_user;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id Accounts Id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language Id
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets time_zone_info_id
     *
     * @return string
     */
    public function getTimeZoneInfoId()
    {
        return $this->container['time_zone_info_id'];
    }

    /**
     * Sets time_zone_info_id
     *
     * @param string $time_zone_info_id Time Zone Info Id
     *
     * @return $this
     */
    public function setTimeZoneInfoId($time_zone_info_id)
    {
        $this->container['time_zone_info_id'] = $time_zone_info_id;

        return $this;
    }

    /**
     * Gets display_times_in_user_local_time_zone
     *
     * @return bool
     */
    public function getDisplayTimesInUserLocalTimeZone()
    {
        return $this->container['display_times_in_user_local_time_zone'];
    }

    /**
     * Sets display_times_in_user_local_time_zone
     *
     * @param bool $display_times_in_user_local_time_zone Display the time in time zone local to the user
     *
     * @return $this
     */
    public function setDisplayTimesInUserLocalTimeZone($display_times_in_user_local_time_zone)
    {
        $this->container['display_times_in_user_local_time_zone'] = $display_times_in_user_local_time_zone;

        return $this;
    }

    /**
     * Gets show_hidden_features
     *
     * @return bool
     */
    public function getShowHiddenFeatures()
    {
        return $this->container['show_hidden_features'];
    }

    /**
     * Sets show_hidden_features
     *
     * @param bool $show_hidden_features Show hidden features
     *
     * @return $this
     */
    public function setShowHiddenFeatures($show_hidden_features)
    {
        $this->container['show_hidden_features'] = $show_hidden_features;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at User created at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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



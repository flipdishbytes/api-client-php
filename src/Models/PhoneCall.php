<?php
/**
 * PhoneCall
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
 * PhoneCall Class Doc Comment
 *
 * @category Class
 * @description Phone call
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhoneCall implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhoneCall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'phone_call_id' => 'int',
        'time_of_call' => '\DateTime',
        'time_of_call_local' => '\DateTime',
        'store_id' => 'int',
        'store_name' => 'string',
        'caller_name' => 'string',
        'caller_user_id' => 'int',
        'caller_number' => 'string',
        'call_length_in_seconds' => 'int',
        'call_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'phone_call_id' => 'int32',
        'time_of_call' => 'date-time',
        'time_of_call_local' => 'date-time',
        'store_id' => 'int32',
        'store_name' => null,
        'caller_name' => null,
        'caller_user_id' => 'int32',
        'caller_number' => null,
        'call_length_in_seconds' => 'int32',
        'call_status' => null
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
        'phone_call_id' => 'PhoneCallId',
        'time_of_call' => 'TimeOfCall',
        'time_of_call_local' => 'TimeOfCallLocal',
        'store_id' => 'StoreId',
        'store_name' => 'StoreName',
        'caller_name' => 'CallerName',
        'caller_user_id' => 'CallerUserId',
        'caller_number' => 'CallerNumber',
        'call_length_in_seconds' => 'CallLengthInSeconds',
        'call_status' => 'CallStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_call_id' => 'setPhoneCallId',
        'time_of_call' => 'setTimeOfCall',
        'time_of_call_local' => 'setTimeOfCallLocal',
        'store_id' => 'setStoreId',
        'store_name' => 'setStoreName',
        'caller_name' => 'setCallerName',
        'caller_user_id' => 'setCallerUserId',
        'caller_number' => 'setCallerNumber',
        'call_length_in_seconds' => 'setCallLengthInSeconds',
        'call_status' => 'setCallStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_call_id' => 'getPhoneCallId',
        'time_of_call' => 'getTimeOfCall',
        'time_of_call_local' => 'getTimeOfCallLocal',
        'store_id' => 'getStoreId',
        'store_name' => 'getStoreName',
        'caller_name' => 'getCallerName',
        'caller_user_id' => 'getCallerUserId',
        'caller_number' => 'getCallerNumber',
        'call_length_in_seconds' => 'getCallLengthInSeconds',
        'call_status' => 'getCallStatus'
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

    const CALL_STATUS_QUEUED = 'Queued';
    const CALL_STATUS_RINGING = 'Ringing';
    const CALL_STATUS_IN_PROGRESS = 'InProgress';
    const CALL_STATUS_COMPLETED = 'Completed';
    const CALL_STATUS_FAILED = 'Failed';
    const CALL_STATUS_BUSY = 'Busy';
    const CALL_STATUS_NO_ANSWER = 'NoAnswer';
    const CALL_STATUS_UNKNOWN = 'Unknown';
    const CALL_STATUS_CANCELED = 'Canceled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCallStatusAllowableValues()
    {
        return [
            self::CALL_STATUS_QUEUED,
            self::CALL_STATUS_RINGING,
            self::CALL_STATUS_IN_PROGRESS,
            self::CALL_STATUS_COMPLETED,
            self::CALL_STATUS_FAILED,
            self::CALL_STATUS_BUSY,
            self::CALL_STATUS_NO_ANSWER,
            self::CALL_STATUS_UNKNOWN,
            self::CALL_STATUS_CANCELED,
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
        $this->container['phone_call_id'] = isset($data['phone_call_id']) ? $data['phone_call_id'] : null;
        $this->container['time_of_call'] = isset($data['time_of_call']) ? $data['time_of_call'] : null;
        $this->container['time_of_call_local'] = isset($data['time_of_call_local']) ? $data['time_of_call_local'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['caller_name'] = isset($data['caller_name']) ? $data['caller_name'] : null;
        $this->container['caller_user_id'] = isset($data['caller_user_id']) ? $data['caller_user_id'] : null;
        $this->container['caller_number'] = isset($data['caller_number']) ? $data['caller_number'] : null;
        $this->container['call_length_in_seconds'] = isset($data['call_length_in_seconds']) ? $data['call_length_in_seconds'] : null;
        $this->container['call_status'] = isset($data['call_status']) ? $data['call_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCallStatusAllowableValues();
        if (!is_null($this->container['call_status']) && !in_array($this->container['call_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'call_status', must be one of '%s'",
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
     * Gets phone_call_id
     *
     * @return int
     */
    public function getPhoneCallId()
    {
        return $this->container['phone_call_id'];
    }

    /**
     * Sets phone_call_id
     *
     * @param int $phone_call_id Phone call id
     *
     * @return $this
     */
    public function setPhoneCallId($phone_call_id)
    {
        $this->container['phone_call_id'] = $phone_call_id;

        return $this;
    }

    /**
     * Gets time_of_call
     *
     * @return \DateTime
     */
    public function getTimeOfCall()
    {
        return $this->container['time_of_call'];
    }

    /**
     * Sets time_of_call
     *
     * @param \DateTime $time_of_call Time of the call
     *
     * @return $this
     */
    public function setTimeOfCall($time_of_call)
    {
        $this->container['time_of_call'] = $time_of_call;

        return $this;
    }

    /**
     * Gets time_of_call_local
     *
     * @return \DateTime
     */
    public function getTimeOfCallLocal()
    {
        return $this->container['time_of_call_local'];
    }

    /**
     * Sets time_of_call_local
     *
     * @param \DateTime $time_of_call_local Time of the call, local to the store to which the call was made
     *
     * @return $this
     */
    public function setTimeOfCallLocal($time_of_call_local)
    {
        $this->container['time_of_call_local'] = $time_of_call_local;

        return $this;
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
     * @param int $store_id ID of the store that the call was TO
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
     * @param string $store_name Name of the store that the call was TO
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets caller_name
     *
     * @return string
     */
    public function getCallerName()
    {
        return $this->container['caller_name'];
    }

    /**
     * Sets caller_name
     *
     * @param string $caller_name Name of the caller
     *
     * @return $this
     */
    public function setCallerName($caller_name)
    {
        $this->container['caller_name'] = $caller_name;

        return $this;
    }

    /**
     * Gets caller_user_id
     *
     * @return int
     */
    public function getCallerUserId()
    {
        return $this->container['caller_user_id'];
    }

    /**
     * Sets caller_user_id
     *
     * @param int $caller_user_id UserID of the caller
     *
     * @return $this
     */
    public function setCallerUserId($caller_user_id)
    {
        $this->container['caller_user_id'] = $caller_user_id;

        return $this;
    }

    /**
     * Gets caller_number
     *
     * @return string
     */
    public function getCallerNumber()
    {
        return $this->container['caller_number'];
    }

    /**
     * Sets caller_number
     *
     * @param string $caller_number Phone number of the caller
     *
     * @return $this
     */
    public function setCallerNumber($caller_number)
    {
        $this->container['caller_number'] = $caller_number;

        return $this;
    }

    /**
     * Gets call_length_in_seconds
     *
     * @return int
     */
    public function getCallLengthInSeconds()
    {
        return $this->container['call_length_in_seconds'];
    }

    /**
     * Sets call_length_in_seconds
     *
     * @param int $call_length_in_seconds The amount of time the call took
     *
     * @return $this
     */
    public function setCallLengthInSeconds($call_length_in_seconds)
    {
        $this->container['call_length_in_seconds'] = $call_length_in_seconds;

        return $this;
    }

    /**
     * Gets call_status
     *
     * @return string
     */
    public function getCallStatus()
    {
        return $this->container['call_status'];
    }

    /**
     * Sets call_status
     *
     * @param string $call_status The status of the call
     *
     * @return $this
     */
    public function setCallStatus($call_status)
    {
        $allowedValues = $this->getCallStatusAllowableValues();
        if (!is_null($call_status) && !in_array($call_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'call_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['call_status'] = $call_status;

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



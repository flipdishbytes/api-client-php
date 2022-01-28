<?php
/**
 * OrderDeliveryInformationBase
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
 * OrderDeliveryInformationBase Class Doc Comment
 *
 * @category Class
 * @description Order Delivery Status Information
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDeliveryInformationBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDeliveryInformationBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_reference_id' => 'string',
        'track_url' => 'string',
        'status' => 'string',
        'delivery_status_notes' => 'string',
        'error_message' => 'string',
        'integration_code' => 'string',
        'integration_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_reference_id' => null,
        'track_url' => null,
        'status' => null,
        'delivery_status_notes' => null,
        'error_message' => null,
        'integration_code' => null,
        'integration_name' => null
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
        'external_reference_id' => 'ExternalReferenceId',
        'track_url' => 'TrackUrl',
        'status' => 'Status',
        'delivery_status_notes' => 'DeliveryStatusNotes',
        'error_message' => 'ErrorMessage',
        'integration_code' => 'IntegrationCode',
        'integration_name' => 'IntegrationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_reference_id' => 'setExternalReferenceId',
        'track_url' => 'setTrackUrl',
        'status' => 'setStatus',
        'delivery_status_notes' => 'setDeliveryStatusNotes',
        'error_message' => 'setErrorMessage',
        'integration_code' => 'setIntegrationCode',
        'integration_name' => 'setIntegrationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_reference_id' => 'getExternalReferenceId',
        'track_url' => 'getTrackUrl',
        'status' => 'getStatus',
        'delivery_status_notes' => 'getDeliveryStatusNotes',
        'error_message' => 'getErrorMessage',
        'integration_code' => 'getIntegrationCode',
        'integration_name' => 'getIntegrationName'
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

    const STATUS_NONE = 'None';
    const STATUS_UNASSIGNED = 'Unassigned';
    const STATUS_UNACCEPTED = 'Unaccepted';
    const STATUS_ACCEPTED = 'Accepted';
    const STATUS_CARRYING = 'Carrying';
    const STATUS_ON_THE_WAY = 'OnTheWay';
    const STATUS_ARRIVED_AT_LOCATION = 'ArrivedAtLocation';
    const STATUS_DELIVERED = 'Delivered';
    const STATUS_CANNOT_DELIVER = 'CannotDeliver';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NONE,
            self::STATUS_UNASSIGNED,
            self::STATUS_UNACCEPTED,
            self::STATUS_ACCEPTED,
            self::STATUS_CARRYING,
            self::STATUS_ON_THE_WAY,
            self::STATUS_ARRIVED_AT_LOCATION,
            self::STATUS_DELIVERED,
            self::STATUS_CANNOT_DELIVER,
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
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['track_url'] = isset($data['track_url']) ? $data['track_url'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['delivery_status_notes'] = isset($data['delivery_status_notes']) ? $data['delivery_status_notes'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['integration_code'] = isset($data['integration_code']) ? $data['integration_code'] : null;
        $this->container['integration_name'] = isset($data['integration_name']) ? $data['integration_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets external_reference_id
     *
     * @return string
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string $external_reference_id External Reference Id
     *
     * @return $this
     */
    public function setExternalReferenceId($external_reference_id)
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets track_url
     *
     * @return string
     */
    public function getTrackUrl()
    {
        return $this->container['track_url'];
    }

    /**
     * Sets track_url
     *
     * @param string $track_url Tracking Url
     *
     * @return $this
     */
    public function setTrackUrl($track_url)
    {
        $this->container['track_url'] = $track_url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Delivery Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets delivery_status_notes
     *
     * @return string
     */
    public function getDeliveryStatusNotes()
    {
        return $this->container['delivery_status_notes'];
    }

    /**
     * Sets delivery_status_notes
     *
     * @param string $delivery_status_notes Delivery Status Notes
     *
     * @return $this
     */
    public function setDeliveryStatusNotes($delivery_status_notes)
    {
        $this->container['delivery_status_notes'] = $delivery_status_notes;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message Error Message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets integration_code
     *
     * @return string
     */
    public function getIntegrationCode()
    {
        return $this->container['integration_code'];
    }

    /**
     * Sets integration_code
     *
     * @param string $integration_code Integration Code
     *
     * @return $this
     */
    public function setIntegrationCode($integration_code)
    {
        $this->container['integration_code'] = $integration_code;

        return $this;
    }

    /**
     * Gets integration_name
     *
     * @return string
     */
    public function getIntegrationName()
    {
        return $this->container['integration_name'];
    }

    /**
     * Sets integration_name
     *
     * @param string $integration_name Integration Name
     *
     * @return $this
     */
    public function setIntegrationName($integration_name)
    {
        $this->container['integration_name'] = $integration_name;

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



<?php
/**
 * OrderRejectedEvent
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
 * OrderRejectedEvent Class Doc Comment
 *
 * @category Class
 * @description Order Rejected Event
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRejectedEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRejectedEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event_name' => 'string',
        'description' => 'string',
        'order_rejected_time' => '\DateTime',
        'order' => '\Flipdish\Client\Model\Order',
        'flipdish_event_id' => 'string',
        'create_time' => '\DateTime',
        'position' => 'int',
        'app_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'event_name' => null,
        'description' => null,
        'order_rejected_time' => 'date-time',
        'order' => null,
        'flipdish_event_id' => 'uuid',
        'create_time' => 'date-time',
        'position' => 'int32',
        'app_id' => null
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
        'event_name' => 'EventName',
        'description' => 'Description',
        'order_rejected_time' => 'OrderRejectedTime',
        'order' => 'Order',
        'flipdish_event_id' => 'FlipdishEventId',
        'create_time' => 'CreateTime',
        'position' => 'Position',
        'app_id' => 'AppId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_name' => 'setEventName',
        'description' => 'setDescription',
        'order_rejected_time' => 'setOrderRejectedTime',
        'order' => 'setOrder',
        'flipdish_event_id' => 'setFlipdishEventId',
        'create_time' => 'setCreateTime',
        'position' => 'setPosition',
        'app_id' => 'setAppId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_name' => 'getEventName',
        'description' => 'getDescription',
        'order_rejected_time' => 'getOrderRejectedTime',
        'order' => 'getOrder',
        'flipdish_event_id' => 'getFlipdishEventId',
        'create_time' => 'getCreateTime',
        'position' => 'getPosition',
        'app_id' => 'getAppId'
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
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order_rejected_time'] = isset($data['order_rejected_time']) ? $data['order_rejected_time'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['flipdish_event_id'] = isset($data['flipdish_event_id']) ? $data['flipdish_event_id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
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
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name The event name
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

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
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order_rejected_time
     *
     * @return \DateTime
     */
    public function getOrderRejectedTime()
    {
        return $this->container['order_rejected_time'];
    }

    /**
     * Sets order_rejected_time
     *
     * @param \DateTime $order_rejected_time Order Rejected Time
     *
     * @return $this
     */
    public function setOrderRejectedTime($order_rejected_time)
    {
        $this->container['order_rejected_time'] = $order_rejected_time;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Flipdish\Client\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Flipdish\Client\Model\Order $order Order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets flipdish_event_id
     *
     * @return string
     */
    public function getFlipdishEventId()
    {
        return $this->container['flipdish_event_id'];
    }

    /**
     * Sets flipdish_event_id
     *
     * @param string $flipdish_event_id The identitfier of the event
     *
     * @return $this
     */
    public function setFlipdishEventId($flipdish_event_id)
    {
        $this->container['flipdish_event_id'] = $flipdish_event_id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime $create_time The time of creation of the event
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
     * @param string $app_id App id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

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



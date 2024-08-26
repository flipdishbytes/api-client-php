<?php
/**
 * Stream
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
 * Stream Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Stream implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Stream';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_read' => 'bool',
        'can_seek' => 'bool',
        'can_timeout' => 'bool',
        'can_write' => 'bool',
        'length' => 'int',
        'position' => 'int',
        'read_timeout' => 'int',
        'write_timeout' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_read' => null,
        'can_seek' => null,
        'can_timeout' => null,
        'can_write' => null,
        'length' => 'int64',
        'position' => 'int64',
        'read_timeout' => 'int32',
        'write_timeout' => 'int32'
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
        'can_read' => 'CanRead',
        'can_seek' => 'CanSeek',
        'can_timeout' => 'CanTimeout',
        'can_write' => 'CanWrite',
        'length' => 'Length',
        'position' => 'Position',
        'read_timeout' => 'ReadTimeout',
        'write_timeout' => 'WriteTimeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_read' => 'setCanRead',
        'can_seek' => 'setCanSeek',
        'can_timeout' => 'setCanTimeout',
        'can_write' => 'setCanWrite',
        'length' => 'setLength',
        'position' => 'setPosition',
        'read_timeout' => 'setReadTimeout',
        'write_timeout' => 'setWriteTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_read' => 'getCanRead',
        'can_seek' => 'getCanSeek',
        'can_timeout' => 'getCanTimeout',
        'can_write' => 'getCanWrite',
        'length' => 'getLength',
        'position' => 'getPosition',
        'read_timeout' => 'getReadTimeout',
        'write_timeout' => 'getWriteTimeout'
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
        $this->container['can_read'] = isset($data['can_read']) ? $data['can_read'] : null;
        $this->container['can_seek'] = isset($data['can_seek']) ? $data['can_seek'] : null;
        $this->container['can_timeout'] = isset($data['can_timeout']) ? $data['can_timeout'] : null;
        $this->container['can_write'] = isset($data['can_write']) ? $data['can_write'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['read_timeout'] = isset($data['read_timeout']) ? $data['read_timeout'] : null;
        $this->container['write_timeout'] = isset($data['write_timeout']) ? $data['write_timeout'] : null;
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
     * Gets can_read
     *
     * @return bool
     */
    public function getCanRead()
    {
        return $this->container['can_read'];
    }

    /**
     * Sets can_read
     *
     * @param bool $can_read can_read
     *
     * @return $this
     */
    public function setCanRead($can_read)
    {
        $this->container['can_read'] = $can_read;

        return $this;
    }

    /**
     * Gets can_seek
     *
     * @return bool
     */
    public function getCanSeek()
    {
        return $this->container['can_seek'];
    }

    /**
     * Sets can_seek
     *
     * @param bool $can_seek can_seek
     *
     * @return $this
     */
    public function setCanSeek($can_seek)
    {
        $this->container['can_seek'] = $can_seek;

        return $this;
    }

    /**
     * Gets can_timeout
     *
     * @return bool
     */
    public function getCanTimeout()
    {
        return $this->container['can_timeout'];
    }

    /**
     * Sets can_timeout
     *
     * @param bool $can_timeout can_timeout
     *
     * @return $this
     */
    public function setCanTimeout($can_timeout)
    {
        $this->container['can_timeout'] = $can_timeout;

        return $this;
    }

    /**
     * Gets can_write
     *
     * @return bool
     */
    public function getCanWrite()
    {
        return $this->container['can_write'];
    }

    /**
     * Sets can_write
     *
     * @param bool $can_write can_write
     *
     * @return $this
     */
    public function setCanWrite($can_write)
    {
        $this->container['can_write'] = $can_write;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets read_timeout
     *
     * @return int
     */
    public function getReadTimeout()
    {
        return $this->container['read_timeout'];
    }

    /**
     * Sets read_timeout
     *
     * @param int $read_timeout read_timeout
     *
     * @return $this
     */
    public function setReadTimeout($read_timeout)
    {
        $this->container['read_timeout'] = $read_timeout;

        return $this;
    }

    /**
     * Gets write_timeout
     *
     * @return int
     */
    public function getWriteTimeout()
    {
        return $this->container['write_timeout'];
    }

    /**
     * Sets write_timeout
     *
     * @param int $write_timeout write_timeout
     *
     * @return $this
     */
    public function setWriteTimeout($write_timeout)
    {
        $this->container['write_timeout'] = $write_timeout;

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



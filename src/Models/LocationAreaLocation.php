<?php
/**
 * LocationAreaLocation
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
 * LocationAreaLocation Class Doc Comment
 *
 * @category Class
 * @description Representation of a Location i.e: (Table, Hotel Room, Car Park, etc )
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationAreaLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocationArea_Location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_id' => 'int',
        'location_name' => 'string',
        'display_order' => 'int',
        'external_location_id' => 'string',
        'is_deleted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_id' => 'int32',
        'location_name' => null,
        'display_order' => 'int32',
        'external_location_id' => null,
        'is_deleted' => null
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
        'location_id' => 'LocationId',
        'location_name' => 'LocationName',
        'display_order' => 'DisplayOrder',
        'external_location_id' => 'ExternalLocationId',
        'is_deleted' => 'IsDeleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_id' => 'setLocationId',
        'location_name' => 'setLocationName',
        'display_order' => 'setDisplayOrder',
        'external_location_id' => 'setExternalLocationId',
        'is_deleted' => 'setIsDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_id' => 'getLocationId',
        'location_name' => 'getLocationName',
        'display_order' => 'getDisplayOrder',
        'external_location_id' => 'getExternalLocationId',
        'is_deleted' => 'getIsDeleted'
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
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_name'] = isset($data['location_name']) ? $data['location_name'] : null;
        $this->container['display_order'] = isset($data['display_order']) ? $data['display_order'] : null;
        $this->container['external_location_id'] = isset($data['external_location_id']) ? $data['external_location_id'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['location_name'] === null) {
            $invalidProperties[] = "'location_name' can't be null";
        }
        if ($this->container['display_order'] === null) {
            $invalidProperties[] = "'display_order' can't be null";
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
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id Id of the Location
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string $location_name Name of the Location
     *
     * @return $this
     */
    public function setLocationName($location_name)
    {
        $this->container['location_name'] = $location_name;

        return $this;
    }

    /**
     * Gets display_order
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->container['display_order'];
    }

    /**
     * Sets display_order
     *
     * @param int $display_order The order that the Location should be displayed on the screen
     *
     * @return $this
     */
    public function setDisplayOrder($display_order)
    {
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets external_location_id
     *
     * @return string
     */
    public function getExternalLocationId()
    {
        return $this->container['external_location_id'];
    }

    /**
     * Sets external_location_id
     *
     * @param string $external_location_id Id of the Location on an external system
     *
     * @return $this
     */
    public function setExternalLocationId($external_location_id)
    {
        $this->container['external_location_id'] = $external_location_id;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted Shows if the Location is deleted or not
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

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



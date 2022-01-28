<?php
/**
 * DeliveryLocation
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
 * DeliveryLocation Class Doc Comment
 *
 * @category Class
 * @description Delivery location
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'coordinates' => '\Flipdish\\Client\Models\Coordinates',
        'building' => 'string',
        'street' => 'string',
        'town' => 'string',
        'post_code' => 'string',
        'delivery_instructions' => 'string',
        'pretty_address_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'coordinates' => null,
        'building' => null,
        'street' => null,
        'town' => null,
        'post_code' => null,
        'delivery_instructions' => null,
        'pretty_address_string' => null
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
        'coordinates' => 'Coordinates',
        'building' => 'Building',
        'street' => 'Street',
        'town' => 'Town',
        'post_code' => 'PostCode',
        'delivery_instructions' => 'DeliveryInstructions',
        'pretty_address_string' => 'PrettyAddressString'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coordinates' => 'setCoordinates',
        'building' => 'setBuilding',
        'street' => 'setStreet',
        'town' => 'setTown',
        'post_code' => 'setPostCode',
        'delivery_instructions' => 'setDeliveryInstructions',
        'pretty_address_string' => 'setPrettyAddressString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coordinates' => 'getCoordinates',
        'building' => 'getBuilding',
        'street' => 'getStreet',
        'town' => 'getTown',
        'post_code' => 'getPostCode',
        'delivery_instructions' => 'getDeliveryInstructions',
        'pretty_address_string' => 'getPrettyAddressString'
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
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['building'] = isset($data['building']) ? $data['building'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['delivery_instructions'] = isset($data['delivery_instructions']) ? $data['delivery_instructions'] : null;
        $this->container['pretty_address_string'] = isset($data['pretty_address_string']) ? $data['pretty_address_string'] : null;
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
     * Gets coordinates
     *
     * @return \Flipdish\\Client\Models\Coordinates
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \Flipdish\\Client\Models\Coordinates $coordinates Geo cordinate
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->container['building'];
    }

    /**
     * Sets building
     *
     * @param string $building Building
     *
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->container['building'] = $building;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code Post code
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets delivery_instructions
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->container['delivery_instructions'];
    }

    /**
     * Sets delivery_instructions
     *
     * @param string $delivery_instructions Delivery instructions
     *
     * @return $this
     */
    public function setDeliveryInstructions($delivery_instructions)
    {
        $this->container['delivery_instructions'] = $delivery_instructions;

        return $this;
    }

    /**
     * Gets pretty_address_string
     *
     * @return string
     */
    public function getPrettyAddressString()
    {
        return $this->container['pretty_address_string'];
    }

    /**
     * Sets pretty_address_string
     *
     * @param string $pretty_address_string Formatted, pretty address string
     *
     * @return $this
     */
    public function setPrettyAddressString($pretty_address_string)
    {
        $this->container['pretty_address_string'] = $pretty_address_string;

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



<?php
/**
 * StoreAddressBase
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
 * StoreAddressBase Class Doc Comment
 *
 * @category Class
 * @description Store address base
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreAddressBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StoreAddressBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line1' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'display_for_customer' => 'string',
        'address_fields' => 'map[string,object]',
        'single_line_display' => 'string',
        'two_lines_display' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line1' => null,
        'postcode' => null,
        'city' => null,
        'country_code' => null,
        'display_for_customer' => null,
        'address_fields' => null,
        'single_line_display' => null,
        'two_lines_display' => null
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
        'line1' => 'Line1',
        'postcode' => 'Postcode',
        'city' => 'City',
        'country_code' => 'CountryCode',
        'display_for_customer' => 'DisplayForCustomer',
        'address_fields' => 'AddressFields',
        'single_line_display' => 'SingleLineDisplay',
        'two_lines_display' => 'TwoLinesDisplay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line1' => 'setLine1',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'display_for_customer' => 'setDisplayForCustomer',
        'address_fields' => 'setAddressFields',
        'single_line_display' => 'setSingleLineDisplay',
        'two_lines_display' => 'setTwoLinesDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line1' => 'getLine1',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'display_for_customer' => 'getDisplayForCustomer',
        'address_fields' => 'getAddressFields',
        'single_line_display' => 'getSingleLineDisplay',
        'two_lines_display' => 'getTwoLinesDisplay'
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
        $this->container['line1'] = isset($data['line1']) ? $data['line1'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['display_for_customer'] = isset($data['display_for_customer']) ? $data['display_for_customer'] : null;
        $this->container['address_fields'] = isset($data['address_fields']) ? $data['address_fields'] : null;
        $this->container['single_line_display'] = isset($data['single_line_display']) ? $data['single_line_display'] : null;
        $this->container['two_lines_display'] = isset($data['two_lines_display']) ? $data['two_lines_display'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 0.";
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
     * Gets line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 Address line 1
     *
     * @return $this
     */
    public function setLine1($line1)
    {
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country code (ISO-alpha2)
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling StoreAddressBase., must be smaller than or equal to 2.');
        }
        if (!is_null($country_code) && (mb_strlen($country_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling StoreAddressBase., must be bigger than or equal to 0.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets display_for_customer
     *
     * @return string
     */
    public function getDisplayForCustomer()
    {
        return $this->container['display_for_customer'];
    }

    /**
     * Sets display_for_customer
     *
     * @param string $display_for_customer Display for customer
     *
     * @return $this
     */
    public function setDisplayForCustomer($display_for_customer)
    {
        $this->container['display_for_customer'] = $display_for_customer;

        return $this;
    }

    /**
     * Gets address_fields
     *
     * @return map[string,object]
     */
    public function getAddressFields()
    {
        return $this->container['address_fields'];
    }

    /**
     * Sets address_fields
     *
     * @param map[string,object] $address_fields Dyanmic field/value pairs, defined by the form assigned to the given country code.
     *
     * @return $this
     */
    public function setAddressFields($address_fields)
    {
        $this->container['address_fields'] = $address_fields;

        return $this;
    }

    /**
     * Gets single_line_display
     *
     * @return string
     */
    public function getSingleLineDisplay()
    {
        return $this->container['single_line_display'];
    }

    /**
     * Sets single_line_display
     *
     * @param string $single_line_display Single line display i18n, may be empty for not supported countries
     *
     * @return $this
     */
    public function setSingleLineDisplay($single_line_display)
    {
        $this->container['single_line_display'] = $single_line_display;

        return $this;
    }

    /**
     * Gets two_lines_display
     *
     * @return string[]
     */
    public function getTwoLinesDisplay()
    {
        return $this->container['two_lines_display'];
    }

    /**
     * Sets two_lines_display
     *
     * @param string[] $two_lines_display Two line display i18n, may be empty for not supported countries
     *
     * @return $this
     */
    public function setTwoLinesDisplay($two_lines_display)
    {
        $this->container['two_lines_display'] = $two_lines_display;

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



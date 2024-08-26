<?php
/**
 * ThirdPartyFeesDetails
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
 * ThirdPartyFeesDetails Class Doc Comment
 *
 * @category Class
 * @description Breakdown of third party integration fees
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThirdPartyFeesDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ThirdPartyFeesDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'delivery_integration_fee' => 'double',
        'delivery_tip_fee' => 'double',
        'total_third_party_fees' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'delivery_integration_fee' => 'double',
        'delivery_tip_fee' => 'double',
        'total_third_party_fees' => 'double'
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
        'delivery_integration_fee' => 'DeliveryIntegrationFee',
        'delivery_tip_fee' => 'DeliveryTipFee',
        'total_third_party_fees' => 'TotalThirdPartyFees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_integration_fee' => 'setDeliveryIntegrationFee',
        'delivery_tip_fee' => 'setDeliveryTipFee',
        'total_third_party_fees' => 'setTotalThirdPartyFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_integration_fee' => 'getDeliveryIntegrationFee',
        'delivery_tip_fee' => 'getDeliveryTipFee',
        'total_third_party_fees' => 'getTotalThirdPartyFees'
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
        $this->container['delivery_integration_fee'] = isset($data['delivery_integration_fee']) ? $data['delivery_integration_fee'] : null;
        $this->container['delivery_tip_fee'] = isset($data['delivery_tip_fee']) ? $data['delivery_tip_fee'] : null;
        $this->container['total_third_party_fees'] = isset($data['total_third_party_fees']) ? $data['total_third_party_fees'] : null;
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
     * Gets delivery_integration_fee
     *
     * @return double
     */
    public function getDeliveryIntegrationFee()
    {
        return $this->container['delivery_integration_fee'];
    }

    /**
     * Sets delivery_integration_fee
     *
     * @param double $delivery_integration_fee Third party integration delivery fee
     *
     * @return $this
     */
    public function setDeliveryIntegrationFee($delivery_integration_fee)
    {
        $this->container['delivery_integration_fee'] = $delivery_integration_fee;

        return $this;
    }

    /**
     * Gets delivery_tip_fee
     *
     * @return double
     */
    public function getDeliveryTipFee()
    {
        return $this->container['delivery_tip_fee'];
    }

    /**
     * Sets delivery_tip_fee
     *
     * @param double $delivery_tip_fee Third party integration delivery tip fee
     *
     * @return $this
     */
    public function setDeliveryTipFee($delivery_tip_fee)
    {
        $this->container['delivery_tip_fee'] = $delivery_tip_fee;

        return $this;
    }

    /**
     * Gets total_third_party_fees
     *
     * @return double
     */
    public function getTotalThirdPartyFees()
    {
        return $this->container['total_third_party_fees'];
    }

    /**
     * Sets total_third_party_fees
     *
     * @param double $total_third_party_fees Total third party integration fees
     *
     * @return $this
     */
    public function setTotalThirdPartyFees($total_third_party_fees)
    {
        $this->container['total_third_party_fees'] = $total_third_party_fees;

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



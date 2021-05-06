<?php
/**
 * CustomerUpdateModel
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
 * Swagger Codegen version: 2.4.19
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
 * CustomerUpdateModel Class Doc Comment
 *
 * @category Class
 * @description Defines a customer update model
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cash_orders_enabled' => 'bool',
        'card_orders_enabled' => 'bool',
        'marketing_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cash_orders_enabled' => null,
        'card_orders_enabled' => null,
        'marketing_enabled' => null
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
        'cash_orders_enabled' => 'CashOrdersEnabled',
        'card_orders_enabled' => 'CardOrdersEnabled',
        'marketing_enabled' => 'MarketingEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cash_orders_enabled' => 'setCashOrdersEnabled',
        'card_orders_enabled' => 'setCardOrdersEnabled',
        'marketing_enabled' => 'setMarketingEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cash_orders_enabled' => 'getCashOrdersEnabled',
        'card_orders_enabled' => 'getCardOrdersEnabled',
        'marketing_enabled' => 'getMarketingEnabled'
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
        $this->container['cash_orders_enabled'] = isset($data['cash_orders_enabled']) ? $data['cash_orders_enabled'] : null;
        $this->container['card_orders_enabled'] = isset($data['card_orders_enabled']) ? $data['card_orders_enabled'] : null;
        $this->container['marketing_enabled'] = isset($data['marketing_enabled']) ? $data['marketing_enabled'] : null;
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
     * Gets cash_orders_enabled
     *
     * @return bool
     */
    public function getCashOrdersEnabled()
    {
        return $this->container['cash_orders_enabled'];
    }

    /**
     * Sets cash_orders_enabled
     *
     * @param bool $cash_orders_enabled Customer can place cash orders
     *
     * @return $this
     */
    public function setCashOrdersEnabled($cash_orders_enabled)
    {
        $this->container['cash_orders_enabled'] = $cash_orders_enabled;

        return $this;
    }

    /**
     * Gets card_orders_enabled
     *
     * @return bool
     */
    public function getCardOrdersEnabled()
    {
        return $this->container['card_orders_enabled'];
    }

    /**
     * Sets card_orders_enabled
     *
     * @param bool $card_orders_enabled Customer can place card orders
     *
     * @return $this
     */
    public function setCardOrdersEnabled($card_orders_enabled)
    {
        $this->container['card_orders_enabled'] = $card_orders_enabled;

        return $this;
    }

    /**
     * Gets marketing_enabled
     *
     * @return bool
     */
    public function getMarketingEnabled()
    {
        return $this->container['marketing_enabled'];
    }

    /**
     * Sets marketing_enabled
     *
     * @param bool $marketing_enabled Customer can receive marketing
     *
     * @return $this
     */
    public function setMarketingEnabled($marketing_enabled)
    {
        $this->container['marketing_enabled'] = $marketing_enabled;

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



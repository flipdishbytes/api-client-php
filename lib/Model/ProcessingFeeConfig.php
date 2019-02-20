<?php
/**
 * ProcessingFeeConfig
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
 * ProcessingFeeConfig Class Doc Comment
 *
 * @category Class
 * @description Processing fee config
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcessingFeeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcessingFeeConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'store_id' => 'int',
        'payment_account_type' => 'string',
        'percent_fee' => 'double',
        'fixed_fee' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'store_id' => 'int32',
        'payment_account_type' => null,
        'percent_fee' => 'double',
        'fixed_fee' => 'double'
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
        'store_id' => 'StoreId',
        'payment_account_type' => 'PaymentAccountType',
        'percent_fee' => 'PercentFee',
        'fixed_fee' => 'FixedFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'payment_account_type' => 'setPaymentAccountType',
        'percent_fee' => 'setPercentFee',
        'fixed_fee' => 'setFixedFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'payment_account_type' => 'getPaymentAccountType',
        'percent_fee' => 'getPercentFee',
        'fixed_fee' => 'getFixedFee'
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

    const PAYMENT_ACCOUNT_TYPE_CARD = 'Card';
    const PAYMENT_ACCOUNT_TYPE_CASH = 'Cash';
    const PAYMENT_ACCOUNT_TYPE_IDEAL = 'Ideal';
    const PAYMENT_ACCOUNT_TYPE_BANCONTACT = 'Bancontact';
    const PAYMENT_ACCOUNT_TYPE_GIROPAY = 'Giropay';
    const PAYMENT_ACCOUNT_TYPE_EPS = 'Eps';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentAccountTypeAllowableValues()
    {
        return [
            self::PAYMENT_ACCOUNT_TYPE_CARD,
            self::PAYMENT_ACCOUNT_TYPE_CASH,
            self::PAYMENT_ACCOUNT_TYPE_IDEAL,
            self::PAYMENT_ACCOUNT_TYPE_BANCONTACT,
            self::PAYMENT_ACCOUNT_TYPE_GIROPAY,
            self::PAYMENT_ACCOUNT_TYPE_EPS,
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
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['payment_account_type'] = isset($data['payment_account_type']) ? $data['payment_account_type'] : null;
        $this->container['percent_fee'] = isset($data['percent_fee']) ? $data['percent_fee'] : null;
        $this->container['fixed_fee'] = isset($data['fixed_fee']) ? $data['fixed_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentAccountTypeAllowableValues();
        if (!is_null($this->container['payment_account_type']) && !in_array($this->container['payment_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_account_type', must be one of '%s'",
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
     * @param int $store_id Store Id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets payment_account_type
     *
     * @return string
     */
    public function getPaymentAccountType()
    {
        return $this->container['payment_account_type'];
    }

    /**
     * Sets payment_account_type
     *
     * @param string $payment_account_type Payment account type
     *
     * @return $this
     */
    public function setPaymentAccountType($payment_account_type)
    {
        $allowedValues = $this->getPaymentAccountTypeAllowableValues();
        if (!is_null($payment_account_type) && !in_array($payment_account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_account_type'] = $payment_account_type;

        return $this;
    }

    /**
     * Gets percent_fee
     *
     * @return double
     */
    public function getPercentFee()
    {
        return $this->container['percent_fee'];
    }

    /**
     * Sets percent_fee
     *
     * @param double $percent_fee Percent fee to customer, including VAT
     *
     * @return $this
     */
    public function setPercentFee($percent_fee)
    {
        $this->container['percent_fee'] = $percent_fee;

        return $this;
    }

    /**
     * Gets fixed_fee
     *
     * @return double
     */
    public function getFixedFee()
    {
        return $this->container['fixed_fee'];
    }

    /**
     * Sets fixed_fee
     *
     * @param double $fixed_fee Fixed fee to customer, including VAT
     *
     * @return $this
     */
    public function setFixedFee($fixed_fee)
    {
        $this->container['fixed_fee'] = $fixed_fee;

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



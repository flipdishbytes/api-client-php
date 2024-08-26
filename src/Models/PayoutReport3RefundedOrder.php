<?php
/**
 * PayoutReport3RefundedOrder
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
 * PayoutReport3RefundedOrder Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutReport3RefundedOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutReport3RefundedOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'int',
        'placed_at_time' => '\DateTime',
        'modified_at_time' => '\DateTime',
        'store_name' => 'string',
        'type' => 'string',
        'refunded_amount' => 'double',
        'refunded_fees' => 'double',
        'refund_type' => 'string',
        'cash_fee_refunded_to_customer' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => 'int32',
        'placed_at_time' => 'date-time',
        'modified_at_time' => 'date-time',
        'store_name' => null,
        'type' => null,
        'refunded_amount' => 'double',
        'refunded_fees' => 'double',
        'refund_type' => null,
        'cash_fee_refunded_to_customer' => 'double'
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
        'order_id' => 'OrderId',
        'placed_at_time' => 'PlacedAtTime',
        'modified_at_time' => 'ModifiedAtTime',
        'store_name' => 'StoreName',
        'type' => 'Type',
        'refunded_amount' => 'RefundedAmount',
        'refunded_fees' => 'RefundedFees',
        'refund_type' => 'RefundType',
        'cash_fee_refunded_to_customer' => 'CashFeeRefundedToCustomer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'placed_at_time' => 'setPlacedAtTime',
        'modified_at_time' => 'setModifiedAtTime',
        'store_name' => 'setStoreName',
        'type' => 'setType',
        'refunded_amount' => 'setRefundedAmount',
        'refunded_fees' => 'setRefundedFees',
        'refund_type' => 'setRefundType',
        'cash_fee_refunded_to_customer' => 'setCashFeeRefundedToCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'placed_at_time' => 'getPlacedAtTime',
        'modified_at_time' => 'getModifiedAtTime',
        'store_name' => 'getStoreName',
        'type' => 'getType',
        'refunded_amount' => 'getRefundedAmount',
        'refunded_fees' => 'getRefundedFees',
        'refund_type' => 'getRefundType',
        'cash_fee_refunded_to_customer' => 'getCashFeeRefundedToCustomer'
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

    const TYPE_CASH = 'Cash';
    const TYPE_CARD = 'Card';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CASH,
            self::TYPE_CARD,
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['placed_at_time'] = isset($data['placed_at_time']) ? $data['placed_at_time'] : null;
        $this->container['modified_at_time'] = isset($data['modified_at_time']) ? $data['modified_at_time'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['refunded_fees'] = isset($data['refunded_fees']) ? $data['refunded_fees'] : null;
        $this->container['refund_type'] = isset($data['refund_type']) ? $data['refund_type'] : null;
        $this->container['cash_fee_refunded_to_customer'] = isset($data['cash_fee_refunded_to_customer']) ? $data['cash_fee_refunded_to_customer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets placed_at_time
     *
     * @return \DateTime
     */
    public function getPlacedAtTime()
    {
        return $this->container['placed_at_time'];
    }

    /**
     * Sets placed_at_time
     *
     * @param \DateTime $placed_at_time placed_at_time
     *
     * @return $this
     */
    public function setPlacedAtTime($placed_at_time)
    {
        $this->container['placed_at_time'] = $placed_at_time;

        return $this;
    }

    /**
     * Gets modified_at_time
     *
     * @return \DateTime
     */
    public function getModifiedAtTime()
    {
        return $this->container['modified_at_time'];
    }

    /**
     * Sets modified_at_time
     *
     * @param \DateTime $modified_at_time modified_at_time
     *
     * @return $this
     */
    public function setModifiedAtTime($modified_at_time)
    {
        $this->container['modified_at_time'] = $modified_at_time;

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
     * @param string $store_name store_name
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return double
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param double $refunded_amount refunded_amount
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets refunded_fees
     *
     * @return double
     */
    public function getRefundedFees()
    {
        return $this->container['refunded_fees'];
    }

    /**
     * Sets refunded_fees
     *
     * @param double $refunded_fees refunded_fees
     *
     * @return $this
     */
    public function setRefundedFees($refunded_fees)
    {
        $this->container['refunded_fees'] = $refunded_fees;

        return $this;
    }

    /**
     * Gets refund_type
     *
     * @return string
     */
    public function getRefundType()
    {
        return $this->container['refund_type'];
    }

    /**
     * Sets refund_type
     *
     * @param string $refund_type refund_type
     *
     * @return $this
     */
    public function setRefundType($refund_type)
    {
        $this->container['refund_type'] = $refund_type;

        return $this;
    }

    /**
     * Gets cash_fee_refunded_to_customer
     *
     * @return double
     */
    public function getCashFeeRefundedToCustomer()
    {
        return $this->container['cash_fee_refunded_to_customer'];
    }

    /**
     * Sets cash_fee_refunded_to_customer
     *
     * @param double $cash_fee_refunded_to_customer cash_fee_refunded_to_customer
     *
     * @return $this
     */
    public function setCashFeeRefundedToCustomer($cash_fee_refunded_to_customer)
    {
        $this->container['cash_fee_refunded_to_customer'] = $cash_fee_refunded_to_customer;

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



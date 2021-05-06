<?php
/**
 * RevenueAdjustmentsDetails
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
 * RevenueAdjustmentsDetails Class Doc Comment
 *
 * @category Class
 * @description Revenue Adjustments breakdown
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RevenueAdjustmentsDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RevenueAdjustmentsDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'online_sales_refunded_amount' => 'double',
        'cash_sales_refunded_amount' => 'double',
        'customer_cash_fees' => 'double',
        'refunds_count' => 'int',
        'total_online_revenue_adjustments' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'online_sales_refunded_amount' => 'double',
        'cash_sales_refunded_amount' => 'double',
        'customer_cash_fees' => 'double',
        'refunds_count' => 'int32',
        'total_online_revenue_adjustments' => 'double'
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
        'online_sales_refunded_amount' => 'OnlineSalesRefundedAmount',
        'cash_sales_refunded_amount' => 'CashSalesRefundedAmount',
        'customer_cash_fees' => 'CustomerCashFees',
        'refunds_count' => 'RefundsCount',
        'total_online_revenue_adjustments' => 'TotalOnlineRevenueAdjustments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'online_sales_refunded_amount' => 'setOnlineSalesRefundedAmount',
        'cash_sales_refunded_amount' => 'setCashSalesRefundedAmount',
        'customer_cash_fees' => 'setCustomerCashFees',
        'refunds_count' => 'setRefundsCount',
        'total_online_revenue_adjustments' => 'setTotalOnlineRevenueAdjustments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'online_sales_refunded_amount' => 'getOnlineSalesRefundedAmount',
        'cash_sales_refunded_amount' => 'getCashSalesRefundedAmount',
        'customer_cash_fees' => 'getCustomerCashFees',
        'refunds_count' => 'getRefundsCount',
        'total_online_revenue_adjustments' => 'getTotalOnlineRevenueAdjustments'
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
        $this->container['online_sales_refunded_amount'] = isset($data['online_sales_refunded_amount']) ? $data['online_sales_refunded_amount'] : null;
        $this->container['cash_sales_refunded_amount'] = isset($data['cash_sales_refunded_amount']) ? $data['cash_sales_refunded_amount'] : null;
        $this->container['customer_cash_fees'] = isset($data['customer_cash_fees']) ? $data['customer_cash_fees'] : null;
        $this->container['refunds_count'] = isset($data['refunds_count']) ? $data['refunds_count'] : null;
        $this->container['total_online_revenue_adjustments'] = isset($data['total_online_revenue_adjustments']) ? $data['total_online_revenue_adjustments'] : null;
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
     * Gets online_sales_refunded_amount
     *
     * @return double
     */
    public function getOnlineSalesRefundedAmount()
    {
        return $this->container['online_sales_refunded_amount'];
    }

    /**
     * Sets online_sales_refunded_amount
     *
     * @param double $online_sales_refunded_amount Online sales refunds
     *
     * @return $this
     */
    public function setOnlineSalesRefundedAmount($online_sales_refunded_amount)
    {
        $this->container['online_sales_refunded_amount'] = $online_sales_refunded_amount;

        return $this;
    }

    /**
     * Gets cash_sales_refunded_amount
     *
     * @return double
     */
    public function getCashSalesRefundedAmount()
    {
        return $this->container['cash_sales_refunded_amount'];
    }

    /**
     * Sets cash_sales_refunded_amount
     *
     * @param double $cash_sales_refunded_amount Cash sales refunds
     *
     * @return $this
     */
    public function setCashSalesRefundedAmount($cash_sales_refunded_amount)
    {
        $this->container['cash_sales_refunded_amount'] = $cash_sales_refunded_amount;

        return $this;
    }

    /**
     * Gets customer_cash_fees
     *
     * @return double
     */
    public function getCustomerCashFees()
    {
        return $this->container['customer_cash_fees'];
    }

    /**
     * Sets customer_cash_fees
     *
     * @param double $customer_cash_fees Customer cash fees
     *
     * @return $this
     */
    public function setCustomerCashFees($customer_cash_fees)
    {
        $this->container['customer_cash_fees'] = $customer_cash_fees;

        return $this;
    }

    /**
     * Gets refunds_count
     *
     * @return int
     */
    public function getRefundsCount()
    {
        return $this->container['refunds_count'];
    }

    /**
     * Sets refunds_count
     *
     * @param int $refunds_count Number of refunds
     *
     * @return $this
     */
    public function setRefundsCount($refunds_count)
    {
        $this->container['refunds_count'] = $refunds_count;

        return $this;
    }

    /**
     * Gets total_online_revenue_adjustments
     *
     * @return double
     */
    public function getTotalOnlineRevenueAdjustments()
    {
        return $this->container['total_online_revenue_adjustments'];
    }

    /**
     * Sets total_online_revenue_adjustments
     *
     * @param double $total_online_revenue_adjustments Total revenue adjustments
     *
     * @return $this
     */
    public function setTotalOnlineRevenueAdjustments($total_online_revenue_adjustments)
    {
        $this->container['total_online_revenue_adjustments'] = $total_online_revenue_adjustments;

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



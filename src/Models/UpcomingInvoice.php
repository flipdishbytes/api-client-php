<?php
/**
 * UpcomingInvoice
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
 * UpcomingInvoice Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpcomingInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpcomingInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'double',
        'next_billing_date' => '\DateTime',
        'subtotal' => 'int',
        'total_excluding_tax' => 'int',
        'amount_due' => 'int',
        'tax' => 'int',
        'items' => '\Flipdish\\Client\Models\InvoiceItem[]',
        'discounts' => '\Flipdish\\Client\Models\InvoiceDiscount[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'double',
        'next_billing_date' => 'date-time',
        'subtotal' => 'int64',
        'total_excluding_tax' => 'int64',
        'amount_due' => 'int64',
        'tax' => 'int64',
        'items' => null,
        'discounts' => null
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
        'amount' => 'Amount',
        'next_billing_date' => 'NextBillingDate',
        'subtotal' => 'Subtotal',
        'total_excluding_tax' => 'TotalExcludingTax',
        'amount_due' => 'AmountDue',
        'tax' => 'Tax',
        'items' => 'Items',
        'discounts' => 'Discounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'next_billing_date' => 'setNextBillingDate',
        'subtotal' => 'setSubtotal',
        'total_excluding_tax' => 'setTotalExcludingTax',
        'amount_due' => 'setAmountDue',
        'tax' => 'setTax',
        'items' => 'setItems',
        'discounts' => 'setDiscounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'next_billing_date' => 'getNextBillingDate',
        'subtotal' => 'getSubtotal',
        'total_excluding_tax' => 'getTotalExcludingTax',
        'amount_due' => 'getAmountDue',
        'tax' => 'getTax',
        'items' => 'getItems',
        'discounts' => 'getDiscounts'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['next_billing_date'] = isset($data['next_billing_date']) ? $data['next_billing_date'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['total_excluding_tax'] = isset($data['total_excluding_tax']) ? $data['total_excluding_tax'] : null;
        $this->container['amount_due'] = isset($data['amount_due']) ? $data['amount_due'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subtotal'] === null) {
            $invalidProperties[] = "'subtotal' can't be null";
        }
        if ($this->container['amount_due'] === null) {
            $invalidProperties[] = "'amount_due' can't be null";
        }
        if ($this->container['tax'] === null) {
            $invalidProperties[] = "'tax' can't be null";
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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets next_billing_date
     *
     * @return \DateTime
     */
    public function getNextBillingDate()
    {
        return $this->container['next_billing_date'];
    }

    /**
     * Sets next_billing_date
     *
     * @param \DateTime $next_billing_date Next billing date
     *
     * @return $this
     */
    public function setNextBillingDate($next_billing_date)
    {
        $this->container['next_billing_date'] = $next_billing_date;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return int
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param int $subtotal Subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets total_excluding_tax
     *
     * @return int
     */
    public function getTotalExcludingTax()
    {
        return $this->container['total_excluding_tax'];
    }

    /**
     * Sets total_excluding_tax
     *
     * @param int $total_excluding_tax Total excluding tax
     *
     * @return $this
     */
    public function setTotalExcludingTax($total_excluding_tax)
    {
        $this->container['total_excluding_tax'] = $total_excluding_tax;

        return $this;
    }

    /**
     * Gets amount_due
     *
     * @return int
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param int $amount_due Amount due
     *
     * @return $this
     */
    public function setAmountDue($amount_due)
    {
        $this->container['amount_due'] = $amount_due;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return int
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param int $tax Tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Flipdish\\Client\Models\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Flipdish\\Client\Models\InvoiceItem[] $items Items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \Flipdish\\Client\Models\InvoiceDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \Flipdish\\Client\Models\InvoiceDiscount[] $discounts Discounts
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

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



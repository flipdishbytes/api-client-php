<?php
/**
 * RetentionCampaign
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

namespace Flipdish\Client\Models;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * RetentionCampaign Class Doc Comment
 *
 * @category Class
 * @description RetentionCampaign
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetentionCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetentionCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from' => '\DateTime',
        'voucher_valid_period_days' => 'int',
        'include_delivery_fee' => 'bool',
        'notify_customer_after_minutes' => 'int',
        'percent_discount_amount' => 'int',
        'lump_discount_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from' => 'date-time',
        'voucher_valid_period_days' => 'int32',
        'include_delivery_fee' => null,
        'notify_customer_after_minutes' => 'int32',
        'percent_discount_amount' => 'int32',
        'lump_discount_amount' => 'int32'
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
        'from' => 'From',
        'voucher_valid_period_days' => 'VoucherValidPeriodDays',
        'include_delivery_fee' => 'IncludeDeliveryFee',
        'notify_customer_after_minutes' => 'NotifyCustomerAfterMinutes',
        'percent_discount_amount' => 'PercentDiscountAmount',
        'lump_discount_amount' => 'LumpDiscountAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'voucher_valid_period_days' => 'setVoucherValidPeriodDays',
        'include_delivery_fee' => 'setIncludeDeliveryFee',
        'notify_customer_after_minutes' => 'setNotifyCustomerAfterMinutes',
        'percent_discount_amount' => 'setPercentDiscountAmount',
        'lump_discount_amount' => 'setLumpDiscountAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'voucher_valid_period_days' => 'getVoucherValidPeriodDays',
        'include_delivery_fee' => 'getIncludeDeliveryFee',
        'notify_customer_after_minutes' => 'getNotifyCustomerAfterMinutes',
        'percent_discount_amount' => 'getPercentDiscountAmount',
        'lump_discount_amount' => 'getLumpDiscountAmount'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['voucher_valid_period_days'] = isset($data['voucher_valid_period_days']) ? $data['voucher_valid_period_days'] : null;
        $this->container['include_delivery_fee'] = isset($data['include_delivery_fee']) ? $data['include_delivery_fee'] : null;
        $this->container['notify_customer_after_minutes'] = isset($data['notify_customer_after_minutes']) ? $data['notify_customer_after_minutes'] : null;
        $this->container['percent_discount_amount'] = isset($data['percent_discount_amount']) ? $data['percent_discount_amount'] : null;
        $this->container['lump_discount_amount'] = isset($data['lump_discount_amount']) ? $data['lump_discount_amount'] : null;
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
     * Gets from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime $from Date and time of campaign beginning
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets voucher_valid_period_days
     *
     * @return int
     */
    public function getVoucherValidPeriodDays()
    {
        return $this->container['voucher_valid_period_days'];
    }

    /**
     * Sets voucher_valid_period_days
     *
     * @param int $voucher_valid_period_days Number of days for which the voucher will be valid.
     *
     * @return $this
     */
    public function setVoucherValidPeriodDays($voucher_valid_period_days)
    {
        $this->container['voucher_valid_period_days'] = $voucher_valid_period_days;

        return $this;
    }

    /**
     * Gets include_delivery_fee
     *
     * @return bool
     */
    public function getIncludeDeliveryFee()
    {
        return $this->container['include_delivery_fee'];
    }

    /**
     * Sets include_delivery_fee
     *
     * @param bool $include_delivery_fee Discount will include delivery fee
     *
     * @return $this
     */
    public function setIncludeDeliveryFee($include_delivery_fee)
    {
        $this->container['include_delivery_fee'] = $include_delivery_fee;

        return $this;
    }

    /**
     * Gets notify_customer_after_minutes
     *
     * @return int
     */
    public function getNotifyCustomerAfterMinutes()
    {
        return $this->container['notify_customer_after_minutes'];
    }

    /**
     * Sets notify_customer_after_minutes
     *
     * @param int $notify_customer_after_minutes Time in minutes, after which customer will receive retention voucher if he/she does not order
     *
     * @return $this
     */
    public function setNotifyCustomerAfterMinutes($notify_customer_after_minutes)
    {
        $this->container['notify_customer_after_minutes'] = $notify_customer_after_minutes;

        return $this;
    }

    /**
     * Gets percent_discount_amount
     *
     * @return int
     */
    public function getPercentDiscountAmount()
    {
        return $this->container['percent_discount_amount'];
    }

    /**
     * Sets percent_discount_amount
     *
     * @param int $percent_discount_amount Discount amount in percents
     *
     * @return $this
     */
    public function setPercentDiscountAmount($percent_discount_amount)
    {
        $this->container['percent_discount_amount'] = $percent_discount_amount;

        return $this;
    }

    /**
     * Gets lump_discount_amount
     *
     * @return int
     */
    public function getLumpDiscountAmount()
    {
        return $this->container['lump_discount_amount'];
    }

    /**
     * Sets lump_discount_amount
     *
     * @param int $lump_discount_amount Discount amount in sum of money
     *
     * @return $this
     */
    public function setLumpDiscountAmount($lump_discount_amount)
    {
        $this->container['lump_discount_amount'] = $lump_discount_amount;

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



<?php
/**
 * RetentionCampaignBase
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
 * RetentionCampaignBase Class Doc Comment
 *
 * @category Class
 * @description Retention campaign base
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetentionCampaignBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetentionCampaignBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notify_customer_after_minutes' => 'int',
        'percent_discount_amount' => 'int',
        'lump_discount_amount' => 'double',
        'voucher_valid_period_days' => 'int',
        'include_delivery_fee' => 'bool',
        'auto_apply_resulting_vouchers' => 'bool',
        'include_existing_orders' => 'bool',
        'is_enabled' => 'bool',
        'store_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notify_customer_after_minutes' => 'int32',
        'percent_discount_amount' => 'int32',
        'lump_discount_amount' => 'double',
        'voucher_valid_period_days' => 'int32',
        'include_delivery_fee' => null,
        'auto_apply_resulting_vouchers' => null,
        'include_existing_orders' => null,
        'is_enabled' => null,
        'store_ids' => 'int32'
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
        'notify_customer_after_minutes' => 'NotifyCustomerAfterMinutes',
        'percent_discount_amount' => 'PercentDiscountAmount',
        'lump_discount_amount' => 'LumpDiscountAmount',
        'voucher_valid_period_days' => 'VoucherValidPeriodDays',
        'include_delivery_fee' => 'IncludeDeliveryFee',
        'auto_apply_resulting_vouchers' => 'AutoApplyResultingVouchers',
        'include_existing_orders' => 'IncludeExistingOrders',
        'is_enabled' => 'IsEnabled',
        'store_ids' => 'StoreIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notify_customer_after_minutes' => 'setNotifyCustomerAfterMinutes',
        'percent_discount_amount' => 'setPercentDiscountAmount',
        'lump_discount_amount' => 'setLumpDiscountAmount',
        'voucher_valid_period_days' => 'setVoucherValidPeriodDays',
        'include_delivery_fee' => 'setIncludeDeliveryFee',
        'auto_apply_resulting_vouchers' => 'setAutoApplyResultingVouchers',
        'include_existing_orders' => 'setIncludeExistingOrders',
        'is_enabled' => 'setIsEnabled',
        'store_ids' => 'setStoreIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notify_customer_after_minutes' => 'getNotifyCustomerAfterMinutes',
        'percent_discount_amount' => 'getPercentDiscountAmount',
        'lump_discount_amount' => 'getLumpDiscountAmount',
        'voucher_valid_period_days' => 'getVoucherValidPeriodDays',
        'include_delivery_fee' => 'getIncludeDeliveryFee',
        'auto_apply_resulting_vouchers' => 'getAutoApplyResultingVouchers',
        'include_existing_orders' => 'getIncludeExistingOrders',
        'is_enabled' => 'getIsEnabled',
        'store_ids' => 'getStoreIds'
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
        $this->container['notify_customer_after_minutes'] = isset($data['notify_customer_after_minutes']) ? $data['notify_customer_after_minutes'] : null;
        $this->container['percent_discount_amount'] = isset($data['percent_discount_amount']) ? $data['percent_discount_amount'] : null;
        $this->container['lump_discount_amount'] = isset($data['lump_discount_amount']) ? $data['lump_discount_amount'] : null;
        $this->container['voucher_valid_period_days'] = isset($data['voucher_valid_period_days']) ? $data['voucher_valid_period_days'] : null;
        $this->container['include_delivery_fee'] = isset($data['include_delivery_fee']) ? $data['include_delivery_fee'] : null;
        $this->container['auto_apply_resulting_vouchers'] = isset($data['auto_apply_resulting_vouchers']) ? $data['auto_apply_resulting_vouchers'] : null;
        $this->container['include_existing_orders'] = isset($data['include_existing_orders']) ? $data['include_existing_orders'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['store_ids'] = isset($data['store_ids']) ? $data['store_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['notify_customer_after_minutes']) && ($this->container['notify_customer_after_minutes'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'notify_customer_after_minutes', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['notify_customer_after_minutes']) && ($this->container['notify_customer_after_minutes'] < 1440)) {
            $invalidProperties[] = "invalid value for 'notify_customer_after_minutes', must be bigger than or equal to 1440.";
        }

        if (!is_null($this->container['percent_discount_amount']) && ($this->container['percent_discount_amount'] > 100)) {
            $invalidProperties[] = "invalid value for 'percent_discount_amount', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['percent_discount_amount']) && ($this->container['percent_discount_amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'percent_discount_amount', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['lump_discount_amount']) && ($this->container['lump_discount_amount'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'lump_discount_amount', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['lump_discount_amount']) && ($this->container['lump_discount_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'lump_discount_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['voucher_valid_period_days']) && ($this->container['voucher_valid_period_days'] > 300)) {
            $invalidProperties[] = "invalid value for 'voucher_valid_period_days', must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['voucher_valid_period_days']) && ($this->container['voucher_valid_period_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'voucher_valid_period_days', must be bigger than or equal to 1.";
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

        if (!is_null($notify_customer_after_minutes) && ($notify_customer_after_minutes > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $notify_customer_after_minutes when calling RetentionCampaignBase., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($notify_customer_after_minutes) && ($notify_customer_after_minutes < 1440)) {
            throw new \InvalidArgumentException('invalid value for $notify_customer_after_minutes when calling RetentionCampaignBase., must be bigger than or equal to 1440.');
        }

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

        if (!is_null($percent_discount_amount) && ($percent_discount_amount > 100)) {
            throw new \InvalidArgumentException('invalid value for $percent_discount_amount when calling RetentionCampaignBase., must be smaller than or equal to 100.');
        }
        if (!is_null($percent_discount_amount) && ($percent_discount_amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $percent_discount_amount when calling RetentionCampaignBase., must be bigger than or equal to 1.');
        }

        $this->container['percent_discount_amount'] = $percent_discount_amount;

        return $this;
    }

    /**
     * Gets lump_discount_amount
     *
     * @return double
     */
    public function getLumpDiscountAmount()
    {
        return $this->container['lump_discount_amount'];
    }

    /**
     * Sets lump_discount_amount
     *
     * @param double $lump_discount_amount Discount amount in sum of money
     *
     * @return $this
     */
    public function setLumpDiscountAmount($lump_discount_amount)
    {

        if (!is_null($lump_discount_amount) && ($lump_discount_amount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $lump_discount_amount when calling RetentionCampaignBase., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($lump_discount_amount) && ($lump_discount_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $lump_discount_amount when calling RetentionCampaignBase., must be bigger than or equal to 0.');
        }

        $this->container['lump_discount_amount'] = $lump_discount_amount;

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

        if (!is_null($voucher_valid_period_days) && ($voucher_valid_period_days > 300)) {
            throw new \InvalidArgumentException('invalid value for $voucher_valid_period_days when calling RetentionCampaignBase., must be smaller than or equal to 300.');
        }
        if (!is_null($voucher_valid_period_days) && ($voucher_valid_period_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $voucher_valid_period_days when calling RetentionCampaignBase., must be bigger than or equal to 1.');
        }

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
     * Gets auto_apply_resulting_vouchers
     *
     * @return bool
     */
    public function getAutoApplyResultingVouchers()
    {
        return $this->container['auto_apply_resulting_vouchers'];
    }

    /**
     * Sets auto_apply_resulting_vouchers
     *
     * @param bool $auto_apply_resulting_vouchers Automatically apply resulting vouchers
     *
     * @return $this
     */
    public function setAutoApplyResultingVouchers($auto_apply_resulting_vouchers)
    {
        $this->container['auto_apply_resulting_vouchers'] = $auto_apply_resulting_vouchers;

        return $this;
    }

    /**
     * Gets include_existing_orders
     *
     * @return bool
     */
    public function getIncludeExistingOrders()
    {
        return $this->container['include_existing_orders'];
    }

    /**
     * Sets include_existing_orders
     *
     * @param bool $include_existing_orders Campaign will apply to existing orders
     *
     * @return $this
     */
    public function setIncludeExistingOrders($include_existing_orders)
    {
        $this->container['include_existing_orders'] = $include_existing_orders;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Is campaign enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets store_ids
     *
     * @return int[]
     */
    public function getStoreIds()
    {
        return $this->container['store_ids'];
    }

    /**
     * Sets store_ids
     *
     * @param int[] $store_ids Ids of stores this campaign applies to
     *
     * @return $this
     */
    public function setStoreIds($store_ids)
    {
        $this->container['store_ids'] = $store_ids;

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



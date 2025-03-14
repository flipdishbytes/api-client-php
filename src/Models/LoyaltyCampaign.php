<?php
/**
 * LoyaltyCampaign
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
 * LoyaltyCampaign Class Doc Comment
 *
 * @category Class
 * @description Loyalty campaign
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoyaltyCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoyaltyCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaign_id' => 'int',
        'statistics' => '\Flipdish\\Client\Models\CampaignStatistics',
        'stores' => '\Flipdish\\Client\Models\StoreCampaignStartTime[]',
        'public_id' => 'string',
        'orders_before_receiving_voucher' => 'int',
        'percent_discount_amount' => 'int',
        'max_discount' => 'double',
        'rounding_strategy' => 'int',
        'should_include_orders_with_loyalty_voucher' => 'bool',
        'voucher_valid_period_days' => 'int',
        'include_delivery_fee' => 'bool',
        'auto_apply_resulting_vouchers' => 'bool',
        'include_existing_orders' => 'bool',
        'is_enabled' => 'bool',
        'store_ids' => 'int[]',
        'app_id' => 'string',
        'force_discount' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaign_id' => 'int32',
        'statistics' => null,
        'stores' => null,
        'public_id' => 'uuid',
        'orders_before_receiving_voucher' => 'int32',
        'percent_discount_amount' => 'int32',
        'max_discount' => 'double',
        'rounding_strategy' => 'int32',
        'should_include_orders_with_loyalty_voucher' => null,
        'voucher_valid_period_days' => 'int32',
        'include_delivery_fee' => null,
        'auto_apply_resulting_vouchers' => null,
        'include_existing_orders' => null,
        'is_enabled' => null,
        'store_ids' => 'int32',
        'app_id' => null,
        'force_discount' => null
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
        'campaign_id' => 'CampaignId',
        'statistics' => 'Statistics',
        'stores' => 'Stores',
        'public_id' => 'PublicId',
        'orders_before_receiving_voucher' => 'OrdersBeforeReceivingVoucher',
        'percent_discount_amount' => 'PercentDiscountAmount',
        'max_discount' => 'MaxDiscount',
        'rounding_strategy' => 'RoundingStrategy',
        'should_include_orders_with_loyalty_voucher' => 'ShouldIncludeOrdersWithLoyaltyVoucher',
        'voucher_valid_period_days' => 'VoucherValidPeriodDays',
        'include_delivery_fee' => 'IncludeDeliveryFee',
        'auto_apply_resulting_vouchers' => 'AutoApplyResultingVouchers',
        'include_existing_orders' => 'IncludeExistingOrders',
        'is_enabled' => 'IsEnabled',
        'store_ids' => 'StoreIds',
        'app_id' => 'AppId',
        'force_discount' => 'ForceDiscount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_id' => 'setCampaignId',
        'statistics' => 'setStatistics',
        'stores' => 'setStores',
        'public_id' => 'setPublicId',
        'orders_before_receiving_voucher' => 'setOrdersBeforeReceivingVoucher',
        'percent_discount_amount' => 'setPercentDiscountAmount',
        'max_discount' => 'setMaxDiscount',
        'rounding_strategy' => 'setRoundingStrategy',
        'should_include_orders_with_loyalty_voucher' => 'setShouldIncludeOrdersWithLoyaltyVoucher',
        'voucher_valid_period_days' => 'setVoucherValidPeriodDays',
        'include_delivery_fee' => 'setIncludeDeliveryFee',
        'auto_apply_resulting_vouchers' => 'setAutoApplyResultingVouchers',
        'include_existing_orders' => 'setIncludeExistingOrders',
        'is_enabled' => 'setIsEnabled',
        'store_ids' => 'setStoreIds',
        'app_id' => 'setAppId',
        'force_discount' => 'setForceDiscount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_id' => 'getCampaignId',
        'statistics' => 'getStatistics',
        'stores' => 'getStores',
        'public_id' => 'getPublicId',
        'orders_before_receiving_voucher' => 'getOrdersBeforeReceivingVoucher',
        'percent_discount_amount' => 'getPercentDiscountAmount',
        'max_discount' => 'getMaxDiscount',
        'rounding_strategy' => 'getRoundingStrategy',
        'should_include_orders_with_loyalty_voucher' => 'getShouldIncludeOrdersWithLoyaltyVoucher',
        'voucher_valid_period_days' => 'getVoucherValidPeriodDays',
        'include_delivery_fee' => 'getIncludeDeliveryFee',
        'auto_apply_resulting_vouchers' => 'getAutoApplyResultingVouchers',
        'include_existing_orders' => 'getIncludeExistingOrders',
        'is_enabled' => 'getIsEnabled',
        'store_ids' => 'getStoreIds',
        'app_id' => 'getAppId',
        'force_discount' => 'getForceDiscount'
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
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['stores'] = isset($data['stores']) ? $data['stores'] : null;
        $this->container['public_id'] = isset($data['public_id']) ? $data['public_id'] : null;
        $this->container['orders_before_receiving_voucher'] = isset($data['orders_before_receiving_voucher']) ? $data['orders_before_receiving_voucher'] : null;
        $this->container['percent_discount_amount'] = isset($data['percent_discount_amount']) ? $data['percent_discount_amount'] : null;
        $this->container['max_discount'] = isset($data['max_discount']) ? $data['max_discount'] : null;
        $this->container['rounding_strategy'] = isset($data['rounding_strategy']) ? $data['rounding_strategy'] : null;
        $this->container['should_include_orders_with_loyalty_voucher'] = isset($data['should_include_orders_with_loyalty_voucher']) ? $data['should_include_orders_with_loyalty_voucher'] : null;
        $this->container['voucher_valid_period_days'] = isset($data['voucher_valid_period_days']) ? $data['voucher_valid_period_days'] : null;
        $this->container['include_delivery_fee'] = isset($data['include_delivery_fee']) ? $data['include_delivery_fee'] : null;
        $this->container['auto_apply_resulting_vouchers'] = isset($data['auto_apply_resulting_vouchers']) ? $data['auto_apply_resulting_vouchers'] : null;
        $this->container['include_existing_orders'] = isset($data['include_existing_orders']) ? $data['include_existing_orders'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['store_ids'] = isset($data['store_ids']) ? $data['store_ids'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['force_discount'] = isset($data['force_discount']) ? $data['force_discount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['percent_discount_amount']) && ($this->container['percent_discount_amount'] > 100)) {
            $invalidProperties[] = "invalid value for 'percent_discount_amount', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['percent_discount_amount']) && ($this->container['percent_discount_amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'percent_discount_amount', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_discount']) && ($this->container['max_discount'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_discount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['rounding_strategy']) && ($this->container['rounding_strategy'] > 2)) {
            $invalidProperties[] = "invalid value for 'rounding_strategy', must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['rounding_strategy']) && ($this->container['rounding_strategy'] < 0)) {
            $invalidProperties[] = "invalid value for 'rounding_strategy', must be bigger than or equal to 0.";
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
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id Id of campaign
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \Flipdish\\Client\Models\CampaignStatistics
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \Flipdish\\Client\Models\CampaignStatistics $statistics Statistics of campaign
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets stores
     *
     * @return \Flipdish\\Client\Models\StoreCampaignStartTime[]
     */
    public function getStores()
    {
        return $this->container['stores'];
    }

    /**
     * Sets stores
     *
     * @param \Flipdish\\Client\Models\StoreCampaignStartTime[] $stores Stores this campaign applies to with campaign start time in Utc
     *
     * @return $this
     */
    public function setStores($stores)
    {
        $this->container['stores'] = $stores;

        return $this;
    }

    /**
     * Gets public_id
     *
     * @return string
     */
    public function getPublicId()
    {
        return $this->container['public_id'];
    }

    /**
     * Sets public_id
     *
     * @param string $public_id Permanent reference to the item.
     *
     * @return $this
     */
    public function setPublicId($public_id)
    {
        $this->container['public_id'] = $public_id;

        return $this;
    }

    /**
     * Gets orders_before_receiving_voucher
     *
     * @return int
     */
    public function getOrdersBeforeReceivingVoucher()
    {
        return $this->container['orders_before_receiving_voucher'];
    }

    /**
     * Sets orders_before_receiving_voucher
     *
     * @param int $orders_before_receiving_voucher Number of orders customer needs to make, before receiving voucher
     *
     * @return $this
     */
    public function setOrdersBeforeReceivingVoucher($orders_before_receiving_voucher)
    {
        $this->container['orders_before_receiving_voucher'] = $orders_before_receiving_voucher;

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
            throw new \InvalidArgumentException('invalid value for $percent_discount_amount when calling LoyaltyCampaign., must be smaller than or equal to 100.');
        }
        if (!is_null($percent_discount_amount) && ($percent_discount_amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $percent_discount_amount when calling LoyaltyCampaign., must be bigger than or equal to 1.');
        }

        $this->container['percent_discount_amount'] = $percent_discount_amount;

        return $this;
    }

    /**
     * Gets max_discount
     *
     * @return double
     */
    public function getMaxDiscount()
    {
        return $this->container['max_discount'];
    }

    /**
     * Sets max_discount
     *
     * @param double $max_discount Maximum discount for percentage discounts
     *
     * @return $this
     */
    public function setMaxDiscount($max_discount)
    {

        if (!is_null($max_discount) && ($max_discount < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_discount when calling LoyaltyCampaign., must be bigger than or equal to 0.');
        }

        $this->container['max_discount'] = $max_discount;

        return $this;
    }

    /**
     * Gets rounding_strategy
     *
     * @return int
     */
    public function getRoundingStrategy()
    {
        return $this->container['rounding_strategy'];
    }

    /**
     * Sets rounding_strategy
     *
     * @param int $rounding_strategy Controls how the loyalty voucher's amount is rounded
     *
     * @return $this
     */
    public function setRoundingStrategy($rounding_strategy)
    {

        if (!is_null($rounding_strategy) && ($rounding_strategy > 2)) {
            throw new \InvalidArgumentException('invalid value for $rounding_strategy when calling LoyaltyCampaign., must be smaller than or equal to 2.');
        }
        if (!is_null($rounding_strategy) && ($rounding_strategy < 0)) {
            throw new \InvalidArgumentException('invalid value for $rounding_strategy when calling LoyaltyCampaign., must be bigger than or equal to 0.');
        }

        $this->container['rounding_strategy'] = $rounding_strategy;

        return $this;
    }

    /**
     * Gets should_include_orders_with_loyalty_voucher
     *
     * @return bool
     */
    public function getShouldIncludeOrdersWithLoyaltyVoucher()
    {
        return $this->container['should_include_orders_with_loyalty_voucher'];
    }

    /**
     * Sets should_include_orders_with_loyalty_voucher
     *
     * @param bool $should_include_orders_with_loyalty_voucher Controls whether we should include orders with loyalty vouchers in the campaign calculation
     *
     * @return $this
     */
    public function setShouldIncludeOrdersWithLoyaltyVoucher($should_include_orders_with_loyalty_voucher)
    {
        $this->container['should_include_orders_with_loyalty_voucher'] = $should_include_orders_with_loyalty_voucher;

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
            throw new \InvalidArgumentException('invalid value for $voucher_valid_period_days when calling LoyaltyCampaign., must be smaller than or equal to 300.');
        }
        if (!is_null($voucher_valid_period_days) && ($voucher_valid_period_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $voucher_valid_period_days when calling LoyaltyCampaign., must be bigger than or equal to 1.');
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
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id The app that this campaign belongs to.
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets force_discount
     *
     * @return bool
     */
    public function getForceDiscount()
    {
        return $this->container['force_discount'];
    }

    /**
     * Sets force_discount
     *
     * @param bool $force_discount Controls whether the voucher generated from this campaign will override discount exclusions
     *
     * @return $this
     */
    public function setForceDiscount($force_discount)
    {
        $this->container['force_discount'] = $force_discount;

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



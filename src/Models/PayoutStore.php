<?php
/**
 * PayoutStore
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
 * PayoutStore Class Doc Comment
 *
 * @category Class
 * @description Payout details for a single store
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutStore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutStore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'store_id' => 'int',
        'store_name' => 'string',
        'amount' => 'double',
        'online_revenue' => '\Flipdish\\Client\Models\RevenueDetail',
        'revenue' => '\Flipdish\\Client\Models\RevenueDetail',
        'revenue_adjustments' => '\Flipdish\\Client\Models\RevenueAdjustmentsDetails',
        'flipdish_fees' => '\Flipdish\\Client\Models\FlipdishFeesDetails',
        'chargebacks' => '\Flipdish\\Client\Models\ChargebackDetails',
        'other_charges' => '\Flipdish\\Client\Models\OtherChargesDetails',
        'balance' => '\Flipdish\\Client\Models\BalanceDetails',
        'pos_revenue' => '\Flipdish\\Client\Models\PosRevenueDetails',
        'third_party_fees' => '\Flipdish\\Client\Models\ThirdPartyFeesDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'store_id' => 'int32',
        'store_name' => null,
        'amount' => 'double',
        'online_revenue' => null,
        'revenue' => null,
        'revenue_adjustments' => null,
        'flipdish_fees' => null,
        'chargebacks' => null,
        'other_charges' => null,
        'balance' => null,
        'pos_revenue' => null,
        'third_party_fees' => null
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
        'store_name' => 'StoreName',
        'amount' => 'Amount',
        'online_revenue' => 'OnlineRevenue',
        'revenue' => 'Revenue',
        'revenue_adjustments' => 'RevenueAdjustments',
        'flipdish_fees' => 'FlipdishFees',
        'chargebacks' => 'Chargebacks',
        'other_charges' => 'OtherCharges',
        'balance' => 'Balance',
        'pos_revenue' => 'PosRevenue',
        'third_party_fees' => 'ThirdPartyFees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_id' => 'setStoreId',
        'store_name' => 'setStoreName',
        'amount' => 'setAmount',
        'online_revenue' => 'setOnlineRevenue',
        'revenue' => 'setRevenue',
        'revenue_adjustments' => 'setRevenueAdjustments',
        'flipdish_fees' => 'setFlipdishFees',
        'chargebacks' => 'setChargebacks',
        'other_charges' => 'setOtherCharges',
        'balance' => 'setBalance',
        'pos_revenue' => 'setPosRevenue',
        'third_party_fees' => 'setThirdPartyFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_id' => 'getStoreId',
        'store_name' => 'getStoreName',
        'amount' => 'getAmount',
        'online_revenue' => 'getOnlineRevenue',
        'revenue' => 'getRevenue',
        'revenue_adjustments' => 'getRevenueAdjustments',
        'flipdish_fees' => 'getFlipdishFees',
        'chargebacks' => 'getChargebacks',
        'other_charges' => 'getOtherCharges',
        'balance' => 'getBalance',
        'pos_revenue' => 'getPosRevenue',
        'third_party_fees' => 'getThirdPartyFees'
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
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['online_revenue'] = isset($data['online_revenue']) ? $data['online_revenue'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['revenue_adjustments'] = isset($data['revenue_adjustments']) ? $data['revenue_adjustments'] : null;
        $this->container['flipdish_fees'] = isset($data['flipdish_fees']) ? $data['flipdish_fees'] : null;
        $this->container['chargebacks'] = isset($data['chargebacks']) ? $data['chargebacks'] : null;
        $this->container['other_charges'] = isset($data['other_charges']) ? $data['other_charges'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['pos_revenue'] = isset($data['pos_revenue']) ? $data['pos_revenue'] : null;
        $this->container['third_party_fees'] = isset($data['third_party_fees']) ? $data['third_party_fees'] : null;
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
     * @param int $store_id The id of the Store.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

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
     * @param string $store_name Name of the store
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
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
     * @param double $amount Amount of the payout for this Store
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets online_revenue
     *
     * @return \Flipdish\\Client\Models\RevenueDetail
     */
    public function getOnlineRevenue()
    {
        return $this->container['online_revenue'];
    }

    /**
     * Sets online_revenue
     *
     * @param \Flipdish\\Client\Models\RevenueDetail $online_revenue Revenue details (DEPRECATED: Use Revenue)
     *
     * @return $this
     */
    public function setOnlineRevenue($online_revenue)
    {
        $this->container['online_revenue'] = $online_revenue;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return \Flipdish\\Client\Models\RevenueDetail
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param \Flipdish\\Client\Models\RevenueDetail $revenue Revenue details
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets revenue_adjustments
     *
     * @return \Flipdish\\Client\Models\RevenueAdjustmentsDetails
     */
    public function getRevenueAdjustments()
    {
        return $this->container['revenue_adjustments'];
    }

    /**
     * Sets revenue_adjustments
     *
     * @param \Flipdish\\Client\Models\RevenueAdjustmentsDetails $revenue_adjustments Revenue Adjustments breakdown
     *
     * @return $this
     */
    public function setRevenueAdjustments($revenue_adjustments)
    {
        $this->container['revenue_adjustments'] = $revenue_adjustments;

        return $this;
    }

    /**
     * Gets flipdish_fees
     *
     * @return \Flipdish\\Client\Models\FlipdishFeesDetails
     */
    public function getFlipdishFees()
    {
        return $this->container['flipdish_fees'];
    }

    /**
     * Sets flipdish_fees
     *
     * @param \Flipdish\\Client\Models\FlipdishFeesDetails $flipdish_fees Fees breakdown
     *
     * @return $this
     */
    public function setFlipdishFees($flipdish_fees)
    {
        $this->container['flipdish_fees'] = $flipdish_fees;

        return $this;
    }

    /**
     * Gets chargebacks
     *
     * @return \Flipdish\\Client\Models\ChargebackDetails
     */
    public function getChargebacks()
    {
        return $this->container['chargebacks'];
    }

    /**
     * Sets chargebacks
     *
     * @param \Flipdish\\Client\Models\ChargebackDetails $chargebacks Chargebacks breakdown
     *
     * @return $this
     */
    public function setChargebacks($chargebacks)
    {
        $this->container['chargebacks'] = $chargebacks;

        return $this;
    }

    /**
     * Gets other_charges
     *
     * @return \Flipdish\\Client\Models\OtherChargesDetails
     */
    public function getOtherCharges()
    {
        return $this->container['other_charges'];
    }

    /**
     * Sets other_charges
     *
     * @param \Flipdish\\Client\Models\OtherChargesDetails $other_charges Breakdown of other charges
     *
     * @return $this
     */
    public function setOtherCharges($other_charges)
    {
        $this->container['other_charges'] = $other_charges;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \Flipdish\\Client\Models\BalanceDetails
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \Flipdish\\Client\Models\BalanceDetails $balance Period opening and closing balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets pos_revenue
     *
     * @return \Flipdish\\Client\Models\PosRevenueDetails
     */
    public function getPosRevenue()
    {
        return $this->container['pos_revenue'];
    }

    /**
     * Sets pos_revenue
     *
     * @param \Flipdish\\Client\Models\PosRevenueDetails $pos_revenue Breakdown of POS charges
     *
     * @return $this
     */
    public function setPosRevenue($pos_revenue)
    {
        $this->container['pos_revenue'] = $pos_revenue;

        return $this;
    }

    /**
     * Gets third_party_fees
     *
     * @return \Flipdish\\Client\Models\ThirdPartyFeesDetails
     */
    public function getThirdPartyFees()
    {
        return $this->container['third_party_fees'];
    }

    /**
     * Sets third_party_fees
     *
     * @param \Flipdish\\Client\Models\ThirdPartyFeesDetails $third_party_fees Third party integration fees
     *
     * @return $this
     */
    public function setThirdPartyFees($third_party_fees)
    {
        $this->container['third_party_fees'] = $third_party_fees;

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



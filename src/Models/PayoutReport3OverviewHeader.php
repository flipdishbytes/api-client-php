<?php
/**
 * PayoutReport3OverviewHeader
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
 * PayoutReport3OverviewHeader Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutReport3OverviewHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutReport3OverviewHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payout_id' => 'int',
        'bank_account_id' => 'int',
        'account_name' => 'string',
        'payout_status' => 'string',
        'created_date' => '\DateTime',
        'period_start_time' => '\DateTime',
        'period_end_time' => '\DateTime',
        'destination_bank' => 'string',
        'destination_account' => 'string',
        'amount' => 'double',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payout_id' => 'int32',
        'bank_account_id' => 'int32',
        'account_name' => null,
        'payout_status' => null,
        'created_date' => 'date-time',
        'period_start_time' => 'date-time',
        'period_end_time' => 'date-time',
        'destination_bank' => null,
        'destination_account' => null,
        'amount' => 'double',
        'currency' => null
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
        'payout_id' => 'PayoutId',
        'bank_account_id' => 'BankAccountId',
        'account_name' => 'AccountName',
        'payout_status' => 'PayoutStatus',
        'created_date' => 'CreatedDate',
        'period_start_time' => 'PeriodStartTime',
        'period_end_time' => 'PeriodEndTime',
        'destination_bank' => 'DestinationBank',
        'destination_account' => 'DestinationAccount',
        'amount' => 'Amount',
        'currency' => 'Currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payout_id' => 'setPayoutId',
        'bank_account_id' => 'setBankAccountId',
        'account_name' => 'setAccountName',
        'payout_status' => 'setPayoutStatus',
        'created_date' => 'setCreatedDate',
        'period_start_time' => 'setPeriodStartTime',
        'period_end_time' => 'setPeriodEndTime',
        'destination_bank' => 'setDestinationBank',
        'destination_account' => 'setDestinationAccount',
        'amount' => 'setAmount',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payout_id' => 'getPayoutId',
        'bank_account_id' => 'getBankAccountId',
        'account_name' => 'getAccountName',
        'payout_status' => 'getPayoutStatus',
        'created_date' => 'getCreatedDate',
        'period_start_time' => 'getPeriodStartTime',
        'period_end_time' => 'getPeriodEndTime',
        'destination_bank' => 'getDestinationBank',
        'destination_account' => 'getDestinationAccount',
        'amount' => 'getAmount',
        'currency' => 'getCurrency'
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
        $this->container['payout_id'] = isset($data['payout_id']) ? $data['payout_id'] : null;
        $this->container['bank_account_id'] = isset($data['bank_account_id']) ? $data['bank_account_id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['payout_status'] = isset($data['payout_status']) ? $data['payout_status'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['period_start_time'] = isset($data['period_start_time']) ? $data['period_start_time'] : null;
        $this->container['period_end_time'] = isset($data['period_end_time']) ? $data['period_end_time'] : null;
        $this->container['destination_bank'] = isset($data['destination_bank']) ? $data['destination_bank'] : null;
        $this->container['destination_account'] = isset($data['destination_account']) ? $data['destination_account'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
     * Gets payout_id
     *
     * @return int
     */
    public function getPayoutId()
    {
        return $this->container['payout_id'];
    }

    /**
     * Sets payout_id
     *
     * @param int $payout_id payout_id
     *
     * @return $this
     */
    public function setPayoutId($payout_id)
    {
        $this->container['payout_id'] = $payout_id;

        return $this;
    }

    /**
     * Gets bank_account_id
     *
     * @return int
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param int $bank_account_id bank_account_id
     *
     * @return $this
     */
    public function setBankAccountId($bank_account_id)
    {
        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets payout_status
     *
     * @return string
     */
    public function getPayoutStatus()
    {
        return $this->container['payout_status'];
    }

    /**
     * Sets payout_status
     *
     * @param string $payout_status payout_status
     *
     * @return $this
     */
    public function setPayoutStatus($payout_status)
    {
        $this->container['payout_status'] = $payout_status;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets period_start_time
     *
     * @return \DateTime
     */
    public function getPeriodStartTime()
    {
        return $this->container['period_start_time'];
    }

    /**
     * Sets period_start_time
     *
     * @param \DateTime $period_start_time period_start_time
     *
     * @return $this
     */
    public function setPeriodStartTime($period_start_time)
    {
        $this->container['period_start_time'] = $period_start_time;

        return $this;
    }

    /**
     * Gets period_end_time
     *
     * @return \DateTime
     */
    public function getPeriodEndTime()
    {
        return $this->container['period_end_time'];
    }

    /**
     * Sets period_end_time
     *
     * @param \DateTime $period_end_time period_end_time
     *
     * @return $this
     */
    public function setPeriodEndTime($period_end_time)
    {
        $this->container['period_end_time'] = $period_end_time;

        return $this;
    }

    /**
     * Gets destination_bank
     *
     * @return string
     */
    public function getDestinationBank()
    {
        return $this->container['destination_bank'];
    }

    /**
     * Sets destination_bank
     *
     * @param string $destination_bank destination_bank
     *
     * @return $this
     */
    public function setDestinationBank($destination_bank)
    {
        $this->container['destination_bank'] = $destination_bank;

        return $this;
    }

    /**
     * Gets destination_account
     *
     * @return string
     */
    public function getDestinationAccount()
    {
        return $this->container['destination_account'];
    }

    /**
     * Sets destination_account
     *
     * @param string $destination_account destination_account
     *
     * @return $this
     */
    public function setDestinationAccount($destination_account)
    {
        $this->container['destination_account'] = $destination_account;

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
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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



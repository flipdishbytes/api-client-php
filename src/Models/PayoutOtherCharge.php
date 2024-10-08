<?php
/**
 * PayoutOtherCharge
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
 * PayoutOtherCharge Class Doc Comment
 *
 * @category Class
 * @description Holds the information for a charge related to a payout
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutOtherCharge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutOtherCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_id' => 'int',
        'amount' => 'double',
        'currency' => 'string',
        'payout_id' => 'int',
        'charge_date' => '\DateTime',
        'charge_type' => 'string',
        'charge_description' => 'string',
        'store_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_id' => 'int32',
        'amount' => 'double',
        'currency' => null,
        'payout_id' => 'int32',
        'charge_date' => 'date-time',
        'charge_type' => null,
        'charge_description' => null,
        'store_id' => 'int32'
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
        'charge_id' => 'ChargeId',
        'amount' => 'Amount',
        'currency' => 'Currency',
        'payout_id' => 'PayoutId',
        'charge_date' => 'ChargeDate',
        'charge_type' => 'ChargeType',
        'charge_description' => 'ChargeDescription',
        'store_id' => 'StoreId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_id' => 'setChargeId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'payout_id' => 'setPayoutId',
        'charge_date' => 'setChargeDate',
        'charge_type' => 'setChargeType',
        'charge_description' => 'setChargeDescription',
        'store_id' => 'setStoreId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_id' => 'getChargeId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'payout_id' => 'getPayoutId',
        'charge_date' => 'getChargeDate',
        'charge_type' => 'getChargeType',
        'charge_description' => 'getChargeDescription',
        'store_id' => 'getStoreId'
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

    const CURRENCY_EUR = 'EUR';
    const CURRENCY_USD = 'USD';
    const CURRENCY_GBP = 'GBP';
    const CURRENCY_CAD = 'CAD';
    const CURRENCY_AUD = 'AUD';
    const CURRENCY_DJF = 'DJF';
    const CURRENCY_ZAR = 'ZAR';
    const CURRENCY_ETB = 'ETB';
    const CURRENCY_AED = 'AED';
    const CURRENCY_BHD = 'BHD';
    const CURRENCY_DZD = 'DZD';
    const CURRENCY_EGP = 'EGP';
    const CURRENCY_IQD = 'IQD';
    const CURRENCY_JOD = 'JOD';
    const CURRENCY_KWD = 'KWD';
    const CURRENCY_LBP = 'LBP';
    const CURRENCY_LYD = 'LYD';
    const CURRENCY_MAD = 'MAD';
    const CURRENCY_OMR = 'OMR';
    const CURRENCY_QAR = 'QAR';
    const CURRENCY_SAR = 'SAR';
    const CURRENCY_SYP = 'SYP';
    const CURRENCY_TND = 'TND';
    const CURRENCY_YER = 'YER';
    const CURRENCY_CLP = 'CLP';
    const CURRENCY_INR = 'INR';
    const CURRENCY_AZN = 'AZN';
    const CURRENCY_RUB = 'RUB';
    const CURRENCY_BYN = 'BYN';
    const CURRENCY_BGN = 'BGN';
    const CURRENCY_NGN = 'NGN';
    const CURRENCY_BDT = 'BDT';
    const CURRENCY_CNY = 'CNY';
    const CURRENCY_BAM = 'BAM';
    const CURRENCY_CZK = 'CZK';
    const CURRENCY_DKK = 'DKK';
    const CURRENCY_CHF = 'CHF';
    const CURRENCY_MVR = 'MVR';
    const CURRENCY_BTN = 'BTN';
    const CURRENCY_XCD = 'XCD';
    const CURRENCY_BZD = 'BZD';
    const CURRENCY_HKD = 'HKD';
    const CURRENCY_IDR = 'IDR';
    const CURRENCY_JMD = 'JMD';
    const CURRENCY_MYR = 'MYR';
    const CURRENCY_NZD = 'NZD';
    const CURRENCY_PHP = 'PHP';
    const CURRENCY_SGD = 'SGD';
    const CURRENCY_TTD = 'TTD';
    const CURRENCY_XDR = 'XDR';
    const CURRENCY_ARS = 'ARS';
    const CURRENCY_BOB = 'BOB';
    const CURRENCY_COP = 'COP';
    const CURRENCY_CRC = 'CRC';
    const CURRENCY_CUP = 'CUP';
    const CURRENCY_DOP = 'DOP';
    const CURRENCY_GTQ = 'GTQ';
    const CURRENCY_HNL = 'HNL';
    const CURRENCY_MXN = 'MXN';
    const CURRENCY_NIO = 'NIO';
    const CURRENCY_PAB = 'PAB';
    const CURRENCY_PEN = 'PEN';
    const CURRENCY_PYG = 'PYG';
    const CURRENCY_UYU = 'UYU';
    const CURRENCY_VEF = 'VEF';
    const CURRENCY_IRR = 'IRR';
    const CURRENCY_XOF = 'XOF';
    const CURRENCY_CDF = 'CDF';
    const CURRENCY_XAF = 'XAF';
    const CURRENCY_HTG = 'HTG';
    const CURRENCY_ILS = 'ILS';
    const CURRENCY_HRK = 'HRK';
    const CURRENCY_HUF = 'HUF';
    const CURRENCY_AMD = 'AMD';
    const CURRENCY_ISK = 'ISK';
    const CURRENCY_JPY = 'JPY';
    const CURRENCY_GEL = 'GEL';
    const CURRENCY_KZT = 'KZT';
    const CURRENCY_KHR = 'KHR';
    const CURRENCY_KRW = 'KRW';
    const CURRENCY_KGS = 'KGS';
    const CURRENCY_LAK = 'LAK';
    const CURRENCY_MKD = 'MKD';
    const CURRENCY_MNT = 'MNT';
    const CURRENCY_BND = 'BND';
    const CURRENCY_MMK = 'MMK';
    const CURRENCY_NOK = 'NOK';
    const CURRENCY_NPR = 'NPR';
    const CURRENCY_PKR = 'PKR';
    const CURRENCY_PLN = 'PLN';
    const CURRENCY_AFN = 'AFN';
    const CURRENCY_BRL = 'BRL';
    const CURRENCY_MDL = 'MDL';
    const CURRENCY_RON = 'RON';
    const CURRENCY_RWF = 'RWF';
    const CURRENCY_SEK = 'SEK';
    const CURRENCY_LKR = 'LKR';
    const CURRENCY_SOS = 'SOS';
    const CURRENCY_ALL = 'ALL';
    const CURRENCY_RSD = 'RSD';
    const CURRENCY_KES = 'KES';
    const CURRENCY_TJS = 'TJS';
    const CURRENCY_THB = 'THB';
    const CURRENCY_ERN = 'ERN';
    const CURRENCY_TMT = 'TMT';
    const CURRENCY_BWP = 'BWP';
    const CURRENCY__TRY = 'TRY';
    const CURRENCY_UAH = 'UAH';
    const CURRENCY_UZS = 'UZS';
    const CURRENCY_VND = 'VND';
    const CURRENCY_MOP = 'MOP';
    const CURRENCY_TWD = 'TWD';
    const CURRENCY_BMD = 'BMD';
    const CHARGE_TYPE_OTHER = 'Other';
    const CHARGE_TYPE_FEES = 'Fees';
    const CHARGE_TYPE_CHARGEBACK = 'Chargeback';
    const CHARGE_TYPE_TIP_FAILURE = 'TipFailure';
    const CHARGE_TYPE_EXTERNAL_DISBURSEMENT = 'ExternalDisbursement';
    const CHARGE_TYPE_GOODS = 'Goods';
    const CHARGE_TYPE_RESTAURANT_SALES = 'RestaurantSales';
    const CHARGE_TYPE_TIPS = 'Tips';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_EUR,
            self::CURRENCY_USD,
            self::CURRENCY_GBP,
            self::CURRENCY_CAD,
            self::CURRENCY_AUD,
            self::CURRENCY_DJF,
            self::CURRENCY_ZAR,
            self::CURRENCY_ETB,
            self::CURRENCY_AED,
            self::CURRENCY_BHD,
            self::CURRENCY_DZD,
            self::CURRENCY_EGP,
            self::CURRENCY_IQD,
            self::CURRENCY_JOD,
            self::CURRENCY_KWD,
            self::CURRENCY_LBP,
            self::CURRENCY_LYD,
            self::CURRENCY_MAD,
            self::CURRENCY_OMR,
            self::CURRENCY_QAR,
            self::CURRENCY_SAR,
            self::CURRENCY_SYP,
            self::CURRENCY_TND,
            self::CURRENCY_YER,
            self::CURRENCY_CLP,
            self::CURRENCY_INR,
            self::CURRENCY_AZN,
            self::CURRENCY_RUB,
            self::CURRENCY_BYN,
            self::CURRENCY_BGN,
            self::CURRENCY_NGN,
            self::CURRENCY_BDT,
            self::CURRENCY_CNY,
            self::CURRENCY_BAM,
            self::CURRENCY_CZK,
            self::CURRENCY_DKK,
            self::CURRENCY_CHF,
            self::CURRENCY_MVR,
            self::CURRENCY_BTN,
            self::CURRENCY_XCD,
            self::CURRENCY_BZD,
            self::CURRENCY_HKD,
            self::CURRENCY_IDR,
            self::CURRENCY_JMD,
            self::CURRENCY_MYR,
            self::CURRENCY_NZD,
            self::CURRENCY_PHP,
            self::CURRENCY_SGD,
            self::CURRENCY_TTD,
            self::CURRENCY_XDR,
            self::CURRENCY_ARS,
            self::CURRENCY_BOB,
            self::CURRENCY_COP,
            self::CURRENCY_CRC,
            self::CURRENCY_CUP,
            self::CURRENCY_DOP,
            self::CURRENCY_GTQ,
            self::CURRENCY_HNL,
            self::CURRENCY_MXN,
            self::CURRENCY_NIO,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PYG,
            self::CURRENCY_UYU,
            self::CURRENCY_VEF,
            self::CURRENCY_IRR,
            self::CURRENCY_XOF,
            self::CURRENCY_CDF,
            self::CURRENCY_XAF,
            self::CURRENCY_HTG,
            self::CURRENCY_ILS,
            self::CURRENCY_HRK,
            self::CURRENCY_HUF,
            self::CURRENCY_AMD,
            self::CURRENCY_ISK,
            self::CURRENCY_JPY,
            self::CURRENCY_GEL,
            self::CURRENCY_KZT,
            self::CURRENCY_KHR,
            self::CURRENCY_KRW,
            self::CURRENCY_KGS,
            self::CURRENCY_LAK,
            self::CURRENCY_MKD,
            self::CURRENCY_MNT,
            self::CURRENCY_BND,
            self::CURRENCY_MMK,
            self::CURRENCY_NOK,
            self::CURRENCY_NPR,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_AFN,
            self::CURRENCY_BRL,
            self::CURRENCY_MDL,
            self::CURRENCY_RON,
            self::CURRENCY_RWF,
            self::CURRENCY_SEK,
            self::CURRENCY_LKR,
            self::CURRENCY_SOS,
            self::CURRENCY_ALL,
            self::CURRENCY_RSD,
            self::CURRENCY_KES,
            self::CURRENCY_TJS,
            self::CURRENCY_THB,
            self::CURRENCY_ERN,
            self::CURRENCY_TMT,
            self::CURRENCY_BWP,
            self::CURRENCY__TRY,
            self::CURRENCY_UAH,
            self::CURRENCY_UZS,
            self::CURRENCY_VND,
            self::CURRENCY_MOP,
            self::CURRENCY_TWD,
            self::CURRENCY_BMD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeTypeAllowableValues()
    {
        return [
            self::CHARGE_TYPE_OTHER,
            self::CHARGE_TYPE_FEES,
            self::CHARGE_TYPE_CHARGEBACK,
            self::CHARGE_TYPE_TIP_FAILURE,
            self::CHARGE_TYPE_EXTERNAL_DISBURSEMENT,
            self::CHARGE_TYPE_GOODS,
            self::CHARGE_TYPE_RESTAURANT_SALES,
            self::CHARGE_TYPE_TIPS,
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
        $this->container['charge_id'] = isset($data['charge_id']) ? $data['charge_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['payout_id'] = isset($data['payout_id']) ? $data['payout_id'] : null;
        $this->container['charge_date'] = isset($data['charge_date']) ? $data['charge_date'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['charge_description'] = isset($data['charge_description']) ? $data['charge_description'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!is_null($this->container['charge_type']) && !in_array($this->container['charge_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'charge_type', must be one of '%s'",
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
     * Gets charge_id
     *
     * @return int
     */
    public function getChargeId()
    {
        return $this->container['charge_id'];
    }

    /**
     * Sets charge_id
     *
     * @param int $charge_id The id of the charge
     *
     * @return $this
     */
    public function setChargeId($charge_id)
    {
        $this->container['charge_id'] = $charge_id;

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
     * @param double $amount Charge amount
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
     * @param string $currency Currency of the charge
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
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
     * @param int $payout_id The id of the payout the order is related to
     *
     * @return $this
     */
    public function setPayoutId($payout_id)
    {
        $this->container['payout_id'] = $payout_id;

        return $this;
    }

    /**
     * Gets charge_date
     *
     * @return \DateTime
     */
    public function getChargeDate()
    {
        return $this->container['charge_date'];
    }

    /**
     * Sets charge_date
     *
     * @param \DateTime $charge_date The date the order was placed
     *
     * @return $this
     */
    public function setChargeDate($charge_date)
    {
        $this->container['charge_date'] = $charge_date;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string $charge_type Charge type
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {
        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!is_null($charge_type) && !in_array($charge_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'charge_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets charge_description
     *
     * @return string
     */
    public function getChargeDescription()
    {
        return $this->container['charge_description'];
    }

    /**
     * Sets charge_description
     *
     * @param string $charge_description Charge description
     *
     * @return $this
     */
    public function setChargeDescription($charge_description)
    {
        $this->container['charge_description'] = $charge_description;

        return $this;
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
     * @param int $store_id Store id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

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



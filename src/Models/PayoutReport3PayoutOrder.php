<?php
/**
 * PayoutReport3PayoutOrder
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
 * PayoutReport3PayoutOrder Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutReport3PayoutOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutReport3PayoutOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'int',
        'payout_id' => 'int',
        'order_date' => '\DateTime',
        'order_type' => 'string',
        'order_currency' => 'string',
        'sales' => 'double',
        'sales_tax' => 'double',
        'delivery_charges' => 'double',
        'tips' => 'double',
        'voucher' => 'double',
        'flat_fee_excluding_vat' => 'double',
        'flat_fee_excluding_vat' => 'double',
        'flat_fee_including_vat' => 'double',
        'percentage_fee_excluding_vat' => 'double',
        'percentage_fee_excluding_vat' => 'double',
        'vat' => 'double',
        'total_fees' => 'double',
        'cash_fee_charged_to_customer' => 'double',
        'net_sales' => 'double',
        'store_id' => 'int',
        'store_name' => 'string',
        'service_charge_amount' => 'double',
        'service_charge_percentage' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => 'int32',
        'payout_id' => 'int32',
        'order_date' => 'date-time',
        'order_type' => null,
        'order_currency' => null,
        'sales' => 'double',
        'sales_tax' => 'double',
        'delivery_charges' => 'double',
        'tips' => 'double',
        'voucher' => 'double',
        'flat_fee_excluding_vat' => 'double',
        'flat_fee_excluding_vat' => 'double',
        'flat_fee_including_vat' => 'double',
        'percentage_fee_excluding_vat' => 'double',
        'percentage_fee_excluding_vat' => 'double',
        'vat' => 'double',
        'total_fees' => 'double',
        'cash_fee_charged_to_customer' => 'double',
        'net_sales' => 'double',
        'store_id' => 'int32',
        'store_name' => null,
        'service_charge_amount' => 'double',
        'service_charge_percentage' => 'double'
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
        'payout_id' => 'PayoutId',
        'order_date' => 'OrderDate',
        'order_type' => 'OrderType',
        'order_currency' => 'OrderCurrency',
        'sales' => 'Sales',
        'sales_tax' => 'SalesTax',
        'delivery_charges' => 'DeliveryCharges',
        'tips' => 'Tips',
        'voucher' => 'Voucher',
        'flat_fee_excluding_vat' => 'FlatFeeExcludingVat',
        'flat_fee_excluding_vat' => 'FlatFeeExcludingVAT',
        'flat_fee_including_vat' => 'FlatFeeIncludingVat',
        'percentage_fee_excluding_vat' => 'PercentageFeeExcludingVat',
        'percentage_fee_excluding_vat' => 'PercentageFeeExcludingVAT',
        'vat' => 'Vat',
        'total_fees' => 'TotalFees',
        'cash_fee_charged_to_customer' => 'CashFeeChargedToCustomer',
        'net_sales' => 'NetSales',
        'store_id' => 'StoreId',
        'store_name' => 'StoreName',
        'service_charge_amount' => 'ServiceChargeAmount',
        'service_charge_percentage' => 'ServiceChargePercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'payout_id' => 'setPayoutId',
        'order_date' => 'setOrderDate',
        'order_type' => 'setOrderType',
        'order_currency' => 'setOrderCurrency',
        'sales' => 'setSales',
        'sales_tax' => 'setSalesTax',
        'delivery_charges' => 'setDeliveryCharges',
        'tips' => 'setTips',
        'voucher' => 'setVoucher',
        'flat_fee_excluding_vat' => 'setFlatFeeExcludingVat',
        'flat_fee_excluding_vat' => 'setFlatFeeExcludingVat',
        'flat_fee_including_vat' => 'setFlatFeeIncludingVat',
        'percentage_fee_excluding_vat' => 'setPercentageFeeExcludingVat',
        'percentage_fee_excluding_vat' => 'setPercentageFeeExcludingVat',
        'vat' => 'setVat',
        'total_fees' => 'setTotalFees',
        'cash_fee_charged_to_customer' => 'setCashFeeChargedToCustomer',
        'net_sales' => 'setNetSales',
        'store_id' => 'setStoreId',
        'store_name' => 'setStoreName',
        'service_charge_amount' => 'setServiceChargeAmount',
        'service_charge_percentage' => 'setServiceChargePercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'payout_id' => 'getPayoutId',
        'order_date' => 'getOrderDate',
        'order_type' => 'getOrderType',
        'order_currency' => 'getOrderCurrency',
        'sales' => 'getSales',
        'sales_tax' => 'getSalesTax',
        'delivery_charges' => 'getDeliveryCharges',
        'tips' => 'getTips',
        'voucher' => 'getVoucher',
        'flat_fee_excluding_vat' => 'getFlatFeeExcludingVat',
        'flat_fee_excluding_vat' => 'getFlatFeeExcludingVat',
        'flat_fee_including_vat' => 'getFlatFeeIncludingVat',
        'percentage_fee_excluding_vat' => 'getPercentageFeeExcludingVat',
        'percentage_fee_excluding_vat' => 'getPercentageFeeExcludingVat',
        'vat' => 'getVat',
        'total_fees' => 'getTotalFees',
        'cash_fee_charged_to_customer' => 'getCashFeeChargedToCustomer',
        'net_sales' => 'getNetSales',
        'store_id' => 'getStoreId',
        'store_name' => 'getStoreName',
        'service_charge_amount' => 'getServiceChargeAmount',
        'service_charge_percentage' => 'getServiceChargePercentage'
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

    const ORDER_TYPE_CASH = 'Cash';
    const ORDER_TYPE_ONLINE = 'Online';
    const ORDER_CURRENCY_EUR = 'EUR';
    const ORDER_CURRENCY_USD = 'USD';
    const ORDER_CURRENCY_GBP = 'GBP';
    const ORDER_CURRENCY_CAD = 'CAD';
    const ORDER_CURRENCY_AUD = 'AUD';
    const ORDER_CURRENCY_DJF = 'DJF';
    const ORDER_CURRENCY_ZAR = 'ZAR';
    const ORDER_CURRENCY_ETB = 'ETB';
    const ORDER_CURRENCY_AED = 'AED';
    const ORDER_CURRENCY_BHD = 'BHD';
    const ORDER_CURRENCY_DZD = 'DZD';
    const ORDER_CURRENCY_EGP = 'EGP';
    const ORDER_CURRENCY_IQD = 'IQD';
    const ORDER_CURRENCY_JOD = 'JOD';
    const ORDER_CURRENCY_KWD = 'KWD';
    const ORDER_CURRENCY_LBP = 'LBP';
    const ORDER_CURRENCY_LYD = 'LYD';
    const ORDER_CURRENCY_MAD = 'MAD';
    const ORDER_CURRENCY_OMR = 'OMR';
    const ORDER_CURRENCY_QAR = 'QAR';
    const ORDER_CURRENCY_SAR = 'SAR';
    const ORDER_CURRENCY_SYP = 'SYP';
    const ORDER_CURRENCY_TND = 'TND';
    const ORDER_CURRENCY_YER = 'YER';
    const ORDER_CURRENCY_CLP = 'CLP';
    const ORDER_CURRENCY_INR = 'INR';
    const ORDER_CURRENCY_AZN = 'AZN';
    const ORDER_CURRENCY_RUB = 'RUB';
    const ORDER_CURRENCY_BYN = 'BYN';
    const ORDER_CURRENCY_BGN = 'BGN';
    const ORDER_CURRENCY_NGN = 'NGN';
    const ORDER_CURRENCY_BDT = 'BDT';
    const ORDER_CURRENCY_CNY = 'CNY';
    const ORDER_CURRENCY_BAM = 'BAM';
    const ORDER_CURRENCY_CZK = 'CZK';
    const ORDER_CURRENCY_DKK = 'DKK';
    const ORDER_CURRENCY_CHF = 'CHF';
    const ORDER_CURRENCY_MVR = 'MVR';
    const ORDER_CURRENCY_BTN = 'BTN';
    const ORDER_CURRENCY_XCD = 'XCD';
    const ORDER_CURRENCY_BZD = 'BZD';
    const ORDER_CURRENCY_HKD = 'HKD';
    const ORDER_CURRENCY_IDR = 'IDR';
    const ORDER_CURRENCY_JMD = 'JMD';
    const ORDER_CURRENCY_MYR = 'MYR';
    const ORDER_CURRENCY_NZD = 'NZD';
    const ORDER_CURRENCY_PHP = 'PHP';
    const ORDER_CURRENCY_SGD = 'SGD';
    const ORDER_CURRENCY_TTD = 'TTD';
    const ORDER_CURRENCY_XDR = 'XDR';
    const ORDER_CURRENCY_ARS = 'ARS';
    const ORDER_CURRENCY_BOB = 'BOB';
    const ORDER_CURRENCY_COP = 'COP';
    const ORDER_CURRENCY_CRC = 'CRC';
    const ORDER_CURRENCY_CUP = 'CUP';
    const ORDER_CURRENCY_DOP = 'DOP';
    const ORDER_CURRENCY_GTQ = 'GTQ';
    const ORDER_CURRENCY_HNL = 'HNL';
    const ORDER_CURRENCY_MXN = 'MXN';
    const ORDER_CURRENCY_NIO = 'NIO';
    const ORDER_CURRENCY_PAB = 'PAB';
    const ORDER_CURRENCY_PEN = 'PEN';
    const ORDER_CURRENCY_PYG = 'PYG';
    const ORDER_CURRENCY_UYU = 'UYU';
    const ORDER_CURRENCY_VEF = 'VEF';
    const ORDER_CURRENCY_IRR = 'IRR';
    const ORDER_CURRENCY_XOF = 'XOF';
    const ORDER_CURRENCY_CDF = 'CDF';
    const ORDER_CURRENCY_XAF = 'XAF';
    const ORDER_CURRENCY_HTG = 'HTG';
    const ORDER_CURRENCY_ILS = 'ILS';
    const ORDER_CURRENCY_HRK = 'HRK';
    const ORDER_CURRENCY_HUF = 'HUF';
    const ORDER_CURRENCY_AMD = 'AMD';
    const ORDER_CURRENCY_ISK = 'ISK';
    const ORDER_CURRENCY_JPY = 'JPY';
    const ORDER_CURRENCY_GEL = 'GEL';
    const ORDER_CURRENCY_KZT = 'KZT';
    const ORDER_CURRENCY_KHR = 'KHR';
    const ORDER_CURRENCY_KRW = 'KRW';
    const ORDER_CURRENCY_KGS = 'KGS';
    const ORDER_CURRENCY_LAK = 'LAK';
    const ORDER_CURRENCY_MKD = 'MKD';
    const ORDER_CURRENCY_MNT = 'MNT';
    const ORDER_CURRENCY_BND = 'BND';
    const ORDER_CURRENCY_MMK = 'MMK';
    const ORDER_CURRENCY_NOK = 'NOK';
    const ORDER_CURRENCY_NPR = 'NPR';
    const ORDER_CURRENCY_PKR = 'PKR';
    const ORDER_CURRENCY_PLN = 'PLN';
    const ORDER_CURRENCY_AFN = 'AFN';
    const ORDER_CURRENCY_BRL = 'BRL';
    const ORDER_CURRENCY_MDL = 'MDL';
    const ORDER_CURRENCY_RON = 'RON';
    const ORDER_CURRENCY_RWF = 'RWF';
    const ORDER_CURRENCY_SEK = 'SEK';
    const ORDER_CURRENCY_LKR = 'LKR';
    const ORDER_CURRENCY_SOS = 'SOS';
    const ORDER_CURRENCY_ALL = 'ALL';
    const ORDER_CURRENCY_RSD = 'RSD';
    const ORDER_CURRENCY_KES = 'KES';
    const ORDER_CURRENCY_TJS = 'TJS';
    const ORDER_CURRENCY_THB = 'THB';
    const ORDER_CURRENCY_ERN = 'ERN';
    const ORDER_CURRENCY_TMT = 'TMT';
    const ORDER_CURRENCY_BWP = 'BWP';
    const ORDER_CURRENCY__TRY = 'TRY';
    const ORDER_CURRENCY_UAH = 'UAH';
    const ORDER_CURRENCY_UZS = 'UZS';
    const ORDER_CURRENCY_VND = 'VND';
    const ORDER_CURRENCY_MOP = 'MOP';
    const ORDER_CURRENCY_TWD = 'TWD';
    const ORDER_CURRENCY_BMD = 'BMD';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_CASH,
            self::ORDER_TYPE_ONLINE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderCurrencyAllowableValues()
    {
        return [
            self::ORDER_CURRENCY_EUR,
            self::ORDER_CURRENCY_USD,
            self::ORDER_CURRENCY_GBP,
            self::ORDER_CURRENCY_CAD,
            self::ORDER_CURRENCY_AUD,
            self::ORDER_CURRENCY_DJF,
            self::ORDER_CURRENCY_ZAR,
            self::ORDER_CURRENCY_ETB,
            self::ORDER_CURRENCY_AED,
            self::ORDER_CURRENCY_BHD,
            self::ORDER_CURRENCY_DZD,
            self::ORDER_CURRENCY_EGP,
            self::ORDER_CURRENCY_IQD,
            self::ORDER_CURRENCY_JOD,
            self::ORDER_CURRENCY_KWD,
            self::ORDER_CURRENCY_LBP,
            self::ORDER_CURRENCY_LYD,
            self::ORDER_CURRENCY_MAD,
            self::ORDER_CURRENCY_OMR,
            self::ORDER_CURRENCY_QAR,
            self::ORDER_CURRENCY_SAR,
            self::ORDER_CURRENCY_SYP,
            self::ORDER_CURRENCY_TND,
            self::ORDER_CURRENCY_YER,
            self::ORDER_CURRENCY_CLP,
            self::ORDER_CURRENCY_INR,
            self::ORDER_CURRENCY_AZN,
            self::ORDER_CURRENCY_RUB,
            self::ORDER_CURRENCY_BYN,
            self::ORDER_CURRENCY_BGN,
            self::ORDER_CURRENCY_NGN,
            self::ORDER_CURRENCY_BDT,
            self::ORDER_CURRENCY_CNY,
            self::ORDER_CURRENCY_BAM,
            self::ORDER_CURRENCY_CZK,
            self::ORDER_CURRENCY_DKK,
            self::ORDER_CURRENCY_CHF,
            self::ORDER_CURRENCY_MVR,
            self::ORDER_CURRENCY_BTN,
            self::ORDER_CURRENCY_XCD,
            self::ORDER_CURRENCY_BZD,
            self::ORDER_CURRENCY_HKD,
            self::ORDER_CURRENCY_IDR,
            self::ORDER_CURRENCY_JMD,
            self::ORDER_CURRENCY_MYR,
            self::ORDER_CURRENCY_NZD,
            self::ORDER_CURRENCY_PHP,
            self::ORDER_CURRENCY_SGD,
            self::ORDER_CURRENCY_TTD,
            self::ORDER_CURRENCY_XDR,
            self::ORDER_CURRENCY_ARS,
            self::ORDER_CURRENCY_BOB,
            self::ORDER_CURRENCY_COP,
            self::ORDER_CURRENCY_CRC,
            self::ORDER_CURRENCY_CUP,
            self::ORDER_CURRENCY_DOP,
            self::ORDER_CURRENCY_GTQ,
            self::ORDER_CURRENCY_HNL,
            self::ORDER_CURRENCY_MXN,
            self::ORDER_CURRENCY_NIO,
            self::ORDER_CURRENCY_PAB,
            self::ORDER_CURRENCY_PEN,
            self::ORDER_CURRENCY_PYG,
            self::ORDER_CURRENCY_UYU,
            self::ORDER_CURRENCY_VEF,
            self::ORDER_CURRENCY_IRR,
            self::ORDER_CURRENCY_XOF,
            self::ORDER_CURRENCY_CDF,
            self::ORDER_CURRENCY_XAF,
            self::ORDER_CURRENCY_HTG,
            self::ORDER_CURRENCY_ILS,
            self::ORDER_CURRENCY_HRK,
            self::ORDER_CURRENCY_HUF,
            self::ORDER_CURRENCY_AMD,
            self::ORDER_CURRENCY_ISK,
            self::ORDER_CURRENCY_JPY,
            self::ORDER_CURRENCY_GEL,
            self::ORDER_CURRENCY_KZT,
            self::ORDER_CURRENCY_KHR,
            self::ORDER_CURRENCY_KRW,
            self::ORDER_CURRENCY_KGS,
            self::ORDER_CURRENCY_LAK,
            self::ORDER_CURRENCY_MKD,
            self::ORDER_CURRENCY_MNT,
            self::ORDER_CURRENCY_BND,
            self::ORDER_CURRENCY_MMK,
            self::ORDER_CURRENCY_NOK,
            self::ORDER_CURRENCY_NPR,
            self::ORDER_CURRENCY_PKR,
            self::ORDER_CURRENCY_PLN,
            self::ORDER_CURRENCY_AFN,
            self::ORDER_CURRENCY_BRL,
            self::ORDER_CURRENCY_MDL,
            self::ORDER_CURRENCY_RON,
            self::ORDER_CURRENCY_RWF,
            self::ORDER_CURRENCY_SEK,
            self::ORDER_CURRENCY_LKR,
            self::ORDER_CURRENCY_SOS,
            self::ORDER_CURRENCY_ALL,
            self::ORDER_CURRENCY_RSD,
            self::ORDER_CURRENCY_KES,
            self::ORDER_CURRENCY_TJS,
            self::ORDER_CURRENCY_THB,
            self::ORDER_CURRENCY_ERN,
            self::ORDER_CURRENCY_TMT,
            self::ORDER_CURRENCY_BWP,
            self::ORDER_CURRENCY__TRY,
            self::ORDER_CURRENCY_UAH,
            self::ORDER_CURRENCY_UZS,
            self::ORDER_CURRENCY_VND,
            self::ORDER_CURRENCY_MOP,
            self::ORDER_CURRENCY_TWD,
            self::ORDER_CURRENCY_BMD,
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
        $this->container['payout_id'] = isset($data['payout_id']) ? $data['payout_id'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_currency'] = isset($data['order_currency']) ? $data['order_currency'] : null;
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
        $this->container['sales_tax'] = isset($data['sales_tax']) ? $data['sales_tax'] : null;
        $this->container['delivery_charges'] = isset($data['delivery_charges']) ? $data['delivery_charges'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['voucher'] = isset($data['voucher']) ? $data['voucher'] : null;
        $this->container['flat_fee_excluding_vat'] = isset($data['flat_fee_excluding_vat']) ? $data['flat_fee_excluding_vat'] : null;
        $this->container['flat_fee_excluding_vat'] = isset($data['flat_fee_excluding_vat']) ? $data['flat_fee_excluding_vat'] : null;
        $this->container['flat_fee_including_vat'] = isset($data['flat_fee_including_vat']) ? $data['flat_fee_including_vat'] : null;
        $this->container['percentage_fee_excluding_vat'] = isset($data['percentage_fee_excluding_vat']) ? $data['percentage_fee_excluding_vat'] : null;
        $this->container['percentage_fee_excluding_vat'] = isset($data['percentage_fee_excluding_vat']) ? $data['percentage_fee_excluding_vat'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['total_fees'] = isset($data['total_fees']) ? $data['total_fees'] : null;
        $this->container['cash_fee_charged_to_customer'] = isset($data['cash_fee_charged_to_customer']) ? $data['cash_fee_charged_to_customer'] : null;
        $this->container['net_sales'] = isset($data['net_sales']) ? $data['net_sales'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['service_charge_amount'] = isset($data['service_charge_amount']) ? $data['service_charge_amount'] : null;
        $this->container['service_charge_percentage'] = isset($data['service_charge_percentage']) ? $data['service_charge_percentage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderCurrencyAllowableValues();
        if (!is_null($this->container['order_currency']) && !in_array($this->container['order_currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_currency', must be one of '%s'",
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
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type order_type
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_currency
     *
     * @return string
     */
    public function getOrderCurrency()
    {
        return $this->container['order_currency'];
    }

    /**
     * Sets order_currency
     *
     * @param string $order_currency order_currency
     *
     * @return $this
     */
    public function setOrderCurrency($order_currency)
    {
        $allowedValues = $this->getOrderCurrencyAllowableValues();
        if (!is_null($order_currency) && !in_array($order_currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_currency'] = $order_currency;

        return $this;
    }

    /**
     * Gets sales
     *
     * @return double
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     *
     * @param double $sales sales
     *
     * @return $this
     */
    public function setSales($sales)
    {
        $this->container['sales'] = $sales;

        return $this;
    }

    /**
     * Gets sales_tax
     *
     * @return double
     */
    public function getSalesTax()
    {
        return $this->container['sales_tax'];
    }

    /**
     * Sets sales_tax
     *
     * @param double $sales_tax sales_tax
     *
     * @return $this
     */
    public function setSalesTax($sales_tax)
    {
        $this->container['sales_tax'] = $sales_tax;

        return $this;
    }

    /**
     * Gets delivery_charges
     *
     * @return double
     */
    public function getDeliveryCharges()
    {
        return $this->container['delivery_charges'];
    }

    /**
     * Sets delivery_charges
     *
     * @param double $delivery_charges delivery_charges
     *
     * @return $this
     */
    public function setDeliveryCharges($delivery_charges)
    {
        $this->container['delivery_charges'] = $delivery_charges;

        return $this;
    }

    /**
     * Gets tips
     *
     * @return double
     */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
     * Sets tips
     *
     * @param double $tips tips
     *
     * @return $this
     */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return double
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param double $voucher voucher
     *
     * @return $this
     */
    public function setVoucher($voucher)
    {
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets flat_fee_excluding_vat
     *
     * @return double
     */
    public function getFlatFeeExcludingVat()
    {
        return $this->container['flat_fee_excluding_vat'];
    }

    /**
     * Sets flat_fee_excluding_vat
     *
     * @param double $flat_fee_excluding_vat flat_fee_excluding_vat
     *
     * @return $this
     */
    public function setFlatFeeExcludingVat($flat_fee_excluding_vat)
    {
        $this->container['flat_fee_excluding_vat'] = $flat_fee_excluding_vat;

        return $this;
    }

    /**
     * Gets flat_fee_excluding_vat
     *
     * @return double
     */
    public function getFlatFeeExcludingVat()
    {
        return $this->container['flat_fee_excluding_vat'];
    }

    /**
     * Sets flat_fee_excluding_vat
     *
     * @param double $flat_fee_excluding_vat flat_fee_excluding_vat
     *
     * @return $this
     */
    public function setFlatFeeExcludingVat($flat_fee_excluding_vat)
    {
        $this->container['flat_fee_excluding_vat'] = $flat_fee_excluding_vat;

        return $this;
    }

    /**
     * Gets flat_fee_including_vat
     *
     * @return double
     */
    public function getFlatFeeIncludingVat()
    {
        return $this->container['flat_fee_including_vat'];
    }

    /**
     * Sets flat_fee_including_vat
     *
     * @param double $flat_fee_including_vat flat_fee_including_vat
     *
     * @return $this
     */
    public function setFlatFeeIncludingVat($flat_fee_including_vat)
    {
        $this->container['flat_fee_including_vat'] = $flat_fee_including_vat;

        return $this;
    }

    /**
     * Gets percentage_fee_excluding_vat
     *
     * @return double
     */
    public function getPercentageFeeExcludingVat()
    {
        return $this->container['percentage_fee_excluding_vat'];
    }

    /**
     * Sets percentage_fee_excluding_vat
     *
     * @param double $percentage_fee_excluding_vat percentage_fee_excluding_vat
     *
     * @return $this
     */
    public function setPercentageFeeExcludingVat($percentage_fee_excluding_vat)
    {
        $this->container['percentage_fee_excluding_vat'] = $percentage_fee_excluding_vat;

        return $this;
    }

    /**
     * Gets percentage_fee_excluding_vat
     *
     * @return double
     */
    public function getPercentageFeeExcludingVat()
    {
        return $this->container['percentage_fee_excluding_vat'];
    }

    /**
     * Sets percentage_fee_excluding_vat
     *
     * @param double $percentage_fee_excluding_vat percentage_fee_excluding_vat
     *
     * @return $this
     */
    public function setPercentageFeeExcludingVat($percentage_fee_excluding_vat)
    {
        $this->container['percentage_fee_excluding_vat'] = $percentage_fee_excluding_vat;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return double
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param double $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets total_fees
     *
     * @return double
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees
     *
     * @param double $total_fees total_fees
     *
     * @return $this
     */
    public function setTotalFees($total_fees)
    {
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets cash_fee_charged_to_customer
     *
     * @return double
     */
    public function getCashFeeChargedToCustomer()
    {
        return $this->container['cash_fee_charged_to_customer'];
    }

    /**
     * Sets cash_fee_charged_to_customer
     *
     * @param double $cash_fee_charged_to_customer cash_fee_charged_to_customer
     *
     * @return $this
     */
    public function setCashFeeChargedToCustomer($cash_fee_charged_to_customer)
    {
        $this->container['cash_fee_charged_to_customer'] = $cash_fee_charged_to_customer;

        return $this;
    }

    /**
     * Gets net_sales
     *
     * @return double
     */
    public function getNetSales()
    {
        return $this->container['net_sales'];
    }

    /**
     * Sets net_sales
     *
     * @param double $net_sales net_sales
     *
     * @return $this
     */
    public function setNetSales($net_sales)
    {
        $this->container['net_sales'] = $net_sales;

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
     * @param int $store_id store_id
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
     * Gets service_charge_amount
     *
     * @return double
     */
    public function getServiceChargeAmount()
    {
        return $this->container['service_charge_amount'];
    }

    /**
     * Sets service_charge_amount
     *
     * @param double $service_charge_amount service_charge_amount
     *
     * @return $this
     */
    public function setServiceChargeAmount($service_charge_amount)
    {
        $this->container['service_charge_amount'] = $service_charge_amount;

        return $this;
    }

    /**
     * Gets service_charge_percentage
     *
     * @return double
     */
    public function getServiceChargePercentage()
    {
        return $this->container['service_charge_percentage'];
    }

    /**
     * Sets service_charge_percentage
     *
     * @param double $service_charge_percentage service_charge_percentage
     *
     * @return $this
     */
    public function setServiceChargePercentage($service_charge_percentage)
    {
        $this->container['service_charge_percentage'] = $service_charge_percentage;

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



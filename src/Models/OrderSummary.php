<?php
/**
 * OrderSummary
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
 * OrderSummary Class Doc Comment
 *
 * @category Class
 * @description Order summary
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'int',
        'delivery_type' => 'string',
        'order_state' => 'string',
        'requested_for_time' => '\DateTime',
        'store_name' => 'string',
        'store_iana_time_zone' => 'string',
        'customer_name' => 'string',
        'customer_phone_number' => 'string',
        'amount' => 'double',
        'payment_status' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => 'int32',
        'delivery_type' => null,
        'order_state' => null,
        'requested_for_time' => 'date-time',
        'store_name' => null,
        'store_iana_time_zone' => null,
        'customer_name' => null,
        'customer_phone_number' => null,
        'amount' => 'double',
        'payment_status' => null,
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
        'order_id' => 'OrderId',
        'delivery_type' => 'DeliveryType',
        'order_state' => 'OrderState',
        'requested_for_time' => 'RequestedForTime',
        'store_name' => 'StoreName',
        'store_iana_time_zone' => 'StoreIanaTimeZone',
        'customer_name' => 'CustomerName',
        'customer_phone_number' => 'CustomerPhoneNumber',
        'amount' => 'Amount',
        'payment_status' => 'PaymentStatus',
        'currency' => 'Currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'delivery_type' => 'setDeliveryType',
        'order_state' => 'setOrderState',
        'requested_for_time' => 'setRequestedForTime',
        'store_name' => 'setStoreName',
        'store_iana_time_zone' => 'setStoreIanaTimeZone',
        'customer_name' => 'setCustomerName',
        'customer_phone_number' => 'setCustomerPhoneNumber',
        'amount' => 'setAmount',
        'payment_status' => 'setPaymentStatus',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'delivery_type' => 'getDeliveryType',
        'order_state' => 'getOrderState',
        'requested_for_time' => 'getRequestedForTime',
        'store_name' => 'getStoreName',
        'store_iana_time_zone' => 'getStoreIanaTimeZone',
        'customer_name' => 'getCustomerName',
        'customer_phone_number' => 'getCustomerPhoneNumber',
        'amount' => 'getAmount',
        'payment_status' => 'getPaymentStatus',
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

    const DELIVERY_TYPE_DELIVERY = 'Delivery';
    const DELIVERY_TYPE_PICKUP = 'Pickup';
    const ORDER_STATE_CREATED = 'Created';
    const ORDER_STATE_PLACED_CAN_BE_CANCELLED = 'PlacedCanBeCancelled';
    const ORDER_STATE_READY_TO_PROCESS = 'ReadyToProcess';
    const ORDER_STATE_ACCEPTED_BY_RESTAURANT = 'AcceptedByRestaurant';
    const ORDER_STATE_DISPATCHED = 'Dispatched';
    const ORDER_STATE_DELIVERED = 'Delivered';
    const ORDER_STATE_CANCELLED = 'Cancelled';
    const ORDER_STATE_MANUAL_REVIEW = 'ManualReview';
    const ORDER_STATE_REJECTED_BY_STORE = 'RejectedByStore';
    const ORDER_STATE_REJECTED_BY_FLIPDISH = 'RejectedByFlipdish';
    const ORDER_STATE_REJECTED_AUTOMATICALLY = 'RejectedAutomatically';
    const ORDER_STATE_REJECTED_AFTER_BEING_ACCEPTED = 'RejectedAfterBeingAccepted';
    const ORDER_STATE_ACCEPTED_AND_REFUNDED = 'AcceptedAndRefunded';
    const PAYMENT_STATUS_PAID = 'Paid';
    const PAYMENT_STATUS_UNPAID = 'Unpaid';
    const PAYMENT_STATUS_REFUNDED = 'Refunded';
    const PAYMENT_STATUS_PARTIALLY_REFUNDED = 'PartiallyRefunded';
    const PAYMENT_STATUS_DISPUTED = 'Disputed';
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
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryTypeAllowableValues()
    {
        return [
            self::DELIVERY_TYPE_DELIVERY,
            self::DELIVERY_TYPE_PICKUP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStateAllowableValues()
    {
        return [
            self::ORDER_STATE_CREATED,
            self::ORDER_STATE_PLACED_CAN_BE_CANCELLED,
            self::ORDER_STATE_READY_TO_PROCESS,
            self::ORDER_STATE_ACCEPTED_BY_RESTAURANT,
            self::ORDER_STATE_DISPATCHED,
            self::ORDER_STATE_DELIVERED,
            self::ORDER_STATE_CANCELLED,
            self::ORDER_STATE_MANUAL_REVIEW,
            self::ORDER_STATE_REJECTED_BY_STORE,
            self::ORDER_STATE_REJECTED_BY_FLIPDISH,
            self::ORDER_STATE_REJECTED_AUTOMATICALLY,
            self::ORDER_STATE_REJECTED_AFTER_BEING_ACCEPTED,
            self::ORDER_STATE_ACCEPTED_AND_REFUNDED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_PAID,
            self::PAYMENT_STATUS_UNPAID,
            self::PAYMENT_STATUS_REFUNDED,
            self::PAYMENT_STATUS_PARTIALLY_REFUNDED,
            self::PAYMENT_STATUS_DISPUTED,
        ];
    }
    
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
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['order_state'] = isset($data['order_state']) ? $data['order_state'] : null;
        $this->container['requested_for_time'] = isset($data['requested_for_time']) ? $data['requested_for_time'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['store_iana_time_zone'] = isset($data['store_iana_time_zone']) ? $data['store_iana_time_zone'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_phone_number'] = isset($data['customer_phone_number']) ? $data['customer_phone_number'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
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

        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($this->container['delivery_type']) && !in_array($this->container['delivery_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderStateAllowableValues();
        if (!is_null($this->container['order_state']) && !in_array($this->container['order_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
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
     * @param int $order_id Order identifier
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param string $delivery_type Delivery type
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($delivery_type) && !in_array($delivery_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets order_state
     *
     * @return string
     */
    public function getOrderState()
    {
        return $this->container['order_state'];
    }

    /**
     * Sets order_state
     *
     * @param string $order_state Order state
     *
     * @return $this
     */
    public function setOrderState($order_state)
    {
        $allowedValues = $this->getOrderStateAllowableValues();
        if (!is_null($order_state) && !in_array($order_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_state'] = $order_state;

        return $this;
    }

    /**
     * Gets requested_for_time
     *
     * @return \DateTime
     */
    public function getRequestedForTime()
    {
        return $this->container['requested_for_time'];
    }

    /**
     * Sets requested_for_time
     *
     * @param \DateTime $requested_for_time Order requested for
     *
     * @return $this
     */
    public function setRequestedForTime($requested_for_time)
    {
        $this->container['requested_for_time'] = $requested_for_time;

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
     * Gets store_iana_time_zone
     *
     * @return string
     */
    public function getStoreIanaTimeZone()
    {
        return $this->container['store_iana_time_zone'];
    }

    /**
     * Sets store_iana_time_zone
     *
     * @param string $store_iana_time_zone Store IANA time zone
     *
     * @return $this
     */
    public function setStoreIanaTimeZone($store_iana_time_zone)
    {
        $this->container['store_iana_time_zone'] = $store_iana_time_zone;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name Name of the customer
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_phone_number
     *
     * @return string
     */
    public function getCustomerPhoneNumber()
    {
        return $this->container['customer_phone_number'];
    }

    /**
     * Sets customer_phone_number
     *
     * @param string $customer_phone_number Phone number of customer
     *
     * @return $this
     */
    public function setCustomerPhoneNumber($customer_phone_number)
    {
        $this->container['customer_phone_number'] = $customer_phone_number;

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
     * @param double $amount This is the sum of the OrderItemsAmount, DeliveryAmount, TipAmount and Voucher.Amount (which is usually negative) and OnlineOrderingFee for cash orders.  It does not include the OnlineOrderingFee in the case of card orders as this fee is charged by Flipdish directly to the customer.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string $payment_status Status of the payment
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

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
     * @param string $currency Currency of payment
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



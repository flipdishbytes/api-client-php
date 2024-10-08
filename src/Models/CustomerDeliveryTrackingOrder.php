<?php
/**
 * CustomerDeliveryTrackingOrder
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
 * CustomerDeliveryTrackingOrder Class Doc Comment
 *
 * @category Class
 * @description Defines the order data required for customer driver tracking
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDeliveryTrackingOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerDeliveryTrackingOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'int',
        'address' => 'string',
        'delivery_notes' => 'string',
        'store_phone_number' => 'string',
        'app_icon_url' => 'string',
        'order_tracking_code' => 'string',
        'payment_method_description' => 'string',
        'last_four_digits' => 'string',
        'order_lines' => '\Flipdish\\Client\Models\CustomerDeliveryTrackingOrderLine[]',
        'total_amount' => 'double',
        'currency' => 'string',
        'latitude' => 'double',
        'longitude' => 'double',
        'placed' => '\DateTime',
        'requested_for' => '\DateTime',
        'driver_id' => 'int',
        'driver_name' => 'string',
        'driver_image' => 'string',
        'estimated_minutes_for_delivery' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => 'int32',
        'address' => null,
        'delivery_notes' => null,
        'store_phone_number' => null,
        'app_icon_url' => null,
        'order_tracking_code' => null,
        'payment_method_description' => null,
        'last_four_digits' => null,
        'order_lines' => null,
        'total_amount' => 'double',
        'currency' => null,
        'latitude' => 'double',
        'longitude' => 'double',
        'placed' => 'date-time',
        'requested_for' => 'date-time',
        'driver_id' => 'int32',
        'driver_name' => null,
        'driver_image' => null,
        'estimated_minutes_for_delivery' => 'int32'
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
        'address' => 'Address',
        'delivery_notes' => 'DeliveryNotes',
        'store_phone_number' => 'StorePhoneNumber',
        'app_icon_url' => 'AppIconUrl',
        'order_tracking_code' => 'OrderTrackingCode',
        'payment_method_description' => 'PaymentMethodDescription',
        'last_four_digits' => 'LastFourDigits',
        'order_lines' => 'OrderLines',
        'total_amount' => 'TotalAmount',
        'currency' => 'Currency',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'placed' => 'Placed',
        'requested_for' => 'RequestedFor',
        'driver_id' => 'DriverId',
        'driver_name' => 'DriverName',
        'driver_image' => 'DriverImage',
        'estimated_minutes_for_delivery' => 'EstimatedMinutesForDelivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'address' => 'setAddress',
        'delivery_notes' => 'setDeliveryNotes',
        'store_phone_number' => 'setStorePhoneNumber',
        'app_icon_url' => 'setAppIconUrl',
        'order_tracking_code' => 'setOrderTrackingCode',
        'payment_method_description' => 'setPaymentMethodDescription',
        'last_four_digits' => 'setLastFourDigits',
        'order_lines' => 'setOrderLines',
        'total_amount' => 'setTotalAmount',
        'currency' => 'setCurrency',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'placed' => 'setPlaced',
        'requested_for' => 'setRequestedFor',
        'driver_id' => 'setDriverId',
        'driver_name' => 'setDriverName',
        'driver_image' => 'setDriverImage',
        'estimated_minutes_for_delivery' => 'setEstimatedMinutesForDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'address' => 'getAddress',
        'delivery_notes' => 'getDeliveryNotes',
        'store_phone_number' => 'getStorePhoneNumber',
        'app_icon_url' => 'getAppIconUrl',
        'order_tracking_code' => 'getOrderTrackingCode',
        'payment_method_description' => 'getPaymentMethodDescription',
        'last_four_digits' => 'getLastFourDigits',
        'order_lines' => 'getOrderLines',
        'total_amount' => 'getTotalAmount',
        'currency' => 'getCurrency',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'placed' => 'getPlaced',
        'requested_for' => 'getRequestedFor',
        'driver_id' => 'getDriverId',
        'driver_name' => 'getDriverName',
        'driver_image' => 'getDriverImage',
        'estimated_minutes_for_delivery' => 'getEstimatedMinutesForDelivery'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['delivery_notes'] = isset($data['delivery_notes']) ? $data['delivery_notes'] : null;
        $this->container['store_phone_number'] = isset($data['store_phone_number']) ? $data['store_phone_number'] : null;
        $this->container['app_icon_url'] = isset($data['app_icon_url']) ? $data['app_icon_url'] : null;
        $this->container['order_tracking_code'] = isset($data['order_tracking_code']) ? $data['order_tracking_code'] : null;
        $this->container['payment_method_description'] = isset($data['payment_method_description']) ? $data['payment_method_description'] : null;
        $this->container['last_four_digits'] = isset($data['last_four_digits']) ? $data['last_four_digits'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['placed'] = isset($data['placed']) ? $data['placed'] : null;
        $this->container['requested_for'] = isset($data['requested_for']) ? $data['requested_for'] : null;
        $this->container['driver_id'] = isset($data['driver_id']) ? $data['driver_id'] : null;
        $this->container['driver_name'] = isset($data['driver_name']) ? $data['driver_name'] : null;
        $this->container['driver_image'] = isset($data['driver_image']) ? $data['driver_image'] : null;
        $this->container['estimated_minutes_for_delivery'] = isset($data['estimated_minutes_for_delivery']) ? $data['estimated_minutes_for_delivery'] : null;
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
     * @param int $order_id Order Id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Pretified address string in country format
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets delivery_notes
     *
     * @return string
     */
    public function getDeliveryNotes()
    {
        return $this->container['delivery_notes'];
    }

    /**
     * Sets delivery_notes
     *
     * @param string $delivery_notes Delivery Notes
     *
     * @return $this
     */
    public function setDeliveryNotes($delivery_notes)
    {
        $this->container['delivery_notes'] = $delivery_notes;

        return $this;
    }

    /**
     * Gets store_phone_number
     *
     * @return string
     */
    public function getStorePhoneNumber()
    {
        return $this->container['store_phone_number'];
    }

    /**
     * Sets store_phone_number
     *
     * @param string $store_phone_number Phone number of the store
     *
     * @return $this
     */
    public function setStorePhoneNumber($store_phone_number)
    {
        $this->container['store_phone_number'] = $store_phone_number;

        return $this;
    }

    /**
     * Gets app_icon_url
     *
     * @return string
     */
    public function getAppIconUrl()
    {
        return $this->container['app_icon_url'];
    }

    /**
     * Sets app_icon_url
     *
     * @param string $app_icon_url App Icon of the store
     *
     * @return $this
     */
    public function setAppIconUrl($app_icon_url)
    {
        $this->container['app_icon_url'] = $app_icon_url;

        return $this;
    }

    /**
     * Gets order_tracking_code
     *
     * @return string
     */
    public function getOrderTrackingCode()
    {
        return $this->container['order_tracking_code'];
    }

    /**
     * Sets order_tracking_code
     *
     * @param string $order_tracking_code Order Tracking Code
     *
     * @return $this
     */
    public function setOrderTrackingCode($order_tracking_code)
    {
        $this->container['order_tracking_code'] = $order_tracking_code;

        return $this;
    }

    /**
     * Gets payment_method_description
     *
     * @return string
     */
    public function getPaymentMethodDescription()
    {
        return $this->container['payment_method_description'];
    }

    /**
     * Sets payment_method_description
     *
     * @param string $payment_method_description Payment method description i.e Cash/Card/iDeal/Paypal
     *
     * @return $this
     */
    public function setPaymentMethodDescription($payment_method_description)
    {
        $this->container['payment_method_description'] = $payment_method_description;

        return $this;
    }

    /**
     * Gets last_four_digits
     *
     * @return string
     */
    public function getLastFourDigits()
    {
        return $this->container['last_four_digits'];
    }

    /**
     * Sets last_four_digits
     *
     * @param string $last_four_digits Last 4 digits of the card if applicable otherwise null
     *
     * @return $this
     */
    public function setLastFourDigits($last_four_digits)
    {
        $this->container['last_four_digits'] = $last_four_digits;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Flipdish\\Client\Models\CustomerDeliveryTrackingOrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Flipdish\\Client\Models\CustomerDeliveryTrackingOrderLine[] $order_lines Order lines of the order
     *
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount Total amount for the order including tax
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * @param string $currency Currency
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
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude Customer Location Latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude Customer Location Longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets placed
     *
     * @return \DateTime
     */
    public function getPlaced()
    {
        return $this->container['placed'];
    }

    /**
     * Sets placed
     *
     * @param \DateTime $placed Order placed time
     *
     * @return $this
     */
    public function setPlaced($placed)
    {
        $this->container['placed'] = $placed;

        return $this;
    }

    /**
     * Gets requested_for
     *
     * @return \DateTime
     */
    public function getRequestedFor()
    {
        return $this->container['requested_for'];
    }

    /**
     * Sets requested_for
     *
     * @param \DateTime $requested_for Order requested for
     *
     * @return $this
     */
    public function setRequestedFor($requested_for)
    {
        $this->container['requested_for'] = $requested_for;

        return $this;
    }

    /**
     * Gets driver_id
     *
     * @return int
     */
    public function getDriverId()
    {
        return $this->container['driver_id'];
    }

    /**
     * Sets driver_id
     *
     * @param int $driver_id Driver Id
     *
     * @return $this
     */
    public function setDriverId($driver_id)
    {
        $this->container['driver_id'] = $driver_id;

        return $this;
    }

    /**
     * Gets driver_name
     *
     * @return string
     */
    public function getDriverName()
    {
        return $this->container['driver_name'];
    }

    /**
     * Sets driver_name
     *
     * @param string $driver_name Driver Name
     *
     * @return $this
     */
    public function setDriverName($driver_name)
    {
        $this->container['driver_name'] = $driver_name;

        return $this;
    }

    /**
     * Gets driver_image
     *
     * @return string
     */
    public function getDriverImage()
    {
        return $this->container['driver_image'];
    }

    /**
     * Sets driver_image
     *
     * @param string $driver_image Driver Image
     *
     * @return $this
     */
    public function setDriverImage($driver_image)
    {
        $this->container['driver_image'] = $driver_image;

        return $this;
    }

    /**
     * Gets estimated_minutes_for_delivery
     *
     * @return int
     */
    public function getEstimatedMinutesForDelivery()
    {
        return $this->container['estimated_minutes_for_delivery'];
    }

    /**
     * Sets estimated_minutes_for_delivery
     *
     * @param int $estimated_minutes_for_delivery 
     *
     * @return $this
     */
    public function setEstimatedMinutesForDelivery($estimated_minutes_for_delivery)
    {
        $this->container['estimated_minutes_for_delivery'] = $estimated_minutes_for_delivery;

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



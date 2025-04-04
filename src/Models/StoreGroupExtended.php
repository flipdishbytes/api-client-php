<?php
/**
 * StoreGroupExtended
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
 * StoreGroupExtended Class Doc Comment
 *
 * @category Class
 * @description Store Group Extended
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreGroupExtended implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StoreGroupExtended';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_stores' => 'int',
        'grouped_coordinates' => '\Flipdish\\Client\Models\GroupedCoordinates[]',
        'store_headers' => '\Flipdish\\Client\Models\StoreHeader[]',
        'store_group_id' => 'int',
        'general_rating' => 'double',
        'general_rating_count' => 'int',
        'delivery_menu_message' => 'string',
        'pickup_menu_message' => 'string',
        'brand_ids' => 'string[]',
        'name' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_stores' => 'int32',
        'grouped_coordinates' => null,
        'store_headers' => null,
        'store_group_id' => 'int32',
        'general_rating' => 'double',
        'general_rating_count' => 'int32',
        'delivery_menu_message' => null,
        'pickup_menu_message' => null,
        'brand_ids' => null,
        'name' => null,
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
        'total_stores' => 'TotalStores',
        'grouped_coordinates' => 'GroupedCoordinates',
        'store_headers' => 'StoreHeaders',
        'store_group_id' => 'StoreGroupId',
        'general_rating' => 'GeneralRating',
        'general_rating_count' => 'GeneralRatingCount',
        'delivery_menu_message' => 'DeliveryMenuMessage',
        'pickup_menu_message' => 'PickupMenuMessage',
        'brand_ids' => 'BrandIds',
        'name' => 'Name',
        'currency' => 'Currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_stores' => 'setTotalStores',
        'grouped_coordinates' => 'setGroupedCoordinates',
        'store_headers' => 'setStoreHeaders',
        'store_group_id' => 'setStoreGroupId',
        'general_rating' => 'setGeneralRating',
        'general_rating_count' => 'setGeneralRatingCount',
        'delivery_menu_message' => 'setDeliveryMenuMessage',
        'pickup_menu_message' => 'setPickupMenuMessage',
        'brand_ids' => 'setBrandIds',
        'name' => 'setName',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_stores' => 'getTotalStores',
        'grouped_coordinates' => 'getGroupedCoordinates',
        'store_headers' => 'getStoreHeaders',
        'store_group_id' => 'getStoreGroupId',
        'general_rating' => 'getGeneralRating',
        'general_rating_count' => 'getGeneralRatingCount',
        'delivery_menu_message' => 'getDeliveryMenuMessage',
        'pickup_menu_message' => 'getPickupMenuMessage',
        'brand_ids' => 'getBrandIds',
        'name' => 'getName',
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
        $this->container['total_stores'] = isset($data['total_stores']) ? $data['total_stores'] : null;
        $this->container['grouped_coordinates'] = isset($data['grouped_coordinates']) ? $data['grouped_coordinates'] : null;
        $this->container['store_headers'] = isset($data['store_headers']) ? $data['store_headers'] : null;
        $this->container['store_group_id'] = isset($data['store_group_id']) ? $data['store_group_id'] : null;
        $this->container['general_rating'] = isset($data['general_rating']) ? $data['general_rating'] : null;
        $this->container['general_rating_count'] = isset($data['general_rating_count']) ? $data['general_rating_count'] : null;
        $this->container['delivery_menu_message'] = isset($data['delivery_menu_message']) ? $data['delivery_menu_message'] : null;
        $this->container['pickup_menu_message'] = isset($data['pickup_menu_message']) ? $data['pickup_menu_message'] : null;
        $this->container['brand_ids'] = isset($data['brand_ids']) ? $data['brand_ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
     * Gets total_stores
     *
     * @return int
     */
    public function getTotalStores()
    {
        return $this->container['total_stores'];
    }

    /**
     * Sets total_stores
     *
     * @param int $total_stores Total Amount of Stores
     *
     * @return $this
     */
    public function setTotalStores($total_stores)
    {
        $this->container['total_stores'] = $total_stores;

        return $this;
    }

    /**
     * Gets grouped_coordinates
     *
     * @return \Flipdish\\Client\Models\GroupedCoordinates[]
     */
    public function getGroupedCoordinates()
    {
        return $this->container['grouped_coordinates'];
    }

    /**
     * Sets grouped_coordinates
     *
     * @param \Flipdish\\Client\Models\GroupedCoordinates[] $grouped_coordinates Grouped store coordinates
     *
     * @return $this
     */
    public function setGroupedCoordinates($grouped_coordinates)
    {
        $this->container['grouped_coordinates'] = $grouped_coordinates;

        return $this;
    }

    /**
     * Gets store_headers
     *
     * @return \Flipdish\\Client\Models\StoreHeader[]
     */
    public function getStoreHeaders()
    {
        return $this->container['store_headers'];
    }

    /**
     * Sets store_headers
     *
     * @param \Flipdish\\Client\Models\StoreHeader[] $store_headers Store Headers associated with Store Group
     *
     * @return $this
     */
    public function setStoreHeaders($store_headers)
    {
        $this->container['store_headers'] = $store_headers;

        return $this;
    }

    /**
     * Gets store_group_id
     *
     * @return int
     */
    public function getStoreGroupId()
    {
        return $this->container['store_group_id'];
    }

    /**
     * Sets store_group_id
     *
     * @param int $store_group_id Unique Store Group Identifier
     *
     * @return $this
     */
    public function setStoreGroupId($store_group_id)
    {
        $this->container['store_group_id'] = $store_group_id;

        return $this;
    }

    /**
     * Gets general_rating
     *
     * @return double
     */
    public function getGeneralRating()
    {
        return $this->container['general_rating'];
    }

    /**
     * Sets general_rating
     *
     * @param double $general_rating Store Group rating
     *
     * @return $this
     */
    public function setGeneralRating($general_rating)
    {
        $this->container['general_rating'] = $general_rating;

        return $this;
    }

    /**
     * Gets general_rating_count
     *
     * @return int
     */
    public function getGeneralRatingCount()
    {
        return $this->container['general_rating_count'];
    }

    /**
     * Sets general_rating_count
     *
     * @param int $general_rating_count Store Group rating count
     *
     * @return $this
     */
    public function setGeneralRatingCount($general_rating_count)
    {
        $this->container['general_rating_count'] = $general_rating_count;

        return $this;
    }

    /**
     * Gets delivery_menu_message
     *
     * @return string
     */
    public function getDeliveryMenuMessage()
    {
        return $this->container['delivery_menu_message'];
    }

    /**
     * Sets delivery_menu_message
     *
     * @param string $delivery_menu_message Delivery menu message
     *
     * @return $this
     */
    public function setDeliveryMenuMessage($delivery_menu_message)
    {
        $this->container['delivery_menu_message'] = $delivery_menu_message;

        return $this;
    }

    /**
     * Gets pickup_menu_message
     *
     * @return string
     */
    public function getPickupMenuMessage()
    {
        return $this->container['pickup_menu_message'];
    }

    /**
     * Sets pickup_menu_message
     *
     * @param string $pickup_menu_message Pickup menu message
     *
     * @return $this
     */
    public function setPickupMenuMessage($pickup_menu_message)
    {
        $this->container['pickup_menu_message'] = $pickup_menu_message;

        return $this;
    }

    /**
     * Gets brand_ids
     *
     * @return string[]
     */
    public function getBrandIds()
    {
        return $this->container['brand_ids'];
    }

    /**
     * Sets brand_ids
     *
     * @param string[] $brand_ids List of brand ids (AppIds) that are associated with this store group
     *
     * @return $this
     */
    public function setBrandIds($brand_ids)
    {
        $this->container['brand_ids'] = $brand_ids;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Store Group Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $currency Currency used by the stores in this group
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



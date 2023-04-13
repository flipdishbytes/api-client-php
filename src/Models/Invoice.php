<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @description Invoice
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_id' => 'string',
        'number' => 'string',
        'total' => 'double',
        'currency' => 'string',
        'status' => 'string',
        'subscription_id' => 'string',
        'paid_at' => '\DateTime',
        'finalised_at' => '\DateTime',
        'pdf_link' => 'string',
        'hosted_url' => 'string',
        'overdue' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_id' => null,
        'number' => null,
        'total' => 'double',
        'currency' => null,
        'status' => null,
        'subscription_id' => null,
        'paid_at' => 'date-time',
        'finalised_at' => 'date-time',
        'pdf_link' => null,
        'hosted_url' => null,
        'overdue' => null
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
        'invoice_id' => 'InvoiceId',
        'number' => 'Number',
        'total' => 'Total',
        'currency' => 'Currency',
        'status' => 'Status',
        'subscription_id' => 'SubscriptionId',
        'paid_at' => 'PaidAt',
        'finalised_at' => 'FinalisedAt',
        'pdf_link' => 'PdfLink',
        'hosted_url' => 'HostedUrl',
        'overdue' => 'Overdue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'number' => 'setNumber',
        'total' => 'setTotal',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'subscription_id' => 'setSubscriptionId',
        'paid_at' => 'setPaidAt',
        'finalised_at' => 'setFinalisedAt',
        'pdf_link' => 'setPdfLink',
        'hosted_url' => 'setHostedUrl',
        'overdue' => 'setOverdue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'number' => 'getNumber',
        'total' => 'getTotal',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'subscription_id' => 'getSubscriptionId',
        'paid_at' => 'getPaidAt',
        'finalised_at' => 'getFinalisedAt',
        'pdf_link' => 'getPdfLink',
        'hosted_url' => 'getHostedUrl',
        'overdue' => 'getOverdue'
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
    const STATUS_DRAFT = 'Draft';
    const STATUS_OPEN = 'Open';
    const STATUS_PAID = 'Paid';
    const STATUS_UN_COLLECTIBLE = 'UnCollectible';
    const STATUS_VOID = 'Void';
    

    
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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_OPEN,
            self::STATUS_PAID,
            self::STATUS_UN_COLLECTIBLE,
            self::STATUS_VOID,
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
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['finalised_at'] = isset($data['finalised_at']) ? $data['finalised_at'] : null;
        $this->container['pdf_link'] = isset($data['pdf_link']) ? $data['pdf_link'] : null;
        $this->container['hosted_url'] = isset($data['hosted_url']) ? $data['hosted_url'] : null;
        $this->container['overdue'] = isset($data['overdue']) ? $data['overdue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoice_id'] === null) {
            $invalidProperties[] = "'invoice_id' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pdf_link'] === null) {
            $invalidProperties[] = "'pdf_link' can't be null";
        }
        if ($this->container['hosted_url'] === null) {
            $invalidProperties[] = "'hosted_url' can't be null";
        }
        if ($this->container['overdue'] === null) {
            $invalidProperties[] = "'overdue' can't be null";
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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id The invoice identifier
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Invoice number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double $total Total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
        if (!in_array($currency, $allowedValues, true)) {
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id The subscription identifier
     *
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param \DateTime $paid_at Paid At
     *
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets finalised_at
     *
     * @return \DateTime
     */
    public function getFinalisedAt()
    {
        return $this->container['finalised_at'];
    }

    /**
     * Sets finalised_at
     *
     * @param \DateTime $finalised_at Finalised At
     *
     * @return $this
     */
    public function setFinalisedAt($finalised_at)
    {
        $this->container['finalised_at'] = $finalised_at;

        return $this;
    }

    /**
     * Gets pdf_link
     *
     * @return string
     */
    public function getPdfLink()
    {
        return $this->container['pdf_link'];
    }

    /**
     * Sets pdf_link
     *
     * @param string $pdf_link Pdf Link
     *
     * @return $this
     */
    public function setPdfLink($pdf_link)
    {
        $this->container['pdf_link'] = $pdf_link;

        return $this;
    }

    /**
     * Gets hosted_url
     *
     * @return string
     */
    public function getHostedUrl()
    {
        return $this->container['hosted_url'];
    }

    /**
     * Sets hosted_url
     *
     * @param string $hosted_url Hosted Url
     *
     * @return $this
     */
    public function setHostedUrl($hosted_url)
    {
        $this->container['hosted_url'] = $hosted_url;

        return $this;
    }

    /**
     * Gets overdue
     *
     * @return bool
     */
    public function getOverdue()
    {
        return $this->container['overdue'];
    }

    /**
     * Sets overdue
     *
     * @param bool $overdue Overdue
     *
     * @return $this
     */
    public function setOverdue($overdue)
    {
        $this->container['overdue'] = $overdue;

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



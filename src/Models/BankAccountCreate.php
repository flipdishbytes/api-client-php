<?php
/**
 * BankAccountCreate
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
 * BankAccountCreate Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccountCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_address' => 'string',
        'bank_country_code' => 'string',
        'account_holder_address' => 'string',
        'account_holder_country_code' => 'string',
        'vat_number' => 'string',
        'currency_code' => 'string',
        'store_ids' => 'int[]',
        'bank_name' => 'string',
        'account_name' => 'string',
        'iban' => 'string',
        'swift' => 'string',
        'national_clearing_code' => 'string',
        'populated_account_fields' => '\Flipdish\\Client\Models\AccountFieldKeyValuePair[]',
        'rejection_reason' => 'string',
        'business_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_address' => null,
        'bank_country_code' => null,
        'account_holder_address' => null,
        'account_holder_country_code' => null,
        'vat_number' => null,
        'currency_code' => null,
        'store_ids' => 'int32',
        'bank_name' => null,
        'account_name' => null,
        'iban' => null,
        'swift' => null,
        'national_clearing_code' => null,
        'populated_account_fields' => null,
        'rejection_reason' => null,
        'business_type' => null
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
        'bank_address' => 'BankAddress',
        'bank_country_code' => 'BankCountryCode',
        'account_holder_address' => 'AccountHolderAddress',
        'account_holder_country_code' => 'AccountHolderCountryCode',
        'vat_number' => 'VatNumber',
        'currency_code' => 'CurrencyCode',
        'store_ids' => 'StoreIds',
        'bank_name' => 'BankName',
        'account_name' => 'AccountName',
        'iban' => 'Iban',
        'swift' => 'Swift',
        'national_clearing_code' => 'NationalClearingCode',
        'populated_account_fields' => 'PopulatedAccountFields',
        'rejection_reason' => 'RejectionReason',
        'business_type' => 'BusinessType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_address' => 'setBankAddress',
        'bank_country_code' => 'setBankCountryCode',
        'account_holder_address' => 'setAccountHolderAddress',
        'account_holder_country_code' => 'setAccountHolderCountryCode',
        'vat_number' => 'setVatNumber',
        'currency_code' => 'setCurrencyCode',
        'store_ids' => 'setStoreIds',
        'bank_name' => 'setBankName',
        'account_name' => 'setAccountName',
        'iban' => 'setIban',
        'swift' => 'setSwift',
        'national_clearing_code' => 'setNationalClearingCode',
        'populated_account_fields' => 'setPopulatedAccountFields',
        'rejection_reason' => 'setRejectionReason',
        'business_type' => 'setBusinessType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_address' => 'getBankAddress',
        'bank_country_code' => 'getBankCountryCode',
        'account_holder_address' => 'getAccountHolderAddress',
        'account_holder_country_code' => 'getAccountHolderCountryCode',
        'vat_number' => 'getVatNumber',
        'currency_code' => 'getCurrencyCode',
        'store_ids' => 'getStoreIds',
        'bank_name' => 'getBankName',
        'account_name' => 'getAccountName',
        'iban' => 'getIban',
        'swift' => 'getSwift',
        'national_clearing_code' => 'getNationalClearingCode',
        'populated_account_fields' => 'getPopulatedAccountFields',
        'rejection_reason' => 'getRejectionReason',
        'business_type' => 'getBusinessType'
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

    const CURRENCY_CODE_EUR = 'EUR';
    const CURRENCY_CODE_USD = 'USD';
    const CURRENCY_CODE_GBP = 'GBP';
    const CURRENCY_CODE_CAD = 'CAD';
    const CURRENCY_CODE_AUD = 'AUD';
    const CURRENCY_CODE_DJF = 'DJF';
    const CURRENCY_CODE_ZAR = 'ZAR';
    const CURRENCY_CODE_ETB = 'ETB';
    const CURRENCY_CODE_AED = 'AED';
    const CURRENCY_CODE_BHD = 'BHD';
    const CURRENCY_CODE_DZD = 'DZD';
    const CURRENCY_CODE_EGP = 'EGP';
    const CURRENCY_CODE_IQD = 'IQD';
    const CURRENCY_CODE_JOD = 'JOD';
    const CURRENCY_CODE_KWD = 'KWD';
    const CURRENCY_CODE_LBP = 'LBP';
    const CURRENCY_CODE_LYD = 'LYD';
    const CURRENCY_CODE_MAD = 'MAD';
    const CURRENCY_CODE_OMR = 'OMR';
    const CURRENCY_CODE_QAR = 'QAR';
    const CURRENCY_CODE_SAR = 'SAR';
    const CURRENCY_CODE_SYP = 'SYP';
    const CURRENCY_CODE_TND = 'TND';
    const CURRENCY_CODE_YER = 'YER';
    const CURRENCY_CODE_CLP = 'CLP';
    const CURRENCY_CODE_INR = 'INR';
    const CURRENCY_CODE_AZN = 'AZN';
    const CURRENCY_CODE_RUB = 'RUB';
    const CURRENCY_CODE_BYN = 'BYN';
    const CURRENCY_CODE_BGN = 'BGN';
    const CURRENCY_CODE_NGN = 'NGN';
    const CURRENCY_CODE_BDT = 'BDT';
    const CURRENCY_CODE_CNY = 'CNY';
    const CURRENCY_CODE_BAM = 'BAM';
    const CURRENCY_CODE_CZK = 'CZK';
    const CURRENCY_CODE_DKK = 'DKK';
    const CURRENCY_CODE_CHF = 'CHF';
    const CURRENCY_CODE_MVR = 'MVR';
    const CURRENCY_CODE_BTN = 'BTN';
    const CURRENCY_CODE_XCD = 'XCD';
    const CURRENCY_CODE_BZD = 'BZD';
    const CURRENCY_CODE_HKD = 'HKD';
    const CURRENCY_CODE_IDR = 'IDR';
    const CURRENCY_CODE_JMD = 'JMD';
    const CURRENCY_CODE_MYR = 'MYR';
    const CURRENCY_CODE_NZD = 'NZD';
    const CURRENCY_CODE_PHP = 'PHP';
    const CURRENCY_CODE_SGD = 'SGD';
    const CURRENCY_CODE_TTD = 'TTD';
    const CURRENCY_CODE_XDR = 'XDR';
    const CURRENCY_CODE_ARS = 'ARS';
    const CURRENCY_CODE_BOB = 'BOB';
    const CURRENCY_CODE_COP = 'COP';
    const CURRENCY_CODE_CRC = 'CRC';
    const CURRENCY_CODE_CUP = 'CUP';
    const CURRENCY_CODE_DOP = 'DOP';
    const CURRENCY_CODE_GTQ = 'GTQ';
    const CURRENCY_CODE_HNL = 'HNL';
    const CURRENCY_CODE_MXN = 'MXN';
    const CURRENCY_CODE_NIO = 'NIO';
    const CURRENCY_CODE_PAB = 'PAB';
    const CURRENCY_CODE_PEN = 'PEN';
    const CURRENCY_CODE_PYG = 'PYG';
    const CURRENCY_CODE_UYU = 'UYU';
    const CURRENCY_CODE_VEF = 'VEF';
    const CURRENCY_CODE_IRR = 'IRR';
    const CURRENCY_CODE_XOF = 'XOF';
    const CURRENCY_CODE_CDF = 'CDF';
    const CURRENCY_CODE_XAF = 'XAF';
    const CURRENCY_CODE_HTG = 'HTG';
    const CURRENCY_CODE_ILS = 'ILS';
    const CURRENCY_CODE_HRK = 'HRK';
    const CURRENCY_CODE_HUF = 'HUF';
    const CURRENCY_CODE_AMD = 'AMD';
    const CURRENCY_CODE_ISK = 'ISK';
    const CURRENCY_CODE_JPY = 'JPY';
    const CURRENCY_CODE_GEL = 'GEL';
    const CURRENCY_CODE_KZT = 'KZT';
    const CURRENCY_CODE_KHR = 'KHR';
    const CURRENCY_CODE_KRW = 'KRW';
    const CURRENCY_CODE_KGS = 'KGS';
    const CURRENCY_CODE_LAK = 'LAK';
    const CURRENCY_CODE_MKD = 'MKD';
    const CURRENCY_CODE_MNT = 'MNT';
    const CURRENCY_CODE_BND = 'BND';
    const CURRENCY_CODE_MMK = 'MMK';
    const CURRENCY_CODE_NOK = 'NOK';
    const CURRENCY_CODE_NPR = 'NPR';
    const CURRENCY_CODE_PKR = 'PKR';
    const CURRENCY_CODE_PLN = 'PLN';
    const CURRENCY_CODE_AFN = 'AFN';
    const CURRENCY_CODE_BRL = 'BRL';
    const CURRENCY_CODE_MDL = 'MDL';
    const CURRENCY_CODE_RON = 'RON';
    const CURRENCY_CODE_RWF = 'RWF';
    const CURRENCY_CODE_SEK = 'SEK';
    const CURRENCY_CODE_LKR = 'LKR';
    const CURRENCY_CODE_SOS = 'SOS';
    const CURRENCY_CODE_ALL = 'ALL';
    const CURRENCY_CODE_RSD = 'RSD';
    const CURRENCY_CODE_KES = 'KES';
    const CURRENCY_CODE_TJS = 'TJS';
    const CURRENCY_CODE_THB = 'THB';
    const CURRENCY_CODE_ERN = 'ERN';
    const CURRENCY_CODE_TMT = 'TMT';
    const CURRENCY_CODE_BWP = 'BWP';
    const CURRENCY_CODE__TRY = 'TRY';
    const CURRENCY_CODE_UAH = 'UAH';
    const CURRENCY_CODE_UZS = 'UZS';
    const CURRENCY_CODE_VND = 'VND';
    const CURRENCY_CODE_MOP = 'MOP';
    const CURRENCY_CODE_TWD = 'TWD';
    const CURRENCY_CODE_BMD = 'BMD';
    const BUSINESS_TYPE_INDIVIDUAL = 'Individual';
    const BUSINESS_TYPE_COMPANY = 'Company';
    const BUSINESS_TYPE_NON_PROFIT = 'NonProfit';
    const BUSINESS_TYPE_GOVERNMENT_ENTITY = 'GovernmentEntity';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyCodeAllowableValues()
    {
        return [
            self::CURRENCY_CODE_EUR,
            self::CURRENCY_CODE_USD,
            self::CURRENCY_CODE_GBP,
            self::CURRENCY_CODE_CAD,
            self::CURRENCY_CODE_AUD,
            self::CURRENCY_CODE_DJF,
            self::CURRENCY_CODE_ZAR,
            self::CURRENCY_CODE_ETB,
            self::CURRENCY_CODE_AED,
            self::CURRENCY_CODE_BHD,
            self::CURRENCY_CODE_DZD,
            self::CURRENCY_CODE_EGP,
            self::CURRENCY_CODE_IQD,
            self::CURRENCY_CODE_JOD,
            self::CURRENCY_CODE_KWD,
            self::CURRENCY_CODE_LBP,
            self::CURRENCY_CODE_LYD,
            self::CURRENCY_CODE_MAD,
            self::CURRENCY_CODE_OMR,
            self::CURRENCY_CODE_QAR,
            self::CURRENCY_CODE_SAR,
            self::CURRENCY_CODE_SYP,
            self::CURRENCY_CODE_TND,
            self::CURRENCY_CODE_YER,
            self::CURRENCY_CODE_CLP,
            self::CURRENCY_CODE_INR,
            self::CURRENCY_CODE_AZN,
            self::CURRENCY_CODE_RUB,
            self::CURRENCY_CODE_BYN,
            self::CURRENCY_CODE_BGN,
            self::CURRENCY_CODE_NGN,
            self::CURRENCY_CODE_BDT,
            self::CURRENCY_CODE_CNY,
            self::CURRENCY_CODE_BAM,
            self::CURRENCY_CODE_CZK,
            self::CURRENCY_CODE_DKK,
            self::CURRENCY_CODE_CHF,
            self::CURRENCY_CODE_MVR,
            self::CURRENCY_CODE_BTN,
            self::CURRENCY_CODE_XCD,
            self::CURRENCY_CODE_BZD,
            self::CURRENCY_CODE_HKD,
            self::CURRENCY_CODE_IDR,
            self::CURRENCY_CODE_JMD,
            self::CURRENCY_CODE_MYR,
            self::CURRENCY_CODE_NZD,
            self::CURRENCY_CODE_PHP,
            self::CURRENCY_CODE_SGD,
            self::CURRENCY_CODE_TTD,
            self::CURRENCY_CODE_XDR,
            self::CURRENCY_CODE_ARS,
            self::CURRENCY_CODE_BOB,
            self::CURRENCY_CODE_COP,
            self::CURRENCY_CODE_CRC,
            self::CURRENCY_CODE_CUP,
            self::CURRENCY_CODE_DOP,
            self::CURRENCY_CODE_GTQ,
            self::CURRENCY_CODE_HNL,
            self::CURRENCY_CODE_MXN,
            self::CURRENCY_CODE_NIO,
            self::CURRENCY_CODE_PAB,
            self::CURRENCY_CODE_PEN,
            self::CURRENCY_CODE_PYG,
            self::CURRENCY_CODE_UYU,
            self::CURRENCY_CODE_VEF,
            self::CURRENCY_CODE_IRR,
            self::CURRENCY_CODE_XOF,
            self::CURRENCY_CODE_CDF,
            self::CURRENCY_CODE_XAF,
            self::CURRENCY_CODE_HTG,
            self::CURRENCY_CODE_ILS,
            self::CURRENCY_CODE_HRK,
            self::CURRENCY_CODE_HUF,
            self::CURRENCY_CODE_AMD,
            self::CURRENCY_CODE_ISK,
            self::CURRENCY_CODE_JPY,
            self::CURRENCY_CODE_GEL,
            self::CURRENCY_CODE_KZT,
            self::CURRENCY_CODE_KHR,
            self::CURRENCY_CODE_KRW,
            self::CURRENCY_CODE_KGS,
            self::CURRENCY_CODE_LAK,
            self::CURRENCY_CODE_MKD,
            self::CURRENCY_CODE_MNT,
            self::CURRENCY_CODE_BND,
            self::CURRENCY_CODE_MMK,
            self::CURRENCY_CODE_NOK,
            self::CURRENCY_CODE_NPR,
            self::CURRENCY_CODE_PKR,
            self::CURRENCY_CODE_PLN,
            self::CURRENCY_CODE_AFN,
            self::CURRENCY_CODE_BRL,
            self::CURRENCY_CODE_MDL,
            self::CURRENCY_CODE_RON,
            self::CURRENCY_CODE_RWF,
            self::CURRENCY_CODE_SEK,
            self::CURRENCY_CODE_LKR,
            self::CURRENCY_CODE_SOS,
            self::CURRENCY_CODE_ALL,
            self::CURRENCY_CODE_RSD,
            self::CURRENCY_CODE_KES,
            self::CURRENCY_CODE_TJS,
            self::CURRENCY_CODE_THB,
            self::CURRENCY_CODE_ERN,
            self::CURRENCY_CODE_TMT,
            self::CURRENCY_CODE_BWP,
            self::CURRENCY_CODE__TRY,
            self::CURRENCY_CODE_UAH,
            self::CURRENCY_CODE_UZS,
            self::CURRENCY_CODE_VND,
            self::CURRENCY_CODE_MOP,
            self::CURRENCY_CODE_TWD,
            self::CURRENCY_CODE_BMD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_INDIVIDUAL,
            self::BUSINESS_TYPE_COMPANY,
            self::BUSINESS_TYPE_NON_PROFIT,
            self::BUSINESS_TYPE_GOVERNMENT_ENTITY,
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
        $this->container['bank_address'] = isset($data['bank_address']) ? $data['bank_address'] : null;
        $this->container['bank_country_code'] = isset($data['bank_country_code']) ? $data['bank_country_code'] : null;
        $this->container['account_holder_address'] = isset($data['account_holder_address']) ? $data['account_holder_address'] : null;
        $this->container['account_holder_country_code'] = isset($data['account_holder_country_code']) ? $data['account_holder_country_code'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['store_ids'] = isset($data['store_ids']) ? $data['store_ids'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['swift'] = isset($data['swift']) ? $data['swift'] : null;
        $this->container['national_clearing_code'] = isset($data['national_clearing_code']) ? $data['national_clearing_code'] : null;
        $this->container['populated_account_fields'] = isset($data['populated_account_fields']) ? $data['populated_account_fields'] : null;
        $this->container['rejection_reason'] = isset($data['rejection_reason']) ? $data['rejection_reason'] : null;
        $this->container['business_type'] = isset($data['business_type']) ? $data['business_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyCodeAllowableValues();
        if (!is_null($this->container['currency_code']) && !in_array($this->container['currency_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!is_null($this->container['business_type']) && !in_array($this->container['business_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'business_type', must be one of '%s'",
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
     * Gets bank_address
     *
     * @return string
     */
    public function getBankAddress()
    {
        return $this->container['bank_address'];
    }

    /**
     * Sets bank_address
     *
     * @param string $bank_address Address lf the bank
     *
     * @return $this
     */
    public function setBankAddress($bank_address)
    {
        $this->container['bank_address'] = $bank_address;

        return $this;
    }

    /**
     * Gets bank_country_code
     *
     * @return string
     */
    public function getBankCountryCode()
    {
        return $this->container['bank_country_code'];
    }

    /**
     * Sets bank_country_code
     *
     * @param string $bank_country_code CountryCode of the Bank Account
     *
     * @return $this
     */
    public function setBankCountryCode($bank_country_code)
    {
        $this->container['bank_country_code'] = $bank_country_code;

        return $this;
    }

    /**
     * Gets account_holder_address
     *
     * @return string
     */
    public function getAccountHolderAddress()
    {
        return $this->container['account_holder_address'];
    }

    /**
     * Sets account_holder_address
     *
     * @param string $account_holder_address Account Holders Address
     *
     * @return $this
     */
    public function setAccountHolderAddress($account_holder_address)
    {
        $this->container['account_holder_address'] = $account_holder_address;

        return $this;
    }

    /**
     * Gets account_holder_country_code
     *
     * @return string
     */
    public function getAccountHolderCountryCode()
    {
        return $this->container['account_holder_country_code'];
    }

    /**
     * Sets account_holder_country_code
     *
     * @param string $account_holder_country_code Account Holders Country Code
     *
     * @return $this
     */
    public function setAccountHolderCountryCode($account_holder_country_code)
    {
        $this->container['account_holder_country_code'] = $account_holder_country_code;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number Account Holders Vat Number
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Currency of Account
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $allowedValues = $this->getCurrencyCodeAllowableValues();
        if (!is_null($currency_code) && !in_array($currency_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency_code'] = $currency_code;

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
     * @param int[] $store_ids List of stores to attach to Account
     *
     * @return $this
     */
    public function setStoreIds($store_ids)
    {
        $this->container['store_ids'] = $store_ids;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name Name of Bank
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

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
     * @param string $account_name Name of this account
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban IBAN of this account
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets swift
     *
     * @return string
     */
    public function getSwift()
    {
        return $this->container['swift'];
    }

    /**
     * Sets swift
     *
     * @param string $swift SWIFT of this bank account
     *
     * @return $this
     */
    public function setSwift($swift)
    {
        $this->container['swift'] = $swift;

        return $this;
    }

    /**
     * Gets national_clearing_code
     *
     * @return string
     */
    public function getNationalClearingCode()
    {
        return $this->container['national_clearing_code'];
    }

    /**
     * Sets national_clearing_code
     *
     * @param string $national_clearing_code National Clearing Code (BSB in Australia, Routing Number in USA/Canada, NCC in NZ)
     *
     * @return $this
     */
    public function setNationalClearingCode($national_clearing_code)
    {
        $this->container['national_clearing_code'] = $national_clearing_code;

        return $this;
    }

    /**
     * Gets populated_account_fields
     *
     * @return \Flipdish\\Client\Models\AccountFieldKeyValuePair[]
     */
    public function getPopulatedAccountFields()
    {
        return $this->container['populated_account_fields'];
    }

    /**
     * Sets populated_account_fields
     *
     * @param \Flipdish\\Client\Models\AccountFieldKeyValuePair[] $populated_account_fields A list of one or more populated account fields (field key-value pairs).  If this list contains at least one item, the Iban, Swift and NationalClearingCode fields will be ignored.
     *
     * @return $this
     */
    public function setPopulatedAccountFields($populated_account_fields)
    {
        $this->container['populated_account_fields'] = $populated_account_fields;

        return $this;
    }

    /**
     * Gets rejection_reason
     *
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param string $rejection_reason Reason for Rejection
     *
     * @return $this
     */
    public function setRejectionReason($rejection_reason)
    {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string $business_type Business Type
     *
     * @return $this
     */
    public function setBusinessType($business_type)
    {
        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!is_null($business_type) && !in_array($business_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'business_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['business_type'] = $business_type;

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



<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @description BANK ACCOUNT
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'account_name' => 'string',
        'iban' => 'string',
        'swift' => 'string',
        'populated_account_fields' => '\Flipdish\\Client\Models\AccountFieldKeyValuePair[]',
        'account_state' => 'string',
        'store_names' => 'string[]',
        'bank_address' => 'string',
        'bank_country_code' => 'string',
        'account_holder_address' => 'string',
        'account_holder_country_code' => 'string',
        'vat_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'account_name' => null,
        'iban' => null,
        'swift' => null,
        'populated_account_fields' => null,
        'account_state' => null,
        'store_names' => null,
        'bank_address' => null,
        'bank_country_code' => null,
        'account_holder_address' => null,
        'account_holder_country_code' => null,
        'vat_number' => null
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
        'id' => 'Id',
        'account_name' => 'AccountName',
        'iban' => 'Iban',
        'swift' => 'Swift',
        'populated_account_fields' => 'PopulatedAccountFields',
        'account_state' => 'AccountState',
        'store_names' => 'StoreNames',
        'bank_address' => 'BankAddress',
        'bank_country_code' => 'BankCountryCode',
        'account_holder_address' => 'AccountHolderAddress',
        'account_holder_country_code' => 'AccountHolderCountryCode',
        'vat_number' => 'VatNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_name' => 'setAccountName',
        'iban' => 'setIban',
        'swift' => 'setSwift',
        'populated_account_fields' => 'setPopulatedAccountFields',
        'account_state' => 'setAccountState',
        'store_names' => 'setStoreNames',
        'bank_address' => 'setBankAddress',
        'bank_country_code' => 'setBankCountryCode',
        'account_holder_address' => 'setAccountHolderAddress',
        'account_holder_country_code' => 'setAccountHolderCountryCode',
        'vat_number' => 'setVatNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_name' => 'getAccountName',
        'iban' => 'getIban',
        'swift' => 'getSwift',
        'populated_account_fields' => 'getPopulatedAccountFields',
        'account_state' => 'getAccountState',
        'store_names' => 'getStoreNames',
        'bank_address' => 'getBankAddress',
        'bank_country_code' => 'getBankCountryCode',
        'account_holder_address' => 'getAccountHolderAddress',
        'account_holder_country_code' => 'getAccountHolderCountryCode',
        'vat_number' => 'getVatNumber'
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

    const ACCOUNT_STATE_UNVERIFIED = 'Unverified';
    const ACCOUNT_STATE_AWATING_VERIFICATION = 'AwatingVerification';
    const ACCOUNT_STATE_VERIFIED = 'Verified';
    const ACCOUNT_STATE_GRANDFATHERED = 'Grandfathered';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountStateAllowableValues()
    {
        return [
            self::ACCOUNT_STATE_UNVERIFIED,
            self::ACCOUNT_STATE_AWATING_VERIFICATION,
            self::ACCOUNT_STATE_VERIFIED,
            self::ACCOUNT_STATE_GRANDFATHERED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['swift'] = isset($data['swift']) ? $data['swift'] : null;
        $this->container['populated_account_fields'] = isset($data['populated_account_fields']) ? $data['populated_account_fields'] : null;
        $this->container['account_state'] = isset($data['account_state']) ? $data['account_state'] : null;
        $this->container['store_names'] = isset($data['store_names']) ? $data['store_names'] : null;
        $this->container['bank_address'] = isset($data['bank_address']) ? $data['bank_address'] : null;
        $this->container['bank_country_code'] = isset($data['bank_country_code']) ? $data['bank_country_code'] : null;
        $this->container['account_holder_address'] = isset($data['account_holder_address']) ? $data['account_holder_address'] : null;
        $this->container['account_holder_country_code'] = isset($data['account_holder_country_code']) ? $data['account_holder_country_code'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccountStateAllowableValues();
        if (!is_null($this->container['account_state']) && !in_array($this->container['account_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_state', must be one of '%s'",
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Id of this account
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param \Flipdish\\Client\Models\AccountFieldKeyValuePair[] $populated_account_fields A list of one or more populated account fields (field key-value pairs).  If this list contains at least one item, the Iban, Swift and NationalClearingCode fields should be ignored.
     *
     * @return $this
     */
    public function setPopulatedAccountFields($populated_account_fields)
    {
        $this->container['populated_account_fields'] = $populated_account_fields;

        return $this;
    }

    /**
     * Gets account_state
     *
     * @return string
     */
    public function getAccountState()
    {
        return $this->container['account_state'];
    }

    /**
     * Sets account_state
     *
     * @param string $account_state Status of Account
     *
     * @return $this
     */
    public function setAccountState($account_state)
    {
        $allowedValues = $this->getAccountStateAllowableValues();
        if (!is_null($account_state) && !in_array($account_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_state'] = $account_state;

        return $this;
    }

    /**
     * Gets store_names
     *
     * @return string[]
     */
    public function getStoreNames()
    {
        return $this->container['store_names'];
    }

    /**
     * Sets store_names
     *
     * @param string[] $store_names Store Names that are attached to this account
     *
     * @return $this
     */
    public function setStoreNames($store_names)
    {
        $this->container['store_names'] = $store_names;

        return $this;
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



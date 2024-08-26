<?php
/**
 * PaymentTerminalTransactionDetails
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
 * PaymentTerminalTransactionDetails Class Doc Comment
 *
 * @category Class
 * @description Details of Payment Terminal Transaction
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTerminalTransactionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTerminalTransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_scheme_name' => 'string',
        'date_of_expiry' => 'string',
        'auth_code' => 'string',
        'transaction_result' => 'string',
        'primary_account_number' => 'string',
        'cardholder_verification_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_scheme_name' => null,
        'date_of_expiry' => null,
        'auth_code' => null,
        'transaction_result' => null,
        'primary_account_number' => null,
        'cardholder_verification_method' => null
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
        'card_scheme_name' => 'CardSchemeName',
        'date_of_expiry' => 'DateOfExpiry',
        'auth_code' => 'AuthCode',
        'transaction_result' => 'TransactionResult',
        'primary_account_number' => 'PrimaryAccountNumber',
        'cardholder_verification_method' => 'CardholderVerificationMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_scheme_name' => 'setCardSchemeName',
        'date_of_expiry' => 'setDateOfExpiry',
        'auth_code' => 'setAuthCode',
        'transaction_result' => 'setTransactionResult',
        'primary_account_number' => 'setPrimaryAccountNumber',
        'cardholder_verification_method' => 'setCardholderVerificationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_scheme_name' => 'getCardSchemeName',
        'date_of_expiry' => 'getDateOfExpiry',
        'auth_code' => 'getAuthCode',
        'transaction_result' => 'getTransactionResult',
        'primary_account_number' => 'getPrimaryAccountNumber',
        'cardholder_verification_method' => 'getCardholderVerificationMethod'
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
        $this->container['card_scheme_name'] = isset($data['card_scheme_name']) ? $data['card_scheme_name'] : null;
        $this->container['date_of_expiry'] = isset($data['date_of_expiry']) ? $data['date_of_expiry'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['transaction_result'] = isset($data['transaction_result']) ? $data['transaction_result'] : null;
        $this->container['primary_account_number'] = isset($data['primary_account_number']) ? $data['primary_account_number'] : null;
        $this->container['cardholder_verification_method'] = isset($data['cardholder_verification_method']) ? $data['cardholder_verification_method'] : null;
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
     * Gets card_scheme_name
     *
     * @return string
     */
    public function getCardSchemeName()
    {
        return $this->container['card_scheme_name'];
    }

    /**
     * Sets card_scheme_name
     *
     * @param string $card_scheme_name Card Type
     *
     * @return $this
     */
    public function setCardSchemeName($card_scheme_name)
    {
        $this->container['card_scheme_name'] = $card_scheme_name;

        return $this;
    }

    /**
     * Gets date_of_expiry
     *
     * @return string
     */
    public function getDateOfExpiry()
    {
        return $this->container['date_of_expiry'];
    }

    /**
     * Sets date_of_expiry
     *
     * @param string $date_of_expiry Expirey Date on Card
     *
     * @return $this
     */
    public function setDateOfExpiry($date_of_expiry)
    {
        $this->container['date_of_expiry'] = $date_of_expiry;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code AuthCode
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets transaction_result
     *
     * @return string
     */
    public function getTransactionResult()
    {
        return $this->container['transaction_result'];
    }

    /**
     * Sets transaction_result
     *
     * @param string $transaction_result State of Request, \"PENDING\" is not yet completed
     *
     * @return $this
     */
    public function setTransactionResult($transaction_result)
    {
        $this->container['transaction_result'] = $transaction_result;

        return $this;
    }

    /**
     * Gets primary_account_number
     *
     * @return string
     */
    public function getPrimaryAccountNumber()
    {
        return $this->container['primary_account_number'];
    }

    /**
     * Sets primary_account_number
     *
     * @param string $primary_account_number Masked PAN
     *
     * @return $this
     */
    public function setPrimaryAccountNumber($primary_account_number)
    {
        $this->container['primary_account_number'] = $primary_account_number;

        return $this;
    }

    /**
     * Gets cardholder_verification_method
     *
     * @return string
     */
    public function getCardholderVerificationMethod()
    {
        return $this->container['cardholder_verification_method'];
    }

    /**
     * Sets cardholder_verification_method
     *
     * @param string $cardholder_verification_method Type of Verification.
     *
     * @return $this
     */
    public function setCardholderVerificationMethod($cardholder_verification_method)
    {
        $this->container['cardholder_verification_method'] = $cardholder_verification_method;

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



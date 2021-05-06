<?php
/**
 * VoucherSummary
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
 * Swagger Codegen version: 2.4.19
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
 * VoucherSummary Class Doc Comment
 *
 * @category Class
 * @description Voucher Summary
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'voucher_id' => 'int',
        'code' => 'string',
        'status' => 'string',
        'voucher_type' => 'string',
        'voucher_sub_type' => 'string',
        'description' => 'string',
        'is_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'voucher_id' => 'int32',
        'code' => null,
        'status' => null,
        'voucher_type' => null,
        'voucher_sub_type' => null,
        'description' => null,
        'is_enabled' => null
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
        'voucher_id' => 'VoucherId',
        'code' => 'Code',
        'status' => 'Status',
        'voucher_type' => 'VoucherType',
        'voucher_sub_type' => 'VoucherSubType',
        'description' => 'Description',
        'is_enabled' => 'IsEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucher_id' => 'setVoucherId',
        'code' => 'setCode',
        'status' => 'setStatus',
        'voucher_type' => 'setVoucherType',
        'voucher_sub_type' => 'setVoucherSubType',
        'description' => 'setDescription',
        'is_enabled' => 'setIsEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucher_id' => 'getVoucherId',
        'code' => 'getCode',
        'status' => 'getStatus',
        'voucher_type' => 'getVoucherType',
        'voucher_sub_type' => 'getVoucherSubType',
        'description' => 'getDescription',
        'is_enabled' => 'getIsEnabled'
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

    const STATUS_VALID = 'Valid';
    const STATUS_NOT_YET_VALID = 'NotYetValid';
    const STATUS_EXPIRED = 'Expired';
    const STATUS_USED = 'Used';
    const STATUS_DISABLED = 'Disabled';
    const VOUCHER_TYPE_PERCENTAGE_DISCOUNT = 'PercentageDiscount';
    const VOUCHER_TYPE_LUMP_DISCOUNT = 'LumpDiscount';
    const VOUCHER_TYPE_ADD_ITEM = 'AddItem';
    const VOUCHER_TYPE_CREDIT_NOTE = 'CreditNote';
    const VOUCHER_SUB_TYPE_NONE = 'None';
    const VOUCHER_SUB_TYPE_SIGN_UP = 'SignUp';
    const VOUCHER_SUB_TYPE_LOYALTY = 'Loyalty';
    const VOUCHER_SUB_TYPE_LOYALTY25 = 'Loyalty25';
    const VOUCHER_SUB_TYPE_RETENTION = 'Retention';
    const VOUCHER_SUB_TYPE_SECONDARY_RETENTION = 'SecondaryRetention';
    const VOUCHER_SUB_TYPE_CUSTOM = 'Custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VALID,
            self::STATUS_NOT_YET_VALID,
            self::STATUS_EXPIRED,
            self::STATUS_USED,
            self::STATUS_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherTypeAllowableValues()
    {
        return [
            self::VOUCHER_TYPE_PERCENTAGE_DISCOUNT,
            self::VOUCHER_TYPE_LUMP_DISCOUNT,
            self::VOUCHER_TYPE_ADD_ITEM,
            self::VOUCHER_TYPE_CREDIT_NOTE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherSubTypeAllowableValues()
    {
        return [
            self::VOUCHER_SUB_TYPE_NONE,
            self::VOUCHER_SUB_TYPE_SIGN_UP,
            self::VOUCHER_SUB_TYPE_LOYALTY,
            self::VOUCHER_SUB_TYPE_LOYALTY25,
            self::VOUCHER_SUB_TYPE_RETENTION,
            self::VOUCHER_SUB_TYPE_SECONDARY_RETENTION,
            self::VOUCHER_SUB_TYPE_CUSTOM,
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
        $this->container['voucher_id'] = isset($data['voucher_id']) ? $data['voucher_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['voucher_type'] = isset($data['voucher_type']) ? $data['voucher_type'] : null;
        $this->container['voucher_sub_type'] = isset($data['voucher_sub_type']) ? $data['voucher_sub_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($this->container['voucher_type']) && !in_array($this->container['voucher_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voucher_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVoucherSubTypeAllowableValues();
        if (!is_null($this->container['voucher_sub_type']) && !in_array($this->container['voucher_sub_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voucher_sub_type', must be one of '%s'",
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
     * Gets voucher_id
     *
     * @return int
     */
    public function getVoucherId()
    {
        return $this->container['voucher_id'];
    }

    /**
     * Sets voucher_id
     *
     * @param int $voucher_id Voucher Id
     *
     * @return $this
     */
    public function setVoucherId($voucher_id)
    {
        $this->container['voucher_id'] = $voucher_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Voucher Code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $status Voucher Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets voucher_type
     *
     * @return string
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param string $voucher_type Voucher Type
     *
     * @return $this
     */
    public function setVoucherType($voucher_type)
    {
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($voucher_type) && !in_array($voucher_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voucher_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets voucher_sub_type
     *
     * @return string
     */
    public function getVoucherSubType()
    {
        return $this->container['voucher_sub_type'];
    }

    /**
     * Sets voucher_sub_type
     *
     * @param string $voucher_sub_type Voucher Sub Type
     *
     * @return $this
     */
    public function setVoucherSubType($voucher_sub_type)
    {
        $allowedValues = $this->getVoucherSubTypeAllowableValues();
        if (!is_null($voucher_sub_type) && !in_array($voucher_sub_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voucher_sub_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucher_sub_type'] = $voucher_sub_type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Voucher Description (Visible on printout)
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Is voucher enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

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



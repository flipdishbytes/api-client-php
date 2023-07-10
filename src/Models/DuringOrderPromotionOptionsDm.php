<?php
/**
 * DuringOrderPromotionOptionsDm
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
 * DuringOrderPromotionOptionsDm Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DuringOrderPromotionOptionsDm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DuringOrderPromotionOptionsDm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'during_order_promotion_type' => 'string',
        'min_sms_share_count' => 'int',
        'free_coke_count' => 'int',
        'promotion_period_seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'during_order_promotion_type' => null,
        'min_sms_share_count' => 'int32',
        'free_coke_count' => 'int32',
        'promotion_period_seconds' => 'int32'
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
        'during_order_promotion_type' => 'DuringOrderPromotionType',
        'min_sms_share_count' => 'MinSmsShareCount',
        'free_coke_count' => 'FreeCokeCount',
        'promotion_period_seconds' => 'PromotionPeriodSeconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'during_order_promotion_type' => 'setDuringOrderPromotionType',
        'min_sms_share_count' => 'setMinSmsShareCount',
        'free_coke_count' => 'setFreeCokeCount',
        'promotion_period_seconds' => 'setPromotionPeriodSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'during_order_promotion_type' => 'getDuringOrderPromotionType',
        'min_sms_share_count' => 'getMinSmsShareCount',
        'free_coke_count' => 'getFreeCokeCount',
        'promotion_period_seconds' => 'getPromotionPeriodSeconds'
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

    const DURING_ORDER_PROMOTION_TYPE_NONE = 'None';
    const DURING_ORDER_PROMOTION_TYPE_BUMP_FREE_CHOCOLATE = 'BumpFreeChocolate';
    const DURING_ORDER_PROMOTION_TYPE_BUMP_FREE_COKE = 'BumpFreeCoke';
    const DURING_ORDER_PROMOTION_TYPE_SMS_INVITE_FREE_CHOCOLATE = 'SmsInviteFreeChocolate';
    const DURING_ORDER_PROMOTION_TYPE_SMS_INVITE_FREE_COKE = 'SmsInviteFreeCoke';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDuringOrderPromotionTypeAllowableValues()
    {
        return [
            self::DURING_ORDER_PROMOTION_TYPE_NONE,
            self::DURING_ORDER_PROMOTION_TYPE_BUMP_FREE_CHOCOLATE,
            self::DURING_ORDER_PROMOTION_TYPE_BUMP_FREE_COKE,
            self::DURING_ORDER_PROMOTION_TYPE_SMS_INVITE_FREE_CHOCOLATE,
            self::DURING_ORDER_PROMOTION_TYPE_SMS_INVITE_FREE_COKE,
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
        $this->container['during_order_promotion_type'] = isset($data['during_order_promotion_type']) ? $data['during_order_promotion_type'] : null;
        $this->container['min_sms_share_count'] = isset($data['min_sms_share_count']) ? $data['min_sms_share_count'] : null;
        $this->container['free_coke_count'] = isset($data['free_coke_count']) ? $data['free_coke_count'] : null;
        $this->container['promotion_period_seconds'] = isset($data['promotion_period_seconds']) ? $data['promotion_period_seconds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDuringOrderPromotionTypeAllowableValues();
        if (!is_null($this->container['during_order_promotion_type']) && !in_array($this->container['during_order_promotion_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'during_order_promotion_type', must be one of '%s'",
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
     * Gets during_order_promotion_type
     *
     * @return string
     */
    public function getDuringOrderPromotionType()
    {
        return $this->container['during_order_promotion_type'];
    }

    /**
     * Sets during_order_promotion_type
     *
     * @param string $during_order_promotion_type during_order_promotion_type
     *
     * @return $this
     */
    public function setDuringOrderPromotionType($during_order_promotion_type)
    {
        $allowedValues = $this->getDuringOrderPromotionTypeAllowableValues();
        if (!is_null($during_order_promotion_type) && !in_array($during_order_promotion_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'during_order_promotion_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['during_order_promotion_type'] = $during_order_promotion_type;

        return $this;
    }

    /**
     * Gets min_sms_share_count
     *
     * @return int
     */
    public function getMinSmsShareCount()
    {
        return $this->container['min_sms_share_count'];
    }

    /**
     * Sets min_sms_share_count
     *
     * @param int $min_sms_share_count min_sms_share_count
     *
     * @return $this
     */
    public function setMinSmsShareCount($min_sms_share_count)
    {
        $this->container['min_sms_share_count'] = $min_sms_share_count;

        return $this;
    }

    /**
     * Gets free_coke_count
     *
     * @return int
     */
    public function getFreeCokeCount()
    {
        return $this->container['free_coke_count'];
    }

    /**
     * Sets free_coke_count
     *
     * @param int $free_coke_count free_coke_count
     *
     * @return $this
     */
    public function setFreeCokeCount($free_coke_count)
    {
        $this->container['free_coke_count'] = $free_coke_count;

        return $this;
    }

    /**
     * Gets promotion_period_seconds
     *
     * @return int
     */
    public function getPromotionPeriodSeconds()
    {
        return $this->container['promotion_period_seconds'];
    }

    /**
     * Sets promotion_period_seconds
     *
     * @param int $promotion_period_seconds promotion_period_seconds
     *
     * @return $this
     */
    public function setPromotionPeriodSeconds($promotion_period_seconds)
    {
        $this->container['promotion_period_seconds'] = $promotion_period_seconds;

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


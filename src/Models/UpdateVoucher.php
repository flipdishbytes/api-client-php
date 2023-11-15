<?php
/**
 * UpdateVoucher
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
 * UpdateVoucher Class Doc Comment
 *
 * @category Class
 * @description Update Voucher
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateVoucher implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'promotion_id' => 'int',
        'promotion_name' => 'string',
        'promotion_award_menu_item_public_ids' => 'string[]',
        'code' => 'string',
        'description' => 'string',
        'stores' => 'int[]',
        'valid_on_orders_over' => 'double',
        'takes_priority' => 'bool',
        'is_enabled' => 'bool',
        'is_automatically_applied' => 'bool',
        'include_delivery_fee' => 'bool',
        'is_valid_for_delivery_orders' => 'bool',
        'is_valid_for_pickup_orders' => 'bool',
        'is_valid_for_orders_payed_online' => 'bool',
        'is_valid_for_orders_payed_by_cash' => 'bool',
        'is_valid_for_first_order_only' => 'bool',
        'is_valid_once_per_customer' => 'bool',
        'is_valid_only_once' => 'bool',
        'start_date' => '\DateTime',
        'expiry_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'promotion_id' => 'int32',
        'promotion_name' => null,
        'promotion_award_menu_item_public_ids' => 'uuid',
        'code' => null,
        'description' => null,
        'stores' => 'int32',
        'valid_on_orders_over' => 'double',
        'takes_priority' => null,
        'is_enabled' => null,
        'is_automatically_applied' => null,
        'include_delivery_fee' => null,
        'is_valid_for_delivery_orders' => null,
        'is_valid_for_pickup_orders' => null,
        'is_valid_for_orders_payed_online' => null,
        'is_valid_for_orders_payed_by_cash' => null,
        'is_valid_for_first_order_only' => null,
        'is_valid_once_per_customer' => null,
        'is_valid_only_once' => null,
        'start_date' => 'date-time',
        'expiry_date' => 'date-time'
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
        'promotion_id' => 'PromotionId',
        'promotion_name' => 'PromotionName',
        'promotion_award_menu_item_public_ids' => 'PromotionAwardMenuItemPublicIds',
        'code' => 'Code',
        'description' => 'Description',
        'stores' => 'Stores',
        'valid_on_orders_over' => 'ValidOnOrdersOver',
        'takes_priority' => 'TakesPriority',
        'is_enabled' => 'IsEnabled',
        'is_automatically_applied' => 'IsAutomaticallyApplied',
        'include_delivery_fee' => 'IncludeDeliveryFee',
        'is_valid_for_delivery_orders' => 'IsValidForDeliveryOrders',
        'is_valid_for_pickup_orders' => 'IsValidForPickupOrders',
        'is_valid_for_orders_payed_online' => 'IsValidForOrdersPayedOnline',
        'is_valid_for_orders_payed_by_cash' => 'IsValidForOrdersPayedByCash',
        'is_valid_for_first_order_only' => 'IsValidForFirstOrderOnly',
        'is_valid_once_per_customer' => 'IsValidOncePerCustomer',
        'is_valid_only_once' => 'IsValidOnlyOnce',
        'start_date' => 'StartDate',
        'expiry_date' => 'ExpiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promotion_id' => 'setPromotionId',
        'promotion_name' => 'setPromotionName',
        'promotion_award_menu_item_public_ids' => 'setPromotionAwardMenuItemPublicIds',
        'code' => 'setCode',
        'description' => 'setDescription',
        'stores' => 'setStores',
        'valid_on_orders_over' => 'setValidOnOrdersOver',
        'takes_priority' => 'setTakesPriority',
        'is_enabled' => 'setIsEnabled',
        'is_automatically_applied' => 'setIsAutomaticallyApplied',
        'include_delivery_fee' => 'setIncludeDeliveryFee',
        'is_valid_for_delivery_orders' => 'setIsValidForDeliveryOrders',
        'is_valid_for_pickup_orders' => 'setIsValidForPickupOrders',
        'is_valid_for_orders_payed_online' => 'setIsValidForOrdersPayedOnline',
        'is_valid_for_orders_payed_by_cash' => 'setIsValidForOrdersPayedByCash',
        'is_valid_for_first_order_only' => 'setIsValidForFirstOrderOnly',
        'is_valid_once_per_customer' => 'setIsValidOncePerCustomer',
        'is_valid_only_once' => 'setIsValidOnlyOnce',
        'start_date' => 'setStartDate',
        'expiry_date' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promotion_id' => 'getPromotionId',
        'promotion_name' => 'getPromotionName',
        'promotion_award_menu_item_public_ids' => 'getPromotionAwardMenuItemPublicIds',
        'code' => 'getCode',
        'description' => 'getDescription',
        'stores' => 'getStores',
        'valid_on_orders_over' => 'getValidOnOrdersOver',
        'takes_priority' => 'getTakesPriority',
        'is_enabled' => 'getIsEnabled',
        'is_automatically_applied' => 'getIsAutomaticallyApplied',
        'include_delivery_fee' => 'getIncludeDeliveryFee',
        'is_valid_for_delivery_orders' => 'getIsValidForDeliveryOrders',
        'is_valid_for_pickup_orders' => 'getIsValidForPickupOrders',
        'is_valid_for_orders_payed_online' => 'getIsValidForOrdersPayedOnline',
        'is_valid_for_orders_payed_by_cash' => 'getIsValidForOrdersPayedByCash',
        'is_valid_for_first_order_only' => 'getIsValidForFirstOrderOnly',
        'is_valid_once_per_customer' => 'getIsValidOncePerCustomer',
        'is_valid_only_once' => 'getIsValidOnlyOnce',
        'start_date' => 'getStartDate',
        'expiry_date' => 'getExpiryDate'
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
        $this->container['promotion_id'] = isset($data['promotion_id']) ? $data['promotion_id'] : null;
        $this->container['promotion_name'] = isset($data['promotion_name']) ? $data['promotion_name'] : null;
        $this->container['promotion_award_menu_item_public_ids'] = isset($data['promotion_award_menu_item_public_ids']) ? $data['promotion_award_menu_item_public_ids'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['stores'] = isset($data['stores']) ? $data['stores'] : null;
        $this->container['valid_on_orders_over'] = isset($data['valid_on_orders_over']) ? $data['valid_on_orders_over'] : null;
        $this->container['takes_priority'] = isset($data['takes_priority']) ? $data['takes_priority'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['is_automatically_applied'] = isset($data['is_automatically_applied']) ? $data['is_automatically_applied'] : null;
        $this->container['include_delivery_fee'] = isset($data['include_delivery_fee']) ? $data['include_delivery_fee'] : null;
        $this->container['is_valid_for_delivery_orders'] = isset($data['is_valid_for_delivery_orders']) ? $data['is_valid_for_delivery_orders'] : null;
        $this->container['is_valid_for_pickup_orders'] = isset($data['is_valid_for_pickup_orders']) ? $data['is_valid_for_pickup_orders'] : null;
        $this->container['is_valid_for_orders_payed_online'] = isset($data['is_valid_for_orders_payed_online']) ? $data['is_valid_for_orders_payed_online'] : null;
        $this->container['is_valid_for_orders_payed_by_cash'] = isset($data['is_valid_for_orders_payed_by_cash']) ? $data['is_valid_for_orders_payed_by_cash'] : null;
        $this->container['is_valid_for_first_order_only'] = isset($data['is_valid_for_first_order_only']) ? $data['is_valid_for_first_order_only'] : null;
        $this->container['is_valid_once_per_customer'] = isset($data['is_valid_once_per_customer']) ? $data['is_valid_once_per_customer'] : null;
        $this->container['is_valid_only_once'] = isset($data['is_valid_only_once']) ? $data['is_valid_only_once'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
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
     * Gets promotion_id
     *
     * @return int
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id
     *
     * @param int $promotion_id Promotion ID to update
     *
     * @return $this
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets promotion_name
     *
     * @return string
     */
    public function getPromotionName()
    {
        return $this->container['promotion_name'];
    }

    /**
     * Sets promotion_name
     *
     * @param string $promotion_name The updated name of the promotion
     *
     * @return $this
     */
    public function setPromotionName($promotion_name)
    {
        $this->container['promotion_name'] = $promotion_name;

        return $this;
    }

    /**
     * Gets promotion_award_menu_item_public_ids
     *
     * @return string[]
     */
    public function getPromotionAwardMenuItemPublicIds()
    {
        return $this->container['promotion_award_menu_item_public_ids'];
    }

    /**
     * Sets promotion_award_menu_item_public_ids
     *
     * @param string[] $promotion_award_menu_item_public_ids The updated menu items that the promotion awards
     *
     * @return $this
     */
    public function setPromotionAwardMenuItemPublicIds($promotion_award_menu_item_public_ids)
    {
        $this->container['promotion_award_menu_item_public_ids'] = $promotion_award_menu_item_public_ids;

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
     * Gets stores
     *
     * @return int[]
     */
    public function getStores()
    {
        return $this->container['stores'];
    }

    /**
     * Sets stores
     *
     * @param int[] $stores Stores that this voucher applies to
     *
     * @return $this
     */
    public function setStores($stores)
    {
        $this->container['stores'] = $stores;

        return $this;
    }

    /**
     * Gets valid_on_orders_over
     *
     * @return double
     */
    public function getValidOnOrdersOver()
    {
        return $this->container['valid_on_orders_over'];
    }

    /**
     * Sets valid_on_orders_over
     *
     * @param double $valid_on_orders_over Valid on orders on or above
     *
     * @return $this
     */
    public function setValidOnOrdersOver($valid_on_orders_over)
    {
        $this->container['valid_on_orders_over'] = $valid_on_orders_over;

        return $this;
    }

    /**
     * Gets takes_priority
     *
     * @return bool
     */
    public function getTakesPriority()
    {
        return $this->container['takes_priority'];
    }

    /**
     * Sets takes_priority
     *
     * @param bool $takes_priority Takes priority
     *
     * @return $this
     */
    public function setTakesPriority($takes_priority)
    {
        $this->container['takes_priority'] = $takes_priority;

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
     * Gets is_automatically_applied
     *
     * @return bool
     */
    public function getIsAutomaticallyApplied()
    {
        return $this->container['is_automatically_applied'];
    }

    /**
     * Sets is_automatically_applied
     *
     * @param bool $is_automatically_applied Is voucher automatically applied
     *
     * @return $this
     */
    public function setIsAutomaticallyApplied($is_automatically_applied)
    {
        $this->container['is_automatically_applied'] = $is_automatically_applied;

        return $this;
    }

    /**
     * Gets include_delivery_fee
     *
     * @return bool
     */
    public function getIncludeDeliveryFee()
    {
        return $this->container['include_delivery_fee'];
    }

    /**
     * Sets include_delivery_fee
     *
     * @param bool $include_delivery_fee Include delivery fees
     *
     * @return $this
     */
    public function setIncludeDeliveryFee($include_delivery_fee)
    {
        $this->container['include_delivery_fee'] = $include_delivery_fee;

        return $this;
    }

    /**
     * Gets is_valid_for_delivery_orders
     *
     * @return bool
     */
    public function getIsValidForDeliveryOrders()
    {
        return $this->container['is_valid_for_delivery_orders'];
    }

    /**
     * Sets is_valid_for_delivery_orders
     *
     * @param bool $is_valid_for_delivery_orders Valid for delivery orders
     *
     * @return $this
     */
    public function setIsValidForDeliveryOrders($is_valid_for_delivery_orders)
    {
        $this->container['is_valid_for_delivery_orders'] = $is_valid_for_delivery_orders;

        return $this;
    }

    /**
     * Gets is_valid_for_pickup_orders
     *
     * @return bool
     */
    public function getIsValidForPickupOrders()
    {
        return $this->container['is_valid_for_pickup_orders'];
    }

    /**
     * Sets is_valid_for_pickup_orders
     *
     * @param bool $is_valid_for_pickup_orders Valid for pickup orders
     *
     * @return $this
     */
    public function setIsValidForPickupOrders($is_valid_for_pickup_orders)
    {
        $this->container['is_valid_for_pickup_orders'] = $is_valid_for_pickup_orders;

        return $this;
    }

    /**
     * Gets is_valid_for_orders_payed_online
     *
     * @return bool
     */
    public function getIsValidForOrdersPayedOnline()
    {
        return $this->container['is_valid_for_orders_payed_online'];
    }

    /**
     * Sets is_valid_for_orders_payed_online
     *
     * @param bool $is_valid_for_orders_payed_online Valid for orders payed online
     *
     * @return $this
     */
    public function setIsValidForOrdersPayedOnline($is_valid_for_orders_payed_online)
    {
        $this->container['is_valid_for_orders_payed_online'] = $is_valid_for_orders_payed_online;

        return $this;
    }

    /**
     * Gets is_valid_for_orders_payed_by_cash
     *
     * @return bool
     */
    public function getIsValidForOrdersPayedByCash()
    {
        return $this->container['is_valid_for_orders_payed_by_cash'];
    }

    /**
     * Sets is_valid_for_orders_payed_by_cash
     *
     * @param bool $is_valid_for_orders_payed_by_cash Valid for orders payed in cash
     *
     * @return $this
     */
    public function setIsValidForOrdersPayedByCash($is_valid_for_orders_payed_by_cash)
    {
        $this->container['is_valid_for_orders_payed_by_cash'] = $is_valid_for_orders_payed_by_cash;

        return $this;
    }

    /**
     * Gets is_valid_for_first_order_only
     *
     * @return bool
     */
    public function getIsValidForFirstOrderOnly()
    {
        return $this->container['is_valid_for_first_order_only'];
    }

    /**
     * Sets is_valid_for_first_order_only
     *
     * @param bool $is_valid_for_first_order_only Valid only on the first order by the customer
     *
     * @return $this
     */
    public function setIsValidForFirstOrderOnly($is_valid_for_first_order_only)
    {
        $this->container['is_valid_for_first_order_only'] = $is_valid_for_first_order_only;

        return $this;
    }

    /**
     * Gets is_valid_once_per_customer
     *
     * @return bool
     */
    public function getIsValidOncePerCustomer()
    {
        return $this->container['is_valid_once_per_customer'];
    }

    /**
     * Sets is_valid_once_per_customer
     *
     * @param bool $is_valid_once_per_customer Valid once per customer
     *
     * @return $this
     */
    public function setIsValidOncePerCustomer($is_valid_once_per_customer)
    {
        $this->container['is_valid_once_per_customer'] = $is_valid_once_per_customer;

        return $this;
    }

    /**
     * Gets is_valid_only_once
     *
     * @return bool
     */
    public function getIsValidOnlyOnce()
    {
        return $this->container['is_valid_only_once'];
    }

    /**
     * Sets is_valid_only_once
     *
     * @param bool $is_valid_only_once Valid only once, by any customer (once used cannot be used again by any other customer)
     *
     * @return $this
     */
    public function setIsValidOnlyOnce($is_valid_only_once)
    {
        $this->container['is_valid_only_once'] = $is_valid_only_once;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Voucher Starts On (Time in UTC)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date Voucher Expires On (Time in UTC)
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

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


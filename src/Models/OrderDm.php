<?php
/**
 * OrderDm
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
 * OrderDm Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderDm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderDm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_location' => '\Flipdish\\Client\Models\CoordinatesDm',
        'requested_delivery_or_pickup_time_utc' => '\DateTime',
        'tip_amount' => 'double',
        'delivery_location_id' => 'int',
        'order_item_vms' => '\Flipdish\\Client\Models\OrderItemDm[]',
        'virtual_restaurant_id' => 'int',
        'physical_restaurant_id' => 'int',
        'delivery_type' => 'string',
        'pickup_location_type' => 'string',
        'pickup_location_id' => 'int',
        'table_service_catagory' => 'string',
        'payment_account_id' => 'int',
        'is_pre_order' => 'bool',
        'is_asap_order' => 'bool',
        'menu_id' => 'int',
        'menu_version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_location' => null,
        'requested_delivery_or_pickup_time_utc' => 'date-time',
        'tip_amount' => 'double',
        'delivery_location_id' => 'int32',
        'order_item_vms' => null,
        'virtual_restaurant_id' => 'int32',
        'physical_restaurant_id' => 'int32',
        'delivery_type' => null,
        'pickup_location_type' => null,
        'pickup_location_id' => 'int32',
        'table_service_catagory' => null,
        'payment_account_id' => 'int32',
        'is_pre_order' => null,
        'is_asap_order' => null,
        'menu_id' => 'int32',
        'menu_version' => 'int32'
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
        'user_location' => 'UserLocation',
        'requested_delivery_or_pickup_time_utc' => 'RequestedDeliveryOrPickupTimeUtc',
        'tip_amount' => 'TipAmount',
        'delivery_location_id' => 'DeliveryLocationId',
        'order_item_vms' => 'OrderItemVms',
        'virtual_restaurant_id' => 'VirtualRestaurantId',
        'physical_restaurant_id' => 'PhysicalRestaurantId',
        'delivery_type' => 'DeliveryType',
        'pickup_location_type' => 'PickupLocationType',
        'pickup_location_id' => 'PickupLocationId',
        'table_service_catagory' => 'TableServiceCatagory',
        'payment_account_id' => 'PaymentAccountId',
        'is_pre_order' => 'IsPreOrder',
        'is_asap_order' => 'IsAsapOrder',
        'menu_id' => 'MenuId',
        'menu_version' => 'MenuVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_location' => 'setUserLocation',
        'requested_delivery_or_pickup_time_utc' => 'setRequestedDeliveryOrPickupTimeUtc',
        'tip_amount' => 'setTipAmount',
        'delivery_location_id' => 'setDeliveryLocationId',
        'order_item_vms' => 'setOrderItemVms',
        'virtual_restaurant_id' => 'setVirtualRestaurantId',
        'physical_restaurant_id' => 'setPhysicalRestaurantId',
        'delivery_type' => 'setDeliveryType',
        'pickup_location_type' => 'setPickupLocationType',
        'pickup_location_id' => 'setPickupLocationId',
        'table_service_catagory' => 'setTableServiceCatagory',
        'payment_account_id' => 'setPaymentAccountId',
        'is_pre_order' => 'setIsPreOrder',
        'is_asap_order' => 'setIsAsapOrder',
        'menu_id' => 'setMenuId',
        'menu_version' => 'setMenuVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_location' => 'getUserLocation',
        'requested_delivery_or_pickup_time_utc' => 'getRequestedDeliveryOrPickupTimeUtc',
        'tip_amount' => 'getTipAmount',
        'delivery_location_id' => 'getDeliveryLocationId',
        'order_item_vms' => 'getOrderItemVms',
        'virtual_restaurant_id' => 'getVirtualRestaurantId',
        'physical_restaurant_id' => 'getPhysicalRestaurantId',
        'delivery_type' => 'getDeliveryType',
        'pickup_location_type' => 'getPickupLocationType',
        'pickup_location_id' => 'getPickupLocationId',
        'table_service_catagory' => 'getTableServiceCatagory',
        'payment_account_id' => 'getPaymentAccountId',
        'is_pre_order' => 'getIsPreOrder',
        'is_asap_order' => 'getIsAsapOrder',
        'menu_id' => 'getMenuId',
        'menu_version' => 'getMenuVersion'
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
    const PICKUP_LOCATION_TYPE_TAKE_OUT = 'TakeOut';
    const PICKUP_LOCATION_TYPE_TABLE_SERVICE = 'TableService';
    const PICKUP_LOCATION_TYPE_DINE_IN = 'DineIn';
    const TABLE_SERVICE_CATAGORY_GENERIC = 'Generic';
    const TABLE_SERVICE_CATAGORY_VILLA = 'Villa';
    const TABLE_SERVICE_CATAGORY_HOUSE = 'House';
    const TABLE_SERVICE_CATAGORY_ROOM = 'Room';
    const TABLE_SERVICE_CATAGORY_AREA = 'Area';
    const TABLE_SERVICE_CATAGORY_TABLE = 'Table';
    const TABLE_SERVICE_CATAGORY_PARKING_BAY = 'ParkingBay';
    const TABLE_SERVICE_CATAGORY_GATE = 'Gate';
    const TABLE_SERVICE_CATAGORY_DRIVE_THROUGH = 'DriveThrough';
    const TABLE_SERVICE_CATAGORY_TEAM = 'Team';
    

    
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
    public function getPickupLocationTypeAllowableValues()
    {
        return [
            self::PICKUP_LOCATION_TYPE_TAKE_OUT,
            self::PICKUP_LOCATION_TYPE_TABLE_SERVICE,
            self::PICKUP_LOCATION_TYPE_DINE_IN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTableServiceCatagoryAllowableValues()
    {
        return [
            self::TABLE_SERVICE_CATAGORY_GENERIC,
            self::TABLE_SERVICE_CATAGORY_VILLA,
            self::TABLE_SERVICE_CATAGORY_HOUSE,
            self::TABLE_SERVICE_CATAGORY_ROOM,
            self::TABLE_SERVICE_CATAGORY_AREA,
            self::TABLE_SERVICE_CATAGORY_TABLE,
            self::TABLE_SERVICE_CATAGORY_PARKING_BAY,
            self::TABLE_SERVICE_CATAGORY_GATE,
            self::TABLE_SERVICE_CATAGORY_DRIVE_THROUGH,
            self::TABLE_SERVICE_CATAGORY_TEAM,
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
        $this->container['user_location'] = isset($data['user_location']) ? $data['user_location'] : null;
        $this->container['requested_delivery_or_pickup_time_utc'] = isset($data['requested_delivery_or_pickup_time_utc']) ? $data['requested_delivery_or_pickup_time_utc'] : null;
        $this->container['tip_amount'] = isset($data['tip_amount']) ? $data['tip_amount'] : null;
        $this->container['delivery_location_id'] = isset($data['delivery_location_id']) ? $data['delivery_location_id'] : null;
        $this->container['order_item_vms'] = isset($data['order_item_vms']) ? $data['order_item_vms'] : null;
        $this->container['virtual_restaurant_id'] = isset($data['virtual_restaurant_id']) ? $data['virtual_restaurant_id'] : null;
        $this->container['physical_restaurant_id'] = isset($data['physical_restaurant_id']) ? $data['physical_restaurant_id'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['pickup_location_type'] = isset($data['pickup_location_type']) ? $data['pickup_location_type'] : null;
        $this->container['pickup_location_id'] = isset($data['pickup_location_id']) ? $data['pickup_location_id'] : null;
        $this->container['table_service_catagory'] = isset($data['table_service_catagory']) ? $data['table_service_catagory'] : null;
        $this->container['payment_account_id'] = isset($data['payment_account_id']) ? $data['payment_account_id'] : null;
        $this->container['is_pre_order'] = isset($data['is_pre_order']) ? $data['is_pre_order'] : null;
        $this->container['is_asap_order'] = isset($data['is_asap_order']) ? $data['is_asap_order'] : null;
        $this->container['menu_id'] = isset($data['menu_id']) ? $data['menu_id'] : null;
        $this->container['menu_version'] = isset($data['menu_version']) ? $data['menu_version'] : null;
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

        $allowedValues = $this->getPickupLocationTypeAllowableValues();
        if (!is_null($this->container['pickup_location_type']) && !in_array($this->container['pickup_location_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pickup_location_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTableServiceCatagoryAllowableValues();
        if (!is_null($this->container['table_service_catagory']) && !in_array($this->container['table_service_catagory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'table_service_catagory', must be one of '%s'",
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
     * Gets user_location
     *
     * @return \Flipdish\\Client\Models\CoordinatesDm
     */
    public function getUserLocation()
    {
        return $this->container['user_location'];
    }

    /**
     * Sets user_location
     *
     * @param \Flipdish\\Client\Models\CoordinatesDm $user_location user_location
     *
     * @return $this
     */
    public function setUserLocation($user_location)
    {
        $this->container['user_location'] = $user_location;

        return $this;
    }

    /**
     * Gets requested_delivery_or_pickup_time_utc
     *
     * @return \DateTime
     */
    public function getRequestedDeliveryOrPickupTimeUtc()
    {
        return $this->container['requested_delivery_or_pickup_time_utc'];
    }

    /**
     * Sets requested_delivery_or_pickup_time_utc
     *
     * @param \DateTime $requested_delivery_or_pickup_time_utc requested_delivery_or_pickup_time_utc
     *
     * @return $this
     */
    public function setRequestedDeliveryOrPickupTimeUtc($requested_delivery_or_pickup_time_utc)
    {
        $this->container['requested_delivery_or_pickup_time_utc'] = $requested_delivery_or_pickup_time_utc;

        return $this;
    }

    /**
     * Gets tip_amount
     *
     * @return double
     */
    public function getTipAmount()
    {
        return $this->container['tip_amount'];
    }

    /**
     * Sets tip_amount
     *
     * @param double $tip_amount tip_amount
     *
     * @return $this
     */
    public function setTipAmount($tip_amount)
    {
        $this->container['tip_amount'] = $tip_amount;

        return $this;
    }

    /**
     * Gets delivery_location_id
     *
     * @return int
     */
    public function getDeliveryLocationId()
    {
        return $this->container['delivery_location_id'];
    }

    /**
     * Sets delivery_location_id
     *
     * @param int $delivery_location_id delivery_location_id
     *
     * @return $this
     */
    public function setDeliveryLocationId($delivery_location_id)
    {
        $this->container['delivery_location_id'] = $delivery_location_id;

        return $this;
    }

    /**
     * Gets order_item_vms
     *
     * @return \Flipdish\\Client\Models\OrderItemDm[]
     */
    public function getOrderItemVms()
    {
        return $this->container['order_item_vms'];
    }

    /**
     * Sets order_item_vms
     *
     * @param \Flipdish\\Client\Models\OrderItemDm[] $order_item_vms order_item_vms
     *
     * @return $this
     */
    public function setOrderItemVms($order_item_vms)
    {
        $this->container['order_item_vms'] = $order_item_vms;

        return $this;
    }

    /**
     * Gets virtual_restaurant_id
     *
     * @return int
     */
    public function getVirtualRestaurantId()
    {
        return $this->container['virtual_restaurant_id'];
    }

    /**
     * Sets virtual_restaurant_id
     *
     * @param int $virtual_restaurant_id virtual_restaurant_id
     *
     * @return $this
     */
    public function setVirtualRestaurantId($virtual_restaurant_id)
    {
        $this->container['virtual_restaurant_id'] = $virtual_restaurant_id;

        return $this;
    }

    /**
     * Gets physical_restaurant_id
     *
     * @return int
     */
    public function getPhysicalRestaurantId()
    {
        return $this->container['physical_restaurant_id'];
    }

    /**
     * Sets physical_restaurant_id
     *
     * @param int $physical_restaurant_id physical_restaurant_id
     *
     * @return $this
     */
    public function setPhysicalRestaurantId($physical_restaurant_id)
    {
        $this->container['physical_restaurant_id'] = $physical_restaurant_id;

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
     * @param string $delivery_type delivery_type
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
     * Gets pickup_location_type
     *
     * @return string
     */
    public function getPickupLocationType()
    {
        return $this->container['pickup_location_type'];
    }

    /**
     * Sets pickup_location_type
     *
     * @param string $pickup_location_type pickup_location_type
     *
     * @return $this
     */
    public function setPickupLocationType($pickup_location_type)
    {
        $allowedValues = $this->getPickupLocationTypeAllowableValues();
        if (!is_null($pickup_location_type) && !in_array($pickup_location_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pickup_location_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pickup_location_type'] = $pickup_location_type;

        return $this;
    }

    /**
     * Gets pickup_location_id
     *
     * @return int
     */
    public function getPickupLocationId()
    {
        return $this->container['pickup_location_id'];
    }

    /**
     * Sets pickup_location_id
     *
     * @param int $pickup_location_id pickup_location_id
     *
     * @return $this
     */
    public function setPickupLocationId($pickup_location_id)
    {
        $this->container['pickup_location_id'] = $pickup_location_id;

        return $this;
    }

    /**
     * Gets table_service_catagory
     *
     * @return string
     */
    public function getTableServiceCatagory()
    {
        return $this->container['table_service_catagory'];
    }

    /**
     * Sets table_service_catagory
     *
     * @param string $table_service_catagory table_service_catagory
     *
     * @return $this
     */
    public function setTableServiceCatagory($table_service_catagory)
    {
        $allowedValues = $this->getTableServiceCatagoryAllowableValues();
        if (!is_null($table_service_catagory) && !in_array($table_service_catagory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'table_service_catagory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['table_service_catagory'] = $table_service_catagory;

        return $this;
    }

    /**
     * Gets payment_account_id
     *
     * @return int
     */
    public function getPaymentAccountId()
    {
        return $this->container['payment_account_id'];
    }

    /**
     * Sets payment_account_id
     *
     * @param int $payment_account_id payment_account_id
     *
     * @return $this
     */
    public function setPaymentAccountId($payment_account_id)
    {
        $this->container['payment_account_id'] = $payment_account_id;

        return $this;
    }

    /**
     * Gets is_pre_order
     *
     * @return bool
     */
    public function getIsPreOrder()
    {
        return $this->container['is_pre_order'];
    }

    /**
     * Sets is_pre_order
     *
     * @param bool $is_pre_order is_pre_order
     *
     * @return $this
     */
    public function setIsPreOrder($is_pre_order)
    {
        $this->container['is_pre_order'] = $is_pre_order;

        return $this;
    }

    /**
     * Gets is_asap_order
     *
     * @return bool
     */
    public function getIsAsapOrder()
    {
        return $this->container['is_asap_order'];
    }

    /**
     * Sets is_asap_order
     *
     * @param bool $is_asap_order is_asap_order
     *
     * @return $this
     */
    public function setIsAsapOrder($is_asap_order)
    {
        $this->container['is_asap_order'] = $is_asap_order;

        return $this;
    }

    /**
     * Gets menu_id
     *
     * @return int
     */
    public function getMenuId()
    {
        return $this->container['menu_id'];
    }

    /**
     * Sets menu_id
     *
     * @param int $menu_id menu_id
     *
     * @return $this
     */
    public function setMenuId($menu_id)
    {
        $this->container['menu_id'] = $menu_id;

        return $this;
    }

    /**
     * Gets menu_version
     *
     * @return int
     */
    public function getMenuVersion()
    {
        return $this->container['menu_version'];
    }

    /**
     * Sets menu_version
     *
     * @param int $menu_version menu_version
     *
     * @return $this
     */
    public function setMenuVersion($menu_version)
    {
        $this->container['menu_version'] = $menu_version;

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


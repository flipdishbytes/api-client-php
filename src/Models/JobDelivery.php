<?php
/**
 * JobDelivery
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
 * JobDelivery Class Doc Comment
 *
 * @category Class
 * @description Job Delivery
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobDelivery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status' => 'string',
        'picked_at' => 'string',
        'delivered_at' => 'string',
        'tracking_url' => 'string',
        'client_reference' => 'string',
        'package_description' => 'string',
        'package_type' => 'string',
        'pickup' => '\Flipdish\\Client\Models\JobDeliveryDetail',
        'dropoff' => '\Flipdish\\Client\Models\JobDeliveryDetail',
        'eta' => '\Flipdish\\Client\Models\JobEta',
        'cancellation' => '\Flipdish\\Client\Models\JobCancellation',
        'proof' => '\Flipdish\\Client\Models\JobProof'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'status' => null,
        'picked_at' => null,
        'delivered_at' => null,
        'tracking_url' => null,
        'client_reference' => null,
        'package_description' => null,
        'package_type' => null,
        'pickup' => null,
        'dropoff' => null,
        'eta' => null,
        'cancellation' => null,
        'proof' => null
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
        'status' => 'Status',
        'picked_at' => 'PickedAt',
        'delivered_at' => 'DeliveredAt',
        'tracking_url' => 'TrackingUrl',
        'client_reference' => 'ClientReference',
        'package_description' => 'PackageDescription',
        'package_type' => 'PackageType',
        'pickup' => 'Pickup',
        'dropoff' => 'Dropoff',
        'eta' => 'Eta',
        'cancellation' => 'Cancellation',
        'proof' => 'Proof'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'picked_at' => 'setPickedAt',
        'delivered_at' => 'setDeliveredAt',
        'tracking_url' => 'setTrackingUrl',
        'client_reference' => 'setClientReference',
        'package_description' => 'setPackageDescription',
        'package_type' => 'setPackageType',
        'pickup' => 'setPickup',
        'dropoff' => 'setDropoff',
        'eta' => 'setEta',
        'cancellation' => 'setCancellation',
        'proof' => 'setProof'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'picked_at' => 'getPickedAt',
        'delivered_at' => 'getDeliveredAt',
        'tracking_url' => 'getTrackingUrl',
        'client_reference' => 'getClientReference',
        'package_description' => 'getPackageDescription',
        'package_type' => 'getPackageType',
        'pickup' => 'getPickup',
        'dropoff' => 'getDropoff',
        'eta' => 'getEta',
        'cancellation' => 'getCancellation',
        'proof' => 'getProof'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['picked_at'] = isset($data['picked_at']) ? $data['picked_at'] : null;
        $this->container['delivered_at'] = isset($data['delivered_at']) ? $data['delivered_at'] : null;
        $this->container['tracking_url'] = isset($data['tracking_url']) ? $data['tracking_url'] : null;
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['package_description'] = isset($data['package_description']) ? $data['package_description'] : null;
        $this->container['package_type'] = isset($data['package_type']) ? $data['package_type'] : null;
        $this->container['pickup'] = isset($data['pickup']) ? $data['pickup'] : null;
        $this->container['dropoff'] = isset($data['dropoff']) ? $data['dropoff'] : null;
        $this->container['eta'] = isset($data['eta']) ? $data['eta'] : null;
        $this->container['cancellation'] = isset($data['cancellation']) ? $data['cancellation'] : null;
        $this->container['proof'] = isset($data['proof']) ? $data['proof'] : null;
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
     * @param int $id Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets picked_at
     *
     * @return string
     */
    public function getPickedAt()
    {
        return $this->container['picked_at'];
    }

    /**
     * Sets picked_at
     *
     * @param string $picked_at Picked At
     *
     * @return $this
     */
    public function setPickedAt($picked_at)
    {
        $this->container['picked_at'] = $picked_at;

        return $this;
    }

    /**
     * Gets delivered_at
     *
     * @return string
     */
    public function getDeliveredAt()
    {
        return $this->container['delivered_at'];
    }

    /**
     * Sets delivered_at
     *
     * @param string $delivered_at Delivered At
     *
     * @return $this
     */
    public function setDeliveredAt($delivered_at)
    {
        $this->container['delivered_at'] = $delivered_at;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string $tracking_url Tracking Url
     *
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets client_reference
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string $client_reference Client Reference
     *
     * @return $this
     */
    public function setClientReference($client_reference)
    {
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets package_description
     *
     * @return string
     */
    public function getPackageDescription()
    {
        return $this->container['package_description'];
    }

    /**
     * Sets package_description
     *
     * @param string $package_description Package Description
     *
     * @return $this
     */
    public function setPackageDescription($package_description)
    {
        $this->container['package_description'] = $package_description;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param string $package_type Package Type
     *
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets pickup
     *
     * @return \Flipdish\\Client\Models\JobDeliveryDetail
     */
    public function getPickup()
    {
        return $this->container['pickup'];
    }

    /**
     * Sets pickup
     *
     * @param \Flipdish\\Client\Models\JobDeliveryDetail $pickup Pickup
     *
     * @return $this
     */
    public function setPickup($pickup)
    {
        $this->container['pickup'] = $pickup;

        return $this;
    }

    /**
     * Gets dropoff
     *
     * @return \Flipdish\\Client\Models\JobDeliveryDetail
     */
    public function getDropoff()
    {
        return $this->container['dropoff'];
    }

    /**
     * Sets dropoff
     *
     * @param \Flipdish\\Client\Models\JobDeliveryDetail $dropoff Dropoff
     *
     * @return $this
     */
    public function setDropoff($dropoff)
    {
        $this->container['dropoff'] = $dropoff;

        return $this;
    }

    /**
     * Gets eta
     *
     * @return \Flipdish\\Client\Models\JobEta
     */
    public function getEta()
    {
        return $this->container['eta'];
    }

    /**
     * Sets eta
     *
     * @param \Flipdish\\Client\Models\JobEta $eta Eta
     *
     * @return $this
     */
    public function setEta($eta)
    {
        $this->container['eta'] = $eta;

        return $this;
    }

    /**
     * Gets cancellation
     *
     * @return \Flipdish\\Client\Models\JobCancellation
     */
    public function getCancellation()
    {
        return $this->container['cancellation'];
    }

    /**
     * Sets cancellation
     *
     * @param \Flipdish\\Client\Models\JobCancellation $cancellation Cancellation
     *
     * @return $this
     */
    public function setCancellation($cancellation)
    {
        $this->container['cancellation'] = $cancellation;

        return $this;
    }

    /**
     * Gets proof
     *
     * @return \Flipdish\\Client\Models\JobProof
     */
    public function getProof()
    {
        return $this->container['proof'];
    }

    /**
     * Sets proof
     *
     * @param \Flipdish\\Client\Models\JobProof $proof Proof
     *
     * @return $this
     */
    public function setProof($proof)
    {
        $this->container['proof'] = $proof;

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



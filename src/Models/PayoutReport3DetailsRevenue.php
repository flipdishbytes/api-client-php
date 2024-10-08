<?php
/**
 * PayoutReport3DetailsRevenue
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
 * PayoutReport3DetailsRevenue Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutReport3DetailsRevenue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayoutReport3DetailsRevenue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gross_sales' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'sales_tax' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'delivery_charges' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'other_charges' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'tips' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'total_revenue' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'revenue_for_fee_calculations' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine',
        'drs_charges' => '\Flipdish\\Client\Models\PayoutReport3DetailsSalesLine'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gross_sales' => null,
        'sales_tax' => null,
        'delivery_charges' => null,
        'other_charges' => null,
        'tips' => null,
        'total_revenue' => null,
        'revenue_for_fee_calculations' => null,
        'drs_charges' => null
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
        'gross_sales' => 'GrossSales',
        'sales_tax' => 'SalesTax',
        'delivery_charges' => 'DeliveryCharges',
        'other_charges' => 'OtherCharges',
        'tips' => 'Tips',
        'total_revenue' => 'TotalRevenue',
        'revenue_for_fee_calculations' => 'RevenueForFeeCalculations',
        'drs_charges' => 'DrsCharges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gross_sales' => 'setGrossSales',
        'sales_tax' => 'setSalesTax',
        'delivery_charges' => 'setDeliveryCharges',
        'other_charges' => 'setOtherCharges',
        'tips' => 'setTips',
        'total_revenue' => 'setTotalRevenue',
        'revenue_for_fee_calculations' => 'setRevenueForFeeCalculations',
        'drs_charges' => 'setDrsCharges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gross_sales' => 'getGrossSales',
        'sales_tax' => 'getSalesTax',
        'delivery_charges' => 'getDeliveryCharges',
        'other_charges' => 'getOtherCharges',
        'tips' => 'getTips',
        'total_revenue' => 'getTotalRevenue',
        'revenue_for_fee_calculations' => 'getRevenueForFeeCalculations',
        'drs_charges' => 'getDrsCharges'
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
        $this->container['gross_sales'] = isset($data['gross_sales']) ? $data['gross_sales'] : null;
        $this->container['sales_tax'] = isset($data['sales_tax']) ? $data['sales_tax'] : null;
        $this->container['delivery_charges'] = isset($data['delivery_charges']) ? $data['delivery_charges'] : null;
        $this->container['other_charges'] = isset($data['other_charges']) ? $data['other_charges'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['total_revenue'] = isset($data['total_revenue']) ? $data['total_revenue'] : null;
        $this->container['revenue_for_fee_calculations'] = isset($data['revenue_for_fee_calculations']) ? $data['revenue_for_fee_calculations'] : null;
        $this->container['drs_charges'] = isset($data['drs_charges']) ? $data['drs_charges'] : null;
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
     * Gets gross_sales
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getGrossSales()
    {
        return $this->container['gross_sales'];
    }

    /**
     * Sets gross_sales
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $gross_sales gross_sales
     *
     * @return $this
     */
    public function setGrossSales($gross_sales)
    {
        $this->container['gross_sales'] = $gross_sales;

        return $this;
    }

    /**
     * Gets sales_tax
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getSalesTax()
    {
        return $this->container['sales_tax'];
    }

    /**
     * Sets sales_tax
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $sales_tax sales_tax
     *
     * @return $this
     */
    public function setSalesTax($sales_tax)
    {
        $this->container['sales_tax'] = $sales_tax;

        return $this;
    }

    /**
     * Gets delivery_charges
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getDeliveryCharges()
    {
        return $this->container['delivery_charges'];
    }

    /**
     * Sets delivery_charges
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $delivery_charges delivery_charges
     *
     * @return $this
     */
    public function setDeliveryCharges($delivery_charges)
    {
        $this->container['delivery_charges'] = $delivery_charges;

        return $this;
    }

    /**
     * Gets other_charges
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getOtherCharges()
    {
        return $this->container['other_charges'];
    }

    /**
     * Sets other_charges
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $other_charges other_charges
     *
     * @return $this
     */
    public function setOtherCharges($other_charges)
    {
        $this->container['other_charges'] = $other_charges;

        return $this;
    }

    /**
     * Gets tips
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
     * Sets tips
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $tips tips
     *
     * @return $this
     */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;

        return $this;
    }

    /**
     * Gets total_revenue
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getTotalRevenue()
    {
        return $this->container['total_revenue'];
    }

    /**
     * Sets total_revenue
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $total_revenue total_revenue
     *
     * @return $this
     */
    public function setTotalRevenue($total_revenue)
    {
        $this->container['total_revenue'] = $total_revenue;

        return $this;
    }

    /**
     * Gets revenue_for_fee_calculations
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getRevenueForFeeCalculations()
    {
        return $this->container['revenue_for_fee_calculations'];
    }

    /**
     * Sets revenue_for_fee_calculations
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $revenue_for_fee_calculations revenue_for_fee_calculations
     *
     * @return $this
     */
    public function setRevenueForFeeCalculations($revenue_for_fee_calculations)
    {
        $this->container['revenue_for_fee_calculations'] = $revenue_for_fee_calculations;

        return $this;
    }

    /**
     * Gets drs_charges
     *
     * @return \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine
     */
    public function getDrsCharges()
    {
        return $this->container['drs_charges'];
    }

    /**
     * Sets drs_charges
     *
     * @param \Flipdish\\Client\Models\PayoutReport3DetailsSalesLine $drs_charges drs_charges
     *
     * @return $this
     */
    public function setDrsCharges($drs_charges)
    {
        $this->container['drs_charges'] = $drs_charges;

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



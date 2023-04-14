<?php
/**
 * PosRevenueDetails
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
 * PosRevenueDetails Class Doc Comment
 *
 * @category Class
 * @description Breakdown of POS charges
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PosRevenueDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PosRevenueDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pos_sales_amount' => 'double',
        'pos_sales_tax' => 'double',
        'pos_sales_tips' => 'double',
        'total_pos_revenue' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pos_sales_amount' => 'double',
        'pos_sales_tax' => 'double',
        'pos_sales_tips' => 'double',
        'total_pos_revenue' => 'double'
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
        'pos_sales_amount' => 'PosSalesAmount',
        'pos_sales_tax' => 'PosSalesTax',
        'pos_sales_tips' => 'PosSalesTips',
        'total_pos_revenue' => 'TotalPosRevenue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pos_sales_amount' => 'setPosSalesAmount',
        'pos_sales_tax' => 'setPosSalesTax',
        'pos_sales_tips' => 'setPosSalesTips',
        'total_pos_revenue' => 'setTotalPosRevenue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pos_sales_amount' => 'getPosSalesAmount',
        'pos_sales_tax' => 'getPosSalesTax',
        'pos_sales_tips' => 'getPosSalesTips',
        'total_pos_revenue' => 'getTotalPosRevenue'
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
        $this->container['pos_sales_amount'] = isset($data['pos_sales_amount']) ? $data['pos_sales_amount'] : null;
        $this->container['pos_sales_tax'] = isset($data['pos_sales_tax']) ? $data['pos_sales_tax'] : null;
        $this->container['pos_sales_tips'] = isset($data['pos_sales_tips']) ? $data['pos_sales_tips'] : null;
        $this->container['total_pos_revenue'] = isset($data['total_pos_revenue']) ? $data['total_pos_revenue'] : null;
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
     * Gets pos_sales_amount
     *
     * @return double
     */
    public function getPosSalesAmount()
    {
        return $this->container['pos_sales_amount'];
    }

    /**
     * Sets pos_sales_amount
     *
     * @param double $pos_sales_amount POS sale amount for the store
     *
     * @return $this
     */
    public function setPosSalesAmount($pos_sales_amount)
    {
        $this->container['pos_sales_amount'] = $pos_sales_amount;

        return $this;
    }

    /**
     * Gets pos_sales_tax
     *
     * @return double
     */
    public function getPosSalesTax()
    {
        return $this->container['pos_sales_tax'];
    }

    /**
     * Sets pos_sales_tax
     *
     * @param double $pos_sales_tax POS sale Tax for the store
     *
     * @return $this
     */
    public function setPosSalesTax($pos_sales_tax)
    {
        $this->container['pos_sales_tax'] = $pos_sales_tax;

        return $this;
    }

    /**
     * Gets pos_sales_tips
     *
     * @return double
     */
    public function getPosSalesTips()
    {
        return $this->container['pos_sales_tips'];
    }

    /**
     * Sets pos_sales_tips
     *
     * @param double $pos_sales_tips POS sale tips for the store
     *
     * @return $this
     */
    public function setPosSalesTips($pos_sales_tips)
    {
        $this->container['pos_sales_tips'] = $pos_sales_tips;

        return $this;
    }

    /**
     * Gets total_pos_revenue
     *
     * @return double
     */
    public function getTotalPosRevenue()
    {
        return $this->container['total_pos_revenue'];
    }

    /**
     * Sets total_pos_revenue
     *
     * @param double $total_pos_revenue POS Total Revenue for the store
     *
     * @return $this
     */
    public function setTotalPosRevenue($total_pos_revenue)
    {
        $this->container['total_pos_revenue'] = $total_pos_revenue;

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



<?php
/**
 * MenuNutritionInfoHeader
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
 * MenuNutritionInfoHeader Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenuNutritionInfoHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MenuNutritionInfoHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_id' => 'int',
        'nutrition_info_version_guid' => 'string',
        'absolute_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_id' => 'int32',
        'nutrition_info_version_guid' => 'uuid',
        'absolute_url' => null
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
        'menu_id' => 'MenuId',
        'nutrition_info_version_guid' => 'NutritionInfoVersionGuid',
        'absolute_url' => 'AbsoluteUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_id' => 'setMenuId',
        'nutrition_info_version_guid' => 'setNutritionInfoVersionGuid',
        'absolute_url' => 'setAbsoluteUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_id' => 'getMenuId',
        'nutrition_info_version_guid' => 'getNutritionInfoVersionGuid',
        'absolute_url' => 'getAbsoluteUrl'
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
        $this->container['menu_id'] = isset($data['menu_id']) ? $data['menu_id'] : null;
        $this->container['nutrition_info_version_guid'] = isset($data['nutrition_info_version_guid']) ? $data['nutrition_info_version_guid'] : null;
        $this->container['absolute_url'] = isset($data['absolute_url']) ? $data['absolute_url'] : null;
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
     * @param int $menu_id Menu Id
     *
     * @return $this
     */
    public function setMenuId($menu_id)
    {
        $this->container['menu_id'] = $menu_id;

        return $this;
    }

    /**
     * Gets nutrition_info_version_guid
     *
     * @return string
     */
    public function getNutritionInfoVersionGuid()
    {
        return $this->container['nutrition_info_version_guid'];
    }

    /**
     * Sets nutrition_info_version_guid
     *
     * @param string $nutrition_info_version_guid Nutrition information version guid (generated every time the nutrition information is updated)
     *
     * @return $this
     */
    public function setNutritionInfoVersionGuid($nutrition_info_version_guid)
    {
        $this->container['nutrition_info_version_guid'] = $nutrition_info_version_guid;

        return $this;
    }

    /**
     * Gets absolute_url
     *
     * @return string
     */
    public function getAbsoluteUrl()
    {
        return $this->container['absolute_url'];
    }

    /**
     * Sets absolute_url
     *
     * @param string $absolute_url Absolute URL of the nutrition information json file
     *
     * @return $this
     */
    public function setAbsoluteUrl($absolute_url)
    {
        $this->container['absolute_url'] = $absolute_url;

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



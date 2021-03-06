<?php
/**
 * Menu
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
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flipdish\Client\Model;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * Menu Class Doc Comment
 *
 * @category Class
 * @description Menu
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Menu implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Menu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'menu_id' => 'int',
        'modified_time' => '\DateTime',
        'version_number' => 'int',
        'image_url' => 'string',
        'menu_sections' => '\Flipdish\Client\Model\MenuSection[]',
        'display_section_links' => 'bool',
        'menu_section_behaviour' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'menu_id' => 'int32',
        'modified_time' => 'date-time',
        'version_number' => 'int32',
        'image_url' => null,
        'menu_sections' => null,
        'display_section_links' => null,
        'menu_section_behaviour' => null
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
        'modified_time' => 'ModifiedTime',
        'version_number' => 'VersionNumber',
        'image_url' => 'ImageUrl',
        'menu_sections' => 'MenuSections',
        'display_section_links' => 'DisplaySectionLinks',
        'menu_section_behaviour' => 'MenuSectionBehaviour'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'menu_id' => 'setMenuId',
        'modified_time' => 'setModifiedTime',
        'version_number' => 'setVersionNumber',
        'image_url' => 'setImageUrl',
        'menu_sections' => 'setMenuSections',
        'display_section_links' => 'setDisplaySectionLinks',
        'menu_section_behaviour' => 'setMenuSectionBehaviour'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'menu_id' => 'getMenuId',
        'modified_time' => 'getModifiedTime',
        'version_number' => 'getVersionNumber',
        'image_url' => 'getImageUrl',
        'menu_sections' => 'getMenuSections',
        'display_section_links' => 'getDisplaySectionLinks',
        'menu_section_behaviour' => 'getMenuSectionBehaviour'
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

    const MENU_SECTION_BEHAVIOUR_EXPAND_SINGLE = 'ExpandSingle';
    const MENU_SECTION_BEHAVIOUR_EXPAND_MULTIPLE = 'ExpandMultiple';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMenuSectionBehaviourAllowableValues()
    {
        return [
            self::MENU_SECTION_BEHAVIOUR_EXPAND_SINGLE,
            self::MENU_SECTION_BEHAVIOUR_EXPAND_MULTIPLE,
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
        $this->container['menu_id'] = isset($data['menu_id']) ? $data['menu_id'] : null;
        $this->container['modified_time'] = isset($data['modified_time']) ? $data['modified_time'] : null;
        $this->container['version_number'] = isset($data['version_number']) ? $data['version_number'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['menu_sections'] = isset($data['menu_sections']) ? $data['menu_sections'] : null;
        $this->container['display_section_links'] = isset($data['display_section_links']) ? $data['display_section_links'] : null;
        $this->container['menu_section_behaviour'] = isset($data['menu_section_behaviour']) ? $data['menu_section_behaviour'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMenuSectionBehaviourAllowableValues();
        if (!is_null($this->container['menu_section_behaviour']) && !in_array($this->container['menu_section_behaviour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'menu_section_behaviour', must be one of '%s'",
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
     * @param int $menu_id Menu identifier
     *
     * @return $this
     */
    public function setMenuId($menu_id)
    {
        $this->container['menu_id'] = $menu_id;

        return $this;
    }

    /**
     * Gets modified_time
     *
     * @return \DateTime
     */
    public function getModifiedTime()
    {
        return $this->container['modified_time'];
    }

    /**
     * Sets modified_time
     *
     * @param \DateTime $modified_time Last modified time
     *
     * @return $this
     */
    public function setModifiedTime($modified_time)
    {
        $this->container['modified_time'] = $modified_time;

        return $this;
    }

    /**
     * Gets version_number
     *
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->container['version_number'];
    }

    /**
     * Sets version_number
     *
     * @param int $version_number Menu version
     *
     * @return $this
     */
    public function setVersionNumber($version_number)
    {
        $this->container['version_number'] = $version_number;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Image url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets menu_sections
     *
     * @return \Flipdish\Client\Model\MenuSection[]
     */
    public function getMenuSections()
    {
        return $this->container['menu_sections'];
    }

    /**
     * Sets menu_sections
     *
     * @param \Flipdish\Client\Model\MenuSection[] $menu_sections Menu sections (startes, main etc)
     *
     * @return $this
     */
    public function setMenuSections($menu_sections)
    {
        $this->container['menu_sections'] = $menu_sections;

        return $this;
    }

    /**
     * Gets display_section_links
     *
     * @return bool
     */
    public function getDisplaySectionLinks()
    {
        return $this->container['display_section_links'];
    }

    /**
     * Sets display_section_links
     *
     * @param bool $display_section_links Display menu section link on UI
     *
     * @return $this
     */
    public function setDisplaySectionLinks($display_section_links)
    {
        $this->container['display_section_links'] = $display_section_links;

        return $this;
    }

    /**
     * Gets menu_section_behaviour
     *
     * @return string
     */
    public function getMenuSectionBehaviour()
    {
        return $this->container['menu_section_behaviour'];
    }

    /**
     * Sets menu_section_behaviour
     *
     * @param string $menu_section_behaviour Menu section behaviour
     *
     * @return $this
     */
    public function setMenuSectionBehaviour($menu_section_behaviour)
    {
        $allowedValues = $this->getMenuSectionBehaviourAllowableValues();
        if (!is_null($menu_section_behaviour) && !in_array($menu_section_behaviour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'menu_section_behaviour', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['menu_section_behaviour'] = $menu_section_behaviour;

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



<?php
/**
 * ExecuteConfigurationActionResult
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
 * ExecuteConfigurationActionResult Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExecuteConfigurationActionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExecuteConfigurationActionResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_message' => 'string',
        'info_message' => 'string',
        'redirect_url' => 'string',
        'redirect_target' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_message' => null,
        'info_message' => null,
        'redirect_url' => null,
        'redirect_target' => null
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
        'error_message' => 'ErrorMessage',
        'info_message' => 'InfoMessage',
        'redirect_url' => 'RedirectUrl',
        'redirect_target' => 'RedirectTarget'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_message' => 'setErrorMessage',
        'info_message' => 'setInfoMessage',
        'redirect_url' => 'setRedirectUrl',
        'redirect_target' => 'setRedirectTarget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_message' => 'getErrorMessage',
        'info_message' => 'getInfoMessage',
        'redirect_url' => 'getRedirectUrl',
        'redirect_target' => 'getRedirectTarget'
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

    const REDIRECT_TARGET__DEFAULT = 'Default';
    const REDIRECT_TARGET_NEW_WINDOW = 'NewWindow';
    const REDIRECT_TARGET_POPUP = 'Popup';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedirectTargetAllowableValues()
    {
        return [
            self::REDIRECT_TARGET__DEFAULT,
            self::REDIRECT_TARGET_NEW_WINDOW,
            self::REDIRECT_TARGET_POPUP,
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
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['info_message'] = isset($data['info_message']) ? $data['info_message'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['redirect_target'] = isset($data['redirect_target']) ? $data['redirect_target'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRedirectTargetAllowableValues();
        if (!is_null($this->container['redirect_target']) && !in_array($this->container['redirect_target'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'redirect_target', must be one of '%s'",
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
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets info_message
     *
     * @return string
     */
    public function getInfoMessage()
    {
        return $this->container['info_message'];
    }

    /**
     * Sets info_message
     *
     * @param string $info_message info_message
     *
     * @return $this
     */
    public function setInfoMessage($info_message)
    {
        $this->container['info_message'] = $info_message;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url redirect_url
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets redirect_target
     *
     * @return string
     */
    public function getRedirectTarget()
    {
        return $this->container['redirect_target'];
    }

    /**
     * Sets redirect_target
     *
     * @param string $redirect_target redirect_target
     *
     * @return $this
     */
    public function setRedirectTarget($redirect_target)
    {
        $allowedValues = $this->getRedirectTargetAllowableValues();
        if (!is_null($redirect_target) && !in_array($redirect_target, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'redirect_target', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redirect_target'] = $redirect_target;

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



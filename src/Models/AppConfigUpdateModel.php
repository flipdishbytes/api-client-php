<?php
/**
 * AppConfigUpdateModel
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
 * AppConfigUpdateModel Class Doc Comment
 *
 * @category Class
 * @description Application configuration
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppConfigUpdateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppConfigUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'host_name' => 'string',
        'main_color' => 'string',
        'kiosk_primary_colour' => 'string',
        'application_category' => 'string',
        'is_panacea_enabled' => 'bool',
        'cookie_consent_prompt_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'host_name' => null,
        'main_color' => null,
        'kiosk_primary_colour' => null,
        'application_category' => null,
        'is_panacea_enabled' => null,
        'cookie_consent_prompt_enabled' => null
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
        'name' => 'Name',
        'host_name' => 'HostName',
        'main_color' => 'MainColor',
        'kiosk_primary_colour' => 'KioskPrimaryColour',
        'application_category' => 'ApplicationCategory',
        'is_panacea_enabled' => 'IsPanaceaEnabled',
        'cookie_consent_prompt_enabled' => 'CookieConsentPromptEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'host_name' => 'setHostName',
        'main_color' => 'setMainColor',
        'kiosk_primary_colour' => 'setKioskPrimaryColour',
        'application_category' => 'setApplicationCategory',
        'is_panacea_enabled' => 'setIsPanaceaEnabled',
        'cookie_consent_prompt_enabled' => 'setCookieConsentPromptEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'host_name' => 'getHostName',
        'main_color' => 'getMainColor',
        'kiosk_primary_colour' => 'getKioskPrimaryColour',
        'application_category' => 'getApplicationCategory',
        'is_panacea_enabled' => 'getIsPanaceaEnabled',
        'cookie_consent_prompt_enabled' => 'getCookieConsentPromptEnabled'
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

    const APPLICATION_CATEGORY_RESTAURANT = 'Restaurant';
    const APPLICATION_CATEGORY_CAFE = 'Cafe';
    const APPLICATION_CATEGORY_CONVENIENCE = 'Convenience';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplicationCategoryAllowableValues()
    {
        return [
            self::APPLICATION_CATEGORY_RESTAURANT,
            self::APPLICATION_CATEGORY_CAFE,
            self::APPLICATION_CATEGORY_CONVENIENCE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['host_name'] = isset($data['host_name']) ? $data['host_name'] : null;
        $this->container['main_color'] = isset($data['main_color']) ? $data['main_color'] : null;
        $this->container['kiosk_primary_colour'] = isset($data['kiosk_primary_colour']) ? $data['kiosk_primary_colour'] : null;
        $this->container['application_category'] = isset($data['application_category']) ? $data['application_category'] : null;
        $this->container['is_panacea_enabled'] = isset($data['is_panacea_enabled']) ? $data['is_panacea_enabled'] : null;
        $this->container['cookie_consent_prompt_enabled'] = isset($data['cookie_consent_prompt_enabled']) ? $data['cookie_consent_prompt_enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApplicationCategoryAllowableValues();
        if (!is_null($this->container['application_category']) && !in_array($this->container['application_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'application_category', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name App name.   This is used in various places on the Apple App Store, Google Play Store, mobile apps and websites.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets host_name
     *
     * @return string
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     *
     * @param string $host_name HostName on which the web-ordering system is allowed to be hosted or that a Flipdish website is hosted on.
     *
     * @return $this
     */
    public function setHostName($host_name)
    {
        $this->container['host_name'] = $host_name;

        return $this;
    }

    /**
     * Gets main_color
     *
     * @return string
     */
    public function getMainColor()
    {
        return $this->container['main_color'];
    }

    /**
     * Sets main_color
     *
     * @param string $main_color Main color of the web / Android / iOS applications
     *
     * @return $this
     */
    public function setMainColor($main_color)
    {
        $this->container['main_color'] = $main_color;

        return $this;
    }

    /**
     * Gets kiosk_primary_colour
     *
     * @return string
     */
    public function getKioskPrimaryColour()
    {
        return $this->container['kiosk_primary_colour'];
    }

    /**
     * Sets kiosk_primary_colour
     *
     * @param string $kiosk_primary_colour Primary colour used on the Kiosk
     *
     * @return $this
     */
    public function setKioskPrimaryColour($kiosk_primary_colour)
    {
        $this->container['kiosk_primary_colour'] = $kiosk_primary_colour;

        return $this;
    }

    /**
     * Gets application_category
     *
     * @return string
     */
    public function getApplicationCategory()
    {
        return $this->container['application_category'];
    }

    /**
     * Sets application_category
     *
     * @param string $application_category Application Category
     *
     * @return $this
     */
    public function setApplicationCategory($application_category)
    {
        $allowedValues = $this->getApplicationCategoryAllowableValues();
        if (!is_null($application_category) && !in_array($application_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'application_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['application_category'] = $application_category;

        return $this;
    }

    /**
     * Gets is_panacea_enabled
     *
     * @return bool
     */
    public function getIsPanaceaEnabled()
    {
        return $this->container['is_panacea_enabled'];
    }

    /**
     * Sets is_panacea_enabled
     *
     * @param bool $is_panacea_enabled Panacea is the term used for websites that are hosted on the my.flipdish.com domain. This value is true when the App's website is hosted on this domain.  The aternative to using Panacea websites is to use a custom domain.
     *
     * @return $this
     */
    public function setIsPanaceaEnabled($is_panacea_enabled)
    {
        $this->container['is_panacea_enabled'] = $is_panacea_enabled;

        return $this;
    }

    /**
     * Gets cookie_consent_prompt_enabled
     *
     * @return bool
     */
    public function getCookieConsentPromptEnabled()
    {
        return $this->container['cookie_consent_prompt_enabled'];
    }

    /**
     * Sets cookie_consent_prompt_enabled
     *
     * @param bool $cookie_consent_prompt_enabled Cookie Consent Prompt Enabled
     *
     * @return $this
     */
    public function setCookieConsentPromptEnabled($cookie_consent_prompt_enabled)
    {
        $this->container['cookie_consent_prompt_enabled'] = $cookie_consent_prompt_enabled;

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



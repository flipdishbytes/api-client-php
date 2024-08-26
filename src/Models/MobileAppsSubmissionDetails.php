<?php
/**
 * MobileAppsSubmissionDetails
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
 * MobileAppsSubmissionDetails Class Doc Comment
 *
 * @category Class
 * @description Mobile Apps form submission
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MobileAppsSubmissionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MobileAppsSubmissionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobile_apps_submission_id' => 'int',
        'app_name' => 'string',
        'app_description' => 'string',
        'app_short_description' => 'string',
        'keywords' => 'string[]',
        'app_logo_url' => 'string',
        'auto_publish' => 'bool',
        'status' => '\Flipdish\\Client\Models\MobileAppsSubmissionStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobile_apps_submission_id' => 'int32',
        'app_name' => null,
        'app_description' => null,
        'app_short_description' => null,
        'keywords' => null,
        'app_logo_url' => null,
        'auto_publish' => null,
        'status' => null
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
        'mobile_apps_submission_id' => 'MobileAppsSubmissionId',
        'app_name' => 'AppName',
        'app_description' => 'AppDescription',
        'app_short_description' => 'AppShortDescription',
        'keywords' => 'Keywords',
        'app_logo_url' => 'AppLogoUrl',
        'auto_publish' => 'AutoPublish',
        'status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_apps_submission_id' => 'setMobileAppsSubmissionId',
        'app_name' => 'setAppName',
        'app_description' => 'setAppDescription',
        'app_short_description' => 'setAppShortDescription',
        'keywords' => 'setKeywords',
        'app_logo_url' => 'setAppLogoUrl',
        'auto_publish' => 'setAutoPublish',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_apps_submission_id' => 'getMobileAppsSubmissionId',
        'app_name' => 'getAppName',
        'app_description' => 'getAppDescription',
        'app_short_description' => 'getAppShortDescription',
        'keywords' => 'getKeywords',
        'app_logo_url' => 'getAppLogoUrl',
        'auto_publish' => 'getAutoPublish',
        'status' => 'getStatus'
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
        $this->container['mobile_apps_submission_id'] = isset($data['mobile_apps_submission_id']) ? $data['mobile_apps_submission_id'] : null;
        $this->container['app_name'] = isset($data['app_name']) ? $data['app_name'] : null;
        $this->container['app_description'] = isset($data['app_description']) ? $data['app_description'] : null;
        $this->container['app_short_description'] = isset($data['app_short_description']) ? $data['app_short_description'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['app_logo_url'] = isset($data['app_logo_url']) ? $data['app_logo_url'] : null;
        $this->container['auto_publish'] = isset($data['auto_publish']) ? $data['auto_publish'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets mobile_apps_submission_id
     *
     * @return int
     */
    public function getMobileAppsSubmissionId()
    {
        return $this->container['mobile_apps_submission_id'];
    }

    /**
     * Sets mobile_apps_submission_id
     *
     * @param int $mobile_apps_submission_id Mobile Apps Submission Id
     *
     * @return $this
     */
    public function setMobileAppsSubmissionId($mobile_apps_submission_id)
    {
        $this->container['mobile_apps_submission_id'] = $mobile_apps_submission_id;

        return $this;
    }

    /**
     * Gets app_name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string $app_name App Name
     *
     * @return $this
     */
    public function setAppName($app_name)
    {
        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets app_description
     *
     * @return string
     */
    public function getAppDescription()
    {
        return $this->container['app_description'];
    }

    /**
     * Sets app_description
     *
     * @param string $app_description App Description
     *
     * @return $this
     */
    public function setAppDescription($app_description)
    {
        $this->container['app_description'] = $app_description;

        return $this;
    }

    /**
     * Gets app_short_description
     *
     * @return string
     */
    public function getAppShortDescription()
    {
        return $this->container['app_short_description'];
    }

    /**
     * Sets app_short_description
     *
     * @param string $app_short_description App Description
     *
     * @return $this
     */
    public function setAppShortDescription($app_short_description)
    {
        $this->container['app_short_description'] = $app_short_description;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords Keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets app_logo_url
     *
     * @return string
     */
    public function getAppLogoUrl()
    {
        return $this->container['app_logo_url'];
    }

    /**
     * Sets app_logo_url
     *
     * @param string $app_logo_url Logo URL
     *
     * @return $this
     */
    public function setAppLogoUrl($app_logo_url)
    {
        $this->container['app_logo_url'] = $app_logo_url;

        return $this;
    }

    /**
     * Gets auto_publish
     *
     * @return bool
     */
    public function getAutoPublish()
    {
        return $this->container['auto_publish'];
    }

    /**
     * Sets auto_publish
     *
     * @param bool $auto_publish Publish automatically
     *
     * @return $this
     */
    public function setAutoPublish($auto_publish)
    {
        $this->container['auto_publish'] = $auto_publish;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Flipdish\\Client\Models\MobileAppsSubmissionStatus[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Flipdish\\Client\Models\MobileAppsSubmissionStatus[] $status Mobile App Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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



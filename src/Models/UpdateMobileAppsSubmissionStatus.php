<?php
/**
 * UpdateMobileAppsSubmissionStatus
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
 * UpdateMobileAppsSubmissionStatus Class Doc Comment
 *
 * @category Class
 * @description Update Mobile Apps Status
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateMobileAppsSubmissionStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateMobileAppsSubmissionStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobile_apps_submission_status_id' => 'int',
        'type' => 'string',
        'app_status' => 'string',
        'update_status' => 'string',
        'last_update_status_time' => '\DateTime',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobile_apps_submission_status_id' => 'int32',
        'type' => null,
        'app_status' => null,
        'update_status' => null,
        'last_update_status_time' => 'date-time',
        'notes' => null
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
        'mobile_apps_submission_status_id' => 'MobileAppsSubmissionStatusId',
        'type' => 'Type',
        'app_status' => 'AppStatus',
        'update_status' => 'UpdateStatus',
        'last_update_status_time' => 'LastUpdateStatusTime',
        'notes' => 'Notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile_apps_submission_status_id' => 'setMobileAppsSubmissionStatusId',
        'type' => 'setType',
        'app_status' => 'setAppStatus',
        'update_status' => 'setUpdateStatus',
        'last_update_status_time' => 'setLastUpdateStatusTime',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile_apps_submission_status_id' => 'getMobileAppsSubmissionStatusId',
        'type' => 'getType',
        'app_status' => 'getAppStatus',
        'update_status' => 'getUpdateStatus',
        'last_update_status_time' => 'getLastUpdateStatusTime',
        'notes' => 'getNotes'
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

    const TYPE_NONE = 'None';
    const TYPE_ANDROID = 'Android';
    const TYPE_IOS = 'IOS';
    const APP_STATUS_NONE = 'None';
    const APP_STATUS_PUBLISHED = 'Published';
    const APP_STATUS_UNPUBLISHED = 'Unpublished';
    const UPDATE_STATUS_NONE = 'None';
    const UPDATE_STATUS_SUBMITTED = 'Submitted';
    const UPDATE_STATUS_IN_REVIEW = 'InReview';
    const UPDATE_STATUS_REJECTED = 'Rejected';
    const UPDATE_STATUS_APPROVED = 'Approved';
    const UPDATE_STATUS_PUBLISHED = 'Published';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_ANDROID,
            self::TYPE_IOS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppStatusAllowableValues()
    {
        return [
            self::APP_STATUS_NONE,
            self::APP_STATUS_PUBLISHED,
            self::APP_STATUS_UNPUBLISHED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateStatusAllowableValues()
    {
        return [
            self::UPDATE_STATUS_NONE,
            self::UPDATE_STATUS_SUBMITTED,
            self::UPDATE_STATUS_IN_REVIEW,
            self::UPDATE_STATUS_REJECTED,
            self::UPDATE_STATUS_APPROVED,
            self::UPDATE_STATUS_PUBLISHED,
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
        $this->container['mobile_apps_submission_status_id'] = isset($data['mobile_apps_submission_status_id']) ? $data['mobile_apps_submission_status_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['app_status'] = isset($data['app_status']) ? $data['app_status'] : null;
        $this->container['update_status'] = isset($data['update_status']) ? $data['update_status'] : null;
        $this->container['last_update_status_time'] = isset($data['last_update_status_time']) ? $data['last_update_status_time'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAppStatusAllowableValues();
        if (!is_null($this->container['app_status']) && !in_array($this->container['app_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'app_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUpdateStatusAllowableValues();
        if (!is_null($this->container['update_status']) && !in_array($this->container['update_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'update_status', must be one of '%s'",
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
     * Gets mobile_apps_submission_status_id
     *
     * @return int
     */
    public function getMobileAppsSubmissionStatusId()
    {
        return $this->container['mobile_apps_submission_status_id'];
    }

    /**
     * Sets mobile_apps_submission_status_id
     *
     * @param int $mobile_apps_submission_status_id Mobile Apps Submission Status Id
     *
     * @return $this
     */
    public function setMobileAppsSubmissionStatusId($mobile_apps_submission_status_id)
    {
        $this->container['mobile_apps_submission_status_id'] = $mobile_apps_submission_status_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Mobile Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets app_status
     *
     * @return string
     */
    public function getAppStatus()
    {
        return $this->container['app_status'];
    }

    /**
     * Sets app_status
     *
     * @param string $app_status Mobile App Status
     *
     * @return $this
     */
    public function setAppStatus($app_status)
    {
        $allowedValues = $this->getAppStatusAllowableValues();
        if (!is_null($app_status) && !in_array($app_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'app_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['app_status'] = $app_status;

        return $this;
    }

    /**
     * Gets update_status
     *
     * @return string
     */
    public function getUpdateStatus()
    {
        return $this->container['update_status'];
    }

    /**
     * Sets update_status
     *
     * @param string $update_status Mobile App Status
     *
     * @return $this
     */
    public function setUpdateStatus($update_status)
    {
        $allowedValues = $this->getUpdateStatusAllowableValues();
        if (!is_null($update_status) && !in_array($update_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'update_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['update_status'] = $update_status;

        return $this;
    }

    /**
     * Gets last_update_status_time
     *
     * @return \DateTime
     */
    public function getLastUpdateStatusTime()
    {
        return $this->container['last_update_status_time'];
    }

    /**
     * Sets last_update_status_time
     *
     * @param \DateTime $last_update_status_time Mobile LastUpdateStatusTime
     *
     * @return $this
     */
    public function setLastUpdateStatusTime($last_update_status_time)
    {
        $this->container['last_update_status_time'] = $last_update_status_time;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Mobile Notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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



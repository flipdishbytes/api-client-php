<?php
/**
 * AppStoreApp
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
 * AppStoreApp Class Doc Comment
 *
 * @category Class
 * @description App store app
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppStoreApp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppStoreApp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'verification_status' => 'string',
        'logo' => 'string',
        'o_auth_app_id' => 'string',
        'internal' => 'bool',
        'details' => 'string',
        'configuration_type' => 'string',
        'store_selector_type' => 'string',
        'field_groups' => '\Flipdish\\Client\Models\FieldGroup[]',
        'setup_instructions' => 'string',
        'external_setup_link' => 'string',
        'teammate_app_access_level' => 'string',
        'permissions_type' => 'string',
        'support' => '\Flipdish\\Client\Models\AppStoreAppSupportInfo',
        'external_function_action_url' => 'string',
        'external_function_signature_key' => 'string',
        'name' => 'string',
        'description' => 'string',
        'is_enabled' => 'bool',
        'categories' => 'string[]',
        'countries' => 'string[]',
        'developer_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'verification_status' => null,
        'logo' => null,
        'o_auth_app_id' => null,
        'internal' => null,
        'details' => null,
        'configuration_type' => null,
        'store_selector_type' => null,
        'field_groups' => null,
        'setup_instructions' => null,
        'external_setup_link' => null,
        'teammate_app_access_level' => null,
        'permissions_type' => null,
        'support' => null,
        'external_function_action_url' => null,
        'external_function_signature_key' => null,
        'name' => null,
        'description' => null,
        'is_enabled' => null,
        'categories' => null,
        'countries' => null,
        'developer_name' => null
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
        'verification_status' => 'VerificationStatus',
        'logo' => 'Logo',
        'o_auth_app_id' => 'OAuthAppId',
        'internal' => 'Internal',
        'details' => 'Details',
        'configuration_type' => 'ConfigurationType',
        'store_selector_type' => 'StoreSelectorType',
        'field_groups' => 'FieldGroups',
        'setup_instructions' => 'SetupInstructions',
        'external_setup_link' => 'ExternalSetupLink',
        'teammate_app_access_level' => 'TeammateAppAccessLevel',
        'permissions_type' => 'PermissionsType',
        'support' => 'Support',
        'external_function_action_url' => 'ExternalFunctionActionUrl',
        'external_function_signature_key' => 'ExternalFunctionSignatureKey',
        'name' => 'Name',
        'description' => 'Description',
        'is_enabled' => 'IsEnabled',
        'categories' => 'Categories',
        'countries' => 'Countries',
        'developer_name' => 'DeveloperName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'verification_status' => 'setVerificationStatus',
        'logo' => 'setLogo',
        'o_auth_app_id' => 'setOAuthAppId',
        'internal' => 'setInternal',
        'details' => 'setDetails',
        'configuration_type' => 'setConfigurationType',
        'store_selector_type' => 'setStoreSelectorType',
        'field_groups' => 'setFieldGroups',
        'setup_instructions' => 'setSetupInstructions',
        'external_setup_link' => 'setExternalSetupLink',
        'teammate_app_access_level' => 'setTeammateAppAccessLevel',
        'permissions_type' => 'setPermissionsType',
        'support' => 'setSupport',
        'external_function_action_url' => 'setExternalFunctionActionUrl',
        'external_function_signature_key' => 'setExternalFunctionSignatureKey',
        'name' => 'setName',
        'description' => 'setDescription',
        'is_enabled' => 'setIsEnabled',
        'categories' => 'setCategories',
        'countries' => 'setCountries',
        'developer_name' => 'setDeveloperName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'verification_status' => 'getVerificationStatus',
        'logo' => 'getLogo',
        'o_auth_app_id' => 'getOAuthAppId',
        'internal' => 'getInternal',
        'details' => 'getDetails',
        'configuration_type' => 'getConfigurationType',
        'store_selector_type' => 'getStoreSelectorType',
        'field_groups' => 'getFieldGroups',
        'setup_instructions' => 'getSetupInstructions',
        'external_setup_link' => 'getExternalSetupLink',
        'teammate_app_access_level' => 'getTeammateAppAccessLevel',
        'permissions_type' => 'getPermissionsType',
        'support' => 'getSupport',
        'external_function_action_url' => 'getExternalFunctionActionUrl',
        'external_function_signature_key' => 'getExternalFunctionSignatureKey',
        'name' => 'getName',
        'description' => 'getDescription',
        'is_enabled' => 'getIsEnabled',
        'categories' => 'getCategories',
        'countries' => 'getCountries',
        'developer_name' => 'getDeveloperName'
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

    const VERIFICATION_STATUS_DRAFT = 'Draft';
    const VERIFICATION_STATUS_SUBMITTED = 'Submitted';
    const VERIFICATION_STATUS_VERIFIED = 'Verified';
    const CONFIGURATION_TYPE_EXTERNAL_LINK = 'ExternalLink';
    const CONFIGURATION_TYPE_FLIPDISH_HOSTED = 'FlipdishHosted';
    const STORE_SELECTOR_TYPE_NONE = 'None';
    const STORE_SELECTOR_TYPE_SINGLE = 'Single';
    const STORE_SELECTOR_TYPE_MULTIPLE = 'Multiple';
    const TEAMMATE_APP_ACCESS_LEVEL_OWNER = 'Owner';
    const TEAMMATE_APP_ACCESS_LEVEL_STORE_OWNER = 'StoreOwner';
    const TEAMMATE_APP_ACCESS_LEVEL_MANAGED_OWNER = 'ManagedOwner';
    const TEAMMATE_APP_ACCESS_LEVEL_INTEGRATOR = 'Integrator';
    const TEAMMATE_APP_ACCESS_LEVEL_STORE_MANAGER = 'StoreManager';
    const TEAMMATE_APP_ACCESS_LEVEL_STORE_STAFF = 'StoreStaff';
    const TEAMMATE_APP_ACCESS_LEVEL_STORE_READ_ONLY_ACCESS = 'StoreReadOnlyAccess';
    const TEAMMATE_APP_ACCESS_LEVEL_FINANCE_MANGER = 'FinanceManger';
    const PERMISSIONS_TYPE_TEAMMATE = 'Teammate';
    const CATEGORIES_POINT_OF_SALE = 'PointOfSale';
    const CATEGORIES_DELIVERY_AND_LOGISTICS = 'DeliveryAndLogistics';
    const CATEGORIES_CRM = 'CRM';
    const CATEGORIES_GIFT_CARD = 'GiftCard';
    const CATEGORIES_ACCOUNTING = 'Accounting';
    const CATEGORIES_LOYALTY_AND_MARKETING = 'LoyaltyAndMarketing';
    const CATEGORIES_OTHER = 'Other';
    const COUNTRIES_GB = 'GB';
    const COUNTRIES_IE = 'IE';
    const COUNTRIES_FR = 'FR';
    const COUNTRIES_ES = 'ES';
    const COUNTRIES_PT = 'PT';
    const COUNTRIES_IT = 'IT';
    const COUNTRIES_DE = 'DE';
    const COUNTRIES_PL = 'PL';
    const COUNTRIES_BE = 'BE';
    const COUNTRIES_LU = 'LU';
    const COUNTRIES_NL = 'NL';
    const COUNTRIES_US = 'US';
    const COUNTRIES_CA = 'CA';
    const COUNTRIES_BG = 'BG';
    const COUNTRIES_MX = 'MX';
    const COUNTRIES_AU = 'AU';
    const COUNTRIES_NZ = 'NZ';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerificationStatusAllowableValues()
    {
        return [
            self::VERIFICATION_STATUS_DRAFT,
            self::VERIFICATION_STATUS_SUBMITTED,
            self::VERIFICATION_STATUS_VERIFIED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfigurationTypeAllowableValues()
    {
        return [
            self::CONFIGURATION_TYPE_EXTERNAL_LINK,
            self::CONFIGURATION_TYPE_FLIPDISH_HOSTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStoreSelectorTypeAllowableValues()
    {
        return [
            self::STORE_SELECTOR_TYPE_NONE,
            self::STORE_SELECTOR_TYPE_SINGLE,
            self::STORE_SELECTOR_TYPE_MULTIPLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTeammateAppAccessLevelAllowableValues()
    {
        return [
            self::TEAMMATE_APP_ACCESS_LEVEL_OWNER,
            self::TEAMMATE_APP_ACCESS_LEVEL_STORE_OWNER,
            self::TEAMMATE_APP_ACCESS_LEVEL_MANAGED_OWNER,
            self::TEAMMATE_APP_ACCESS_LEVEL_INTEGRATOR,
            self::TEAMMATE_APP_ACCESS_LEVEL_STORE_MANAGER,
            self::TEAMMATE_APP_ACCESS_LEVEL_STORE_STAFF,
            self::TEAMMATE_APP_ACCESS_LEVEL_STORE_READ_ONLY_ACCESS,
            self::TEAMMATE_APP_ACCESS_LEVEL_FINANCE_MANGER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionsTypeAllowableValues()
    {
        return [
            self::PERMISSIONS_TYPE_TEAMMATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoriesAllowableValues()
    {
        return [
            self::CATEGORIES_POINT_OF_SALE,
            self::CATEGORIES_DELIVERY_AND_LOGISTICS,
            self::CATEGORIES_CRM,
            self::CATEGORIES_GIFT_CARD,
            self::CATEGORIES_ACCOUNTING,
            self::CATEGORIES_LOYALTY_AND_MARKETING,
            self::CATEGORIES_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountriesAllowableValues()
    {
        return [
            self::COUNTRIES_GB,
            self::COUNTRIES_IE,
            self::COUNTRIES_FR,
            self::COUNTRIES_ES,
            self::COUNTRIES_PT,
            self::COUNTRIES_IT,
            self::COUNTRIES_DE,
            self::COUNTRIES_PL,
            self::COUNTRIES_BE,
            self::COUNTRIES_LU,
            self::COUNTRIES_NL,
            self::COUNTRIES_US,
            self::COUNTRIES_CA,
            self::COUNTRIES_BG,
            self::COUNTRIES_MX,
            self::COUNTRIES_AU,
            self::COUNTRIES_NZ,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['verification_status'] = isset($data['verification_status']) ? $data['verification_status'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['o_auth_app_id'] = isset($data['o_auth_app_id']) ? $data['o_auth_app_id'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['configuration_type'] = isset($data['configuration_type']) ? $data['configuration_type'] : null;
        $this->container['store_selector_type'] = isset($data['store_selector_type']) ? $data['store_selector_type'] : null;
        $this->container['field_groups'] = isset($data['field_groups']) ? $data['field_groups'] : null;
        $this->container['setup_instructions'] = isset($data['setup_instructions']) ? $data['setup_instructions'] : null;
        $this->container['external_setup_link'] = isset($data['external_setup_link']) ? $data['external_setup_link'] : null;
        $this->container['teammate_app_access_level'] = isset($data['teammate_app_access_level']) ? $data['teammate_app_access_level'] : null;
        $this->container['permissions_type'] = isset($data['permissions_type']) ? $data['permissions_type'] : null;
        $this->container['support'] = isset($data['support']) ? $data['support'] : null;
        $this->container['external_function_action_url'] = isset($data['external_function_action_url']) ? $data['external_function_action_url'] : null;
        $this->container['external_function_signature_key'] = isset($data['external_function_signature_key']) ? $data['external_function_signature_key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['developer_name'] = isset($data['developer_name']) ? $data['developer_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['verification_status'] === null) {
            $invalidProperties[] = "'verification_status' can't be null";
        }
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!is_null($this->container['verification_status']) && !in_array($this->container['verification_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verification_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['o_auth_app_id'] === null) {
            $invalidProperties[] = "'o_auth_app_id' can't be null";
        }
        if ($this->container['internal'] === null) {
            $invalidProperties[] = "'internal' can't be null";
        }
        if ($this->container['details'] === null) {
            $invalidProperties[] = "'details' can't be null";
        }
        if ($this->container['configuration_type'] === null) {
            $invalidProperties[] = "'configuration_type' can't be null";
        }
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!is_null($this->container['configuration_type']) && !in_array($this->container['configuration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'configuration_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['store_selector_type'] === null) {
            $invalidProperties[] = "'store_selector_type' can't be null";
        }
        $allowedValues = $this->getStoreSelectorTypeAllowableValues();
        if (!is_null($this->container['store_selector_type']) && !in_array($this->container['store_selector_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'store_selector_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTeammateAppAccessLevelAllowableValues();
        if (!is_null($this->container['teammate_app_access_level']) && !in_array($this->container['teammate_app_access_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'teammate_app_access_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['permissions_type'] === null) {
            $invalidProperties[] = "'permissions_type' can't be null";
        }
        $allowedValues = $this->getPermissionsTypeAllowableValues();
        if (!is_null($this->container['permissions_type']) && !in_array($this->container['permissions_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'permissions_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['countries'] === null) {
            $invalidProperties[] = "'countries' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique App store app id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets verification_status
     *
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->container['verification_status'];
    }

    /**
     * Sets verification_status
     *
     * @param string $verification_status Application verification status
     *
     * @return $this
     */
    public function setVerificationStatus($verification_status)
    {
        $allowedValues = $this->getVerificationStatusAllowableValues();
        if (!in_array($verification_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'verification_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verification_status'] = $verification_status;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo Logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets o_auth_app_id
     *
     * @return string
     */
    public function getOAuthAppId()
    {
        return $this->container['o_auth_app_id'];
    }

    /**
     * Sets o_auth_app_id
     *
     * @param string $o_auth_app_id OAuth App identifier
     *
     * @return $this
     */
    public function setOAuthAppId($o_auth_app_id)
    {
        $this->container['o_auth_app_id'] = $o_auth_app_id;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return bool
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param bool $internal Internal
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details Details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets configuration_type
     *
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->container['configuration_type'];
    }

    /**
     * Sets configuration_type
     *
     * @param string $configuration_type Configuration type  <example>External link</example><example>Flipdish hosted</example>
     *
     * @return $this
     */
    public function setConfigurationType($configuration_type)
    {
        $allowedValues = $this->getConfigurationTypeAllowableValues();
        if (!in_array($configuration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'configuration_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['configuration_type'] = $configuration_type;

        return $this;
    }

    /**
     * Gets store_selector_type
     *
     * @return string
     */
    public function getStoreSelectorType()
    {
        return $this->container['store_selector_type'];
    }

    /**
     * Sets store_selector_type
     *
     * @param string $store_selector_type Store selector type
     *
     * @return $this
     */
    public function setStoreSelectorType($store_selector_type)
    {
        $allowedValues = $this->getStoreSelectorTypeAllowableValues();
        if (!in_array($store_selector_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'store_selector_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['store_selector_type'] = $store_selector_type;

        return $this;
    }

    /**
     * Gets field_groups
     *
     * @return \Flipdish\\Client\Models\FieldGroup[]
     */
    public function getFieldGroups()
    {
        return $this->container['field_groups'];
    }

    /**
     * Sets field_groups
     *
     * @param \Flipdish\\Client\Models\FieldGroup[] $field_groups Field groups
     *
     * @return $this
     */
    public function setFieldGroups($field_groups)
    {
        $this->container['field_groups'] = $field_groups;

        return $this;
    }

    /**
     * Gets setup_instructions
     *
     * @return string
     */
    public function getSetupInstructions()
    {
        return $this->container['setup_instructions'];
    }

    /**
     * Sets setup_instructions
     *
     * @param string $setup_instructions Setup instructions
     *
     * @return $this
     */
    public function setSetupInstructions($setup_instructions)
    {
        $this->container['setup_instructions'] = $setup_instructions;

        return $this;
    }

    /**
     * Gets external_setup_link
     *
     * @return string
     */
    public function getExternalSetupLink()
    {
        return $this->container['external_setup_link'];
    }

    /**
     * Sets external_setup_link
     *
     * @param string $external_setup_link External setup link
     *
     * @return $this
     */
    public function setExternalSetupLink($external_setup_link)
    {
        $this->container['external_setup_link'] = $external_setup_link;

        return $this;
    }

    /**
     * Gets teammate_app_access_level
     *
     * @return string
     */
    public function getTeammateAppAccessLevel()
    {
        return $this->container['teammate_app_access_level'];
    }

    /**
     * Sets teammate_app_access_level
     *
     * @param string $teammate_app_access_level Teammate app access level
     *
     * @return $this
     */
    public function setTeammateAppAccessLevel($teammate_app_access_level)
    {
        $allowedValues = $this->getTeammateAppAccessLevelAllowableValues();
        if (!is_null($teammate_app_access_level) && !in_array($teammate_app_access_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'teammate_app_access_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['teammate_app_access_level'] = $teammate_app_access_level;

        return $this;
    }

    /**
     * Gets permissions_type
     *
     * @return string
     */
    public function getPermissionsType()
    {
        return $this->container['permissions_type'];
    }

    /**
     * Sets permissions_type
     *
     * @param string $permissions_type Permissions type
     *
     * @return $this
     */
    public function setPermissionsType($permissions_type)
    {
        $allowedValues = $this->getPermissionsTypeAllowableValues();
        if (!in_array($permissions_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'permissions_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permissions_type'] = $permissions_type;

        return $this;
    }

    /**
     * Gets support
     *
     * @return \Flipdish\\Client\Models\AppStoreAppSupportInfo
     */
    public function getSupport()
    {
        return $this->container['support'];
    }

    /**
     * Sets support
     *
     * @param \Flipdish\\Client\Models\AppStoreAppSupportInfo $support Support information
     *
     * @return $this
     */
    public function setSupport($support)
    {
        $this->container['support'] = $support;

        return $this;
    }

    /**
     * Gets external_function_action_url
     *
     * @return string
     */
    public function getExternalFunctionActionUrl()
    {
        return $this->container['external_function_action_url'];
    }

    /**
     * Sets external_function_action_url
     *
     * @param string $external_function_action_url Action URL for external functions, used for handling Portal configuration action buttons
     *
     * @return $this
     */
    public function setExternalFunctionActionUrl($external_function_action_url)
    {
        $this->container['external_function_action_url'] = $external_function_action_url;

        return $this;
    }

    /**
     * Gets external_function_signature_key
     *
     * @return string
     */
    public function getExternalFunctionSignatureKey()
    {
        return $this->container['external_function_signature_key'];
    }

    /**
     * Sets external_function_signature_key
     *
     * @param string $external_function_signature_key Signing key for external function action calls
     *
     * @return $this
     */
    public function setExternalFunctionSignatureKey($external_function_signature_key)
    {
        $this->container['external_function_signature_key'] = $external_function_signature_key;

        return $this;
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
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Is application enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories Categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $allowedValues = $this->getCategoriesAllowableValues();
        if (array_diff($categories, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'categories', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return string[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string[] $countries Countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $allowedValues = $this->getCountriesAllowableValues();
        if (array_diff($countries, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'countries', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets developer_name
     *
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->container['developer_name'];
    }

    /**
     * Sets developer_name
     *
     * @param string $developer_name Developer Name
     *
     * @return $this
     */
    public function setDeveloperName($developer_name)
    {
        $this->container['developer_name'] = $developer_name;

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



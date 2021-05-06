<?php
/**
 * IndexPage
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
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flipdish\Client\Models;

use \ArrayAccess;
use \Flipdish\Client\ObjectSerializer;

/**
 * IndexPage Class Doc Comment
 *
 * @category Class
 * @description Index Page
 * @package  Flipdish\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndexPage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IndexPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'testimonials' => '\Flipdish\Client\Models\WebsiteTestimonial[]',
        'images' => '\Flipdish\Client\Models\WebsiteImage[]',
        'about_section_enabled' => 'bool',
        'about_section_title' => 'string',
        'about_section_subtitle' => 'string',
        'about_section_left_title' => 'string',
        'about_section_left_body' => 'string',
        'about_section_right_title' => 'string',
        'about_section_right_body' => 'string',
        'opening_hours_enabled' => 'bool',
        'menu_preview_enabled' => 'bool',
        'gallery_enabled' => 'bool',
        'testimonials_enabled' => 'bool',
        'contact_form_enabled' => 'bool',
        'contact_form_email' => 'string',
        'map_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'testimonials' => null,
        'images' => null,
        'about_section_enabled' => null,
        'about_section_title' => null,
        'about_section_subtitle' => null,
        'about_section_left_title' => null,
        'about_section_left_body' => null,
        'about_section_right_title' => null,
        'about_section_right_body' => null,
        'opening_hours_enabled' => null,
        'menu_preview_enabled' => null,
        'gallery_enabled' => null,
        'testimonials_enabled' => null,
        'contact_form_enabled' => null,
        'contact_form_email' => null,
        'map_enabled' => null
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
        'testimonials' => 'Testimonials',
        'images' => 'Images',
        'about_section_enabled' => 'AboutSectionEnabled',
        'about_section_title' => 'AboutSectionTitle',
        'about_section_subtitle' => 'AboutSectionSubtitle',
        'about_section_left_title' => 'AboutSectionLeftTitle',
        'about_section_left_body' => 'AboutSectionLeftBody',
        'about_section_right_title' => 'AboutSectionRightTitle',
        'about_section_right_body' => 'AboutSectionRightBody',
        'opening_hours_enabled' => 'OpeningHoursEnabled',
        'menu_preview_enabled' => 'MenuPreviewEnabled',
        'gallery_enabled' => 'GalleryEnabled',
        'testimonials_enabled' => 'TestimonialsEnabled',
        'contact_form_enabled' => 'ContactFormEnabled',
        'contact_form_email' => 'ContactFormEmail',
        'map_enabled' => 'MapEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'testimonials' => 'setTestimonials',
        'images' => 'setImages',
        'about_section_enabled' => 'setAboutSectionEnabled',
        'about_section_title' => 'setAboutSectionTitle',
        'about_section_subtitle' => 'setAboutSectionSubtitle',
        'about_section_left_title' => 'setAboutSectionLeftTitle',
        'about_section_left_body' => 'setAboutSectionLeftBody',
        'about_section_right_title' => 'setAboutSectionRightTitle',
        'about_section_right_body' => 'setAboutSectionRightBody',
        'opening_hours_enabled' => 'setOpeningHoursEnabled',
        'menu_preview_enabled' => 'setMenuPreviewEnabled',
        'gallery_enabled' => 'setGalleryEnabled',
        'testimonials_enabled' => 'setTestimonialsEnabled',
        'contact_form_enabled' => 'setContactFormEnabled',
        'contact_form_email' => 'setContactFormEmail',
        'map_enabled' => 'setMapEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'testimonials' => 'getTestimonials',
        'images' => 'getImages',
        'about_section_enabled' => 'getAboutSectionEnabled',
        'about_section_title' => 'getAboutSectionTitle',
        'about_section_subtitle' => 'getAboutSectionSubtitle',
        'about_section_left_title' => 'getAboutSectionLeftTitle',
        'about_section_left_body' => 'getAboutSectionLeftBody',
        'about_section_right_title' => 'getAboutSectionRightTitle',
        'about_section_right_body' => 'getAboutSectionRightBody',
        'opening_hours_enabled' => 'getOpeningHoursEnabled',
        'menu_preview_enabled' => 'getMenuPreviewEnabled',
        'gallery_enabled' => 'getGalleryEnabled',
        'testimonials_enabled' => 'getTestimonialsEnabled',
        'contact_form_enabled' => 'getContactFormEnabled',
        'contact_form_email' => 'getContactFormEmail',
        'map_enabled' => 'getMapEnabled'
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
        $this->container['testimonials'] = isset($data['testimonials']) ? $data['testimonials'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['about_section_enabled'] = isset($data['about_section_enabled']) ? $data['about_section_enabled'] : null;
        $this->container['about_section_title'] = isset($data['about_section_title']) ? $data['about_section_title'] : null;
        $this->container['about_section_subtitle'] = isset($data['about_section_subtitle']) ? $data['about_section_subtitle'] : null;
        $this->container['about_section_left_title'] = isset($data['about_section_left_title']) ? $data['about_section_left_title'] : null;
        $this->container['about_section_left_body'] = isset($data['about_section_left_body']) ? $data['about_section_left_body'] : null;
        $this->container['about_section_right_title'] = isset($data['about_section_right_title']) ? $data['about_section_right_title'] : null;
        $this->container['about_section_right_body'] = isset($data['about_section_right_body']) ? $data['about_section_right_body'] : null;
        $this->container['opening_hours_enabled'] = isset($data['opening_hours_enabled']) ? $data['opening_hours_enabled'] : null;
        $this->container['menu_preview_enabled'] = isset($data['menu_preview_enabled']) ? $data['menu_preview_enabled'] : null;
        $this->container['gallery_enabled'] = isset($data['gallery_enabled']) ? $data['gallery_enabled'] : null;
        $this->container['testimonials_enabled'] = isset($data['testimonials_enabled']) ? $data['testimonials_enabled'] : null;
        $this->container['contact_form_enabled'] = isset($data['contact_form_enabled']) ? $data['contact_form_enabled'] : null;
        $this->container['contact_form_email'] = isset($data['contact_form_email']) ? $data['contact_form_email'] : null;
        $this->container['map_enabled'] = isset($data['map_enabled']) ? $data['map_enabled'] : null;
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
     * Gets testimonials
     *
     * @return \Flipdish\Client\Models\WebsiteTestimonial[]
     */
    public function getTestimonials()
    {
        return $this->container['testimonials'];
    }

    /**
     * Sets testimonials
     *
     * @param \Flipdish\Client\Models\WebsiteTestimonial[] $testimonials Testimonials
     *
     * @return $this
     */
    public function setTestimonials($testimonials)
    {
        $this->container['testimonials'] = $testimonials;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Flipdish\Client\Models\WebsiteImage[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Flipdish\Client\Models\WebsiteImage[] $images Images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets about_section_enabled
     *
     * @return bool
     */
    public function getAboutSectionEnabled()
    {
        return $this->container['about_section_enabled'];
    }

    /**
     * Sets about_section_enabled
     *
     * @param bool $about_section_enabled About section enabled
     *
     * @return $this
     */
    public function setAboutSectionEnabled($about_section_enabled)
    {
        $this->container['about_section_enabled'] = $about_section_enabled;

        return $this;
    }

    /**
     * Gets about_section_title
     *
     * @return string
     */
    public function getAboutSectionTitle()
    {
        return $this->container['about_section_title'];
    }

    /**
     * Sets about_section_title
     *
     * @param string $about_section_title About section title
     *
     * @return $this
     */
    public function setAboutSectionTitle($about_section_title)
    {
        $this->container['about_section_title'] = $about_section_title;

        return $this;
    }

    /**
     * Gets about_section_subtitle
     *
     * @return string
     */
    public function getAboutSectionSubtitle()
    {
        return $this->container['about_section_subtitle'];
    }

    /**
     * Sets about_section_subtitle
     *
     * @param string $about_section_subtitle About section sub-title
     *
     * @return $this
     */
    public function setAboutSectionSubtitle($about_section_subtitle)
    {
        $this->container['about_section_subtitle'] = $about_section_subtitle;

        return $this;
    }

    /**
     * Gets about_section_left_title
     *
     * @return string
     */
    public function getAboutSectionLeftTitle()
    {
        return $this->container['about_section_left_title'];
    }

    /**
     * Sets about_section_left_title
     *
     * @param string $about_section_left_title About section title left
     *
     * @return $this
     */
    public function setAboutSectionLeftTitle($about_section_left_title)
    {
        $this->container['about_section_left_title'] = $about_section_left_title;

        return $this;
    }

    /**
     * Gets about_section_left_body
     *
     * @return string
     */
    public function getAboutSectionLeftBody()
    {
        return $this->container['about_section_left_body'];
    }

    /**
     * Sets about_section_left_body
     *
     * @param string $about_section_left_body About section text left
     *
     * @return $this
     */
    public function setAboutSectionLeftBody($about_section_left_body)
    {
        $this->container['about_section_left_body'] = $about_section_left_body;

        return $this;
    }

    /**
     * Gets about_section_right_title
     *
     * @return string
     */
    public function getAboutSectionRightTitle()
    {
        return $this->container['about_section_right_title'];
    }

    /**
     * Sets about_section_right_title
     *
     * @param string $about_section_right_title About section title right
     *
     * @return $this
     */
    public function setAboutSectionRightTitle($about_section_right_title)
    {
        $this->container['about_section_right_title'] = $about_section_right_title;

        return $this;
    }

    /**
     * Gets about_section_right_body
     *
     * @return string
     */
    public function getAboutSectionRightBody()
    {
        return $this->container['about_section_right_body'];
    }

    /**
     * Sets about_section_right_body
     *
     * @param string $about_section_right_body About section text right
     *
     * @return $this
     */
    public function setAboutSectionRightBody($about_section_right_body)
    {
        $this->container['about_section_right_body'] = $about_section_right_body;

        return $this;
    }

    /**
     * Gets opening_hours_enabled
     *
     * @return bool
     */
    public function getOpeningHoursEnabled()
    {
        return $this->container['opening_hours_enabled'];
    }

    /**
     * Sets opening_hours_enabled
     *
     * @param bool $opening_hours_enabled Opening hours section Enabled
     *
     * @return $this
     */
    public function setOpeningHoursEnabled($opening_hours_enabled)
    {
        $this->container['opening_hours_enabled'] = $opening_hours_enabled;

        return $this;
    }

    /**
     * Gets menu_preview_enabled
     *
     * @return bool
     */
    public function getMenuPreviewEnabled()
    {
        return $this->container['menu_preview_enabled'];
    }

    /**
     * Sets menu_preview_enabled
     *
     * @param bool $menu_preview_enabled Menu Preview section Enabled
     *
     * @return $this
     */
    public function setMenuPreviewEnabled($menu_preview_enabled)
    {
        $this->container['menu_preview_enabled'] = $menu_preview_enabled;

        return $this;
    }

    /**
     * Gets gallery_enabled
     *
     * @return bool
     */
    public function getGalleryEnabled()
    {
        return $this->container['gallery_enabled'];
    }

    /**
     * Sets gallery_enabled
     *
     * @param bool $gallery_enabled Gallery section enabled
     *
     * @return $this
     */
    public function setGalleryEnabled($gallery_enabled)
    {
        $this->container['gallery_enabled'] = $gallery_enabled;

        return $this;
    }

    /**
     * Gets testimonials_enabled
     *
     * @return bool
     */
    public function getTestimonialsEnabled()
    {
        return $this->container['testimonials_enabled'];
    }

    /**
     * Sets testimonials_enabled
     *
     * @param bool $testimonials_enabled Testimonials section Enabled
     *
     * @return $this
     */
    public function setTestimonialsEnabled($testimonials_enabled)
    {
        $this->container['testimonials_enabled'] = $testimonials_enabled;

        return $this;
    }

    /**
     * Gets contact_form_enabled
     *
     * @return bool
     */
    public function getContactFormEnabled()
    {
        return $this->container['contact_form_enabled'];
    }

    /**
     * Sets contact_form_enabled
     *
     * @param bool $contact_form_enabled Contact Form section Enabled
     *
     * @return $this
     */
    public function setContactFormEnabled($contact_form_enabled)
    {
        $this->container['contact_form_enabled'] = $contact_form_enabled;

        return $this;
    }

    /**
     * Gets contact_form_email
     *
     * @return string
     */
    public function getContactFormEmail()
    {
        return $this->container['contact_form_email'];
    }

    /**
     * Sets contact_form_email
     *
     * @param string $contact_form_email Contact Form Email
     *
     * @return $this
     */
    public function setContactFormEmail($contact_form_email)
    {
        $this->container['contact_form_email'] = $contact_form_email;

        return $this;
    }

    /**
     * Gets map_enabled
     *
     * @return bool
     */
    public function getMapEnabled()
    {
        return $this->container['map_enabled'];
    }

    /**
     * Sets map_enabled
     *
     * @param bool $map_enabled Map section Enabled
     *
     * @return $this
     */
    public function setMapEnabled($map_enabled)
    {
        $this->container['map_enabled'] = $map_enabled;

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



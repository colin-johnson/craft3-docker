<?php
/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandSocialMediaDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QSR Automations API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QsrAutomations\Api\Model;

use \ArrayAccess;

/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandSocialMediaDTO Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesBrandsBrandSocialMediaDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.Enterprise.DineTimeThirdParty.Common.BaseClasses.Brands.BrandSocialMediaDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'facebook_url' => 'string',
        'twitter_url' => 'string',
        'linked_in_url' => 'string',
        'google_plus_url' => 'string',
        'you_tube_url' => 'string',
        'instagram_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'facebook_url' => null,
        'twitter_url' => null,
        'linked_in_url' => null,
        'google_plus_url' => null,
        'you_tube_url' => null,
        'instagram_url' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'facebook_url' => 'FacebookUrl',
        'twitter_url' => 'TwitterUrl',
        'linked_in_url' => 'LinkedInUrl',
        'google_plus_url' => 'GooglePlusUrl',
        'you_tube_url' => 'YouTubeUrl',
        'instagram_url' => 'InstagramUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'facebook_url' => 'setFacebookUrl',
        'twitter_url' => 'setTwitterUrl',
        'linked_in_url' => 'setLinkedInUrl',
        'google_plus_url' => 'setGooglePlusUrl',
        'you_tube_url' => 'setYouTubeUrl',
        'instagram_url' => 'setInstagramUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'facebook_url' => 'getFacebookUrl',
        'twitter_url' => 'getTwitterUrl',
        'linked_in_url' => 'getLinkedInUrl',
        'google_plus_url' => 'getGooglePlusUrl',
        'you_tube_url' => 'getYouTubeUrl',
        'instagram_url' => 'getInstagramUrl'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['facebook_url'] = isset($data['facebook_url']) ? $data['facebook_url'] : null;
        $this->container['twitter_url'] = isset($data['twitter_url']) ? $data['twitter_url'] : null;
        $this->container['linked_in_url'] = isset($data['linked_in_url']) ? $data['linked_in_url'] : null;
        $this->container['google_plus_url'] = isset($data['google_plus_url']) ? $data['google_plus_url'] : null;
        $this->container['you_tube_url'] = isset($data['you_tube_url']) ? $data['you_tube_url'] : null;
        $this->container['instagram_url'] = isset($data['instagram_url']) ? $data['instagram_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets facebook_url
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->container['facebook_url'];
    }

    /**
     * Sets facebook_url
     * @param string $facebook_url
     * @return $this
     */
    public function setFacebookUrl($facebook_url)
    {
        $this->container['facebook_url'] = $facebook_url;

        return $this;
    }

    /**
     * Gets twitter_url
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->container['twitter_url'];
    }

    /**
     * Sets twitter_url
     * @param string $twitter_url
     * @return $this
     */
    public function setTwitterUrl($twitter_url)
    {
        $this->container['twitter_url'] = $twitter_url;

        return $this;
    }

    /**
     * Gets linked_in_url
     * @return string
     */
    public function getLinkedInUrl()
    {
        return $this->container['linked_in_url'];
    }

    /**
     * Sets linked_in_url
     * @param string $linked_in_url
     * @return $this
     */
    public function setLinkedInUrl($linked_in_url)
    {
        $this->container['linked_in_url'] = $linked_in_url;

        return $this;
    }

    /**
     * Gets google_plus_url
     * @return string
     */
    public function getGooglePlusUrl()
    {
        return $this->container['google_plus_url'];
    }

    /**
     * Sets google_plus_url
     * @param string $google_plus_url
     * @return $this
     */
    public function setGooglePlusUrl($google_plus_url)
    {
        $this->container['google_plus_url'] = $google_plus_url;

        return $this;
    }

    /**
     * Gets you_tube_url
     * @return string
     */
    public function getYouTubeUrl()
    {
        return $this->container['you_tube_url'];
    }

    /**
     * Sets you_tube_url
     * @param string $you_tube_url
     * @return $this
     */
    public function setYouTubeUrl($you_tube_url)
    {
        $this->container['you_tube_url'] = $you_tube_url;

        return $this;
    }

    /**
     * Gets instagram_url
     * @return string
     */
    public function getInstagramUrl()
    {
        return $this->container['instagram_url'];
    }

    /**
     * Sets instagram_url
     * @param string $instagram_url
     * @return $this
     */
    public function setInstagramUrl($instagram_url)
    {
        $this->container['instagram_url'] = $instagram_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\QsrAutomations\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\QsrAutomations\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}



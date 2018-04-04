<?php
/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage
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
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetricPage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.Enterprise.DineTimeThirdParty.Common.BaseClasses.Kitchen.ViewMetricPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'has_more' => 'bool',
        'page_data' => '\QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetric[]',
        'site_uid' => 'string',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'has_more' => null,
        'page_data' => null,
        'site_uid' => null,
        'token' => null
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
        'has_more' => 'HasMore',
        'page_data' => 'PageData',
        'site_uid' => 'SiteUID',
        'token' => 'Token'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'has_more' => 'setHasMore',
        'page_data' => 'setPageData',
        'site_uid' => 'setSiteUid',
        'token' => 'setToken'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'has_more' => 'getHasMore',
        'page_data' => 'getPageData',
        'site_uid' => 'getSiteUid',
        'token' => 'getToken'
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
        $this->container['has_more'] = isset($data['has_more']) ? $data['has_more'] : null;
        $this->container['page_data'] = isset($data['page_data']) ? $data['page_data'] : null;
        $this->container['site_uid'] = isset($data['site_uid']) ? $data['site_uid'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
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
     * Gets has_more
     * @return bool
     */
    public function getHasMore()
    {
        return $this->container['has_more'];
    }

    /**
     * Sets has_more
     * @param bool $has_more
     * @return $this
     */
    public function setHasMore($has_more)
    {
        $this->container['has_more'] = $has_more;

        return $this;
    }

    /**
     * Gets page_data
     * @return \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetric[]
     */
    public function getPageData()
    {
        return $this->container['page_data'];
    }

    /**
     * Sets page_data
     * @param \QsrAutomations\Api\Model\QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetric[] $page_data
     * @return $this
     */
    public function setPageData($page_data)
    {
        $this->container['page_data'] = $page_data;

        return $this;
    }

    /**
     * Gets site_uid
     * @return string
     */
    public function getSiteUid()
    {
        return $this->container['site_uid'];
    }

    /**
     * Sets site_uid
     * @param string $site_uid
     * @return $this
     */
    public function setSiteUid($site_uid)
    {
        $this->container['site_uid'] = $site_uid;

        return $this;
    }

    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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



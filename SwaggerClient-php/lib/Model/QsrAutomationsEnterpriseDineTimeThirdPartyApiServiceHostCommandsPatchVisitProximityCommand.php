<?php
/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand
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
 * QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsEnterpriseDineTimeThirdPartyApiServiceHostCommandsPatchVisitProximityCommand implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.Enterprise.DineTimeThirdPartyApiService.Host.Commands.PatchVisitProximityCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'site_uid' => 'string',
        'visit_uid' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'timestamp' => '\DateTime',
        'distance' => 'float',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'site_uid' => null,
        'visit_uid' => null,
        'latitude' => 'float',
        'longitude' => 'float',
        'timestamp' => 'date-time',
        'distance' => 'float',
        'source' => null
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
        'site_uid' => 'SiteUID',
        'visit_uid' => 'VisitUID',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'timestamp' => 'Timestamp',
        'distance' => 'Distance',
        'source' => 'Source'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'site_uid' => 'setSiteUid',
        'visit_uid' => 'setVisitUid',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'timestamp' => 'setTimestamp',
        'distance' => 'setDistance',
        'source' => 'setSource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'site_uid' => 'getSiteUid',
        'visit_uid' => 'getVisitUid',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'timestamp' => 'getTimestamp',
        'distance' => 'getDistance',
        'source' => 'getSource'
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
        $this->container['site_uid'] = isset($data['site_uid']) ? $data['site_uid'] : null;
        $this->container['visit_uid'] = isset($data['visit_uid']) ? $data['visit_uid'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
     * Gets visit_uid
     * @return string
     */
    public function getVisitUid()
    {
        return $this->container['visit_uid'];
    }

    /**
     * Sets visit_uid
     * @param string $visit_uid
     * @return $this
     */
    public function setVisitUid($visit_uid)
    {
        $this->container['visit_uid'] = $visit_uid;

        return $this;
    }

    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param float $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param float $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets timestamp
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param \DateTime $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets distance
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     * @param float $distance
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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



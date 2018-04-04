<?php
/**
 * QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse
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
 * QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeContractsVisitsTypesIVisitPollResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.Contracts.Visits.Types.IVisitPollResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visits' => '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance[]',
        'timestamp_cutoff' => '\DateTime',
        'more_data' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'visits' => null,
        'timestamp_cutoff' => 'date-time',
        'more_data' => null
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
        'visits' => 'Visits',
        'timestamp_cutoff' => 'TimestampCutoff',
        'more_data' => 'MoreData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'visits' => 'setVisits',
        'timestamp_cutoff' => 'setTimestampCutoff',
        'more_data' => 'setMoreData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'visits' => 'getVisits',
        'timestamp_cutoff' => 'getTimestampCutoff',
        'more_data' => 'getMoreData'
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
        $this->container['visits'] = isset($data['visits']) ? $data['visits'] : null;
        $this->container['timestamp_cutoff'] = isset($data['timestamp_cutoff']) ? $data['timestamp_cutoff'] : null;
        $this->container['more_data'] = isset($data['more_data']) ? $data['more_data'] : null;
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
     * Gets visits
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance[]
     */
    public function getVisits()
    {
        return $this->container['visits'];
    }

    /**
     * Sets visits
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitInstance[] $visits
     * @return $this
     */
    public function setVisits($visits)
    {
        $this->container['visits'] = $visits;

        return $this;
    }

    /**
     * Gets timestamp_cutoff
     * @return \DateTime
     */
    public function getTimestampCutoff()
    {
        return $this->container['timestamp_cutoff'];
    }

    /**
     * Sets timestamp_cutoff
     * @param \DateTime $timestamp_cutoff
     * @return $this
     */
    public function setTimestampCutoff($timestamp_cutoff)
    {
        $this->container['timestamp_cutoff'] = $timestamp_cutoff;

        return $this;
    }

    /**
     * Gets more_data
     * @return bool
     */
    public function getMoreData()
    {
        return $this->container['more_data'];
    }

    /**
     * Sets more_data
     * @param bool $more_data
     * @return $this
     */
    public function setMoreData($more_data)
    {
        $this->container['more_data'] = $more_data;

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



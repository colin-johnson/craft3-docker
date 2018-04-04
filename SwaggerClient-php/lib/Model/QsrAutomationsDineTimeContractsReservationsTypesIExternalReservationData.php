<?php
/**
 * QsrAutomationsDineTimeContractsReservationsTypesIExternalReservationData
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
 * QsrAutomationsDineTimeContractsReservationsTypesIExternalReservationData Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeContractsReservationsTypesIExternalReservationData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.Contracts.Reservations.Types.IExternalReservationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'guest' => '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData',
        'size' => 'int',
        'estimated_arrival_time' => '\DateTime',
        'canceled_time' => '\DateTime',
        'notes' => 'string',
        'custom_values' => '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitCustomValue[]',
        'party_mix' => '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPartyMix',
        'sync_source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'guest' => null,
        'size' => 'int32',
        'estimated_arrival_time' => 'date-time',
        'canceled_time' => 'date-time',
        'notes' => null,
        'custom_values' => null,
        'party_mix' => null,
        'sync_source' => null
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
        'guest' => 'Guest',
        'size' => 'Size',
        'estimated_arrival_time' => 'EstimatedArrivalTime',
        'canceled_time' => 'CanceledTime',
        'notes' => 'Notes',
        'custom_values' => 'CustomValues',
        'party_mix' => 'PartyMix',
        'sync_source' => 'SyncSource'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'guest' => 'setGuest',
        'size' => 'setSize',
        'estimated_arrival_time' => 'setEstimatedArrivalTime',
        'canceled_time' => 'setCanceledTime',
        'notes' => 'setNotes',
        'custom_values' => 'setCustomValues',
        'party_mix' => 'setPartyMix',
        'sync_source' => 'setSyncSource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'guest' => 'getGuest',
        'size' => 'getSize',
        'estimated_arrival_time' => 'getEstimatedArrivalTime',
        'canceled_time' => 'getCanceledTime',
        'notes' => 'getNotes',
        'custom_values' => 'getCustomValues',
        'party_mix' => 'getPartyMix',
        'sync_source' => 'getSyncSource'
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
        $this->container['guest'] = isset($data['guest']) ? $data['guest'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['estimated_arrival_time'] = isset($data['estimated_arrival_time']) ? $data['estimated_arrival_time'] : null;
        $this->container['canceled_time'] = isset($data['canceled_time']) ? $data['canceled_time'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['custom_values'] = isset($data['custom_values']) ? $data['custom_values'] : null;
        $this->container['party_mix'] = isset($data['party_mix']) ? $data['party_mix'] : null;
        $this->container['sync_source'] = isset($data['sync_source']) ? $data['sync_source'] : null;
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
     * Gets guest
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData
     */
    public function getGuest()
    {
        return $this->container['guest'];
    }

    /**
     * Sets guest
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData $guest
     * @return $this
     */
    public function setGuest($guest)
    {
        $this->container['guest'] = $guest;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets estimated_arrival_time
     * @return \DateTime
     */
    public function getEstimatedArrivalTime()
    {
        return $this->container['estimated_arrival_time'];
    }

    /**
     * Sets estimated_arrival_time
     * @param \DateTime $estimated_arrival_time
     * @return $this
     */
    public function setEstimatedArrivalTime($estimated_arrival_time)
    {
        $this->container['estimated_arrival_time'] = $estimated_arrival_time;

        return $this;
    }

    /**
     * Gets canceled_time
     * @return \DateTime
     */
    public function getCanceledTime()
    {
        return $this->container['canceled_time'];
    }

    /**
     * Sets canceled_time
     * @param \DateTime $canceled_time
     * @return $this
     */
    public function setCanceledTime($canceled_time)
    {
        $this->container['canceled_time'] = $canceled_time;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets custom_values
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitCustomValue[]
     */
    public function getCustomValues()
    {
        return $this->container['custom_values'];
    }

    /**
     * Sets custom_values
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitCustomValue[] $custom_values
     * @return $this
     */
    public function setCustomValues($custom_values)
    {
        $this->container['custom_values'] = $custom_values;

        return $this;
    }

    /**
     * Gets party_mix
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPartyMix
     */
    public function getPartyMix()
    {
        return $this->container['party_mix'];
    }

    /**
     * Sets party_mix
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsVisitsTypesIVisitPartyMix $party_mix
     * @return $this
     */
    public function setPartyMix($party_mix)
    {
        $this->container['party_mix'] = $party_mix;

        return $this;
    }

    /**
     * Gets sync_source
     * @return string
     */
    public function getSyncSource()
    {
        return $this->container['sync_source'];
    }

    /**
     * Sets sync_source
     * @param string $sync_source
     * @return $this
     */
    public function setSyncSource($sync_source)
    {
        $this->container['sync_source'] = $sync_source;

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


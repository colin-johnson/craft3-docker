<?php
/**
 * QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailabilitySeatingArea
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
 * QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailabilitySeatingArea Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailabilitySeatingArea implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.Contracts.Reservations.Types.IReservationAvailabilitySeatingArea';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seating_area_uid' => 'string',
        'seating_area_name' => 'string',
        'guest_message' => 'string',
        'times' => '\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailabilityTimeSlot[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seating_area_uid' => null,
        'seating_area_name' => null,
        'guest_message' => null,
        'times' => null
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
        'seating_area_uid' => 'SeatingAreaUID',
        'seating_area_name' => 'SeatingAreaName',
        'guest_message' => 'GuestMessage',
        'times' => 'Times'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'seating_area_uid' => 'setSeatingAreaUid',
        'seating_area_name' => 'setSeatingAreaName',
        'guest_message' => 'setGuestMessage',
        'times' => 'setTimes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'seating_area_uid' => 'getSeatingAreaUid',
        'seating_area_name' => 'getSeatingAreaName',
        'guest_message' => 'getGuestMessage',
        'times' => 'getTimes'
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
        $this->container['seating_area_uid'] = isset($data['seating_area_uid']) ? $data['seating_area_uid'] : null;
        $this->container['seating_area_name'] = isset($data['seating_area_name']) ? $data['seating_area_name'] : null;
        $this->container['guest_message'] = isset($data['guest_message']) ? $data['guest_message'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : null;
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
     * Gets seating_area_uid
     * @return string
     */
    public function getSeatingAreaUid()
    {
        return $this->container['seating_area_uid'];
    }

    /**
     * Sets seating_area_uid
     * @param string $seating_area_uid
     * @return $this
     */
    public function setSeatingAreaUid($seating_area_uid)
    {
        $this->container['seating_area_uid'] = $seating_area_uid;

        return $this;
    }

    /**
     * Gets seating_area_name
     * @return string
     */
    public function getSeatingAreaName()
    {
        return $this->container['seating_area_name'];
    }

    /**
     * Sets seating_area_name
     * @param string $seating_area_name
     * @return $this
     */
    public function setSeatingAreaName($seating_area_name)
    {
        $this->container['seating_area_name'] = $seating_area_name;

        return $this;
    }

    /**
     * Gets guest_message
     * @return string
     */
    public function getGuestMessage()
    {
        return $this->container['guest_message'];
    }

    /**
     * Sets guest_message
     * @param string $guest_message
     * @return $this
     */
    public function setGuestMessage($guest_message)
    {
        $this->container['guest_message'] = $guest_message;

        return $this;
    }

    /**
     * Gets times
     * @return \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailabilityTimeSlot[]
     */
    public function getTimes()
    {
        return $this->container['times'];
    }

    /**
     * Sets times
     * @param \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsReservationsTypesIReservationAvailabilityTimeSlot[] $times
     * @return $this
     */
    public function setTimes($times)
    {
        $this->container['times'] = $times;

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



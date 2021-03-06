<?php
/**
 * CloudPosContractBaseClassesCheckDTOCheck
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
 * CloudPosContractBaseClassesCheckDTOCheck Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CloudPosContractBaseClassesCheckDTOCheck implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CloudPos.Contract.BaseClasses.Check.DTO.Check';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'check_number' => 'int',
        'courses' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse[]',
        'guest' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuest',
        'pickup_time' => 'string',
        'actual_pickup_time' => 'string',
        'scheduled_delivery_time' => 'string',
        'actual_delivery_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'check_number' => 'int64',
        'courses' => null,
        'guest' => null,
        'pickup_time' => null,
        'actual_pickup_time' => null,
        'scheduled_delivery_time' => null,
        'actual_delivery_time' => null
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
        'check_number' => 'CheckNumber',
        'courses' => 'Courses',
        'guest' => 'Guest',
        'pickup_time' => 'PickupTime',
        'actual_pickup_time' => 'ActualPickupTime',
        'scheduled_delivery_time' => 'ScheduledDeliveryTime',
        'actual_delivery_time' => 'ActualDeliveryTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'check_number' => 'setCheckNumber',
        'courses' => 'setCourses',
        'guest' => 'setGuest',
        'pickup_time' => 'setPickupTime',
        'actual_pickup_time' => 'setActualPickupTime',
        'scheduled_delivery_time' => 'setScheduledDeliveryTime',
        'actual_delivery_time' => 'setActualDeliveryTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'check_number' => 'getCheckNumber',
        'courses' => 'getCourses',
        'guest' => 'getGuest',
        'pickup_time' => 'getPickupTime',
        'actual_pickup_time' => 'getActualPickupTime',
        'scheduled_delivery_time' => 'getScheduledDeliveryTime',
        'actual_delivery_time' => 'getActualDeliveryTime'
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
        $this->container['check_number'] = isset($data['check_number']) ? $data['check_number'] : null;
        $this->container['courses'] = isset($data['courses']) ? $data['courses'] : null;
        $this->container['guest'] = isset($data['guest']) ? $data['guest'] : null;
        $this->container['pickup_time'] = isset($data['pickup_time']) ? $data['pickup_time'] : null;
        $this->container['actual_pickup_time'] = isset($data['actual_pickup_time']) ? $data['actual_pickup_time'] : null;
        $this->container['scheduled_delivery_time'] = isset($data['scheduled_delivery_time']) ? $data['scheduled_delivery_time'] : null;
        $this->container['actual_delivery_time'] = isset($data['actual_delivery_time']) ? $data['actual_delivery_time'] : null;
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
     * Gets check_number
     * @return int
     */
    public function getCheckNumber()
    {
        return $this->container['check_number'];
    }

    /**
     * Sets check_number
     * @param int $check_number
     * @return $this
     */
    public function setCheckNumber($check_number)
    {
        $this->container['check_number'] = $check_number;

        return $this;
    }

    /**
     * Gets courses
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse[]
     */
    public function getCourses()
    {
        return $this->container['courses'];
    }

    /**
     * Sets courses
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse[] $courses
     * @return $this
     */
    public function setCourses($courses)
    {
        $this->container['courses'] = $courses;

        return $this;
    }

    /**
     * Gets guest
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuest
     */
    public function getGuest()
    {
        return $this->container['guest'];
    }

    /**
     * Sets guest
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuest $guest
     * @return $this
     */
    public function setGuest($guest)
    {
        $this->container['guest'] = $guest;

        return $this;
    }

    /**
     * Gets pickup_time
     * @return string
     */
    public function getPickupTime()
    {
        return $this->container['pickup_time'];
    }

    /**
     * Sets pickup_time
     * @param string $pickup_time
     * @return $this
     */
    public function setPickupTime($pickup_time)
    {
        $this->container['pickup_time'] = $pickup_time;

        return $this;
    }

    /**
     * Gets actual_pickup_time
     * @return string
     */
    public function getActualPickupTime()
    {
        return $this->container['actual_pickup_time'];
    }

    /**
     * Sets actual_pickup_time
     * @param string $actual_pickup_time
     * @return $this
     */
    public function setActualPickupTime($actual_pickup_time)
    {
        $this->container['actual_pickup_time'] = $actual_pickup_time;

        return $this;
    }

    /**
     * Gets scheduled_delivery_time
     * @return string
     */
    public function getScheduledDeliveryTime()
    {
        return $this->container['scheduled_delivery_time'];
    }

    /**
     * Sets scheduled_delivery_time
     * @param string $scheduled_delivery_time
     * @return $this
     */
    public function setScheduledDeliveryTime($scheduled_delivery_time)
    {
        $this->container['scheduled_delivery_time'] = $scheduled_delivery_time;

        return $this;
    }

    /**
     * Gets actual_delivery_time
     * @return string
     */
    public function getActualDeliveryTime()
    {
        return $this->container['actual_delivery_time'];
    }

    /**
     * Sets actual_delivery_time
     * @param string $actual_delivery_time
     * @return $this
     */
    public function setActualDeliveryTime($actual_delivery_time)
    {
        $this->container['actual_delivery_time'] = $actual_delivery_time;

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



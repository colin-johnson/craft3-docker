<?php
/**
 * QsrAutomationsDineTimeTablesTypesTableInstance
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
 * QsrAutomationsDineTimeTablesTypesTableInstance Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeTablesTypesTableInstance implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.Tables.Types.TableInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'last_update' => '\DateTime',
        'name' => 'string',
        'seat_count' => 'int',
        'minimum_seat_count' => 'int',
        'maximum_seat_count' => 'int',
        'is_active' => 'bool',
        'seating_area_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'last_update' => 'date-time',
        'name' => null,
        'seat_count' => 'int32',
        'minimum_seat_count' => 'int32',
        'maximum_seat_count' => 'int32',
        'is_active' => null,
        'seating_area_id' => 'int32'
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
        'id' => 'ID',
        'last_update' => 'LastUpdate',
        'name' => 'Name',
        'seat_count' => 'SeatCount',
        'minimum_seat_count' => 'MinimumSeatCount',
        'maximum_seat_count' => 'MaximumSeatCount',
        'is_active' => 'IsActive',
        'seating_area_id' => 'SeatingAreaId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'last_update' => 'setLastUpdate',
        'name' => 'setName',
        'seat_count' => 'setSeatCount',
        'minimum_seat_count' => 'setMinimumSeatCount',
        'maximum_seat_count' => 'setMaximumSeatCount',
        'is_active' => 'setIsActive',
        'seating_area_id' => 'setSeatingAreaId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'last_update' => 'getLastUpdate',
        'name' => 'getName',
        'seat_count' => 'getSeatCount',
        'minimum_seat_count' => 'getMinimumSeatCount',
        'maximum_seat_count' => 'getMaximumSeatCount',
        'is_active' => 'getIsActive',
        'seating_area_id' => 'getSeatingAreaId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['seat_count'] = isset($data['seat_count']) ? $data['seat_count'] : null;
        $this->container['minimum_seat_count'] = isset($data['minimum_seat_count']) ? $data['minimum_seat_count'] : null;
        $this->container['maximum_seat_count'] = isset($data['maximum_seat_count']) ? $data['maximum_seat_count'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['seating_area_id'] = isset($data['seating_area_id']) ? $data['seating_area_id'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_update
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     * @param \DateTime $last_update
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets seat_count
     * @return int
     */
    public function getSeatCount()
    {
        return $this->container['seat_count'];
    }

    /**
     * Sets seat_count
     * @param int $seat_count
     * @return $this
     */
    public function setSeatCount($seat_count)
    {
        $this->container['seat_count'] = $seat_count;

        return $this;
    }

    /**
     * Gets minimum_seat_count
     * @return int
     */
    public function getMinimumSeatCount()
    {
        return $this->container['minimum_seat_count'];
    }

    /**
     * Sets minimum_seat_count
     * @param int $minimum_seat_count
     * @return $this
     */
    public function setMinimumSeatCount($minimum_seat_count)
    {
        $this->container['minimum_seat_count'] = $minimum_seat_count;

        return $this;
    }

    /**
     * Gets maximum_seat_count
     * @return int
     */
    public function getMaximumSeatCount()
    {
        return $this->container['maximum_seat_count'];
    }

    /**
     * Sets maximum_seat_count
     * @param int $maximum_seat_count
     * @return $this
     */
    public function setMaximumSeatCount($maximum_seat_count)
    {
        $this->container['maximum_seat_count'] = $maximum_seat_count;

        return $this;
    }

    /**
     * Gets is_active
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     * @param bool $is_active
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets seating_area_id
     * @return int
     */
    public function getSeatingAreaId()
    {
        return $this->container['seating_area_id'];
    }

    /**
     * Sets seating_area_id
     * @param int $seating_area_id
     * @return $this
     */
    public function setSeatingAreaId($seating_area_id)
    {
        $this->container['seating_area_id'] = $seating_area_id;

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



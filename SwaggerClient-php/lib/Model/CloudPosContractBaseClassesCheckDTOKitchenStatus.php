<?php
/**
 * CloudPosContractBaseClassesCheckDTOKitchenStatus
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
 * CloudPosContractBaseClassesCheckDTOKitchenStatus Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CloudPosContractBaseClassesCheckDTOKitchenStatus implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CloudPos.Contract.BaseClasses.Check.DTO.KitchenStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'preparation_time' => 'int',
        'time_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'preparation_time' => 'int32',
        'time_status' => null
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
        'status' => 'Status',
        'preparation_time' => 'PreparationTime',
        'time_status' => 'TimeStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'preparation_time' => 'setPreparationTime',
        'time_status' => 'setTimeStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'preparation_time' => 'getPreparationTime',
        'time_status' => 'getTimeStatus'
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

    const STATUS_ACTIVE = 'Active';
    const STATUS_DELAYED = 'Delayed';
    const STATUS_COOKING = 'Cooking';
    const STATUS_PREPARED = 'Prepared';
    const STATUS_ASSEMBLED = 'Assembled';
    const STATUS_COMPLETE = 'Complete';
    const TIME_STATUS_NONE = 'None';
    const TIME_STATUS__NEW = 'New';
    const TIME_STATUS_NORMAL = 'Normal';
    const TIME_STATUS_PRIORITY = 'Priority';
    const TIME_STATUS_RUSH = 'Rush';
    const TIME_STATUS_NEW_ITEM_PRIORITY = 'NewItemPriority';
    const TIME_STATUS_NEW_ITEM_RUSH = 'NewItemRush';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DELAYED,
            self::STATUS_COOKING,
            self::STATUS_PREPARED,
            self::STATUS_ASSEMBLED,
            self::STATUS_COMPLETE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTimeStatusAllowableValues()
    {
        return [
            self::TIME_STATUS_NONE,
            self::TIME_STATUS__NEW,
            self::TIME_STATUS_NORMAL,
            self::TIME_STATUS_PRIORITY,
            self::TIME_STATUS_RUSH,
            self::TIME_STATUS_NEW_ITEM_PRIORITY,
            self::TIME_STATUS_NEW_ITEM_RUSH,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['preparation_time'] = isset($data['preparation_time']) ? $data['preparation_time'] : null;
        $this->container['time_status'] = isset($data['time_status']) ? $data['time_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getTimeStatusAllowableValues();
        if (!in_array($this->container['time_status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'time_status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getTimeStatusAllowableValues();
        if (!in_array($this->container['time_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets preparation_time
     * @return int
     */
    public function getPreparationTime()
    {
        return $this->container['preparation_time'];
    }

    /**
     * Sets preparation_time
     * @param int $preparation_time
     * @return $this
     */
    public function setPreparationTime($preparation_time)
    {
        $this->container['preparation_time'] = $preparation_time;

        return $this;
    }

    /**
     * Gets time_status
     * @return string
     */
    public function getTimeStatus()
    {
        return $this->container['time_status'];
    }

    /**
     * Sets time_status
     * @param string $time_status
     * @return $this
     */
    public function setTimeStatus($time_status)
    {
        $allowed_values = $this->getTimeStatusAllowableValues();
        if (!is_null($time_status) && !in_array($time_status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'time_status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['time_status'] = $time_status;

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


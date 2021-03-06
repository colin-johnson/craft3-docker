<?php
/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent
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
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesVisitsPublicTableEvent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.Enterprise.DineTimeThirdParty.Common.BaseClasses.Visits.Public.TableEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'event_type' => 'string',
        'table_name' => 'string',
        'transaction_number' => 'int',
        'check_amount' => 'int',
        'timestamp_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'event_type' => null,
        'table_name' => null,
        'transaction_number' => 'int32',
        'check_amount' => 'int32',
        'timestamp_utc' => 'date-time'
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
        'event_type' => 'EventType',
        'table_name' => 'TableName',
        'transaction_number' => 'TransactionNumber',
        'check_amount' => 'CheckAmount',
        'timestamp_utc' => 'TimestampUtc'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'event_type' => 'setEventType',
        'table_name' => 'setTableName',
        'transaction_number' => 'setTransactionNumber',
        'check_amount' => 'setCheckAmount',
        'timestamp_utc' => 'setTimestampUtc'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'event_type' => 'getEventType',
        'table_name' => 'getTableName',
        'transaction_number' => 'getTransactionNumber',
        'check_amount' => 'getCheckAmount',
        'timestamp_utc' => 'getTimestampUtc'
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
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['transaction_number'] = isset($data['transaction_number']) ? $data['transaction_number'] : null;
        $this->container['check_amount'] = isset($data['check_amount']) ? $data['check_amount'] : null;
        $this->container['timestamp_utc'] = isset($data['timestamp_utc']) ? $data['timestamp_utc'] : null;
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
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     * @param string $event_type
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets table_name
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     * @param string $table_name
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

        return $this;
    }

    /**
     * Gets transaction_number
     * @return int
     */
    public function getTransactionNumber()
    {
        return $this->container['transaction_number'];
    }

    /**
     * Sets transaction_number
     * @param int $transaction_number
     * @return $this
     */
    public function setTransactionNumber($transaction_number)
    {
        $this->container['transaction_number'] = $transaction_number;

        return $this;
    }

    /**
     * Gets check_amount
     * @return int
     */
    public function getCheckAmount()
    {
        return $this->container['check_amount'];
    }

    /**
     * Sets check_amount
     * @param int $check_amount
     * @return $this
     */
    public function setCheckAmount($check_amount)
    {
        $this->container['check_amount'] = $check_amount;

        return $this;
    }

    /**
     * Gets timestamp_utc
     * @return \DateTime
     */
    public function getTimestampUtc()
    {
        return $this->container['timestamp_utc'];
    }

    /**
     * Sets timestamp_utc
     * @param \DateTime $timestamp_utc
     * @return $this
     */
    public function setTimestampUtc($timestamp_utc)
    {
        $this->container['timestamp_utc'] = $timestamp_utc;

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



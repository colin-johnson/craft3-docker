<?php
/**
 * CloudPosContractBaseClassesCheckDTOCourse
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
 * CloudPosContractBaseClassesCheckDTOCourse Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CloudPosContractBaseClassesCheckDTOCourse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CloudPos.Contract.BaseClasses.Check.DTO.Course';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_name' => 'string',
        'course_number' => 'int',
        'customer_name' => 'string',
        'destination_id' => 'int',
        'guest_count' => 'int',
        'items' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItem[]',
        'pager_id' => 'int',
        'payment_states' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState[]',
        'server' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOServer',
        'table_name' => 'string',
        'table_section' => 'string',
        'tent_number' => 'int',
        'terminal' => 'int',
        'is_training' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_name' => null,
        'course_number' => 'int32',
        'customer_name' => null,
        'destination_id' => 'int32',
        'guest_count' => 'int32',
        'items' => null,
        'pager_id' => 'int32',
        'payment_states' => null,
        'server' => null,
        'table_name' => null,
        'table_section' => null,
        'tent_number' => 'int32',
        'terminal' => 'int32',
        'is_training' => null
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
        'course_name' => 'CourseName',
        'course_number' => 'CourseNumber',
        'customer_name' => 'CustomerName',
        'destination_id' => 'DestinationID',
        'guest_count' => 'GuestCount',
        'items' => 'Items',
        'pager_id' => 'PagerID',
        'payment_states' => 'PaymentStates',
        'server' => 'Server',
        'table_name' => 'TableName',
        'table_section' => 'TableSection',
        'tent_number' => 'TentNumber',
        'terminal' => 'Terminal',
        'is_training' => 'IsTraining'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'course_name' => 'setCourseName',
        'course_number' => 'setCourseNumber',
        'customer_name' => 'setCustomerName',
        'destination_id' => 'setDestinationId',
        'guest_count' => 'setGuestCount',
        'items' => 'setItems',
        'pager_id' => 'setPagerId',
        'payment_states' => 'setPaymentStates',
        'server' => 'setServer',
        'table_name' => 'setTableName',
        'table_section' => 'setTableSection',
        'tent_number' => 'setTentNumber',
        'terminal' => 'setTerminal',
        'is_training' => 'setIsTraining'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'course_name' => 'getCourseName',
        'course_number' => 'getCourseNumber',
        'customer_name' => 'getCustomerName',
        'destination_id' => 'getDestinationId',
        'guest_count' => 'getGuestCount',
        'items' => 'getItems',
        'pager_id' => 'getPagerId',
        'payment_states' => 'getPaymentStates',
        'server' => 'getServer',
        'table_name' => 'getTableName',
        'table_section' => 'getTableSection',
        'tent_number' => 'getTentNumber',
        'terminal' => 'getTerminal',
        'is_training' => 'getIsTraining'
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
        $this->container['course_name'] = isset($data['course_name']) ? $data['course_name'] : null;
        $this->container['course_number'] = isset($data['course_number']) ? $data['course_number'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['destination_id'] = isset($data['destination_id']) ? $data['destination_id'] : null;
        $this->container['guest_count'] = isset($data['guest_count']) ? $data['guest_count'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['pager_id'] = isset($data['pager_id']) ? $data['pager_id'] : null;
        $this->container['payment_states'] = isset($data['payment_states']) ? $data['payment_states'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['table_section'] = isset($data['table_section']) ? $data['table_section'] : null;
        $this->container['tent_number'] = isset($data['tent_number']) ? $data['tent_number'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['is_training'] = isset($data['is_training']) ? $data['is_training'] : null;
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
     * Gets course_name
     * @return string
     */
    public function getCourseName()
    {
        return $this->container['course_name'];
    }

    /**
     * Sets course_name
     * @param string $course_name
     * @return $this
     */
    public function setCourseName($course_name)
    {
        $this->container['course_name'] = $course_name;

        return $this;
    }

    /**
     * Gets course_number
     * @return int
     */
    public function getCourseNumber()
    {
        return $this->container['course_number'];
    }

    /**
     * Sets course_number
     * @param int $course_number
     * @return $this
     */
    public function setCourseNumber($course_number)
    {
        $this->container['course_number'] = $course_number;

        return $this;
    }

    /**
     * Gets customer_name
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     * @param string $customer_name
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets destination_id
     * @return int
     */
    public function getDestinationId()
    {
        return $this->container['destination_id'];
    }

    /**
     * Sets destination_id
     * @param int $destination_id
     * @return $this
     */
    public function setDestinationId($destination_id)
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }

    /**
     * Gets guest_count
     * @return int
     */
    public function getGuestCount()
    {
        return $this->container['guest_count'];
    }

    /**
     * Sets guest_count
     * @param int $guest_count
     * @return $this
     */
    public function setGuestCount($guest_count)
    {
        $this->container['guest_count'] = $guest_count;

        return $this;
    }

    /**
     * Gets items
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItem[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets pager_id
     * @return int
     */
    public function getPagerId()
    {
        return $this->container['pager_id'];
    }

    /**
     * Sets pager_id
     * @param int $pager_id
     * @return $this
     */
    public function setPagerId($pager_id)
    {
        $this->container['pager_id'] = $pager_id;

        return $this;
    }

    /**
     * Gets payment_states
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState[]
     */
    public function getPaymentStates()
    {
        return $this->container['payment_states'];
    }

    /**
     * Sets payment_states
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState[] $payment_states
     * @return $this
     */
    public function setPaymentStates($payment_states)
    {
        $this->container['payment_states'] = $payment_states;

        return $this;
    }

    /**
     * Gets server
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOServer
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOServer $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

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
     * Gets table_section
     * @return string
     */
    public function getTableSection()
    {
        return $this->container['table_section'];
    }

    /**
     * Sets table_section
     * @param string $table_section
     * @return $this
     */
    public function setTableSection($table_section)
    {
        $this->container['table_section'] = $table_section;

        return $this;
    }

    /**
     * Gets tent_number
     * @return int
     */
    public function getTentNumber()
    {
        return $this->container['tent_number'];
    }

    /**
     * Sets tent_number
     * @param int $tent_number
     * @return $this
     */
    public function setTentNumber($tent_number)
    {
        $this->container['tent_number'] = $tent_number;

        return $this;
    }

    /**
     * Gets terminal
     * @return int
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     * @param int $terminal
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets is_training
     * @return bool
     */
    public function getIsTraining()
    {
        return $this->container['is_training'];
    }

    /**
     * Sets is_training
     * @param bool $is_training
     * @return $this
     */
    public function setIsTraining($is_training)
    {
        $this->container['is_training'] = $is_training;

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



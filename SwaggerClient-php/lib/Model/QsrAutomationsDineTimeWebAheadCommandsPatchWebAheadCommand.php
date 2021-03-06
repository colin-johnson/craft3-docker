<?php
/**
 * QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand
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
 * QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeWebAheadCommandsPatchWebAheadCommand implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.WebAhead.Commands.PatchWebAheadCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'notes' => 'string',
        'phone_number' => 'string',
        'phone_number_string' => 'string',
        'is_subscribed_to_sms_marketing' => 'bool',
        'is_subscribed_to_email_marketing' => 'bool',
        'is_subscribed_to_qsr_marketing' => 'bool',
        'party_size' => 'int',
        'estimated_arrival_time' => '\DateTime',
        'expand_guest' => 'bool',
        'request_time' => '\DateTime',
        'site_identifier' => 'string',
        'brand_uid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'notes' => null,
        'phone_number' => null,
        'phone_number_string' => null,
        'is_subscribed_to_sms_marketing' => null,
        'is_subscribed_to_email_marketing' => null,
        'is_subscribed_to_qsr_marketing' => null,
        'party_size' => 'int32',
        'estimated_arrival_time' => 'date-time',
        'expand_guest' => null,
        'request_time' => 'date-time',
        'site_identifier' => null,
        'brand_uid' => null
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
        'email' => 'Email',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'notes' => 'Notes',
        'phone_number' => 'PhoneNumber',
        'phone_number_string' => 'PhoneNumberString',
        'is_subscribed_to_sms_marketing' => 'IsSubscribedToSmsMarketing',
        'is_subscribed_to_email_marketing' => 'IsSubscribedToEmailMarketing',
        'is_subscribed_to_qsr_marketing' => 'IsSubscribedToQsrMarketing',
        'party_size' => 'PartySize',
        'estimated_arrival_time' => 'EstimatedArrivalTime',
        'expand_guest' => 'ExpandGuest',
        'request_time' => 'RequestTime',
        'site_identifier' => 'SiteIdentifier',
        'brand_uid' => 'BrandUID'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'notes' => 'setNotes',
        'phone_number' => 'setPhoneNumber',
        'phone_number_string' => 'setPhoneNumberString',
        'is_subscribed_to_sms_marketing' => 'setIsSubscribedToSmsMarketing',
        'is_subscribed_to_email_marketing' => 'setIsSubscribedToEmailMarketing',
        'is_subscribed_to_qsr_marketing' => 'setIsSubscribedToQsrMarketing',
        'party_size' => 'setPartySize',
        'estimated_arrival_time' => 'setEstimatedArrivalTime',
        'expand_guest' => 'setExpandGuest',
        'request_time' => 'setRequestTime',
        'site_identifier' => 'setSiteIdentifier',
        'brand_uid' => 'setBrandUid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'notes' => 'getNotes',
        'phone_number' => 'getPhoneNumber',
        'phone_number_string' => 'getPhoneNumberString',
        'is_subscribed_to_sms_marketing' => 'getIsSubscribedToSmsMarketing',
        'is_subscribed_to_email_marketing' => 'getIsSubscribedToEmailMarketing',
        'is_subscribed_to_qsr_marketing' => 'getIsSubscribedToQsrMarketing',
        'party_size' => 'getPartySize',
        'estimated_arrival_time' => 'getEstimatedArrivalTime',
        'expand_guest' => 'getExpandGuest',
        'request_time' => 'getRequestTime',
        'site_identifier' => 'getSiteIdentifier',
        'brand_uid' => 'getBrandUid'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_number_string'] = isset($data['phone_number_string']) ? $data['phone_number_string'] : null;
        $this->container['is_subscribed_to_sms_marketing'] = isset($data['is_subscribed_to_sms_marketing']) ? $data['is_subscribed_to_sms_marketing'] : null;
        $this->container['is_subscribed_to_email_marketing'] = isset($data['is_subscribed_to_email_marketing']) ? $data['is_subscribed_to_email_marketing'] : null;
        $this->container['is_subscribed_to_qsr_marketing'] = isset($data['is_subscribed_to_qsr_marketing']) ? $data['is_subscribed_to_qsr_marketing'] : null;
        $this->container['party_size'] = isset($data['party_size']) ? $data['party_size'] : null;
        $this->container['estimated_arrival_time'] = isset($data['estimated_arrival_time']) ? $data['estimated_arrival_time'] : null;
        $this->container['expand_guest'] = isset($data['expand_guest']) ? $data['expand_guest'] : null;
        $this->container['request_time'] = isset($data['request_time']) ? $data['request_time'] : null;
        $this->container['site_identifier'] = isset($data['site_identifier']) ? $data['site_identifier'] : null;
        $this->container['brand_uid'] = isset($data['brand_uid']) ? $data['brand_uid'] : null;
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
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_number_string
     * @return string
     */
    public function getPhoneNumberString()
    {
        return $this->container['phone_number_string'];
    }

    /**
     * Sets phone_number_string
     * @param string $phone_number_string
     * @return $this
     */
    public function setPhoneNumberString($phone_number_string)
    {
        $this->container['phone_number_string'] = $phone_number_string;

        return $this;
    }

    /**
     * Gets is_subscribed_to_sms_marketing
     * @return bool
     */
    public function getIsSubscribedToSmsMarketing()
    {
        return $this->container['is_subscribed_to_sms_marketing'];
    }

    /**
     * Sets is_subscribed_to_sms_marketing
     * @param bool $is_subscribed_to_sms_marketing
     * @return $this
     */
    public function setIsSubscribedToSmsMarketing($is_subscribed_to_sms_marketing)
    {
        $this->container['is_subscribed_to_sms_marketing'] = $is_subscribed_to_sms_marketing;

        return $this;
    }

    /**
     * Gets is_subscribed_to_email_marketing
     * @return bool
     */
    public function getIsSubscribedToEmailMarketing()
    {
        return $this->container['is_subscribed_to_email_marketing'];
    }

    /**
     * Sets is_subscribed_to_email_marketing
     * @param bool $is_subscribed_to_email_marketing
     * @return $this
     */
    public function setIsSubscribedToEmailMarketing($is_subscribed_to_email_marketing)
    {
        $this->container['is_subscribed_to_email_marketing'] = $is_subscribed_to_email_marketing;

        return $this;
    }

    /**
     * Gets is_subscribed_to_qsr_marketing
     * @return bool
     */
    public function getIsSubscribedToQsrMarketing()
    {
        return $this->container['is_subscribed_to_qsr_marketing'];
    }

    /**
     * Sets is_subscribed_to_qsr_marketing
     * @param bool $is_subscribed_to_qsr_marketing
     * @return $this
     */
    public function setIsSubscribedToQsrMarketing($is_subscribed_to_qsr_marketing)
    {
        $this->container['is_subscribed_to_qsr_marketing'] = $is_subscribed_to_qsr_marketing;

        return $this;
    }

    /**
     * Gets party_size
     * @return int
     */
    public function getPartySize()
    {
        return $this->container['party_size'];
    }

    /**
     * Sets party_size
     * @param int $party_size
     * @return $this
     */
    public function setPartySize($party_size)
    {
        $this->container['party_size'] = $party_size;

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
     * Gets expand_guest
     * @return bool
     */
    public function getExpandGuest()
    {
        return $this->container['expand_guest'];
    }

    /**
     * Sets expand_guest
     * @param bool $expand_guest
     * @return $this
     */
    public function setExpandGuest($expand_guest)
    {
        $this->container['expand_guest'] = $expand_guest;

        return $this;
    }

    /**
     * Gets request_time
     * @return \DateTime
     */
    public function getRequestTime()
    {
        return $this->container['request_time'];
    }

    /**
     * Sets request_time
     * @param \DateTime $request_time
     * @return $this
     */
    public function setRequestTime($request_time)
    {
        $this->container['request_time'] = $request_time;

        return $this;
    }

    /**
     * Gets site_identifier
     * @return string
     */
    public function getSiteIdentifier()
    {
        return $this->container['site_identifier'];
    }

    /**
     * Sets site_identifier
     * @param string $site_identifier
     * @return $this
     */
    public function setSiteIdentifier($site_identifier)
    {
        $this->container['site_identifier'] = $site_identifier;

        return $this;
    }

    /**
     * Gets brand_uid
     * @return string
     */
    public function getBrandUid()
    {
        return $this->container['brand_uid'];
    }

    /**
     * Sets brand_uid
     * @param string $brand_uid
     * @return $this
     */
    public function setBrandUid($brand_uid)
    {
        $this->container['brand_uid'] = $brand_uid;

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



<?php
/**
 * CloudPosContractBaseClassesCheckDTOGuest
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
 * CloudPosContractBaseClassesCheckDTOGuest Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CloudPosContractBaseClassesCheckDTOGuest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CloudPos.Contract.BaseClasses.Check.DTO.Guest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'notes' => 'string',
        'food_allergies' => 'string',
        'phone_numbers' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestPhoneNumber[]',
        'addresses' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestAddress[]',
        'custom_values' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestCustomValue[]',
        'is_anonymous' => 'bool',
        'is_subscribed_to_email_marketing' => 'bool',
        'is_subscribed_to_qsr_marketing' => 'bool',
        'is_subscribed_to_sms_marketing' => 'bool',
        'loyalty' => '\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestLoyalty'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'notes' => null,
        'food_allergies' => null,
        'phone_numbers' => null,
        'addresses' => null,
        'custom_values' => null,
        'is_anonymous' => null,
        'is_subscribed_to_email_marketing' => null,
        'is_subscribed_to_qsr_marketing' => null,
        'is_subscribed_to_sms_marketing' => null,
        'loyalty' => null
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
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'email' => 'Email',
        'notes' => 'Notes',
        'food_allergies' => 'FoodAllergies',
        'phone_numbers' => 'PhoneNumbers',
        'addresses' => 'Addresses',
        'custom_values' => 'CustomValues',
        'is_anonymous' => 'IsAnonymous',
        'is_subscribed_to_email_marketing' => 'IsSubscribedToEmailMarketing',
        'is_subscribed_to_qsr_marketing' => 'IsSubscribedToQsrMarketing',
        'is_subscribed_to_sms_marketing' => 'IsSubscribedToSmsMarketing',
        'loyalty' => 'Loyalty'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'notes' => 'setNotes',
        'food_allergies' => 'setFoodAllergies',
        'phone_numbers' => 'setPhoneNumbers',
        'addresses' => 'setAddresses',
        'custom_values' => 'setCustomValues',
        'is_anonymous' => 'setIsAnonymous',
        'is_subscribed_to_email_marketing' => 'setIsSubscribedToEmailMarketing',
        'is_subscribed_to_qsr_marketing' => 'setIsSubscribedToQsrMarketing',
        'is_subscribed_to_sms_marketing' => 'setIsSubscribedToSmsMarketing',
        'loyalty' => 'setLoyalty'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'notes' => 'getNotes',
        'food_allergies' => 'getFoodAllergies',
        'phone_numbers' => 'getPhoneNumbers',
        'addresses' => 'getAddresses',
        'custom_values' => 'getCustomValues',
        'is_anonymous' => 'getIsAnonymous',
        'is_subscribed_to_email_marketing' => 'getIsSubscribedToEmailMarketing',
        'is_subscribed_to_qsr_marketing' => 'getIsSubscribedToQsrMarketing',
        'is_subscribed_to_sms_marketing' => 'getIsSubscribedToSmsMarketing',
        'loyalty' => 'getLoyalty'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['food_allergies'] = isset($data['food_allergies']) ? $data['food_allergies'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['custom_values'] = isset($data['custom_values']) ? $data['custom_values'] : null;
        $this->container['is_anonymous'] = isset($data['is_anonymous']) ? $data['is_anonymous'] : null;
        $this->container['is_subscribed_to_email_marketing'] = isset($data['is_subscribed_to_email_marketing']) ? $data['is_subscribed_to_email_marketing'] : null;
        $this->container['is_subscribed_to_qsr_marketing'] = isset($data['is_subscribed_to_qsr_marketing']) ? $data['is_subscribed_to_qsr_marketing'] : null;
        $this->container['is_subscribed_to_sms_marketing'] = isset($data['is_subscribed_to_sms_marketing']) ? $data['is_subscribed_to_sms_marketing'] : null;
        $this->container['loyalty'] = isset($data['loyalty']) ? $data['loyalty'] : null;
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
     * Gets food_allergies
     * @return string
     */
    public function getFoodAllergies()
    {
        return $this->container['food_allergies'];
    }

    /**
     * Sets food_allergies
     * @param string $food_allergies
     * @return $this
     */
    public function setFoodAllergies($food_allergies)
    {
        $this->container['food_allergies'] = $food_allergies;

        return $this;
    }

    /**
     * Gets phone_numbers
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestPhoneNumber[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestPhoneNumber[] $phone_numbers
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets addresses
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestAddress[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestAddress[] $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets custom_values
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestCustomValue[]
     */
    public function getCustomValues()
    {
        return $this->container['custom_values'];
    }

    /**
     * Sets custom_values
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestCustomValue[] $custom_values
     * @return $this
     */
    public function setCustomValues($custom_values)
    {
        $this->container['custom_values'] = $custom_values;

        return $this;
    }

    /**
     * Gets is_anonymous
     * @return bool
     */
    public function getIsAnonymous()
    {
        return $this->container['is_anonymous'];
    }

    /**
     * Sets is_anonymous
     * @param bool $is_anonymous
     * @return $this
     */
    public function setIsAnonymous($is_anonymous)
    {
        $this->container['is_anonymous'] = $is_anonymous;

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
     * Gets loyalty
     * @return \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestLoyalty
     */
    public function getLoyalty()
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     * @param \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOGuestLoyalty $loyalty
     * @return $this
     */
    public function setLoyalty($loyalty)
    {
        $this->container['loyalty'] = $loyalty;

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



<?php
/**
 * QsrAutomationsDineTimeContractsSitesTypesISiteInstance
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
 * QsrAutomationsDineTimeContractsSitesTypesISiteInstance Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeContractsSitesTypesISiteInstance implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.Contracts.Sites.Types.ISiteInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'site_uid' => 'string',
        'customer_site_id' => 'string',
        'company_uid' => 'string',
        'name' => 'string',
        'contact_number' => 'string',
        'hours' => 'string',
        'address' => 'string',
        'city' => 'string',
        'county' => 'string',
        'state' => 'string',
        'postal' => 'string',
        'country' => 'string',
        'time_zone_id' => 'string',
        'latitude' => 'double',
        'longitude' => 'double',
        'iid' => 'int',
        'creation_time' => '\DateTime',
        'last_update' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'site_uid' => null,
        'customer_site_id' => null,
        'company_uid' => null,
        'name' => null,
        'contact_number' => null,
        'hours' => null,
        'address' => null,
        'city' => null,
        'county' => null,
        'state' => null,
        'postal' => null,
        'country' => null,
        'time_zone_id' => null,
        'latitude' => 'double',
        'longitude' => 'double',
        'iid' => 'int32',
        'creation_time' => 'date-time',
        'last_update' => 'date-time'
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
        'site_uid' => 'SiteUID',
        'customer_site_id' => 'CustomerSiteId',
        'company_uid' => 'CompanyUID',
        'name' => 'Name',
        'contact_number' => 'ContactNumber',
        'hours' => 'Hours',
        'address' => 'Address',
        'city' => 'City',
        'county' => 'County',
        'state' => 'State',
        'postal' => 'Postal',
        'country' => 'Country',
        'time_zone_id' => 'TimeZoneId',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'iid' => 'IID',
        'creation_time' => 'CreationTime',
        'last_update' => 'LastUpdate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'site_uid' => 'setSiteUid',
        'customer_site_id' => 'setCustomerSiteId',
        'company_uid' => 'setCompanyUid',
        'name' => 'setName',
        'contact_number' => 'setContactNumber',
        'hours' => 'setHours',
        'address' => 'setAddress',
        'city' => 'setCity',
        'county' => 'setCounty',
        'state' => 'setState',
        'postal' => 'setPostal',
        'country' => 'setCountry',
        'time_zone_id' => 'setTimeZoneId',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'iid' => 'setIid',
        'creation_time' => 'setCreationTime',
        'last_update' => 'setLastUpdate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'site_uid' => 'getSiteUid',
        'customer_site_id' => 'getCustomerSiteId',
        'company_uid' => 'getCompanyUid',
        'name' => 'getName',
        'contact_number' => 'getContactNumber',
        'hours' => 'getHours',
        'address' => 'getAddress',
        'city' => 'getCity',
        'county' => 'getCounty',
        'state' => 'getState',
        'postal' => 'getPostal',
        'country' => 'getCountry',
        'time_zone_id' => 'getTimeZoneId',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'iid' => 'getIid',
        'creation_time' => 'getCreationTime',
        'last_update' => 'getLastUpdate'
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
        $this->container['site_uid'] = isset($data['site_uid']) ? $data['site_uid'] : null;
        $this->container['customer_site_id'] = isset($data['customer_site_id']) ? $data['customer_site_id'] : null;
        $this->container['company_uid'] = isset($data['company_uid']) ? $data['company_uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contact_number'] = isset($data['contact_number']) ? $data['contact_number'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postal'] = isset($data['postal']) ? $data['postal'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
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
     * Gets site_uid
     * @return string
     */
    public function getSiteUid()
    {
        return $this->container['site_uid'];
    }

    /**
     * Sets site_uid
     * @param string $site_uid
     * @return $this
     */
    public function setSiteUid($site_uid)
    {
        $this->container['site_uid'] = $site_uid;

        return $this;
    }

    /**
     * Gets customer_site_id
     * @return string
     */
    public function getCustomerSiteId()
    {
        return $this->container['customer_site_id'];
    }

    /**
     * Sets customer_site_id
     * @param string $customer_site_id
     * @return $this
     */
    public function setCustomerSiteId($customer_site_id)
    {
        $this->container['customer_site_id'] = $customer_site_id;

        return $this;
    }

    /**
     * Gets company_uid
     * @return string
     */
    public function getCompanyUid()
    {
        return $this->container['company_uid'];
    }

    /**
     * Sets company_uid
     * @param string $company_uid
     * @return $this
     */
    public function setCompanyUid($company_uid)
    {
        $this->container['company_uid'] = $company_uid;

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
     * Gets contact_number
     * @return string
     */
    public function getContactNumber()
    {
        return $this->container['contact_number'];
    }

    /**
     * Sets contact_number
     * @param string $contact_number
     * @return $this
     */
    public function setContactNumber($contact_number)
    {
        $this->container['contact_number'] = $contact_number;

        return $this;
    }

    /**
     * Gets hours
     * @return string
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     * @param string $hours
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     * @param string $county
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postal
     * @return string
     */
    public function getPostal()
    {
        return $this->container['postal'];
    }

    /**
     * Sets postal
     * @param string $postal
     * @return $this
     */
    public function setPostal($postal)
    {
        $this->container['postal'] = $postal;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets time_zone_id
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     * @param string $time_zone_id
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets latitude
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param double $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param double $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets iid
     * @return int
     */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
     * Sets iid
     * @param int $iid
     * @return $this
     */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;

        return $this;
    }

    /**
     * Gets creation_time
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     * @param \DateTime $creation_time
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

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



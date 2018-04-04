<?php
/**
 * QsrAutomationsDineTimeContractsWebAheadTypesIQuote
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
 * QsrAutomationsDineTimeContractsWebAheadTypesIQuote Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsDineTimeContractsWebAheadTypesIQuote implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.DineTime.Contracts.WebAhead.Types.IQuote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quote_low' => 'int',
        'quote_high' => 'int',
        'site_quote_string' => 'string',
        'consumer_quote_string' => 'string',
        'exact_quote' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quote_low' => 'int32',
        'quote_high' => 'int32',
        'site_quote_string' => null,
        'consumer_quote_string' => null,
        'exact_quote' => 'int32'
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
        'quote_low' => 'QuoteLow',
        'quote_high' => 'QuoteHigh',
        'site_quote_string' => 'SiteQuoteString',
        'consumer_quote_string' => 'ConsumerQuoteString',
        'exact_quote' => 'ExactQuote'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'quote_low' => 'setQuoteLow',
        'quote_high' => 'setQuoteHigh',
        'site_quote_string' => 'setSiteQuoteString',
        'consumer_quote_string' => 'setConsumerQuoteString',
        'exact_quote' => 'setExactQuote'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'quote_low' => 'getQuoteLow',
        'quote_high' => 'getQuoteHigh',
        'site_quote_string' => 'getSiteQuoteString',
        'consumer_quote_string' => 'getConsumerQuoteString',
        'exact_quote' => 'getExactQuote'
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
        $this->container['quote_low'] = isset($data['quote_low']) ? $data['quote_low'] : null;
        $this->container['quote_high'] = isset($data['quote_high']) ? $data['quote_high'] : null;
        $this->container['site_quote_string'] = isset($data['site_quote_string']) ? $data['site_quote_string'] : null;
        $this->container['consumer_quote_string'] = isset($data['consumer_quote_string']) ? $data['consumer_quote_string'] : null;
        $this->container['exact_quote'] = isset($data['exact_quote']) ? $data['exact_quote'] : null;
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
     * Gets quote_low
     * @return int
     */
    public function getQuoteLow()
    {
        return $this->container['quote_low'];
    }

    /**
     * Sets quote_low
     * @param int $quote_low
     * @return $this
     */
    public function setQuoteLow($quote_low)
    {
        $this->container['quote_low'] = $quote_low;

        return $this;
    }

    /**
     * Gets quote_high
     * @return int
     */
    public function getQuoteHigh()
    {
        return $this->container['quote_high'];
    }

    /**
     * Sets quote_high
     * @param int $quote_high
     * @return $this
     */
    public function setQuoteHigh($quote_high)
    {
        $this->container['quote_high'] = $quote_high;

        return $this;
    }

    /**
     * Gets site_quote_string
     * @return string
     */
    public function getSiteQuoteString()
    {
        return $this->container['site_quote_string'];
    }

    /**
     * Sets site_quote_string
     * @param string $site_quote_string
     * @return $this
     */
    public function setSiteQuoteString($site_quote_string)
    {
        $this->container['site_quote_string'] = $site_quote_string;

        return $this;
    }

    /**
     * Gets consumer_quote_string
     * @return string
     */
    public function getConsumerQuoteString()
    {
        return $this->container['consumer_quote_string'];
    }

    /**
     * Sets consumer_quote_string
     * @param string $consumer_quote_string
     * @return $this
     */
    public function setConsumerQuoteString($consumer_quote_string)
    {
        $this->container['consumer_quote_string'] = $consumer_quote_string;

        return $this;
    }

    /**
     * Gets exact_quote
     * @return int
     */
    public function getExactQuote()
    {
        return $this->container['exact_quote'];
    }

    /**
     * Sets exact_quote
     * @param int $exact_quote
     * @return $this
     */
    public function setExactQuote($exact_quote)
    {
        $this->container['exact_quote'] = $exact_quote;

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



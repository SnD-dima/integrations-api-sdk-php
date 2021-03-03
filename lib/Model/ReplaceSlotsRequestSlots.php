<?php
/**
 * ReplaceSlotsRequestSlots
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docplanner Integrations API
 *
 * Welcome to Docplanner Integrations [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) API!  This API gives You the ability to build Your own application and integrate it with Docplanner services.
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocPlanner\Client\Model;

use \ArrayAccess;
use \DocPlanner\Client\ObjectSerializer;

/**
 * ReplaceSlotsRequestSlots Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplaceSlotsRequestSlots implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplaceSlotsRequest_slots';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_services' => '\DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[]',
'start' => '\DateTime',
'end' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_services' => null,
'start' => 'date-time',
'end' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_services' => 'address_services',
'start' => 'start',
'end' => 'end'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_services' => 'setAddressServices',
'start' => 'setStart',
'end' => 'setEnd'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_services' => 'getAddressServices',
'start' => 'getStart',
'end' => 'getEnd'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address_services'] = isset($data['address_services']) ? $data['address_services'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address_services
     *
     * @return \DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[]
     */
    public function getAddressServices()
    {
        return $this->container['address_services'];
    }

    /**
     * Sets address_services
     *
     * @param \DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[] $address_services address_services
     *
     * @return $this
     */
    public function setAddressServices($address_services)
    {
        $this->container['address_services'] = $address_services;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

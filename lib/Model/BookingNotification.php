<?php
/**
 * BookingNotification
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
 * OpenAPI spec version: 1.0.22
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
 * BookingNotification Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'status' => 'string',
'start_at' => '\DateTime',
'end_at' => '\DateTime',
'duration' => 'int',
'booked_by' => 'string',
'canceled_by' => 'string',
'booked_at' => '\DateTime',
'canceled_at' => '\DateTime',
'address_service' => '\DocPlanner\Client\Model\AddressServiceNotification',
'patient' => '\DocPlanner\Client\Model\Patient',
'signature' => 'string',
'comment' => 'string',
'insurance' => '\DocPlanner\Client\Model\InsuranceNotification',
'visit_payment' => 'bool',
'videocall_url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'status' => null,
'start_at' => 'date-time',
'end_at' => 'date-time',
'duration' => null,
'booked_by' => null,
'canceled_by' => null,
'booked_at' => 'date-time',
'canceled_at' => 'date-time',
'address_service' => null,
'patient' => null,
'signature' => null,
'comment' => null,
'insurance' => null,
'visit_payment' => null,
'videocall_url' => null    ];

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
        'id' => 'id',
'status' => 'status',
'start_at' => 'start_at',
'end_at' => 'end_at',
'duration' => 'duration',
'booked_by' => 'booked_by',
'canceled_by' => 'canceled_by',
'booked_at' => 'booked_at',
'canceled_at' => 'canceled_at',
'address_service' => 'address_service',
'patient' => 'patient',
'signature' => 'signature',
'comment' => 'comment',
'insurance' => 'insurance',
'visit_payment' => 'visit_payment',
'videocall_url' => 'videocall_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'status' => 'setStatus',
'start_at' => 'setStartAt',
'end_at' => 'setEndAt',
'duration' => 'setDuration',
'booked_by' => 'setBookedBy',
'canceled_by' => 'setCanceledBy',
'booked_at' => 'setBookedAt',
'canceled_at' => 'setCanceledAt',
'address_service' => 'setAddressService',
'patient' => 'setPatient',
'signature' => 'setSignature',
'comment' => 'setComment',
'insurance' => 'setInsurance',
'visit_payment' => 'setVisitPayment',
'videocall_url' => 'setVideocallUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'status' => 'getStatus',
'start_at' => 'getStartAt',
'end_at' => 'getEndAt',
'duration' => 'getDuration',
'booked_by' => 'getBookedBy',
'canceled_by' => 'getCanceledBy',
'booked_at' => 'getBookedAt',
'canceled_at' => 'getCanceledAt',
'address_service' => 'getAddressService',
'patient' => 'getPatient',
'signature' => 'getSignature',
'comment' => 'getComment',
'insurance' => 'getInsurance',
'visit_payment' => 'getVisitPayment',
'videocall_url' => 'getVideocallUrl'    ];

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

    const BOOKED_BY_USER = 'user';
const BOOKED_BY_DOCTOR = 'doctor';
const BOOKED_BY_INTEGRATION = 'integration';
const CANCELED_BY_EMPTY = '';
const CANCELED_BY_USER = 'user';
const CANCELED_BY_DOCTOR = 'doctor';
const CANCELED_BY_INTEGRATION = 'integration';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBookedByAllowableValues()
    {
        return [
            self::BOOKED_BY_USER,
self::BOOKED_BY_DOCTOR,
self::BOOKED_BY_INTEGRATION,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCanceledByAllowableValues()
    {
        return [
            self::CANCELED_BY_EMPTY,
self::CANCELED_BY_USER,
self::CANCELED_BY_DOCTOR,
self::CANCELED_BY_INTEGRATION,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['booked_by'] = isset($data['booked_by']) ? $data['booked_by'] : null;
        $this->container['canceled_by'] = isset($data['canceled_by']) ? $data['canceled_by'] : null;
        $this->container['booked_at'] = isset($data['booked_at']) ? $data['booked_at'] : null;
        $this->container['canceled_at'] = isset($data['canceled_at']) ? $data['canceled_at'] : null;
        $this->container['address_service'] = isset($data['address_service']) ? $data['address_service'] : null;
        $this->container['patient'] = isset($data['patient']) ? $data['patient'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['visit_payment'] = isset($data['visit_payment']) ? $data['visit_payment'] : null;
        $this->container['videocall_url'] = isset($data['videocall_url']) ? $data['videocall_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBookedByAllowableValues();
        if (!is_null($this->container['booked_by']) && !in_array($this->container['booked_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'booked_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCanceledByAllowableValues();
        if (!is_null($this->container['canceled_by']) && !in_array($this->container['canceled_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'canceled_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime $start_at start_at
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime $end_at end_at
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets booked_by
     *
     * @return string
     */
    public function getBookedBy()
    {
        return $this->container['booked_by'];
    }

    /**
     * Sets booked_by
     *
     * @param string $booked_by booked_by
     *
     * @return $this
     */
    public function setBookedBy($booked_by)
    {
        $allowedValues = $this->getBookedByAllowableValues();
        if (!is_null($booked_by) && !in_array($booked_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'booked_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['booked_by'] = $booked_by;

        return $this;
    }

    /**
     * Gets canceled_by
     *
     * @return string
     */
    public function getCanceledBy()
    {
        return $this->container['canceled_by'];
    }

    /**
     * Sets canceled_by
     *
     * @param string $canceled_by canceled_by
     *
     * @return $this
     */
    public function setCanceledBy($canceled_by)
    {
        $allowedValues = $this->getCanceledByAllowableValues();
        if (!is_null($canceled_by) && !in_array($canceled_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'canceled_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['canceled_by'] = $canceled_by;

        return $this;
    }

    /**
     * Gets booked_at
     *
     * @return \DateTime
     */
    public function getBookedAt()
    {
        return $this->container['booked_at'];
    }

    /**
     * Sets booked_at
     *
     * @param \DateTime $booked_at booked_at
     *
     * @return $this
     */
    public function setBookedAt($booked_at)
    {
        $this->container['booked_at'] = $booked_at;

        return $this;
    }

    /**
     * Gets canceled_at
     *
     * @return \DateTime
     */
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }

    /**
     * Sets canceled_at
     *
     * @param \DateTime $canceled_at canceled_at
     *
     * @return $this
     */
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;

        return $this;
    }

    /**
     * Gets address_service
     *
     * @return \DocPlanner\Client\Model\AddressServiceNotification
     */
    public function getAddressService()
    {
        return $this->container['address_service'];
    }

    /**
     * Sets address_service
     *
     * @param \DocPlanner\Client\Model\AddressServiceNotification $address_service address_service
     *
     * @return $this
     */
    public function setAddressService($address_service)
    {
        $this->container['address_service'] = $address_service;

        return $this;
    }

    /**
     * Gets patient
     *
     * @return \DocPlanner\Client\Model\Patient
     */
    public function getPatient()
    {
        return $this->container['patient'];
    }

    /**
     * Sets patient
     *
     * @param \DocPlanner\Client\Model\Patient $patient patient
     *
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->container['patient'] = $patient;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \DocPlanner\Client\Model\InsuranceNotification
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \DocPlanner\Client\Model\InsuranceNotification $insurance insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets visit_payment
     *
     * @return bool
     */
    public function getVisitPayment()
    {
        return $this->container['visit_payment'];
    }

    /**
     * Sets visit_payment
     *
     * @param bool $visit_payment visit_payment
     *
     * @return $this
     */
    public function setVisitPayment($visit_payment)
    {
        $this->container['visit_payment'] = $visit_payment;

        return $this;
    }

    /**
     * Gets videocall_url
     *
     * @return string
     */
    public function getVideocallUrl()
    {
        return $this->container['videocall_url'];
    }

    /**
     * Sets videocall_url
     *
     * @param string $videocall_url videocall_url
     *
     * @return $this
     */
    public function setVideocallUrl($videocall_url)
    {
        $this->container['videocall_url'] = $videocall_url;

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

<?php
/**
 * FeeRequestBody
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Assembly API
 *
 * Assembly (formely PromisePay) is a powerful payments engine custom-built for platforms and marketplaces.
 *
 * The version of the OpenAPI document: 2.0
 * Contact: support@assemblypayments.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FeeRequestBody Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeeRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fee_requestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'fee_type_id' => 'string',
        'amount' => 'string',
        'cap' => 'string',
        'min' => 'string',
        'max' => 'string',
        'to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'fee_type_id' => null,
        'amount' => null,
        'cap' => null,
        'min' => null,
        'max' => null,
        'to' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'fee_type_id' => 'fee_type_id',
        'amount' => 'amount',
        'cap' => 'cap',
        'min' => 'min',
        'max' => 'max',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'fee_type_id' => 'setFeeTypeId',
        'amount' => 'setAmount',
        'cap' => 'setCap',
        'min' => 'setMin',
        'max' => 'setMax',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'fee_type_id' => 'getFeeTypeId',
        'amount' => 'getAmount',
        'cap' => 'getCap',
        'min' => 'getMin',
        'max' => 'getMax',
        'to' => 'getTo'
    ];

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
        return self::$openAPIModelName;
    }

    const FEE_TYPE_ID__1 = '1';
    const FEE_TYPE_ID__2 = '2';
    const FEE_TYPE_ID__3 = '3';
    const FEE_TYPE_ID__4 = '4';
    const TO_BUYER = 'buyer';
    const TO_SELLER = 'seller';
    const TO_CC = 'cc';
    const TO_INT_WIRE = 'int_wire';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeTypeIdAllowableValues()
    {
        return [
            self::FEE_TYPE_ID__1,
            self::FEE_TYPE_ID__2,
            self::FEE_TYPE_ID__3,
            self::FEE_TYPE_ID__4,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getToAllowableValues()
    {
        return [
            self::TO_BUYER,
            self::TO_SELLER,
            self::TO_CC,
            self::TO_INT_WIRE,
        ];
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
        $this->container['name'] = $data['name'] ?? 'Seller Success Fee';
        $this->container['fee_type_id'] = $data['fee_type_id'] ?? FEE_TYPE_ID__2;
        $this->container['amount'] = $data['amount'] ?? '200';
        $this->container['cap'] = $data['cap'] ?? null;
        $this->container['min'] = $data['min'] ?? null;
        $this->container['max'] = $data['max'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['fee_type_id'] === null) {
            $invalidProperties[] = "'fee_type_id' can't be null";
        }
        $allowedValues = $this->getFeeTypeIdAllowableValues();
        if (!is_null($this->container['fee_type_id']) && !in_array($this->container['fee_type_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_type_id', must be one of '%s'",
                $this->container['fee_type_id'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        $allowedValues = $this->getToAllowableValues();
        if (!is_null($this->container['to']) && !in_array($this->container['to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'to', must be one of '%s'",
                $this->container['to'],
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets fee_type_id
     *
     * @return string
     */
    public function getFeeTypeId()
    {
        return $this->container['fee_type_id'];
    }

    /**
     * Sets fee_type_id
     *
     * @param string $fee_type_id Fee type:   1. Fixed   2. Percentage   3. Percentage with Cap   4. Percentage with Min
     *
     * @return self
     */
    public function setFeeTypeId($fee_type_id)
    {
        $allowedValues = $this->getFeeTypeIdAllowableValues();
        if (!in_array($fee_type_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_type_id', must be one of '%s'",
                    $fee_type_id,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_type_id'] = $fee_type_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Amount in cents; if the fee type is percentage, then this shows the percentage in hundredths (For example, an amount of 5 refers to 0.05% in fees.)
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets cap
     *
     * @return string|null
     */
    public function getCap()
    {
        return $this->container['cap'];
    }

    /**
     * Sets cap
     *
     * @param string|null $cap Cap the Fee
     *
     * @return self
     */
    public function setCap($cap)
    {
        $this->container['cap'] = $cap;

        return $this;
    }

    /**
     * Gets min
     *
     * @return string|null
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     *
     * @param string|null $min Minimum Fee
     *
     * @return self
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets max
     *
     * @return string|null
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param string|null $max Maximum Fee
     *
     * @return self
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Who pays the Fee. Allowed values are (buyer or seller). If this field has a value of buyer, then the buyer will have to pay the fee on top of the actual payment (example for an item of 100 and a fee of 2, then the buyer would have to pay 102) If this field has a value of seller, then the seller will end up receiving the amount - the fee (example for an item of 100 and a fee of 2, then the seller would end up receiving 98)
     *
     * @return self
     */
    public function setTo($to)
    {
        $allowedValues = $this->getToAllowableValues();
        if (!is_null($to) && !in_array($to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'to', must be one of '%s'",
                    $to,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['to'] = $to;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


<?php
/**
 * WireDetails
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
 * WireDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WireDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'wire_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'beneficiary' => 'string',
        'address_line1' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'routing_number' => 'string',
        'account_number' => 'string',
        'bank_name' => 'string',
        'swift' => 'string',
        'reference' => 'string',
        'amount' => 'string',
        'currency' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'beneficiary' => null,
        'address_line1' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'routing_number' => null,
        'account_number' => null,
        'bank_name' => null,
        'swift' => null,
        'reference' => null,
        'amount' => null,
        'currency' => null,
        'country' => null
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
        'beneficiary' => 'beneficiary',
        'address_line1' => 'address_line1',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'routing_number' => 'routing_number',
        'account_number' => 'account_number',
        'bank_name' => 'bank_name',
        'swift' => 'swift',
        'reference' => 'reference',
        'amount' => 'amount',
        'currency' => 'currency',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beneficiary' => 'setBeneficiary',
        'address_line1' => 'setAddressLine1',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'routing_number' => 'setRoutingNumber',
        'account_number' => 'setAccountNumber',
        'bank_name' => 'setBankName',
        'swift' => 'setSwift',
        'reference' => 'setReference',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beneficiary' => 'getBeneficiary',
        'address_line1' => 'getAddressLine1',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'routing_number' => 'getRoutingNumber',
        'account_number' => 'getAccountNumber',
        'bank_name' => 'getBankName',
        'swift' => 'getSwift',
        'reference' => 'getReference',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'country' => 'getCountry'
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
        $this->container['beneficiary'] = $data['beneficiary'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['swift'] = $data['swift'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
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
     * Gets beneficiary
     *
     * @return string|null
     */
    public function getBeneficiary()
    {
        return $this->container['beneficiary'];
    }

    /**
     * Sets beneficiary
     *
     * @param string|null $beneficiary beneficiary
     *
     * @return self
     */
    public function setBeneficiary($beneficiary)
    {
        $this->container['beneficiary'] = $beneficiary;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets routing_number
     *
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string|null $routing_number routing_number
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name bank_name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets swift
     *
     * @return string|null
     */
    public function getSwift()
    {
        return $this->container['swift'];
    }

    /**
     * Sets swift
     *
     * @param string|null $swift swift
     *
     * @return self
     */
    public function setSwift($swift)
    {
        $this->container['swift'] = $swift;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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


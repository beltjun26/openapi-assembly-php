<?php
/**
 * Charge
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
 * Charge Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Charge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'charge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'custom_descriptor' => 'string',
        'custom_data' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'state' => 'string',
        'buyer_fees' => 'int',
        'seller_fees' => 'int',
        'credit_card_fee' => 'int',
        'status' => 'int',
        'amount' => 'int',
        'dynamic_descriptor' => 'string',
        'account_id' => 'string',
        'account_type' => 'string',
        'promisepay_fee' => 'int',
        'currency' => 'string',
        'payment_method' => 'string',
        'buyer_name' => 'string',
        'buyer_email' => 'string',
        'buyer_zip' => 'string',
        'buyer_country' => 'string',
        'seller_name' => 'string',
        'seller_email' => 'string',
        'seller_zip' => 'string',
        'seller_country' => 'string',
        'related' => '\OpenAPI\Client\Model\ItemRelated',
        'links' => '\OpenAPI\Client\Model\ChargeLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'custom_descriptor' => null,
        'custom_data' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'state' => null,
        'buyer_fees' => null,
        'seller_fees' => null,
        'credit_card_fee' => null,
        'status' => null,
        'amount' => null,
        'dynamic_descriptor' => null,
        'account_id' => 'uuid',
        'account_type' => null,
        'promisepay_fee' => null,
        'currency' => null,
        'payment_method' => null,
        'buyer_name' => null,
        'buyer_email' => 'email',
        'buyer_zip' => null,
        'buyer_country' => null,
        'seller_name' => null,
        'seller_email' => 'email',
        'seller_zip' => null,
        'seller_country' => null,
        'related' => null,
        'links' => null
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
        'id' => 'id',
        'name' => 'name',
        'custom_descriptor' => 'custom_descriptor',
        'custom_data' => 'custom_data',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'state' => 'state',
        'buyer_fees' => 'buyer_fees',
        'seller_fees' => 'seller_fees',
        'credit_card_fee' => 'credit_card_fee',
        'status' => 'status',
        'amount' => 'amount',
        'dynamic_descriptor' => 'dynamic_descriptor',
        'account_id' => 'account_id',
        'account_type' => 'account_type',
        'promisepay_fee' => 'promisepay_fee',
        'currency' => 'currency',
        'payment_method' => 'payment_method',
        'buyer_name' => 'buyer_name',
        'buyer_email' => 'buyer_email',
        'buyer_zip' => 'buyer_zip',
        'buyer_country' => 'buyer_country',
        'seller_name' => 'seller_name',
        'seller_email' => 'seller_email',
        'seller_zip' => 'seller_zip',
        'seller_country' => 'seller_country',
        'related' => 'related',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'custom_descriptor' => 'setCustomDescriptor',
        'custom_data' => 'setCustomData',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'state' => 'setState',
        'buyer_fees' => 'setBuyerFees',
        'seller_fees' => 'setSellerFees',
        'credit_card_fee' => 'setCreditCardFee',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'dynamic_descriptor' => 'setDynamicDescriptor',
        'account_id' => 'setAccountId',
        'account_type' => 'setAccountType',
        'promisepay_fee' => 'setPromisepayFee',
        'currency' => 'setCurrency',
        'payment_method' => 'setPaymentMethod',
        'buyer_name' => 'setBuyerName',
        'buyer_email' => 'setBuyerEmail',
        'buyer_zip' => 'setBuyerZip',
        'buyer_country' => 'setBuyerCountry',
        'seller_name' => 'setSellerName',
        'seller_email' => 'setSellerEmail',
        'seller_zip' => 'setSellerZip',
        'seller_country' => 'setSellerCountry',
        'related' => 'setRelated',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'custom_descriptor' => 'getCustomDescriptor',
        'custom_data' => 'getCustomData',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'state' => 'getState',
        'buyer_fees' => 'getBuyerFees',
        'seller_fees' => 'getSellerFees',
        'credit_card_fee' => 'getCreditCardFee',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'dynamic_descriptor' => 'getDynamicDescriptor',
        'account_id' => 'getAccountId',
        'account_type' => 'getAccountType',
        'promisepay_fee' => 'getPromisepayFee',
        'currency' => 'getCurrency',
        'payment_method' => 'getPaymentMethod',
        'buyer_name' => 'getBuyerName',
        'buyer_email' => 'getBuyerEmail',
        'buyer_zip' => 'getBuyerZip',
        'buyer_country' => 'getBuyerCountry',
        'seller_name' => 'getSellerName',
        'seller_email' => 'getSellerEmail',
        'seller_zip' => 'getSellerZip',
        'seller_country' => 'getSellerCountry',
        'related' => 'getRelated',
        'links' => 'getLinks'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['custom_descriptor'] = $data['custom_descriptor'] ?? null;
        $this->container['custom_data'] = $data['custom_data'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['buyer_fees'] = $data['buyer_fees'] ?? null;
        $this->container['seller_fees'] = $data['seller_fees'] ?? null;
        $this->container['credit_card_fee'] = $data['credit_card_fee'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['dynamic_descriptor'] = $data['dynamic_descriptor'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['promisepay_fee'] = $data['promisepay_fee'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['buyer_name'] = $data['buyer_name'] ?? null;
        $this->container['buyer_email'] = $data['buyer_email'] ?? null;
        $this->container['buyer_zip'] = $data['buyer_zip'] ?? null;
        $this->container['buyer_country'] = $data['buyer_country'] ?? null;
        $this->container['seller_name'] = $data['seller_name'] ?? null;
        $this->container['seller_email'] = $data['seller_email'] ?? null;
        $this->container['seller_zip'] = $data['seller_zip'] ?? null;
        $this->container['seller_country'] = $data['seller_country'] ?? null;
        $this->container['related'] = $data['related'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets custom_descriptor
     *
     * @return string|null
     */
    public function getCustomDescriptor()
    {
        return $this->container['custom_descriptor'];
    }

    /**
     * Sets custom_descriptor
     *
     * @param string|null $custom_descriptor custom_descriptor
     *
     * @return self
     */
    public function setCustomDescriptor($custom_descriptor)
    {
        $this->container['custom_descriptor'] = $custom_descriptor;

        return $this;
    }

    /**
     * Gets custom_data
     *
     * @return string|null
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     *
     * @param string|null $custom_data custom_data
     *
     * @return self
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * Gets buyer_fees
     *
     * @return int|null
     */
    public function getBuyerFees()
    {
        return $this->container['buyer_fees'];
    }

    /**
     * Sets buyer_fees
     *
     * @param int|null $buyer_fees buyer_fees
     *
     * @return self
     */
    public function setBuyerFees($buyer_fees)
    {
        $this->container['buyer_fees'] = $buyer_fees;

        return $this;
    }

    /**
     * Gets seller_fees
     *
     * @return int|null
     */
    public function getSellerFees()
    {
        return $this->container['seller_fees'];
    }

    /**
     * Sets seller_fees
     *
     * @param int|null $seller_fees seller_fees
     *
     * @return self
     */
    public function setSellerFees($seller_fees)
    {
        $this->container['seller_fees'] = $seller_fees;

        return $this;
    }

    /**
     * Gets credit_card_fee
     *
     * @return int|null
     */
    public function getCreditCardFee()
    {
        return $this->container['credit_card_fee'];
    }

    /**
     * Sets credit_card_fee
     *
     * @param int|null $credit_card_fee credit_card_fee
     *
     * @return self
     */
    public function setCreditCardFee($credit_card_fee)
    {
        $this->container['credit_card_fee'] = $credit_card_fee;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets dynamic_descriptor
     *
     * @return string|null
     */
    public function getDynamicDescriptor()
    {
        return $this->container['dynamic_descriptor'];
    }

    /**
     * Sets dynamic_descriptor
     *
     * @param string|null $dynamic_descriptor dynamic_descriptor
     *
     * @return self
     */
    public function setDynamicDescriptor($dynamic_descriptor)
    {
        $this->container['dynamic_descriptor'] = $dynamic_descriptor;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets promisepay_fee
     *
     * @return int|null
     */
    public function getPromisepayFee()
    {
        return $this->container['promisepay_fee'];
    }

    /**
     * Sets promisepay_fee
     *
     * @param int|null $promisepay_fee promisepay_fee
     *
     * @return self
     */
    public function setPromisepayFee($promisepay_fee)
    {
        $this->container['promisepay_fee'] = $promisepay_fee;

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
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets buyer_name
     *
     * @return string|null
     */
    public function getBuyerName()
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name
     *
     * @param string|null $buyer_name buyer_name
     *
     * @return self
     */
    public function setBuyerName($buyer_name)
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }

    /**
     * Gets buyer_email
     *
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email
     *
     * @param string|null $buyer_email buyer_email
     *
     * @return self
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }

    /**
     * Gets buyer_zip
     *
     * @return string|null
     */
    public function getBuyerZip()
    {
        return $this->container['buyer_zip'];
    }

    /**
     * Sets buyer_zip
     *
     * @param string|null $buyer_zip buyer_zip
     *
     * @return self
     */
    public function setBuyerZip($buyer_zip)
    {
        $this->container['buyer_zip'] = $buyer_zip;

        return $this;
    }

    /**
     * Gets buyer_country
     *
     * @return string|null
     */
    public function getBuyerCountry()
    {
        return $this->container['buyer_country'];
    }

    /**
     * Sets buyer_country
     *
     * @param string|null $buyer_country buyer_country
     *
     * @return self
     */
    public function setBuyerCountry($buyer_country)
    {
        $this->container['buyer_country'] = $buyer_country;

        return $this;
    }

    /**
     * Gets seller_name
     *
     * @return string|null
     */
    public function getSellerName()
    {
        return $this->container['seller_name'];
    }

    /**
     * Sets seller_name
     *
     * @param string|null $seller_name seller_name
     *
     * @return self
     */
    public function setSellerName($seller_name)
    {
        $this->container['seller_name'] = $seller_name;

        return $this;
    }

    /**
     * Gets seller_email
     *
     * @return string|null
     */
    public function getSellerEmail()
    {
        return $this->container['seller_email'];
    }

    /**
     * Sets seller_email
     *
     * @param string|null $seller_email seller_email
     *
     * @return self
     */
    public function setSellerEmail($seller_email)
    {
        $this->container['seller_email'] = $seller_email;

        return $this;
    }

    /**
     * Gets seller_zip
     *
     * @return string|null
     */
    public function getSellerZip()
    {
        return $this->container['seller_zip'];
    }

    /**
     * Sets seller_zip
     *
     * @param string|null $seller_zip seller_zip
     *
     * @return self
     */
    public function setSellerZip($seller_zip)
    {
        $this->container['seller_zip'] = $seller_zip;

        return $this;
    }

    /**
     * Gets seller_country
     *
     * @return string|null
     */
    public function getSellerCountry()
    {
        return $this->container['seller_country'];
    }

    /**
     * Sets seller_country
     *
     * @param string|null $seller_country seller_country
     *
     * @return self
     */
    public function setSellerCountry($seller_country)
    {
        $this->container['seller_country'] = $seller_country;

        return $this;
    }

    /**
     * Gets related
     *
     * @return \OpenAPI\Client\Model\ItemRelated|null
     */
    public function getRelated()
    {
        return $this->container['related'];
    }

    /**
     * Sets related
     *
     * @param \OpenAPI\Client\Model\ItemRelated|null $related related
     *
     * @return self
     */
    public function setRelated($related)
    {
        $this->container['related'] = $related;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \OpenAPI\Client\Model\ChargeLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \OpenAPI\Client\Model\ChargeLinks|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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



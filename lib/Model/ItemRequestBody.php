<?php
/**
 * ItemRequestBody
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
 * ItemRequestBody Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'item_requestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'amount' => 'string',
        'currency' => 'string',
        'payment_type' => 'int',
        'buyer_id' => 'string',
        'seller_id' => 'string',
        'fee_ids' => 'string',
        'description' => 'string',
        'buyer_url' => 'string',
        'seller_url' => 'string',
        'tax_invoice' => 'bool',
        'custom_descriptor' => 'string'
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
        'amount' => null,
        'currency' => null,
        'payment_type' => null,
        'buyer_id' => null,
        'seller_id' => null,
        'fee_ids' => null,
        'description' => null,
        'buyer_url' => null,
        'seller_url' => null,
        'tax_invoice' => null,
        'custom_descriptor' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'payment_type' => 'payment_type',
        'buyer_id' => 'buyer_id',
        'seller_id' => 'seller_id',
        'fee_ids' => 'fee_ids',
        'description' => 'description',
        'buyer_url' => 'buyer_url',
        'seller_url' => 'seller_url',
        'tax_invoice' => 'tax_invoice',
        'custom_descriptor' => 'custom_descriptor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'payment_type' => 'setPaymentType',
        'buyer_id' => 'setBuyerId',
        'seller_id' => 'setSellerId',
        'fee_ids' => 'setFeeIds',
        'description' => 'setDescription',
        'buyer_url' => 'setBuyerUrl',
        'seller_url' => 'setSellerUrl',
        'tax_invoice' => 'setTaxInvoice',
        'custom_descriptor' => 'setCustomDescriptor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'payment_type' => 'getPaymentType',
        'buyer_id' => 'getBuyerId',
        'seller_id' => 'getSellerId',
        'fee_ids' => 'getFeeIds',
        'description' => 'getDescription',
        'buyer_url' => 'getBuyerUrl',
        'seller_url' => 'getSellerUrl',
        'tax_invoice' => 'getTaxInvoice',
        'custom_descriptor' => 'getCustomDescriptor'
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
        $this->container['id'] = $data['id'] ?? '7190770-1-2908';
        $this->container['name'] = $data['name'] ?? 'Item 7190770-1-2908';
        $this->container['amount'] = $data['amount'] ?? '102';
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['payment_type'] = $data['payment_type'] ?? null;
        $this->container['buyer_id'] = $data['buyer_id'] ?? 'buyer-719013950014';
        $this->container['seller_id'] = $data['seller_id'] ?? 'seller-71718579';
        $this->container['fee_ids'] = $data['fee_ids'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['buyer_url'] = $data['buyer_url'] ?? null;
        $this->container['seller_url'] = $data['seller_url'] ?? null;
        $this->container['tax_invoice'] = $data['tax_invoice'] ?? null;
        $this->container['custom_descriptor'] = $data['custom_descriptor'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if ($this->container['buyer_id'] === null) {
            $invalidProperties[] = "'buyer_id' can't be null";
        }
        if ($this->container['seller_id'] === null) {
            $invalidProperties[] = "'seller_id' can't be null";
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
     * @param string $id Unique ID that can be generated by the platform. Cannot contain ’.’ character. Contact Assembly support if you want item IDs to be generated automatically.
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
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A name for the item
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $amount The cost in cents
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
     * @param string|null $currency [ISO 4217 alpha-3](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. This is an optional field and if not provided, the item will be created with the default currency of the marketplace.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return int
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param int $payment_type Payment type: 2. Express
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets buyer_id
     *
     * @return string
     */
    public function getBuyerId()
    {
        return $this->container['buyer_id'];
    }

    /**
     * Sets buyer_id
     *
     * @param string $buyer_id Marketplace / Pltform buyer ID
     *
     * @return self
     */
    public function setBuyerId($buyer_id)
    {
        $this->container['buyer_id'] = $buyer_id;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string $seller_id Marketplace / Platform Seller ID
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets fee_ids
     *
     * @return string|null
     */
    public function getFeeIds()
    {
        return $this->container['fee_ids'];
    }

    /**
     * Sets fee_ids
     *
     * @param string|null $fee_ids A comma separated list of fee IDs to apply
     *
     * @return self
     */
    public function setFeeIds($fee_ids)
    {
        $this->container['fee_ids'] = $fee_ids;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description of the item
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets buyer_url
     *
     * @return string|null
     */
    public function getBuyerUrl()
    {
        return $this->container['buyer_url'];
    }

    /**
     * Sets buyer_url
     *
     * @param string|null $buyer_url Link for the buyer CTA (Call To Action)
     *
     * @return self
     */
    public function setBuyerUrl($buyer_url)
    {
        $this->container['buyer_url'] = $buyer_url;

        return $this;
    }

    /**
     * Gets seller_url
     *
     * @return string|null
     */
    public function getSellerUrl()
    {
        return $this->container['seller_url'];
    }

    /**
     * Sets seller_url
     *
     * @param string|null $seller_url Link for the seller CTA (Call To Action)
     *
     * @return self
     */
    public function setSellerUrl($seller_url)
    {
        $this->container['seller_url'] = $seller_url;

        return $this;
    }

    /**
     * Gets tax_invoice
     *
     * @return bool|null
     */
    public function getTaxInvoice()
    {
        return $this->container['tax_invoice'];
    }

    /**
     * Sets tax_invoice
     *
     * @param bool|null $tax_invoice Toggle to generate tax invoice once Item is complete
     *
     * @return self
     */
    public function setTaxInvoice($tax_invoice)
    {
        $this->container['tax_invoice'] = $tax_invoice;

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
     * @param string|null $custom_descriptor When `custom_descriptors` are enabled, this is the information to appear on credit card and direct debit statements.
     *
     * @return self
     */
    public function setCustomDescriptor($custom_descriptor)
    {
        $this->container['custom_descriptor'] = $custom_descriptor;

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



<?php
/**
 * BatchTransactionLinks
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
 * BatchTransactionLinks Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BatchTransactionLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'batch_transaction_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'self' => 'string',
        'users' => 'string',
        'fees' => 'string',
        'wallet_accounts' => 'string',
        'card_accounts' => 'string',
        'paypal_accounts' => 'string',
        'bank_accounts' => 'string',
        'items' => 'string',
        'marketplace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'self' => null,
        'users' => null,
        'fees' => null,
        'wallet_accounts' => null,
        'card_accounts' => null,
        'paypal_accounts' => null,
        'bank_accounts' => null,
        'items' => null,
        'marketplace' => null
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
        'self' => 'self',
        'users' => 'users',
        'fees' => 'fees',
        'wallet_accounts' => 'wallet_accounts',
        'card_accounts' => 'card_accounts',
        'paypal_accounts' => 'paypal_accounts',
        'bank_accounts' => 'bank_accounts',
        'items' => 'items',
        'marketplace' => 'marketplace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'users' => 'setUsers',
        'fees' => 'setFees',
        'wallet_accounts' => 'setWalletAccounts',
        'card_accounts' => 'setCardAccounts',
        'paypal_accounts' => 'setPaypalAccounts',
        'bank_accounts' => 'setBankAccounts',
        'items' => 'setItems',
        'marketplace' => 'setMarketplace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'users' => 'getUsers',
        'fees' => 'getFees',
        'wallet_accounts' => 'getWalletAccounts',
        'card_accounts' => 'getCardAccounts',
        'paypal_accounts' => 'getPaypalAccounts',
        'bank_accounts' => 'getBankAccounts',
        'items' => 'getItems',
        'marketplace' => 'getMarketplace'
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
        $this->container['self'] = $data['self'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['wallet_accounts'] = $data['wallet_accounts'] ?? null;
        $this->container['card_accounts'] = $data['card_accounts'] ?? null;
        $this->container['paypal_accounts'] = $data['paypal_accounts'] ?? null;
        $this->container['bank_accounts'] = $data['bank_accounts'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['marketplace'] = $data['marketplace'] ?? null;
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
     * Gets self
     *
     * @return string|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string|null $self self
     *
     * @return self
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets users
     *
     * @return string|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param string|null $users users
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return string|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param string|null $fees fees
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets wallet_accounts
     *
     * @return string|null
     */
    public function getWalletAccounts()
    {
        return $this->container['wallet_accounts'];
    }

    /**
     * Sets wallet_accounts
     *
     * @param string|null $wallet_accounts wallet_accounts
     *
     * @return self
     */
    public function setWalletAccounts($wallet_accounts)
    {
        $this->container['wallet_accounts'] = $wallet_accounts;

        return $this;
    }

    /**
     * Gets card_accounts
     *
     * @return string|null
     */
    public function getCardAccounts()
    {
        return $this->container['card_accounts'];
    }

    /**
     * Sets card_accounts
     *
     * @param string|null $card_accounts card_accounts
     *
     * @return self
     */
    public function setCardAccounts($card_accounts)
    {
        $this->container['card_accounts'] = $card_accounts;

        return $this;
    }

    /**
     * Gets paypal_accounts
     *
     * @return string|null
     */
    public function getPaypalAccounts()
    {
        return $this->container['paypal_accounts'];
    }

    /**
     * Sets paypal_accounts
     *
     * @param string|null $paypal_accounts paypal_accounts
     *
     * @return self
     */
    public function setPaypalAccounts($paypal_accounts)
    {
        $this->container['paypal_accounts'] = $paypal_accounts;

        return $this;
    }

    /**
     * Gets bank_accounts
     *
     * @return string|null
     */
    public function getBankAccounts()
    {
        return $this->container['bank_accounts'];
    }

    /**
     * Sets bank_accounts
     *
     * @param string|null $bank_accounts bank_accounts
     *
     * @return self
     */
    public function setBankAccounts($bank_accounts)
    {
        $this->container['bank_accounts'] = $bank_accounts;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets marketplace
     *
     * @return string|null
     */
    public function getMarketplace()
    {
        return $this->container['marketplace'];
    }

    /**
     * Sets marketplace
     *
     * @param string|null $marketplace marketplace
     *
     * @return self
     */
    public function setMarketplace($marketplace)
    {
        $this->container['marketplace'] = $marketplace;

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



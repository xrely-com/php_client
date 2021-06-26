<?php
/**
 * DataStoreRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Xrely\Client
 * @author   xrelyteam
 * @link     https://www.xrely.com
 */

/**
 * XRELY
 *
 * API Documentation for XRELY platform
 *
 * OpenAPI spec version: 1.0.0
 * Contact: contact@xrely.com
 * Generated by: https://www.xrely.com
 * version: 2.4.13-SNAPSHOT
 */

/**
 * Do not edit the class manually.
 */

namespace Xrely\Client\Model;

use \ArrayAccess;
use \Xrely\Client\ObjectSerializer;

/**
 * DataStoreRequest Class Doc Comment
 *
 * @category Class
 * @package  Xrely\Client
 * @author   xrely team
 * @link     https://www.xrely.com
 */
class DataStoreRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataStoreRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'secretKey' => 'string',
        'docs' => '\Xrely\Client\Model\DocStoreItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'secretKey' => null,
        'docs' => null
    ];

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
        'secretKey' => 'secretKey',
        'docs' => 'docs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'secretKey' => 'setSecretKey',
        'docs' => 'setDocs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'secretKey' => 'getSecretKey',
        'docs' => 'getDocs'
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
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['docs'] = isset($data['docs']) ? $data['docs'] : null;
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
     * Gets secretKey
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
     * Sets secretKey
     *
     * @param string $secretKey private key of the account
     *
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;

        return $this;
    }

    /**
     * Gets docs
     *
     * @return \Xrely\Client\Model\DocStoreItem[]
     */
    public function getDocs()
    {
        return $this->container['docs'];
    }

    /**
     * Sets docs
     *
     * @param \Xrely\Client\Model\DocStoreItem[] $docs docs
     *
     * @return $this
     */
    public function setDocs($docs)
    {
        $this->container['docs'] = $docs;

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



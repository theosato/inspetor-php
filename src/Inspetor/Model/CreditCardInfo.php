<?php
/**
 * CreditCardInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inspetor Antifraud
 *
 * This is an antifraud product developed to analyzes transactions and identify frauds using trackers and analytics tools. This file must explain every request and parametes that a library must provide to a client.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: theo@useinspetor.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CreditCardInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCardInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditCardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cc_first_six' => 'string',
'cc_last_four' => 'string',
'cc_holder_name' => 'string',
'cc_holder_cpf' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cc_first_six' => null,
'cc_last_four' => null,
'cc_holder_name' => null,
'cc_holder_cpf' => null    ];

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
        'cc_first_six' => 'cc_first_six',
'cc_last_four' => 'cc_last_four',
'cc_holder_name' => 'cc_holder_name',
'cc_holder_cpf' => 'cc_holder_cpf'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cc_first_six' => 'setCcFirstSix',
'cc_last_four' => 'setCcLastFour',
'cc_holder_name' => 'setCcHolderName',
'cc_holder_cpf' => 'setCcHolderCpf'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cc_first_six' => 'getCcFirstSix',
'cc_last_four' => 'getCcLastFour',
'cc_holder_name' => 'getCcHolderName',
'cc_holder_cpf' => 'getCcHolderCpf'    ];

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
        $this->container['cc_first_six'] = isset($data['cc_first_six']) ? $data['cc_first_six'] : null;
        $this->container['cc_last_four'] = isset($data['cc_last_four']) ? $data['cc_last_four'] : null;
        $this->container['cc_holder_name'] = isset($data['cc_holder_name']) ? $data['cc_holder_name'] : null;
        $this->container['cc_holder_cpf'] = isset($data['cc_holder_cpf']) ? $data['cc_holder_cpf'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cc_first_six'] === null) {
            $invalidProperties[] = "'cc_first_six' can't be null";
        }
        if ($this->container['cc_last_four'] === null) {
            $invalidProperties[] = "'cc_last_four' can't be null";
        }
        if ($this->container['cc_holder_name'] === null) {
            $invalidProperties[] = "'cc_holder_name' can't be null";
        }
        if ($this->container['cc_holder_cpf'] === null) {
            $invalidProperties[] = "'cc_holder_cpf' can't be null";
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
     * Gets cc_first_six
     *
     * @return string
     */
    public function getCcFirstSix()
    {
        return $this->container['cc_first_six'];
    }

    /**
     * Sets cc_first_six
     *
     * @param string $cc_first_six cc_first_six
     *
     * @return $this
     */
    public function setCcFirstSix($cc_first_six)
    {
        $this->container['cc_first_six'] = $cc_first_six;

        return $this;
    }

    /**
     * Gets cc_last_four
     *
     * @return string
     */
    public function getCcLastFour()
    {
        return $this->container['cc_last_four'];
    }

    /**
     * Sets cc_last_four
     *
     * @param string $cc_last_four cc_last_four
     *
     * @return $this
     */
    public function setCcLastFour($cc_last_four)
    {
        $this->container['cc_last_four'] = $cc_last_four;

        return $this;
    }

    /**
     * Gets cc_holder_name
     *
     * @return string
     */
    public function getCcHolderName()
    {
        return $this->container['cc_holder_name'];
    }

    /**
     * Sets cc_holder_name
     *
     * @param string $cc_holder_name cc_holder_name
     *
     * @return $this
     */
    public function setCcHolderName($cc_holder_name)
    {
        $this->container['cc_holder_name'] = $cc_holder_name;

        return $this;
    }

    /**
     * Gets cc_holder_cpf
     *
     * @return string
     */
    public function getCcHolderCpf()
    {
        return $this->container['cc_holder_cpf'];
    }

    /**
     * Sets cc_holder_cpf
     *
     * @param string $cc_holder_cpf cc_holder_cpf
     *
     * @return $this
     */
    public function setCcHolderCpf($cc_holder_cpf)
    {
        $this->container['cc_holder_cpf'] = $cc_holder_cpf;

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

<?php
/**
 * Subscriber
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Moosend API
 *
 * TODO: Add a description
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Subscriber Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Subscriber implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Subscriber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_on' => 'string',
        'custom_fields' => '\Swagger\Client\Model\CustomField[]',
        'email' => 'string',
        'id' => 'string',
        'name' => 'string',
        'removed_on' => 'string',
        'subscribe_method' => 'double',
        'subscribe_type' => 'double',
        'unsubscribed_from_id' => 'string',
        'unsubscribed_on' => 'string',
        'updated_on' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_on' => null,
        'custom_fields' => null,
        'email' => null,
        'id' => null,
        'name' => null,
        'removed_on' => null,
        'subscribe_method' => 'double',
        'subscribe_type' => 'double',
        'unsubscribed_from_id' => null,
        'unsubscribed_on' => null,
        'updated_on' => null
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
        'created_on' => 'CreatedOn',
        'custom_fields' => 'CustomFields',
        'email' => 'Email',
        'id' => 'ID',
        'name' => 'Name',
        'removed_on' => 'RemovedOn',
        'subscribe_method' => 'SubscribeMethod',
        'subscribe_type' => 'SubscribeType',
        'unsubscribed_from_id' => 'UnsubscribedFromID',
        'unsubscribed_on' => 'UnsubscribedOn',
        'updated_on' => 'UpdatedOn'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created_on' => 'setCreatedOn',
        'custom_fields' => 'setCustomFields',
        'email' => 'setEmail',
        'id' => 'setId',
        'name' => 'setName',
        'removed_on' => 'setRemovedOn',
        'subscribe_method' => 'setSubscribeMethod',
        'subscribe_type' => 'setSubscribeType',
        'unsubscribed_from_id' => 'setUnsubscribedFromId',
        'unsubscribed_on' => 'setUnsubscribedOn',
        'updated_on' => 'setUpdatedOn'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created_on' => 'getCreatedOn',
        'custom_fields' => 'getCustomFields',
        'email' => 'getEmail',
        'id' => 'getId',
        'name' => 'getName',
        'removed_on' => 'getRemovedOn',
        'subscribe_method' => 'getSubscribeMethod',
        'subscribe_type' => 'getSubscribeType',
        'unsubscribed_from_id' => 'getUnsubscribedFromId',
        'unsubscribed_on' => 'getUnsubscribedOn',
        'updated_on' => 'getUpdatedOn'
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
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['removed_on'] = isset($data['removed_on']) ? $data['removed_on'] : null;
        $this->container['subscribe_method'] = isset($data['subscribe_method']) ? $data['subscribe_method'] : null;
        $this->container['subscribe_type'] = isset($data['subscribe_type']) ? $data['subscribe_type'] : null;
        $this->container['unsubscribed_from_id'] = isset($data['unsubscribed_from_id']) ? $data['unsubscribed_from_id'] : null;
        $this->container['unsubscribed_on'] = isset($data['unsubscribed_on']) ? $data['unsubscribed_on'] : null;
        $this->container['updated_on'] = isset($data['updated_on']) ? $data['updated_on'] : null;
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
     * Gets created_on
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     * @param string $created_on 
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets custom_fields
     * @return \Swagger\Client\Model\CustomField[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     * @param \Swagger\Client\Model\CustomField[] $custom_fields 
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets removed_on
     * @return string
     */
    public function getRemovedOn()
    {
        return $this->container['removed_on'];
    }

    /**
     * Sets removed_on
     * @param string $removed_on 
     * @return $this
     */
    public function setRemovedOn($removed_on)
    {
        $this->container['removed_on'] = $removed_on;

        return $this;
    }

    /**
     * Gets subscribe_method
     * @return double
     */
    public function getSubscribeMethod()
    {
        return $this->container['subscribe_method'];
    }

    /**
     * Sets subscribe_method
     * @param double $subscribe_method 
     * @return $this
     */
    public function setSubscribeMethod($subscribe_method)
    {
        $this->container['subscribe_method'] = $subscribe_method;

        return $this;
    }

    /**
     * Gets subscribe_type
     * @return double
     */
    public function getSubscribeType()
    {
        return $this->container['subscribe_type'];
    }

    /**
     * Sets subscribe_type
     * @param double $subscribe_type 
     * @return $this
     */
    public function setSubscribeType($subscribe_type)
    {
        $this->container['subscribe_type'] = $subscribe_type;

        return $this;
    }

    /**
     * Gets unsubscribed_from_id
     * @return string
     */
    public function getUnsubscribedFromId()
    {
        return $this->container['unsubscribed_from_id'];
    }

    /**
     * Sets unsubscribed_from_id
     * @param string $unsubscribed_from_id 
     * @return $this
     */
    public function setUnsubscribedFromId($unsubscribed_from_id)
    {
        $this->container['unsubscribed_from_id'] = $unsubscribed_from_id;

        return $this;
    }

    /**
     * Gets unsubscribed_on
     * @return string
     */
    public function getUnsubscribedOn()
    {
        return $this->container['unsubscribed_on'];
    }

    /**
     * Sets unsubscribed_on
     * @param string $unsubscribed_on 
     * @return $this
     */
    public function setUnsubscribedOn($unsubscribed_on)
    {
        $this->container['unsubscribed_on'] = $unsubscribed_on;

        return $this;
    }

    /**
     * Gets updated_on
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     * @param string $updated_on 
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


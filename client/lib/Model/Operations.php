<?php
/**
 * Operations
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dynamic API Specification
 *
 * This is a dynamically generated API specification for all endpoints existing on the current project.
 *
 * OpenAPI spec version: 12.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.43
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
 * Operations Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Operations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Operations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'key' => 'string',
'type' => 'string',
'position_x' => 'int',
'position_y' => 'int',
'options' => 'object',
'resolve' => 'OneOfOperationsResolve',
'reject' => 'OneOfOperationsReject',
'flow' => 'OneOfOperationsFlow',
'date_created' => '\DateTime',
'user_created' => 'OneOfOperationsUserCreated'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'key' => null,
'type' => null,
'position_x' => null,
'position_y' => null,
'options' => null,
'resolve' => null,
'reject' => null,
'flow' => null,
'date_created' => 'date-time',
'user_created' => null    ];

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
'name' => 'name',
'key' => 'key',
'type' => 'type',
'position_x' => 'position_x',
'position_y' => 'position_y',
'options' => 'options',
'resolve' => 'resolve',
'reject' => 'reject',
'flow' => 'flow',
'date_created' => 'date_created',
'user_created' => 'user_created'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'key' => 'setKey',
'type' => 'setType',
'position_x' => 'setPositionX',
'position_y' => 'setPositionY',
'options' => 'setOptions',
'resolve' => 'setResolve',
'reject' => 'setReject',
'flow' => 'setFlow',
'date_created' => 'setDateCreated',
'user_created' => 'setUserCreated'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'key' => 'getKey',
'type' => 'getType',
'position_x' => 'getPositionX',
'position_y' => 'getPositionY',
'options' => 'getOptions',
'resolve' => 'getResolve',
'reject' => 'getReject',
'flow' => 'getFlow',
'date_created' => 'getDateCreated',
'user_created' => 'getUserCreated'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['position_x'] = isset($data['position_x']) ? $data['position_x'] : null;
        $this->container['position_y'] = isset($data['position_y']) ? $data['position_y'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['resolve'] = isset($data['resolve']) ? $data['resolve'] : null;
        $this->container['reject'] = isset($data['reject']) ? $data['reject'] : null;
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['user_created'] = isset($data['user_created']) ? $data['user_created'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier for the operation.
     *
     * @return $this
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
     * @param string $name The name of the operation.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key Key for the operation. Must be unique within a given flow.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of operation. One of `log`, `mail`, `notification`, `create`, `read`, `request`, `sleep`, `transform`, `trigger`, `condition`, or any type of custom operation extensions.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets position_x
     *
     * @return int
     */
    public function getPositionX()
    {
        return $this->container['position_x'];
    }

    /**
     * Sets position_x
     *
     * @param int $position_x Position of the operation on the X axis within the flow workspace.
     *
     * @return $this
     */
    public function setPositionX($position_x)
    {
        $this->container['position_x'] = $position_x;

        return $this;
    }

    /**
     * Gets position_y
     *
     * @return int
     */
    public function getPositionY()
    {
        return $this->container['position_y'];
    }

    /**
     * Sets position_y
     *
     * @param int $position_y Position of the operation on the Y axis within the flow workspace.
     *
     * @return $this
     */
    public function setPositionY($position_y)
    {
        $this->container['position_y'] = $position_y;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object $options Options depending on the type of the operation.
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets resolve
     *
     * @return OneOfOperationsResolve
     */
    public function getResolve()
    {
        return $this->container['resolve'];
    }

    /**
     * Sets resolve
     *
     * @param OneOfOperationsResolve $resolve The operation triggered when the current operation succeeds (or `then` logic of a condition operation).
     *
     * @return $this
     */
    public function setResolve($resolve)
    {
        $this->container['resolve'] = $resolve;

        return $this;
    }

    /**
     * Gets reject
     *
     * @return OneOfOperationsReject
     */
    public function getReject()
    {
        return $this->container['reject'];
    }

    /**
     * Sets reject
     *
     * @param OneOfOperationsReject $reject The operation triggered when the current operation fails (or `otherwise` logic of a condition operation).
     *
     * @return $this
     */
    public function setReject($reject)
    {
        $this->container['reject'] = $reject;

        return $this;
    }

    /**
     * Gets flow
     *
     * @return OneOfOperationsFlow
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param OneOfOperationsFlow $flow flow
     *
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->container['flow'] = $flow;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created Timestamp in ISO8601 when the operation was created.
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets user_created
     *
     * @return OneOfOperationsUserCreated
     */
    public function getUserCreated()
    {
        return $this->container['user_created'];
    }

    /**
     * Sets user_created
     *
     * @param OneOfOperationsUserCreated $user_created The user who created the operation.
     *
     * @return $this
     */
    public function setUserCreated($user_created)
    {
        $this->container['user_created'] = $user_created;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

<?php
/**
 * Fields
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
 * Fields Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Fields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Fields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'collection' => 'string',
'field' => 'string',
'special' => 'string[]',
'interface' => 'string',
'options' => '',
'display' => 'string',
'display_options' => '',
'readonly' => 'bool',
'hidden' => 'bool',
'sort' => 'int',
'width' => 'string',
'translations' => '',
'note' => 'string',
'conditions' => '',
'required' => 'bool',
'group' => 'OneOfFieldsGroup',
'validation' => '',
'validation_message' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'collection' => null,
'field' => null,
'special' => null,
'interface' => null,
'options' => null,
'display' => null,
'display_options' => null,
'readonly' => null,
'hidden' => null,
'sort' => null,
'width' => null,
'translations' => null,
'note' => null,
'conditions' => null,
'required' => null,
'group' => null,
'validation' => null,
'validation_message' => null    ];

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
'collection' => 'collection',
'field' => 'field',
'special' => 'special',
'interface' => 'interface',
'options' => 'options',
'display' => 'display',
'display_options' => 'display_options',
'readonly' => 'readonly',
'hidden' => 'hidden',
'sort' => 'sort',
'width' => 'width',
'translations' => 'translations',
'note' => 'note',
'conditions' => 'conditions',
'required' => 'required',
'group' => 'group',
'validation' => 'validation',
'validation_message' => 'validation_message'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'collection' => 'setCollection',
'field' => 'setField',
'special' => 'setSpecial',
'interface' => 'setInterface',
'options' => 'setOptions',
'display' => 'setDisplay',
'display_options' => 'setDisplayOptions',
'readonly' => 'setReadonly',
'hidden' => 'setHidden',
'sort' => 'setSort',
'width' => 'setWidth',
'translations' => 'setTranslations',
'note' => 'setNote',
'conditions' => 'setConditions',
'required' => 'setRequired',
'group' => 'setGroup',
'validation' => 'setValidation',
'validation_message' => 'setValidationMessage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'collection' => 'getCollection',
'field' => 'getField',
'special' => 'getSpecial',
'interface' => 'getInterface',
'options' => 'getOptions',
'display' => 'getDisplay',
'display_options' => 'getDisplayOptions',
'readonly' => 'getReadonly',
'hidden' => 'getHidden',
'sort' => 'getSort',
'width' => 'getWidth',
'translations' => 'getTranslations',
'note' => 'getNote',
'conditions' => 'getConditions',
'required' => 'getRequired',
'group' => 'getGroup',
'validation' => 'getValidation',
'validation_message' => 'getValidationMessage'    ];

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
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['special'] = isset($data['special']) ? $data['special'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['display_options'] = isset($data['display_options']) ? $data['display_options'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['validation_message'] = isset($data['validation_message']) ? $data['validation_message'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets collection
     *
     * @return string
     */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
     * Sets collection
     *
     * @param string $collection Unique name of the collection this field is in.
     *
     * @return $this
     */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets field
     *
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string $field Unique name of the field. Field name is unique within the collection.
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets special
     *
     * @return string[]
     */
    public function getSpecial()
    {
        return $this->container['special'];
    }

    /**
     * Sets special
     *
     * @param string[] $special special
     *
     * @return $this
     */
    public function setSpecial($special)
    {
        $this->container['special'] = $special;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param string $interface interface
     *
     * @return $this
     */
    public function setInterface($interface)
    {
        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets options
     *
     * @return 
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param  $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets display
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param string $display display
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets display_options
     *
     * @return 
     */
    public function getDisplayOptions()
    {
        return $this->container['display_options'];
    }

    /**
     * Sets display_options
     *
     * @param  $display_options display_options
     *
     * @return $this
     */
    public function setDisplayOptions($display_options)
    {
        $this->container['display_options'] = $display_options;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool $readonly readonly
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return int
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param int $sort sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return 
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param  $translations translations
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return 
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param  $conditions conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets group
     *
     * @return OneOfFieldsGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param OneOfFieldsGroup $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return 
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param  $validation validation
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets validation_message
     *
     * @return string
     */
    public function getValidationMessage()
    {
        return $this->container['validation_message'];
    }

    /**
     * Sets validation_message
     *
     * @param string $validation_message validation_message
     *
     * @return $this
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

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

<?php
/**
 * FieldscollectionSchema
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
 * FieldscollectionSchema Class Doc Comment
 *
 * @category Class
 * @description The schema info.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FieldscollectionSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'fieldscollection_schema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'table' => 'string',
'type' => 'string',
'default_value' => 'string',
'max_length' => 'int',
'is_nullable' => 'bool',
'is_primary_key' => 'bool',
'has_auto_increment' => 'bool',
'foreign_key_column' => 'string',
'foreign_key_table' => 'string',
'comment' => 'string',
'schema' => 'string',
'foreign_key_schema' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'table' => null,
'type' => null,
'default_value' => null,
'max_length' => null,
'is_nullable' => null,
'is_primary_key' => null,
'has_auto_increment' => null,
'foreign_key_column' => null,
'foreign_key_table' => null,
'comment' => null,
'schema' => null,
'foreign_key_schema' => null    ];

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
        'name' => 'name',
'table' => 'table',
'type' => 'type',
'default_value' => 'default_value',
'max_length' => 'max_length',
'is_nullable' => 'is_nullable',
'is_primary_key' => 'is_primary_key',
'has_auto_increment' => 'has_auto_increment',
'foreign_key_column' => 'foreign_key_column',
'foreign_key_table' => 'foreign_key_table',
'comment' => 'comment',
'schema' => 'schema',
'foreign_key_schema' => 'foreign_key_schema'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'table' => 'setTable',
'type' => 'setType',
'default_value' => 'setDefaultValue',
'max_length' => 'setMaxLength',
'is_nullable' => 'setIsNullable',
'is_primary_key' => 'setIsPrimaryKey',
'has_auto_increment' => 'setHasAutoIncrement',
'foreign_key_column' => 'setForeignKeyColumn',
'foreign_key_table' => 'setForeignKeyTable',
'comment' => 'setComment',
'schema' => 'setSchema',
'foreign_key_schema' => 'setForeignKeySchema'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'table' => 'getTable',
'type' => 'getType',
'default_value' => 'getDefaultValue',
'max_length' => 'getMaxLength',
'is_nullable' => 'getIsNullable',
'is_primary_key' => 'getIsPrimaryKey',
'has_auto_increment' => 'getHasAutoIncrement',
'foreign_key_column' => 'getForeignKeyColumn',
'foreign_key_table' => 'getForeignKeyTable',
'comment' => 'getComment',
'schema' => 'getSchema',
'foreign_key_schema' => 'getForeignKeySchema'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['is_nullable'] = isset($data['is_nullable']) ? $data['is_nullable'] : null;
        $this->container['is_primary_key'] = isset($data['is_primary_key']) ? $data['is_primary_key'] : null;
        $this->container['has_auto_increment'] = isset($data['has_auto_increment']) ? $data['has_auto_increment'] : null;
        $this->container['foreign_key_column'] = isset($data['foreign_key_column']) ? $data['foreign_key_column'] : null;
        $this->container['foreign_key_table'] = isset($data['foreign_key_table']) ? $data['foreign_key_table'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['foreign_key_schema'] = isset($data['foreign_key_schema']) ? $data['foreign_key_schema'] : null;
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
     * @param string $name The name of the field.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets table
     *
     * @return string
     */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
     * Sets table
     *
     * @param string $table The collection of the field.
     *
     * @return $this
     */
    public function setTable($table)
    {
        $this->container['table'] = $table;

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
     * @param string $type The type of the field.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value The default value of the field.
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int $max_length The max length of the field.
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets is_nullable
     *
     * @return bool
     */
    public function getIsNullable()
    {
        return $this->container['is_nullable'];
    }

    /**
     * Sets is_nullable
     *
     * @param bool $is_nullable If the field is nullable.
     *
     * @return $this
     */
    public function setIsNullable($is_nullable)
    {
        $this->container['is_nullable'] = $is_nullable;

        return $this;
    }

    /**
     * Gets is_primary_key
     *
     * @return bool
     */
    public function getIsPrimaryKey()
    {
        return $this->container['is_primary_key'];
    }

    /**
     * Sets is_primary_key
     *
     * @param bool $is_primary_key If the field is primary key.
     *
     * @return $this
     */
    public function setIsPrimaryKey($is_primary_key)
    {
        $this->container['is_primary_key'] = $is_primary_key;

        return $this;
    }

    /**
     * Gets has_auto_increment
     *
     * @return bool
     */
    public function getHasAutoIncrement()
    {
        return $this->container['has_auto_increment'];
    }

    /**
     * Sets has_auto_increment
     *
     * @param bool $has_auto_increment If the field has auto increment.
     *
     * @return $this
     */
    public function setHasAutoIncrement($has_auto_increment)
    {
        $this->container['has_auto_increment'] = $has_auto_increment;

        return $this;
    }

    /**
     * Gets foreign_key_column
     *
     * @return string
     */
    public function getForeignKeyColumn()
    {
        return $this->container['foreign_key_column'];
    }

    /**
     * Sets foreign_key_column
     *
     * @param string $foreign_key_column Related column from the foreign key constraint.
     *
     * @return $this
     */
    public function setForeignKeyColumn($foreign_key_column)
    {
        $this->container['foreign_key_column'] = $foreign_key_column;

        return $this;
    }

    /**
     * Gets foreign_key_table
     *
     * @return string
     */
    public function getForeignKeyTable()
    {
        return $this->container['foreign_key_table'];
    }

    /**
     * Sets foreign_key_table
     *
     * @param string $foreign_key_table Related table from the foreign key constraint.
     *
     * @return $this
     */
    public function setForeignKeyTable($foreign_key_table)
    {
        $this->container['foreign_key_table'] = $foreign_key_table;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Comment as saved in the database.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return string
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param string $schema Database schema (pg only).
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets foreign_key_schema
     *
     * @return string
     */
    public function getForeignKeySchema()
    {
        return $this->container['foreign_key_schema'];
    }

    /**
     * Sets foreign_key_schema
     *
     * @param string $foreign_key_schema Related schema from the foreign key constraint (pg only).
     *
     * @return $this
     */
    public function setForeignKeySchema($foreign_key_schema)
    {
        $this->container['foreign_key_schema'] = $foreign_key_schema;

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

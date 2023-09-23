<?php
/**
 * CollectionsidMeta
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
 * CollectionsidMeta Class Doc Comment
 *
 * @category Class
 * @description Metadata of the collection.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CollectionsidMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'collectionsid_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'icon' => 'string',
'color' => 'string',
'note' => 'string',
'display_template' => 'string',
'hidden' => 'bool',
'singleton' => 'bool',
'translation' => 'string',
'archive_field' => 'string',
'archive_app_filter' => 'string',
'archive_value' => 'string',
'unarchive_value' => 'string',
'sort_field' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'icon' => null,
'color' => null,
'note' => null,
'display_template' => null,
'hidden' => null,
'singleton' => null,
'translation' => null,
'archive_field' => null,
'archive_app_filter' => null,
'archive_value' => null,
'unarchive_value' => null,
'sort_field' => null    ];

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
        'icon' => 'icon',
'color' => 'color',
'note' => 'note',
'display_template' => 'display_template',
'hidden' => 'hidden',
'singleton' => 'singleton',
'translation' => 'translation',
'archive_field' => 'archive_field',
'archive_app_filter' => 'archive_app_filter',
'archive_value' => 'archive_value',
'unarchive_value' => 'unarchive_value',
'sort_field' => 'sort_field'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icon' => 'setIcon',
'color' => 'setColor',
'note' => 'setNote',
'display_template' => 'setDisplayTemplate',
'hidden' => 'setHidden',
'singleton' => 'setSingleton',
'translation' => 'setTranslation',
'archive_field' => 'setArchiveField',
'archive_app_filter' => 'setArchiveAppFilter',
'archive_value' => 'setArchiveValue',
'unarchive_value' => 'setUnarchiveValue',
'sort_field' => 'setSortField'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icon' => 'getIcon',
'color' => 'getColor',
'note' => 'getNote',
'display_template' => 'getDisplayTemplate',
'hidden' => 'getHidden',
'singleton' => 'getSingleton',
'translation' => 'getTranslation',
'archive_field' => 'getArchiveField',
'archive_app_filter' => 'getArchiveAppFilter',
'archive_value' => 'getArchiveValue',
'unarchive_value' => 'getUnarchiveValue',
'sort_field' => 'getSortField'    ];

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
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['display_template'] = isset($data['display_template']) ? $data['display_template'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['singleton'] = isset($data['singleton']) ? $data['singleton'] : null;
        $this->container['translation'] = isset($data['translation']) ? $data['translation'] : null;
        $this->container['archive_field'] = isset($data['archive_field']) ? $data['archive_field'] : null;
        $this->container['archive_app_filter'] = isset($data['archive_app_filter']) ? $data['archive_app_filter'] : null;
        $this->container['archive_value'] = isset($data['archive_value']) ? $data['archive_value'] : null;
        $this->container['unarchive_value'] = isset($data['unarchive_value']) ? $data['unarchive_value'] : null;
        $this->container['sort_field'] = isset($data['sort_field']) ? $data['sort_field'] : null;
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
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon Name of a Google Material Design Icon that's assigned to this collection.
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Choose the color for the icon assigned to this collection.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param string $note A note describing the collection.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets display_template
     *
     * @return string
     */
    public function getDisplayTemplate()
    {
        return $this->container['display_template'];
    }

    /**
     * Sets display_template
     *
     * @param string $display_template Text representation of how items from this collection are shown across the system.
     *
     * @return $this
     */
    public function setDisplayTemplate($display_template)
    {
        $this->container['display_template'] = $display_template;

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
     * @param bool $hidden Whether or not the collection is hidden from the navigation in the admin app.
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets singleton
     *
     * @return bool
     */
    public function getSingleton()
    {
        return $this->container['singleton'];
    }

    /**
     * Sets singleton
     *
     * @param bool $singleton Whether or not the collection is treated as a single object.
     *
     * @return $this
     */
    public function setSingleton($singleton)
    {
        $this->container['singleton'] = $singleton;

        return $this;
    }

    /**
     * Gets translation
     *
     * @return string
     */
    public function getTranslation()
    {
        return $this->container['translation'];
    }

    /**
     * Sets translation
     *
     * @param string $translation Key value pairs of how to show this collection's name in different languages in the admin app.
     *
     * @return $this
     */
    public function setTranslation($translation)
    {
        $this->container['translation'] = $translation;

        return $this;
    }

    /**
     * Gets archive_field
     *
     * @return string
     */
    public function getArchiveField()
    {
        return $this->container['archive_field'];
    }

    /**
     * Sets archive_field
     *
     * @param string $archive_field What field holds the archive value.
     *
     * @return $this
     */
    public function setArchiveField($archive_field)
    {
        $this->container['archive_field'] = $archive_field;

        return $this;
    }

    /**
     * Gets archive_app_filter
     *
     * @return string
     */
    public function getArchiveAppFilter()
    {
        return $this->container['archive_app_filter'];
    }

    /**
     * Sets archive_app_filter
     *
     * @param string $archive_app_filter What value to use for \"archived\" items.
     *
     * @return $this
     */
    public function setArchiveAppFilter($archive_app_filter)
    {
        $this->container['archive_app_filter'] = $archive_app_filter;

        return $this;
    }

    /**
     * Gets archive_value
     *
     * @return string
     */
    public function getArchiveValue()
    {
        return $this->container['archive_value'];
    }

    /**
     * Sets archive_value
     *
     * @param string $archive_value What value to use to \"unarchive\" items.
     *
     * @return $this
     */
    public function setArchiveValue($archive_value)
    {
        $this->container['archive_value'] = $archive_value;

        return $this;
    }

    /**
     * Gets unarchive_value
     *
     * @return string
     */
    public function getUnarchiveValue()
    {
        return $this->container['unarchive_value'];
    }

    /**
     * Sets unarchive_value
     *
     * @param string $unarchive_value Whether or not to show the \"archived\" filter.
     *
     * @return $this
     */
    public function setUnarchiveValue($unarchive_value)
    {
        $this->container['unarchive_value'] = $unarchive_value;

        return $this;
    }

    /**
     * Gets sort_field
     *
     * @return string
     */
    public function getSortField()
    {
        return $this->container['sort_field'];
    }

    /**
     * Sets sort_field
     *
     * @param string $sort_field The sort field in the collection.
     *
     * @return $this
     */
    public function setSortField($sort_field)
    {
        $this->container['sort_field'] = $sort_field;

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

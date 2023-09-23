<?php
/**
 * Presets
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
 * Presets Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Presets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Presets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'bookmark' => 'string',
'user' => 'OneOfPresetsUser',
'role' => 'OneOfPresetsRole',
'collection' => 'OneOfPresetsCollection',
'search' => 'string',
'layout' => 'string',
'layout_query' => '',
'layout_options' => '',
'refresh_interval' => 'int',
'filter' => '',
'icon' => 'string',
'color' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'bookmark' => null,
'user' => null,
'role' => null,
'collection' => null,
'search' => null,
'layout' => null,
'layout_query' => null,
'layout_options' => null,
'refresh_interval' => null,
'filter' => null,
'icon' => null,
'color' => null    ];

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
'bookmark' => 'bookmark',
'user' => 'user',
'role' => 'role',
'collection' => 'collection',
'search' => 'search',
'layout' => 'layout',
'layout_query' => 'layout_query',
'layout_options' => 'layout_options',
'refresh_interval' => 'refresh_interval',
'filter' => 'filter',
'icon' => 'icon',
'color' => 'color'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'bookmark' => 'setBookmark',
'user' => 'setUser',
'role' => 'setRole',
'collection' => 'setCollection',
'search' => 'setSearch',
'layout' => 'setLayout',
'layout_query' => 'setLayoutQuery',
'layout_options' => 'setLayoutOptions',
'refresh_interval' => 'setRefreshInterval',
'filter' => 'setFilter',
'icon' => 'setIcon',
'color' => 'setColor'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'bookmark' => 'getBookmark',
'user' => 'getUser',
'role' => 'getRole',
'collection' => 'getCollection',
'search' => 'getSearch',
'layout' => 'getLayout',
'layout_query' => 'getLayoutQuery',
'layout_options' => 'getLayoutOptions',
'refresh_interval' => 'getRefreshInterval',
'filter' => 'getFilter',
'icon' => 'getIcon',
'color' => 'getColor'    ];

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
        $this->container['bookmark'] = isset($data['bookmark']) ? $data['bookmark'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['layout_query'] = isset($data['layout_query']) ? $data['layout_query'] : null;
        $this->container['layout_options'] = isset($data['layout_options']) ? $data['layout_options'] : null;
        $this->container['refresh_interval'] = isset($data['refresh_interval']) ? $data['refresh_interval'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
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
     * @param int $id Unique identifier for this single collection preset.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets bookmark
     *
     * @return string
     */
    public function getBookmark()
    {
        return $this->container['bookmark'];
    }

    /**
     * Sets bookmark
     *
     * @param string $bookmark Name for the bookmark. If this is set, the preset will be considered a bookmark.
     *
     * @return $this
     */
    public function setBookmark($bookmark)
    {
        $this->container['bookmark'] = $bookmark;

        return $this;
    }

    /**
     * Gets user
     *
     * @return OneOfPresetsUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param OneOfPresetsUser $user The unique identifier of the user to whom this collection preset applies.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets role
     *
     * @return OneOfPresetsRole
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param OneOfPresetsRole $role The unique identifier of a role in the platform. If `user` is null, this will be used to apply the collection preset or bookmark for all users in the role.
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets collection
     *
     * @return OneOfPresetsCollection
     */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
     * Sets collection
     *
     * @param OneOfPresetsCollection $collection What collection this collection preset is used for.
     *
     * @return $this
     */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets search
     *
     * @return string
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string $search Search query.
     *
     * @return $this
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string $layout Key of the layout that is used.
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets layout_query
     *
     * @return 
     */
    public function getLayoutQuery()
    {
        return $this->container['layout_query'];
    }

    /**
     * Sets layout_query
     *
     * @param  $layout_query Layout query that's saved per layout type. Controls what data is fetched on load. These follow the same format as the JS SDK parameters.
     *
     * @return $this
     */
    public function setLayoutQuery($layout_query)
    {
        $this->container['layout_query'] = $layout_query;

        return $this;
    }

    /**
     * Gets layout_options
     *
     * @return 
     */
    public function getLayoutOptions()
    {
        return $this->container['layout_options'];
    }

    /**
     * Sets layout_options
     *
     * @param  $layout_options Options of the views. The properties in here are controlled by the layout.
     *
     * @return $this
     */
    public function setLayoutOptions($layout_options)
    {
        $this->container['layout_options'] = $layout_options;

        return $this;
    }

    /**
     * Gets refresh_interval
     *
     * @return int
     */
    public function getRefreshInterval()
    {
        return $this->container['refresh_interval'];
    }

    /**
     * Sets refresh_interval
     *
     * @param int $refresh_interval refresh_interval
     *
     * @return $this
     */
    public function setRefreshInterval($refresh_interval)
    {
        $this->container['refresh_interval'] = $refresh_interval;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return 
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param  $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
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
     * @param string $icon icon
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
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
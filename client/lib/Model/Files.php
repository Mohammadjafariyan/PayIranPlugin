<?php
/**
 * Files
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
 * Files Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Files implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Files';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'storage' => 'string',
'filename_disk' => 'string',
'filename_download' => 'string',
'title' => 'string',
'type' => 'string',
'folder' => 'OneOfFilesFolder',
'uploaded_by' => 'OneOfFilesUploadedBy',
'uploaded_on' => '\DateTime',
'modified_by' => 'OneOfFilesModifiedBy',
'modified_on' => 'string',
'charset' => 'string',
'filesize' => 'int',
'width' => 'int',
'height' => 'int',
'duration' => 'int',
'embed' => 'string',
'description' => 'string',
'location' => 'string',
'tags' => 'string[]',
'metadata' => 'object',
'storage_divider' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'storage' => null,
'filename_disk' => null,
'filename_download' => null,
'title' => null,
'type' => null,
'folder' => null,
'uploaded_by' => null,
'uploaded_on' => 'date-time',
'modified_by' => null,
'modified_on' => 'timestamp',
'charset' => null,
'filesize' => null,
'width' => null,
'height' => null,
'duration' => null,
'embed' => null,
'description' => null,
'location' => null,
'tags' => null,
'metadata' => null,
'storage_divider' => null    ];

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
'storage' => 'storage',
'filename_disk' => 'filename_disk',
'filename_download' => 'filename_download',
'title' => 'title',
'type' => 'type',
'folder' => 'folder',
'uploaded_by' => 'uploaded_by',
'uploaded_on' => 'uploaded_on',
'modified_by' => 'modified_by',
'modified_on' => 'modified_on',
'charset' => 'charset',
'filesize' => 'filesize',
'width' => 'width',
'height' => 'height',
'duration' => 'duration',
'embed' => 'embed',
'description' => 'description',
'location' => 'location',
'tags' => 'tags',
'metadata' => 'metadata',
'storage_divider' => 'storage_divider'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'storage' => 'setStorage',
'filename_disk' => 'setFilenameDisk',
'filename_download' => 'setFilenameDownload',
'title' => 'setTitle',
'type' => 'setType',
'folder' => 'setFolder',
'uploaded_by' => 'setUploadedBy',
'uploaded_on' => 'setUploadedOn',
'modified_by' => 'setModifiedBy',
'modified_on' => 'setModifiedOn',
'charset' => 'setCharset',
'filesize' => 'setFilesize',
'width' => 'setWidth',
'height' => 'setHeight',
'duration' => 'setDuration',
'embed' => 'setEmbed',
'description' => 'setDescription',
'location' => 'setLocation',
'tags' => 'setTags',
'metadata' => 'setMetadata',
'storage_divider' => 'setStorageDivider'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'storage' => 'getStorage',
'filename_disk' => 'getFilenameDisk',
'filename_download' => 'getFilenameDownload',
'title' => 'getTitle',
'type' => 'getType',
'folder' => 'getFolder',
'uploaded_by' => 'getUploadedBy',
'uploaded_on' => 'getUploadedOn',
'modified_by' => 'getModifiedBy',
'modified_on' => 'getModifiedOn',
'charset' => 'getCharset',
'filesize' => 'getFilesize',
'width' => 'getWidth',
'height' => 'getHeight',
'duration' => 'getDuration',
'embed' => 'getEmbed',
'description' => 'getDescription',
'location' => 'getLocation',
'tags' => 'getTags',
'metadata' => 'getMetadata',
'storage_divider' => 'getStorageDivider'    ];

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
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['filename_disk'] = isset($data['filename_disk']) ? $data['filename_disk'] : null;
        $this->container['filename_download'] = isset($data['filename_download']) ? $data['filename_download'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['uploaded_by'] = isset($data['uploaded_by']) ? $data['uploaded_by'] : null;
        $this->container['uploaded_on'] = isset($data['uploaded_on']) ? $data['uploaded_on'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['modified_on'] = isset($data['modified_on']) ? $data['modified_on'] : null;
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['filesize'] = isset($data['filesize']) ? $data['filesize'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['storage_divider'] = isset($data['storage_divider']) ? $data['storage_divider'] : null;
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
     * @param string $id Unique identifier for the file.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets storage
     *
     * @return string
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param string $storage Where the file is stored. Either `local` for the local filesystem or the name of the storage adapter (for example `s3`).
     *
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets filename_disk
     *
     * @return string
     */
    public function getFilenameDisk()
    {
        return $this->container['filename_disk'];
    }

    /**
     * Sets filename_disk
     *
     * @param string $filename_disk Name of the file on disk. By default, Directus uses a random hash for the filename.
     *
     * @return $this
     */
    public function setFilenameDisk($filename_disk)
    {
        $this->container['filename_disk'] = $filename_disk;

        return $this;
    }

    /**
     * Gets filename_download
     *
     * @return string
     */
    public function getFilenameDownload()
    {
        return $this->container['filename_download'];
    }

    /**
     * Sets filename_download
     *
     * @param string $filename_download How you want to the file to be named when it's being downloaded.
     *
     * @return $this
     */
    public function setFilenameDownload($filename_download)
    {
        $this->container['filename_download'] = $filename_download;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title for the file. Is extracted from the filename on upload, but can be edited by the user.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $type MIME type of the file.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return OneOfFilesFolder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param OneOfFilesFolder $folder Virtual folder where this file resides in.
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets uploaded_by
     *
     * @return OneOfFilesUploadedBy
     */
    public function getUploadedBy()
    {
        return $this->container['uploaded_by'];
    }

    /**
     * Sets uploaded_by
     *
     * @param OneOfFilesUploadedBy $uploaded_by Who uploaded the file.
     *
     * @return $this
     */
    public function setUploadedBy($uploaded_by)
    {
        $this->container['uploaded_by'] = $uploaded_by;

        return $this;
    }

    /**
     * Gets uploaded_on
     *
     * @return \DateTime
     */
    public function getUploadedOn()
    {
        return $this->container['uploaded_on'];
    }

    /**
     * Sets uploaded_on
     *
     * @param \DateTime $uploaded_on When the file was uploaded.
     *
     * @return $this
     */
    public function setUploadedOn($uploaded_on)
    {
        $this->container['uploaded_on'] = $uploaded_on;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return OneOfFilesModifiedBy
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param OneOfFilesModifiedBy $modified_by modified_by
     *
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets modified_on
     *
     * @return string
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     *
     * @param string $modified_on modified_on
     *
     * @return $this
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets charset
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
     * Sets charset
     *
     * @param string $charset Character set of the file.
     *
     * @return $this
     */
    public function setCharset($charset)
    {
        $this->container['charset'] = $charset;

        return $this;
    }

    /**
     * Gets filesize
     *
     * @return int
     */
    public function getFilesize()
    {
        return $this->container['filesize'];
    }

    /**
     * Sets filesize
     *
     * @param int $filesize Size of the file in bytes.
     *
     * @return $this
     */
    public function setFilesize($filesize)
    {
        $this->container['filesize'] = $filesize;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of the file in pixels. Only applies to images.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of the file in pixels. Only applies to images.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Duration of the file in seconds. Only applies to audio and video.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets embed
     *
     * @return string
     */
    public function getEmbed()
    {
        return $this->container['embed'];
    }

    /**
     * Sets embed
     *
     * @param string $embed Where the file was embedded from.
     *
     * @return $this
     */
    public function setEmbed($embed)
    {
        $this->container['embed'] = $embed;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description for the file.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Where the file was created. Is automatically populated based on EXIF data for images.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags Tags for the file. Is automatically populated based on EXIF data for images.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata IPTC, EXIF, and ICC metadata extracted from file
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets storage_divider
     *
     * @return string
     */
    public function getStorageDivider()
    {
        return $this->container['storage_divider'];
    }

    /**
     * Sets storage_divider
     *
     * @param string $storage_divider storage_divider
     *
     * @return $this
     */
    public function setStorageDivider($storage_divider)
    {
        $this->container['storage_divider'] = $storage_divider;

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

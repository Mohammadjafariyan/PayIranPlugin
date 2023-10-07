<?php
/**
 * ItemsLedgerAccount
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
 * ItemsLedgerAccount Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemsLedgerAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemsLedgerAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'status' => 'string',
'sort' => 'int',
'user_created' => 'OneOfItemsLedgerAccountUserCreated',
'date_created' => 'string',
'user_updated' => 'OneOfItemsLedgerAccountUserUpdated',
'date_updated' => 'string',
'name' => 'string',
'code' => 'string',
'account_type' => 'OneOfItemsLedgerAccountAccountType',
'general_ledger' => 'OneOfItemsLedgerAccountGeneralLedger'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'status' => null,
'sort' => null,
'user_created' => null,
'date_created' => 'timestamp',
'user_updated' => null,
'date_updated' => 'timestamp',
'name' => null,
'code' => null,
'account_type' => null,
'general_ledger' => null    ];

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
'status' => 'status',
'sort' => 'sort',
'user_created' => 'user_created',
'date_created' => 'date_created',
'user_updated' => 'user_updated',
'date_updated' => 'date_updated',
'name' => 'Name',
'code' => 'Code',
'account_type' => 'AccountType',
'general_ledger' => 'GeneralLedger'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'status' => 'setStatus',
'sort' => 'setSort',
'user_created' => 'setUserCreated',
'date_created' => 'setDateCreated',
'user_updated' => 'setUserUpdated',
'date_updated' => 'setDateUpdated',
'name' => 'setName',
'code' => 'setCode',
'account_type' => 'setAccountType',
'general_ledger' => 'setGeneralLedger'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'status' => 'getStatus',
'sort' => 'getSort',
'user_created' => 'getUserCreated',
'date_created' => 'getDateCreated',
'user_updated' => 'getUserUpdated',
'date_updated' => 'getDateUpdated',
'name' => 'getName',
'code' => 'getCode',
'account_type' => 'getAccountType',
'general_ledger' => 'getGeneralLedger'    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['user_created'] = isset($data['user_created']) ? $data['user_created'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['user_updated'] = isset($data['user_updated']) ? $data['user_updated'] : null;
        $this->container['date_updated'] = isset($data['date_updated']) ? $data['date_updated'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['general_ledger'] = isset($data['general_ledger']) ? $data['general_ledger'] : null;
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets user_created
     *
     * @return OneOfItemsLedgerAccountUserCreated
     */
    public function getUserCreated()
    {
        return $this->container['user_created'];
    }

    /**
     * Sets user_created
     *
     * @param OneOfItemsLedgerAccountUserCreated $user_created user_created
     *
     * @return $this
     */
    public function setUserCreated($user_created)
    {
        $this->container['user_created'] = $user_created;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets user_updated
     *
     * @return OneOfItemsLedgerAccountUserUpdated
     */
    public function getUserUpdated()
    {
        return $this->container['user_updated'];
    }

    /**
     * Sets user_updated
     *
     * @param OneOfItemsLedgerAccountUserUpdated $user_updated user_updated
     *
     * @return $this
     */
    public function setUserUpdated($user_updated)
    {
        $this->container['user_updated'] = $user_updated;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return string
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param string $date_updated date_updated
     *
     * @return $this
     */
    public function setDateUpdated($date_updated)
    {
        $this->container['date_updated'] = $date_updated;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return OneOfItemsLedgerAccountAccountType
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param OneOfItemsLedgerAccountAccountType $account_type account_type
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets general_ledger
     *
     * @return OneOfItemsLedgerAccountGeneralLedger
     */
    public function getGeneralLedger()
    {
        return $this->container['general_ledger'];
    }

    /**
     * Sets general_ledger
     *
     * @param OneOfItemsLedgerAccountGeneralLedger $general_ledger general_ledger
     *
     * @return $this
     */
    public function setGeneralLedger($general_ledger)
    {
        $this->container['general_ledger'] = $general_ledger;

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

<?php
/**
 * ListCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lists
 *
 * CRUD operations to manage lists and list memberships
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Lists\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Lists\ObjectSerializer;

/**
 * ListCreateRequest Class Doc Comment
 *
 * @category Class
 * @description The request object used when creating a new object list.
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object_type_id' => 'string',
        'processing_type' => 'string',
        'list_folder_id' => 'int',
        'name' => 'string',
        'filter_branch' => '\HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object_type_id' => null,
        'processing_type' => null,
        'list_folder_id' => 'int32',
        'name' => null,
        'filter_branch' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object_type_id' => false,
        'processing_type' => false,
        'list_folder_id' => false,
        'name' => false,
        'filter_branch' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'object_type_id' => 'objectTypeId',
        'processing_type' => 'processingType',
        'list_folder_id' => 'listFolderId',
        'name' => 'name',
        'filter_branch' => 'filterBranch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_type_id' => 'setObjectTypeId',
        'processing_type' => 'setProcessingType',
        'list_folder_id' => 'setListFolderId',
        'name' => 'setName',
        'filter_branch' => 'setFilterBranch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_type_id' => 'getObjectTypeId',
        'processing_type' => 'getProcessingType',
        'list_folder_id' => 'getListFolderId',
        'name' => 'getName',
        'filter_branch' => 'getFilterBranch'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('processing_type', $data ?? [], null);
        $this->setIfExists('list_folder_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('filter_branch', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['processing_type'] === null) {
            $invalidProperties[] = "'processing_type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets object_type_id
     *
     * @return string
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param string $object_type_id The object type ID of the type of objects that the list will store.
     *
     * @return self
     */
    public function setObjectTypeId($object_type_id)
    {
        if (is_null($object_type_id)) {
            throw new \InvalidArgumentException('non-nullable object_type_id cannot be null');
        }
        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets processing_type
     *
     * @return string
     */
    public function getProcessingType()
    {
        return $this->container['processing_type'];
    }

    /**
     * Sets processing_type
     *
     * @param string $processing_type The processing type of the list. One of: `SNAPSHOT`, `MANUAL`, or `DYNAMIC`.
     *
     * @return self
     */
    public function setProcessingType($processing_type)
    {
        if (is_null($processing_type)) {
            throw new \InvalidArgumentException('non-nullable processing_type cannot be null');
        }
        $this->container['processing_type'] = $processing_type;

        return $this;
    }

    /**
     * Gets list_folder_id
     *
     * @return int|null
     */
    public function getListFolderId()
    {
        return $this->container['list_folder_id'];
    }

    /**
     * Sets list_folder_id
     *
     * @param int|null $list_folder_id The ID of the folder that the list should be created in. If left blank, then the list will be created in the root of the list folder structure.
     *
     * @return self
     */
    public function setListFolderId($list_folder_id)
    {
        if (is_null($list_folder_id)) {
            throw new \InvalidArgumentException('non-nullable list_folder_id cannot be null');
        }
        $this->container['list_folder_id'] = $list_folder_id;

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
     * @param string $name The name of the list, which must be globally unique across all public lists in the portal.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets filter_branch
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner|null
     */
    public function getFilterBranch()
    {
        return $this->container['filter_branch'];
    }

    /**
     * Sets filter_branch
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner|null $filter_branch filter_branch
     *
     * @return self
     */
    public function setFilterBranch($filter_branch)
    {
        if (is_null($filter_branch)) {
            throw new \InvalidArgumentException('non-nullable filter_branch cannot be null');
        }
        $this->container['filter_branch'] = $filter_branch;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



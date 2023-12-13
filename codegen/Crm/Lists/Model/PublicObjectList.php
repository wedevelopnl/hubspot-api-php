<?php
/**
 * PublicObjectList
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
 * OpenAPI Generator version: 6.0.1
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
 * PublicObjectList Class Doc Comment
 *
 * @category Class
 * @description An object list definition.
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicObjectList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicObjectList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'processing_type' => 'string',
        'object_type_id' => 'string',
        'updated_by_id' => 'int',
        'filters_updated_at' => '\DateTime',
        'list_id' => 'int',
        'created_at' => '\DateTime',
        'processing_status' => 'string',
        'deleted_at' => '\DateTime',
        'list_version' => 'int',
        'name' => 'string',
        'created_by_id' => 'int',
        'filter_branch' => '\HubSpot\Client\Crm\Lists\Model\PublicPropertyAssociationFilterBranchFilterBranchesInner',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'processing_type' => null,
        'object_type_id' => null,
        'updated_by_id' => 'int32',
        'filters_updated_at' => 'date-time',
        'list_id' => 'int32',
        'created_at' => 'date-time',
        'processing_status' => null,
        'deleted_at' => 'date-time',
        'list_version' => 'int32',
        'name' => null,
        'created_by_id' => 'int32',
        'filter_branch' => null,
        'updated_at' => 'date-time'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'processing_type' => 'processingType',
        'object_type_id' => 'objectTypeId',
        'updated_by_id' => 'updatedById',
        'filters_updated_at' => 'filtersUpdatedAt',
        'list_id' => 'listId',
        'created_at' => 'createdAt',
        'processing_status' => 'processingStatus',
        'deleted_at' => 'deletedAt',
        'list_version' => 'listVersion',
        'name' => 'name',
        'created_by_id' => 'createdById',
        'filter_branch' => 'filterBranch',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'processing_type' => 'setProcessingType',
        'object_type_id' => 'setObjectTypeId',
        'updated_by_id' => 'setUpdatedById',
        'filters_updated_at' => 'setFiltersUpdatedAt',
        'list_id' => 'setListId',
        'created_at' => 'setCreatedAt',
        'processing_status' => 'setProcessingStatus',
        'deleted_at' => 'setDeletedAt',
        'list_version' => 'setListVersion',
        'name' => 'setName',
        'created_by_id' => 'setCreatedById',
        'filter_branch' => 'setFilterBranch',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'processing_type' => 'getProcessingType',
        'object_type_id' => 'getObjectTypeId',
        'updated_by_id' => 'getUpdatedById',
        'filters_updated_at' => 'getFiltersUpdatedAt',
        'list_id' => 'getListId',
        'created_at' => 'getCreatedAt',
        'processing_status' => 'getProcessingStatus',
        'deleted_at' => 'getDeletedAt',
        'list_version' => 'getListVersion',
        'name' => 'getName',
        'created_by_id' => 'getCreatedById',
        'filter_branch' => 'getFilterBranch',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['processing_type'] = $data['processing_type'] ?? null;
        $this->container['object_type_id'] = $data['object_type_id'] ?? null;
        $this->container['updated_by_id'] = $data['updated_by_id'] ?? null;
        $this->container['filters_updated_at'] = $data['filters_updated_at'] ?? null;
        $this->container['list_id'] = $data['list_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['list_version'] = $data['list_version'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['created_by_id'] = $data['created_by_id'] ?? null;
        $this->container['filter_branch'] = $data['filter_branch'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['processing_type'] === null) {
            $invalidProperties[] = "'processing_type' can't be null";
        }
        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['list_id'] === null) {
            $invalidProperties[] = "'list_id' can't be null";
        }
        if ($this->container['processing_status'] === null) {
            $invalidProperties[] = "'processing_status' can't be null";
        }
        if ($this->container['list_version'] === null) {
            $invalidProperties[] = "'list_version' can't be null";
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
     * @param string $processing_type The processing type of the list.
     *
     * @return self
     */
    public function setProcessingType($processing_type)
    {
        $this->container['processing_type'] = $processing_type;

        return $this;
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
     * @param string $object_type_id The object type of the list.
     *
     * @return self
     */
    public function setObjectTypeId($object_type_id)
    {
        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets updated_by_id
     *
     * @return int|null
     */
    public function getUpdatedById()
    {
        return $this->container['updated_by_id'];
    }

    /**
     * Sets updated_by_id
     *
     * @param int|null $updated_by_id The ID of the user that last updated the list.
     *
     * @return self
     */
    public function setUpdatedById($updated_by_id)
    {
        $this->container['updated_by_id'] = $updated_by_id;

        return $this;
    }

    /**
     * Gets filters_updated_at
     *
     * @return \DateTime|null
     */
    public function getFiltersUpdatedAt()
    {
        return $this->container['filters_updated_at'];
    }

    /**
     * Sets filters_updated_at
     *
     * @param \DateTime|null $filters_updated_at The time when the filters for this list were last updated.
     *
     * @return self
     */
    public function setFiltersUpdatedAt($filters_updated_at)
    {
        $this->container['filters_updated_at'] = $filters_updated_at;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param int $list_id The **ILS ID** of the list.
     *
     * @return self
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The time when the list was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string $processing_status The processing status of the list.
     *
     * @return self
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at The time when the list was deleted.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets list_version
     *
     * @return int
     */
    public function getListVersion()
    {
        return $this->container['list_version'];
    }

    /**
     * Sets list_version
     *
     * @param int $list_version The version of the list.
     *
     * @return self
     */
    public function setListVersion($list_version)
    {
        $this->container['list_version'] = $list_version;

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
     * @param string $name The name of the list.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created_by_id
     *
     * @return int|null
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     *
     * @param int|null $created_by_id The ID of the user that created the list.
     *
     * @return self
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

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
        $this->container['filter_branch'] = $filter_branch;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at The time the list was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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



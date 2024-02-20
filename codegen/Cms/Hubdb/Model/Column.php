<?php
/**
 * Column
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Hubdb
 *
 * HubDB is a relational data store that presents data as rows, columns, and cells in a table, much like a spreadsheet. HubDB tables can be added or modified [in the HubSpot CMS](https://knowledge.hubspot.com/cos-general/how-to-edit-hubdb-tables), but you can also use the API endpoints documented here. For more information on HubDB tables and using their data on a HubSpot site, see the [CMS developers site](https://designers.hubspot.com/docs/tools/hubdb). You can also see the [documentation for dynamic pages](https://designers.hubspot.com/docs/tutorials/how-to-build-dynamic-pages-with-hubdb) for more details about the `useForPages` field.  HubDB tables support `draft` and `published` versions. This allows you to update data in the table, either for testing or to allow for a manual approval process, without affecting any live pages using the existing data. Draft data can be reviewed, and published by a user working in HubSpot or published via the API. Draft data can also be discarded, allowing users to go back to the published version of the data without disrupting it. If a table is set to be `allowed for public access`, you can access the published version of the table and rows without any authentication by specifying the portal id via the query parameter `portalId`.
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

namespace HubSpot\Client\Cms\Hubdb\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Hubdb\ObjectSerializer;

/**
 * Column Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Column implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Column';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'foreign_table_id' => 'int',
        'description' => 'string',
        'label' => 'string',
        'type' => 'string',
        'option_count' => 'int',
        'foreign_ids' => '\HubSpot\Client\Cms\Hubdb\Model\ForeignId[]',
        'deleted' => 'bool',
        'name' => 'string',
        'options' => '\HubSpot\Client\Cms\Hubdb\Model\Option[]',
        'width' => 'int',
        'id' => 'string',
        'foreign_ids_by_id' => 'array<string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId>',
        'foreign_column_id' => 'int',
        'foreign_ids_by_name' => 'array<string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'foreign_table_id' => 'int64',
        'description' => null,
        'label' => null,
        'type' => null,
        'option_count' => 'int32',
        'foreign_ids' => null,
        'deleted' => null,
        'name' => null,
        'options' => null,
        'width' => 'int32',
        'id' => null,
        'foreign_ids_by_id' => null,
        'foreign_column_id' => 'int32',
        'foreign_ids_by_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'foreign_table_id' => false,
        'description' => false,
        'label' => false,
        'type' => false,
        'option_count' => false,
        'foreign_ids' => false,
        'deleted' => false,
        'name' => false,
        'options' => false,
        'width' => false,
        'id' => false,
        'foreign_ids_by_id' => false,
        'foreign_column_id' => false,
        'foreign_ids_by_name' => false
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
        'foreign_table_id' => 'foreignTableId',
        'description' => 'description',
        'label' => 'label',
        'type' => 'type',
        'option_count' => 'optionCount',
        'foreign_ids' => 'foreignIds',
        'deleted' => 'deleted',
        'name' => 'name',
        'options' => 'options',
        'width' => 'width',
        'id' => 'id',
        'foreign_ids_by_id' => 'foreignIdsById',
        'foreign_column_id' => 'foreignColumnId',
        'foreign_ids_by_name' => 'foreignIdsByName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'foreign_table_id' => 'setForeignTableId',
        'description' => 'setDescription',
        'label' => 'setLabel',
        'type' => 'setType',
        'option_count' => 'setOptionCount',
        'foreign_ids' => 'setForeignIds',
        'deleted' => 'setDeleted',
        'name' => 'setName',
        'options' => 'setOptions',
        'width' => 'setWidth',
        'id' => 'setId',
        'foreign_ids_by_id' => 'setForeignIdsById',
        'foreign_column_id' => 'setForeignColumnId',
        'foreign_ids_by_name' => 'setForeignIdsByName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'foreign_table_id' => 'getForeignTableId',
        'description' => 'getDescription',
        'label' => 'getLabel',
        'type' => 'getType',
        'option_count' => 'getOptionCount',
        'foreign_ids' => 'getForeignIds',
        'deleted' => 'getDeleted',
        'name' => 'getName',
        'options' => 'getOptions',
        'width' => 'getWidth',
        'id' => 'getId',
        'foreign_ids_by_id' => 'getForeignIdsById',
        'foreign_column_id' => 'getForeignColumnId',
        'foreign_ids_by_name' => 'getForeignIdsByName'
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

    public const TYPE_NULL = 'NULL';
    public const TYPE_TEXT = 'TEXT';
    public const TYPE_NUMBER = 'NUMBER';
    public const TYPE_URL = 'URL';
    public const TYPE_IMAGE = 'IMAGE';
    public const TYPE_SELECT = 'SELECT';
    public const TYPE_MULTISELECT = 'MULTISELECT';
    public const TYPE_BOOLEAN = 'BOOLEAN';
    public const TYPE_LOCATION = 'LOCATION';
    public const TYPE_DATE = 'DATE';
    public const TYPE_DATETIME = 'DATETIME';
    public const TYPE_CURRENCY = 'CURRENCY';
    public const TYPE_RICHTEXT = 'RICHTEXT';
    public const TYPE_FOREIGN_ID = 'FOREIGN_ID';
    public const TYPE_VIDEO = 'VIDEO';
    public const TYPE_CTA = 'CTA';
    public const TYPE_FILE = 'FILE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NULL,
            self::TYPE_TEXT,
            self::TYPE_NUMBER,
            self::TYPE_URL,
            self::TYPE_IMAGE,
            self::TYPE_SELECT,
            self::TYPE_MULTISELECT,
            self::TYPE_BOOLEAN,
            self::TYPE_LOCATION,
            self::TYPE_DATE,
            self::TYPE_DATETIME,
            self::TYPE_CURRENCY,
            self::TYPE_RICHTEXT,
            self::TYPE_FOREIGN_ID,
            self::TYPE_VIDEO,
            self::TYPE_CTA,
            self::TYPE_FILE,
        ];
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
        $this->setIfExists('foreign_table_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('option_count', $data ?? [], null);
        $this->setIfExists('foreign_ids', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('foreign_ids_by_id', $data ?? [], null);
        $this->setIfExists('foreign_column_id', $data ?? [], null);
        $this->setIfExists('foreign_ids_by_name', $data ?? [], null);
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

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets foreign_table_id
     *
     * @return int|null
     */
    public function getForeignTableId()
    {
        return $this->container['foreign_table_id'];
    }

    /**
     * Sets foreign_table_id
     *
     * @param int|null $foreign_table_id Foreign table id referenced
     *
     * @return self
     */
    public function setForeignTableId($foreign_table_id)
    {
        if (is_null($foreign_table_id)) {
            throw new \InvalidArgumentException('non-nullable foreign_table_id cannot be null');
        }
        $this->container['foreign_table_id'] = $foreign_table_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label of the column
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

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
     * @param string $type Type of the column
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets option_count
     *
     * @return int|null
     */
    public function getOptionCount()
    {
        return $this->container['option_count'];
    }

    /**
     * Sets option_count
     *
     * @param int|null $option_count Number of options available
     *
     * @return self
     */
    public function setOptionCount($option_count)
    {
        if (is_null($option_count)) {
            throw new \InvalidArgumentException('non-nullable option_count cannot be null');
        }
        $this->container['option_count'] = $option_count;

        return $this;
    }

    /**
     * Gets foreign_ids
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\ForeignId[]|null
     */
    public function getForeignIds()
    {
        return $this->container['foreign_ids'];
    }

    /**
     * Sets foreign_ids
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\ForeignId[]|null $foreign_ids Foreign Ids
     *
     * @return self
     */
    public function setForeignIds($foreign_ids)
    {
        if (is_null($foreign_ids)) {
            throw new \InvalidArgumentException('non-nullable foreign_ids cannot be null');
        }
        $this->container['foreign_ids'] = $foreign_ids;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

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
     * @param string $name Name of the column
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
     * Gets options
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\Option[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\Option[]|null $options Options to choose for select and multi-select columns
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width Column width for HubDB UI
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Column Id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets foreign_ids_by_id
     *
     * @return array<string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId>|null
     */
    public function getForeignIdsById()
    {
        return $this->container['foreign_ids_by_id'];
    }

    /**
     * Sets foreign_ids_by_id
     *
     * @param array<string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId>|null $foreign_ids_by_id Foreign ids
     *
     * @return self
     */
    public function setForeignIdsById($foreign_ids_by_id)
    {
        if (is_null($foreign_ids_by_id)) {
            throw new \InvalidArgumentException('non-nullable foreign_ids_by_id cannot be null');
        }
        $this->container['foreign_ids_by_id'] = $foreign_ids_by_id;

        return $this;
    }

    /**
     * Gets foreign_column_id
     *
     * @return int|null
     */
    public function getForeignColumnId()
    {
        return $this->container['foreign_column_id'];
    }

    /**
     * Sets foreign_column_id
     *
     * @param int|null $foreign_column_id Foreign Column id
     *
     * @return self
     */
    public function setForeignColumnId($foreign_column_id)
    {
        if (is_null($foreign_column_id)) {
            throw new \InvalidArgumentException('non-nullable foreign_column_id cannot be null');
        }
        $this->container['foreign_column_id'] = $foreign_column_id;

        return $this;
    }

    /**
     * Gets foreign_ids_by_name
     *
     * @return array<string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId>|null
     */
    public function getForeignIdsByName()
    {
        return $this->container['foreign_ids_by_name'];
    }

    /**
     * Sets foreign_ids_by_name
     *
     * @param array<string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId>|null $foreign_ids_by_name Foreign ids by name
     *
     * @return self
     */
    public function setForeignIdsByName($foreign_ids_by_name)
    {
        if (is_null($foreign_ids_by_name)) {
            throw new \InvalidArgumentException('non-nullable foreign_ids_by_name cannot be null');
        }
        $this->container['foreign_ids_by_name'] = $foreign_ids_by_name;

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



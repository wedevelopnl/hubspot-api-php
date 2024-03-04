<?php
/**
 * ImportFromUrlInput
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Files Files
 *
 * Upload and manage files.
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

namespace HubSpot\Client\Files\Model;

use \ArrayAccess;
use \HubSpot\Client\Files\ObjectSerializer;

/**
 * ImportFromUrlInput Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImportFromUrlInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportFromUrlInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'folder_path' => 'string',
        'access' => 'string',
        'duplicate_validation_scope' => 'string',
        'name' => 'string',
        'duplicate_validation_strategy' => 'string',
        'ttl' => 'string',
        'overwrite' => 'bool',
        'url' => 'string',
        'folder_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'folder_path' => null,
        'access' => null,
        'duplicate_validation_scope' => null,
        'name' => null,
        'duplicate_validation_strategy' => null,
        'ttl' => null,
        'overwrite' => null,
        'url' => null,
        'folder_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'folder_path' => false,
        'access' => false,
        'duplicate_validation_scope' => false,
        'name' => false,
        'duplicate_validation_strategy' => false,
        'ttl' => false,
        'overwrite' => false,
        'url' => false,
        'folder_id' => false
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
        'folder_path' => 'folderPath',
        'access' => 'access',
        'duplicate_validation_scope' => 'duplicateValidationScope',
        'name' => 'name',
        'duplicate_validation_strategy' => 'duplicateValidationStrategy',
        'ttl' => 'ttl',
        'overwrite' => 'overwrite',
        'url' => 'url',
        'folder_id' => 'folderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'folder_path' => 'setFolderPath',
        'access' => 'setAccess',
        'duplicate_validation_scope' => 'setDuplicateValidationScope',
        'name' => 'setName',
        'duplicate_validation_strategy' => 'setDuplicateValidationStrategy',
        'ttl' => 'setTtl',
        'overwrite' => 'setOverwrite',
        'url' => 'setUrl',
        'folder_id' => 'setFolderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'folder_path' => 'getFolderPath',
        'access' => 'getAccess',
        'duplicate_validation_scope' => 'getDuplicateValidationScope',
        'name' => 'getName',
        'duplicate_validation_strategy' => 'getDuplicateValidationStrategy',
        'ttl' => 'getTtl',
        'overwrite' => 'getOverwrite',
        'url' => 'getUrl',
        'folder_id' => 'getFolderId'
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

    public const ACCESS_PUBLIC_INDEXABLE = 'PUBLIC_INDEXABLE';
    public const ACCESS_PUBLIC_NOT_INDEXABLE = 'PUBLIC_NOT_INDEXABLE';
    public const ACCESS_HIDDEN_INDEXABLE = 'HIDDEN_INDEXABLE';
    public const ACCESS_HIDDEN_NOT_INDEXABLE = 'HIDDEN_NOT_INDEXABLE';
    public const ACCESS_HIDDEN_PRIVATE = 'HIDDEN_PRIVATE';
    public const ACCESS__PRIVATE = 'PRIVATE';
    public const DUPLICATE_VALIDATION_SCOPE_ENTIRE_PORTAL = 'ENTIRE_PORTAL';
    public const DUPLICATE_VALIDATION_SCOPE_EXACT_FOLDER = 'EXACT_FOLDER';
    public const DUPLICATE_VALIDATION_STRATEGY_NONE = 'NONE';
    public const DUPLICATE_VALIDATION_STRATEGY_REJECT = 'REJECT';
    public const DUPLICATE_VALIDATION_STRATEGY_RETURN_EXISTING = 'RETURN_EXISTING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS_PUBLIC_INDEXABLE,
            self::ACCESS_PUBLIC_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_INDEXABLE,
            self::ACCESS_HIDDEN_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_PRIVATE,
            self::ACCESS__PRIVATE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDuplicateValidationScopeAllowableValues()
    {
        return [
            self::DUPLICATE_VALIDATION_SCOPE_ENTIRE_PORTAL,
            self::DUPLICATE_VALIDATION_SCOPE_EXACT_FOLDER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDuplicateValidationStrategyAllowableValues()
    {
        return [
            self::DUPLICATE_VALIDATION_STRATEGY_NONE,
            self::DUPLICATE_VALIDATION_STRATEGY_REJECT,
            self::DUPLICATE_VALIDATION_STRATEGY_RETURN_EXISTING,
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
        $this->setIfExists('folder_path', $data ?? [], null);
        $this->setIfExists('access', $data ?? [], null);
        $this->setIfExists('duplicate_validation_scope', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('duplicate_validation_strategy', $data ?? [], null);
        $this->setIfExists('ttl', $data ?? [], null);
        $this->setIfExists('overwrite', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
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

        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
        }
        $allowedValues = $this->getAccessAllowableValues();
        if (!is_null($this->container['access']) && !in_array($this->container['access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'access', must be one of '%s'",
                $this->container['access'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDuplicateValidationScopeAllowableValues();
        if (!is_null($this->container['duplicate_validation_scope']) && !in_array($this->container['duplicate_validation_scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'duplicate_validation_scope', must be one of '%s'",
                $this->container['duplicate_validation_scope'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDuplicateValidationStrategyAllowableValues();
        if (!is_null($this->container['duplicate_validation_strategy']) && !in_array($this->container['duplicate_validation_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'duplicate_validation_strategy', must be one of '%s'",
                $this->container['duplicate_validation_strategy'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets folder_path
     *
     * @return string|null
     */
    public function getFolderPath()
    {
        return $this->container['folder_path'];
    }

    /**
     * Sets folder_path
     *
     * @param string|null $folder_path One of folderPath or folderId is required. Destination folder path for the uploaded file. If the folder path does not exist, there will be an attempt to create the folder path.
     *
     * @return self
     */
    public function setFolderPath($folder_path)
    {
        if (is_null($folder_path)) {
            throw new \InvalidArgumentException('non-nullable folder_path cannot be null');
        }
        $this->container['folder_path'] = $folder_path;

        return $this;
    }

    /**
     * Gets access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param string $access PUBLIC_INDEXABLE: File is publicly accessible by anyone who has the URL. Search engines can index the file. PUBLIC_NOT_INDEXABLE: File is publicly accessible by anyone who has the URL. Search engines *can't* index the file. PRIVATE: File is NOT publicly accessible. Requires a signed URL to see content. Search engines *can't* index the file.
     *
     * @return self
     */
    public function setAccess($access)
    {
        if (is_null($access)) {
            throw new \InvalidArgumentException('non-nullable access cannot be null');
        }
        $allowedValues = $this->getAccessAllowableValues();
        if (!in_array($access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'access', must be one of '%s'",
                    $access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets duplicate_validation_scope
     *
     * @return string|null
     */
    public function getDuplicateValidationScope()
    {
        return $this->container['duplicate_validation_scope'];
    }

    /**
     * Sets duplicate_validation_scope
     *
     * @param string|null $duplicate_validation_scope ENTIRE_PORTAL: Look for a duplicate file in the entire account. EXACT_FOLDER: Look for a duplicate file in the provided folder.
     *
     * @return self
     */
    public function setDuplicateValidationScope($duplicate_validation_scope)
    {
        if (is_null($duplicate_validation_scope)) {
            throw new \InvalidArgumentException('non-nullable duplicate_validation_scope cannot be null');
        }
        $allowedValues = $this->getDuplicateValidationScopeAllowableValues();
        if (!in_array($duplicate_validation_scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'duplicate_validation_scope', must be one of '%s'",
                    $duplicate_validation_scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duplicate_validation_scope'] = $duplicate_validation_scope;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name to give the resulting file in the file manager.
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
     * Gets duplicate_validation_strategy
     *
     * @return string|null
     */
    public function getDuplicateValidationStrategy()
    {
        return $this->container['duplicate_validation_strategy'];
    }

    /**
     * Sets duplicate_validation_strategy
     *
     * @param string|null $duplicate_validation_strategy NONE: Do not run any duplicate validation. REJECT: Reject the upload if a duplicate is found. RETURN_EXISTING: If a duplicate file is found, do not upload a new file and return the found duplicate instead.
     *
     * @return self
     */
    public function setDuplicateValidationStrategy($duplicate_validation_strategy)
    {
        if (is_null($duplicate_validation_strategy)) {
            throw new \InvalidArgumentException('non-nullable duplicate_validation_strategy cannot be null');
        }
        $allowedValues = $this->getDuplicateValidationStrategyAllowableValues();
        if (!in_array($duplicate_validation_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'duplicate_validation_strategy', must be one of '%s'",
                    $duplicate_validation_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duplicate_validation_strategy'] = $duplicate_validation_strategy;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return string|null
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param string|null $ttl Time to live. If specified the file will be deleted after the given time frame. If left unset, the file will exist indefinitely
     *
     * @return self
     */
    public function setTtl($ttl)
    {
        if (is_null($ttl)) {
            throw new \InvalidArgumentException('non-nullable ttl cannot be null');
        }
        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets overwrite
     *
     * @return bool|null
     */
    public function getOverwrite()
    {
        return $this->container['overwrite'];
    }

    /**
     * Sets overwrite
     *
     * @param bool|null $overwrite If true, will overwrite existing file if one with the same name and extension exists in the given folder. The overwritten file will be deleted and the uploaded file will take its place with a new ID. If unset or set as false, the new file's name will be updated to prevent colliding with existing file if one exists with the same path, name, and extension
     *
     * @return self
     */
    public function setOverwrite($overwrite)
    {
        if (is_null($overwrite)) {
            throw new \InvalidArgumentException('non-nullable overwrite cannot be null');
        }
        $this->container['overwrite'] = $overwrite;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL to download the new file from.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string|null $folder_id One of folderId or folderPath is required. Destination folderId for the uploaded file.
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            throw new \InvalidArgumentException('non-nullable folder_id cannot be null');
        }
        $this->container['folder_id'] = $folder_id;

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



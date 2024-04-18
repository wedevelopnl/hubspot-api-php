<?php
/**
 * CardAuditResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Cards
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public App Crm Cards
 *
 * Allows an app to extend the CRM UI by surfacing custom cards in the sidebar of record pages. These cards are defined up-front as part of app configuration, then populated by external data fetch requests when the record page is accessed by a user.
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

namespace HubSpot\Client\Crm\Extensions\Cards\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Cards\ObjectSerializer;

/**
 * CardAuditResponse Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Cards
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CardAuditResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardAuditResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_type' => 'string',
        'object_type_id' => 'int',
        'auth_source' => 'string',
        'changed_at' => 'int',
        'application_id' => 'int',
        'initiating_user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_type' => null,
        'object_type_id' => 'int32',
        'auth_source' => null,
        'changed_at' => 'int64',
        'application_id' => 'int32',
        'initiating_user_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action_type' => false,
        'object_type_id' => false,
        'auth_source' => false,
        'changed_at' => false,
        'application_id' => false,
        'initiating_user_id' => false
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
        'action_type' => 'actionType',
        'object_type_id' => 'objectTypeId',
        'auth_source' => 'authSource',
        'changed_at' => 'changedAt',
        'application_id' => 'applicationId',
        'initiating_user_id' => 'initiatingUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
        'object_type_id' => 'setObjectTypeId',
        'auth_source' => 'setAuthSource',
        'changed_at' => 'setChangedAt',
        'application_id' => 'setApplicationId',
        'initiating_user_id' => 'setInitiatingUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
        'object_type_id' => 'getObjectTypeId',
        'auth_source' => 'getAuthSource',
        'changed_at' => 'getChangedAt',
        'application_id' => 'getApplicationId',
        'initiating_user_id' => 'getInitiatingUserId'
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

    public const ACTION_TYPE_CREATE = 'CREATE';
    public const ACTION_TYPE_UPDATE = 'UPDATE';
    public const ACTION_TYPE_DELETE = 'DELETE';
    public const AUTH_SOURCE_INTERNAL = 'INTERNAL';
    public const AUTH_SOURCE_APP = 'APP';
    public const AUTH_SOURCE_EXTERNAL = 'EXTERNAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_CREATE,
            self::ACTION_TYPE_UPDATE,
            self::ACTION_TYPE_DELETE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthSourceAllowableValues()
    {
        return [
            self::AUTH_SOURCE_INTERNAL,
            self::AUTH_SOURCE_APP,
            self::AUTH_SOURCE_EXTERNAL,
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
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('auth_source', $data ?? [], null);
        $this->setIfExists('changed_at', $data ?? [], null);
        $this->setIfExists('application_id', $data ?? [], null);
        $this->setIfExists('initiating_user_id', $data ?? [], null);
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

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
        }
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!is_null($this->container['action_type']) && !in_array($this->container['action_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action_type', must be one of '%s'",
                $this->container['action_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['auth_source'] === null) {
            $invalidProperties[] = "'auth_source' can't be null";
        }
        $allowedValues = $this->getAuthSourceAllowableValues();
        if (!is_null($this->container['auth_source']) && !in_array($this->container['auth_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_source', must be one of '%s'",
                $this->container['auth_source'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['changed_at'] === null) {
            $invalidProperties[] = "'changed_at' can't be null";
        }
        if ($this->container['application_id'] === null) {
            $invalidProperties[] = "'application_id' can't be null";
        }
        if ($this->container['initiating_user_id'] === null) {
            $invalidProperties[] = "'initiating_user_id' can't be null";
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
     * Gets action_type
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
        }
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!in_array($action_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action_type', must be one of '%s'",
                    $action_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets object_type_id
     *
     * @return int
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param int $object_type_id object_type_id
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
     * Gets auth_source
     *
     * @return string
     */
    public function getAuthSource()
    {
        return $this->container['auth_source'];
    }

    /**
     * Sets auth_source
     *
     * @param string $auth_source auth_source
     *
     * @return self
     */
    public function setAuthSource($auth_source)
    {
        if (is_null($auth_source)) {
            throw new \InvalidArgumentException('non-nullable auth_source cannot be null');
        }
        $allowedValues = $this->getAuthSourceAllowableValues();
        if (!in_array($auth_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_source', must be one of '%s'",
                    $auth_source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_source'] = $auth_source;

        return $this;
    }

    /**
     * Gets changed_at
     *
     * @return int
     */
    public function getChangedAt()
    {
        return $this->container['changed_at'];
    }

    /**
     * Sets changed_at
     *
     * @param int $changed_at changed_at
     *
     * @return self
     */
    public function setChangedAt($changed_at)
    {
        if (is_null($changed_at)) {
            throw new \InvalidArgumentException('non-nullable changed_at cannot be null');
        }
        $this->container['changed_at'] = $changed_at;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param int $application_id application_id
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        if (is_null($application_id)) {
            throw new \InvalidArgumentException('non-nullable application_id cannot be null');
        }
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets initiating_user_id
     *
     * @return int
     */
    public function getInitiatingUserId()
    {
        return $this->container['initiating_user_id'];
    }

    /**
     * Sets initiating_user_id
     *
     * @param int $initiating_user_id initiating_user_id
     *
     * @return self
     */
    public function setInitiatingUserId($initiating_user_id)
    {
        if (is_null($initiating_user_id)) {
            throw new \InvalidArgumentException('non-nullable initiating_user_id cannot be null');
        }
        $this->container['initiating_user_id'] = $initiating_user_id;

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


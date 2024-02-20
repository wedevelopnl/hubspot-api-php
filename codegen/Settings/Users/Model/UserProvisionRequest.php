<?php
/**
 * UserProvisionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Settings\Users
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Settings User Provisioning
 *
 * Add, manage, and remove users from your account
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

namespace HubSpot\Client\Settings\Users\Model;

use \ArrayAccess;
use \HubSpot\Client\Settings\Users\ObjectSerializer;

/**
 * UserProvisionRequest Class Doc Comment
 *
 * @category Class
 * @description A user creation request
 * @package  HubSpot\Client\Settings\Users
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserProvisionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserProvisionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primary_team_id' => 'string',
        'send_welcome_email' => 'bool',
        'role_id' => 'string',
        'secondary_team_ids' => 'string[]',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primary_team_id' => null,
        'send_welcome_email' => null,
        'role_id' => null,
        'secondary_team_ids' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'primary_team_id' => false,
        'send_welcome_email' => false,
        'role_id' => false,
        'secondary_team_ids' => false,
        'email' => false
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
        'primary_team_id' => 'primaryTeamId',
        'send_welcome_email' => 'sendWelcomeEmail',
        'role_id' => 'roleId',
        'secondary_team_ids' => 'secondaryTeamIds',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_team_id' => 'setPrimaryTeamId',
        'send_welcome_email' => 'setSendWelcomeEmail',
        'role_id' => 'setRoleId',
        'secondary_team_ids' => 'setSecondaryTeamIds',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_team_id' => 'getPrimaryTeamId',
        'send_welcome_email' => 'getSendWelcomeEmail',
        'role_id' => 'getRoleId',
        'secondary_team_ids' => 'getSecondaryTeamIds',
        'email' => 'getEmail'
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
        $this->setIfExists('primary_team_id', $data ?? [], null);
        $this->setIfExists('send_welcome_email', $data ?? [], null);
        $this->setIfExists('role_id', $data ?? [], null);
        $this->setIfExists('secondary_team_ids', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
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

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
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
     * Gets primary_team_id
     *
     * @return string|null
     */
    public function getPrimaryTeamId()
    {
        return $this->container['primary_team_id'];
    }

    /**
     * Sets primary_team_id
     *
     * @param string|null $primary_team_id The user's primary team
     *
     * @return self
     */
    public function setPrimaryTeamId($primary_team_id)
    {
        if (is_null($primary_team_id)) {
            throw new \InvalidArgumentException('non-nullable primary_team_id cannot be null');
        }
        $this->container['primary_team_id'] = $primary_team_id;

        return $this;
    }

    /**
     * Gets send_welcome_email
     *
     * @return bool|null
     */
    public function getSendWelcomeEmail()
    {
        return $this->container['send_welcome_email'];
    }

    /**
     * Sets send_welcome_email
     *
     * @param bool|null $send_welcome_email Whether to send a welcome email
     *
     * @return self
     */
    public function setSendWelcomeEmail($send_welcome_email)
    {
        if (is_null($send_welcome_email)) {
            throw new \InvalidArgumentException('non-nullable send_welcome_email cannot be null');
        }
        $this->container['send_welcome_email'] = $send_welcome_email;

        return $this;
    }

    /**
     * Gets role_id
     *
     * @return string|null
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     *
     * @param string|null $role_id The user's role
     *
     * @return self
     */
    public function setRoleId($role_id)
    {
        if (is_null($role_id)) {
            throw new \InvalidArgumentException('non-nullable role_id cannot be null');
        }
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets secondary_team_ids
     *
     * @return string[]|null
     */
    public function getSecondaryTeamIds()
    {
        return $this->container['secondary_team_ids'];
    }

    /**
     * Sets secondary_team_ids
     *
     * @param string[]|null $secondary_team_ids The user's additional teams
     *
     * @return self
     */
    public function setSecondaryTeamIds($secondary_team_ids)
    {
        if (is_null($secondary_team_ids)) {
            throw new \InvalidArgumentException('non-nullable secondary_team_ids cannot be null');
        }
        $this->container['secondary_team_ids'] = $secondary_team_ids;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The created user's email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

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



<?php
/**
 * PublicEventAnalyticsFilter
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
 * PublicEventAnalyticsFilter Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicEventAnalyticsFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicEventAnalyticsFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'filter_type' => 'string',
        'coalescing_refine_by' => '\HubSpot\Client\Crm\Lists\Model\PublicEventAnalyticsFilterCoalescingRefineBy',
        'pruning_refine_by' => '\HubSpot\Client\Crm\Lists\Model\PublicEventAnalyticsFilterCoalescingRefineBy',
        'operator' => 'string',
        'event_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'filter_type' => null,
        'coalescing_refine_by' => null,
        'pruning_refine_by' => null,
        'operator' => null,
        'event_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'filter_type' => false,
        'coalescing_refine_by' => false,
        'pruning_refine_by' => false,
        'operator' => false,
        'event_id' => false
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
        'filter_type' => 'filterType',
        'coalescing_refine_by' => 'coalescingRefineBy',
        'pruning_refine_by' => 'pruningRefineBy',
        'operator' => 'operator',
        'event_id' => 'eventId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_type' => 'setFilterType',
        'coalescing_refine_by' => 'setCoalescingRefineBy',
        'pruning_refine_by' => 'setPruningRefineBy',
        'operator' => 'setOperator',
        'event_id' => 'setEventId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_type' => 'getFilterType',
        'coalescing_refine_by' => 'getCoalescingRefineBy',
        'pruning_refine_by' => 'getPruningRefineBy',
        'operator' => 'getOperator',
        'event_id' => 'getEventId'
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

    public const FILTER_TYPE_EVENT = 'EVENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterTypeAllowableValues()
    {
        return [
            self::FILTER_TYPE_EVENT,
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
        $this->setIfExists('filter_type', $data ?? [], 'EVENT');
        $this->setIfExists('coalescing_refine_by', $data ?? [], null);
        $this->setIfExists('pruning_refine_by', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('event_id', $data ?? [], null);
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

        if ($this->container['filter_type'] === null) {
            $invalidProperties[] = "'filter_type' can't be null";
        }
        $allowedValues = $this->getFilterTypeAllowableValues();
        if (!is_null($this->container['filter_type']) && !in_array($this->container['filter_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'filter_type', must be one of '%s'",
                $this->container['filter_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['event_id'] === null) {
            $invalidProperties[] = "'event_id' can't be null";
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
     * Gets filter_type
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     * @param string $filter_type filter_type
     *
     * @return self
     */
    public function setFilterType($filter_type)
    {
        if (is_null($filter_type)) {
            throw new \InvalidArgumentException('non-nullable filter_type cannot be null');
        }
        $allowedValues = $this->getFilterTypeAllowableValues();
        if (!in_array($filter_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'filter_type', must be one of '%s'",
                    $filter_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_type'] = $filter_type;

        return $this;
    }

    /**
     * Gets coalescing_refine_by
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicEventAnalyticsFilterCoalescingRefineBy|null
     */
    public function getCoalescingRefineBy()
    {
        return $this->container['coalescing_refine_by'];
    }

    /**
     * Sets coalescing_refine_by
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicEventAnalyticsFilterCoalescingRefineBy|null $coalescing_refine_by coalescing_refine_by
     *
     * @return self
     */
    public function setCoalescingRefineBy($coalescing_refine_by)
    {
        if (is_null($coalescing_refine_by)) {
            throw new \InvalidArgumentException('non-nullable coalescing_refine_by cannot be null');
        }
        $this->container['coalescing_refine_by'] = $coalescing_refine_by;

        return $this;
    }

    /**
     * Gets pruning_refine_by
     *
     * @return \HubSpot\Client\Crm\Lists\Model\PublicEventAnalyticsFilterCoalescingRefineBy|null
     */
    public function getPruningRefineBy()
    {
        return $this->container['pruning_refine_by'];
    }

    /**
     * Sets pruning_refine_by
     *
     * @param \HubSpot\Client\Crm\Lists\Model\PublicEventAnalyticsFilterCoalescingRefineBy|null $pruning_refine_by pruning_refine_by
     *
     * @return self
     */
    public function setPruningRefineBy($pruning_refine_by)
    {
        if (is_null($pruning_refine_by)) {
            throw new \InvalidArgumentException('non-nullable pruning_refine_by cannot be null');
        }
        $this->container['pruning_refine_by'] = $pruning_refine_by;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string $event_id event_id
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        if (is_null($event_id)) {
            throw new \InvalidArgumentException('non-nullable event_id cannot be null');
        }
        $this->container['event_id'] = $event_id;

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



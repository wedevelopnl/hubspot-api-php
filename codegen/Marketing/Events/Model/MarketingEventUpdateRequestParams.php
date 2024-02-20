<?php
/**
 * MarketingEventUpdateRequestParams
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing Events
 *
 * These APIs allow you to interact with HubSpot's Marketing Events Extension. It allows you to: * Create, Read or update Marketing Event information in HubSpot * Specify whether a HubSpot contact has registered, attended or cancelled a registration to a Marketing Event. * Specify a URL that can be called to get the details of a Marketing Event.
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

namespace HubSpot\Client\Marketing\Events\Model;

use \ArrayAccess;
use \HubSpot\Client\Marketing\Events\ObjectSerializer;

/**
 * MarketingEventUpdateRequestParams Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarketingEventUpdateRequestParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MarketingEventUpdateRequestParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date_time' => '\DateTime',
        'custom_properties' => '\HubSpot\Client\Marketing\Events\Model\PropertyValue[]',
        'event_cancelled' => 'bool',
        'event_organizer' => 'string',
        'event_url' => 'string',
        'event_description' => 'string',
        'event_name' => 'string',
        'event_type' => 'string',
        'end_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date_time' => 'date-time',
        'custom_properties' => null,
        'event_cancelled' => null,
        'event_organizer' => null,
        'event_url' => null,
        'event_description' => null,
        'event_name' => null,
        'event_type' => null,
        'end_date_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start_date_time' => false,
        'custom_properties' => false,
        'event_cancelled' => false,
        'event_organizer' => false,
        'event_url' => false,
        'event_description' => false,
        'event_name' => false,
        'event_type' => false,
        'end_date_time' => false
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
        'start_date_time' => 'startDateTime',
        'custom_properties' => 'customProperties',
        'event_cancelled' => 'eventCancelled',
        'event_organizer' => 'eventOrganizer',
        'event_url' => 'eventUrl',
        'event_description' => 'eventDescription',
        'event_name' => 'eventName',
        'event_type' => 'eventType',
        'end_date_time' => 'endDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date_time' => 'setStartDateTime',
        'custom_properties' => 'setCustomProperties',
        'event_cancelled' => 'setEventCancelled',
        'event_organizer' => 'setEventOrganizer',
        'event_url' => 'setEventUrl',
        'event_description' => 'setEventDescription',
        'event_name' => 'setEventName',
        'event_type' => 'setEventType',
        'end_date_time' => 'setEndDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date_time' => 'getStartDateTime',
        'custom_properties' => 'getCustomProperties',
        'event_cancelled' => 'getEventCancelled',
        'event_organizer' => 'getEventOrganizer',
        'event_url' => 'getEventUrl',
        'event_description' => 'getEventDescription',
        'event_name' => 'getEventName',
        'event_type' => 'getEventType',
        'end_date_time' => 'getEndDateTime'
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
        $this->setIfExists('start_date_time', $data ?? [], null);
        $this->setIfExists('custom_properties', $data ?? [], null);
        $this->setIfExists('event_cancelled', $data ?? [], null);
        $this->setIfExists('event_organizer', $data ?? [], null);
        $this->setIfExists('event_url', $data ?? [], null);
        $this->setIfExists('event_description', $data ?? [], null);
        $this->setIfExists('event_name', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('end_date_time', $data ?? [], null);
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
     * Gets start_date_time
     *
     * @return \DateTime|null
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime|null $start_date_time The start date and time of the marketing event.
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        if (is_null($start_date_time)) {
            throw new \InvalidArgumentException('non-nullable start_date_time cannot be null');
        }
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets custom_properties
     *
     * @return \HubSpot\Client\Marketing\Events\Model\PropertyValue[]|null
     */
    public function getCustomProperties()
    {
        return $this->container['custom_properties'];
    }

    /**
     * Sets custom_properties
     *
     * @param \HubSpot\Client\Marketing\Events\Model\PropertyValue[]|null $custom_properties A list of PropertyValues. These can be whatever kind of property names and values you want. However, they must already exist on the HubSpot account's definition of the MarketingEvent Object. If they don't they will be filtered out and not set. In order to do this you'll need to create a new PropertyGroup on the HubSpot account's MarketingEvent object for your specific app and create the Custom Property you want to track on that HubSpot account. Do not create any new default properties on the MarketingEvent object as that will apply to all HubSpot accounts.
     *
     * @return self
     */
    public function setCustomProperties($custom_properties)
    {
        if (is_null($custom_properties)) {
            throw new \InvalidArgumentException('non-nullable custom_properties cannot be null');
        }
        $this->container['custom_properties'] = $custom_properties;

        return $this;
    }

    /**
     * Gets event_cancelled
     *
     * @return bool|null
     */
    public function getEventCancelled()
    {
        return $this->container['event_cancelled'];
    }

    /**
     * Sets event_cancelled
     *
     * @param bool|null $event_cancelled Indicates if the marketing event has been cancelled. Defaults to `false`
     *
     * @return self
     */
    public function setEventCancelled($event_cancelled)
    {
        if (is_null($event_cancelled)) {
            throw new \InvalidArgumentException('non-nullable event_cancelled cannot be null');
        }
        $this->container['event_cancelled'] = $event_cancelled;

        return $this;
    }

    /**
     * Gets event_organizer
     *
     * @return string|null
     */
    public function getEventOrganizer()
    {
        return $this->container['event_organizer'];
    }

    /**
     * Sets event_organizer
     *
     * @param string|null $event_organizer The name of the organizer of the marketing event.
     *
     * @return self
     */
    public function setEventOrganizer($event_organizer)
    {
        if (is_null($event_organizer)) {
            throw new \InvalidArgumentException('non-nullable event_organizer cannot be null');
        }
        $this->container['event_organizer'] = $event_organizer;

        return $this;
    }

    /**
     * Gets event_url
     *
     * @return string|null
     */
    public function getEventUrl()
    {
        return $this->container['event_url'];
    }

    /**
     * Sets event_url
     *
     * @param string|null $event_url A URL in the external event application where the marketing event can be managed.
     *
     * @return self
     */
    public function setEventUrl($event_url)
    {
        if (is_null($event_url)) {
            throw new \InvalidArgumentException('non-nullable event_url cannot be null');
        }
        $this->container['event_url'] = $event_url;

        return $this;
    }

    /**
     * Gets event_description
     *
     * @return string|null
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     *
     * @param string|null $event_description The description of the marketing event.
     *
     * @return self
     */
    public function setEventDescription($event_description)
    {
        if (is_null($event_description)) {
            throw new \InvalidArgumentException('non-nullable event_description cannot be null');
        }
        $this->container['event_description'] = $event_description;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string|null
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string|null $event_name The name of the marketing event.
     *
     * @return self
     */
    public function setEventName($event_name)
    {
        if (is_null($event_name)) {
            throw new \InvalidArgumentException('non-nullable event_name cannot be null');
        }
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type Describes what type of event this is.  For example: `WEBINAR`, `CONFERENCE`, `WORKSHOP`
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        if (is_null($event_type)) {
            throw new \InvalidArgumentException('non-nullable event_type cannot be null');
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime|null
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime|null $end_date_time The end date and time of the marketing event.
     *
     * @return self
     */
    public function setEndDateTime($end_date_time)
    {
        if (is_null($end_date_time)) {
            throw new \InvalidArgumentException('non-nullable end_date_time cannot be null');
        }
        $this->container['end_date_time'] = $end_date_time;

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



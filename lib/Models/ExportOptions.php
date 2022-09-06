<?php
/**
 * ExportOptions
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * ExportOptions Class Doc Comment
 *
 * @category Class
 * @description Options for exporting user data
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExportOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'output_format' => 'string',
        'exclude_previously_exported' => 'bool',
        'created_earliest_time' => '\DateTime',
        'created_oldest_time' => '\DateTime',
        'filter' => 'string',
        'list_separator_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'output_format' => null,
        'exclude_previously_exported' => null,
        'created_earliest_time' => 'date-time',
        'created_oldest_time' => 'date-time',
        'filter' => null,
        'list_separator_token' => null
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
        'output_format' => 'outputFormat',
        'exclude_previously_exported' => 'excludePreviouslyExported',
        'created_earliest_time' => 'createdEarliestTime',
        'created_oldest_time' => 'createdOldestTime',
        'filter' => 'filter',
        'list_separator_token' => 'listSeparatorToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'output_format' => 'setOutputFormat',
        'exclude_previously_exported' => 'setExcludePreviouslyExported',
        'created_earliest_time' => 'setCreatedEarliestTime',
        'created_oldest_time' => 'setCreatedOldestTime',
        'filter' => 'setFilter',
        'list_separator_token' => 'setListSeparatorToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'output_format' => 'getOutputFormat',
        'exclude_previously_exported' => 'getExcludePreviouslyExported',
        'created_earliest_time' => 'getCreatedEarliestTime',
        'created_oldest_time' => 'getCreatedOldestTime',
        'filter' => 'getFilter',
        'list_separator_token' => 'getListSeparatorToken'
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

    const OUTPUT_FORMAT__DEFAULT = 'CSV_DEFAULT';
    const OUTPUT_FORMAT_EXCEL = 'CSV_EXCEL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutputFormatAllowableValues()
    {
        return [
            self::OUTPUT_FORMAT__DEFAULT,
            self::OUTPUT_FORMAT_EXCEL,
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
        $this->container['output_format'] = $data['output_format'] ?? null;
        $this->container['exclude_previously_exported'] = $data['exclude_previously_exported'] ?? null;
        $this->container['created_earliest_time'] = $data['created_earliest_time'] ?? null;
        $this->container['created_oldest_time'] = $data['created_oldest_time'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['list_separator_token'] = $data['list_separator_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['output_format'] === null) {
            $invalidProperties[] = "'output_format' can't be null";
        }
        $allowedValues = $this->getOutputFormatAllowableValues();
        if (!is_null($this->container['output_format']) && !in_array($this->container['output_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'output_format', must be one of '%s'",
                $this->container['output_format'],
                implode("', '", $allowedValues)
            );
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
     * Gets output_format
     *
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->container['output_format'];
    }

    /**
     * Sets output_format
     *
     * @param string $output_format output_format
     *
     * @return self
     */
    public function setOutputFormat($output_format)
    {
        $allowedValues = $this->getOutputFormatAllowableValues();
        if (!in_array($output_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'output_format', must be one of '%s'",
                    $output_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['output_format'] = $output_format;

        return $this;
    }

    /**
     * Gets exclude_previously_exported
     *
     * @return bool|null
     */
    public function getExcludePreviouslyExported()
    {
        return $this->container['exclude_previously_exported'];
    }

    /**
     * Sets exclude_previously_exported
     *
     * @param bool|null $exclude_previously_exported exclude_previously_exported
     *
     * @return self
     */
    public function setExcludePreviouslyExported($exclude_previously_exported)
    {
        $this->container['exclude_previously_exported'] = $exclude_previously_exported;

        return $this;
    }

    /**
     * Gets created_earliest_time
     *
     * @return \DateTime|null
     */
    public function getCreatedEarliestTime()
    {
        return $this->container['created_earliest_time'];
    }

    /**
     * Sets created_earliest_time
     *
     * @param \DateTime|null $created_earliest_time created_earliest_time
     *
     * @return self
     */
    public function setCreatedEarliestTime($created_earliest_time)
    {
        $this->container['created_earliest_time'] = $created_earliest_time;

        return $this;
    }

    /**
     * Gets created_oldest_time
     *
     * @return \DateTime|null
     */
    public function getCreatedOldestTime()
    {
        return $this->container['created_oldest_time'];
    }

    /**
     * Sets created_oldest_time
     *
     * @param \DateTime|null $created_oldest_time created_oldest_time
     *
     * @return self
     */
    public function setCreatedOldestTime($created_oldest_time)
    {
        $this->container['created_oldest_time'] = $created_oldest_time;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return string|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param string|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets list_separator_token
     *
     * @return string|null
     */
    public function getListSeparatorToken()
    {
        return $this->container['list_separator_token'];
    }

    /**
     * Sets list_separator_token
     *
     * @param string|null $list_separator_token list_separator_token
     *
     * @return self
     */
    public function setListSeparatorToken($list_separator_token)
    {
        $this->container['list_separator_token'] = $list_separator_token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param mixed $offset Offset
     *
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param mixed $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
     * @param mixed $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
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



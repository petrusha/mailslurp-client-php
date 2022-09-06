<?php
/**
 * TestNewInboxRulesetOptions
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
 * TestNewInboxRulesetOptions Class Doc Comment
 *
 * @category Class
 * @description Test inbox ruleset options
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TestNewInboxRulesetOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TestNewInboxRulesetOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inbox_ruleset_test_options' => '\MailSlurp\Models\InboxRulesetTestOptions',
        'create_inbox_ruleset_options' => '\MailSlurp\Models\CreateInboxRulesetOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inbox_ruleset_test_options' => null,
        'create_inbox_ruleset_options' => null
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
        'inbox_ruleset_test_options' => 'inboxRulesetTestOptions',
        'create_inbox_ruleset_options' => 'createInboxRulesetOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inbox_ruleset_test_options' => 'setInboxRulesetTestOptions',
        'create_inbox_ruleset_options' => 'setCreateInboxRulesetOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inbox_ruleset_test_options' => 'getInboxRulesetTestOptions',
        'create_inbox_ruleset_options' => 'getCreateInboxRulesetOptions'
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
        $this->container['inbox_ruleset_test_options'] = $data['inbox_ruleset_test_options'] ?? null;
        $this->container['create_inbox_ruleset_options'] = $data['create_inbox_ruleset_options'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inbox_ruleset_test_options'] === null) {
            $invalidProperties[] = "'inbox_ruleset_test_options' can't be null";
        }
        if ($this->container['create_inbox_ruleset_options'] === null) {
            $invalidProperties[] = "'create_inbox_ruleset_options' can't be null";
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
     * Gets inbox_ruleset_test_options
     *
     * @return \MailSlurp\Models\InboxRulesetTestOptions
     */
    public function getInboxRulesetTestOptions()
    {
        return $this->container['inbox_ruleset_test_options'];
    }

    /**
     * Sets inbox_ruleset_test_options
     *
     * @param \MailSlurp\Models\InboxRulesetTestOptions $inbox_ruleset_test_options inbox_ruleset_test_options
     *
     * @return self
     */
    public function setInboxRulesetTestOptions($inbox_ruleset_test_options)
    {
        $this->container['inbox_ruleset_test_options'] = $inbox_ruleset_test_options;

        return $this;
    }

    /**
     * Gets create_inbox_ruleset_options
     *
     * @return \MailSlurp\Models\CreateInboxRulesetOptions
     */
    public function getCreateInboxRulesetOptions()
    {
        return $this->container['create_inbox_ruleset_options'];
    }

    /**
     * Sets create_inbox_ruleset_options
     *
     * @param \MailSlurp\Models\CreateInboxRulesetOptions $create_inbox_ruleset_options create_inbox_ruleset_options
     *
     * @return self
     */
    public function setCreateInboxRulesetOptions($create_inbox_ruleset_options)
    {
        $this->container['create_inbox_ruleset_options'] = $create_inbox_ruleset_options;

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
    public function jsonSerialize(): mixed
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



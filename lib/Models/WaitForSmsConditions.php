<?php
/**
 * WaitForSmsConditions
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
 * WaitForSmsConditions Class Doc Comment
 *
 * @category Class
 * @description Conditions to apply to emails that you are waiting for
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WaitForSmsConditions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaitForSmsConditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_number_id' => 'string',
        'limit' => 'int',
        'count' => 'int',
        'delay_timeout' => 'int',
        'timeout' => 'int',
        'unread_only' => 'bool',
        'count_type' => 'string',
        'matches' => '\MailSlurp\Models\SmsMatchOption[]',
        'sort_direction' => 'string',
        'since' => '\DateTime',
        'before' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone_number_id' => 'uuid',
        'limit' => 'int32',
        'count' => 'int64',
        'delay_timeout' => 'int64',
        'timeout' => 'int64',
        'unread_only' => null,
        'count_type' => null,
        'matches' => null,
        'sort_direction' => null,
        'since' => 'date-time',
        'before' => 'date-time'
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
        'phone_number_id' => 'phoneNumberId',
        'limit' => 'limit',
        'count' => 'count',
        'delay_timeout' => 'delayTimeout',
        'timeout' => 'timeout',
        'unread_only' => 'unreadOnly',
        'count_type' => 'countType',
        'matches' => 'matches',
        'sort_direction' => 'sortDirection',
        'since' => 'since',
        'before' => 'before'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_number_id' => 'setPhoneNumberId',
        'limit' => 'setLimit',
        'count' => 'setCount',
        'delay_timeout' => 'setDelayTimeout',
        'timeout' => 'setTimeout',
        'unread_only' => 'setUnreadOnly',
        'count_type' => 'setCountType',
        'matches' => 'setMatches',
        'sort_direction' => 'setSortDirection',
        'since' => 'setSince',
        'before' => 'setBefore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_number_id' => 'getPhoneNumberId',
        'limit' => 'getLimit',
        'count' => 'getCount',
        'delay_timeout' => 'getDelayTimeout',
        'timeout' => 'getTimeout',
        'unread_only' => 'getUnreadOnly',
        'count_type' => 'getCountType',
        'matches' => 'getMatches',
        'sort_direction' => 'getSortDirection',
        'since' => 'getSince',
        'before' => 'getBefore'
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

    const COUNT_TYPE_EXACTLY = 'EXACTLY';
    const COUNT_TYPE_ATLEAST = 'ATLEAST';
    const SORT_DIRECTION_ASC = 'ASC';
    const SORT_DIRECTION_DESC = 'DESC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountTypeAllowableValues()
    {
        return [
            self::COUNT_TYPE_EXACTLY,
            self::COUNT_TYPE_ATLEAST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortDirectionAllowableValues()
    {
        return [
            self::SORT_DIRECTION_ASC,
            self::SORT_DIRECTION_DESC,
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
        $this->container['phone_number_id'] = $data['phone_number_id'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
        $this->container['delay_timeout'] = $data['delay_timeout'] ?? null;
        $this->container['timeout'] = $data['timeout'] ?? null;
        $this->container['unread_only'] = $data['unread_only'] ?? null;
        $this->container['count_type'] = $data['count_type'] ?? null;
        $this->container['matches'] = $data['matches'] ?? null;
        $this->container['sort_direction'] = $data['sort_direction'] ?? null;
        $this->container['since'] = $data['since'] ?? null;
        $this->container['before'] = $data['before'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['phone_number_id'] === null) {
            $invalidProperties[] = "'phone_number_id' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        $allowedValues = $this->getCountTypeAllowableValues();
        if (!is_null($this->container['count_type']) && !in_array($this->container['count_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'count_type', must be one of '%s'",
                $this->container['count_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($this->container['sort_direction']) && !in_array($this->container['sort_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sort_direction', must be one of '%s'",
                $this->container['sort_direction'],
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
     * Gets phone_number_id
     *
     * @return string
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string $phone_number_id ID of phone number to search within and apply conditions to. Essentially filtering the SMS found to give a count.
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Limit results
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Number of results that should match conditions. Either exactly or at least this amount based on the `countType`. If count condition is not met and the timeout has not been reached the `waitFor` method will retry the operation.
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets delay_timeout
     *
     * @return int|null
     */
    public function getDelayTimeout()
    {
        return $this->container['delay_timeout'];
    }

    /**
     * Sets delay_timeout
     *
     * @param int|null $delay_timeout Max time in milliseconds to wait between retries if a `timeout` is specified.
     *
     * @return self
     */
    public function setDelayTimeout($delay_timeout)
    {
        $this->container['delay_timeout'] = $delay_timeout;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int $timeout Max time in milliseconds to retry the `waitFor` operation until conditions are met.
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets unread_only
     *
     * @return bool|null
     */
    public function getUnreadOnly()
    {
        return $this->container['unread_only'];
    }

    /**
     * Sets unread_only
     *
     * @param bool|null $unread_only Apply conditions only to **unread** SMS. All SMS messages begin with `read=false`. An SMS is marked `read=true` when an `SMS` has been returned to the user at least once. For example you have called `getSms` or `waitForSms` etc., or you have viewed the SMS in the dashboard.
     *
     * @return self
     */
    public function setUnreadOnly($unread_only)
    {
        $this->container['unread_only'] = $unread_only;

        return $this;
    }

    /**
     * Gets count_type
     *
     * @return string|null
     */
    public function getCountType()
    {
        return $this->container['count_type'];
    }

    /**
     * Sets count_type
     *
     * @param string|null $count_type How result size should be compared with the expected size. Exactly or at-least matching result?
     *
     * @return self
     */
    public function setCountType($count_type)
    {
        $allowedValues = $this->getCountTypeAllowableValues();
        if (!is_null($count_type) && !in_array($count_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'count_type', must be one of '%s'",
                    $count_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['count_type'] = $count_type;

        return $this;
    }

    /**
     * Gets matches
     *
     * @return \MailSlurp\Models\SmsMatchOption[]|null
     */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
     * Sets matches
     *
     * @param \MailSlurp\Models\SmsMatchOption[]|null $matches Conditions that should be matched for an SMS to qualify for results. Each condition will be applied in order to each SMS within a phone number to filter a result list of matching SMSs you are waiting for.
     *
     * @return self
     */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;

        return $this;
    }

    /**
     * Gets sort_direction
     *
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->container['sort_direction'];
    }

    /**
     * Sets sort_direction
     *
     * @param string|null $sort_direction Direction to sort matching SMSs by created time
     *
     * @return self
     */
    public function setSortDirection($sort_direction)
    {
        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($sort_direction) && !in_array($sort_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sort_direction', must be one of '%s'",
                    $sort_direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets since
     *
     * @return \DateTime|null
     */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
     * Sets since
     *
     * @param \DateTime|null $since ISO Date Time earliest time of SMS to consider. Filter for matching SMSs that were received after this date
     *
     * @return self
     */
    public function setSince($since)
    {
        $this->container['since'] = $since;

        return $this;
    }

    /**
     * Gets before
     *
     * @return \DateTime|null
     */
    public function getBefore()
    {
        return $this->container['before'];
    }

    /**
     * Sets before
     *
     * @param \DateTime|null $before ISO Date Time latest time of SMS to consider. Filter for matching SMSs that were received before this date
     *
     * @return self
     */
    public function setBefore($before)
    {
        $this->container['before'] = $before;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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



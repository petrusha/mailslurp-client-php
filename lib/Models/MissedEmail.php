<?php
/**
 * MissedEmail
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
 * MissedEmail Class Doc Comment
 *
 * @category Class
 * @description Missed email
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MissedEmail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MissedEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'subject' => 'string',
        'body_excerpt' => 'string',
        'attachment_count' => 'int',
        'from' => 'string',
        'raw_url' => 'string',
        'raw_key' => 'string',
        'raw_bucket' => 'string',
        'can_restore' => 'bool',
        'to' => 'string[]',
        'cc' => 'string[]',
        'bcc' => 'string[]',
        'inbox_ids' => 'string[]',
        'created_at' => '\DateTime',
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
        'id' => 'uuid',
        'user_id' => 'uuid',
        'subject' => null,
        'body_excerpt' => null,
        'attachment_count' => 'int32',
        'from' => null,
        'raw_url' => null,
        'raw_key' => null,
        'raw_bucket' => null,
        'can_restore' => null,
        'to' => null,
        'cc' => null,
        'bcc' => null,
        'inbox_ids' => 'uuid',
        'created_at' => 'date-time',
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
        'id' => 'id',
        'user_id' => 'userId',
        'subject' => 'subject',
        'body_excerpt' => 'bodyExcerpt',
        'attachment_count' => 'attachmentCount',
        'from' => 'from',
        'raw_url' => 'rawUrl',
        'raw_key' => 'rawKey',
        'raw_bucket' => 'rawBucket',
        'can_restore' => 'canRestore',
        'to' => 'to',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'inbox_ids' => 'inboxIds',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'subject' => 'setSubject',
        'body_excerpt' => 'setBodyExcerpt',
        'attachment_count' => 'setAttachmentCount',
        'from' => 'setFrom',
        'raw_url' => 'setRawUrl',
        'raw_key' => 'setRawKey',
        'raw_bucket' => 'setRawBucket',
        'can_restore' => 'setCanRestore',
        'to' => 'setTo',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'inbox_ids' => 'setInboxIds',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'subject' => 'getSubject',
        'body_excerpt' => 'getBodyExcerpt',
        'attachment_count' => 'getAttachmentCount',
        'from' => 'getFrom',
        'raw_url' => 'getRawUrl',
        'raw_key' => 'getRawKey',
        'raw_bucket' => 'getRawBucket',
        'can_restore' => 'getCanRestore',
        'to' => 'getTo',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'inbox_ids' => 'getInboxIds',
        'created_at' => 'getCreatedAt',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['body_excerpt'] = $data['body_excerpt'] ?? null;
        $this->container['attachment_count'] = $data['attachment_count'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['raw_url'] = $data['raw_url'] ?? null;
        $this->container['raw_key'] = $data['raw_key'] ?? null;
        $this->container['raw_bucket'] = $data['raw_bucket'] ?? null;
        $this->container['can_restore'] = $data['can_restore'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['cc'] = $data['cc'] ?? null;
        $this->container['bcc'] = $data['bcc'] ?? null;
        $this->container['inbox_ids'] = $data['inbox_ids'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
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

        if ($this->container['attachment_count'] === null) {
            $invalidProperties[] = "'attachment_count' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['cc'] === null) {
            $invalidProperties[] = "'cc' can't be null";
        }
        if ($this->container['bcc'] === null) {
            $invalidProperties[] = "'bcc' can't be null";
        }
        if ($this->container['inbox_ids'] === null) {
            $invalidProperties[] = "'inbox_ids' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body_excerpt
     *
     * @return string|null
     */
    public function getBodyExcerpt()
    {
        return $this->container['body_excerpt'];
    }

    /**
     * Sets body_excerpt
     *
     * @param string|null $body_excerpt body_excerpt
     *
     * @return self
     */
    public function setBodyExcerpt($body_excerpt)
    {
        $this->container['body_excerpt'] = $body_excerpt;

        return $this;
    }

    /**
     * Gets attachment_count
     *
     * @return int
     */
    public function getAttachmentCount()
    {
        return $this->container['attachment_count'];
    }

    /**
     * Sets attachment_count
     *
     * @param int $attachment_count attachment_count
     *
     * @return self
     */
    public function setAttachmentCount($attachment_count)
    {
        $this->container['attachment_count'] = $attachment_count;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets raw_url
     *
     * @return string|null
     */
    public function getRawUrl()
    {
        return $this->container['raw_url'];
    }

    /**
     * Sets raw_url
     *
     * @param string|null $raw_url raw_url
     *
     * @return self
     */
    public function setRawUrl($raw_url)
    {
        $this->container['raw_url'] = $raw_url;

        return $this;
    }

    /**
     * Gets raw_key
     *
     * @return string|null
     */
    public function getRawKey()
    {
        return $this->container['raw_key'];
    }

    /**
     * Sets raw_key
     *
     * @param string|null $raw_key raw_key
     *
     * @return self
     */
    public function setRawKey($raw_key)
    {
        $this->container['raw_key'] = $raw_key;

        return $this;
    }

    /**
     * Gets raw_bucket
     *
     * @return string|null
     */
    public function getRawBucket()
    {
        return $this->container['raw_bucket'];
    }

    /**
     * Sets raw_bucket
     *
     * @param string|null $raw_bucket raw_bucket
     *
     * @return self
     */
    public function setRawBucket($raw_bucket)
    {
        $this->container['raw_bucket'] = $raw_bucket;

        return $this;
    }

    /**
     * Gets can_restore
     *
     * @return bool|null
     */
    public function getCanRestore()
    {
        return $this->container['can_restore'];
    }

    /**
     * Sets can_restore
     *
     * @param bool|null $can_restore can_restore
     *
     * @return self
     */
    public function setCanRestore($can_restore)
    {
        $this->container['can_restore'] = $can_restore;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string[] $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[] $cc cc
     *
     * @return self
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[] $bcc bcc
     *
     * @return self
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets inbox_ids
     *
     * @return string[]
     */
    public function getInboxIds()
    {
        return $this->container['inbox_ids'];
    }

    /**
     * Sets inbox_ids
     *
     * @param string[] $inbox_ids inbox_ids
     *
     * @return self
     */
    public function setInboxIds($inbox_ids)
    {
        $this->container['inbox_ids'] = $inbox_ids;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
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



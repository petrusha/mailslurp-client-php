<?php
/**
 * SentEmailProjection
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
 * SentEmailProjection Class Doc Comment
 *
 * @category Class
 * @description Collection of items
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SentEmailProjection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SentEmailProjection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'from' => 'string',
        'user_id' => 'string',
        'subject' => 'string',
        'body_md5_hash' => 'string',
        'bcc' => 'string[]',
        'cc' => 'string[]',
        'virtual_send' => 'bool',
        'inbox_id' => 'string',
        'attachments' => 'string[]',
        'to' => 'string[]',
        'created_at' => '\DateTime'
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
        'from' => null,
        'user_id' => 'uuid',
        'subject' => null,
        'body_md5_hash' => null,
        'bcc' => null,
        'cc' => null,
        'virtual_send' => null,
        'inbox_id' => 'uuid',
        'attachments' => null,
        'to' => null,
        'created_at' => 'date-time'
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
        'from' => 'from',
        'user_id' => 'userId',
        'subject' => 'subject',
        'body_md5_hash' => 'bodyMD5Hash',
        'bcc' => 'bcc',
        'cc' => 'cc',
        'virtual_send' => 'virtualSend',
        'inbox_id' => 'inboxId',
        'attachments' => 'attachments',
        'to' => 'to',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'from' => 'setFrom',
        'user_id' => 'setUserId',
        'subject' => 'setSubject',
        'body_md5_hash' => 'setBodyMd5Hash',
        'bcc' => 'setBcc',
        'cc' => 'setCc',
        'virtual_send' => 'setVirtualSend',
        'inbox_id' => 'setInboxId',
        'attachments' => 'setAttachments',
        'to' => 'setTo',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'from' => 'getFrom',
        'user_id' => 'getUserId',
        'subject' => 'getSubject',
        'body_md5_hash' => 'getBodyMd5Hash',
        'bcc' => 'getBcc',
        'cc' => 'getCc',
        'virtual_send' => 'getVirtualSend',
        'inbox_id' => 'getInboxId',
        'attachments' => 'getAttachments',
        'to' => 'getTo',
        'created_at' => 'getCreatedAt'
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['body_md5_hash'] = $data['body_md5_hash'] ?? null;
        $this->container['bcc'] = $data['bcc'] ?? null;
        $this->container['cc'] = $data['cc'] ?? null;
        $this->container['virtual_send'] = $data['virtual_send'] ?? null;
        $this->container['inbox_id'] = $data['inbox_id'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['bcc'] === null) {
            $invalidProperties[] = "'bcc' can't be null";
        }
        if ($this->container['cc'] === null) {
            $invalidProperties[] = "'cc' can't be null";
        }
        if ($this->container['virtual_send'] === null) {
            $invalidProperties[] = "'virtual_send' can't be null";
        }
        if ($this->container['inbox_id'] === null) {
            $invalidProperties[] = "'inbox_id' can't be null";
        }
        if ($this->container['attachments'] === null) {
            $invalidProperties[] = "'attachments' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
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
     * Gets body_md5_hash
     *
     * @return string|null
     */
    public function getBodyMd5Hash()
    {
        return $this->container['body_md5_hash'];
    }

    /**
     * Sets body_md5_hash
     *
     * @param string|null $body_md5_hash body_md5_hash
     *
     * @return self
     */
    public function setBodyMd5Hash($body_md5_hash)
    {
        $this->container['body_md5_hash'] = $body_md5_hash;

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
     * Gets virtual_send
     *
     * @return bool
     */
    public function getVirtualSend()
    {
        return $this->container['virtual_send'];
    }

    /**
     * Sets virtual_send
     *
     * @param bool $virtual_send virtual_send
     *
     * @return self
     */
    public function setVirtualSend($virtual_send)
    {
        $this->container['virtual_send'] = $virtual_send;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string $inbox_id inbox_id
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[] $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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



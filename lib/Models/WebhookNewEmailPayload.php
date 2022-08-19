<?php
/**
 * WebhookNewEmailPayload
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
 * WebhookNewEmailPayload Class Doc Comment
 *
 * @category Class
 * @description NEW_EMAIL webhook payload. Sent to your webhook url endpoint via HTTP POST when an email is received by the inbox that your webhook is attached to. Use the email ID to fetch the full email body or attachments.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookNewEmailPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookNewEmailPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message_id' => 'string',
        'webhook_id' => 'string',
        'event_name' => 'string',
        'webhook_name' => 'string',
        'inbox_id' => 'string',
        'domain_id' => 'string',
        'email_id' => 'string',
        'created_at' => '\DateTime',
        'to' => 'string[]',
        'from' => 'string',
        'cc' => 'string[]',
        'bcc' => 'string[]',
        'subject' => 'string',
        'attachment_meta_datas' => '\MailSlurp\Models\AttachmentMetaData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message_id' => null,
        'webhook_id' => 'uuid',
        'event_name' => null,
        'webhook_name' => null,
        'inbox_id' => 'uuid',
        'domain_id' => 'uuid',
        'email_id' => 'uuid',
        'created_at' => 'date-time',
        'to' => null,
        'from' => null,
        'cc' => null,
        'bcc' => null,
        'subject' => null,
        'attachment_meta_datas' => null
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
        'message_id' => 'messageId',
        'webhook_id' => 'webhookId',
        'event_name' => 'eventName',
        'webhook_name' => 'webhookName',
        'inbox_id' => 'inboxId',
        'domain_id' => 'domainId',
        'email_id' => 'emailId',
        'created_at' => 'createdAt',
        'to' => 'to',
        'from' => 'from',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'subject' => 'subject',
        'attachment_meta_datas' => 'attachmentMetaDatas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
        'webhook_id' => 'setWebhookId',
        'event_name' => 'setEventName',
        'webhook_name' => 'setWebhookName',
        'inbox_id' => 'setInboxId',
        'domain_id' => 'setDomainId',
        'email_id' => 'setEmailId',
        'created_at' => 'setCreatedAt',
        'to' => 'setTo',
        'from' => 'setFrom',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'subject' => 'setSubject',
        'attachment_meta_datas' => 'setAttachmentMetaDatas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
        'webhook_id' => 'getWebhookId',
        'event_name' => 'getEventName',
        'webhook_name' => 'getWebhookName',
        'inbox_id' => 'getInboxId',
        'domain_id' => 'getDomainId',
        'email_id' => 'getEmailId',
        'created_at' => 'getCreatedAt',
        'to' => 'getTo',
        'from' => 'getFrom',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'subject' => 'getSubject',
        'attachment_meta_datas' => 'getAttachmentMetaDatas'
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

    const EVENT_NAME_EMAIL_RECEIVED = 'EMAIL_RECEIVED';
    const EVENT_NAME_NEW_EMAIL = 'NEW_EMAIL';
    const EVENT_NAME_NEW_CONTACT = 'NEW_CONTACT';
    const EVENT_NAME_NEW_ATTACHMENT = 'NEW_ATTACHMENT';
    const EVENT_NAME_EMAIL_OPENED = 'EMAIL_OPENED';
    const EVENT_NAME_EMAIL_READ = 'EMAIL_READ';
    const EVENT_NAME_DELIVERY_STATUS = 'DELIVERY_STATUS';
    const EVENT_NAME_BOUNCE = 'BOUNCE';
    const EVENT_NAME_BOUNCE_RECIPIENT = 'BOUNCE_RECIPIENT';
    const EVENT_NAME_NEW_SMS = 'NEW_SMS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_EMAIL_RECEIVED,
            self::EVENT_NAME_NEW_EMAIL,
            self::EVENT_NAME_NEW_CONTACT,
            self::EVENT_NAME_NEW_ATTACHMENT,
            self::EVENT_NAME_EMAIL_OPENED,
            self::EVENT_NAME_EMAIL_READ,
            self::EVENT_NAME_DELIVERY_STATUS,
            self::EVENT_NAME_BOUNCE,
            self::EVENT_NAME_BOUNCE_RECIPIENT,
            self::EVENT_NAME_NEW_SMS,
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
        $this->container['message_id'] = $data['message_id'] ?? null;
        $this->container['webhook_id'] = $data['webhook_id'] ?? null;
        $this->container['event_name'] = $data['event_name'] ?? null;
        $this->container['webhook_name'] = $data['webhook_name'] ?? null;
        $this->container['inbox_id'] = $data['inbox_id'] ?? null;
        $this->container['domain_id'] = $data['domain_id'] ?? null;
        $this->container['email_id'] = $data['email_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['cc'] = $data['cc'] ?? null;
        $this->container['bcc'] = $data['bcc'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['attachment_meta_datas'] = $data['attachment_meta_datas'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['webhook_id'] === null) {
            $invalidProperties[] = "'webhook_id' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($this->container['event_name']) && !in_array($this->container['event_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_name', must be one of '%s'",
                $this->container['event_name'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['inbox_id'] === null) {
            $invalidProperties[] = "'inbox_id' can't be null";
        }
        if ($this->container['email_id'] === null) {
            $invalidProperties[] = "'email_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['cc'] === null) {
            $invalidProperties[] = "'cc' can't be null";
        }
        if ($this->container['bcc'] === null) {
            $invalidProperties[] = "'bcc' can't be null";
        }
        if ($this->container['attachment_meta_datas'] === null) {
            $invalidProperties[] = "'attachment_meta_datas' can't be null";
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
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Idempotent message ID. Store this ID locally or in a database to prevent message duplication.
     *
     * @return self
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id ID of webhook entity being triggered
     *
     * @return self
     */
    public function setWebhookId($webhook_id)
    {
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name Name of the event type webhook is being triggered for.
     *
     * @return self
     */
    public function setEventName($event_name)
    {
        $allowedValues = $this->getEventNameAllowableValues();
        if (!in_array($event_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_name', must be one of '%s'",
                    $event_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets webhook_name
     *
     * @return string|null
     */
    public function getWebhookName()
    {
        return $this->container['webhook_name'];
    }

    /**
     * Sets webhook_name
     *
     * @param string|null $webhook_name Name of the webhook being triggered
     *
     * @return self
     */
    public function setWebhookName($webhook_name)
    {
        $this->container['webhook_name'] = $webhook_name;

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
     * @param string $inbox_id Id of the inbox
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return string|null
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string|null $domain_id Id of the domain that received an email
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {
        $this->container['domain_id'] = $domain_id;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param string $email_id ID of the email that was received. Use this ID for fetching the email with the `EmailController`.
     *
     * @return self
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

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
     * @param \DateTime $created_at Date time of event creation
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string[] $to List of `To` recipient email addresses that the email was addressed to. See recipients object for names.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Who the email was sent from. An email address - see fromName for the sender name.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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
     * @param string[] $cc List of `CC` recipients email addresses that the email was addressed to. See recipients object for names.
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
     * @param string[] $bcc List of `BCC` recipients email addresses that the email was addressed to. See recipients object for names.
     *
     * @return self
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

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
     * @param string|null $subject The subject line of the email message as specified by SMTP subject header
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets attachment_meta_datas
     *
     * @return \MailSlurp\Models\AttachmentMetaData[]
     */
    public function getAttachmentMetaDatas()
    {
        return $this->container['attachment_meta_datas'];
    }

    /**
     * Sets attachment_meta_datas
     *
     * @param \MailSlurp\Models\AttachmentMetaData[] $attachment_meta_datas List of attachment meta data objects if attachments present
     *
     * @return self
     */
    public function setAttachmentMetaDatas($attachment_meta_datas)
    {
        $this->container['attachment_meta_datas'] = $attachment_meta_datas;

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



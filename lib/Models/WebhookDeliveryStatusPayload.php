<?php
/**
 * WebhookDeliveryStatusPayload
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
 * WebhookDeliveryStatusPayload Class Doc Comment
 *
 * @category Class
 * @description DELIVERY_STATUS webhook payload. Sent to your webhook url endpoint via HTTP POST when an email delivery status is created. This could be a successful delivery or a delivery failure.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookDeliveryStatusPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookDeliveryStatusPayload';

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
        'id' => 'string',
        'user_id' => 'string',
        'sent_id' => 'string',
        'remote_mta_ip' => 'string',
        'inbox_id' => 'string',
        'reporting_mta' => 'string',
        'recipients' => 'string[]',
        'smtp_response' => 'string',
        'smtp_status_code' => 'int',
        'processing_time_millis' => 'int',
        'received' => '\DateTime',
        'subject' => 'string'
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
        'id' => 'uuid',
        'user_id' => 'uuid',
        'sent_id' => 'uuid',
        'remote_mta_ip' => null,
        'inbox_id' => 'uuid',
        'reporting_mta' => null,
        'recipients' => null,
        'smtp_response' => null,
        'smtp_status_code' => 'int32',
        'processing_time_millis' => 'int64',
        'received' => 'date-time',
        'subject' => null
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
        'id' => 'id',
        'user_id' => 'userId',
        'sent_id' => 'sentId',
        'remote_mta_ip' => 'remoteMtaIp',
        'inbox_id' => 'inboxId',
        'reporting_mta' => 'reportingMta',
        'recipients' => 'recipients',
        'smtp_response' => 'smtpResponse',
        'smtp_status_code' => 'smtpStatusCode',
        'processing_time_millis' => 'processingTimeMillis',
        'received' => 'received',
        'subject' => 'subject'
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
        'id' => 'setId',
        'user_id' => 'setUserId',
        'sent_id' => 'setSentId',
        'remote_mta_ip' => 'setRemoteMtaIp',
        'inbox_id' => 'setInboxId',
        'reporting_mta' => 'setReportingMta',
        'recipients' => 'setRecipients',
        'smtp_response' => 'setSmtpResponse',
        'smtp_status_code' => 'setSmtpStatusCode',
        'processing_time_millis' => 'setProcessingTimeMillis',
        'received' => 'setReceived',
        'subject' => 'setSubject'
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
        'id' => 'getId',
        'user_id' => 'getUserId',
        'sent_id' => 'getSentId',
        'remote_mta_ip' => 'getRemoteMtaIp',
        'inbox_id' => 'getInboxId',
        'reporting_mta' => 'getReportingMta',
        'recipients' => 'getRecipients',
        'smtp_response' => 'getSmtpResponse',
        'smtp_status_code' => 'getSmtpStatusCode',
        'processing_time_millis' => 'getProcessingTimeMillis',
        'received' => 'getReceived',
        'subject' => 'getSubject'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['sent_id'] = $data['sent_id'] ?? null;
        $this->container['remote_mta_ip'] = $data['remote_mta_ip'] ?? null;
        $this->container['inbox_id'] = $data['inbox_id'] ?? null;
        $this->container['reporting_mta'] = $data['reporting_mta'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['smtp_response'] = $data['smtp_response'] ?? null;
        $this->container['smtp_status_code'] = $data['smtp_status_code'] ?? null;
        $this->container['processing_time_millis'] = $data['processing_time_millis'] ?? null;
        $this->container['received'] = $data['received'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
     * @param string $id ID of delivery status
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
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id User ID of event
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets sent_id
     *
     * @return string|null
     */
    public function getSentId()
    {
        return $this->container['sent_id'];
    }

    /**
     * Sets sent_id
     *
     * @param string|null $sent_id ID of sent email
     *
     * @return self
     */
    public function setSentId($sent_id)
    {
        $this->container['sent_id'] = $sent_id;

        return $this;
    }

    /**
     * Gets remote_mta_ip
     *
     * @return string|null
     */
    public function getRemoteMtaIp()
    {
        return $this->container['remote_mta_ip'];
    }

    /**
     * Sets remote_mta_ip
     *
     * @param string|null $remote_mta_ip IP address of the remote Mail Transfer Agent
     *
     * @return self
     */
    public function setRemoteMtaIp($remote_mta_ip)
    {
        $this->container['remote_mta_ip'] = $remote_mta_ip;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string|null
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string|null $inbox_id Id of the inbox
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets reporting_mta
     *
     * @return string|null
     */
    public function getReportingMta()
    {
        return $this->container['reporting_mta'];
    }

    /**
     * Sets reporting_mta
     *
     * @param string|null $reporting_mta Mail Transfer Agent reporting delivery status
     *
     * @return self
     */
    public function setReportingMta($reporting_mta)
    {
        $this->container['reporting_mta'] = $reporting_mta;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return string[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param string[]|null $recipients Recipients for delivery
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets smtp_response
     *
     * @return string|null
     */
    public function getSmtpResponse()
    {
        return $this->container['smtp_response'];
    }

    /**
     * Sets smtp_response
     *
     * @param string|null $smtp_response SMTP server response message
     *
     * @return self
     */
    public function setSmtpResponse($smtp_response)
    {
        $this->container['smtp_response'] = $smtp_response;

        return $this;
    }

    /**
     * Gets smtp_status_code
     *
     * @return int|null
     */
    public function getSmtpStatusCode()
    {
        return $this->container['smtp_status_code'];
    }

    /**
     * Sets smtp_status_code
     *
     * @param int|null $smtp_status_code SMTP server status
     *
     * @return self
     */
    public function setSmtpStatusCode($smtp_status_code)
    {
        $this->container['smtp_status_code'] = $smtp_status_code;

        return $this;
    }

    /**
     * Gets processing_time_millis
     *
     * @return int|null
     */
    public function getProcessingTimeMillis()
    {
        return $this->container['processing_time_millis'];
    }

    /**
     * Sets processing_time_millis
     *
     * @param int|null $processing_time_millis Time in milliseconds for delivery processing
     *
     * @return self
     */
    public function setProcessingTimeMillis($processing_time_millis)
    {
        $this->container['processing_time_millis'] = $processing_time_millis;

        return $this;
    }

    /**
     * Gets received
     *
     * @return \DateTime|null
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param \DateTime|null $received Time event was received
     *
     * @return self
     */
    public function setReceived($received)
    {
        $this->container['received'] = $received;

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
     * @param string|null $subject Email subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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



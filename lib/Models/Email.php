<?php
/**
 * Email
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
 * Email Class Doc Comment
 *
 * @category Class
 * @description Email entity (also known as EmailDto). When an SMTP email message is received by MailSlurp it is parsed. The body and attachments are written to disk and the fields such as to, from, subject etc are stored in a database. The &#x60;body&#x60; contains the email content. If you want the original SMTP message see the &#x60;getRawEmail&#x60; endpoints. The attachments can be fetched using the AttachmentController
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Email implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'inbox_id' => 'string',
        'domain_id' => 'string',
        'to' => 'string[]',
        'from' => 'string',
        'sender' => '\MailSlurp\Models\Sender',
        'recipients' => '\MailSlurp\Models\EmailRecipients',
        'reply_to' => 'string',
        'cc' => 'string[]',
        'bcc' => 'string[]',
        'headers' => 'array<string,string>',
        'attachments' => 'string[]',
        'subject' => 'string',
        'body' => 'string',
        'body_excerpt' => 'string',
        'body_md5_hash' => 'string',
        'is_html' => 'bool',
        'charset' => 'string',
        'analysis' => '\MailSlurp\Models\EmailAnalysis',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'read' => 'bool',
        'team_access' => 'bool',
        'html' => 'bool'
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
        'inbox_id' => 'uuid',
        'domain_id' => 'uuid',
        'to' => null,
        'from' => null,
        'sender' => null,
        'recipients' => null,
        'reply_to' => null,
        'cc' => null,
        'bcc' => null,
        'headers' => null,
        'attachments' => null,
        'subject' => null,
        'body' => null,
        'body_excerpt' => null,
        'body_md5_hash' => null,
        'is_html' => null,
        'charset' => null,
        'analysis' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'read' => null,
        'team_access' => null,
        'html' => null
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
        'inbox_id' => 'inboxId',
        'domain_id' => 'domainId',
        'to' => 'to',
        'from' => 'from',
        'sender' => 'sender',
        'recipients' => 'recipients',
        'reply_to' => 'replyTo',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'headers' => 'headers',
        'attachments' => 'attachments',
        'subject' => 'subject',
        'body' => 'body',
        'body_excerpt' => 'bodyExcerpt',
        'body_md5_hash' => 'bodyMD5Hash',
        'is_html' => 'isHTML',
        'charset' => 'charset',
        'analysis' => 'analysis',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'read' => 'read',
        'team_access' => 'teamAccess',
        'html' => 'html'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'inbox_id' => 'setInboxId',
        'domain_id' => 'setDomainId',
        'to' => 'setTo',
        'from' => 'setFrom',
        'sender' => 'setSender',
        'recipients' => 'setRecipients',
        'reply_to' => 'setReplyTo',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'headers' => 'setHeaders',
        'attachments' => 'setAttachments',
        'subject' => 'setSubject',
        'body' => 'setBody',
        'body_excerpt' => 'setBodyExcerpt',
        'body_md5_hash' => 'setBodyMd5Hash',
        'is_html' => 'setIsHtml',
        'charset' => 'setCharset',
        'analysis' => 'setAnalysis',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'read' => 'setRead',
        'team_access' => 'setTeamAccess',
        'html' => 'setHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'inbox_id' => 'getInboxId',
        'domain_id' => 'getDomainId',
        'to' => 'getTo',
        'from' => 'getFrom',
        'sender' => 'getSender',
        'recipients' => 'getRecipients',
        'reply_to' => 'getReplyTo',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'headers' => 'getHeaders',
        'attachments' => 'getAttachments',
        'subject' => 'getSubject',
        'body' => 'getBody',
        'body_excerpt' => 'getBodyExcerpt',
        'body_md5_hash' => 'getBodyMd5Hash',
        'is_html' => 'getIsHtml',
        'charset' => 'getCharset',
        'analysis' => 'getAnalysis',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'read' => 'getRead',
        'team_access' => 'getTeamAccess',
        'html' => 'getHtml'
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
        $this->container['inbox_id'] = $data['inbox_id'] ?? null;
        $this->container['domain_id'] = $data['domain_id'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['reply_to'] = $data['reply_to'] ?? null;
        $this->container['cc'] = $data['cc'] ?? null;
        $this->container['bcc'] = $data['bcc'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['body_excerpt'] = $data['body_excerpt'] ?? null;
        $this->container['body_md5_hash'] = $data['body_md5_hash'] ?? null;
        $this->container['is_html'] = $data['is_html'] ?? null;
        $this->container['charset'] = $data['charset'] ?? null;
        $this->container['analysis'] = $data['analysis'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['read'] = $data['read'] ?? null;
        $this->container['team_access'] = $data['team_access'] ?? null;
        $this->container['html'] = $data['html'] ?? null;
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
        if ($this->container['inbox_id'] === null) {
            $invalidProperties[] = "'inbox_id' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['read'] === null) {
            $invalidProperties[] = "'read' can't be null";
        }
        if ($this->container['team_access'] === null) {
            $invalidProperties[] = "'team_access' can't be null";
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
     * @param string $id ID of the email entity
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
     * @param string $user_id ID of user that email belongs to
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string $inbox_id ID of the inbox that received the email
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
     * @param string|null $domain_id ID of the domain that received the email
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {
        $this->container['domain_id'] = $domain_id;

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
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Who the email was sent from. An email address - see fromName for the sender name.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \MailSlurp\Models\Sender|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \MailSlurp\Models\Sender|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \MailSlurp\Models\EmailRecipients|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \MailSlurp\Models\EmailRecipients|null $recipients recipients
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to The `replyTo` field on the received email message
     *
     * @return self
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[]|null $cc List of `CC` recipients email addresses that the email was addressed to. See recipients object for names.
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
     * @return string[]|null
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[]|null $bcc List of `BCC` recipients email addresses that the email was addressed to. See recipients object for names.
     *
     * @return self
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return array<string,string>|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param array<string,string>|null $headers Collection of SMTP headers attached to email
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[]|null $attachments List of IDs of attachments found in the email. Use these IDs with the Inbox and Email Controllers to download attachments and attachment meta data such as filesize, name, extension.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body The body of the email message as text parsed from the SMTP message body (does not include attachments). Fetch the raw content to access the SMTP message and use the attachments property to access attachments. The body is stored separately to the email entity so the body is not returned in paginated results only in full single email or wait requests.
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

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
     * @param string|null $body_excerpt An excerpt of the body of the email message for quick preview .
     *
     * @return self
     */
    public function setBodyExcerpt($body_excerpt)
    {
        $this->container['body_excerpt'] = $body_excerpt;

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
     * @param string|null $body_md5_hash A hash signature of the email message using MD5. Useful for comparing emails without fetching full body.
     *
     * @return self
     */
    public function setBodyMd5Hash($body_md5_hash)
    {
        $this->container['body_md5_hash'] = $body_md5_hash;

        return $this;
    }

    /**
     * Gets is_html
     *
     * @return bool|null
     */
    public function getIsHtml()
    {
        return $this->container['is_html'];
    }

    /**
     * Sets is_html
     *
     * @param bool|null $is_html Is the email body content type HTML?
     *
     * @return self
     */
    public function setIsHtml($is_html)
    {
        $this->container['is_html'] = $is_html;

        return $this;
    }

    /**
     * Gets charset
     *
     * @return string|null
     */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
     * Sets charset
     *
     * @param string|null $charset Detected character set of the email body such as UTF-8
     *
     * @return self
     */
    public function setCharset($charset)
    {
        $this->container['charset'] = $charset;

        return $this;
    }

    /**
     * Gets analysis
     *
     * @return \MailSlurp\Models\EmailAnalysis|null
     */
    public function getAnalysis()
    {
        return $this->container['analysis'];
    }

    /**
     * Sets analysis
     *
     * @param \MailSlurp\Models\EmailAnalysis|null $analysis analysis
     *
     * @return self
     */
    public function setAnalysis($analysis)
    {
        $this->container['analysis'] = $analysis;

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
     * @param \DateTime $created_at When was the email received by MailSlurp
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
     * @param \DateTime $updated_at When was the email last updated
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool $read Read flag. Has the email ever been viewed in the dashboard or fetched via the API with a hydrated body? If so the email is marked as read. Paginated results do not affect read status. Read status is different to email opened event as it depends on your own account accessing the email. Email opened is determined by tracking pixels sent to other uses if enable during sending. You can listened for both email read and email opened events using webhooks.
     *
     * @return self
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets team_access
     *
     * @return bool
     */
    public function getTeamAccess()
    {
        return $this->container['team_access'];
    }

    /**
     * Sets team_access
     *
     * @param bool $team_access Can the email be accessed by organization team members
     *
     * @return self
     */
    public function setTeamAccess($team_access)
    {
        $this->container['team_access'] = $team_access;

        return $this;
    }

    /**
     * Gets html
     *
     * @return bool|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param bool|null $html html
     *
     * @return self
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

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



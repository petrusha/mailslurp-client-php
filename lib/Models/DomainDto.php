<?php
/**
 * DomainDto
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
 * DomainDto Class Doc Comment
 *
 * @category Class
 * @description Domain plus verification records and status
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DomainDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'domain' => 'string',
        'verification_token' => 'string',
        'dkim_tokens' => 'string[]',
        'is_verified' => 'bool',
        'domain_name_records' => '\MailSlurp\Models\DomainNameRecord[]',
        'catch_all_inbox_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'domain_type' => 'string'
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
        'domain' => null,
        'verification_token' => null,
        'dkim_tokens' => null,
        'is_verified' => null,
        'domain_name_records' => null,
        'catch_all_inbox_id' => 'uuid',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'domain_type' => null
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
        'domain' => 'domain',
        'verification_token' => 'verificationToken',
        'dkim_tokens' => 'dkimTokens',
        'is_verified' => 'isVerified',
        'domain_name_records' => 'domainNameRecords',
        'catch_all_inbox_id' => 'catchAllInboxId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'domain_type' => 'domainType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'domain' => 'setDomain',
        'verification_token' => 'setVerificationToken',
        'dkim_tokens' => 'setDkimTokens',
        'is_verified' => 'setIsVerified',
        'domain_name_records' => 'setDomainNameRecords',
        'catch_all_inbox_id' => 'setCatchAllInboxId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'domain_type' => 'setDomainType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'domain' => 'getDomain',
        'verification_token' => 'getVerificationToken',
        'dkim_tokens' => 'getDkimTokens',
        'is_verified' => 'getIsVerified',
        'domain_name_records' => 'getDomainNameRecords',
        'catch_all_inbox_id' => 'getCatchAllInboxId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'domain_type' => 'getDomainType'
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

    const DOMAIN_TYPE_HTTP_INBOX = 'HTTP_INBOX';
    const DOMAIN_TYPE_SMTP_DOMAIN = 'SMTP_DOMAIN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDomainTypeAllowableValues()
    {
        return [
            self::DOMAIN_TYPE_HTTP_INBOX,
            self::DOMAIN_TYPE_SMTP_DOMAIN,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['verification_token'] = $data['verification_token'] ?? null;
        $this->container['dkim_tokens'] = $data['dkim_tokens'] ?? null;
        $this->container['is_verified'] = $data['is_verified'] ?? null;
        $this->container['domain_name_records'] = $data['domain_name_records'] ?? null;
        $this->container['catch_all_inbox_id'] = $data['catch_all_inbox_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['domain_type'] = $data['domain_type'] ?? null;
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
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['verification_token'] === null) {
            $invalidProperties[] = "'verification_token' can't be null";
        }
        if ($this->container['dkim_tokens'] === null) {
            $invalidProperties[] = "'dkim_tokens' can't be null";
        }
        if ($this->container['is_verified'] === null) {
            $invalidProperties[] = "'is_verified' can't be null";
        }
        if ($this->container['domain_name_records'] === null) {
            $invalidProperties[] = "'domain_name_records' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['domain_type'] === null) {
            $invalidProperties[] = "'domain_type' can't be null";
        }
        $allowedValues = $this->getDomainTypeAllowableValues();
        if (!is_null($this->container['domain_type']) && !in_array($this->container['domain_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'domain_type', must be one of '%s'",
                $this->container['domain_type'],
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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Custom domain name
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets verification_token
     *
     * @return string
     */
    public function getVerificationToken()
    {
        return $this->container['verification_token'];
    }

    /**
     * Sets verification_token
     *
     * @param string $verification_token Verification tokens
     *
     * @return self
     */
    public function setVerificationToken($verification_token)
    {
        $this->container['verification_token'] = $verification_token;

        return $this;
    }

    /**
     * Gets dkim_tokens
     *
     * @return string[]
     */
    public function getDkimTokens()
    {
        return $this->container['dkim_tokens'];
    }

    /**
     * Sets dkim_tokens
     *
     * @param string[] $dkim_tokens Unique token DKIM tokens
     *
     * @return self
     */
    public function setDkimTokens($dkim_tokens)
    {
        $this->container['dkim_tokens'] = $dkim_tokens;

        return $this;
    }

    /**
     * Gets is_verified
     *
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->container['is_verified'];
    }

    /**
     * Sets is_verified
     *
     * @param bool $is_verified Whether domain has been verified or not. If the domain is not verified after 72 hours there is most likely an issue with the domains DNS records.
     *
     * @return self
     */
    public function setIsVerified($is_verified)
    {
        $this->container['is_verified'] = $is_verified;

        return $this;
    }

    /**
     * Gets domain_name_records
     *
     * @return \MailSlurp\Models\DomainNameRecord[]
     */
    public function getDomainNameRecords()
    {
        return $this->container['domain_name_records'];
    }

    /**
     * Sets domain_name_records
     *
     * @param \MailSlurp\Models\DomainNameRecord[] $domain_name_records List of DNS domain name records (C, MX, TXT) etc that you must add to the DNS server associated with your domain provider.
     *
     * @return self
     */
    public function setDomainNameRecords($domain_name_records)
    {
        $this->container['domain_name_records'] = $domain_name_records;

        return $this;
    }

    /**
     * Gets catch_all_inbox_id
     *
     * @return string|null
     */
    public function getCatchAllInboxId()
    {
        return $this->container['catch_all_inbox_id'];
    }

    /**
     * Sets catch_all_inbox_id
     *
     * @param string|null $catch_all_inbox_id The optional catch all inbox that will receive emails sent to the domain that cannot be matched.
     *
     * @return self
     */
    public function setCatchAllInboxId($catch_all_inbox_id)
    {
        $this->container['catch_all_inbox_id'] = $catch_all_inbox_id;

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
     * Gets domain_type
     *
     * @return string
     */
    public function getDomainType()
    {
        return $this->container['domain_type'];
    }

    /**
     * Sets domain_type
     *
     * @param string $domain_type Type of domain. Dictates type of inbox that can be created with domain. HTTP means inboxes are processed using SES while SMTP inboxes use a custom SMTP mail server. SMTP does not support sending so use HTTP for sending emails.
     *
     * @return self
     */
    public function setDomainType($domain_type)
    {
        $allowedValues = $this->getDomainTypeAllowableValues();
        if (!in_array($domain_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'domain_type', must be one of '%s'",
                    $domain_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['domain_type'] = $domain_type;

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



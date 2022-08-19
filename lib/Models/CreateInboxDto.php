<?php
/**
 * CreateInboxDto
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
 * CreateInboxDto Class Doc Comment
 *
 * @category Class
 * @description Options for creating an inbox. An inbox has a real email address that can send and receive emails. Inboxes can be permanent or expire at a given time. Inboxes are either &#x60;SMTP&#x60; or &#x60;HTTP&#x60; mailboxes. &#x60;SMTP&#x60; inboxes are processed by a mail server running at &#x60;mx.mailslurp.com&#x60; while &#x60;HTTP&#x60; inboxes are processed by AWS SES. Inboxes can use a custom email address (by verifying your own domain) or a randomly assigned email ending in either &#x60;mailslurp.com&#x60; or (if &#x60;useDomainPool&#x60; is enabled) ending in a similar domain such as &#x60;mailslurp.xyz&#x60; (selected at random).
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateInboxDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInboxDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_address' => 'string',
        'name' => 'string',
        'description' => 'string',
        'use_domain_pool' => 'bool',
        'tags' => 'string[]',
        'expires_at' => '\DateTime',
        'favourite' => 'bool',
        'expires_in' => 'int',
        'allow_team_access' => 'bool',
        'inbox_type' => 'string',
        'virtual_inbox' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email_address' => null,
        'name' => null,
        'description' => null,
        'use_domain_pool' => null,
        'tags' => null,
        'expires_at' => 'date-time',
        'favourite' => null,
        'expires_in' => 'int64',
        'allow_team_access' => null,
        'inbox_type' => null,
        'virtual_inbox' => null
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
        'email_address' => 'emailAddress',
        'name' => 'name',
        'description' => 'description',
        'use_domain_pool' => 'useDomainPool',
        'tags' => 'tags',
        'expires_at' => 'expiresAt',
        'favourite' => 'favourite',
        'expires_in' => 'expiresIn',
        'allow_team_access' => 'allowTeamAccess',
        'inbox_type' => 'inboxType',
        'virtual_inbox' => 'virtualInbox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'name' => 'setName',
        'description' => 'setDescription',
        'use_domain_pool' => 'setUseDomainPool',
        'tags' => 'setTags',
        'expires_at' => 'setExpiresAt',
        'favourite' => 'setFavourite',
        'expires_in' => 'setExpiresIn',
        'allow_team_access' => 'setAllowTeamAccess',
        'inbox_type' => 'setInboxType',
        'virtual_inbox' => 'setVirtualInbox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'name' => 'getName',
        'description' => 'getDescription',
        'use_domain_pool' => 'getUseDomainPool',
        'tags' => 'getTags',
        'expires_at' => 'getExpiresAt',
        'favourite' => 'getFavourite',
        'expires_in' => 'getExpiresIn',
        'allow_team_access' => 'getAllowTeamAccess',
        'inbox_type' => 'getInboxType',
        'virtual_inbox' => 'getVirtualInbox'
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

    const INBOX_TYPE_HTTP_INBOX = 'HTTP_INBOX';
    const INBOX_TYPE_SMTP_INBOX = 'SMTP_INBOX';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInboxTypeAllowableValues()
    {
        return [
            self::INBOX_TYPE_HTTP_INBOX,
            self::INBOX_TYPE_SMTP_INBOX,
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
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['use_domain_pool'] = $data['use_domain_pool'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['favourite'] = $data['favourite'] ?? null;
        $this->container['expires_in'] = $data['expires_in'] ?? null;
        $this->container['allow_team_access'] = $data['allow_team_access'] ?? null;
        $this->container['inbox_type'] = $data['inbox_type'] ?? null;
        $this->container['virtual_inbox'] = $data['virtual_inbox'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInboxTypeAllowableValues();
        if (!is_null($this->container['inbox_type']) && !in_array($this->container['inbox_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'inbox_type', must be one of '%s'",
                $this->container['inbox_type'],
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
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address A custom email address to use with the inbox. Defaults to null. When null MailSlurp will assign a random email address to the inbox such as `123@mailslurp.com`. If you use the `useDomainPool` option when the email address is null it will generate an email address with a more varied domain ending such as `123@mailslurp.info` or `123@mailslurp.biz`. When a custom email address is provided the address is split into a domain and the domain is queried against your user. If you have created the domain in the MailSlurp dashboard and verified it you can use any email address that ends with the domain. Note domain types must match the inbox type - so `SMTP` inboxes will only work with `SMTP` type domains. Avoid `SMTP` inboxes if you need to send emails as they can only receive. Send an email to this address and the inbox will receive and store it for you. To retrieve the email use the Inbox and Email Controller endpoints with the inbox ID.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Optional name of the inbox. Displayed in the dashboard for easier search and used as the sender name when sending emails.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Optional description of the inbox for labelling purposes. Is shown in the dashboard and can be used with
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets use_domain_pool
     *
     * @return bool|null
     */
    public function getUseDomainPool()
    {
        return $this->container['use_domain_pool'];
    }

    /**
     * Sets use_domain_pool
     *
     * @param bool|null $use_domain_pool Use the MailSlurp domain name pool with this inbox when creating the email address. Defaults to null. If enabled the inbox will be an email address with a domain randomly chosen from a list of the MailSlurp domains. This is useful when the default `@mailslurp.com` email addresses used with inboxes are blocked or considered spam by a provider or receiving service. When domain pool is enabled an email address will be generated ending in `@mailslurp.{world,info,xyz,...}` . This means a TLD is randomly selecting from a list of `.biz`, `.info`, `.xyz` etc to add variance to the generated email addresses. When null or false MailSlurp uses the default behavior of `@mailslurp.com` or custom email address provided by the emailAddress field. Note this feature is only available for `HTTP` inbox types.
     *
     * @return self
     */
    public function setUseDomainPool($use_domain_pool)
    {
        $this->container['use_domain_pool'] = $use_domain_pool;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Tags that inbox has been tagged with. Tags can be added to inboxes to group different inboxes within an account. You can also search for inboxes by tag in the dashboard UI.
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Optional inbox expiration date. If null then this inbox is permanent and the emails in it won't be deleted. If an expiration date is provided or is required by your plan the inbox will be closed when the expiration time is reached. Expired inboxes still contain their emails but can no longer send or receive emails. An ExpiredInboxRecord is created when an inbox and the email address and inbox ID are recorded. The expiresAt property is a timestamp string in ISO DateTime Format yyyy-MM-dd'T'HH:mm:ss.SSSXXX.
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets favourite
     *
     * @return bool|null
     */
    public function getFavourite()
    {
        return $this->container['favourite'];
    }

    /**
     * Sets favourite
     *
     * @param bool|null $favourite Is the inbox a favorite. Marking an inbox as a favorite is typically done in the dashboard for quick access or filtering
     *
     * @return self
     */
    public function setFavourite($favourite)
    {
        $this->container['favourite'] = $favourite;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param int|null $expires_in Number of milliseconds that inbox should exist for
     *
     * @return self
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets allow_team_access
     *
     * @return bool|null
     */
    public function getAllowTeamAccess()
    {
        return $this->container['allow_team_access'];
    }

    /**
     * Sets allow_team_access
     *
     * @param bool|null $allow_team_access DEPRECATED (team access is always true). Grant team access to this inbox and the emails that belong to it for team members of your organization.
     *
     * @return self
     */
    public function setAllowTeamAccess($allow_team_access)
    {
        $this->container['allow_team_access'] = $allow_team_access;

        return $this;
    }

    /**
     * Gets inbox_type
     *
     * @return string|null
     */
    public function getInboxType()
    {
        return $this->container['inbox_type'];
    }

    /**
     * Sets inbox_type
     *
     * @param string|null $inbox_type Type of inbox. HTTP inboxes are faster and better for most cases. SMTP inboxes are more suited for public facing inbound messages (but cannot send).
     *
     * @return self
     */
    public function setInboxType($inbox_type)
    {
        $allowedValues = $this->getInboxTypeAllowableValues();
        if (!is_null($inbox_type) && !in_array($inbox_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'inbox_type', must be one of '%s'",
                    $inbox_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inbox_type'] = $inbox_type;

        return $this;
    }

    /**
     * Gets virtual_inbox
     *
     * @return bool|null
     */
    public function getVirtualInbox()
    {
        return $this->container['virtual_inbox'];
    }

    /**
     * Sets virtual_inbox
     *
     * @param bool|null $virtual_inbox Virtual inbox prevents any outbound emails from being sent. It creates sent email records but will never send real emails to recipients. Great for testing and faking email sending.
     *
     * @return self
     */
    public function setVirtualInbox($virtual_inbox)
    {
        $this->container['virtual_inbox'] = $virtual_inbox;

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



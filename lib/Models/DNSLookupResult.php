<?php
/**
 * DNSLookupResult
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
 * DNSLookupResult Class Doc Comment
 *
 * @category Class
 * @description DNS lookup result. Includes record type, time to live, raw response, and name value for the name server response.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DNSLookupResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DNSLookupResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'record_type' => 'string',
        'ttl' => 'int',
        'record_entries' => 'string[]',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'record_type' => null,
        'ttl' => 'int64',
        'record_entries' => null,
        'name' => null
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
        'record_type' => 'recordType',
        'ttl' => 'ttl',
        'record_entries' => 'recordEntries',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'record_type' => 'setRecordType',
        'ttl' => 'setTtl',
        'record_entries' => 'setRecordEntries',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'record_type' => 'getRecordType',
        'ttl' => 'getTtl',
        'record_entries' => 'getRecordEntries',
        'name' => 'getName'
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

    const RECORD_TYPE_A = 'A';
    const RECORD_TYPE_NS = 'NS';
    const RECORD_TYPE_MD = 'MD';
    const RECORD_TYPE_MF = 'MF';
    const RECORD_TYPE_CNAME = 'CNAME';
    const RECORD_TYPE_SOA = 'SOA';
    const RECORD_TYPE_MB = 'MB';
    const RECORD_TYPE_MG = 'MG';
    const RECORD_TYPE_MR = 'MR';
    const RECORD_TYPE_NULL = 'NULL';
    const RECORD_TYPE_WKS = 'WKS';
    const RECORD_TYPE_PTR = 'PTR';
    const RECORD_TYPE_HINFO = 'HINFO';
    const RECORD_TYPE_MINFO = 'MINFO';
    const RECORD_TYPE_MX = 'MX';
    const RECORD_TYPE_TXT = 'TXT';
    const RECORD_TYPE_RP = 'RP';
    const RECORD_TYPE_AFSDB = 'AFSDB';
    const RECORD_TYPE_X25 = 'X25';
    const RECORD_TYPE_ISDN = 'ISDN';
    const RECORD_TYPE_RT = 'RT';
    const RECORD_TYPE_NSAP = 'NSAP';
    const RECORD_TYPE_NSAP_PTR = 'NSAP_PTR';
    const RECORD_TYPE_SIG = 'SIG';
    const RECORD_TYPE_KEY = 'KEY';
    const RECORD_TYPE_PX = 'PX';
    const RECORD_TYPE_GPOS = 'GPOS';
    const RECORD_TYPE_AAAA = 'AAAA';
    const RECORD_TYPE_LOC = 'LOC';
    const RECORD_TYPE_NXT = 'NXT';
    const RECORD_TYPE_EID = 'EID';
    const RECORD_TYPE_NIMLOC = 'NIMLOC';
    const RECORD_TYPE_SRV = 'SRV';
    const RECORD_TYPE_ATMA = 'ATMA';
    const RECORD_TYPE_NAPTR = 'NAPTR';
    const RECORD_TYPE_KX = 'KX';
    const RECORD_TYPE_CERT = 'CERT';
    const RECORD_TYPE_A6 = 'A6';
    const RECORD_TYPE_DNAME = 'DNAME';
    const RECORD_TYPE_SINK = 'SINK';
    const RECORD_TYPE_OPT = 'OPT';
    const RECORD_TYPE_APL = 'APL';
    const RECORD_TYPE_DS = 'DS';
    const RECORD_TYPE_SSHFP = 'SSHFP';
    const RECORD_TYPE_IPSECKEY = 'IPSECKEY';
    const RECORD_TYPE_RRSIG = 'RRSIG';
    const RECORD_TYPE_NSEC = 'NSEC';
    const RECORD_TYPE_DNSKEY = 'DNSKEY';
    const RECORD_TYPE_DHCID = 'DHCID';
    const RECORD_TYPE_NSEC3 = 'NSEC3';
    const RECORD_TYPE_NSEC3_PARAM = 'NSEC3PARAM';
    const RECORD_TYPE_TLSA = 'TLSA';
    const RECORD_TYPE_SMIMEA = 'SMIMEA';
    const RECORD_TYPE_HIP = 'HIP';
    const RECORD_TYPE_NINFO = 'NINFO';
    const RECORD_TYPE_RKEY = 'RKEY';
    const RECORD_TYPE_TALINK = 'TALINK';
    const RECORD_TYPE_CDS = 'CDS';
    const RECORD_TYPE_CDNSKEY = 'CDNSKEY';
    const RECORD_TYPE_OPENPGPKEY = 'OPENPGPKEY';
    const RECORD_TYPE_CSYNC = 'CSYNC';
    const RECORD_TYPE_ZONEMD = 'ZONEMD';
    const RECORD_TYPE_SVCB = 'SVCB';
    const RECORD_TYPE_HTTPS = 'HTTPS';
    const RECORD_TYPE_SPF = 'SPF';
    const RECORD_TYPE_UINFO = 'UINFO';
    const RECORD_TYPE_UID = 'UID';
    const RECORD_TYPE_GID = 'GID';
    const RECORD_TYPE_UNSPEC = 'UNSPEC';
    const RECORD_TYPE_NID = 'NID';
    const RECORD_TYPE_L32 = 'L32';
    const RECORD_TYPE_L64 = 'L64';
    const RECORD_TYPE_LP = 'LP';
    const RECORD_TYPE_EUI48 = 'EUI48';
    const RECORD_TYPE_EUI64 = 'EUI64';
    const RECORD_TYPE_TKEY = 'TKEY';
    const RECORD_TYPE_TSIG = 'TSIG';
    const RECORD_TYPE_IXFR = 'IXFR';
    const RECORD_TYPE_AXFR = 'AXFR';
    const RECORD_TYPE_MAILB = 'MAILB';
    const RECORD_TYPE_MAILA = 'MAILA';
    const RECORD_TYPE_ANY = 'ANY';
    const RECORD_TYPE_URI = 'URI';
    const RECORD_TYPE_CAA = 'CAA';
    const RECORD_TYPE_AVC = 'AVC';
    const RECORD_TYPE_DOA = 'DOA';
    const RECORD_TYPE_AMTRELAY = 'AMTRELAY';
    const RECORD_TYPE_TA = 'TA';
    const RECORD_TYPE_DLV = 'DLV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecordTypeAllowableValues()
    {
        return [
            self::RECORD_TYPE_A,
            self::RECORD_TYPE_NS,
            self::RECORD_TYPE_MD,
            self::RECORD_TYPE_MF,
            self::RECORD_TYPE_CNAME,
            self::RECORD_TYPE_SOA,
            self::RECORD_TYPE_MB,
            self::RECORD_TYPE_MG,
            self::RECORD_TYPE_MR,
            self::RECORD_TYPE_NULL,
            self::RECORD_TYPE_WKS,
            self::RECORD_TYPE_PTR,
            self::RECORD_TYPE_HINFO,
            self::RECORD_TYPE_MINFO,
            self::RECORD_TYPE_MX,
            self::RECORD_TYPE_TXT,
            self::RECORD_TYPE_RP,
            self::RECORD_TYPE_AFSDB,
            self::RECORD_TYPE_X25,
            self::RECORD_TYPE_ISDN,
            self::RECORD_TYPE_RT,
            self::RECORD_TYPE_NSAP,
            self::RECORD_TYPE_NSAP_PTR,
            self::RECORD_TYPE_SIG,
            self::RECORD_TYPE_KEY,
            self::RECORD_TYPE_PX,
            self::RECORD_TYPE_GPOS,
            self::RECORD_TYPE_AAAA,
            self::RECORD_TYPE_LOC,
            self::RECORD_TYPE_NXT,
            self::RECORD_TYPE_EID,
            self::RECORD_TYPE_NIMLOC,
            self::RECORD_TYPE_SRV,
            self::RECORD_TYPE_ATMA,
            self::RECORD_TYPE_NAPTR,
            self::RECORD_TYPE_KX,
            self::RECORD_TYPE_CERT,
            self::RECORD_TYPE_A6,
            self::RECORD_TYPE_DNAME,
            self::RECORD_TYPE_SINK,
            self::RECORD_TYPE_OPT,
            self::RECORD_TYPE_APL,
            self::RECORD_TYPE_DS,
            self::RECORD_TYPE_SSHFP,
            self::RECORD_TYPE_IPSECKEY,
            self::RECORD_TYPE_RRSIG,
            self::RECORD_TYPE_NSEC,
            self::RECORD_TYPE_DNSKEY,
            self::RECORD_TYPE_DHCID,
            self::RECORD_TYPE_NSEC3,
            self::RECORD_TYPE_NSEC3_PARAM,
            self::RECORD_TYPE_TLSA,
            self::RECORD_TYPE_SMIMEA,
            self::RECORD_TYPE_HIP,
            self::RECORD_TYPE_NINFO,
            self::RECORD_TYPE_RKEY,
            self::RECORD_TYPE_TALINK,
            self::RECORD_TYPE_CDS,
            self::RECORD_TYPE_CDNSKEY,
            self::RECORD_TYPE_OPENPGPKEY,
            self::RECORD_TYPE_CSYNC,
            self::RECORD_TYPE_ZONEMD,
            self::RECORD_TYPE_SVCB,
            self::RECORD_TYPE_HTTPS,
            self::RECORD_TYPE_SPF,
            self::RECORD_TYPE_UINFO,
            self::RECORD_TYPE_UID,
            self::RECORD_TYPE_GID,
            self::RECORD_TYPE_UNSPEC,
            self::RECORD_TYPE_NID,
            self::RECORD_TYPE_L32,
            self::RECORD_TYPE_L64,
            self::RECORD_TYPE_LP,
            self::RECORD_TYPE_EUI48,
            self::RECORD_TYPE_EUI64,
            self::RECORD_TYPE_TKEY,
            self::RECORD_TYPE_TSIG,
            self::RECORD_TYPE_IXFR,
            self::RECORD_TYPE_AXFR,
            self::RECORD_TYPE_MAILB,
            self::RECORD_TYPE_MAILA,
            self::RECORD_TYPE_ANY,
            self::RECORD_TYPE_URI,
            self::RECORD_TYPE_CAA,
            self::RECORD_TYPE_AVC,
            self::RECORD_TYPE_DOA,
            self::RECORD_TYPE_AMTRELAY,
            self::RECORD_TYPE_TA,
            self::RECORD_TYPE_DLV,
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
        $this->container['record_type'] = $data['record_type'] ?? null;
        $this->container['ttl'] = $data['ttl'] ?? null;
        $this->container['record_entries'] = $data['record_entries'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['record_type'] === null) {
            $invalidProperties[] = "'record_type' can't be null";
        }
        $allowedValues = $this->getRecordTypeAllowableValues();
        if (!is_null($this->container['record_type']) && !in_array($this->container['record_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'record_type', must be one of '%s'",
                $this->container['record_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
        if ($this->container['record_entries'] === null) {
            $invalidProperties[] = "'record_entries' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets record_type
     *
     * @return string
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     *
     * @param string $record_type Domain Name Server Record Types
     *
     * @return self
     */
    public function setRecordType($record_type)
    {
        $allowedValues = $this->getRecordTypeAllowableValues();
        if (!in_array($record_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'record_type', must be one of '%s'",
                    $record_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['record_type'] = $record_type;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return int
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param int $ttl ttl
     *
     * @return self
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets record_entries
     *
     * @return string[]
     */
    public function getRecordEntries()
    {
        return $this->container['record_entries'];
    }

    /**
     * Sets record_entries
     *
     * @param string[] $record_entries record_entries
     *
     * @return self
     */
    public function setRecordEntries($record_entries)
    {
        $this->container['record_entries'] = $record_entries;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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



<?php
/**
 * DNSLookupOptions
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
 * DNSLookupOptions Class Doc Comment
 *
 * @category Class
 * @description Options for DNS query.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DNSLookupOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DNSLookupOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hostname' => 'string',
        'record_types' => 'string[]',
        'omit_final_dns_dot' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hostname' => null,
        'record_types' => null,
        'omit_final_dns_dot' => null
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
        'hostname' => 'hostname',
        'record_types' => 'recordTypes',
        'omit_final_dns_dot' => 'omitFinalDNSDot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hostname' => 'setHostname',
        'record_types' => 'setRecordTypes',
        'omit_final_dns_dot' => 'setOmitFinalDnsDot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hostname' => 'getHostname',
        'record_types' => 'getRecordTypes',
        'omit_final_dns_dot' => 'getOmitFinalDnsDot'
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

    const RECORD_TYPES_A = 'A';
    const RECORD_TYPES_NS = 'NS';
    const RECORD_TYPES_MD = 'MD';
    const RECORD_TYPES_MF = 'MF';
    const RECORD_TYPES_CNAME = 'CNAME';
    const RECORD_TYPES_SOA = 'SOA';
    const RECORD_TYPES_MB = 'MB';
    const RECORD_TYPES_MG = 'MG';
    const RECORD_TYPES_MR = 'MR';
    const RECORD_TYPES_NULL = 'NULL';
    const RECORD_TYPES_WKS = 'WKS';
    const RECORD_TYPES_PTR = 'PTR';
    const RECORD_TYPES_HINFO = 'HINFO';
    const RECORD_TYPES_MINFO = 'MINFO';
    const RECORD_TYPES_MX = 'MX';
    const RECORD_TYPES_TXT = 'TXT';
    const RECORD_TYPES_RP = 'RP';
    const RECORD_TYPES_AFSDB = 'AFSDB';
    const RECORD_TYPES_X25 = 'X25';
    const RECORD_TYPES_ISDN = 'ISDN';
    const RECORD_TYPES_RT = 'RT';
    const RECORD_TYPES_NSAP = 'NSAP';
    const RECORD_TYPES_NSAP_PTR = 'NSAP_PTR';
    const RECORD_TYPES_SIG = 'SIG';
    const RECORD_TYPES_KEY = 'KEY';
    const RECORD_TYPES_PX = 'PX';
    const RECORD_TYPES_GPOS = 'GPOS';
    const RECORD_TYPES_AAAA = 'AAAA';
    const RECORD_TYPES_LOC = 'LOC';
    const RECORD_TYPES_NXT = 'NXT';
    const RECORD_TYPES_EID = 'EID';
    const RECORD_TYPES_NIMLOC = 'NIMLOC';
    const RECORD_TYPES_SRV = 'SRV';
    const RECORD_TYPES_ATMA = 'ATMA';
    const RECORD_TYPES_NAPTR = 'NAPTR';
    const RECORD_TYPES_KX = 'KX';
    const RECORD_TYPES_CERT = 'CERT';
    const RECORD_TYPES_A6 = 'A6';
    const RECORD_TYPES_DNAME = 'DNAME';
    const RECORD_TYPES_SINK = 'SINK';
    const RECORD_TYPES_OPT = 'OPT';
    const RECORD_TYPES_APL = 'APL';
    const RECORD_TYPES_DS = 'DS';
    const RECORD_TYPES_SSHFP = 'SSHFP';
    const RECORD_TYPES_IPSECKEY = 'IPSECKEY';
    const RECORD_TYPES_RRSIG = 'RRSIG';
    const RECORD_TYPES_NSEC = 'NSEC';
    const RECORD_TYPES_DNSKEY = 'DNSKEY';
    const RECORD_TYPES_DHCID = 'DHCID';
    const RECORD_TYPES_NSEC3 = 'NSEC3';
    const RECORD_TYPES_NSEC3_PARAM = 'NSEC3PARAM';
    const RECORD_TYPES_TLSA = 'TLSA';
    const RECORD_TYPES_SMIMEA = 'SMIMEA';
    const RECORD_TYPES_HIP = 'HIP';
    const RECORD_TYPES_NINFO = 'NINFO';
    const RECORD_TYPES_RKEY = 'RKEY';
    const RECORD_TYPES_TALINK = 'TALINK';
    const RECORD_TYPES_CDS = 'CDS';
    const RECORD_TYPES_CDNSKEY = 'CDNSKEY';
    const RECORD_TYPES_OPENPGPKEY = 'OPENPGPKEY';
    const RECORD_TYPES_CSYNC = 'CSYNC';
    const RECORD_TYPES_ZONEMD = 'ZONEMD';
    const RECORD_TYPES_SVCB = 'SVCB';
    const RECORD_TYPES_HTTPS = 'HTTPS';
    const RECORD_TYPES_SPF = 'SPF';
    const RECORD_TYPES_UINFO = 'UINFO';
    const RECORD_TYPES_UID = 'UID';
    const RECORD_TYPES_GID = 'GID';
    const RECORD_TYPES_UNSPEC = 'UNSPEC';
    const RECORD_TYPES_NID = 'NID';
    const RECORD_TYPES_L32 = 'L32';
    const RECORD_TYPES_L64 = 'L64';
    const RECORD_TYPES_LP = 'LP';
    const RECORD_TYPES_EUI48 = 'EUI48';
    const RECORD_TYPES_EUI64 = 'EUI64';
    const RECORD_TYPES_TKEY = 'TKEY';
    const RECORD_TYPES_TSIG = 'TSIG';
    const RECORD_TYPES_IXFR = 'IXFR';
    const RECORD_TYPES_AXFR = 'AXFR';
    const RECORD_TYPES_MAILB = 'MAILB';
    const RECORD_TYPES_MAILA = 'MAILA';
    const RECORD_TYPES_ANY = 'ANY';
    const RECORD_TYPES_URI = 'URI';
    const RECORD_TYPES_CAA = 'CAA';
    const RECORD_TYPES_AVC = 'AVC';
    const RECORD_TYPES_DOA = 'DOA';
    const RECORD_TYPES_AMTRELAY = 'AMTRELAY';
    const RECORD_TYPES_TA = 'TA';
    const RECORD_TYPES_DLV = 'DLV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecordTypesAllowableValues()
    {
        return [
            self::RECORD_TYPES_A,
            self::RECORD_TYPES_NS,
            self::RECORD_TYPES_MD,
            self::RECORD_TYPES_MF,
            self::RECORD_TYPES_CNAME,
            self::RECORD_TYPES_SOA,
            self::RECORD_TYPES_MB,
            self::RECORD_TYPES_MG,
            self::RECORD_TYPES_MR,
            self::RECORD_TYPES_NULL,
            self::RECORD_TYPES_WKS,
            self::RECORD_TYPES_PTR,
            self::RECORD_TYPES_HINFO,
            self::RECORD_TYPES_MINFO,
            self::RECORD_TYPES_MX,
            self::RECORD_TYPES_TXT,
            self::RECORD_TYPES_RP,
            self::RECORD_TYPES_AFSDB,
            self::RECORD_TYPES_X25,
            self::RECORD_TYPES_ISDN,
            self::RECORD_TYPES_RT,
            self::RECORD_TYPES_NSAP,
            self::RECORD_TYPES_NSAP_PTR,
            self::RECORD_TYPES_SIG,
            self::RECORD_TYPES_KEY,
            self::RECORD_TYPES_PX,
            self::RECORD_TYPES_GPOS,
            self::RECORD_TYPES_AAAA,
            self::RECORD_TYPES_LOC,
            self::RECORD_TYPES_NXT,
            self::RECORD_TYPES_EID,
            self::RECORD_TYPES_NIMLOC,
            self::RECORD_TYPES_SRV,
            self::RECORD_TYPES_ATMA,
            self::RECORD_TYPES_NAPTR,
            self::RECORD_TYPES_KX,
            self::RECORD_TYPES_CERT,
            self::RECORD_TYPES_A6,
            self::RECORD_TYPES_DNAME,
            self::RECORD_TYPES_SINK,
            self::RECORD_TYPES_OPT,
            self::RECORD_TYPES_APL,
            self::RECORD_TYPES_DS,
            self::RECORD_TYPES_SSHFP,
            self::RECORD_TYPES_IPSECKEY,
            self::RECORD_TYPES_RRSIG,
            self::RECORD_TYPES_NSEC,
            self::RECORD_TYPES_DNSKEY,
            self::RECORD_TYPES_DHCID,
            self::RECORD_TYPES_NSEC3,
            self::RECORD_TYPES_NSEC3_PARAM,
            self::RECORD_TYPES_TLSA,
            self::RECORD_TYPES_SMIMEA,
            self::RECORD_TYPES_HIP,
            self::RECORD_TYPES_NINFO,
            self::RECORD_TYPES_RKEY,
            self::RECORD_TYPES_TALINK,
            self::RECORD_TYPES_CDS,
            self::RECORD_TYPES_CDNSKEY,
            self::RECORD_TYPES_OPENPGPKEY,
            self::RECORD_TYPES_CSYNC,
            self::RECORD_TYPES_ZONEMD,
            self::RECORD_TYPES_SVCB,
            self::RECORD_TYPES_HTTPS,
            self::RECORD_TYPES_SPF,
            self::RECORD_TYPES_UINFO,
            self::RECORD_TYPES_UID,
            self::RECORD_TYPES_GID,
            self::RECORD_TYPES_UNSPEC,
            self::RECORD_TYPES_NID,
            self::RECORD_TYPES_L32,
            self::RECORD_TYPES_L64,
            self::RECORD_TYPES_LP,
            self::RECORD_TYPES_EUI48,
            self::RECORD_TYPES_EUI64,
            self::RECORD_TYPES_TKEY,
            self::RECORD_TYPES_TSIG,
            self::RECORD_TYPES_IXFR,
            self::RECORD_TYPES_AXFR,
            self::RECORD_TYPES_MAILB,
            self::RECORD_TYPES_MAILA,
            self::RECORD_TYPES_ANY,
            self::RECORD_TYPES_URI,
            self::RECORD_TYPES_CAA,
            self::RECORD_TYPES_AVC,
            self::RECORD_TYPES_DOA,
            self::RECORD_TYPES_AMTRELAY,
            self::RECORD_TYPES_TA,
            self::RECORD_TYPES_DLV,
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
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['record_types'] = $data['record_types'] ?? null;
        $this->container['omit_final_dns_dot'] = $data['omit_final_dns_dot'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hostname'] === null) {
            $invalidProperties[] = "'hostname' can't be null";
        }
        if ($this->container['record_types'] === null) {
            $invalidProperties[] = "'record_types' can't be null";
        }
        if ($this->container['omit_final_dns_dot'] === null) {
            $invalidProperties[] = "'omit_final_dns_dot' can't be null";
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
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname List of record types you wish to query such as MX, DNS, TXT, NS, A etc.
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets record_types
     *
     * @return string[]
     */
    public function getRecordTypes()
    {
        return $this->container['record_types'];
    }

    /**
     * Sets record_types
     *
     * @param string[] $record_types List of record types you wish to query such as MX, DNS, TXT, NS, A etc.
     *
     * @return self
     */
    public function setRecordTypes($record_types)
    {
        $allowedValues = $this->getRecordTypesAllowableValues();
        if (array_diff($record_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'record_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['record_types'] = $record_types;

        return $this;
    }

    /**
     * Gets omit_final_dns_dot
     *
     * @return bool
     */
    public function getOmitFinalDnsDot()
    {
        return $this->container['omit_final_dns_dot'];
    }

    /**
     * Sets omit_final_dns_dot
     *
     * @param bool $omit_final_dns_dot Optionally control whether to omit the final dot in full DNS name values.
     *
     * @return self
     */
    public function setOmitFinalDnsDot($omit_final_dns_dot)
    {
        $this->container['omit_final_dns_dot'] = $omit_final_dns_dot;

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



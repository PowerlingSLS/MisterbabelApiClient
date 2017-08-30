<?php
/**
 * GetJobs
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Misterbabel API
 *
 * Welcome to the Misterbabel API documentation. Here you'll find details about our API.<br><br>If you have any problems or request please contact our support team.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@powerling.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetJobs Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetJobs implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Get jobs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'job_id' => 'string',
        'job_reference' => 'string',
        'custom_reference' => 'string',
        'lc_source' => 'string',
        'lc_target' => 'string',
        'creation_time' => 'int',
        'delivery_time' => 'int',
        'title' => 'string',
        'comment' => 'string',
        'word_count' => 'int',
        'file_url_source' => 'string',
        'file_url_target' => 'string',
        'callback_url' => 'string',
        'review' => 'bool',
        'domain' => 'int',
        'text_type' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'job_id' => null,
        'job_reference' => null,
        'custom_reference' => null,
        'lc_source' => null,
        'lc_target' => null,
        'creation_time' => null,
        'delivery_time' => null,
        'title' => null,
        'comment' => null,
        'word_count' => null,
        'file_url_source' => null,
        'file_url_target' => null,
        'callback_url' => null,
        'review' => null,
        'domain' => null,
        'text_type' => null,
        'status' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'job_id' => 'job_id',
        'job_reference' => 'job_reference',
        'custom_reference' => 'custom_reference',
        'lc_source' => 'lc_source',
        'lc_target' => 'lc_target',
        'creation_time' => 'creation_time',
        'delivery_time' => 'delivery_time',
        'title' => 'title',
        'comment' => 'comment',
        'word_count' => 'word_count',
        'file_url_source' => 'file_url_source',
        'file_url_target' => 'file_url_target',
        'callback_url' => 'callback_url',
        'review' => 'review',
        'domain' => 'domain',
        'text_type' => 'text_type',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'job_id' => 'setJobId',
        'job_reference' => 'setJobReference',
        'custom_reference' => 'setCustomReference',
        'lc_source' => 'setLcSource',
        'lc_target' => 'setLcTarget',
        'creation_time' => 'setCreationTime',
        'delivery_time' => 'setDeliveryTime',
        'title' => 'setTitle',
        'comment' => 'setComment',
        'word_count' => 'setWordCount',
        'file_url_source' => 'setFileUrlSource',
        'file_url_target' => 'setFileUrlTarget',
        'callback_url' => 'setCallbackUrl',
        'review' => 'setReview',
        'domain' => 'setDomain',
        'text_type' => 'setTextType',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'job_id' => 'getJobId',
        'job_reference' => 'getJobReference',
        'custom_reference' => 'getCustomReference',
        'lc_source' => 'getLcSource',
        'lc_target' => 'getLcTarget',
        'creation_time' => 'getCreationTime',
        'delivery_time' => 'getDeliveryTime',
        'title' => 'getTitle',
        'comment' => 'getComment',
        'word_count' => 'getWordCount',
        'file_url_source' => 'getFileUrlSource',
        'file_url_target' => 'getFileUrlTarget',
        'callback_url' => 'getCallbackUrl',
        'review' => 'getReview',
        'domain' => 'getDomain',
        'text_type' => 'getTextType',
        'status' => 'getStatus'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_PENDING = 'pending';
    const STATUS_WORKING = 'working';
    const STATUS_TRANSLATED = 'translated';
    const STATUS_REVIEWED = 'reviewed';
    const STATUS_REVIEWABLE = 'reviewable';
    const STATUS_REVISING = 'revising';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_WORKING,
            self::STATUS_TRANSLATED,
            self::STATUS_REVIEWED,
            self::STATUS_REVIEWABLE,
            self::STATUS_REVISING,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['job_reference'] = isset($data['job_reference']) ? $data['job_reference'] : null;
        $this->container['custom_reference'] = isset($data['custom_reference']) ? $data['custom_reference'] : null;
        $this->container['lc_source'] = isset($data['lc_source']) ? $data['lc_source'] : null;
        $this->container['lc_target'] = isset($data['lc_target']) ? $data['lc_target'] : null;
        $this->container['creation_time'] = isset($data['creation_time']) ? $data['creation_time'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['word_count'] = isset($data['word_count']) ? $data['word_count'] : null;
        $this->container['file_url_source'] = isset($data['file_url_source']) ? $data['file_url_source'] : null;
        $this->container['file_url_target'] = isset($data['file_url_target']) ? $data['file_url_target'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['review'] = isset($data['review']) ? $data['review'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['text_type'] = isset($data['text_type']) ? $data['text_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['job_id'] === null) {
            $invalid_properties[] = "'job_id' can't be null";
        }
        if ($this->container['job_reference'] === null) {
            $invalid_properties[] = "'job_reference' can't be null";
        }
        if ($this->container['custom_reference'] === null) {
            $invalid_properties[] = "'custom_reference' can't be null";
        }
        if ($this->container['lc_source'] === null) {
            $invalid_properties[] = "'lc_source' can't be null";
        }
        if ($this->container['lc_target'] === null) {
            $invalid_properties[] = "'lc_target' can't be null";
        }
        if ($this->container['creation_time'] === null) {
            $invalid_properties[] = "'creation_time' can't be null";
        }
        if ($this->container['delivery_time'] === null) {
            $invalid_properties[] = "'delivery_time' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if ($this->container['word_count'] === null) {
            $invalid_properties[] = "'word_count' can't be null";
        }
        if ($this->container['file_url_source'] === null) {
            $invalid_properties[] = "'file_url_source' can't be null";
        }
        if ($this->container['file_url_target'] === null) {
            $invalid_properties[] = "'file_url_target' can't be null";
        }
        if ($this->container['callback_url'] === null) {
            $invalid_properties[] = "'callback_url' can't be null";
        }
        if ($this->container['review'] === null) {
            $invalid_properties[] = "'review' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalid_properties[] = "'domain' can't be null";
        }
        if ($this->container['text_type'] === null) {
            $invalid_properties[] = "'text_type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['job_id'] === null) {
            return false;
        }
        if ($this->container['job_reference'] === null) {
            return false;
        }
        if ($this->container['custom_reference'] === null) {
            return false;
        }
        if ($this->container['lc_source'] === null) {
            return false;
        }
        if ($this->container['lc_target'] === null) {
            return false;
        }
        if ($this->container['creation_time'] === null) {
            return false;
        }
        if ($this->container['delivery_time'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['word_count'] === null) {
            return false;
        }
        if ($this->container['file_url_source'] === null) {
            return false;
        }
        if ($this->container['file_url_target'] === null) {
            return false;
        }
        if ($this->container['callback_url'] === null) {
            return false;
        }
        if ($this->container['review'] === null) {
            return false;
        }
        if ($this->container['domain'] === null) {
            return false;
        }
        if ($this->container['text_type'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets job_id
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     * @param string $job_id Unique job ID
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets job_reference
     * @return string
     */
    public function getJobReference()
    {
        return $this->container['job_reference'];
    }

    /**
     * Sets job_reference
     * @param string $job_reference Unique job reference
     * @return $this
     */
    public function setJobReference($job_reference)
    {
        $this->container['job_reference'] = $job_reference;

        return $this;
    }

    /**
     * Gets custom_reference
     * @return string
     */
    public function getCustomReference()
    {
        return $this->container['custom_reference'];
    }

    /**
     * Sets custom_reference
     * @param string $custom_reference Your custom reference
     * @return $this
     */
    public function setCustomReference($custom_reference)
    {
        $this->container['custom_reference'] = $custom_reference;

        return $this;
    }

    /**
     * Gets lc_source
     * @return string
     */
    public function getLcSource()
    {
        return $this->container['lc_source'];
    }

    /**
     * Sets lc_source
     * @param string $lc_source Language code of the source text
     * @return $this
     */
    public function setLcSource($lc_source)
    {
        $this->container['lc_source'] = $lc_source;

        return $this;
    }

    /**
     * Gets lc_target
     * @return string
     */
    public function getLcTarget()
    {
        return $this->container['lc_target'];
    }

    /**
     * Sets lc_target
     * @param string $lc_target Language code of the target text
     * @return $this
     */
    public function setLcTarget($lc_target)
    {
        $this->container['lc_target'] = $lc_target;

        return $this;
    }

    /**
     * Gets creation_time
     * @return int
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     * @param int $creation_time Timestamp of the creation date
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets delivery_time
     * @return int
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     * @param int $delivery_time If the translation is not delivered the value is 0. If the translation was delivered it will be set with the timestamp it was delivered.
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title of your job.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment The comment of your job, which will be visible to the translator
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets word_count
     * @return int
     */
    public function getWordCount()
    {
        return $this->container['word_count'];
    }

    /**
     * Sets word_count
     * @param int $word_count Number of word to translate
     * @return $this
     */
    public function setWordCount($word_count)
    {
        $this->container['word_count'] = $word_count;

        return $this;
    }

    /**
     * Gets file_url_source
     * @return string
     */
    public function getFileUrlSource()
    {
        return $this->container['file_url_source'];
    }

    /**
     * Sets file_url_source
     * @param string $file_url_source The file you want to translate, it must be in xml format.
     * @return $this
     */
    public function setFileUrlSource($file_url_source)
    {
        $this->container['file_url_source'] = $file_url_source;

        return $this;
    }

    /**
     * Gets file_url_target
     * @return string
     */
    public function getFileUrlTarget()
    {
        return $this->container['file_url_target'];
    }

    /**
     * Sets file_url_target
     * @param string $file_url_target The file translated
     * @return $this
     */
    public function setFileUrlTarget($file_url_target)
    {
        $this->container['file_url_target'] = $file_url_target;

        return $this;
    }

    /**
     * Gets callback_url
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     * @param string $callback_url The URL we will use to transmit your translation automatically
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets review
     * @return bool
     */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
     * Sets review
     * @param bool $review Specify if the translation should be verified by another translator
     * @return $this
     */
    public function setReview($review)
    {
        $this->container['review'] = $review;

        return $this;
    }

    /**
     * Gets domain
     * @return int
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     * @param int $domain Specify the domain of the source text
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets text_type
     * @return int
     */
    public function getTextType()
    {
        return $this->container['text_type'];
    }

    /**
     * Sets text_type
     * @param int $text_type Specify the text type of the source text
     * @return $this
     */
    public function setTextType($text_type)
    {
        $this->container['text_type'] = $text_type;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of your translation
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php

/**
 * TestNotificationRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Notifications Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Notifications;
use Walmart\Model\BaseModel;

/**
 * TestNotificationRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class TestNotificationRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'testNotification_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'eventType' => 'string',
        'eventVersion' => 'string',
        'resourceName' => 'string',
        'eventUrl' => 'string',
        'authDetails' => '\Walmart\Model\MP\US\Notifications\TestNotificationRequestAuthDetails',
        'headers' => '\Walmart\Model\MP\US\Notifications\TestNotificationRequestHeaders'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'eventType' => null,
        'eventVersion' => null,
        'resourceName' => null,
        'eventUrl' => null,
        'authDetails' => null,
        'headers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eventType' => false,
        'eventVersion' => false,
        'resourceName' => false,
        'eventUrl' => false,
        'authDetails' => false,
        'headers' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'eventType' => 'eventType',
        'eventVersion' => 'eventVersion',
        'resourceName' => 'resourceName',
        'eventUrl' => 'eventUrl',
        'authDetails' => 'authDetails',
        'headers' => 'headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'eventType' => 'setEventType',
        'eventVersion' => 'setEventVersion',
        'resourceName' => 'setResourceName',
        'eventUrl' => 'setEventUrl',
        'authDetails' => 'setAuthDetails',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'eventType' => 'getEventType',
        'eventVersion' => 'getEventVersion',
        'resourceName' => 'getResourceName',
        'eventUrl' => 'getEventUrl',
        'authDetails' => 'getAuthDetails',
        'headers' => 'getHeaders'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('eventType', $data ?? [], null);
        $this->setIfExists('eventVersion', $data ?? [], null);
        $this->setIfExists('resourceName', $data ?? [], null);
        $this->setIfExists('eventUrl', $data ?? [], null);
        $this->setIfExists('authDetails', $data ?? [], null);
        $this->setIfExists('headers', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if ($this->container['eventVersion'] === null) {
            $invalidProperties[] = "'eventVersion' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['eventUrl'] === null) {
            $invalidProperties[] = "'eventUrl' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets eventType
     *
     * @return string
    
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string $eventType Event that you want to subscribe to
     *
     * @return self
    
     */
    public function setEventType($eventType)
    {
        if (is_null($eventType)) {
            throw new \InvalidArgumentException('non-nullable eventType cannot be null');
        }

        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
     * Gets eventVersion
     *
     * @return string
    
     */
    public function getEventVersion()
    {
        return $this->container['eventVersion'];
    }

    /**
     * Sets eventVersion
     *
     * @param string $eventVersion Version of the specific event type
     *
     * @return self
    
     */
    public function setEventVersion($eventVersion)
    {
        if (is_null($eventVersion)) {
            throw new \InvalidArgumentException('non-nullable eventVersion cannot be null');
        }

        $this->container['eventVersion'] = $eventVersion;
        return $this;
    }

    /**
     * Gets resourceName
     *
     * @return string
    
     */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
     * Sets resourceName
     *
     * @param string $resourceName Functional category that event type is mapped to.
     *
     * @return self
    
     */
    public function setResourceName($resourceName)
    {
        if (is_null($resourceName)) {
            throw new \InvalidArgumentException('non-nullable resourceName cannot be null');
        }

        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
     * Gets eventUrl
     *
     * @return string
    
     */
    public function getEventUrl()
    {
        return $this->container['eventUrl'];
    }

    /**
     * Sets eventUrl
     *
     * @param string $eventUrl Destination URL where notification will be received by seller
     *
     * @return self
    
     */
    public function setEventUrl($eventUrl)
    {
        if (is_null($eventUrl)) {
            throw new \InvalidArgumentException('non-nullable eventUrl cannot be null');
        }

        $this->container['eventUrl'] = $eventUrl;
        return $this;
    }

    /**
     * Gets authDetails
     *
     * @return \Walmart\Model\MP\US\Notifications\TestNotificationRequestAuthDetails|null
    
     */
    public function getAuthDetails()
    {
        return $this->container['authDetails'];
    }

    /**
     * Sets authDetails
     *
     * @param \Walmart\Model\MP\US\Notifications\TestNotificationRequestAuthDetails|null $authDetails authDetails
     *
     * @return self
    
     */
    public function setAuthDetails($authDetails)
    {
        if (is_null($authDetails)) {
            throw new \InvalidArgumentException('non-nullable authDetails cannot be null');
        }

        $this->container['authDetails'] = $authDetails;
        return $this;
    }

    /**
     * Gets headers
     *
     * @return \Walmart\Model\MP\US\Notifications\TestNotificationRequestHeaders|null
    
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \Walmart\Model\MP\US\Notifications\TestNotificationRequestHeaders|null $headers headers
     *
     * @return self
    
     */
    public function setHeaders($headers)
    {
        if (is_null($headers)) {
            throw new \InvalidArgumentException('non-nullable headers cannot be null');
        }

        $this->container['headers'] = $headers;
        return $this;
    }
}



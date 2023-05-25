<?php

/**
 * OriginLocation
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Fulfillment;
use Walmart\Model\BaseModel;

/**
 * OriginLocation Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OriginLocation extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OriginLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'locationName' => 'string',
        'address' => '\Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocationAddress',
        'locationId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'locationName' => null,
        'address' => null,
        'locationId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'locationName' => false,
        'address' => false,
        'locationId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'locationName' => 'locationName',
        'address' => 'address',
        'locationId' => 'locationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'locationName' => 'setLocationName',
        'address' => 'setAddress',
        'locationId' => 'setLocationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'locationName' => 'getLocationName',
        'address' => 'getAddress',
        'locationId' => 'getLocationId'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('locationName', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('locationId', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locationName'] === null) {
            $invalidProperties[] = "'locationName' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets locationName
     *
     * @return string
    
     */
    public function getLocationName()
    {
        return $this->container['locationName'];
    }

    /**
     * Sets locationName
     *
     * @param string $locationName locationName
     *
     * @return self
    
     */
    public function setLocationName($locationName)
    {
        if (is_null($locationName)) {
            throw new \InvalidArgumentException('non-nullable locationName cannot be null');
        }

        $this->container['locationName'] = $locationName;
        return $this;
    }

    /**
     * Gets address
     *
     * @return \Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocationAddress
    
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseOriginLocationAddress $address address
     *
     * @return self
    
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;
        return $this;
    }

    /**
     * Gets locationId
     *
     * @return string|null
    
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param string|null $locationId locationId
     *
     * @return self
    
     */
    public function setLocationId($locationId)
    {
        if (is_null($locationId)) {
            throw new \InvalidArgumentException('non-nullable locationId cannot be null');
        }

        $this->container['locationId'] = $locationId;
        return $this;
    }
}



<?php

/**
 * CarrierInfoList
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Returns;
use Walmart\Model\BaseModel;

/**
 * CarrierInfoList Class Doc Comment
 *
 * @category Class

 * @description Carrier information for the return

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CarrierInfoList extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierInfoList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'carrierId' => 'string',
        'carrierName' => 'string',
        'serviceType' => 'string',
        'trackingNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'carrierId' => null,
        'carrierName' => null,
        'serviceType' => null,
        'trackingNo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'carrierId' => false,
        'carrierName' => false,
        'serviceType' => false,
        'trackingNo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrierId' => 'carrierId',
        'carrierName' => 'carrierName',
        'serviceType' => 'serviceType',
        'trackingNo' => 'trackingNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrierId' => 'setCarrierId',
        'carrierName' => 'setCarrierName',
        'serviceType' => 'setServiceType',
        'trackingNo' => 'setTrackingNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrierId' => 'getCarrierId',
        'carrierName' => 'getCarrierName',
        'serviceType' => 'getServiceType',
        'trackingNo' => 'getTrackingNo'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('carrierId', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
        $this->setIfExists('serviceType', $data ?? [], null);
        $this->setIfExists('trackingNo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }
    /**
     * Gets carrierId
     *
     * @return string|null
    
     */
    public function getCarrierId()
    {
        return $this->container['carrierId'];
    }

    /**
     * Sets carrierId
     *
     * @param string|null $carrierId ID of the carrier used for the return
     *
     * @return self
    
     */
    public function setCarrierId($carrierId)
    {
        if (is_null($carrierId)) {
            throw new \InvalidArgumentException('non-nullable carrierId cannot be null');
        }

        $this->container['carrierId'] = $carrierId;
        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string|null
    
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string|null $carrierName Name of the carrier used
     *
     * @return self
    
     */
    public function setCarrierName($carrierName)
    {
        if (is_null($carrierName)) {
            throw new \InvalidArgumentException('non-nullable carrierName cannot be null');
        }

        $this->container['carrierName'] = $carrierName;
        return $this;
    }

    /**
     * Gets serviceType
     *
     * @return string|null
    
     */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
     * Sets serviceType
     *
     * @param string|null $serviceType the type of service used
     *
     * @return self
    
     */
    public function setServiceType($serviceType)
    {
        if (is_null($serviceType)) {
            throw new \InvalidArgumentException('non-nullable serviceType cannot be null');
        }

        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Gets trackingNo
     *
     * @return string|null
    
     */
    public function getTrackingNo()
    {
        return $this->container['trackingNo'];
    }

    /**
     * Sets trackingNo
     *
     * @param string|null $trackingNo Tracking number of the order
     *
     * @return self
    
     */
    public function setTrackingNo($trackingNo)
    {
        if (is_null($trackingNo)) {
            throw new \InvalidArgumentException('non-nullable trackingNo cannot be null');
        }

        $this->container['trackingNo'] = $trackingNo;
        return $this;
    }
}



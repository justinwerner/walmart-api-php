<?php

/**
 * UpdateShipmentTrackingDetailsRequest
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
 * UpdateShipmentTrackingDetailsRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateShipmentTrackingDetailsRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateShipmentTrackingDetails_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentId' => 'string',
        'carrierName' => 'string',
        'trackingInfo' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentId' => null,
        'carrierName' => null,
        'trackingInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'carrierName' => false,
        'trackingInfo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentId' => 'shipmentId',
        'carrierName' => 'carrierName',
        'trackingInfo' => 'trackingInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentId' => 'setShipmentId',
        'carrierName' => 'setCarrierName',
        'trackingInfo' => 'setTrackingInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentId' => 'getShipmentId',
        'carrierName' => 'getCarrierName',
        'trackingInfo' => 'getTrackingInfo'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
        $this->setIfExists('trackingInfo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }
        if ($this->container['carrierName'] === null) {
            $invalidProperties[] = "'carrierName' can't be null";
        }





        if (!is_null($this->container['trackingInfo']) && (count($this->container['trackingInfo']) > 100)) {
            $invalidProperties[] = "invalid value for 'trackingInfo', number of items must be less than or equal to 100.";
        }


        if (!is_null($this->container['trackingInfo']) && (count($this->container['trackingInfo']) < 1)) {
            $invalidProperties[] = "invalid value for 'trackingInfo', number of items must be greater than or equal to 1.";
        }
        return $invalidProperties;
    }
    /**
     * Gets shipmentId
     *
     * @return string
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId shipmentId
     *
     * @return self
    
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }

        $this->container['shipmentId'] = $shipmentId;
        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string
    
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string $carrierName carrierName
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
     * Gets trackingInfo
     *
     * @return string[]|null
    
     */
    public function getTrackingInfo()
    {
        return $this->container['trackingInfo'];
    }

    /**
     * Sets trackingInfo
     *
     * @param string[]|null $trackingInfo trackingInfo
     *
     * @return self
    
     */
    public function setTrackingInfo($trackingInfo)
    {
        if (is_null($trackingInfo)) {
            throw new \InvalidArgumentException('non-nullable trackingInfo cannot be null');
        }





        if ((count($trackingInfo) > 100)) {
            throw new \InvalidArgumentException('invalid value for $trackingInfo when calling UpdateShipmentTrackingDetailsRequest., number of items must be less than or equal to 100.');
        }
        if ((count($trackingInfo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $trackingInfo when calling UpdateShipmentTrackingDetailsRequest., number of items must be greater than or equal to 1.');
        }

        $this->container['trackingInfo'] = $trackingInfo;
        return $this;
    }
}



<?php

/**
 * ShipOrderLines200ResponseOrderLinesOrderLineInnerFulfillment
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\DSV\US\Orders;
use Walmart\Model\BaseModel;

/**
 * ShipOrderLines200ResponseOrderLinesOrderLineInnerFulfillment Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipOrderLines200ResponseOrderLinesOrderLineInnerFulfillment extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shipOrderLines_200_response_orderLines_orderLine_inner_fulfillment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentOption' => 'string',
        'shipMethod' => 'string',
        'storeId' => 'string',
        'offerId' => 'string',
        'pickUpDateTime' => '\DateTime',
        'pickUpBy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentOption' => null,
        'shipMethod' => null,
        'storeId' => null,
        'offerId' => null,
        'pickUpDateTime' => 'date-time',
        'pickUpBy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentOption' => false,
        'shipMethod' => false,
        'storeId' => false,
        'offerId' => false,
        'pickUpDateTime' => false,
        'pickUpBy' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentOption' => 'fulfillmentOption',
        'shipMethod' => 'shipMethod',
        'storeId' => 'storeId',
        'offerId' => 'offerId',
        'pickUpDateTime' => 'pickUpDateTime',
        'pickUpBy' => 'pickUpBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentOption' => 'setFulfillmentOption',
        'shipMethod' => 'setShipMethod',
        'storeId' => 'setStoreId',
        'offerId' => 'setOfferId',
        'pickUpDateTime' => 'setPickUpDateTime',
        'pickUpBy' => 'setPickUpBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentOption' => 'getFulfillmentOption',
        'shipMethod' => 'getShipMethod',
        'storeId' => 'getStoreId',
        'offerId' => 'getOfferId',
        'pickUpDateTime' => 'getPickUpDateTime',
        'pickUpBy' => 'getPickUpBy'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentOption', $data ?? [], null);
        $this->setIfExists('shipMethod', $data ?? [], null);
        $this->setIfExists('storeId', $data ?? [], null);
        $this->setIfExists('offerId', $data ?? [], null);
        $this->setIfExists('pickUpDateTime', $data ?? [], null);
        $this->setIfExists('pickUpBy', $data ?? [], null);
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
     * Gets fulfillmentOption
     *
     * @return string|null
    
     */
    public function getFulfillmentOption()
    {
        return $this->container['fulfillmentOption'];
    }

    /**
     * Sets fulfillmentOption
     *
     * @param string|null $fulfillmentOption fulfillmentOption
     *
     * @return self
    
     */
    public function setFulfillmentOption($fulfillmentOption)
    {
        if (is_null($fulfillmentOption)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentOption cannot be null');
        }

        $this->container['fulfillmentOption'] = $fulfillmentOption;
        return $this;
    }

    /**
     * Gets shipMethod
     *
     * @return string|null
    
     */
    public function getShipMethod()
    {
        return $this->container['shipMethod'];
    }

    /**
     * Sets shipMethod
     *
     * @param string|null $shipMethod shipMethod
     *
     * @return self
    
     */
    public function setShipMethod($shipMethod)
    {
        if (is_null($shipMethod)) {
            throw new \InvalidArgumentException('non-nullable shipMethod cannot be null');
        }

        $this->container['shipMethod'] = $shipMethod;
        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
    
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId storeId
     *
     * @return self
    
     */
    public function setStoreId($storeId)
    {
        if (is_null($storeId)) {
            throw new \InvalidArgumentException('non-nullable storeId cannot be null');
        }

        $this->container['storeId'] = $storeId;
        return $this;
    }

    /**
     * Gets offerId
     *
     * @return string|null
    
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId offerId
     *
     * @return self
    
     */
    public function setOfferId($offerId)
    {
        if (is_null($offerId)) {
            throw new \InvalidArgumentException('non-nullable offerId cannot be null');
        }

        $this->container['offerId'] = $offerId;
        return $this;
    }

    /**
     * Gets pickUpDateTime
     *
     * @return \DateTime|null
    
     */
    public function getPickUpDateTime()
    {
        return $this->container['pickUpDateTime'];
    }

    /**
     * Sets pickUpDateTime
     *
     * @param \DateTime|null $pickUpDateTime pickUpDateTime
     *
     * @return self
    
     */
    public function setPickUpDateTime($pickUpDateTime)
    {
        if (is_null($pickUpDateTime)) {
            throw new \InvalidArgumentException('non-nullable pickUpDateTime cannot be null');
        }

        $this->container['pickUpDateTime'] = $pickUpDateTime;
        return $this;
    }

    /**
     * Gets pickUpBy
     *
     * @return string|null
    
     */
    public function getPickUpBy()
    {
        return $this->container['pickUpBy'];
    }

    /**
     * Sets pickUpBy
     *
     * @param string|null $pickUpBy pickUpBy
     *
     * @return self
    
     */
    public function setPickUpBy($pickUpBy)
    {
        if (is_null($pickUpBy)) {
            throw new \InvalidArgumentException('non-nullable pickUpBy cannot be null');
        }

        $this->container['pickUpBy'] = $pickUpBy;
        return $this;
    }
}



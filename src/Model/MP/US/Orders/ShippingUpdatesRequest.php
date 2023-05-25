<?php

/**
 * ShippingUpdatesRequest
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

namespace Walmart\Model\MP\US\Orders;
use Walmart\Model\BaseModel;

/**
 * ShippingUpdatesRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdatesRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderShipment' => '\Walmart\Model\MP\US\Orders\ShippingUpdatesRequestOrderShipment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderShipment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderShipment' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderShipment' => 'orderShipment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderShipment' => 'setOrderShipment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderShipment' => 'getOrderShipment'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderShipment', $data ?? [], null);
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
     * Gets orderShipment
     *
     * @return \Walmart\Model\MP\US\Orders\ShippingUpdatesRequestOrderShipment|null
    
     */
    public function getOrderShipment()
    {
        return $this->container['orderShipment'];
    }

    /**
     * Sets orderShipment
     *
     * @param \Walmart\Model\MP\US\Orders\ShippingUpdatesRequestOrderShipment|null $orderShipment orderShipment
     *
     * @return self
    
     */
    public function setOrderShipment($orderShipment)
    {
        if (is_null($orderShipment)) {
            throw new \InvalidArgumentException('non-nullable orderShipment cannot be null');
        }

        $this->container['orderShipment'] = $orderShipment;
        return $this;
    }
}



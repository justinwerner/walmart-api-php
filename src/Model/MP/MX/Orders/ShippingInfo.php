<?php

/**
 * ShippingInfo
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

namespace Walmart\Model\MP\MX\Orders;
use Walmart\Model\BaseModel;

/**
 * ShippingInfo Class Doc Comment
 *
 * @category Class

 * @description The shipping information provided by the customer to the seller

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'phone' => 'string',
        'estimatedDeliveryDate' => 'string',
        'postalAddress' => '\Walmart\Model\MP\MX\Orders\GetAllOrders200ResponseOrderInnerShippingInfoPostalAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'phone' => null,
        'estimatedDeliveryDate' => null,
        'postalAddress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phone' => false,
        'estimatedDeliveryDate' => false,
        'postalAddress' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'phone' => 'phone',
        'estimatedDeliveryDate' => 'estimatedDeliveryDate',
        'postalAddress' => 'postalAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'phone' => 'setPhone',
        'estimatedDeliveryDate' => 'setEstimatedDeliveryDate',
        'postalAddress' => 'setPostalAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'phone' => 'getPhone',
        'estimatedDeliveryDate' => 'getEstimatedDeliveryDate',
        'postalAddress' => 'getPostalAddress'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('estimatedDeliveryDate', $data ?? [], null);
        $this->setIfExists('postalAddress', $data ?? [], null);
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
     * Gets phone
     *
     * @return string|null
    
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The customer's phone number
     *
     * @return self
    
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }

        $this->container['phone'] = $phone;
        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return string|null
    
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param string|null $estimatedDeliveryDate Estimated delivery date
     *
     * @return self
    
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        if (is_null($estimatedDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable estimatedDeliveryDate cannot be null');
        }

        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;
        return $this;
    }

    /**
     * Gets postalAddress
     *
     * @return \Walmart\Model\MP\MX\Orders\GetAllOrders200ResponseOrderInnerShippingInfoPostalAddress|null
    
     */
    public function getPostalAddress()
    {
        return $this->container['postalAddress'];
    }

    /**
     * Sets postalAddress
     *
     * @param \Walmart\Model\MP\MX\Orders\GetAllOrders200ResponseOrderInnerShippingInfoPostalAddress|null $postalAddress postalAddress
     *
     * @return self
    
     */
    public function setPostalAddress($postalAddress)
    {
        if (is_null($postalAddress)) {
            throw new \InvalidArgumentException('non-nullable postalAddress cannot be null');
        }

        $this->container['postalAddress'] = $postalAddress;
        return $this;
    }
}



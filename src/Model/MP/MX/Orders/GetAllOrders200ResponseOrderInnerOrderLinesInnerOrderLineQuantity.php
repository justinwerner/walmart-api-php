<?php

/**
 * GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineQuantity
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
 * GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineQuantity Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllOrders200ResponseOrderInnerOrderLinesInnerOrderLineQuantity extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllOrders_200_response_order_inner_orderLines_inner_orderLineQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'unitOfMeasurement' => 'string',
        'amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'unitOfMeasurement' => null,
        'amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'unitOfMeasurement' => false,
        'amount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'unitOfMeasurement' => 'unitOfMeasurement',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'unitOfMeasurement' => 'setUnitOfMeasurement',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'unitOfMeasurement' => 'getUnitOfMeasurement',
        'amount' => 'getAmount'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('unitOfMeasurement', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
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
     * Gets unitOfMeasurement
     *
     * @return string|null
    
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unitOfMeasurement'];
    }

    /**
     * Sets unitOfMeasurement
     *
     * @param string|null $unitOfMeasurement The unit with which the orderLine is measured
     *
     * @return self
    
     */
    public function setUnitOfMeasurement($unitOfMeasurement)
    {
        if (is_null($unitOfMeasurement)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasurement cannot be null');
        }

        $this->container['unitOfMeasurement'] = $unitOfMeasurement;
        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
    
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount The amount with witch the orderLine is measured along with unitofMeasurement
     *
     * @return self
    
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;
        return $this;
    }
}



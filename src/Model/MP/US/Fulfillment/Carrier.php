<?php

/**
 * Carrier
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
 * Carrier Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Carrier extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Carrier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'carrierId' => 'string',
        'carrierName' => 'string'
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
        'carrierName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'carrierId' => false,
        'carrierName' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrierId' => 'carrierId',
        'carrierName' => 'carrierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrierId' => 'setCarrierId',
        'carrierName' => 'setCarrierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrierId' => 'getCarrierId',
        'carrierName' => 'getCarrierName'
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
     * @param string|null $carrierId carrierId
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
     * @param string|null $carrierName carrierName
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
}



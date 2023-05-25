<?php

/**
 * RepricerEntityCollectionResponse
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Prices;
use Walmart\Model\BaseModel;

/**
 * RepricerEntityCollectionResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RepricerEntityCollectionResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RepricerEntityCollectionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'totalElements' => 'int',
        'strategyCollections' => '\Walmart\Model\MP\US\Prices\GetStrategies200ResponseStrategyCollectionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'totalElements' => 'int32',
        'strategyCollections' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'totalElements' => false,
        'strategyCollections' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'totalElements' => 'totalElements',
        'strategyCollections' => 'strategyCollections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'totalElements' => 'setTotalElements',
        'strategyCollections' => 'setStrategyCollections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'totalElements' => 'getTotalElements',
        'strategyCollections' => 'getStrategyCollections'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('totalElements', $data ?? [], null);
        $this->setIfExists('strategyCollections', $data ?? [], null);
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
     * Gets totalElements
     *
     * @return int|null
    
     */
    public function getTotalElements()
    {
        return $this->container['totalElements'];
    }

    /**
     * Sets totalElements
     *
     * @param int|null $totalElements totalElements
     *
     * @return self
    
     */
    public function setTotalElements($totalElements)
    {
        if (is_null($totalElements)) {
            throw new \InvalidArgumentException('non-nullable totalElements cannot be null');
        }

        $this->container['totalElements'] = $totalElements;
        return $this;
    }

    /**
     * Gets strategyCollections
     *
     * @return \Walmart\Model\MP\US\Prices\GetStrategies200ResponseStrategyCollectionsInner[]|null
    
     */
    public function getStrategyCollections()
    {
        return $this->container['strategyCollections'];
    }

    /**
     * Sets strategyCollections
     *
     * @param \Walmart\Model\MP\US\Prices\GetStrategies200ResponseStrategyCollectionsInner[]|null $strategyCollections strategyCollections
     *
     * @return self
    
     */
    public function setStrategyCollections($strategyCollections)
    {
        if (is_null($strategyCollections)) {
            throw new \InvalidArgumentException('non-nullable strategyCollections cannot be null');
        }

        $this->container['strategyCollections'] = $strategyCollections;
        return $this;
    }
}



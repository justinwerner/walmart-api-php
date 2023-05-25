<?php

/**
 * FulfillmentPlan
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
 * FulfillmentPlan Class Doc Comment
 *
 * @category Class

 * @description Fulfillment plans details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FulfillmentPlan extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentModules' => '\Walmart\Model\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentModules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentModules' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentModules' => 'fulfillmentModules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentModules' => 'setFulfillmentModules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentModules' => 'getFulfillmentModules'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentModules', $data ?? [], null);
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
     * Gets fulfillmentModules
     *
     * @return \Walmart\Model\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInner[]|null
    
     */
    public function getFulfillmentModules()
    {
        return $this->container['fulfillmentModules'];
    }

    /**
     * Sets fulfillmentModules
     *
     * @param \Walmart\Model\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInner[]|null $fulfillmentModules Fulfillment module details.
     *
     * @return self
    
     */
    public function setFulfillmentModules($fulfillmentModules)
    {
        if (is_null($fulfillmentModules)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentModules cannot be null');
        }

        $this->container['fulfillmentModules'] = $fulfillmentModules;
        return $this;
    }
}



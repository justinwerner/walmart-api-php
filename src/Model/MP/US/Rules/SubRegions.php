<?php

/**
 * SubRegions
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Rules;
use Walmart\Model\BaseModel;

/**
 * SubRegions Class Doc Comment
 *
 * @category Class

 * @description List of two-day regions.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class SubRegions extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SubRegions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'regionCode' => 'string',
        'subRegions' => '\Walmart\Model\MP\US\Rules\UpdateShippingAreaToRuleRequestRulesActionsInnerTwoDayShippingRegionsInnerSubRegionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'regionCode' => null,
        'subRegions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'regionCode' => false,
        'subRegions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'regionCode' => 'regionCode',
        'subRegions' => 'subRegions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'regionCode' => 'setRegionCode',
        'subRegions' => 'setSubRegions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'regionCode' => 'getRegionCode',
        'subRegions' => 'getSubRegions'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('regionCode', $data ?? [], null);
        $this->setIfExists('subRegions', $data ?? [], null);
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
     * Gets regionCode
     *
     * @return string|null
    
     */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
     * Sets regionCode
     *
     * @param string|null $regionCode regionCode
     *
     * @return self
    
     */
    public function setRegionCode($regionCode)
    {
        if (is_null($regionCode)) {
            throw new \InvalidArgumentException('non-nullable regionCode cannot be null');
        }

        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
     * Gets subRegions
     *
     * @return \Walmart\Model\MP\US\Rules\UpdateShippingAreaToRuleRequestRulesActionsInnerTwoDayShippingRegionsInnerSubRegionsInner[]|null
    
     */
    public function getSubRegions()
    {
        return $this->container['subRegions'];
    }

    /**
     * Sets subRegions
     *
     * @param \Walmart\Model\MP\US\Rules\UpdateShippingAreaToRuleRequestRulesActionsInnerTwoDayShippingRegionsInnerSubRegionsInner[]|null $subRegions subRegions
     *
     * @return self
    
     */
    public function setSubRegions($subRegions)
    {
        if (is_null($subRegions)) {
            throw new \InvalidArgumentException('non-nullable subRegions cannot be null');
        }

        $this->container['subRegions'] = $subRegions;
        return $this;
    }
}



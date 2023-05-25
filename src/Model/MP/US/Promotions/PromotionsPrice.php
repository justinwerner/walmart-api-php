<?php

/**
 * PromotionsPrice
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Promotions;
use Walmart\Model\BaseModel;

/**
 * PromotionsPrice Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromotionsPrice extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PromotionsPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'value' => '\Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue',
        'uomType' => 'string',
        'minValue' => '\Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue',
        'maxValue' => '\Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue',
        'perUnitValue' => '\Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue',
        'minUnitValue' => '\Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue',
        'maxUnitValue' => '\Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'value' => null,
        'uomType' => null,
        'minValue' => null,
        'maxValue' => null,
        'perUnitValue' => null,
        'minUnitValue' => null,
        'maxUnitValue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'value' => false,
        'uomType' => false,
        'minValue' => false,
        'maxValue' => false,
        'perUnitValue' => false,
        'minUnitValue' => false,
        'maxUnitValue' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'value' => 'value',
        'uomType' => 'uomType',
        'minValue' => 'minValue',
        'maxValue' => 'maxValue',
        'perUnitValue' => 'perUnitValue',
        'minUnitValue' => 'minUnitValue',
        'maxUnitValue' => 'maxUnitValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'value' => 'setValue',
        'uomType' => 'setUomType',
        'minValue' => 'setMinValue',
        'maxValue' => 'setMaxValue',
        'perUnitValue' => 'setPerUnitValue',
        'minUnitValue' => 'setMinUnitValue',
        'maxUnitValue' => 'setMaxUnitValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'value' => 'getValue',
        'uomType' => 'getUomType',
        'minValue' => 'getMinValue',
        'maxValue' => 'getMaxValue',
        'perUnitValue' => 'getPerUnitValue',
        'minUnitValue' => 'getMinUnitValue',
        'maxUnitValue' => 'getMaxUnitValue'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('uomType', $data ?? [], null);
        $this->setIfExists('minValue', $data ?? [], null);
        $this->setIfExists('maxValue', $data ?? [], null);
        $this->setIfExists('perUnitValue', $data ?? [], null);
        $this->setIfExists('minUnitValue', $data ?? [], null);
        $this->setIfExists('maxUnitValue', $data ?? [], null);
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
     * Gets value
     *
     * @return \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null
    
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null $value value
     *
     * @return self
    
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        $this->container['value'] = $value;
        return $this;
    }

    /**
     * Gets uomType
     *
     * @return string|null
    
     */
    public function getUomType()
    {
        return $this->container['uomType'];
    }

    /**
     * Sets uomType
     *
     * @param string|null $uomType uomType
     *
     * @return self
    
     */
    public function setUomType($uomType)
    {
        if (is_null($uomType)) {
            throw new \InvalidArgumentException('non-nullable uomType cannot be null');
        }

        $this->container['uomType'] = $uomType;
        return $this;
    }

    /**
     * Gets minValue
     *
     * @return \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null
    
     */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
     * Sets minValue
     *
     * @param \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null $minValue minValue
     *
     * @return self
    
     */
    public function setMinValue($minValue)
    {
        if (is_null($minValue)) {
            throw new \InvalidArgumentException('non-nullable minValue cannot be null');
        }

        $this->container['minValue'] = $minValue;
        return $this;
    }

    /**
     * Gets maxValue
     *
     * @return \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null
    
     */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
     * Sets maxValue
     *
     * @param \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null $maxValue maxValue
     *
     * @return self
    
     */
    public function setMaxValue($maxValue)
    {
        if (is_null($maxValue)) {
            throw new \InvalidArgumentException('non-nullable maxValue cannot be null');
        }

        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
     * Gets perUnitValue
     *
     * @return \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null
    
     */
    public function getPerUnitValue()
    {
        return $this->container['perUnitValue'];
    }

    /**
     * Sets perUnitValue
     *
     * @param \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null $perUnitValue perUnitValue
     *
     * @return self
    
     */
    public function setPerUnitValue($perUnitValue)
    {
        if (is_null($perUnitValue)) {
            throw new \InvalidArgumentException('non-nullable perUnitValue cannot be null');
        }

        $this->container['perUnitValue'] = $perUnitValue;
        return $this;
    }

    /**
     * Gets minUnitValue
     *
     * @return \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null
    
     */
    public function getMinUnitValue()
    {
        return $this->container['minUnitValue'];
    }

    /**
     * Sets minUnitValue
     *
     * @param \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null $minUnitValue minUnitValue
     *
     * @return self
    
     */
    public function setMinUnitValue($minUnitValue)
    {
        if (is_null($minUnitValue)) {
            throw new \InvalidArgumentException('non-nullable minUnitValue cannot be null');
        }

        $this->container['minUnitValue'] = $minUnitValue;
        return $this;
    }

    /**
     * Gets maxUnitValue
     *
     * @return \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null
    
     */
    public function getMaxUnitValue()
    {
        return $this->container['maxUnitValue'];
    }

    /**
     * Sets maxUnitValue
     *
     * @param \Walmart\Model\MP\US\Promotions\GetPromotionalPrices200ResponsePayloadPricingListPricingInnerCurrentPriceValue|null $maxUnitValue maxUnitValue
     *
     * @return self
    
     */
    public function setMaxUnitValue($maxUnitValue)
    {
        if (is_null($maxUnitValue)) {
            throw new \InvalidArgumentException('non-nullable maxUnitValue cannot be null');
        }

        $this->container['maxUnitValue'] = $maxUnitValue;
        return $this;
    }
}



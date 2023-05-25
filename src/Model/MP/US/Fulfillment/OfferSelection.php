<?php

/**
 * OfferSelection
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
 * OfferSelection Class Doc Comment
 *
 * @category Class

 * @description Offer Selection details. List of offers - number of offer inside offer selection should be less than or equal to 30.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OfferSelection extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OfferSelection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'offers' => '\Walmart\Model\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInnerOffersInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'offers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offers' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'offers' => 'offers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'offers' => 'setOffers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'offers' => 'getOffers'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offers', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['offers'] === null) {
            $invalidProperties[] = "'offers' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets offers
     *
     * @return \Walmart\Model\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInnerOffersInner[]
    
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \Walmart\Model\MP\US\Fulfillment\PromiseFulfillmentsRequestPayloadOfferSelectionsInnerOffersInner[] $offers Offer details. List of an items/vendor sku.
     *
     * @return self
    
     */
    public function setOffers($offers)
    {
        if (is_null($offers)) {
            throw new \InvalidArgumentException('non-nullable offers cannot be null');
        }

        $this->container['offers'] = $offers;
        return $this;
    }
}



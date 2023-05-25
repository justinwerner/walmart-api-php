<?php

/**
 * GetSearchResult200ResponseItemsInnerPropertiesVariants
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Items;
use Walmart\Model\BaseModel;

/**
 * GetSearchResult200ResponseItemsInnerPropertiesVariants Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetSearchResult200ResponseItemsInnerPropertiesVariants extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getSearchResult_200_response_items_inner_properties_variants';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'variantMeta' => '\Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariantsVariantMetaInner[]',
        'variantData' => '\Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariantsVariantDataInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'variantMeta' => null,
        'variantData' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'variantMeta' => false,
        'variantData' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'variantMeta' => 'variantMeta',
        'variantData' => 'variantData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'variantMeta' => 'setVariantMeta',
        'variantData' => 'setVariantData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'variantMeta' => 'getVariantMeta',
        'variantData' => 'getVariantData'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('variantMeta', $data ?? [], null);
        $this->setIfExists('variantData', $data ?? [], null);
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
     * Gets variantMeta
     *
     * @return \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariantsVariantMetaInner[]|null
    
     */
    public function getVariantMeta()
    {
        return $this->container['variantMeta'];
    }

    /**
     * Sets variantMeta
     *
     * @param \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariantsVariantMetaInner[]|null $variantMeta variantMeta
     *
     * @return self
    
     */
    public function setVariantMeta($variantMeta)
    {
        if (is_null($variantMeta)) {
            throw new \InvalidArgumentException('non-nullable variantMeta cannot be null');
        }

        $this->container['variantMeta'] = $variantMeta;
        return $this;
    }

    /**
     * Gets variantData
     *
     * @return \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariantsVariantDataInner[]|null
    
     */
    public function getVariantData()
    {
        return $this->container['variantData'];
    }

    /**
     * Sets variantData
     *
     * @param \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPropertiesVariantsVariantDataInner[]|null $variantData variantData
     *
     * @return self
    
     */
    public function setVariantData($variantData)
    {
        if (is_null($variantData)) {
            throw new \InvalidArgumentException('non-nullable variantData cannot be null');
        }

        $this->container['variantData'] = $variantData;
        return $this;
    }
}



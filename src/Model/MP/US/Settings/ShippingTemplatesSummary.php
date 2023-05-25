<?php

/**
 * ShippingTemplatesSummary
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Settings;
use Walmart\Model\BaseModel;

/**
 * ShippingTemplatesSummary Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingTemplatesSummary extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingTemplatesSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shippingTemplates' => '\Walmart\Model\MP\US\Settings\GetAllShippingTemplates200ResponseShippingTemplatesInner[]',
        'totalRecords' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shippingTemplates' => null,
        'totalRecords' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shippingTemplates' => false,
        'totalRecords' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shippingTemplates' => 'shippingTemplates',
        'totalRecords' => 'totalRecords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shippingTemplates' => 'setShippingTemplates',
        'totalRecords' => 'setTotalRecords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shippingTemplates' => 'getShippingTemplates',
        'totalRecords' => 'getTotalRecords'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shippingTemplates', $data ?? [], null);
        $this->setIfExists('totalRecords', $data ?? [], null);
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
     * Gets shippingTemplates
     *
     * @return \Walmart\Model\MP\US\Settings\GetAllShippingTemplates200ResponseShippingTemplatesInner[]|null
    
     */
    public function getShippingTemplates()
    {
        return $this->container['shippingTemplates'];
    }

    /**
     * Sets shippingTemplates
     *
     * @param \Walmart\Model\MP\US\Settings\GetAllShippingTemplates200ResponseShippingTemplatesInner[]|null $shippingTemplates Array of Shipping Templates
     *
     * @return self
    
     */
    public function setShippingTemplates($shippingTemplates)
    {
        if (is_null($shippingTemplates)) {
            throw new \InvalidArgumentException('non-nullable shippingTemplates cannot be null');
        }

        $this->container['shippingTemplates'] = $shippingTemplates;
        return $this;
    }

    /**
     * Gets totalRecords
     *
     * @return float|null
    
     */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
     * Sets totalRecords
     *
     * @param float|null $totalRecords Total Number of records in the response of the API
     *
     * @return self
    
     */
    public function setTotalRecords($totalRecords)
    {
        if (is_null($totalRecords)) {
            throw new \InvalidArgumentException('non-nullable totalRecords cannot be null');
        }

        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }
}



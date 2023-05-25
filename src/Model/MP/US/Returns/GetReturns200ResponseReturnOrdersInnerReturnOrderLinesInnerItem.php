<?php

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItem
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Returns;
use Walmart\Model\BaseModel;

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItem Class Doc Comment
 *
 * @category Class

 * @description Details of the item to be returned

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getReturns_200_response_returnOrders_inner_returnOrderLines_inner_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'productName' => 'string',
        'itemWeight' => '\Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItemItemWeight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'productName' => null,
        'itemWeight' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'productName' => false,
        'itemWeight' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'productName' => 'productName',
        'itemWeight' => 'itemWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'productName' => 'setProductName',
        'itemWeight' => 'setItemWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'productName' => 'getProductName',
        'itemWeight' => 'getItemWeight'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('itemWeight', $data ?? [], null);
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
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName The name of the product associated with the line item. Example: 'Kenmore CF1' or '2086883 Canister Secondary Filter Generic 2 Pack'
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets itemWeight
     *
     * @return \Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItemItemWeight|null
    
     */
    public function getItemWeight()
    {
        return $this->container['itemWeight'];
    }

    /**
     * Sets itemWeight
     *
     * @param \Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItemItemWeight|null $itemWeight itemWeight
     *
     * @return self
    
     */
    public function setItemWeight($itemWeight)
    {
        if (is_null($itemWeight)) {
            throw new \InvalidArgumentException('non-nullable itemWeight cannot be null');
        }

        $this->container['itemWeight'] = $itemWeight;
        return $this;
    }
}



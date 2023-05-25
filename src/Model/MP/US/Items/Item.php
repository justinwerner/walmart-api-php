<?php

/**
 * Item
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
 * Item Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Item extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemId' => 'string',
        'isMarketPlaceItem' => 'bool',
        'images' => '\Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerImagesInner[]',
        'customerRating' => 'string',
        'price' => '\Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPrice',
        'description' => 'string',
        'title' => 'string',
        'brand' => 'string',
        'productType' => 'string',
        'properties' => '\Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerProperties'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemId' => null,
        'isMarketPlaceItem' => null,
        'images' => null,
        'customerRating' => null,
        'price' => null,
        'description' => null,
        'title' => null,
        'brand' => null,
        'productType' => null,
        'properties' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemId' => false,
        'isMarketPlaceItem' => false,
        'images' => false,
        'customerRating' => false,
        'price' => false,
        'description' => false,
        'title' => false,
        'brand' => false,
        'productType' => false,
        'properties' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemId' => 'itemId',
        'isMarketPlaceItem' => 'isMarketPlaceItem',
        'images' => 'images',
        'customerRating' => 'customerRating',
        'price' => 'price',
        'description' => 'description',
        'title' => 'title',
        'brand' => 'brand',
        'productType' => 'productType',
        'properties' => 'properties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemId' => 'setItemId',
        'isMarketPlaceItem' => 'setIsMarketPlaceItem',
        'images' => 'setImages',
        'customerRating' => 'setCustomerRating',
        'price' => 'setPrice',
        'description' => 'setDescription',
        'title' => 'setTitle',
        'brand' => 'setBrand',
        'productType' => 'setProductType',
        'properties' => 'setProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemId' => 'getItemId',
        'isMarketPlaceItem' => 'getIsMarketPlaceItem',
        'images' => 'getImages',
        'customerRating' => 'getCustomerRating',
        'price' => 'getPrice',
        'description' => 'getDescription',
        'title' => 'getTitle',
        'brand' => 'getBrand',
        'productType' => 'getProductType',
        'properties' => 'getProperties'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('isMarketPlaceItem', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('customerRating', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
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
     * Gets itemId
     *
     * @return string|null
    
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId Specifies the item identifier generated by Walmart.
     *
     * @return self
    
     */
    public function setItemId($itemId)
    {
        if (is_null($itemId)) {
            throw new \InvalidArgumentException('non-nullable itemId cannot be null');
        }

        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
     * Gets isMarketPlaceItem
     *
     * @return bool|null
    
     */
    public function getIsMarketPlaceItem()
    {
        return $this->container['isMarketPlaceItem'];
    }

    /**
     * Sets isMarketPlaceItem
     *
     * @param bool|null $isMarketPlaceItem Specifies whether or not this item is available by other sellers in the Marketplace.
     *
     * @return self
    
     */
    public function setIsMarketPlaceItem($isMarketPlaceItem)
    {
        if (is_null($isMarketPlaceItem)) {
            throw new \InvalidArgumentException('non-nullable isMarketPlaceItem cannot be null');
        }

        $this->container['isMarketPlaceItem'] = $isMarketPlaceItem;
        return $this;
    }

    /**
     * Gets images
     *
     * @return \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerImagesInner[]|null
    
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerImagesInner[]|null $images Provides images associated with the item product listing.
     *
     * @return self
    
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }

        $this->container['images'] = $images;
        return $this;
    }

    /**
     * Gets customerRating
     *
     * @return string|null
    
     */
    public function getCustomerRating()
    {
        return $this->container['customerRating'];
    }

    /**
     * Sets customerRating
     *
     * @param string|null $customerRating customerRating
     *
     * @return self
    
     */
    public function setCustomerRating($customerRating)
    {
        if (is_null($customerRating)) {
            throw new \InvalidArgumentException('non-nullable customerRating cannot be null');
        }

        $this->container['customerRating'] = $customerRating;
        return $this;
    }

    /**
     * Gets price
     *
     * @return \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPrice|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerPrice|null $price price
     *
     * @return self
    
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Specifies the catalog item description.
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
    
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Provides the seller-specified alphanumeric string that uniquely identifies the product name. Example: 'Sterling Silver Blue Diamond Heart Pendant with 18in Chain'.
     *
     * @return self
    
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;
        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
    
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Specifies the item brand.
     *
     * @return self
    
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }

        $this->container['brand'] = $brand;
        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
    
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType Provides the seller-specified alphanumeric string that uniquely identifies the Product Type. Example: 'Diamond'.
     *
     * @return self
    
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }

        $this->container['productType'] = $productType;
        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerProperties|null
    
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Walmart\Model\MP\US\Items\GetSearchResult200ResponseItemsInnerProperties|null $properties properties
     *
     * @return self
    
     */
    public function setProperties($properties)
    {
        if (is_null($properties)) {
            throw new \InvalidArgumentException('non-nullable properties cannot be null');
        }

        $this->container['properties'] = $properties;
        return $this;
    }
}



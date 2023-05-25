<?php

/**
 * FeedItemsHeaderRequestDTO
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
 * FeedItemsHeaderRequestDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedItemsHeaderRequestDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FeedItemsHeaderRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'processMode' => 'string',
        'subset' => 'string',
        'mart' => 'string',
        'sellingChannel' => 'string',
        'version' => 'string',
        'locale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'processMode' => null,
        'subset' => null,
        'mart' => null,
        'sellingChannel' => null,
        'version' => null,
        'locale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'processMode' => false,
        'subset' => false,
        'mart' => false,
        'sellingChannel' => false,
        'version' => false,
        'locale' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'processMode' => 'processMode',
        'subset' => 'subset',
        'mart' => 'mart',
        'sellingChannel' => 'sellingChannel',
        'version' => 'version',
        'locale' => 'locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'processMode' => 'setProcessMode',
        'subset' => 'setSubset',
        'mart' => 'setMart',
        'sellingChannel' => 'setSellingChannel',
        'version' => 'setVersion',
        'locale' => 'setLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'processMode' => 'getProcessMode',
        'subset' => 'getSubset',
        'mart' => 'getMart',
        'sellingChannel' => 'getSellingChannel',
        'version' => 'getVersion',
        'locale' => 'getLocale'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('processMode', $data ?? [], null);
        $this->setIfExists('subset', $data ?? [], null);
        $this->setIfExists('mart', $data ?? [], null);
        $this->setIfExists('sellingChannel', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
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
     * Gets processMode
     *
     * @return string|null
    
     */
    public function getProcessMode()
    {
        return $this->container['processMode'];
    }

    /**
     * Sets processMode
     *
     * @param string|null $processMode processMode
     *
     * @return self
    
     */
    public function setProcessMode($processMode)
    {
        if (is_null($processMode)) {
            throw new \InvalidArgumentException('non-nullable processMode cannot be null');
        }

        $this->container['processMode'] = $processMode;
        return $this;
    }

    /**
     * Gets subset
     *
     * @return string|null
    
     */
    public function getSubset()
    {
        return $this->container['subset'];
    }

    /**
     * Sets subset
     *
     * @param string|null $subset subset
     *
     * @return self
    
     */
    public function setSubset($subset)
    {
        if (is_null($subset)) {
            throw new \InvalidArgumentException('non-nullable subset cannot be null');
        }

        $this->container['subset'] = $subset;
        return $this;
    }

    /**
     * Gets mart
     *
     * @return string|null
    
     */
    public function getMart()
    {
        return $this->container['mart'];
    }

    /**
     * Sets mart
     *
     * @param string|null $mart mart
     *
     * @return self
    
     */
    public function setMart($mart)
    {
        if (is_null($mart)) {
            throw new \InvalidArgumentException('non-nullable mart cannot be null');
        }

        $this->container['mart'] = $mart;
        return $this;
    }

    /**
     * Gets sellingChannel
     *
     * @return string|null
    
     */
    public function getSellingChannel()
    {
        return $this->container['sellingChannel'];
    }

    /**
     * Sets sellingChannel
     *
     * @param string|null $sellingChannel sellingChannel
     *
     * @return self
    
     */
    public function setSellingChannel($sellingChannel)
    {
        if (is_null($sellingChannel)) {
            throw new \InvalidArgumentException('non-nullable sellingChannel cannot be null');
        }

        $this->container['sellingChannel'] = $sellingChannel;
        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
    
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
    
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        $this->container['version'] = $version;
        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
    
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
    
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }

        $this->container['locale'] = $locale;
        return $this;
    }
}



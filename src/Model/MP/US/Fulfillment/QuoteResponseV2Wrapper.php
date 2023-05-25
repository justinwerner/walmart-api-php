<?php

/**
 * QuoteResponseV2Wrapper
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
 * QuoteResponseV2Wrapper Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class QuoteResponseV2Wrapper extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'QuoteResponseV2Wrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentId' => 'string',
        'shipmentNumber' => 'string',
        'rateQuotes' => '\Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseRateQuote[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentId' => null,
        'shipmentNumber' => null,
        'rateQuotes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'shipmentNumber' => false,
        'rateQuotes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentId' => 'shipmentId',
        'shipmentNumber' => 'shipmentNumber',
        'rateQuotes' => 'rateQuotes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentId' => 'setShipmentId',
        'shipmentNumber' => 'setShipmentNumber',
        'rateQuotes' => 'setRateQuotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentId' => 'getShipmentId',
        'shipmentNumber' => 'getShipmentNumber',
        'rateQuotes' => 'getRateQuotes'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('shipmentNumber', $data ?? [], null);
        $this->setIfExists('rateQuotes', $data ?? [], null);
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
     * Gets shipmentId
     *
     * @return string|null
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string|null $shipmentId shipmentId
     *
     * @return self
    
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }

        $this->container['shipmentId'] = $shipmentId;
        return $this;
    }

    /**
     * Gets shipmentNumber
     *
     * @return string|null
    
     */
    public function getShipmentNumber()
    {
        return $this->container['shipmentNumber'];
    }

    /**
     * Sets shipmentNumber
     *
     * @param string|null $shipmentNumber shipmentNumber
     *
     * @return self
    
     */
    public function setShipmentNumber($shipmentNumber)
    {
        if (is_null($shipmentNumber)) {
            throw new \InvalidArgumentException('non-nullable shipmentNumber cannot be null');
        }

        $this->container['shipmentNumber'] = $shipmentNumber;
        return $this;
    }

    /**
     * Gets rateQuotes
     *
     * @return \Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseRateQuote[]|null
    
     */
    public function getRateQuotes()
    {
        return $this->container['rateQuotes'];
    }

    /**
     * Sets rateQuotes
     *
     * @param \Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseRateQuote[]|null $rateQuotes rateQuotes
     *
     * @return self
    
     */
    public function setRateQuotes($rateQuotes)
    {
        if (is_null($rateQuotes)) {
            throw new \InvalidArgumentException('non-nullable rateQuotes cannot be null');
        }

        $this->container['rateQuotes'] = $rateQuotes;
        return $this;
    }
}



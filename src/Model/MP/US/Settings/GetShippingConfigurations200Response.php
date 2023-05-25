<?php

/**
 * GetShippingConfigurations200Response
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
 * GetShippingConfigurations200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetShippingConfigurations200Response extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getShippingConfigurations_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'partner' => '\Walmart\Model\MP\US\Settings\GetShippingConfigurations200ResponsePartner',
        'configurations' => '\Walmart\Model\MP\US\Settings\GetShippingConfigurations200ResponseConfigurationsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'partner' => null,
        'configurations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'partner' => false,
        'configurations' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'partner' => 'partner',
        'configurations' => 'configurations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'partner' => 'setPartner',
        'configurations' => 'setConfigurations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'partner' => 'getPartner',
        'configurations' => 'getConfigurations'
    ];
    /**
     * Array of response headers returned by the API
     *
     * @var string[][]
     */
    protected array $headers = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('partner', $data ?? [], null);
        $this->setIfExists('configurations', $data ?? [], null);
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
     * Gets API response headers (only relevant to response models)
     *
     * @return string[][]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string[]] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }


    /**
     * Gets partner
     *
     * @return \Walmart\Model\MP\US\Settings\GetShippingConfigurations200ResponsePartner|null
    
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Walmart\Model\MP\US\Settings\GetShippingConfigurations200ResponsePartner|null $partner partner
     *
     * @return self
    
     */
    public function setPartner($partner)
    {
        if (is_null($partner)) {
            throw new \InvalidArgumentException('non-nullable partner cannot be null');
        }

        $this->container['partner'] = $partner;
        return $this;
    }

    /**
     * Gets configurations
     *
     * @return \Walmart\Model\MP\US\Settings\GetShippingConfigurations200ResponseConfigurationsInner[]|null
    
     */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
     * Sets configurations
     *
     * @param \Walmart\Model\MP\US\Settings\GetShippingConfigurations200ResponseConfigurationsInner[]|null $configurations List of seller configurations like Lag Time
     *
     * @return self
    
     */
    public function setConfigurations($configurations)
    {
        if (is_null($configurations)) {
            throw new \InvalidArgumentException('non-nullable configurations cannot be null');
        }

        $this->container['configurations'] = $configurations;
        return $this;
    }
}



<?php

/**
 * GetCarriers200Response
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
 * International Shipping
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\CA\InternationalShipping;
use Walmart\Model\BaseModel;

/**
 * GetCarriers200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetCarriers200Response extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getCarriers_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'carriers' => '\Walmart\Model\MP\CA\InternationalShipping\GetCarriers200ResponseCarriersInner[]',
        'errors' => '\Walmart\Model\MP\CA\InternationalShipping\CreateLabel200ResponseErrorsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'carriers' => null,
        'errors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'carriers' => false,
        'errors' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carriers' => 'carriers',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'carriers' => 'setCarriers',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'carriers' => 'getCarriers',
        'errors' => 'getErrors'
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
        $this->setIfExists('carriers', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
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
     * Gets carriers
     *
     * @return \Walmart\Model\MP\CA\InternationalShipping\GetCarriers200ResponseCarriersInner[]|null
    
     */
    public function getCarriers()
    {
        return $this->container['carriers'];
    }

    /**
     * Sets carriers
     *
     * @param \Walmart\Model\MP\CA\InternationalShipping\GetCarriers200ResponseCarriersInner[]|null $carriers carriers
     *
     * @return self
    
     */
    public function setCarriers($carriers)
    {
        if (is_null($carriers)) {
            throw new \InvalidArgumentException('non-nullable carriers cannot be null');
        }

        $this->container['carriers'] = $carriers;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Model\MP\CA\InternationalShipping\CreateLabel200ResponseErrorsInner[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Model\MP\CA\InternationalShipping\CreateLabel200ResponseErrorsInner[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }
}



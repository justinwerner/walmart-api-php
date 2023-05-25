<?php

/**
 * GetAvailableReconReportDates200Response
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
 * Pregenerated Reports retiring on June 30, 2022 :
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Reports;
use Walmart\Model\BaseModel;

/**
 * GetAvailableReconReportDates200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAvailableReconReportDates200Response extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAvailableReconReportDates_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'availableApReportDates' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'availableApReportDates' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'availableApReportDates' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'availableApReportDates' => 'availableApReportDates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'availableApReportDates' => 'setAvailableApReportDates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'availableApReportDates' => 'getAvailableApReportDates'
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
        $this->setIfExists('availableApReportDates', $data ?? [], null);
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
     * Gets availableApReportDates
     *
     * @return string[]|null
    
     */
    public function getAvailableApReportDates()
    {
        return $this->container['availableApReportDates'];
    }

    /**
     * Sets availableApReportDates
     *
     * @param string[]|null $availableApReportDates All available report dates are returned
     *
     * @return self
    
     */
    public function setAvailableApReportDates($availableApReportDates)
    {
        if (is_null($availableApReportDates)) {
            throw new \InvalidArgumentException('non-nullable availableApReportDates cannot be null');
        }

        $this->container['availableApReportDates'] = $availableApReportDates;
        return $this;
    }
}



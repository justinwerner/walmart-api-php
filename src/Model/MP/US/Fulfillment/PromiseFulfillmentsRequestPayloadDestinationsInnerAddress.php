<?php

/**
 * PromiseFulfillmentsRequestPayloadDestinationsInnerAddress
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
 * PromiseFulfillmentsRequestPayloadDestinationsInnerAddress Class Doc Comment
 *
 * @category Class

 * @description Address details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseFulfillmentsRequestPayloadDestinationsInnerAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'promiseFulfillments_request_payload_destinations_inner_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'city' => 'string',
        'addressType' => 'string',
        'postalCode' => 'string',
        'addressLineOne' => 'string',
        'addressLineTwo' => 'string',
        'countryCode' => 'string',
        'stateCode' => 'string',
        'isPOBox' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'city' => null,
        'addressType' => null,
        'postalCode' => null,
        'addressLineOne' => null,
        'addressLineTwo' => null,
        'countryCode' => null,
        'stateCode' => null,
        'isPOBox' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'city' => false,
        'addressType' => false,
        'postalCode' => false,
        'addressLineOne' => false,
        'addressLineTwo' => false,
        'countryCode' => false,
        'stateCode' => false,
        'isPOBox' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'city' => 'city',
        'addressType' => 'addressType',
        'postalCode' => 'postalCode',
        'addressLineOne' => 'addressLineOne',
        'addressLineTwo' => 'addressLineTwo',
        'countryCode' => 'countryCode',
        'stateCode' => 'stateCode',
        'isPOBox' => 'isPOBox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'city' => 'setCity',
        'addressType' => 'setAddressType',
        'postalCode' => 'setPostalCode',
        'addressLineOne' => 'setAddressLineOne',
        'addressLineTwo' => 'setAddressLineTwo',
        'countryCode' => 'setCountryCode',
        'stateCode' => 'setStateCode',
        'isPOBox' => 'setIsPOBox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'city' => 'getCity',
        'addressType' => 'getAddressType',
        'postalCode' => 'getPostalCode',
        'addressLineOne' => 'getAddressLineOne',
        'addressLineTwo' => 'getAddressLineTwo',
        'countryCode' => 'getCountryCode',
        'stateCode' => 'getStateCode',
        'isPOBox' => 'getIsPOBox'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('addressType', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('addressLineOne', $data ?? [], null);
        $this->setIfExists('addressLineTwo', $data ?? [], null);
        $this->setIfExists('countryCode', $data ?? [], null);
        $this->setIfExists('stateCode', $data ?? [], null);
        $this->setIfExists('isPOBox', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ($this->container['stateCode'] === null) {
            $invalidProperties[] = "'stateCode' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets city
     *
     * @return string|null
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City where the address is located in.
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets addressType
     *
     * @return string|null
    
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     *
     * @param string|null $addressType The address type. For example: 'RESIDENTIAL'
     *
     * @return self
    
     */
    public function setAddressType($addressType)
    {
        if (is_null($addressType)) {
            throw new \InvalidArgumentException('non-nullable addressType cannot be null');
        }

        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode ZIP or postal code where the address is located in.
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        $this->container['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Gets addressLineOne
     *
     * @return string|null
    
     */
    public function getAddressLineOne()
    {
        return $this->container['addressLineOne'];
    }

    /**
     * Sets addressLineOne
     *
     * @param string|null $addressLineOne First line of the address.
     *
     * @return self
    
     */
    public function setAddressLineOne($addressLineOne)
    {
        if (is_null($addressLineOne)) {
            throw new \InvalidArgumentException('non-nullable addressLineOne cannot be null');
        }

        $this->container['addressLineOne'] = $addressLineOne;
        return $this;
    }

    /**
     * Gets addressLineTwo
     *
     * @return string|null
    
     */
    public function getAddressLineTwo()
    {
        return $this->container['addressLineTwo'];
    }

    /**
     * Sets addressLineTwo
     *
     * @param string|null $addressLineTwo Second line of the address.
     *
     * @return self
    
     */
    public function setAddressLineTwo($addressLineTwo)
    {
        if (is_null($addressLineTwo)) {
            throw new \InvalidArgumentException('non-nullable addressLineTwo cannot be null');
        }

        $this->container['addressLineTwo'] = $addressLineTwo;
        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
    
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode Country code where the address is located in.
     *
     * @return self
    
     */
    public function setCountryCode($countryCode)
    {
        if (is_null($countryCode)) {
            throw new \InvalidArgumentException('non-nullable countryCode cannot be null');
        }

        $this->container['countryCode'] = $countryCode;
        return $this;
    }

    /**
     * Gets stateCode
     *
     * @return string
    
     */
    public function getStateCode()
    {
        return $this->container['stateCode'];
    }

    /**
     * Sets stateCode
     *
     * @param string $stateCode State (two letter) code where the address is located in.
     *
     * @return self
    
     */
    public function setStateCode($stateCode)
    {
        if (is_null($stateCode)) {
            throw new \InvalidArgumentException('non-nullable stateCode cannot be null');
        }

        $this->container['stateCode'] = $stateCode;
        return $this;
    }

    /**
     * Gets isPOBox
     *
     * @return bool|null
    
     */
    public function getIsPOBox()
    {
        return $this->container['isPOBox'];
    }

    /**
     * Sets isPOBox
     *
     * @param bool|null $isPOBox PO box detail.
     *
     * @return self
    
     */
    public function setIsPOBox($isPOBox)
    {
        if (is_null($isPOBox)) {
            throw new \InvalidArgumentException('non-nullable isPOBox cannot be null');
        }

        $this->container['isPOBox'] = $isPOBox;
        return $this;
    }
}



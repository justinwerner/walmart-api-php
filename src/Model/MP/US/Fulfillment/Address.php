<?php

/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Address extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'stateCode' => 'string',
        'countryCode' => 'string',
        'postalCode' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'addressLine1' => null,
        'addressLine2' => null,
        'city' => null,
        'stateCode' => null,
        'countryCode' => null,
        'postalCode' => null,
        'phone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'addressLine1' => false,
        'addressLine2' => false,
        'city' => false,
        'stateCode' => false,
        'countryCode' => false,
        'postalCode' => false,
        'phone' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'city' => 'city',
        'stateCode' => 'stateCode',
        'countryCode' => 'countryCode',
        'postalCode' => 'postalCode',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'city' => 'setCity',
        'stateCode' => 'setStateCode',
        'countryCode' => 'setCountryCode',
        'postalCode' => 'setPostalCode',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'city' => 'getCity',
        'stateCode' => 'getStateCode',
        'countryCode' => 'getCountryCode',
        'postalCode' => 'getPostalCode',
        'phone' => 'getPhone'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('addressLine1', $data ?? [], null);
        $this->setIfExists('addressLine2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('stateCode', $data ?? [], null);
        $this->setIfExists('countryCode', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['stateCode'] === null) {
            $invalidProperties[] = "'stateCode' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets addressLine1
     *
     * @return string
    
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 addressLine1
     *
     * @return self
    
     */
    public function setAddressLine1($addressLine1)
    {
        if (is_null($addressLine1)) {
            throw new \InvalidArgumentException('non-nullable addressLine1 cannot be null');
        }

        $this->container['addressLine1'] = $addressLine1;
        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
    
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 addressLine2
     *
     * @return self
    
     */
    public function setAddressLine2($addressLine2)
    {
        if (is_null($addressLine2)) {
            throw new \InvalidArgumentException('non-nullable addressLine2 cannot be null');
        }

        $this->container['addressLine2'] = $addressLine2;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
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
     * @param string $stateCode stateCode
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
     * Gets countryCode
     *
     * @return string
    
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode countryCode
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
     * @param string $postalCode postalCode
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
     * Gets phone
     *
     * @return string|null
    
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
    
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }

        $this->container['phone'] = $phone;
        return $this;
    }
}



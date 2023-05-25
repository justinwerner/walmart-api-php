<?php

/**
 * CreateShippingTemplatesRequest
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
 * CreateShippingTemplatesRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateShippingTemplatesRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createShippingTemplates_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'type' => 'string',
        'rateModelType' => 'string',
        'status' => 'string',
        'shippingMethods' => '\Walmart\Model\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'type' => null,
        'rateModelType' => null,
        'status' => null,
        'shippingMethods' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'type' => false,
        'rateModelType' => false,
        'status' => false,
        'shippingMethods' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'type' => 'type',
        'rateModelType' => 'rateModelType',
        'status' => 'status',
        'shippingMethods' => 'shippingMethods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'rateModelType' => 'setRateModelType',
        'status' => 'setStatus',
        'shippingMethods' => 'setShippingMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'rateModelType' => 'getRateModelType',
        'status' => 'getStatus',
        'shippingMethods' => 'getShippingMethods'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('rateModelType', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('shippingMethods', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Shipping Template Name
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
    
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Shipping Template Type, should be CUSTOM or 3PL Specific
     *
     * @return self
    
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets rateModelType
     *
     * @return string|null
    
     */
    public function getRateModelType()
    {
        return $this->container['rateModelType'];
    }

    /**
     * Sets rateModelType
     *
     * @param string|null $rateModelType This is the shipping model type. TIERED_PRICING: This model means that you charge shipping based on the price of the item PER_SHIPMENT_PRICING: This model means that you charge shipping based on the weight of your items (per pound), or you charge shipping based on the number of items purchased in an order
     *
     * @return self
    
     */
    public function setRateModelType($rateModelType)
    {
        if (is_null($rateModelType)) {
            throw new \InvalidArgumentException('non-nullable rateModelType cannot be null');
        }

        $this->container['rateModelType'] = $rateModelType;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Shipping Template Status, Can be ACTIVE or INACTIVE status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets shippingMethods
     *
     * @return \Walmart\Model\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInner[]|null
    
     */
    public function getShippingMethods()
    {
        return $this->container['shippingMethods'];
    }

    /**
     * Sets shippingMethods
     *
     * @param \Walmart\Model\MP\US\Settings\GetShippingTemplateDetails200ResponseShippingMethodsInner[]|null $shippingMethods Array of different ship methods of a Shipping Template
     *
     * @return self
    
     */
    public function setShippingMethods($shippingMethods)
    {
        if (is_null($shippingMethods)) {
            throw new \InvalidArgumentException('non-nullable shippingMethods cannot be null');
        }

        $this->container['shippingMethods'] = $shippingMethods;
        return $this;
    }
}



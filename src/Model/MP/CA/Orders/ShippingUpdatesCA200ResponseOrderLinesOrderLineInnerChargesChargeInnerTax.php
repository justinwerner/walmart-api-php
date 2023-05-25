<?php

/**
 * ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerChargesChargeInnerTax
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\CA\Orders;
use Walmart\Model\BaseModel;

/**
 * ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerChargesChargeInnerTax Class Doc Comment
 *
 * @category Class

 * @description Tax information for the charge, including taxName and taxAmount

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerChargesChargeInnerTax extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdatesCA_200_response_orderLines_orderLine_inner_charges_charge_inner_tax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'taxName' => 'string',
        'taxAmount' => '\Walmart\Model\MP\CA\Orders\ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerChargesChargeInnerChargeAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'taxName' => null,
        'taxAmount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'taxName' => false,
        'taxAmount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'taxName' => 'taxName',
        'taxAmount' => 'taxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'taxName' => 'setTaxName',
        'taxAmount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'taxName' => 'getTaxName',
        'taxAmount' => 'getTaxAmount'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('taxName', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['taxName'] === null) {
            $invalidProperties[] = "'taxName' can't be null";
        }
        if ($this->container['taxAmount'] === null) {
            $invalidProperties[] = "'taxAmount' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets taxName
     *
     * @return string
    
     */
    public function getTaxName()
    {
        return $this->container['taxName'];
    }

    /**
     * Sets taxName
     *
     * @param string $taxName The name associated with the tax. Example: 'Sales Tax'
     *
     * @return self
    
     */
    public function setTaxName($taxName)
    {
        if (is_null($taxName)) {
            throw new \InvalidArgumentException('non-nullable taxName cannot be null');
        }

        $this->container['taxName'] = $taxName;
        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \Walmart\Model\MP\CA\Orders\ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerChargesChargeInnerChargeAmount
    
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \Walmart\Model\MP\CA\Orders\ShippingUpdatesCA200ResponseOrderLinesOrderLineInnerChargesChargeInnerChargeAmount $taxAmount taxAmount
     *
     * @return self
    
     */
    public function setTaxAmount($taxAmount)
    {
        if (is_null($taxAmount)) {
            throw new \InvalidArgumentException('non-nullable taxAmount cannot be null');
        }

        $this->container['taxAmount'] = $taxAmount;
        return $this;
    }
}



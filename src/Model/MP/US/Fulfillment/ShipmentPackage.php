<?php

/**
 * ShipmentPackage
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
 * ShipmentPackage Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipmentPackage extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'packageSequenceNumber' => 'int',
        'weight' => 'float',
        'weightUOM' => 'string',
        'length' => 'float',
        'height' => 'float',
        'width' => 'float',
        'lengthUOM' => 'string',
        'labelInformation' => '\Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseShipmentPackagesInnerLabelInformation',
        'billingWeight' => 'float',
        'netCharge' => 'float',
        'nominalCharge' => 'float',
        'assessorialCharge' => 'float',
        'serviceCharge' => 'float',
        'packageType' => 'string',
        'noOfPackages' => 'int',
        'stackable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'packageSequenceNumber' => 'int32',
        'weight' => 'float',
        'weightUOM' => null,
        'length' => 'float',
        'height' => 'float',
        'width' => 'float',
        'lengthUOM' => null,
        'labelInformation' => null,
        'billingWeight' => 'float',
        'netCharge' => 'float',
        'nominalCharge' => 'float',
        'assessorialCharge' => 'float',
        'serviceCharge' => 'float',
        'packageType' => null,
        'noOfPackages' => 'int32',
        'stackable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'packageSequenceNumber' => false,
        'weight' => false,
        'weightUOM' => false,
        'length' => false,
        'height' => false,
        'width' => false,
        'lengthUOM' => false,
        'labelInformation' => false,
        'billingWeight' => false,
        'netCharge' => false,
        'nominalCharge' => false,
        'assessorialCharge' => false,
        'serviceCharge' => false,
        'packageType' => false,
        'noOfPackages' => false,
        'stackable' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'packageSequenceNumber' => 'packageSequenceNumber',
        'weight' => 'weight',
        'weightUOM' => 'weightUOM',
        'length' => 'length',
        'height' => 'height',
        'width' => 'width',
        'lengthUOM' => 'lengthUOM',
        'labelInformation' => 'labelInformation',
        'billingWeight' => 'billingWeight',
        'netCharge' => 'netCharge',
        'nominalCharge' => 'nominalCharge',
        'assessorialCharge' => 'assessorialCharge',
        'serviceCharge' => 'serviceCharge',
        'packageType' => 'packageType',
        'noOfPackages' => 'noOfPackages',
        'stackable' => 'stackable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'packageSequenceNumber' => 'setPackageSequenceNumber',
        'weight' => 'setWeight',
        'weightUOM' => 'setWeightUOM',
        'length' => 'setLength',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'lengthUOM' => 'setLengthUOM',
        'labelInformation' => 'setLabelInformation',
        'billingWeight' => 'setBillingWeight',
        'netCharge' => 'setNetCharge',
        'nominalCharge' => 'setNominalCharge',
        'assessorialCharge' => 'setAssessorialCharge',
        'serviceCharge' => 'setServiceCharge',
        'packageType' => 'setPackageType',
        'noOfPackages' => 'setNoOfPackages',
        'stackable' => 'setStackable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'packageSequenceNumber' => 'getPackageSequenceNumber',
        'weight' => 'getWeight',
        'weightUOM' => 'getWeightUOM',
        'length' => 'getLength',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'lengthUOM' => 'getLengthUOM',
        'labelInformation' => 'getLabelInformation',
        'billingWeight' => 'getBillingWeight',
        'netCharge' => 'getNetCharge',
        'nominalCharge' => 'getNominalCharge',
        'assessorialCharge' => 'getAssessorialCharge',
        'serviceCharge' => 'getServiceCharge',
        'packageType' => 'getPackageType',
        'noOfPackages' => 'getNoOfPackages',
        'stackable' => 'getStackable'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('packageSequenceNumber', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('weightUOM', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('lengthUOM', $data ?? [], null);
        $this->setIfExists('labelInformation', $data ?? [], null);
        $this->setIfExists('billingWeight', $data ?? [], null);
        $this->setIfExists('netCharge', $data ?? [], null);
        $this->setIfExists('nominalCharge', $data ?? [], null);
        $this->setIfExists('assessorialCharge', $data ?? [], null);
        $this->setIfExists('serviceCharge', $data ?? [], null);
        $this->setIfExists('packageType', $data ?? [], null);
        $this->setIfExists('noOfPackages', $data ?? [], null);
        $this->setIfExists('stackable', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageSequenceNumber'] === null) {
            $invalidProperties[] = "'packageSequenceNumber' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }



        if (($this->container['weight'] < -1)) {
            $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to -1.";
        }




        if ($this->container['weightUOM'] === null) {
            $invalidProperties[] = "'weightUOM' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }



        if (($this->container['length'] < -1)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than or equal to -1.";
        }




        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }



        if (($this->container['height'] < -1)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to -1.";
        }




        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }



        if (($this->container['width'] < -1)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to -1.";
        }




        if ($this->container['lengthUOM'] === null) {
            $invalidProperties[] = "'lengthUOM' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets packageSequenceNumber
     *
     * @return int
    
     */
    public function getPackageSequenceNumber()
    {
        return $this->container['packageSequenceNumber'];
    }

    /**
     * Sets packageSequenceNumber
     *
     * @param int $packageSequenceNumber packageSequenceNumber
     *
     * @return self
    
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        if (is_null($packageSequenceNumber)) {
            throw new \InvalidArgumentException('non-nullable packageSequenceNumber cannot be null');
        }

        $this->container['packageSequenceNumber'] = $packageSequenceNumber;
        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
    
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight weight
     *
     * @return self
    
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }



        if (($weight < -1)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling ShipmentPackage., must be bigger than or equal to -1.');
        }




        $this->container['weight'] = $weight;
        return $this;
    }

    /**
     * Gets weightUOM
     *
     * @return string
    
     */
    public function getWeightUOM()
    {
        return $this->container['weightUOM'];
    }

    /**
     * Sets weightUOM
     *
     * @param string $weightUOM weightUOM
     *
     * @return self
    
     */
    public function setWeightUOM($weightUOM)
    {
        if (is_null($weightUOM)) {
            throw new \InvalidArgumentException('non-nullable weightUOM cannot be null');
        }

        $this->container['weightUOM'] = $weightUOM;
        return $this;
    }

    /**
     * Gets length
     *
     * @return float
    
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float $length length
     *
     * @return self
    
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }



        if (($length < -1)) {
            throw new \InvalidArgumentException('invalid value for $length when calling ShipmentPackage., must be bigger than or equal to -1.');
        }




        $this->container['length'] = $length;
        return $this;
    }

    /**
     * Gets height
     *
     * @return float
    
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height height
     *
     * @return self
    
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }



        if (($height < -1)) {
            throw new \InvalidArgumentException('invalid value for $height when calling ShipmentPackage., must be bigger than or equal to -1.');
        }




        $this->container['height'] = $height;
        return $this;
    }

    /**
     * Gets width
     *
     * @return float
    
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width width
     *
     * @return self
    
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }



        if (($width < -1)) {
            throw new \InvalidArgumentException('invalid value for $width when calling ShipmentPackage., must be bigger than or equal to -1.');
        }




        $this->container['width'] = $width;
        return $this;
    }

    /**
     * Gets lengthUOM
     *
     * @return string
    
     */
    public function getLengthUOM()
    {
        return $this->container['lengthUOM'];
    }

    /**
     * Sets lengthUOM
     *
     * @param string $lengthUOM lengthUOM
     *
     * @return self
    
     */
    public function setLengthUOM($lengthUOM)
    {
        if (is_null($lengthUOM)) {
            throw new \InvalidArgumentException('non-nullable lengthUOM cannot be null');
        }

        $this->container['lengthUOM'] = $lengthUOM;
        return $this;
    }

    /**
     * Gets labelInformation
     *
     * @return \Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseShipmentPackagesInnerLabelInformation|null
    
     */
    public function getLabelInformation()
    {
        return $this->container['labelInformation'];
    }

    /**
     * Sets labelInformation
     *
     * @param \Walmart\Model\MP\US\Fulfillment\GetCarrierRateQuote200ResponseShipmentPackagesInnerLabelInformation|null $labelInformation labelInformation
     *
     * @return self
    
     */
    public function setLabelInformation($labelInformation)
    {
        if (is_null($labelInformation)) {
            throw new \InvalidArgumentException('non-nullable labelInformation cannot be null');
        }

        $this->container['labelInformation'] = $labelInformation;
        return $this;
    }

    /**
     * Gets billingWeight
     *
     * @return float|null
    
     */
    public function getBillingWeight()
    {
        return $this->container['billingWeight'];
    }

    /**
     * Sets billingWeight
     *
     * @param float|null $billingWeight billingWeight
     *
     * @return self
    
     */
    public function setBillingWeight($billingWeight)
    {
        if (is_null($billingWeight)) {
            throw new \InvalidArgumentException('non-nullable billingWeight cannot be null');
        }

        $this->container['billingWeight'] = $billingWeight;
        return $this;
    }

    /**
     * Gets netCharge
     *
     * @return float|null
    
     */
    public function getNetCharge()
    {
        return $this->container['netCharge'];
    }

    /**
     * Sets netCharge
     *
     * @param float|null $netCharge netCharge
     *
     * @return self
    
     */
    public function setNetCharge($netCharge)
    {
        if (is_null($netCharge)) {
            throw new \InvalidArgumentException('non-nullable netCharge cannot be null');
        }

        $this->container['netCharge'] = $netCharge;
        return $this;
    }

    /**
     * Gets nominalCharge
     *
     * @return float|null
    
     */
    public function getNominalCharge()
    {
        return $this->container['nominalCharge'];
    }

    /**
     * Sets nominalCharge
     *
     * @param float|null $nominalCharge nominalCharge
     *
     * @return self
    
     */
    public function setNominalCharge($nominalCharge)
    {
        if (is_null($nominalCharge)) {
            throw new \InvalidArgumentException('non-nullable nominalCharge cannot be null');
        }

        $this->container['nominalCharge'] = $nominalCharge;
        return $this;
    }

    /**
     * Gets assessorialCharge
     *
     * @return float|null
    
     */
    public function getAssessorialCharge()
    {
        return $this->container['assessorialCharge'];
    }

    /**
     * Sets assessorialCharge
     *
     * @param float|null $assessorialCharge assessorialCharge
     *
     * @return self
    
     */
    public function setAssessorialCharge($assessorialCharge)
    {
        if (is_null($assessorialCharge)) {
            throw new \InvalidArgumentException('non-nullable assessorialCharge cannot be null');
        }

        $this->container['assessorialCharge'] = $assessorialCharge;
        return $this;
    }

    /**
     * Gets serviceCharge
     *
     * @return float|null
    
     */
    public function getServiceCharge()
    {
        return $this->container['serviceCharge'];
    }

    /**
     * Sets serviceCharge
     *
     * @param float|null $serviceCharge serviceCharge
     *
     * @return self
    
     */
    public function setServiceCharge($serviceCharge)
    {
        if (is_null($serviceCharge)) {
            throw new \InvalidArgumentException('non-nullable serviceCharge cannot be null');
        }

        $this->container['serviceCharge'] = $serviceCharge;
        return $this;
    }

    /**
     * Gets packageType
     *
     * @return string|null
    
     */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
     * Sets packageType
     *
     * @param string|null $packageType packageType
     *
     * @return self
    
     */
    public function setPackageType($packageType)
    {
        if (is_null($packageType)) {
            throw new \InvalidArgumentException('non-nullable packageType cannot be null');
        }

        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
     * Gets noOfPackages
     *
     * @return int|null
    
     */
    public function getNoOfPackages()
    {
        return $this->container['noOfPackages'];
    }

    /**
     * Sets noOfPackages
     *
     * @param int|null $noOfPackages noOfPackages
     *
     * @return self
    
     */
    public function setNoOfPackages($noOfPackages)
    {
        if (is_null($noOfPackages)) {
            throw new \InvalidArgumentException('non-nullable noOfPackages cannot be null');
        }

        $this->container['noOfPackages'] = $noOfPackages;
        return $this;
    }

    /**
     * Gets stackable
     *
     * @return bool|null
    
     */
    public function getStackable()
    {
        return $this->container['stackable'];
    }

    /**
     * Sets stackable
     *
     * @param bool|null $stackable stackable
     *
     * @return self
    
     */
    public function setStackable($stackable)
    {
        if (is_null($stackable)) {
            throw new \InvalidArgumentException('non-nullable stackable cannot be null');
        }

        $this->container['stackable'] = $stackable;
        return $this;
    }
}



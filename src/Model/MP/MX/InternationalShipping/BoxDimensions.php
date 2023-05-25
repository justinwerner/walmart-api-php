<?php

/**
 * BoxDimensions
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

namespace Walmart\Model\MP\MX\InternationalShipping;
use Walmart\Model\BaseModel;

/**
 * BoxDimensions Class Doc Comment
 *
 * @category Class

 * @description Box Dimensions

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class BoxDimensions extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BoxDimensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'boxDimensionUnit' => 'string',
        'boxWeightUnit' => 'string',
        'boxWeight' => 'float',
        'boxLength' => 'float',
        'boxWidth' => 'float',
        'boxHeight' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'boxDimensionUnit' => null,
        'boxWeightUnit' => null,
        'boxWeight' => null,
        'boxLength' => null,
        'boxWidth' => null,
        'boxHeight' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'boxDimensionUnit' => false,
        'boxWeightUnit' => false,
        'boxWeight' => false,
        'boxLength' => false,
        'boxWidth' => false,
        'boxHeight' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'boxDimensionUnit' => 'boxDimensionUnit',
        'boxWeightUnit' => 'boxWeightUnit',
        'boxWeight' => 'boxWeight',
        'boxLength' => 'boxLength',
        'boxWidth' => 'boxWidth',
        'boxHeight' => 'boxHeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'boxDimensionUnit' => 'setBoxDimensionUnit',
        'boxWeightUnit' => 'setBoxWeightUnit',
        'boxWeight' => 'setBoxWeight',
        'boxLength' => 'setBoxLength',
        'boxWidth' => 'setBoxWidth',
        'boxHeight' => 'setBoxHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'boxDimensionUnit' => 'getBoxDimensionUnit',
        'boxWeightUnit' => 'getBoxWeightUnit',
        'boxWeight' => 'getBoxWeight',
        'boxLength' => 'getBoxLength',
        'boxWidth' => 'getBoxWidth',
        'boxHeight' => 'getBoxHeight'
    ];
    public const BOX_DIMENSION_UNIT_CM = 'CM';

    public const BOX_DIMENSION_UNIT_IN = 'IN';

    public const BOX_WEIGHT_UNIT_LB = 'LB';

    public const BOX_WEIGHT_UNIT_KG = 'KG';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBoxDimensionUnitAllowableValues()
    {
        return [
            self::BOX_DIMENSION_UNIT_CM,
            self::BOX_DIMENSION_UNIT_IN,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBoxWeightUnitAllowableValues()
    {
        return [
            self::BOX_WEIGHT_UNIT_LB,
            self::BOX_WEIGHT_UNIT_KG,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('boxDimensionUnit', $data ?? [], null);
        $this->setIfExists('boxWeightUnit', $data ?? [], null);
        $this->setIfExists('boxWeight', $data ?? [], null);
        $this->setIfExists('boxLength', $data ?? [], null);
        $this->setIfExists('boxWidth', $data ?? [], null);
        $this->setIfExists('boxHeight', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBoxDimensionUnitAllowableValues();
        if (!is_null($this->container['boxDimensionUnit']) && !in_array($this->container['boxDimensionUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'boxDimensionUnit', must be one of '%s'",
                $this->container['boxDimensionUnit'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['boxWeightUnit'] === null) {
            $invalidProperties[] = "'boxWeightUnit' can't be null";
        }
        $allowedValues = $this->getBoxWeightUnitAllowableValues();
        if (!is_null($this->container['boxWeightUnit']) && !in_array($this->container['boxWeightUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'boxWeightUnit', must be one of '%s'",
                $this->container['boxWeightUnit'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['boxWeight'] === null) {
            $invalidProperties[] = "'boxWeight' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets boxDimensionUnit
     *
     * @return string|null
    
     */
    public function getBoxDimensionUnit()
    {
        return $this->container['boxDimensionUnit'];
    }

    /**
     * Sets boxDimensionUnit
     *
     * @param string|null $boxDimensionUnit Box Dimension Unit [CM, IN]. Mandatory for CUSTOM_PACKAGE type, otherwise not required
     *
     * @return self
    
     */
    public function setBoxDimensionUnit($boxDimensionUnit)
    {
        if (is_null($boxDimensionUnit)) {
            throw new \InvalidArgumentException('non-nullable boxDimensionUnit cannot be null');
        }
        $allowedValues = $this->getBoxDimensionUnitAllowableValues();
        if (!in_array($boxDimensionUnit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'boxDimensionUnit', must be one of '%s'",
                    $boxDimensionUnit,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['boxDimensionUnit'] = $boxDimensionUnit;
        return $this;
    }

    /**
     * Gets boxWeightUnit
     *
     * @return string
    
     */
    public function getBoxWeightUnit()
    {
        return $this->container['boxWeightUnit'];
    }

    /**
     * Sets boxWeightUnit
     *
     * @param string $boxWeightUnit Box Weight Unit [LB, KG]
     *
     * @return self
    
     */
    public function setBoxWeightUnit($boxWeightUnit)
    {
        if (is_null($boxWeightUnit)) {
            throw new \InvalidArgumentException('non-nullable boxWeightUnit cannot be null');
        }
        $allowedValues = $this->getBoxWeightUnitAllowableValues();
        if (!in_array($boxWeightUnit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'boxWeightUnit', must be one of '%s'",
                    $boxWeightUnit,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['boxWeightUnit'] = $boxWeightUnit;
        return $this;
    }

    /**
     * Gets boxWeight
     *
     * @return float
    
     */
    public function getBoxWeight()
    {
        return $this->container['boxWeight'];
    }

    /**
     * Sets boxWeight
     *
     * @param float $boxWeight Box Weight
     *
     * @return self
    
     */
    public function setBoxWeight($boxWeight)
    {
        if (is_null($boxWeight)) {
            throw new \InvalidArgumentException('non-nullable boxWeight cannot be null');
        }

        $this->container['boxWeight'] = $boxWeight;
        return $this;
    }

    /**
     * Gets boxLength
     *
     * @return float|null
    
     */
    public function getBoxLength()
    {
        return $this->container['boxLength'];
    }

    /**
     * Sets boxLength
     *
     * @param float|null $boxLength Box Length. Mandatory for CUSTOM_PACKAGE type, otherwise not required
     *
     * @return self
    
     */
    public function setBoxLength($boxLength)
    {
        if (is_null($boxLength)) {
            throw new \InvalidArgumentException('non-nullable boxLength cannot be null');
        }

        $this->container['boxLength'] = $boxLength;
        return $this;
    }

    /**
     * Gets boxWidth
     *
     * @return float|null
    
     */
    public function getBoxWidth()
    {
        return $this->container['boxWidth'];
    }

    /**
     * Sets boxWidth
     *
     * @param float|null $boxWidth Box Width. Mandatory for CUSTOM_PACKAGE type, otherwise not required
     *
     * @return self
    
     */
    public function setBoxWidth($boxWidth)
    {
        if (is_null($boxWidth)) {
            throw new \InvalidArgumentException('non-nullable boxWidth cannot be null');
        }

        $this->container['boxWidth'] = $boxWidth;
        return $this;
    }

    /**
     * Gets boxHeight
     *
     * @return float|null
    
     */
    public function getBoxHeight()
    {
        return $this->container['boxHeight'];
    }

    /**
     * Sets boxHeight
     *
     * @param float|null $boxHeight Box Height. Mandatory for CUSTOM_PACKAGE type, otherwise not required
     *
     * @return self
    
     */
    public function setBoxHeight($boxHeight)
    {
        if (is_null($boxHeight)) {
            throw new \InvalidArgumentException('non-nullable boxHeight cannot be null');
        }

        $this->container['boxHeight'] = $boxHeight;
        return $this;
    }
}



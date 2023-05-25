<?php

/**
 * UpdateInventoryForAnItemRequest
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
 * Inventory Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\DSV\US\Inventory;
use Walmart\Model\BaseModel;

/**
 * UpdateInventoryForAnItemRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateInventoryForAnItemRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateInventoryForAnItem_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'gtin' => 'string',
        'availabilityCode' => 'string',
        'quantity' => '\Walmart\Model\DSV\US\Inventory\UpdateInventoryForAnItemRequestQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'gtin' => null,
        'availabilityCode' => null,
        'quantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gtin' => false,
        'availabilityCode' => false,
        'quantity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'gtin' => 'gtin',
        'availabilityCode' => 'availabilityCode',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'gtin' => 'setGtin',
        'availabilityCode' => 'setAvailabilityCode',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'gtin' => 'getGtin',
        'availabilityCode' => 'getAvailabilityCode',
        'quantity' => 'getQuantity'
    ];
    public const AVAILABILITY_CODE_AA = 'AA';

    public const AVAILABILITY_CODE_AC = 'AC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityCodeAllowableValues()
    {
        return [
            self::AVAILABILITY_CODE_AA,
            self::AVAILABILITY_CODE_AC,
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
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('availabilityCode', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gtin'] === null) {
            $invalidProperties[] = "'gtin' can't be null";
        }
        if ($this->container['availabilityCode'] === null) {
            $invalidProperties[] = "'availabilityCode' can't be null";
        }
        $allowedValues = $this->getAvailabilityCodeAllowableValues();
        if (!is_null($this->container['availabilityCode']) && !in_array($this->container['availabilityCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availabilityCode', must be one of '%s'",
                $this->container['availabilityCode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets gtin
     *
     * @return string
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin Specifies the global trade item number (GTIN) item identifier.   The global trade item number is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user’s number is less than 14 digits, add zeros at the beginning.
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
    }

    /**
     * Gets availabilityCode
     *
     * @return string
    
     */
    public function getAvailabilityCode()
    {
        return $this->container['availabilityCode'];
    }

    /**
     * Sets availabilityCode
     *
     * @param string $availabilityCode Specifies how to manage the inventory update.   AC: The code used for standard inventory updates. Assign this code to an item with normal inventory.   AA: An item with infinite inventory. If users set AA as the availability code, they do not need to provide inventory for the item.
     *
     * @return self
    
     */
    public function setAvailabilityCode($availabilityCode)
    {
        if (is_null($availabilityCode)) {
            throw new \InvalidArgumentException('non-nullable availabilityCode cannot be null');
        }
        $allowedValues = $this->getAvailabilityCodeAllowableValues();
        if (!in_array($availabilityCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availabilityCode', must be one of '%s'",
                    $availabilityCode,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['availabilityCode'] = $availabilityCode;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Walmart\Model\DSV\US\Inventory\UpdateInventoryForAnItemRequestQuantity
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Walmart\Model\DSV\US\Inventory\UpdateInventoryForAnItemRequestQuantity $quantity quantity
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;
        return $this;
    }
}



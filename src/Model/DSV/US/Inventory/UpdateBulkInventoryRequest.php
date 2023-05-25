<?php

/**
 * UpdateBulkInventoryRequest
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
 * UpdateBulkInventoryRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateBulkInventoryRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateBulkInventory_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inventoryFeedHeader' => '\Walmart\Model\DSV\US\Inventory\UpdateBulkInventoryRequestInventoryFeedHeader',
        'inventory' => '\Walmart\Model\DSV\US\Inventory\UpdateBulkInventoryRequestInventoryInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inventoryFeedHeader' => null,
        'inventory' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inventoryFeedHeader' => false,
        'inventory' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inventoryFeedHeader' => 'inventoryFeedHeader',
        'inventory' => 'inventory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inventoryFeedHeader' => 'setInventoryFeedHeader',
        'inventory' => 'setInventory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inventoryFeedHeader' => 'getInventoryFeedHeader',
        'inventory' => 'getInventory'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('inventoryFeedHeader', $data ?? [], null);
        $this->setIfExists('inventory', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inventoryFeedHeader'] === null) {
            $invalidProperties[] = "'inventoryFeedHeader' can't be null";
        }
        if ($this->container['inventory'] === null) {
            $invalidProperties[] = "'inventory' can't be null";
        }

        return $invalidProperties;
    }
    /**
     * Gets inventoryFeedHeader
     *
     * @return \Walmart\Model\DSV\US\Inventory\UpdateBulkInventoryRequestInventoryFeedHeader
    
     */
    public function getInventoryFeedHeader()
    {
        return $this->container['inventoryFeedHeader'];
    }

    /**
     * Sets inventoryFeedHeader
     *
     * @param \Walmart\Model\DSV\US\Inventory\UpdateBulkInventoryRequestInventoryFeedHeader $inventoryFeedHeader inventoryFeedHeader
     *
     * @return self
    
     */
    public function setInventoryFeedHeader($inventoryFeedHeader)
    {
        if (is_null($inventoryFeedHeader)) {
            throw new \InvalidArgumentException('non-nullable inventoryFeedHeader cannot be null');
        }

        $this->container['inventoryFeedHeader'] = $inventoryFeedHeader;
        return $this;
    }

    /**
     * Gets inventory
     *
     * @return \Walmart\Model\DSV\US\Inventory\UpdateBulkInventoryRequestInventoryInner[]
    
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param \Walmart\Model\DSV\US\Inventory\UpdateBulkInventoryRequestInventoryInner[] $inventory Specifies an object for inventory information.
     *
     * @return self
    
     */
    public function setInventory($inventory)
    {
        if (is_null($inventory)) {
            throw new \InvalidArgumentException('non-nullable inventory cannot be null');
        }

        $this->container['inventory'] = $inventory;
        return $this;
    }
}



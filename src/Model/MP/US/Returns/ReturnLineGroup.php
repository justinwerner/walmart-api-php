<?php

/**
 * ReturnLineGroup
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\US\Returns;
use Walmart\Model\BaseModel;

/**
 * ReturnLineGroup Class Doc Comment
 *
 * @category Class

 * @description These groups are created per label or type of carrier service required. (e.g., If order has some lines that can be clubbed and mailed together as a smart post then they belong to one return group. If a line is bulky and needs a different type of carrier service, then that line will be part of different group. Customer gets multiple labels depending on how many groups are created for the entire order.)

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ReturnLineGroup extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnLineGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'groupNo' => 'int',
        'returnLines' => '\Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerReturnLinesInner[]',
        'labels' => '\Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInner[]',
        'returnExpectedFlag' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'groupNo' => 'int64',
        'returnLines' => null,
        'labels' => null,
        'returnExpectedFlag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'groupNo' => false,
        'returnLines' => false,
        'labels' => false,
        'returnExpectedFlag' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'groupNo' => 'groupNo',
        'returnLines' => 'returnLines',
        'labels' => 'labels',
        'returnExpectedFlag' => 'returnExpectedFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'groupNo' => 'setGroupNo',
        'returnLines' => 'setReturnLines',
        'labels' => 'setLabels',
        'returnExpectedFlag' => 'setReturnExpectedFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'groupNo' => 'getGroupNo',
        'returnLines' => 'getReturnLines',
        'labels' => 'getLabels',
        'returnExpectedFlag' => 'getReturnExpectedFlag'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('groupNo', $data ?? [], null);
        $this->setIfExists('returnLines', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('returnExpectedFlag', $data ?? [], null);
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
     * Gets groupNo
     *
     * @return int|null
    
     */
    public function getGroupNo()
    {
        return $this->container['groupNo'];
    }

    /**
     * Sets groupNo
     *
     * @param int|null $groupNo Sequence of group numbers where each returnLineGroups will represent one or more return lines
     *
     * @return self
    
     */
    public function setGroupNo($groupNo)
    {
        if (is_null($groupNo)) {
            throw new \InvalidArgumentException('non-nullable groupNo cannot be null');
        }

        $this->container['groupNo'] = $groupNo;
        return $this;
    }

    /**
     * Gets returnLines
     *
     * @return \Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerReturnLinesInner[]|null
    
     */
    public function getReturnLines()
    {
        return $this->container['returnLines'];
    }

    /**
     * Sets returnLines
     *
     * @param \Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerReturnLinesInner[]|null $returnLines Array of return lines
     *
     * @return self
    
     */
    public function setReturnLines($returnLines)
    {
        if (is_null($returnLines)) {
            throw new \InvalidArgumentException('non-nullable returnLines cannot be null');
        }

        $this->container['returnLines'] = $returnLines;
        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInner[]|null
    
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Walmart\Model\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnLineGroupsInnerLabelsInner[]|null $labels Array of labels
     *
     * @return self
    
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }

        $this->container['labels'] = $labels;
        return $this;
    }

    /**
     * Gets returnExpectedFlag
     *
     * @return bool|null
    
     */
    public function getReturnExpectedFlag()
    {
        return $this->container['returnExpectedFlag'];
    }

    /**
     * Sets returnExpectedFlag
     *
     * @param bool|null $returnExpectedFlag Is customer required to send this item back to return center
     *
     * @return self
    
     */
    public function setReturnExpectedFlag($returnExpectedFlag)
    {
        if (is_null($returnExpectedFlag)) {
            throw new \InvalidArgumentException('non-nullable returnExpectedFlag cannot be null');
        }

        $this->container['returnExpectedFlag'] = $returnExpectedFlag;
        return $this;
    }
}



<?php

/**
 * GetPartnerStatement200ResponsePayloadTransactionDetailsPartnerTxns
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
 * GetPartnerStatement200ResponsePayloadTransactionDetailsPartnerTxns Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetPartnerStatement200ResponsePayloadTransactionDetailsPartnerTxns extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getPartnerStatement_200_response_payload_transactionDetails_partnerTxns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'netPayable' => 'float',
        'advancePayment' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'netPayable' => null,
        'advancePayment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'netPayable' => false,
        'advancePayment' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'netPayable' => 'netPayable',
        'advancePayment' => 'advancePayment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'netPayable' => 'setNetPayable',
        'advancePayment' => 'setAdvancePayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'netPayable' => 'getNetPayable',
        'advancePayment' => 'getAdvancePayment'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('netPayable', $data ?? [], null);
        $this->setIfExists('advancePayment', $data ?? [], null);
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
     * Gets netPayable
     *
     * @return float|null
    
     */
    public function getNetPayable()
    {
        return $this->container['netPayable'];
    }

    /**
     * Sets netPayable
     *
     * @param float|null $netPayable netPayable
     *
     * @return self
    
     */
    public function setNetPayable($netPayable)
    {
        if (is_null($netPayable)) {
            throw new \InvalidArgumentException('non-nullable netPayable cannot be null');
        }

        $this->container['netPayable'] = $netPayable;
        return $this;
    }

    /**
     * Gets advancePayment
     *
     * @return float|null
    
     */
    public function getAdvancePayment()
    {
        return $this->container['advancePayment'];
    }

    /**
     * Sets advancePayment
     *
     * @param float|null $advancePayment advancePayment
     *
     * @return self
    
     */
    public function setAdvancePayment($advancePayment)
    {
        if (is_null($advancePayment)) {
            throw new \InvalidArgumentException('non-nullable advancePayment cannot be null');
        }

        $this->container['advancePayment'] = $advancePayment;
        return $this;
    }
}



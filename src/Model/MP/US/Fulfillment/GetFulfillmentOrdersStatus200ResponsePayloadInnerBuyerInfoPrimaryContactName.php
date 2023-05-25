<?php

/**
 * GetFulfillmentOrdersStatus200ResponsePayloadInnerBuyerInfoPrimaryContactName
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
 * GetFulfillmentOrdersStatus200ResponsePayloadInnerBuyerInfoPrimaryContactName Class Doc Comment
 *
 * @category Class

 * @description Customer name details

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetFulfillmentOrdersStatus200ResponsePayloadInnerBuyerInfoPrimaryContactName extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getFulfillmentOrdersStatus_200_response_payload_inner_buyerInfo_primaryContact_name';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'completeName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'completeName' => null,
        'firstName' => null,
        'lastName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'completeName' => false,
        'firstName' => false,
        'lastName' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'completeName' => 'completeName',
        'firstName' => 'firstName',
        'lastName' => 'lastName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'completeName' => 'setCompleteName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'completeName' => 'getCompleteName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('completeName', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
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
     * Gets completeName
     *
     * @return string|null
    
     */
    public function getCompleteName()
    {
        return $this->container['completeName'];
    }

    /**
     * Sets completeName
     *
     * @param string|null $completeName completeName
     *
     * @return self
    
     */
    public function setCompleteName($completeName)
    {
        if (is_null($completeName)) {
            throw new \InvalidArgumentException('non-nullable completeName cannot be null');
        }

        $this->container['completeName'] = $completeName;
        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
    
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return self
    
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }

        $this->container['firstName'] = $firstName;
        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
    
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName lastName
     *
     * @return self
    
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            throw new \InvalidArgumentException('non-nullable lastName cannot be null');
        }

        $this->container['lastName'] = $lastName;
        return $this;
    }
}



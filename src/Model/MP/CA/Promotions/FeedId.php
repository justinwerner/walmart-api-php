<?php

/**
 * FeedId
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\CA\Promotions;
use Walmart\Model\BaseModel;

/**
 * FeedId Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedId extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FeedId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'feedId' => 'string',
        'additionalAttributes' => 'object',
        'errors' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'feedId' => null,
        'additionalAttributes' => null,
        'errors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feedId' => false,
        'additionalAttributes' => true,
        'errors' => true
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feedId' => 'feedId',
        'additionalAttributes' => 'additionalAttributes',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'feedId' => 'setFeedId',
        'additionalAttributes' => 'setAdditionalAttributes',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'feedId' => 'getFeedId',
        'additionalAttributes' => 'getAdditionalAttributes',
        'errors' => 'getErrors'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('feedId', $data ?? [], null);
        $this->setIfExists('additionalAttributes', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
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
     * Gets feedId
     *
     * @return string|null
    
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param string|null $feedId A unique ID, returned from the Bulk Upload API, used for tracking the feed file
     *
     * @return self
    
     */
    public function setFeedId($feedId)
    {
        if (is_null($feedId)) {
            throw new \InvalidArgumentException('non-nullable feedId cannot be null');
        }

        $this->container['feedId'] = $feedId;
        return $this;
    }

    /**
     * Gets additionalAttributes
     *
     * @return object|null
    
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additionalAttributes'];
    }

    /**
     * Sets additionalAttributes
     *
     * @param object|null $additionalAttributes additionalAttributes
     *
     * @return self
    
     */
    public function setAdditionalAttributes($additionalAttributes)
    {
        if (is_null($additionalAttributes)) {
            array_push($this->openAPINullablesSetToNull, 'additionalAttributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('additionalAttributes', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['additionalAttributes'] = $additionalAttributes;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return object|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param object|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            array_push($this->openAPINullablesSetToNull, 'errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errors', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errors'] = $errors;
        return $this;
    }
}



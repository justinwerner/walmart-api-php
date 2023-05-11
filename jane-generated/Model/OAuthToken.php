<?php

namespace Walmart\Model;

class OAuthToken extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique token string generated by the API call
     *
     * @var string
     */
    protected $accessToken;
    /**
     * Type of token according to user. (e.g., 'BEARER')
     *
     * @var string
     */
    protected $tokenType;
    /**
     * Seconds until expiration of token
     *
     * @var int
     */
    protected $expiresIn;
    /**
     * Unique token string generated by the API call
     *
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * Unique token string generated by the API call
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken) : self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * Type of token according to user. (e.g., 'BEARER')
     *
     * @return string
     */
    public function getTokenType() : string
    {
        return $this->tokenType;
    }
    /**
     * Type of token according to user. (e.g., 'BEARER')
     *
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType(string $tokenType) : self
    {
        $this->initialized['tokenType'] = true;
        $this->tokenType = $tokenType;
        return $this;
    }
    /**
     * Seconds until expiration of token
     *
     * @return int
     */
    public function getExpiresIn() : int
    {
        return $this->expiresIn;
    }
    /**
     * Seconds until expiration of token
     *
     * @param int $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(int $expiresIn) : self
    {
        $this->initialized['expiresIn'] = true;
        $this->expiresIn = $expiresIn;
        return $this;
    }
}
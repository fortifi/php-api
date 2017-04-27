<?php
namespace Fortifi\Api\Core\OAuth\Tokens;

class AccessToken implements IToken
{
  protected $_type = 'Bearer';
  protected $_token;
  protected $_expirySeconds;
  protected $_expiryTime;
  protected $_sessionSecret;
  protected $_userId;

  /**
   * @inheritDoc
   */
  public function __construct($token = null)
  {
    $this->_token = $token;
  }

  /**
   * @param mixed $token
   *
   * @return AccessToken
   */
  public function setToken($token)
  {
    $this->_token = $token;
    return $this;
  }

  public function getToken()
  {
    return $this->_token;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return $this->_type;
  }

  /**
   * @param string $type
   *
   * @return AccessToken
   */
  public function setType($type)
  {
    $this->_type = $type;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getExpirySeconds()
  {
    return $this->_expirySeconds;
  }

  /**
   * @param mixed $expirySeconds
   *
   * @return AccessToken
   */
  public function setExpirySeconds($expirySeconds)
  {
    $this->_expirySeconds = $expirySeconds;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getExpiryTime()
  {
    return $this->_expiryTime;
  }

  /**
   * @param mixed $expiryTime
   *
   * @return AccessToken
   */
  public function setExpiryTime($expiryTime)
  {
    $this->_expiryTime = $expiryTime;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getSessionSecret()
  {
    return $this->_sessionSecret;
  }

  /**
   * @param mixed $sessionSecret
   *
   * @return AccessToken
   */
  public function setSessionSecret($sessionSecret)
  {
    $this->_sessionSecret = $sessionSecret;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getUserId()
  {
    return $this->_userId;
  }

  /**
   * @param mixed $userId
   *
   * @return AccessToken
   */
  public function setUserId($userId)
  {
    $this->_userId = $userId;
    return $this;
  }

}

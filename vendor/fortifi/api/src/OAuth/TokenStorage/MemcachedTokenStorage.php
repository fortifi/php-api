<?php
namespace Fortifi\Api\Core\OAuth\TokenStorage;

use Fortifi\Api\Core\OAuth\Tokens\IToken;

class MemcachedTokenStorage implements ITokenStorage
{
  protected $_connection;

  public function __construct($server = 'localhost', $port = 11211)
  {
    $this->_connection = new \Memcached('fortifi_token');
    $this->_connection->addServer($server, $port);
  }

  protected function _cacheKey($key)
  {
    return 'FRTAPITKN-' . $key;
  }

  /**
   * Store a token in storage
   *
   * @param string $key location key to store the token in
   *
   * @param IToken $token
   *
   * @return bool
   */
  public function storeToken($key, IToken $token)
  {
    return $this->_connection->set(
      $this->_cacheKey($key),
      serialize($token),
      $token->getExpiryTime()
    );
  }

  /**
   * Retrieve a token from storage
   *
   * @param string   $key      location key for token
   * @param callable $retrieve method to retireve token
   *
   * @return IToken|null
   */
  public function retrieveToken($key, callable $retrieve = null)
  {
    $token = null;
    $cacheToken = $this->_connection->get($this->_cacheKey($key));

    if($cacheToken && $cacheToken !== false)
    {
      $token = unserialize($cacheToken);
    }

    if($token instanceof IToken && $token->getExpiryTime() > time() + 60)
    {
      return $token;
    }

    if($retrieve !== null)
    {
      $token = $retrieve();
      if($token instanceof IToken)
      {
        $this->storeToken($key, $token);
      }
    }

    return $token instanceof IToken ? $token : null;
  }
}

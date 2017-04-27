<?php
namespace Fortifi\Api\Core\OAuth\TokenStorage;

use Fortifi\Api\Core\OAuth\Tokens\IToken;

interface ITokenStorage
{
  /**
   * Store a token in storage
   *
   * @param string $key location key to store the token in
   *
   * @param IToken $token
   *
   * @return bool
   */
  public function storeToken($key, IToken $token);

  /**
   * Retrieve a token from storage
   *
   * @param string   $key      location key for token
   * @param callable $retrieve method to retireve token
   *
   * @return IToken|null
   */
  public function retrieveToken($key, callable $retrieve = null);
}

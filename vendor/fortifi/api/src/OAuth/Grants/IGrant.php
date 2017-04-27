<?php
namespace Fortifi\Api\Core\OAuth\Grants;

use Fortifi\Api\Core\ApiDefinition\SecurityDefinition;
use Fortifi\Api\Core\IApiConnection;
use Fortifi\Api\Core\OAuth\Tokens\IToken;

interface IGrant
{
  /**
   * @param IApiConnection     $connection
   * @param SecurityDefinition $definition
   *
   * @return IToken
   */
  public function getToken(
    IApiConnection $connection, SecurityDefinition $definition
  );

  /**
   * @return string
   */
  public function getKey();
}

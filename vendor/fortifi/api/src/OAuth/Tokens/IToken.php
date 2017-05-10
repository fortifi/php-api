<?php
namespace Fortifi\Api\Core\OAuth\Tokens;

interface IToken
{
  public function getType();

  public function getToken();

  public function getExpiryTime();
}

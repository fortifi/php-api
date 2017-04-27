<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class UnauthorizedException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 401, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Unauthorized';
    }
    parent::__construct($message, $code, $previous);
  }
}

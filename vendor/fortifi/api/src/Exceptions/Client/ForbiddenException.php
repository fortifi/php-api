<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class ForbiddenException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 403, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Forbidden';
    }
    parent::__construct($message, $code, $previous);
  }
}

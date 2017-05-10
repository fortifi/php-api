<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class TooManyRequestsException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 429, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Too Many Requests';
    }
    parent::__construct($message, $code, $previous);
  }
}

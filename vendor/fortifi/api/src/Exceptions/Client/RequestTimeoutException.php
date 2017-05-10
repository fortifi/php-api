<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class RequestTimeoutException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 408, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Request Timeout';
    }
    parent::__construct($message, $code, $previous);
  }
}

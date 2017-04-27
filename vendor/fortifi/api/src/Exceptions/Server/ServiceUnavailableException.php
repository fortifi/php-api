<?php
namespace Fortifi\Api\Core\Exceptions\Server;

class ServiceUnavailableException extends ServerApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 503, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Service Unavailable';
    }
    parent::__construct($message, $code, $previous);
  }
}

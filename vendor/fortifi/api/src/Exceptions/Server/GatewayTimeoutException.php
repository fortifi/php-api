<?php
namespace Fortifi\Api\Core\Exceptions\Server;

class GatewayTimeoutException extends ServerApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 504, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Gateway Exception';
    }
    parent::__construct($message, $code, $previous);
  }
}

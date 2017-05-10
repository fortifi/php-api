<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class MethodNotAllowedException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 405, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Method Not Allowed';
    }
    parent::__construct($message, $code, $previous);
  }
}

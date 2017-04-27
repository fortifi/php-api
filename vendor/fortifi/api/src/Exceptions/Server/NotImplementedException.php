<?php
namespace Fortifi\Api\Core\Exceptions\Server;

class NotImplementedException extends ServerApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 501, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Not Implemented';
    }
    parent::__construct($message, $code, $previous);
  }
}

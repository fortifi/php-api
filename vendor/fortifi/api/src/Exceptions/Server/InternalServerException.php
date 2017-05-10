<?php
namespace Fortifi\Api\Core\Exceptions\Server;

class InternalServerException extends ServerApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 500, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Internal Server Error';
    }
    parent::__construct($message, $code, $previous);
  }
}

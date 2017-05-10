<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class ConflictException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 409, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Conflict';
    }
    parent::__construct($message, $code, $previous);
  }
}

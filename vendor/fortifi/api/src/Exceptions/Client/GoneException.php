<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class GoneException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 410, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Gone';
    }
    parent::__construct($message, $code, $previous);
  }
}

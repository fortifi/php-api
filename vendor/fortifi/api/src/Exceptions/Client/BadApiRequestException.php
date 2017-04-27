<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class BadApiRequestException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 400, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Bad Request';
    }
    parent::__construct($message, $code, $previous);
  }
}

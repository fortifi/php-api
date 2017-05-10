<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class NotFoundException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 404, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Not Found';
    }
    parent::__construct($message, $code, $previous);
  }
}

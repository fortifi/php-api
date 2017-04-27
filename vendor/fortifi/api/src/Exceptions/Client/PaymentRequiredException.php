<?php
namespace Fortifi\Api\Core\Exceptions\Client;

class PaymentRequiredException extends ClientApiException
{
  /**
   * @inheritDoc
   */
  public function __construct(
    $message = '', $code = 402, \Exception $previous = null
  )
  {
    if(empty($message))
    {
      $message = 'Payment Required';
    }
    parent::__construct($message, $code, $previous);
  }
}

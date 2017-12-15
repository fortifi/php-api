<?php
namespace Fortifi\Api\V1\Enums;

final class PaymentMethod
{
  const UNKNOWN = 'unknown';
  const MULTIPLE = 'multiple';
  const PAYPAL = 'paypal';
  const BITCOIN = 'bitcoin';
  const ACCOUNT_BALANCE = 'account_balance';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'unknown',
      'multiple',
      'paypal',
      'bitcoin',
      'account_balance',
    ];
  }
}
      

<?php
namespace Fortifi\Api\V1\Enums;

final class PaymentMode
{
  const AUTOMATIC = 'automatic';
  const REQUEST = 'request';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'automatic',
      'request',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

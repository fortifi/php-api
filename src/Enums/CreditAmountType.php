<?php
namespace Fortifi\Api\V1\Enums;

final class CreditAmountType
{
  const PERCENT_OF_REMAINING = 'percent_of_remaining';
  const PERCENT_OF_TOTAL = 'percent_of_total';
  const FIXED = 'fixed';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'percent_of_remaining',
      'percent_of_total',
      'fixed',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

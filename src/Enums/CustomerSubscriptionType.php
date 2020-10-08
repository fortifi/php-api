<?php
namespace Fortifi\Api\V1\Enums;

final class CustomerSubscriptionType
{
  const NONE = 'none';
  const TRIAL = 'trial';
  const FREE = 'free';
  const PAID = 'paid';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'none',
      'trial',
      'free',
      'paid',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

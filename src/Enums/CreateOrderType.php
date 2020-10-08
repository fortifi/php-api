<?php
namespace Fortifi\Api\V1\Enums;

final class CreateOrderType
{
  const INITIAL = 'initial';
  const PURCHASE = 'purchase';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'initial',
      'purchase',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

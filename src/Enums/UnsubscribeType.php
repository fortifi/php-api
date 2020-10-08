<?php
namespace Fortifi\Api\V1\Enums;

final class UnsubscribeType
{
  const SOFT = 'soft';
  const HARD = 'hard';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'soft',
      'hard',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

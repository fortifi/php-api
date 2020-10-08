<?php
namespace Fortifi\Api\V1\Enums;

final class OptInStatus
{
  const NO = 'no';
  const CLICKED = 'clicked';
  const CONFIRMED = 'confirmed';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'no',
      'clicked',
      'confirmed',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

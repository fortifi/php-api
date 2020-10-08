<?php
namespace Fortifi\Api\V1\Enums;

final class ChargebackSource
{
  const GATEWAY = 'gateway';
  const ETHOCA = 'ethoca';
  const VERIFI = 'verifi';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'gateway',
      'ethoca',
      'verifi',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

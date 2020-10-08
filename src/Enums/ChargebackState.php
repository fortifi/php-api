<?php
namespace Fortifi\Api\V1\Enums;

final class ChargebackState
{
  const ALERT = 'alert';
  const INITIATED = 'initiated';
  const DISPUTED = 'disputed';
  const WON = 'won';
  const LOST = 'lost';
  const UNDISPUTED_LOSS = 'undisputed_loss';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'alert',
      'initiated',
      'disputed',
      'won',
      'lost',
      'undisputed_loss',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

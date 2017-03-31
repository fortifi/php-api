<?php
namespace Fortifi\Api\V1\Enums;

final class ModifySubscriptionMode
{
  const PRORATE = 'prorate';
  const EXTEND = 'extend';
  const REPLACE = 'replace';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'prorate',
      'extend',
      'replace',
    ];
  }
}
      

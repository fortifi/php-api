<?php
namespace Fortifi\Api\V1\Enums;

final class CycleTermType
{
  const ONETIME = 'onetime';
  const LIFETIME = 'lifetime';
  const DAY = 'day';
  const WEEK = 'week';
  const MONTH = 'month';
  const YEAR = 'year';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'onetime',
      'lifetime',
      'day',
      'week',
      'month',
      'year',
    ];
  }
}
      

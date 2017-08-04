<?php
namespace Fortifi\Api\V1\Enums;

final class SubscriptionRefundType
{
  const PRORATE = 'prorate';
  const FULL = 'full';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'prorate',
      'full',
    ];
  }
}
      

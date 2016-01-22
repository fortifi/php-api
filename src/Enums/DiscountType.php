<?php
namespace Fortifi\Api\V1\Enums;

final class DiscountType
{
  const FIXED = 'fixed';
  const PERCENTAGE = 'percentage';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'fixed',
      'percentage',
    ];
  }
}
      

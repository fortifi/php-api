<?php
namespace Fortifi\Api\V1\Enums;

final class ReasonGroupType
{
  const CANCEL = 'cancel';
  const SUSPEND = 'suspend';
  const REFUND = 'refund';
  const CREDIT = 'credit';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'cancel',
      'suspend',
      'refund',
      'credit',
    ];
  }
}
      

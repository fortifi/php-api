<?php
namespace Fortifi\Api\V1\Enums;

final class AdvertiserType
{
  const AFFILIATE = 'affiliate';
  const NETWORK = 'network';
  const CUSTOMER = 'customer';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'affiliate',
      'network',
      'customer',
    ];
  }
}
      

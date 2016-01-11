<?php
namespace Fortifi\Api\V1\Enums;

final class CustomerLifecycle
{
  const PROSPECT = 'prospect';
  const CUSTOMER = 'customer';
  const CLOSED = 'closed';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'prospect',
      'customer',
      'closed',
    ];
  }
}
      

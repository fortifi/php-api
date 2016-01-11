<?php
namespace Fortifi\Api\V1\Enums;

final class CustomerAccountStatus
{
  const SETUP = 'setup';
  const ACTIVE = 'active';
  const SUSPENDED = 'suspended';
  const EXPIRED = 'expired';
  const CANCELLED = 'cancelled';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'setup',
      'active',
      'suspended',
      'expired',
      'cancelled',
    ];
  }
}
      

<?php
namespace Fortifi\Api\V1\Enums;

final class PurchaseStatus
{
  const SETUP = 'setup';
  const TRIAL = 'trial';
  const ACTIVE = 'active';
  const INACTIVE = 'inactive';
  const UPGRADED = 'upgraded';
  const SUSPENDED = 'suspended';
  const CANCELLED = 'cancelled';
  const DELETED = 'deleted';
  const ENDED = 'ended';
  const SETTING_UP = 'setting_up';
  const INVALID = 'invalid';
  const PROVISION_PREPARE = 'provision_prepare';
  const PROVISIONING = 'provisioning';
  const PROVISIONED = 'provisioned';
  const PROVISIONING_FAILED = 'provisioning_failed';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'setup',
      'trial',
      'active',
      'inactive',
      'upgraded',
      'suspended',
      'cancelled',
      'deleted',
      'ended',
      'setting_up',
      'invalid',
      'provision_prepare',
      'provisioning',
      'provisioned',
      'provisioning_failed',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

<?php
namespace Fortifi\Api\V1\Enums;

final class PublisherType
{
  const AFFILIATE = 'affiliate';
  const NETWORK = 'network';
  const CUSTOMER = 'customer';
  const DISPLAY = 'display';
  const PRIORITY_AFFILIATE = 'priority_affiliate';
  const OFFLINE = 'offline';
  const PPC = 'ppc';
  const INTERNAL = 'internal';
  const SEARCH_ENGINE = 'search_engine';
  const MOBILE = 'mobile';
  const EMAIL = 'email';
  const RETARGET = 'retarget';
  const CONTENT = 'content';

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
      'display',
      'priority_affiliate',
      'offline',
      'ppc',
      'internal',
      'search_engine',
      'mobile',
      'email',
      'retarget',
      'content',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

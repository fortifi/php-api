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
  const NATIVE = 'native';
  const SOCIAL = 'social';
  const PUSH = 'push';
  const VIDEO = 'video';
  const TV = 'tv';
  const SEO = 'seo';
  const APP_INSTALL = 'app_install';
  const PODCAST = 'podcast';
  const INFLUENCER = 'influencer';

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
      'native',
      'social',
      'push',
      'video',
      'tv',
      'seo',
      'app_install',
      'podcast',
      'influencer',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

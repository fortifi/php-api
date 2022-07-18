<?php
namespace Fortifi\Api\V1\Enums;

final class AppstoreNotificationType
{
  const APPSTORE_SUBSCRIPTION_PURCHASE = 'appstore_subscription_purchase';
  const APPSTORE_SUBSCRIPTION_CANCEL = 'appstore_subscription_cancel';
  const APPSTORE_SUBSCRIPTION_RENEW = 'appstore_subscription_renew';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'appstore_subscription_purchase',
      'appstore_subscription_cancel',
      'appstore_subscription_renew',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

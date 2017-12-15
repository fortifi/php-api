<?php
namespace Fortifi\Api\V1\Enums;

final class PaymentAccountType
{
  const UNKNOWN = 'unknown';
  const VISA = 'visa';
  const MASTERCARD = 'mastercard';
  const AMEX = 'amex';
  const JCB = 'jcb';
  const DISCOVER = 'discover';
  const DINERS = 'diners';
  const ENCRYPTED = 'encrypted';
  const PAYPAL_PERSONAL = 'paypal_personal';
  const PAYPAL_PREMIER = 'paypal_premier';
  const PAYPAL_BUSINESS = 'paypal_business';
  const PAYPAL_VERIFIED = 'paypal_verified';
  const PAYPAL_UNVERIFIED = 'paypal_unverified';
  const PAYPAL = 'paypal';
  const BITCOIN = 'bitcoin';
  const ACCOUNT_BALANCE = 'account_balance';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'unknown',
      'visa',
      'mastercard',
      'amex',
      'jcb',
      'discover',
      'diners',
      'encrypted',
      'paypal_personal',
      'paypal_premier',
      'paypal_business',
      'paypal_verified',
      'paypal_unverified',
      'paypal',
      'bitcoin',
      'account_balance',
    ];
  }
}
      

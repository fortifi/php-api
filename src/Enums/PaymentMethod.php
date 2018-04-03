<?php
namespace Fortifi\Api\V1\Enums;

final class PaymentMethod
{
  const CREDITCARD = 'creditcard';
  const DEBITCARD = 'debitcard';
  const CHEQUE = 'cheque';
  const CASH = 'cash';
  const PREPAIDCARD = 'prepaidcard';
  const DIRECTDEBIT = 'directdebit';
  const BACS = 'bacs';
  const STANDINGORDER = 'standingorder';
  const CHAPS = 'chaps';
  const ONLINESERVICE = 'onlineservice';
  const TELEPHONE = 'telephone';
  const CREDITNOTE = 'creditnote';
  const VIRTUALCARD = 'virtualcard';
  const GIFTCARD = 'giftcard';
  const UNKNOWN = 'unknown';
  const MULTIPLE = 'multiple';
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
      'creditcard',
      'debitcard',
      'cheque',
      'cash',
      'prepaidcard',
      'directdebit',
      'bacs',
      'standingorder',
      'chaps',
      'onlineservice',
      'telephone',
      'creditnote',
      'virtualcard',
      'giftcard',
      'unknown',
      'multiple',
      'paypal',
      'bitcoin',
      'account_balance',
    ];
  }
}
      

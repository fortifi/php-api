<?php
namespace Fortifi\Api\V1\Enums;

final class PaymentServiceProcessor
{
  const PAYPAL = 'paypal';
  const WIRE = 'wire';
  const BLACKHOLE = 'blackhole';
  const CHEQUE = 'cheque';
  const PREPAYMENT = 'prepayment';
  const FORTIFIPAY = 'fortifipay';
  const COINBASE = 'coinbase';
  const STIPE = 'stipe';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'paypal',
      'wire',
      'blackhole',
      'cheque',
      'prepayment',
      'fortifipay',
      'coinbase',
      'stipe',
    ];
  }
}
      

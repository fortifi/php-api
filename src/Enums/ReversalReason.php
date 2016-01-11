<?php
namespace Fortifi\Api\V1\Enums;

final class ReversalReason
{
  const CHARGEBACK = 'chargeback';
  const CANCEL = 'cancel';
  const FRAUD = 'fraud';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'chargeback',
      'cancel',
      'fraud',
    ];
  }
}
      

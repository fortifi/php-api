<?php
namespace Fortifi\Api\V1\Enums;

final class CustomerLifecycle
{
  const CLOSED = 'closed';
  const COLD = 'cold';
  const CUSTOMER = 'customer';
  const EVANGELIST = 'evangelist';
  const LEAD = 'lead';
  const MQL = 'mql';
  const OPPORTUNITY = 'opportunity';
  const OTHER = 'other';
  const PROSPECT = 'prospect';
  const RECOMMENDED = 'recommended';
  const SQL = 'sql';
  const SUBSCRIBER = 'subscriber';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'closed',
      'cold',
      'customer',
      'evangelist',
      'lead',
      'mql',
      'opportunity',
      'other',
      'prospect',
      'recommended',
      'sql',
      'subscriber',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

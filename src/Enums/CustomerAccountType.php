<?php
namespace Fortifi\Api\V1\Enums;

final class CustomerAccountType
{
  const UNKNOWN = 'unknown';
  const STUDENT = 'student';
  const CHARITY = 'charity';
  const BUSINESS = 'business';
  const RESIDENTIAL = 'residential';
  const ENTERPRISE = 'enterprise';
  const GROUP = 'group';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'unknown',
      'student',
      'charity',
      'business',
      'residential',
      'enterprise',
      'group',
    ];
  }
}
      

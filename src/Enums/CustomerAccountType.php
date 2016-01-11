<?php
namespace Fortifi\Api\V1\Enums;

final class CustomerAccountType
{
  const UNKNOWN = 'unknown';
  const BUSINESS = 'business';
  const RESIDENTIAL = 'residential';
  const STUDENT = 'student';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'unknown',
      'business',
      'residential',
      'student',
    ];
  }
}
      

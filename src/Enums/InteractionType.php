<?php
namespace Fortifi\Api\V1\Enums;

final class InteractionType
{
  const UNKNOWN = 'unknown';
  const VOICE = 'voice';
  const EMAIL = 'email';
  const CHAT = 'chat';
  const TICKET = 'ticket';
  const MEETING = 'meeting';
  const REMOTE = 'remote';
  const LETTER = 'letter';
  const SOCIAL = 'social';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'unknown',
      'voice',
      'email',
      'chat',
      'ticket',
      'meeting',
      'remote',
      'letter',
      'social',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      

<?php
namespace Fortifi\Api\V1\Enums;

final class TicketStatus
{
  const OPEN = 'open';
  const ON_HOLD = 'on_hold';
  const PENDING_REPLY = 'pending_reply';
  const RESOLVED = 'resolved';
  const INVALID = 'invalid';
  const DUPLICATE = 'duplicate';
  const CLOSED = 'closed';
  const TRASH = 'trash';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'open',
      'on_hold',
      'pending_reply',
      'resolved',
      'invalid',
      'duplicate',
      'closed',
      'trash',
    ];
  }
}
      

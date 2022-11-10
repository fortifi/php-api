<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TicketStatusPayload
  implements \JsonSerializable
{
  /**
   * Ticket Status
   */
  protected $_ticketStatus;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["ticketStatus"]))
    {
      $this->_ticketStatus = (string)$data["ticketStatus"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "ticketStatus" => $this->_ticketStatus,
    ];
  }

  const TICKET_STATUS_OPEN = 'open';
  const TICKET_STATUS_ON_HOLD = 'on_hold';
  const TICKET_STATUS_PENDING_REPLY = 'pending_reply';
  const TICKET_STATUS_RESOLVED = 'resolved';
  const TICKET_STATUS_INVALID = 'invalid';
  const TICKET_STATUS_DUPLICATE = 'duplicate';
  const TICKET_STATUS_CLOSED = 'closed';
  const TICKET_STATUS_TRASH = 'trash';

  /**
   * @param string $value open, on_hold, pending_reply, resolved, invalid, duplicate, closed, trash
   *
   * @return $this
   */
  public function setTicketStatus(?string $value)
  {
    $this->_ticketStatus = $value;
    return $this;
  }

  /**
   * Ticket Status
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTicketStatus($default = null, $trim = true)
  {
    $value = $this->_ticketStatus ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

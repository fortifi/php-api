<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TicketReplyPayload
  implements \JsonSerializable
{
  protected $_textBody;
  /**
   * Ticket Status
   */
  protected $_status;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["textBody"]))
    {
      $this->_textBody = (string)$data["textBody"];
    }
    if(isset($data["status"]))
    {
      $this->_status = (string)$data["status"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "textBody" => $this->_textBody,
      "status"   => $this->_status,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTextBody(?string $value)
  {
    $this->_textBody = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTextBody($default = null, $trim = true)
  {
    $value = $this->_textBody ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const STATUS_OPEN = 'open';
  const STATUS_ON_HOLD = 'on_hold';
  const STATUS_PENDING_REPLY = 'pending_reply';
  const STATUS_RESOLVED = 'resolved';
  const STATUS_INVALID = 'invalid';
  const STATUS_DUPLICATE = 'duplicate';
  const STATUS_CLOSED = 'closed';
  const STATUS_TRASH = 'trash';

  /**
   * @param string $value open, on_hold, pending_reply, resolved, invalid, duplicate, closed, trash
   *
   * @return $this
   */
  public function setStatus(?string $value)
  {
    $this->_status = $value;
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
  public function getStatus($default = null, $trim = true)
  {
    $value = $this->_status ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

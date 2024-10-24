<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TicketReplyPayload
  implements \JsonSerializable
{
  protected $_textBody;
  protected $_htmlBody;
  /**
   * Ticket Status
   */
  protected $_status;
  protected $_attachments;
  protected $_contactFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["textBody"]))
    {
      $this->_textBody = (string)$data["textBody"];
    }
    if(isset($data["htmlBody"]))
    {
      $this->_htmlBody = (string)$data["htmlBody"];
    }
    if(isset($data["status"]))
    {
      $this->_status = (string)$data["status"];
    }
    if(isset($data["attachments"]))
    {
      $this->_attachments = $data["attachments"];
    }
    if(isset($data["contactFid"]))
    {
      $this->_contactFid = (string)$data["contactFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "textBody"    => $this->_textBody,
      "htmlBody"    => $this->_htmlBody,
      "status"      => $this->_status,
      "attachments" => $this->_attachments,
      "contactFid"  => $this->_contactFid,
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setHtmlBody(?string $value)
  {
    $this->_htmlBody = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getHtmlBody($default = null, $trim = true)
  {
    $value = $this->_htmlBody ?: $default;
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

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setAttachments(?array $value)
  {
    $this->_attachments = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addAttachment(string $item)
  {
    $this->_attachments[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getAttachments($default = [])
  {
    return $this->_attachments ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContactFid(?string $value)
  {
    $this->_contactFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContactFid($default = null, $trim = true)
  {
    $value = $this->_contactFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

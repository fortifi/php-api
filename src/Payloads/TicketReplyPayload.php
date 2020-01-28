<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TicketReplyPayload
  implements \JsonSerializable
{
  protected $_textBody;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["textBody"]))
    {
      $this->_textBody = (string)$data["textBody"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "textBody" => $this->_textBody,
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
}

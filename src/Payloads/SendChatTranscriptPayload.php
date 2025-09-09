<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class SendChatTranscriptPayload
  implements \JsonSerializable
{
  /**
   * @required
   */
  protected $_email;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["email"]))
    {
      $this->_email = (string)$data["email"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "email" => $this->_email,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEmail(?string $value)
  {
    $this->_email = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = $this->_email ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

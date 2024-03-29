<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ConfirmPayPalOrderPayload
  extends ConfirmOrderPayload
  implements \JsonSerializable
{
  protected $_token;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["token"]))
    {
      $this->_token = (string)$data["token"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "token" => $this->_token,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setToken(?string $value)
  {
    $this->_token = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getToken($default = null, $trim = true)
  {
    $value = $this->_token ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

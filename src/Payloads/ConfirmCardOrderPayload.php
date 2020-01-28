<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ConfirmCardOrderPayload
  extends ConfirmOrderPayload
  implements \JsonSerializable
{
  protected $_cvv;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["cvv"]))
    {
      $this->_cvv = (string)$data["cvv"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "cvv" => $this->_cvv,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCvv(?string $value)
  {
    $this->_cvv = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCvv($default = null, $trim = true)
  {
    $value = $this->_cvv ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

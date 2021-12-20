<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class RetentionFlowOptionPayload
  implements \JsonSerializable
{
  protected $_key;
  protected $_value;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["key"]))
    {
      $this->_key = (string)$data["key"];
    }
    if(isset($data["value"]))
    {
      $this->_value = (string)$data["value"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "key"   => $this->_key,
      "value" => $this->_value,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setKey(?string $value)
  {
    $this->_key = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getKey($default = null, $trim = true)
  {
    $value = $this->_key ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setValue(?string $value)
  {
    $this->_value = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getValue($default = null, $trim = true)
  {
    $value = $this->_value ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

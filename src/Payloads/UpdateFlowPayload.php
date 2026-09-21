<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateFlowPayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_group;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["group"]))
    {
      $this->_group = (string)$data["group"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName" => $this->_displayName,
      "group"       => $this->_group,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = $this->_displayName ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setGroup(?string $value)
  {
    $this->_group = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getGroup($default = null, $trim = true)
  {
    $value = $this->_group ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

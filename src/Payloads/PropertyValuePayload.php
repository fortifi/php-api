<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class PropertyValuePayload
  implements \JsonSerializable
{
  /**
   * Property Value
   */
  protected $_propertyValue;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["propertyValue"]))
    {
      $this->_propertyValue = (string)$data["propertyValue"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "propertyValue" => $this->_propertyValue,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPropertyValue(?string $value)
  {
    $this->_propertyValue = $value;
    return $this;
  }

  /**
   * Property Value
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPropertyValue($default = null, $trim = true)
  {
    $value = $this->_propertyValue ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

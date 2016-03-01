<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class PropertyFlagPayload
  implements \JsonSerializable
{
  /**
   * Property Flag Value
   */
  protected $_propertyValue;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["propertyValue"]))
    {
      $this->_propertyValue = $data["propertyValue"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "propertyValue" => $this->_propertyValue,
    ];
  }

  /**
   * @param boolean $value
   *
   * @return $this
   */
  public function setPropertyValue($value)
  {
    $this->_propertyValue = $value;
    return $this;
  }

  /**
   * Property Flag Value
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isPropertyValue($default = false)
  {
    return $this->_propertyValue ?: $default;
  }
}

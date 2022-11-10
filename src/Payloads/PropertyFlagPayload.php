<?php
namespace Fortifi\Api\V1\Payloads;

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

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "propertyValue" => $this->_propertyValue,
    ];
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setPropertyValue(?bool $value)
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
    return (bool)$this->_propertyValue ?: $default;
  }
}

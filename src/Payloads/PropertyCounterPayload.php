<?php
namespace Fortifi\Api\V1\Payloads;

class PropertyCounterPayload
  implements \JsonSerializable
{
  /**
   * Property Counter Adjustment
   */
  protected $_propertyValue;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["propertyValue"]))
    {
      $this->_propertyValue = (int)$data["propertyValue"];
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
   * @param int $value
   *
   * @return $this
   */
  public function setPropertyValue(?int $value)
  {
    $this->_propertyValue = $value;
    return $this;
  }

  /**
   * Property Counter Adjustment
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getPropertyValue($default = null)
  {
    return $this->_propertyValue ?: $default;
  }
}

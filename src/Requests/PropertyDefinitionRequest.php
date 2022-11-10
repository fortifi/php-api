<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PropertyDefinitionRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "key" => $this->getKey(),
        "groupFid" => $this->getGroupFid(),
        "type" => $this->getType(),
        "values" => $this->getValues(),
        "valueType" => $this->getValueType(),
        "validationType" => $this->getValidationType(),
        "validationConfig" => $this->getValidationConfig(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getKey($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'key', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getGroupFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'groupFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'type', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getValues($default = [])
  {
    return Objects::property($this->_getResultJson(), 'values', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getValueType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'valueType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getValidationType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'validationType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getValidationConfig($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'validationConfig', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}

<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class LabelRequest
  extends FidRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "label" => $this->getLabel(),
        "value" => $this->getValue(),
      ]
    );
  }

  /**
   * Label
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLabel($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'label', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Value
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getValue($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'value', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

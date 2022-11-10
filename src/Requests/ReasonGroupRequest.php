<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReasonGroupRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "builtIn" => $this->isBuiltIn(),
        "reasonCount" => $this->getReasonCount(),
        "type" => $this->getType(),
      ]
    );
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isBuiltIn($default = false)
  {
    return Objects::property($this->_getResultJson(), 'builtIn', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getReasonCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'reasonCount', $default);
  }

  /**
   * Reason Group Type
   * 
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
}

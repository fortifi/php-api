<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PolymerRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "parentFid" => $this->getParentFid(),
        "createdAt" => $this->getCreatedAt(),
        "data" => $this->getData(),
      ]
    );
  }

  /**
   * The Polymer Parent FID
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'parentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreatedAt($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'createdAt', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Data stored on the Po§lymer
   * 
   * @param mixed $default
   *
   * @return string[]
   */
  public function getData($default = [])
  {
    return Objects::property($this->_getResultJson(), 'data', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}

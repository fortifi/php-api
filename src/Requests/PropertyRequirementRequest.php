<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PropertyRequirementRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
      "predicate" => $this->getPredicate(),
    ];
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
  public function getPredicate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'predicate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

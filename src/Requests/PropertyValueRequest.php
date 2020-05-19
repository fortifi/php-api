<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PropertyValueRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "propertyValue" => $this->getPropertyValue(),
    ];
  }

  /**
   * Property value
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPropertyValue($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'propertyValue', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

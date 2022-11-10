<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FraudScanMetaDataRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
      "value" => $this->getValue(),
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
  public function getValue($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'value', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

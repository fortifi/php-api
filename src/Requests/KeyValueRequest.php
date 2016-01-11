<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class KeyValueRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
      "value" => $this->getValue(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getKey($default = null)
  {
    return Objects::property($this->_getResultJson(), 'key', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getValue($default = null)
  {
    return Objects::property($this->_getResultJson(), 'value', $default);
  }
}
      

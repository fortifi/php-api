<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PropertyFlagRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "value" => $this->isValue(),
    ];
  }

  /**
   * Flag value
   * 
   * @param bool $default
   *
   * @return boolean
   */
  public function isValue($default = false)
  {
    return Objects::property($this->_getResultJson(), 'value', $default);
  }
}

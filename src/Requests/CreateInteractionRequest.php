<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CreateInteractionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "link" => $this->getLink(),
      "code" => $this->getCode(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLink($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'link', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'code', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

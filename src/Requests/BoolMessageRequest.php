<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class BoolMessageRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "message" => $this->getMessage(),
      "result" => $this->isResult(),
    ];
  }

  /**
   * Status Message
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'message', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Success or Not
   * 
   * @param bool $default
   *
   * @return boolean
   */
  public function isResult($default = false)
  {
    return Objects::property($this->_getResultJson(), 'result', $default);
  }
}

<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ImportCostRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
      "message" => $this->getMessage(),
      "result" => $this->isResult(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
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
   * @param bool $default
   *
   * @return boolean
   */
  public function isResult($default = false)
  {
    return Objects::property($this->_getResultJson(), 'result', $default);
  }
}

<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FidRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
    ];
  }

  /**
   * Object FID
   * 
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
}

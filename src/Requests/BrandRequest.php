<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class BrandRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "brandName" => $this->getBrandName(),
      "primaryDomain" => $this->getPrimaryDomain(),
      "brandFid" => $this->getBrandFid(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'brandName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPrimaryDomain($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'primaryDomain', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'brandFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

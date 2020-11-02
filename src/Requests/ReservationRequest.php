<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReservationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
      "application" => $this->getApplication(),
      "brandFid" => $this->getBrandFid(),
      "customerFid" => $this->getCustomerFid(),
      "expiryTime" => $this->getExpiryTime(),
      "relatedFids" => $this->getRelatedFids(),
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
  public function getApplication($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'application', $default);
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

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiryTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'expiryTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getRelatedFids($default = [])
  {
    return Objects::property($this->_getResultJson(), 'relatedFids', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}

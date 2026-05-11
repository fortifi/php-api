<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class DeviceRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
      "hardwareId" => $this->getHardwareId(),
      "customerFid" => $this->getCustomerFid(),
      "displayName" => $this->getDisplayName(),
      "deviceType" => $this->getDeviceType(),
      "dateCreated" => $this->getDateCreated(),
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
  public function getHardwareId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'hardwareId', $default);
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
  public function getDisplayName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'displayName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDeviceType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'deviceType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDateCreated($default = null)
  {
    return Objects::property($this->_getResultJson(), 'dateCreated', $default);
  }
}

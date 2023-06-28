<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CustomerInteractionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "initiatedTime" => $this->getInitiatedTime(),
      "disconnectTime" => $this->getDisconnectTime(),
      "topic" => $this->getTopic(),
      "departmentFid" => $this->getDepartmentFid(),
      "queueFid" => $this->getQueueFid(),
      "fid" => $this->getFid(),
      "type" => $this->getType(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitiatedTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'initiatedTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisconnectTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'disconnectTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTopic($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'topic', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'departmentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQueueFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'queueFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
  public function getType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'type', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

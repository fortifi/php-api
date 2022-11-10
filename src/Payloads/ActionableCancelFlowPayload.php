<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ActionableCancelFlowPayload
  implements \JsonSerializable
{
  protected $_userAgent;
  protected $_ip;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_time;
  protected $_userFid;
  protected $_existingFlowFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["ip"]))
    {
      $this->_ip = (string)$data["ip"];
    }
    if(isset($data["time"]))
    {
      $this->_time = (string)$data["time"];
    }
    if(isset($data["userFid"]))
    {
      $this->_userFid = (string)$data["userFid"];
    }
    if(isset($data["existingFlowFid"]))
    {
      $this->_existingFlowFid = (string)$data["existingFlowFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "userAgent"       => $this->_userAgent,
      "ip"              => $this->_ip,
      "time"            => $this->_time,
      "userFid"         => $this->_userFid,
      "existingFlowFid" => $this->_existingFlowFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserAgent(?string $value)
  {
    $this->_userAgent = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserAgent($default = null, $trim = true)
  {
    $value = $this->_userAgent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setIp(?string $value)
  {
    $this->_ip = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIp($default = null, $trim = true)
  {
    $value = $this->_ip ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTime(?string $value)
  {
    $this->_time = $value;
    return $this;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTime($default = null, $trim = true)
  {
    $value = $this->_time ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserFid(?string $value)
  {
    $this->_userFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserFid($default = null, $trim = true)
  {
    $value = $this->_userFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExistingFlowFid(?string $value)
  {
    $this->_existingFlowFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExistingFlowFid($default = null, $trim = true)
  {
    $value = $this->_existingFlowFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

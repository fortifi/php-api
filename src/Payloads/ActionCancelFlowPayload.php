<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ActionCancelFlowPayload
  implements \JsonSerializable
{
  protected $_decisionKey;
  protected $_userAgent;
  protected $_ip;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_time;
  protected $_userFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["decisionKey"]))
    {
      $this->_decisionKey = (string)$data["decisionKey"];
    }
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
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "decisionKey" => $this->_decisionKey,
      "userAgent"   => $this->_userAgent,
      "ip"          => $this->_ip,
      "time"        => $this->_time,
      "userFid"     => $this->_userFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDecisionKey(?string $value)
  {
    $this->_decisionKey = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDecisionKey($default = null, $trim = true)
  {
    $value = $this->_decisionKey ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
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
}
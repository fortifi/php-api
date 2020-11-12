<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreatePendingPaymentMethodPayload
  implements \JsonSerializable
{
  protected $_name;
  protected $_scheme;
  protected $_token;
  protected $_expiry;
  protected $_brandFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["name"]))
    {
      $this->_name = (string)$data["name"];
    }
    if(isset($data["scheme"]))
    {
      $this->_scheme = (string)$data["scheme"];
    }
    if(isset($data["token"]))
    {
      $this->_token = (string)$data["token"];
    }
    if(isset($data["expiry"]))
    {
      $this->_expiry = (string)$data["expiry"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = (string)$data["brandFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "name"     => $this->_name,
      "scheme"   => $this->_scheme,
      "token"    => $this->_token,
      "expiry"   => $this->_expiry,
      "brandFid" => $this->_brandFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setName(?string $value)
  {
    $this->_name = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getName($default = null, $trim = true)
  {
    $value = $this->_name ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setScheme(?string $value)
  {
    $this->_scheme = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getScheme($default = null, $trim = true)
  {
    $value = $this->_scheme ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setToken(?string $value)
  {
    $this->_token = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getToken($default = null, $trim = true)
  {
    $value = $this->_token ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExpiry(?string $value)
  {
    $this->_expiry = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiry($default = null, $trim = true)
  {
    $value = $this->_expiry ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid(?string $value)
  {
    $this->_brandFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = $this->_brandFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

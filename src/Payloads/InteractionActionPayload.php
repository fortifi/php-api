<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class InteractionActionPayload
  implements \JsonSerializable
{
  protected $_provider;
  protected $_providerReference;
  protected $_timestamp;
  protected $_data;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["provider"]))
    {
      $this->_provider = (string)$data["provider"];
    }
    if(isset($data["providerReference"]))
    {
      $this->_providerReference = (string)$data["providerReference"];
    }
    if(isset($data["timestamp"]))
    {
      $this->_timestamp = (string)$data["timestamp"];
    }
    if(isset($data["data"]))
    {
      $this->_data = $data["data"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "provider"          => $this->_provider,
      "providerReference" => $this->_providerReference,
      "timestamp"         => $this->_timestamp,
      "data"              => $this->_data,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProvider(?string $value)
  {
    $this->_provider = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProvider($default = null, $trim = true)
  {
    $value = $this->_provider ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProviderReference(?string $value)
  {
    $this->_providerReference = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProviderReference($default = null, $trim = true)
  {
    $value = $this->_providerReference ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTimestamp(?string $value)
  {
    $this->_timestamp = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTimestamp($default = null, $trim = true)
  {
    $value = $this->_timestamp ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param  $value
   *
   * @return $this
   */
  public function setData($value)
  {
    $this->_data = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return object
   */
  public function getData($default = null)
  {
    return $this->_data ?: $default;
  }
}

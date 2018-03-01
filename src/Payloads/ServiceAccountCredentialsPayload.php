<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ServiceAccountCredentialsPayload
  implements \JsonSerializable
{
  /**
   * @required
   */
  protected $_id;
  /**
   * @required
   */
  protected $_key;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["id"]))
    {
      $this->_id = $data["id"];
    }
    if(isset($data["key"]))
    {
      $this->_key = $data["key"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "id"  => $this->_id,
      "key" => $this->_key,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setId($value)
  {
    $this->_id = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getId($default = null, $trim = true)
  {
    $value = $this->_id ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setKey($value)
  {
    $this->_key = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getKey($default = null, $trim = true)
  {
    $value = $this->_key ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

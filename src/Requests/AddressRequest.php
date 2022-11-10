<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AddressRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "address1" => $this->getAddress1(),
        "address2" => $this->getAddress2(),
        "address3" => $this->getAddress3(),
        "town" => $this->getTown(),
        "county" => $this->getCounty(),
        "country" => $this->getCountry(),
        "postalCode" => $this->getPostalCode(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddress1($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'address1', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddress2($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'address2', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddress3($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'address3', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTown($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'town', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCounty($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'county', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'country', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPostalCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'postalCode', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

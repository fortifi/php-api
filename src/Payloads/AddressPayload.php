<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class AddressPayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_address1;
  protected $_address2;
  protected $_address3;
  protected $_town;
  protected $_county;
  protected $_country;
  protected $_postalCode;
  protected $_setAsDefault;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["description"]))
    {
      $this->_description = (string)$data["description"];
    }
    if(isset($data["address1"]))
    {
      $this->_address1 = (string)$data["address1"];
    }
    if(isset($data["address2"]))
    {
      $this->_address2 = (string)$data["address2"];
    }
    if(isset($data["address3"]))
    {
      $this->_address3 = (string)$data["address3"];
    }
    if(isset($data["town"]))
    {
      $this->_town = (string)$data["town"];
    }
    if(isset($data["county"]))
    {
      $this->_county = (string)$data["county"];
    }
    if(isset($data["country"]))
    {
      $this->_country = (string)$data["country"];
    }
    if(isset($data["postalCode"]))
    {
      $this->_postalCode = (string)$data["postalCode"];
    }
    if(isset($data["setAsDefault"]))
    {
      $this->_setAsDefault = $data["setAsDefault"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"  => $this->_displayName,
      "description"  => $this->_description,
      "address1"     => $this->_address1,
      "address2"     => $this->_address2,
      "address3"     => $this->_address3,
      "town"         => $this->_town,
      "county"       => $this->_county,
      "country"      => $this->_country,
      "postalCode"   => $this->_postalCode,
      "setAsDefault" => $this->_setAsDefault,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = $this->_displayName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDescription(?string $value)
  {
    $this->_description = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = $this->_description ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddress1(?string $value)
  {
    $this->_address1 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddress1($default = null, $trim = true)
  {
    $value = $this->_address1 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddress2(?string $value)
  {
    $this->_address2 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddress2($default = null, $trim = true)
  {
    $value = $this->_address2 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddress3(?string $value)
  {
    $this->_address3 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddress3($default = null, $trim = true)
  {
    $value = $this->_address3 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTown(?string $value)
  {
    $this->_town = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTown($default = null, $trim = true)
  {
    $value = $this->_town ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCounty(?string $value)
  {
    $this->_county = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCounty($default = null, $trim = true)
  {
    $value = $this->_county ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCountry(?string $value)
  {
    $this->_country = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = $this->_country ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPostalCode(?string $value)
  {
    $this->_postalCode = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPostalCode($default = null, $trim = true)
  {
    $value = $this->_postalCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setSetAsDefault(?bool $value)
  {
    $this->_setAsDefault = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isSetAsDefault($default = false)
  {
    return (bool)$this->_setAsDefault ?: $default;
  }
}

<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateCustomerContactPayload
  implements \JsonSerializable
{
  /**
   * Email
   */
  protected $_email;
  /**
   * Phone
   */
  protected $_phone;
  /**
   * Prefix
   */
  protected $_prefix;
  /**
   * First name
   */
  protected $_firstName;
  /**
   * Middles names
   */
  protected $_middleNames;
  /**
   * Last name
   */
  protected $_lastName;
  /**
   * Suffix
   */
  protected $_suffix;
  /**
   * Nick name
   */
  protected $_nickname;
  /**
   * Birthday
   */
  protected $_birthday;
  /**
   * Job Title
   */
  protected $_jobTitle;
  /**
   * Address Line 1
   */
  protected $_address1;
  /**
   * Address Line 2
   */
  protected $_address2;
  /**
   * Address Line 3
   */
  protected $_address3;
  /**
   * Town
   */
  protected $_town;
  /**
   * County
   */
  protected $_county;
  /**
   * Country
   */
  protected $_country;
  /**
   * Post Code
   */
  protected $_postalCode;
  /**
   * External Reference
   */
  protected $_externalReference;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["email"]))
    {
      $this->_email = (string)$data["email"];
    }
    if(isset($data["phone"]))
    {
      $this->_phone = (string)$data["phone"];
    }
    if(isset($data["prefix"]))
    {
      $this->_prefix = (string)$data["prefix"];
    }
    if(isset($data["firstName"]))
    {
      $this->_firstName = (string)$data["firstName"];
    }
    if(isset($data["middleNames"]))
    {
      $this->_middleNames = (string)$data["middleNames"];
    }
    if(isset($data["lastName"]))
    {
      $this->_lastName = (string)$data["lastName"];
    }
    if(isset($data["suffix"]))
    {
      $this->_suffix = (string)$data["suffix"];
    }
    if(isset($data["nickname"]))
    {
      $this->_nickname = (string)$data["nickname"];
    }
    if(isset($data["birthday"]))
    {
      $this->_birthday = (string)$data["birthday"];
    }
    if(isset($data["jobTitle"]))
    {
      $this->_jobTitle = (string)$data["jobTitle"];
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
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = (string)$data["externalReference"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "email"             => $this->_email,
      "phone"             => $this->_phone,
      "prefix"            => $this->_prefix,
      "firstName"         => $this->_firstName,
      "middleNames"       => $this->_middleNames,
      "lastName"          => $this->_lastName,
      "suffix"            => $this->_suffix,
      "nickname"          => $this->_nickname,
      "birthday"          => $this->_birthday,
      "jobTitle"          => $this->_jobTitle,
      "address1"          => $this->_address1,
      "address2"          => $this->_address2,
      "address3"          => $this->_address3,
      "town"              => $this->_town,
      "county"            => $this->_county,
      "country"           => $this->_country,
      "postalCode"        => $this->_postalCode,
      "externalReference" => $this->_externalReference,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEmail(?string $value)
  {
    $this->_email = $value;
    return $this;
  }

  /**
   * Email
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = $this->_email ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPhone(?string $value)
  {
    $this->_phone = $value;
    return $this;
  }

  /**
   * Phone
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPhone($default = null, $trim = true)
  {
    $value = $this->_phone ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPrefix(?string $value)
  {
    $this->_prefix = $value;
    return $this;
  }

  /**
   * Prefix
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPrefix($default = null, $trim = true)
  {
    $value = $this->_prefix ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFirstName(?string $value)
  {
    $this->_firstName = $value;
    return $this;
  }

  /**
   * First name
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFirstName($default = null, $trim = true)
  {
    $value = $this->_firstName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMiddleNames(?string $value)
  {
    $this->_middleNames = $value;
    return $this;
  }

  /**
   * Middles names
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMiddleNames($default = null, $trim = true)
  {
    $value = $this->_middleNames ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLastName(?string $value)
  {
    $this->_lastName = $value;
    return $this;
  }

  /**
   * Last name
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastName($default = null, $trim = true)
  {
    $value = $this->_lastName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSuffix(?string $value)
  {
    $this->_suffix = $value;
    return $this;
  }

  /**
   * Suffix
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuffix($default = null, $trim = true)
  {
    $value = $this->_suffix ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setNickname(?string $value)
  {
    $this->_nickname = $value;
    return $this;
  }

  /**
   * Nick name
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNickname($default = null, $trim = true)
  {
    $value = $this->_nickname ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBirthday(?string $value)
  {
    $this->_birthday = $value;
    return $this;
  }

  /**
   * Birthday
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBirthday($default = null, $trim = true)
  {
    $value = $this->_birthday ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setJobTitle(?string $value)
  {
    $this->_jobTitle = $value;
    return $this;
  }

  /**
   * Job Title
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getJobTitle($default = null, $trim = true)
  {
    $value = $this->_jobTitle ?: $default;
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
   * Address Line 1
   *
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
   * Address Line 2
   *
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
   * Address Line 3
   *
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
   * Town
   *
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
   * County
   *
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
   * Country
   *
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
   * Post Code
   *
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
   * @param string $value
   *
   * @return $this
   */
  public function setExternalReference(?string $value)
  {
    $this->_externalReference = $value;
    return $this;
  }

  /**
   * External Reference
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalReference($default = null, $trim = true)
  {
    $value = $this->_externalReference ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

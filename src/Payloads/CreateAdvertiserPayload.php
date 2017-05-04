<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateAdvertiserPayload
  implements \JsonSerializable
{
  /**
   * Username
   * @required
   */
  protected $_username;
  /**
   * Email Address
   */
  protected $_email;
  /**
   * Password
   * @required
   */
  protected $_password;
  /**
   * Advertiser Type
   * @required
   */
  protected $_type;
  /**
   * Visiable Display Name
   */
  protected $_displayName;
  /**
   * Name of the person
   * @required
   */
  protected $_contactName;
  /**
   * Name of the company
   */
  protected $_companyName;
  /**
   * Phone Number
   */
  protected $_phone;
  /**
   * URL
   */
  protected $_website;
  /**
   * FID of an Account Manager
   */
  protected $_accountManagerFid;
  /**
   * FID of a valid Foundation
   */
  protected $_foundationFid;
  /**
   * FID of a valid Brand
   */
  protected $_brandFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["username"]))
    {
      $this->_username = $data["username"];
    }
    if(isset($data["email"]))
    {
      $this->_email = $data["email"];
    }
    if(isset($data["password"]))
    {
      $this->_password = $data["password"];
    }
    if(isset($data["type"]))
    {
      $this->_type = $data["type"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = $data["displayName"];
    }
    if(isset($data["contactName"]))
    {
      $this->_contactName = $data["contactName"];
    }
    if(isset($data["companyName"]))
    {
      $this->_companyName = $data["companyName"];
    }
    if(isset($data["phone"]))
    {
      $this->_phone = $data["phone"];
    }
    if(isset($data["website"]))
    {
      $this->_website = $data["website"];
    }
    if(isset($data["accountManagerFid"]))
    {
      $this->_accountManagerFid = $data["accountManagerFid"];
    }
    if(isset($data["foundationFid"]))
    {
      $this->_foundationFid = $data["foundationFid"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = $data["brandFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "username"          => $this->_username,
      "email"             => $this->_email,
      "password"          => $this->_password,
      "type"              => $this->_type,
      "displayName"       => $this->_displayName,
      "contactName"       => $this->_contactName,
      "companyName"       => $this->_companyName,
      "phone"             => $this->_phone,
      "website"           => $this->_website,
      "accountManagerFid" => $this->_accountManagerFid,
      "foundationFid"     => $this->_foundationFid,
      "brandFid"          => $this->_brandFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUsername($value)
  {
    $this->_username = $value;
    return $this;
  }

  /**
   * Username
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUsername($default = null, $trim = true)
  {
    $value = $this->_username ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEmail($value)
  {
    $this->_email = $value;
    return $this;
  }

  /**
   * Email Address
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
  public function setPassword($value)
  {
    $this->_password = $value;
    return $this;
  }

  /**
   * Password
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPassword($default = null, $trim = true)
  {
    $value = $this->_password ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setType($value)
  {
    $this->_type = $value;
    return $this;
  }

  /**
   * Advertiser Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getType($default = null, $trim = true)
  {
    $value = $this->_type ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName($value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * Visiable Display Name
   *
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
  public function setContactName($value)
  {
    $this->_contactName = $value;
    return $this;
  }

  /**
   * Name of the person
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContactName($default = null, $trim = true)
  {
    $value = $this->_contactName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyName($value)
  {
    $this->_companyName = $value;
    return $this;
  }

  /**
   * Name of the company
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyName($default = null, $trim = true)
  {
    $value = $this->_companyName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPhone($value)
  {
    $this->_phone = $value;
    return $this;
  }

  /**
   * Phone Number
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
  public function setWebsite($value)
  {
    $this->_website = $value;
    return $this;
  }

  /**
   * URL
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getWebsite($default = null, $trim = true)
  {
    $value = $this->_website ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAccountManagerFid($value)
  {
    $this->_accountManagerFid = $value;
    return $this;
  }

  /**
   * FID of an Account Manager
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountManagerFid($default = null, $trim = true)
  {
    $value = $this->_accountManagerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFoundationFid($value)
  {
    $this->_foundationFid = $value;
    return $this;
  }

  /**
   * FID of a valid Foundation
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFoundationFid($default = null, $trim = true)
  {
    $value = $this->_foundationFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid($value)
  {
    $this->_brandFid = $value;
    return $this;
  }

  /**
   * FID of a valid Brand
   *
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
<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateCustomerPayload
  implements \JsonSerializable
{
  /**
   * Visitor ID of the visitor
   */
  protected $_visitorId;
  /**
   * IP Address of the visitor
   */
  protected $_clientIp;
  /**
   * External (to Fortifi) Reference e.g. your internal Unique ID
   */
  protected $_externalReference;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_time;
  /**
   * FID of a valid Brand
   * @required
   */
  protected $_brandFid;
  /**
   * Currency
   */
  protected $_currency;
  /**
   * Phone Number
   */
  protected $_phoneNumber;
  /**
   * Email Address
   */
  protected $_email;
  /**
   * First Name
   */
  protected $_firstName;
  /**
   * Last Name
   */
  protected $_lastName;
  /**
   * FID of an Account Manager
   */
  protected $_accountManagerFid;
  /**
   * Account Type
   */
  protected $_accountType;
  /**
   * Account Status
   */
  protected $_accountStatus;
  /**
   * Customer Lifecycle Stage
   */
  protected $_lifecycle;
  /**
   * Customer Subscription Status
   */
  protected $_subscriptionType;
  /**
   * Language
   */
  protected $_language;
  protected $_displayName;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["visitorId"]))
    {
      $this->_visitorId = (string)$data["visitorId"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = (string)$data["clientIp"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = (string)$data["externalReference"];
    }
    if(isset($data["time"]))
    {
      $this->_time = (string)$data["time"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = (string)$data["brandFid"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = (string)$data["currency"];
    }
    if(isset($data["phoneNumber"]))
    {
      $this->_phoneNumber = (string)$data["phoneNumber"];
    }
    if(isset($data["email"]))
    {
      $this->_email = (string)$data["email"];
    }
    if(isset($data["firstName"]))
    {
      $this->_firstName = (string)$data["firstName"];
    }
    if(isset($data["lastName"]))
    {
      $this->_lastName = (string)$data["lastName"];
    }
    if(isset($data["accountManagerFid"]))
    {
      $this->_accountManagerFid = (string)$data["accountManagerFid"];
    }
    if(isset($data["accountType"]))
    {
      $this->_accountType = (string)$data["accountType"];
    }
    if(isset($data["accountStatus"]))
    {
      $this->_accountStatus = (string)$data["accountStatus"];
    }
    if(isset($data["lifecycle"]))
    {
      $this->_lifecycle = (string)$data["lifecycle"];
    }
    if(isset($data["subscriptionType"]))
    {
      $this->_subscriptionType = (string)$data["subscriptionType"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "visitorId"         => $this->_visitorId,
      "clientIp"          => $this->_clientIp,
      "externalReference" => $this->_externalReference,
      "time"              => $this->_time,
      "brandFid"          => $this->_brandFid,
      "currency"          => $this->_currency,
      "phoneNumber"       => $this->_phoneNumber,
      "email"             => $this->_email,
      "firstName"         => $this->_firstName,
      "lastName"          => $this->_lastName,
      "accountManagerFid" => $this->_accountManagerFid,
      "accountType"       => $this->_accountType,
      "accountStatus"     => $this->_accountStatus,
      "lifecycle"         => $this->_lifecycle,
      "subscriptionType"  => $this->_subscriptionType,
      "language"          => $this->_language,
      "displayName"       => $this->_displayName,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setVisitorId($value)
  {
    $this->_visitorId = $value;
    return $this;
  }

  /**
   * Visitor ID of the visitor
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVisitorId($default = null, $trim = true)
  {
    $value = $this->_visitorId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientIp($value)
  {
    $this->_clientIp = $value;
    return $this;
  }

  /**
   * IP Address of the visitor
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClientIp($default = null, $trim = true)
  {
    $value = $this->_clientIp ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalReference($value)
  {
    $this->_externalReference = $value;
    return $this;
  }

  /**
   * External (to Fortifi) Reference e.g. your internal Unique ID
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTime($value)
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCurrency($value)
  {
    $this->_currency = $value;
    return $this;
  }

  /**
   * Currency
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrency($default = null, $trim = true)
  {
    $value = $this->_currency ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPhoneNumber($value)
  {
    $this->_phoneNumber = $value;
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
  public function getPhoneNumber($default = null, $trim = true)
  {
    $value = $this->_phoneNumber ?: $default;
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
  public function setFirstName($value)
  {
    $this->_firstName = $value;
    return $this;
  }

  /**
   * First Name
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
  public function setLastName($value)
  {
    $this->_lastName = $value;
    return $this;
  }

  /**
   * Last Name
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
  public function setAccountType($value)
  {
    $this->_accountType = $value;
    return $this;
  }

  /**
   * Account Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountType($default = null, $trim = true)
  {
    $value = $this->_accountType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAccountStatus($value)
  {
    $this->_accountStatus = $value;
    return $this;
  }

  /**
   * Account Status
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountStatus($default = null, $trim = true)
  {
    $value = $this->_accountStatus ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLifecycle($value)
  {
    $this->_lifecycle = $value;
    return $this;
  }

  /**
   * Customer Lifecycle Stage
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLifecycle($default = null, $trim = true)
  {
    $value = $this->_lifecycle ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionType($value)
  {
    $this->_subscriptionType = $value;
    return $this;
  }

  /**
   * Customer Subscription Status
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionType($default = null, $trim = true)
  {
    $value = $this->_subscriptionType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguage($value)
  {
    $this->_language = $value;
    return $this;
  }

  /**
   * Language
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = $this->_language ?: $default;
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
}

<?php
namespace Fortifi\Api\V1\Payloads;

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
   * Company FID to track this event to
   * @required
   */
  protected $_companyFid;
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
   * FID of the account manager for this customer
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

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["visitorId"]))
    {
      $this->_visitorId = $data["visitorId"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = $data["clientIp"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = $data["externalReference"];
    }
    if(isset($data["time"]))
    {
      $this->_time = $data["time"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = $data["companyFid"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = $data["currency"];
    }
    if(isset($data["phoneNumber"]))
    {
      $this->_phoneNumber = $data["phoneNumber"];
    }
    if(isset($data["email"]))
    {
      $this->_email = $data["email"];
    }
    if(isset($data["firstName"]))
    {
      $this->_firstName = $data["firstName"];
    }
    if(isset($data["lastName"]))
    {
      $this->_lastName = $data["lastName"];
    }
    if(isset($data["accountManagerFid"]))
    {
      $this->_accountManagerFid = $data["accountManagerFid"];
    }
    if(isset($data["accountType"]))
    {
      $this->_accountType = $data["accountType"];
    }
    if(isset($data["accountStatus"]))
    {
      $this->_accountStatus = $data["accountStatus"];
    }
    if(isset($data["lifecycle"]))
    {
      $this->_lifecycle = $data["lifecycle"];
    }
    if(isset($data["subscriptionType"]))
    {
      $this->_subscriptionType = $data["subscriptionType"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "visitorId" => $this->_visitorId,
      "clientIp" => $this->_clientIp,
      "externalReference" => $this->_externalReference,
      "time" => $this->_time,
      "companyFid" => $this->_companyFid,
      "currency" => $this->_currency,
      "phoneNumber" => $this->_phoneNumber,
      "email" => $this->_email,
      "firstName" => $this->_firstName,
      "lastName" => $this->_lastName,
      "accountManagerFid" => $this->_accountManagerFid,
      "accountType" => $this->_accountType,
      "accountStatus" => $this->_accountStatus,
      "lifecycle" => $this->_lifecycle,
      "subscriptionType" => $this->_subscriptionType,
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
   *
   * @return string
   */
  public function getVisitorId($default = null)
  {
    return $this->_visitorId ?: $default;
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
   *
   * @return string
   */
  public function getClientIp($default = null)
  {
    return $this->_clientIp ?: $default;
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
   *
   * @return string
   */
  public function getExternalReference($default = null)
  {
    return $this->_externalReference ?: $default;
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
   *
   * @return string
   */
  public function getTime($default = null)
  {
    return $this->_time ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyFid($value)
  {
    $this->_companyFid = $value;
    return $this;
  }

  /**
   * Company FID to track this event to
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getCompanyFid($default = null)
  {
    return $this->_companyFid ?: $default;
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
   *
   * @return string
   */
  public function getCurrency($default = null)
  {
    return $this->_currency ?: $default;
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
   *
   * @return string
   */
  public function getPhoneNumber($default = null)
  {
    return $this->_phoneNumber ?: $default;
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
   *
   * @return string
   */
  public function getEmail($default = null)
  {
    return $this->_email ?: $default;
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
   *
   * @return string
   */
  public function getFirstName($default = null)
  {
    return $this->_firstName ?: $default;
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
   *
   * @return string
   */
  public function getLastName($default = null)
  {
    return $this->_lastName ?: $default;
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
   * FID of the account manager for this customer
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getAccountManagerFid($default = null)
  {
    return $this->_accountManagerFid ?: $default;
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
   *
   * @return string
   */
  public function getAccountType($default = null)
  {
    return $this->_accountType ?: $default;
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
   *
   * @return string
   */
  public function getAccountStatus($default = null)
  {
    return $this->_accountStatus ?: $default;
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
   *
   * @return string
   */
  public function getLifecycle($default = null)
  {
    return $this->_lifecycle ?: $default;
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
   *
   * @return string
   */
  public function getSubscriptionType($default = null)
  {
    return $this->_subscriptionType ?: $default;
  }
}
      

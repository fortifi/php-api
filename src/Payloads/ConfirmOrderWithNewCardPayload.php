<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ConfirmOrderWithNewCardPayload
  implements \JsonSerializable
{
  /**
   * Visible Display Name
   */
  protected $_cardDisplayName;
  /**
   * FID for the payment service you wish to charge the customer through
   */
  protected $_paymentServiceFid;
  /**
   * Card number encrypted using your public key
   */
  protected $_encryptedCardNumber;
  /**
   * Start Month of the card
   */
  protected $_startMonth;
  /**
   * Start Year of the card
   */
  protected $_startYear;
  /**
   * Expiration Month of the card
   */
  protected $_expiryMonth;
  /**
   * Expiration Year of the card
   */
  protected $_expiryYear;
  /**
   * Issue number of the card
   */
  protected $_issue;
  /**
   * Last 4 digits of the credit card number
   */
  protected $_last4;
  /**
   * Card issuer (visa, mastercard, etc)
   */
  protected $_cardType;
  /**
   * Name as appears on card
   */
  protected $_cardHolder;
  /**
   * FID of an existing address to use with the card
   */
  protected $_addressFid;
  /**
   * Address Line 1 of the card
   */
  protected $_addressLine1;
  /**
   * Address Line 2 of the card
   */
  protected $_addressLine2;
  /**
   * Address Line 3 of the card
   */
  protected $_addressLine3;
  /**
   * City for the card
   */
  protected $_addressCity;
  /**
   * State/County of the card
   */
  protected $_addressState;
  /**
   * Country of the card
   */
  protected $_addressCountry;
  /**
   * Postal/Zip Code of the card
   */
  protected $_addressPostal;
  /**
   * Is this card should be used as the primary card on the account
   */
  protected $_isDefault;
  /**
   * If set to true, this will setup purchases before payment is received
   */
  protected $_setupPurchaseBeforePayment;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["cardDisplayName"]))
    {
      $this->_cardDisplayName = (string)$data["cardDisplayName"];
    }
    if(isset($data["paymentServiceFid"]))
    {
      $this->_paymentServiceFid = (string)$data["paymentServiceFid"];
    }
    if(isset($data["encryptedCardNumber"]))
    {
      $this->_encryptedCardNumber = (string)$data["encryptedCardNumber"];
    }
    if(isset($data["startMonth"]))
    {
      $this->_startMonth = (int)$data["startMonth"];
    }
    if(isset($data["startYear"]))
    {
      $this->_startYear = (int)$data["startYear"];
    }
    if(isset($data["expiryMonth"]))
    {
      $this->_expiryMonth = (int)$data["expiryMonth"];
    }
    if(isset($data["expiryYear"]))
    {
      $this->_expiryYear = (int)$data["expiryYear"];
    }
    if(isset($data["issue"]))
    {
      $this->_issue = (int)$data["issue"];
    }
    if(isset($data["last4"]))
    {
      $this->_last4 = (string)$data["last4"];
    }
    if(isset($data["cardType"]))
    {
      $this->_cardType = (string)$data["cardType"];
    }
    if(isset($data["cardHolder"]))
    {
      $this->_cardHolder = (string)$data["cardHolder"];
    }
    if(isset($data["addressFid"]))
    {
      $this->_addressFid = (string)$data["addressFid"];
    }
    if(isset($data["addressLine1"]))
    {
      $this->_addressLine1 = (string)$data["addressLine1"];
    }
    if(isset($data["addressLine2"]))
    {
      $this->_addressLine2 = (string)$data["addressLine2"];
    }
    if(isset($data["addressLine3"]))
    {
      $this->_addressLine3 = (string)$data["addressLine3"];
    }
    if(isset($data["addressCity"]))
    {
      $this->_addressCity = (string)$data["addressCity"];
    }
    if(isset($data["addressState"]))
    {
      $this->_addressState = (string)$data["addressState"];
    }
    if(isset($data["addressCountry"]))
    {
      $this->_addressCountry = (string)$data["addressCountry"];
    }
    if(isset($data["addressPostal"]))
    {
      $this->_addressPostal = (string)$data["addressPostal"];
    }
    if(isset($data["isDefault"]))
    {
      $this->_isDefault = $data["isDefault"];
    }
    if(isset($data["setupPurchaseBeforePayment"]))
    {
      $this->_setupPurchaseBeforePayment = $data["setupPurchaseBeforePayment"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "cardDisplayName"            => $this->_cardDisplayName,
      "paymentServiceFid"          => $this->_paymentServiceFid,
      "encryptedCardNumber"        => $this->_encryptedCardNumber,
      "startMonth"                 => $this->_startMonth,
      "startYear"                  => $this->_startYear,
      "expiryMonth"                => $this->_expiryMonth,
      "expiryYear"                 => $this->_expiryYear,
      "issue"                      => $this->_issue,
      "last4"                      => $this->_last4,
      "cardType"                   => $this->_cardType,
      "cardHolder"                 => $this->_cardHolder,
      "addressFid"                 => $this->_addressFid,
      "addressLine1"               => $this->_addressLine1,
      "addressLine2"               => $this->_addressLine2,
      "addressLine3"               => $this->_addressLine3,
      "addressCity"                => $this->_addressCity,
      "addressState"               => $this->_addressState,
      "addressCountry"             => $this->_addressCountry,
      "addressPostal"              => $this->_addressPostal,
      "isDefault"                  => $this->_isDefault,
      "setupPurchaseBeforePayment" => $this->_setupPurchaseBeforePayment,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCardDisplayName(?string $value)
  {
    $this->_cardDisplayName = $value;
    return $this;
  }

  /**
   * Visible Display Name
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCardDisplayName($default = null, $trim = true)
  {
    $value = $this->_cardDisplayName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentServiceFid(?string $value)
  {
    $this->_paymentServiceFid = $value;
    return $this;
  }

  /**
   * FID for the payment service you wish to charge the customer through
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentServiceFid($default = null, $trim = true)
  {
    $value = $this->_paymentServiceFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEncryptedCardNumber(?string $value)
  {
    $this->_encryptedCardNumber = $value;
    return $this;
  }

  /**
   * Card number encrypted using your public key
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEncryptedCardNumber($default = null, $trim = true)
  {
    $value = $this->_encryptedCardNumber ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setStartMonth(?int $value)
  {
    $this->_startMonth = $value;
    return $this;
  }

  /**
   * Start Month of the card
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getStartMonth($default = null)
  {
    return $this->_startMonth ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setStartYear(?int $value)
  {
    $this->_startYear = $value;
    return $this;
  }

  /**
   * Start Year of the card
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getStartYear($default = null)
  {
    return $this->_startYear ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setExpiryMonth(?int $value)
  {
    $this->_expiryMonth = $value;
    return $this;
  }

  /**
   * Expiration Month of the card
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getExpiryMonth($default = null)
  {
    return $this->_expiryMonth ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setExpiryYear(?int $value)
  {
    $this->_expiryYear = $value;
    return $this;
  }

  /**
   * Expiration Year of the card
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getExpiryYear($default = null)
  {
    return $this->_expiryYear ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setIssue(?int $value)
  {
    $this->_issue = $value;
    return $this;
  }

  /**
   * Issue number of the card
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getIssue($default = null)
  {
    return $this->_issue ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLast4(?string $value)
  {
    $this->_last4 = $value;
    return $this;
  }

  /**
   * Last 4 digits of the credit card number
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLast4($default = null, $trim = true)
  {
    $value = $this->_last4 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCardType(?string $value)
  {
    $this->_cardType = $value;
    return $this;
  }

  /**
   * Card issuer (visa, mastercard, etc)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCardType($default = null, $trim = true)
  {
    $value = $this->_cardType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCardHolder(?string $value)
  {
    $this->_cardHolder = $value;
    return $this;
  }

  /**
   * Name as appears on card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCardHolder($default = null, $trim = true)
  {
    $value = $this->_cardHolder ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressFid(?string $value)
  {
    $this->_addressFid = $value;
    return $this;
  }

  /**
   * FID of an existing address to use with the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressFid($default = null, $trim = true)
  {
    $value = $this->_addressFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressLine1(?string $value)
  {
    $this->_addressLine1 = $value;
    return $this;
  }

  /**
   * Address Line 1 of the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressLine1($default = null, $trim = true)
  {
    $value = $this->_addressLine1 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressLine2(?string $value)
  {
    $this->_addressLine2 = $value;
    return $this;
  }

  /**
   * Address Line 2 of the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressLine2($default = null, $trim = true)
  {
    $value = $this->_addressLine2 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressLine3(?string $value)
  {
    $this->_addressLine3 = $value;
    return $this;
  }

  /**
   * Address Line 3 of the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressLine3($default = null, $trim = true)
  {
    $value = $this->_addressLine3 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressCity(?string $value)
  {
    $this->_addressCity = $value;
    return $this;
  }

  /**
   * City for the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressCity($default = null, $trim = true)
  {
    $value = $this->_addressCity ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressState(?string $value)
  {
    $this->_addressState = $value;
    return $this;
  }

  /**
   * State/County of the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressState($default = null, $trim = true)
  {
    $value = $this->_addressState ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressCountry(?string $value)
  {
    $this->_addressCountry = $value;
    return $this;
  }

  /**
   * Country of the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressCountry($default = null, $trim = true)
  {
    $value = $this->_addressCountry ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAddressPostal(?string $value)
  {
    $this->_addressPostal = $value;
    return $this;
  }

  /**
   * Postal/Zip Code of the card
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAddressPostal($default = null, $trim = true)
  {
    $value = $this->_addressPostal ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setIsDefault(?bool $value)
  {
    $this->_isDefault = $value;
    return $this;
  }

  /**
   * Is this card should be used as the primary card on the account
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isDefault($default = false)
  {
    return (bool)$this->_isDefault ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setSetupPurchaseBeforePayment(?bool $value)
  {
    $this->_setupPurchaseBeforePayment = $value;
    return $this;
  }

  /**
   * If set to true, this will setup purchases before payment is received
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isSetupPurchaseBeforePayment($default = false)
  {
    return (bool)$this->_setupPurchaseBeforePayment ?: $default;
  }
}

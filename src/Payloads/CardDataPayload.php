<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CardDataPayload
  implements \JsonSerializable
{
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
   * Last 4 digits of the credit card number
   */
  protected $_last4;
  /**
   * Issue number of the card
   */
  protected $_issue;
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
   * Pre Auth the card for this value to verify the card can be charged.  (Pre Auth will be voided)
   */
  protected $_preAuthAmount;
  /**
   * Is this card should be used as the primary card on the account
   */
  protected $_isDefault;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["encryptedCardNumber"]))
    {
      $this->_encryptedCardNumber = $data["encryptedCardNumber"];
    }
    if(isset($data["startMonth"]))
    {
      $this->_startMonth = $data["startMonth"];
    }
    if(isset($data["startYear"]))
    {
      $this->_startYear = $data["startYear"];
    }
    if(isset($data["expiryMonth"]))
    {
      $this->_expiryMonth = $data["expiryMonth"];
    }
    if(isset($data["expiryYear"]))
    {
      $this->_expiryYear = $data["expiryYear"];
    }
    if(isset($data["last4"]))
    {
      $this->_last4 = $data["last4"];
    }
    if(isset($data["issue"]))
    {
      $this->_issue = $data["issue"];
    }
    if(isset($data["cardHolder"]))
    {
      $this->_cardHolder = $data["cardHolder"];
    }
    if(isset($data["addressFid"]))
    {
      $this->_addressFid = $data["addressFid"];
    }
    if(isset($data["addressLine1"]))
    {
      $this->_addressLine1 = $data["addressLine1"];
    }
    if(isset($data["addressLine2"]))
    {
      $this->_addressLine2 = $data["addressLine2"];
    }
    if(isset($data["addressLine3"]))
    {
      $this->_addressLine3 = $data["addressLine3"];
    }
    if(isset($data["addressCity"]))
    {
      $this->_addressCity = $data["addressCity"];
    }
    if(isset($data["addressState"]))
    {
      $this->_addressState = $data["addressState"];
    }
    if(isset($data["addressCountry"]))
    {
      $this->_addressCountry = $data["addressCountry"];
    }
    if(isset($data["addressPostal"]))
    {
      $this->_addressPostal = $data["addressPostal"];
    }
    if(isset($data["preAuthAmount"]))
    {
      $this->_preAuthAmount = $data["preAuthAmount"];
    }
    if(isset($data["isDefault"]))
    {
      $this->_isDefault = $data["isDefault"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "encryptedCardNumber" => $this->_encryptedCardNumber,
      "startMonth"          => $this->_startMonth,
      "startYear"           => $this->_startYear,
      "expiryMonth"         => $this->_expiryMonth,
      "expiryYear"          => $this->_expiryYear,
      "last4"               => $this->_last4,
      "issue"               => $this->_issue,
      "cardHolder"          => $this->_cardHolder,
      "addressFid"          => $this->_addressFid,
      "addressLine1"        => $this->_addressLine1,
      "addressLine2"        => $this->_addressLine2,
      "addressLine3"        => $this->_addressLine3,
      "addressCity"         => $this->_addressCity,
      "addressState"        => $this->_addressState,
      "addressCountry"      => $this->_addressCountry,
      "addressPostal"       => $this->_addressPostal,
      "preAuthAmount"       => $this->_preAuthAmount,
      "isDefault"           => $this->_isDefault,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEncryptedCardNumber($value)
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
   * @param integer $value
   *
   * @return $this
   */
  public function setStartMonth($value)
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
   * @param integer $value
   *
   * @return $this
   */
  public function setStartYear($value)
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
   * @param integer $value
   *
   * @return $this
   */
  public function setExpiryMonth($value)
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
   * @param integer $value
   *
   * @return $this
   */
  public function setExpiryYear($value)
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
   * @param string $value
   *
   * @return $this
   */
  public function setLast4($value)
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
   * @param integer $value
   *
   * @return $this
   */
  public function setIssue($value)
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
  public function setCardHolder($value)
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
  public function setAddressFid($value)
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
  public function setAddressLine1($value)
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
  public function setAddressLine2($value)
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
  public function setAddressLine3($value)
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
  public function setAddressCity($value)
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
  public function setAddressState($value)
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
  public function setAddressCountry($value)
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
  public function setAddressPostal($value)
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
   * @param float $value
   *
   * @return $this
   */
  public function setPreAuthAmount($value)
  {
    $this->_preAuthAmount = $value;
    return $this;
  }

  /**
   * Pre Auth the card for this value to verify the card can be charged.  (Pre Auth will be voided)
   *
   * @param mixed $default
   *
   * @return float
   */
  public function getPreAuthAmount($default = null)
  {
    return $this->_preAuthAmount ?: $default;
  }

  /**
   * @param boolean $value
   *
   * @return $this
   */
  public function setIsDefault($value)
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
}

<?php
namespace Fortifi\Api\V1\Payloads;

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
   *
   * @return string
   */
  public function getEncryptedCardNumber($default = null)
  {
    return $this->_encryptedCardNumber ?: $default;
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
   * @param integer $value
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
   *
   * @return integer
   */
  public function getLast4($default = null)
  {
    return $this->_last4 ?: $default;
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
   *
   * @return string
   */
  public function getCardHolder($default = null)
  {
    return $this->_cardHolder ?: $default;
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
   *
   * @return string
   */
  public function getAddressFid($default = null)
  {
    return $this->_addressFid ?: $default;
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
   *
   * @return string
   */
  public function getAddressLine1($default = null)
  {
    return $this->_addressLine1 ?: $default;
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
   *
   * @return string
   */
  public function getAddressLine2($default = null)
  {
    return $this->_addressLine2 ?: $default;
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
   *
   * @return string
   */
  public function getAddressLine3($default = null)
  {
    return $this->_addressLine3 ?: $default;
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
   *
   * @return string
   */
  public function getAddressCity($default = null)
  {
    return $this->_addressCity ?: $default;
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
   *
   * @return string
   */
  public function getAddressState($default = null)
  {
    return $this->_addressState ?: $default;
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
   *
   * @return string
   */
  public function getAddressCountry($default = null)
  {
    return $this->_addressCountry ?: $default;
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
   *
   * @return string
   */
  public function getAddressPostal($default = null)
  {
    return $this->_addressPostal ?: $default;
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
    return $this->_isDefault ?: $default;
  }
}

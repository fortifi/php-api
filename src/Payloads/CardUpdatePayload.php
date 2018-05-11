<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CardUpdatePayload
  implements \JsonSerializable
{
  /**
   * Name as appears on card
   */
  protected $_cardHolder;
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
  protected $_asDefault;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["cardHolder"]))
    {
      $this->_cardHolder = (string)$data["cardHolder"];
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
    if(isset($data["asDefault"]))
    {
      $this->_asDefault = $data["asDefault"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "cardHolder"     => $this->_cardHolder,
      "startMonth"     => $this->_startMonth,
      "startYear"      => $this->_startYear,
      "expiryMonth"    => $this->_expiryMonth,
      "expiryYear"     => $this->_expiryYear,
      "issue"          => $this->_issue,
      "addressFid"     => $this->_addressFid,
      "addressLine1"   => $this->_addressLine1,
      "addressLine2"   => $this->_addressLine2,
      "addressLine3"   => $this->_addressLine3,
      "addressCity"    => $this->_addressCity,
      "addressState"   => $this->_addressState,
      "addressCountry" => $this->_addressCountry,
      "addressPostal"  => $this->_addressPostal,
      "asDefault"      => $this->_asDefault,
    ];
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
   * @param boolean $value
   *
   * @return $this
   */
  public function setAsDefault($value)
  {
    $this->_asDefault = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAsDefault($default = false)
  {
    return (bool)$this->_asDefault ?: $default;
  }
}

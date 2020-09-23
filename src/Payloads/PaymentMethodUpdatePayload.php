<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class PaymentMethodUpdatePayload
  implements \JsonSerializable
{
  /**
   * Name as appears on card/account
   */
  protected $_accountHolder;
  /**
   * Valid from month
   */
  protected $_validMonth;
  /**
   * Valid from year
   */
  protected $_validYear;
  /**
   * Expiration Month
   */
  protected $_expiryMonth;
  /**
   * Expiration Year
   */
  protected $_expiryYear;
  /**
   * Issue number
   */
  protected $_issue;
  /**
   * Set this as the primary payment method
   */
  protected $_setPrimary;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["accountHolder"]))
    {
      $this->_accountHolder = (string)$data["accountHolder"];
    }
    if(isset($data["validMonth"]))
    {
      $this->_validMonth = (int)$data["validMonth"];
    }
    if(isset($data["validYear"]))
    {
      $this->_validYear = (int)$data["validYear"];
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
    if(isset($data["setPrimary"]))
    {
      $this->_setPrimary = $data["setPrimary"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "accountHolder" => $this->_accountHolder,
      "validMonth"    => $this->_validMonth,
      "validYear"     => $this->_validYear,
      "expiryMonth"   => $this->_expiryMonth,
      "expiryYear"    => $this->_expiryYear,
      "issue"         => $this->_issue,
      "setPrimary"    => $this->_setPrimary,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAccountHolder(?string $value)
  {
    $this->_accountHolder = $value;
    return $this;
  }

  /**
   * Name as appears on card/account
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountHolder($default = null, $trim = true)
  {
    $value = $this->_accountHolder ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setValidMonth(?int $value)
  {
    $this->_validMonth = $value;
    return $this;
  }

  /**
   * Valid from month
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getValidMonth($default = null)
  {
    return $this->_validMonth ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setValidYear(?int $value)
  {
    $this->_validYear = $value;
    return $this;
  }

  /**
   * Valid from year
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getValidYear($default = null)
  {
    return $this->_validYear ?: $default;
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
   * Expiration Month
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
   * Expiration Year
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
   * Issue number
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
   * @param bool $value
   *
   * @return $this
   */
  public function setSetPrimary(?bool $value)
  {
    $this->_setPrimary = $value;
    return $this;
  }

  /**
   * Set this as the primary payment method
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isSetPrimary($default = false)
  {
    return (bool)$this->_setPrimary ?: $default;
  }
}

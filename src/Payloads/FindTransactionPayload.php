<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class FindTransactionPayload
  implements \JsonSerializable
{
  protected $_paymentMethod;
  protected $_last4;
  protected $_first6;
  protected $_nameOnCard;
  protected $_amount;
  protected $_currency;
  protected $_date;
  protected $_firstName;
  protected $_lastName;
  protected $_emailAddress;
  protected $_postCode;
  protected $_country;
  protected $_paypalEmail;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["paymentMethod"]))
    {
      $this->_paymentMethod = (string)$data["paymentMethod"];
    }
    if(isset($data["last4"]))
    {
      $this->_last4 = (string)$data["last4"];
    }
    if(isset($data["first6"]))
    {
      $this->_first6 = (string)$data["first6"];
    }
    if(isset($data["nameOnCard"]))
    {
      $this->_nameOnCard = (string)$data["nameOnCard"];
    }
    if(isset($data["amount"]))
    {
      $this->_amount = (string)$data["amount"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = (string)$data["currency"];
    }
    if(isset($data["date"]))
    {
      $this->_date = (string)$data["date"];
    }
    if(isset($data["firstName"]))
    {
      $this->_firstName = (string)$data["firstName"];
    }
    if(isset($data["lastName"]))
    {
      $this->_lastName = (string)$data["lastName"];
    }
    if(isset($data["emailAddress"]))
    {
      $this->_emailAddress = (string)$data["emailAddress"];
    }
    if(isset($data["postCode"]))
    {
      $this->_postCode = (string)$data["postCode"];
    }
    if(isset($data["country"]))
    {
      $this->_country = (string)$data["country"];
    }
    if(isset($data["paypalEmail"]))
    {
      $this->_paypalEmail = (string)$data["paypalEmail"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "paymentMethod" => $this->_paymentMethod,
      "last4"         => $this->_last4,
      "first6"        => $this->_first6,
      "nameOnCard"    => $this->_nameOnCard,
      "amount"        => $this->_amount,
      "currency"      => $this->_currency,
      "date"          => $this->_date,
      "firstName"     => $this->_firstName,
      "lastName"      => $this->_lastName,
      "emailAddress"  => $this->_emailAddress,
      "postCode"      => $this->_postCode,
      "country"       => $this->_country,
      "paypalEmail"   => $this->_paypalEmail,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentMethod(?string $value)
  {
    $this->_paymentMethod = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethod($default = null, $trim = true)
  {
    $value = $this->_paymentMethod ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
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
  public function setFirst6(?string $value)
  {
    $this->_first6 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFirst6($default = null, $trim = true)
  {
    $value = $this->_first6 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setNameOnCard(?string $value)
  {
    $this->_nameOnCard = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNameOnCard($default = null, $trim = true)
  {
    $value = $this->_nameOnCard ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAmount(?string $value)
  {
    $this->_amount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAmount($default = null, $trim = true)
  {
    $value = $this->_amount ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCurrency(?string $value)
  {
    $this->_currency = $value;
    return $this;
  }

  /**
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
  public function setDate(?string $value)
  {
    $this->_date = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDate($default = null, $trim = true)
  {
    $value = $this->_date ?: $default;
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
  public function setLastName(?string $value)
  {
    $this->_lastName = $value;
    return $this;
  }

  /**
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
  public function setEmailAddress(?string $value)
  {
    $this->_emailAddress = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmailAddress($default = null, $trim = true)
  {
    $value = $this->_emailAddress ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPostCode(?string $value)
  {
    $this->_postCode = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPostCode($default = null, $trim = true)
  {
    $value = $this->_postCode ?: $default;
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
  public function setPaypalEmail(?string $value)
  {
    $this->_paypalEmail = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaypalEmail($default = null, $trim = true)
  {
    $value = $this->_paypalEmail ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

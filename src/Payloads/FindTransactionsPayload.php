<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class FindTransactionsPayload
  implements \JsonSerializable
{
  protected $_paymentMethod;
  protected $_last4;
  protected $_first6;
  protected $_nameOnCard;
  protected $_amount;
  protected $_currency;
  protected $_date;
  protected $_paypalEmail;
  protected $_companyFid;

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
    if(isset($data["paypalEmail"]))
    {
      $this->_paypalEmail = (string)$data["paypalEmail"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = (string)$data["companyFid"];
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
      "paypalEmail"   => $this->_paypalEmail,
      "companyFid"    => $this->_companyFid,
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyFid(?string $value)
  {
    $this->_companyFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = $this->_companyFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

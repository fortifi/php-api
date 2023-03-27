<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FindTransactionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "fullName" => $this->getFullName(),
      "email" => $this->getEmail(),
      "city" => $this->getCity(),
      "country" => $this->getCountry(),
      "items" => $this->getItems(),
      "paymentScheme" => $this->getPaymentScheme(),
      "paymentLast4" => $this->getPaymentLast4(),
      "paymentExp" => $this->getPaymentExp(),
      "currency" => $this->getCurrency(),
      "date" => $this->getDate(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFullName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fullName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'email', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCity($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'city', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'country', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceItemRequest[]
   */
  public function getItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'items', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentScheme($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentScheme', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentLast4($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentLast4', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentExp($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentExp', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'currency', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'date', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->items))
    {
      foreach($return->items as $itmKey => $itm)
      {
        $return->items[$itmKey] = (new InvoiceItemRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

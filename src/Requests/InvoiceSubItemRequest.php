<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceSubItemRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "fromDate" => $this->getFromDate(),
        "toDate" => $this->getToDate(),
        "perUnitAmount" => $this->getPerUnitAmount(),
        "totalAmount" => $this->getTotalAmount(),
        "itemType" => $this->getItemType(),
        "quantity" => $this->getQuantity(),
      ]
    );
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFromDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fromDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getToDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'toDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getPerUnitAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'perUnitAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmount', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getItemType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'itemType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantity($default = null)
  {
    return Objects::property($this->_getResultJson(), 'quantity', $default);
  }
}

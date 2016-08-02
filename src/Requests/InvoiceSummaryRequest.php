<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceSummaryRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "invoiceFid" => $this->getInvoiceFid(),
        "invoiceDate" => $this->getInvoiceDate(),
        "invoiceStatus" => $this->getInvoiceStatus(),
        "totalItems" => $this->getTotalItems(),
        "baseAmount" => $this->getBaseAmount(),
        "discountAmount" => $this->getDiscountAmount(),
        "taxAmount" => $this->getTaxAmount(),
        "totalAmount" => $this->getTotalAmount(),
        "amountPaid" => $this->getAmountPaid(),
        "amountRefunded" => $this->getAmountRefunded(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return FidRequest
   */
  public function getInvoiceFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'invoiceFid', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInvoiceDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'invoiceDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInvoiceStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'invoiceStatus', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTotalItems($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalItems', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getBaseAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'baseAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscountAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxAmount', $default);
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
   *
   * @return float
   */
  public function getAmountPaid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountPaid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmountRefunded($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountRefunded', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->invoiceFid))
    {
      $return->invoiceFid = (new FidRequest())
        ->hydrate($return->invoiceFid);
    }

    return $return;
  }
}

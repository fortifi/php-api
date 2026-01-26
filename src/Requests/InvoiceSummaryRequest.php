<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceSummaryRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "invoiceName" => $this->getInvoiceName(),
        "invoiceNumber" => $this->getInvoiceNumber(),
        "invoiceDate" => $this->getInvoiceDate(),
        "currency" => $this->getCurrency(),
        "dueDate" => $this->getDueDate(),
        "paymentDate" => $this->getPaymentDate(),
        "amountPaid" => $this->getAmountPaid(),
        "baseAmount" => $this->getBaseAmount(),
        "discountAmount" => $this->getDiscountAmount(),
        "taxAmount" => $this->getTaxAmount(),
        "creditedAmount" => $this->getCreditedAmount(),
        "creditNotes" => $this->getCreditNotes(),
        "totalAmount" => $this->getTotalAmount(),
        "outstandingAmount" => $this->getOutstandingAmount(),
        "refundAmount" => $this->getRefundAmount(),
        "invoiceStatus" => $this->getInvoiceStatus(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInvoiceName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'invoiceName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getInvoiceNumber($default = null)
  {
    return Objects::property($this->_getResultJson(), 'invoiceNumber', $default);
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
  public function getCurrency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'currency', $default);
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
  public function getDueDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dueDate', $default);
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
  public function getPaymentDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
  public function getCreditedAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'creditedAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return CreditNoteRequest[]
   */
  public function getCreditNotes($default = [])
  {
    return Objects::property($this->_getResultJson(), 'creditNotes', $default);
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
  public function getOutstandingAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'outstandingAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getRefundAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'refundAmount', $default);
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

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->creditNotes))
    {
      foreach($return->creditNotes as $itmKey => $itm)
      {
        $return->creditNotes[$itmKey] = (new CreditNoteRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

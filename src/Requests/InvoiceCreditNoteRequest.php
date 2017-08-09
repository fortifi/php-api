<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceCreditNoteRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "invoiceFid" => $this->getInvoiceFid(),
        "chargeRequestFid" => $this->getChargeRequestFid(),
        "creditDate" => $this->getCreditDate(),
        "amount" => $this->getAmount(),
        "currency" => $this->getCurrency(),
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
   * @param mixed $default
   *
   * @return FidRequest
   */
  public function getChargeRequestFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'chargeRequestFid', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreditDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'creditDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
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

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->invoiceFid))
    {
      $return->invoiceFid = (new FidRequest())
        ->hydrate($return->invoiceFid);
    }

    if(!empty($return->chargeRequestFid))
    {
      $return->chargeRequestFid = (new FidRequest())
        ->hydrate($return->chargeRequestFid);
    }

    return $return;
  }
}

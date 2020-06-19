<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PeriodRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "chargeDate" => $this->getChargeDate(),
        "status" => $this->getStatus(),
        "refundReason" => $this->getRefundReason(),
        "periodFid" => $this->getPeriodFid(),
        "refundAmount" => $this->getRefundAmount(),
        "taxAmount" => $this->getTaxAmount(),
        "totalAmount" => $this->getTotalAmount(),
        "creditedAmount" => $this->getCreditedAmount(),
        "outstandingAmount" => $this->getOutstandingAmount(),
        "periodStart" => $this->getPeriodStart(),
        "periodEnd" => $this->getPeriodEnd(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getChargeDate($default = null)
  {
    return Objects::property($this->_getResultJson(), 'chargeDate', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'status', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRefundReason($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'refundReason', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPeriodFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'periodFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
  public function getCreditedAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'creditedAmount', $default);
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
   * @return integer
   */
  public function getPeriodStart($default = null)
  {
    return Objects::property($this->_getResultJson(), 'periodStart', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPeriodEnd($default = null)
  {
    return Objects::property($this->_getResultJson(), 'periodEnd', $default);
  }
}

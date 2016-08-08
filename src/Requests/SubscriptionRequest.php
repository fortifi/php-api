<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "amount" => $this->getAmount(),
        "autoCancelDate" => $this->getAutoCancelDate(),
        "autoCharge" => $this->isAutoCharge(),
        "autoSuspendDate" => $this->getAutoSuspendDate(),
        "cancelDays" => $this->getCancelDays(),
        "cancelReason" => $this->getCancelReason(),
        "currency" => $this->getCurrency(),
        "cycleExact" => $this->getCycleExact(),
        "cycleTerm" => $this->getCycleTerm(),
        "cycleType" => $this->getCycleType(),
        "dateCancelled" => $this->getDateCancelled(),
        "dateCreated" => $this->getDateCreated(),
        "dateInactive" => $this->getDateInactive(),
        "dateModified" => $this->getDateModified(),
        "dateStateChanged" => $this->getDateStateChanged(),
        "dateSuspended" => $this->getDateSuspended(),
        "dateUpgraded" => $this->getDateUpgraded(),
        "discount" => $this->getDiscount(),
        "endDate" => $this->getEndDate(),
        "fid" => $this->getFid(),
        "invoiceFid" => $this->getInvoiceFid(),
        "isPaid" => $this->isPaid(),
        "lastRenewDate" => $this->getLastRenewDate(),
        "nextPaymentDate" => $this->getNextPaymentDate(),
        "nextRenewalAmount" => $this->getNextRenewalAmount(),
        "nextRenewDate" => $this->getNextRenewDate(),
        "paidRenewals" => $this->getPaidRenewals(),
        "paidUntil" => $this->getPaidUntil(),
        "quantity" => $this->getQuantity(),
        "renewalAdvanceDays" => $this->getRenewalAdvanceDays(),
        "renewDate" => $this->getRenewDate(),
        "setupAmount" => $this->getSetupAmount(),
        "setupDiscount" => $this->getSetupDiscount(),
        "shouldCancel" => $this->isShouldCancel(),
        "shouldSuspend" => $this->isShouldSuspend(),
        "startDate" => $this->getStartDate(),
        "status" => $this->getStatus(),
        "suspendDays" => $this->getSuspendDays(),
        "suspendReason" => $this->getSuspendReason(),
        "taxAmount" => $this->getTaxAmount(),
        "totalAmount" => $this->getTotalAmount(),
        "totalRenewals" => $this->getTotalRenewals(),
        "trialEndDate" => $this->getTrialEndDate(),
        "trialStartDate" => $this->getTrialStartDate(),
        "uniqueReference" => $this->getUniqueReference(),
      ]
    );
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
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAutoCancelDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'autoCancelDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAutoCharge($default = false)
  {
    return Objects::property($this->_getResultJson(), 'autoCharge', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAutoSuspendDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'autoSuspendDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCancelDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cancelDays', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCancelReason($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cancelReason', $default);
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
  public function getCycleExact($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycleExact', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycleTerm($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycleTerm', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycleType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycleType', $default);
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
  public function getDateCancelled($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateCancelled', $default);
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
  public function getDateCreated($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateCreated', $default);
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
  public function getDateInactive($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateInactive', $default);
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
  public function getDateModified($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateModified', $default);
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
  public function getDateStateChanged($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateStateChanged', $default);
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
  public function getDateSuspended($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateSuspended', $default);
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
  public function getDateUpgraded($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateUpgraded', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discount', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEndDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'endDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInvoiceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'invoiceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isPaid($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isPaid', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastRenewDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastRenewDate', $default);
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
  public function getNextPaymentDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'nextPaymentDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getNextRenewalAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nextRenewalAmount', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNextRenewDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'nextRenewDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPaidRenewals($default = null)
  {
    return Objects::property($this->_getResultJson(), 'paidRenewals', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaidUntil($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paidUntil', $default);
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

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getRenewalAdvanceDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'renewalAdvanceDays', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRenewDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'renewDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscount', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isShouldCancel($default = false)
  {
    return Objects::property($this->_getResultJson(), 'shouldCancel', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isShouldSuspend($default = false)
  {
    return Objects::property($this->_getResultJson(), 'shouldSuspend', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStartDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'startDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   *
   * @return integer
   */
  public function getSuspendDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'suspendDays', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuspendReason($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'suspendReason', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   * @return integer
   */
  public function getTotalRenewals($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalRenewals', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTrialEndDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'trialEndDate', $default);
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
  public function getTrialStartDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'trialStartDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUniqueReference($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'uniqueReference', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

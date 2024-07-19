<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "paidUntil" => $this->getPaidUntil(),
        "cycle" => $this->getCycle(),
        "autoCharge" => $this->isAutoCharge(),
        "productFid" => $this->getProductFid(),
        "status" => $this->getStatus(),
        "amount" => $this->getAmount(),
        "autoCancelDate" => $this->getAutoCancelDate(),
        "autoSuspendDate" => $this->getAutoSuspendDate(),
        "cancelDays" => $this->getCancelDays(),
        "cancelReason" => $this->getCancelReason(),
        "currency" => $this->getCurrency(),
        "parentFid" => $this->getParentFid(),
        "productManagerType" => $this->getProductManagerType(),
        "priceFid" => $this->getPriceFid(),
        "skuFid" => $this->getSkuFid(),
        "offerFid" => $this->getOfferFid(),
        "dateCancelled" => $this->getDateCancelled(),
        "dateCreated" => $this->getDateCreated(),
        "dateInactive" => $this->getDateInactive(),
        "dateModified" => $this->getDateModified(),
        "dateStateChanged" => $this->getDateStateChanged(),
        "dateSuspended" => $this->getDateSuspended(),
        "dateUpgraded" => $this->getDateUpgraded(),
        "discount" => $this->getDiscount(),
        "endDate" => $this->getEndDate(),
        "invoiceFid" => $this->getInvoiceFid(),
        "isPaid" => $this->isPaid(),
        "lastRenewDate" => $this->getLastRenewDate(),
        "nextPaymentDate" => $this->getNextPaymentDate(),
        "nextRenewalAmount" => $this->getNextRenewalAmount(),
        "nextRenewDate" => $this->getNextRenewDate(),
        "paidRenewals" => $this->getPaidRenewals(),
        "quantity" => $this->getQuantity(),
        "renewalAdvanceDays" => $this->getRenewalAdvanceDays(),
        "renewDate" => $this->getRenewDate(),
        "setupAmount" => $this->getSetupAmount(),
        "setupDiscount" => $this->getSetupDiscount(),
        "shouldCancel" => $this->isShouldCancel(),
        "shouldSuspend" => $this->isShouldSuspend(),
        "startDate" => $this->getStartDate(),
        "suspendDays" => $this->getSuspendDays(),
        "suspendReason" => $this->getSuspendReason(),
        "taxAmount" => $this->getTaxAmount(),
        "totalAmount" => $this->getTotalAmount(),
        "totalRenewals" => $this->getTotalRenewals(),
        "trialEndDate" => $this->getTrialEndDate(),
        "trialStartDate" => $this->getTrialStartDate(),
        "uniqueReference" => $this->getUniqueReference(),
        "identity" => $this->getIdentity(),
        "externalReference" => $this->getExternalReference(),
        "sourceFid" => $this->getSourceFid(),
        "paymentMethodFid" => $this->getPaymentMethodFid(),
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
  public function getPaidUntil($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paidUntil', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Interval in ISO 8601 standard
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycle($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycle', $default);
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
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'productFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Purchase Status
   * 
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
  public function getParentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'parentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductManagerType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'productManagerType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'priceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSkuFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'skuFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'offerFid', $default);
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
   * Licence Key / Membership Number
   * 
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

  /**
   * An identity for this subscription, this is a non unique identfier
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIdentity($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'identity', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Unique External Identifier for this subscription
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalReference($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'externalReference', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The FID of the object that created this subscription (most commonly, order fid)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSourceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sourceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The FID of the payment method used to pay for this subscription (Blank will use account methods)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethodFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMethodFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}

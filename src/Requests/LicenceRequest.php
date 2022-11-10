<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class LicenceRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "purchaseFid" => $this->getPurchaseFid(),
      "customerFid" => $this->getCustomerFid(),
      "status" => $this->getStatus(),
      "dateCreated" => $this->getDateCreated(),
      "lastRenewDate" => $this->getLastRenewDate(),
      "renewDate" => $this->getRenewDate(),
      "nextRenewDate" => $this->getNextRenewDate(),
      "autoSuspendDate" => $this->getAutoSuspendDate(),
      "autoCancelDate" => $this->getAutoCancelDate(),
      "startDate" => $this->getStartDate(),
      "endDate" => $this->getEndDate(),
      "trialStartDate" => $this->getTrialStartDate(),
      "trialEndDate" => $this->getTrialEndDate(),
      "cycleTerm" => $this->getCycleTerm(),
      "cycleExact" => $this->getCycleExact(),
      "cycleType" => $this->getCycleType(),
      "cycle" => $this->getCycle(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'purchaseFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
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
  public function getRenewDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'renewDate', $default);
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
  public function getNextRenewDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'nextRenewDate', $default);
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
  public function getStartDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'startDate', $default);
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
  public function getEndDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'endDate', $default);
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
  public function getCycleExact($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycleExact', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Term Type
   * 
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
}

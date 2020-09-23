<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentMethodRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "methodType" => $this->getMethodType(),
        "methodSubType" => $this->getMethodSubType(),
        "methodScheme" => $this->getMethodScheme(),
        "issuerName" => $this->getIssuerName(),
        "issueNumber" => $this->getIssueNumber(),
        "validFromDate" => $this->getValidFromDate(),
        "expiryDate" => $this->getExpiryDate(),
        "accountHolder" => $this->getAccountHolder(),
        "last4" => $this->getLast4(),
        "tokenUuid" => $this->getTokenUuid(),
        "isPrimary" => $this->isPrimary(),
        "lockExpiresAt" => $this->getLockExpiresAt(),
        "lastIdentifyTime" => $this->getLastIdentifyTime(),
        "identifyCount" => $this->getIdentifyCount(),
        "lastChallengeTime" => $this->getLastChallengeTime(),
        "lastSuccessChallengeTime" => $this->getLastSuccessChallengeTime(),
        "challengeCount" => $this->getChallengeCount(),
        "successfulChallenges" => $this->getSuccessfulChallenges(),
        "successfulTransactions" => $this->getSuccessfulTransactions(),
        "declineCount" => $this->getDeclineCount(),
        "externalReference" => $this->getExternalReference(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMethodType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'methodType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMethodSubType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'methodSubType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMethodScheme($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'methodScheme', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIssuerName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'issuerName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIssueNumber($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'issueNumber', $default);
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
  public function getValidFromDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'validFromDate', $default);
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
  public function getExpiryDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'expiryDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountHolder($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'accountHolder', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLast4($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'last4', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTokenUuid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'tokenUuid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isPrimary($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isPrimary', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLockExpiresAt($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lockExpiresAt', $default);
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
  public function getLastIdentifyTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastIdentifyTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getIdentifyCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'identifyCount', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastChallengeTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastChallengeTime', $default);
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
  public function getLastSuccessChallengeTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastSuccessChallengeTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getChallengeCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'challengeCount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSuccessfulChallenges($default = null)
  {
    return Objects::property($this->_getResultJson(), 'successfulChallenges', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSuccessfulTransactions($default = null)
  {
    return Objects::property($this->_getResultJson(), 'successfulTransactions', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDeclineCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'declineCount', $default);
  }

  /**
   * External payer reference
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
}

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
}

<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CustomerRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "id" => $this->getId(),
        "name" => $this->getName(),
        "displayName" => $this->getDisplayName(),
        "firstName" => $this->getFirstName(),
        "lastName" => $this->getLastName(),
        "email" => $this->getEmail(),
        "phone" => $this->getPhone(),
        "phoneNumber" => $this->getPhoneNumber(),
        "currency" => $this->getCurrency(),
        "externalReference" => $this->getExternalReference(),
        "companyFid" => $this->getCompanyFid(),
        "timezone" => $this->getTimezone(),
        "billingType" => $this->getBillingType(),
        "taxNumber" => $this->getTaxNumber(),
        "companyNumber" => $this->getCompanyNumber(),
        "knownIP" => $this->getKnownIP(),
        "flags" => $this->getFlags(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'id', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'name', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'displayName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFirstName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'firstName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'email', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPhone($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'phone', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPhoneNumber($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'phoneNumber', $default);
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
  public function getExternalReference($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'externalReference', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTimezone($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'timezone', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBillingType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'billingType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTaxNumber($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'taxNumber', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyNumber($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyNumber', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getKnownIP($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'knownIP', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return CustomerFlagsRequest
   */
  public function getFlags($default = null)
  {
    return Objects::property($this->_getResultJson(), 'flags', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->flags))
    {
      $return->flags = (new CustomerFlagsRequest())
        ->hydrate($return->flags);
    }

    return $return;
  }
}

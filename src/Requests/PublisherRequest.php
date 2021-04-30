<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PublisherRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "type" => $this->getType(),
        "contactName" => $this->getContactName(),
        "companyName" => $this->getCompanyName(),
        "phoneFid" => $this->getPhoneFid(),
        "emailFid" => $this->getEmailFid(),
        "website" => $this->getWebsite(),
        "acceptedTerms" => $this->getAcceptedTerms(),
        "suspended" => $this->getSuspended(),
        "accountManagerFid" => $this->getAccountManagerFid(),
        "foundationFid" => $this->getFoundationFid(),
        "brandFid" => $this->getBrandFid(),
        "isDisabled" => $this->getIsDisabled(),
        "email" => $this->getEmail(),
        "phone" => $this->getPhone(),
        "payoutType" => $this->getPayoutType(),
        "approved" => $this->isApproved(),
      ]
    );
  }

  /**
   * Publisher Type
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'type', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContactName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'contactName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPhoneFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'phoneFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmailFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'emailFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getWebsite($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'website', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAcceptedTerms($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'acceptedTerms', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuspended($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'suspended', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountManagerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'accountManagerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFoundationFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'foundationFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'brandFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIsDisabled($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'isDisabled', $default);
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
  public function getPayoutType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'payoutType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isApproved($default = false)
  {
    return Objects::property($this->_getResultJson(), 'approved', $default);
  }
}

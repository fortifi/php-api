<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CustomerRequest
  extends FidRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
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
        "accountManagerFid" => $this->getAccountManagerFid(),
        "affiliateFid" => $this->getAffiliateFid(),
        "foundationFid" => $this->getFoundationFid(),
        "affiliateType" => $this->getAffiliateType(),
        "campaignFid" => $this->getCampaignFid(),
        "sid1" => $this->getSid1(),
        "sid2" => $this->getSid2(),
        "sid3" => $this->getSid3(),
        "lifecycleStage" => $this->getLifecycleStage(),
        "accountType" => $this->getAccountType(),
        "accountStatus" => $this->getAccountStatus(),
        "subscriptionType" => $this->getSubscriptionType(),
        "continent" => $this->getContinent(),
        "country" => $this->getCountry(),
        "county" => $this->getCounty(),
        "city" => $this->getCity(),
        "postal" => $this->getPostal(),
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
  public function getAffiliateFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'affiliateFid', $default);
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
  public function getAffiliateType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'affiliateType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'campaignFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid1($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sid1', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid2($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sid2', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid3($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sid3', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLifecycleStage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lifecycleStage', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'accountType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'accountStatus', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subscriptionType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContinent($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'continent', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'country', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCounty($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'county', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCity($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'city', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPostal($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'postal', $default);
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

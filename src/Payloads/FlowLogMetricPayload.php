<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class FlowLogMetricPayload
  implements \JsonSerializable
{
  protected $_actionTimestamp;
  /**
   * @required
   */
  protected $_companyFid;
  /**
   * @required
   */
  protected $_sessionId;
  /**
   * @required
   */
  protected $_action;
  protected $_language;
  protected $_languageSpecific;
  protected $_os;
  protected $_osVersion;
  protected $_osBlended;
  protected $_platform;
  protected $_device;
  protected $_client;
  protected $_clientVersion;
  protected $_clientBlended;
  protected $_ip;
  protected $_city;
  protected $_country;
  protected $_state;
  protected $_postal;
  protected $_timezone;
  protected $_continent;
  protected $_affiliateFid;
  protected $_foundationFid;
  protected $_affiliateType;
  /**
   * Advertiser Campaign to track this action to (if not already locked)
   */
  protected $_campaignHash;
  protected $_campaignFid;
  protected $_sid1;
  protected $_sid2;
  protected $_sid3;
  protected $_customerFid;
  protected $_productFid;
  protected $_priceFid;
  protected $_purchaseFid;
  protected $_currency;
  protected $_amount;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["actionTimestamp"]))
    {
      $this->_actionTimestamp = (int)$data["actionTimestamp"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = (string)$data["companyFid"];
    }
    if(isset($data["sessionId"]))
    {
      $this->_sessionId = (string)$data["sessionId"];
    }
    if(isset($data["action"]))
    {
      $this->_action = (string)$data["action"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["languageSpecific"]))
    {
      $this->_languageSpecific = (string)$data["languageSpecific"];
    }
    if(isset($data["os"]))
    {
      $this->_os = (string)$data["os"];
    }
    if(isset($data["osVersion"]))
    {
      $this->_osVersion = (string)$data["osVersion"];
    }
    if(isset($data["osBlended"]))
    {
      $this->_osBlended = (string)$data["osBlended"];
    }
    if(isset($data["platform"]))
    {
      $this->_platform = (string)$data["platform"];
    }
    if(isset($data["device"]))
    {
      $this->_device = (string)$data["device"];
    }
    if(isset($data["client"]))
    {
      $this->_client = (string)$data["client"];
    }
    if(isset($data["clientVersion"]))
    {
      $this->_clientVersion = (string)$data["clientVersion"];
    }
    if(isset($data["clientBlended"]))
    {
      $this->_clientBlended = (string)$data["clientBlended"];
    }
    if(isset($data["ip"]))
    {
      $this->_ip = (string)$data["ip"];
    }
    if(isset($data["city"]))
    {
      $this->_city = (string)$data["city"];
    }
    if(isset($data["country"]))
    {
      $this->_country = (string)$data["country"];
    }
    if(isset($data["state"]))
    {
      $this->_state = (string)$data["state"];
    }
    if(isset($data["postal"]))
    {
      $this->_postal = (string)$data["postal"];
    }
    if(isset($data["timezone"]))
    {
      $this->_timezone = (string)$data["timezone"];
    }
    if(isset($data["continent"]))
    {
      $this->_continent = (string)$data["continent"];
    }
    if(isset($data["affiliateFid"]))
    {
      $this->_affiliateFid = (string)$data["affiliateFid"];
    }
    if(isset($data["foundationFid"]))
    {
      $this->_foundationFid = (string)$data["foundationFid"];
    }
    if(isset($data["affiliateType"]))
    {
      $this->_affiliateType = (string)$data["affiliateType"];
    }
    if(isset($data["campaignHash"]))
    {
      $this->_campaignHash = (string)$data["campaignHash"];
    }
    if(isset($data["campaignFid"]))
    {
      $this->_campaignFid = (string)$data["campaignFid"];
    }
    if(isset($data["sid1"]))
    {
      $this->_sid1 = (string)$data["sid1"];
    }
    if(isset($data["sid2"]))
    {
      $this->_sid2 = (string)$data["sid2"];
    }
    if(isset($data["sid3"]))
    {
      $this->_sid3 = (string)$data["sid3"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["productFid"]))
    {
      $this->_productFid = (string)$data["productFid"];
    }
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["purchaseFid"]))
    {
      $this->_purchaseFid = (string)$data["purchaseFid"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = (string)$data["currency"];
    }
    if(isset($data["amount"]))
    {
      $this->_amount = (string)$data["amount"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "actionTimestamp"  => $this->_actionTimestamp,
      "companyFid"       => $this->_companyFid,
      "sessionId"        => $this->_sessionId,
      "action"           => $this->_action,
      "language"         => $this->_language,
      "languageSpecific" => $this->_languageSpecific,
      "os"               => $this->_os,
      "osVersion"        => $this->_osVersion,
      "osBlended"        => $this->_osBlended,
      "platform"         => $this->_platform,
      "device"           => $this->_device,
      "client"           => $this->_client,
      "clientVersion"    => $this->_clientVersion,
      "clientBlended"    => $this->_clientBlended,
      "ip"               => $this->_ip,
      "city"             => $this->_city,
      "country"          => $this->_country,
      "state"            => $this->_state,
      "postal"           => $this->_postal,
      "timezone"         => $this->_timezone,
      "continent"        => $this->_continent,
      "affiliateFid"     => $this->_affiliateFid,
      "foundationFid"    => $this->_foundationFid,
      "affiliateType"    => $this->_affiliateType,
      "campaignHash"     => $this->_campaignHash,
      "campaignFid"      => $this->_campaignFid,
      "sid1"             => $this->_sid1,
      "sid2"             => $this->_sid2,
      "sid3"             => $this->_sid3,
      "customerFid"      => $this->_customerFid,
      "productFid"       => $this->_productFid,
      "priceFid"         => $this->_priceFid,
      "purchaseFid"      => $this->_purchaseFid,
      "currency"         => $this->_currency,
      "amount"           => $this->_amount,
    ];
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setActionTimestamp(?int $value)
  {
    $this->_actionTimestamp = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getActionTimestamp($default = null)
  {
    return $this->_actionTimestamp ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyFid(?string $value)
  {
    $this->_companyFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = $this->_companyFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSessionId(?string $value)
  {
    $this->_sessionId = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSessionId($default = null, $trim = true)
  {
    $value = $this->_sessionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAction(?string $value)
  {
    $this->_action = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAction($default = null, $trim = true)
  {
    $value = $this->_action ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguage(?string $value)
  {
    $this->_language = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = $this->_language ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguageSpecific(?string $value)
  {
    $this->_languageSpecific = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguageSpecific($default = null, $trim = true)
  {
    $value = $this->_languageSpecific ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOs(?string $value)
  {
    $this->_os = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOs($default = null, $trim = true)
  {
    $value = $this->_os ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOsVersion(?string $value)
  {
    $this->_osVersion = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOsVersion($default = null, $trim = true)
  {
    $value = $this->_osVersion ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOsBlended(?string $value)
  {
    $this->_osBlended = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOsBlended($default = null, $trim = true)
  {
    $value = $this->_osBlended ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPlatform(?string $value)
  {
    $this->_platform = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPlatform($default = null, $trim = true)
  {
    $value = $this->_platform ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDevice(?string $value)
  {
    $this->_device = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDevice($default = null, $trim = true)
  {
    $value = $this->_device ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClient(?string $value)
  {
    $this->_client = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClient($default = null, $trim = true)
  {
    $value = $this->_client ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientVersion(?string $value)
  {
    $this->_clientVersion = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClientVersion($default = null, $trim = true)
  {
    $value = $this->_clientVersion ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientBlended(?string $value)
  {
    $this->_clientBlended = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClientBlended($default = null, $trim = true)
  {
    $value = $this->_clientBlended ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setIp(?string $value)
  {
    $this->_ip = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIp($default = null, $trim = true)
  {
    $value = $this->_ip ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCity(?string $value)
  {
    $this->_city = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCity($default = null, $trim = true)
  {
    $value = $this->_city ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCountry(?string $value)
  {
    $this->_country = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = $this->_country ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setState(?string $value)
  {
    $this->_state = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getState($default = null, $trim = true)
  {
    $value = $this->_state ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPostal(?string $value)
  {
    $this->_postal = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPostal($default = null, $trim = true)
  {
    $value = $this->_postal ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTimezone(?string $value)
  {
    $this->_timezone = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTimezone($default = null, $trim = true)
  {
    $value = $this->_timezone ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContinent(?string $value)
  {
    $this->_continent = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContinent($default = null, $trim = true)
  {
    $value = $this->_continent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAffiliateFid(?string $value)
  {
    $this->_affiliateFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAffiliateFid($default = null, $trim = true)
  {
    $value = $this->_affiliateFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFoundationFid(?string $value)
  {
    $this->_foundationFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFoundationFid($default = null, $trim = true)
  {
    $value = $this->_foundationFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAffiliateType(?string $value)
  {
    $this->_affiliateType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAffiliateType($default = null, $trim = true)
  {
    $value = $this->_affiliateType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCampaignHash(?string $value)
  {
    $this->_campaignHash = $value;
    return $this;
  }

  /**
   * Advertiser Campaign to track this action to (if not already locked)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignHash($default = null, $trim = true)
  {
    $value = $this->_campaignHash ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCampaignFid(?string $value)
  {
    $this->_campaignFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignFid($default = null, $trim = true)
  {
    $value = $this->_campaignFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid1(?string $value)
  {
    $this->_sid1 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid1($default = null, $trim = true)
  {
    $value = $this->_sid1 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid2(?string $value)
  {
    $this->_sid2 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid2($default = null, $trim = true)
  {
    $value = $this->_sid2 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid3(?string $value)
  {
    $this->_sid3 = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid3($default = null, $trim = true)
  {
    $value = $this->_sid3 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCustomerFid(?string $value)
  {
    $this->_customerFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = $this->_customerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductFid(?string $value)
  {
    $this->_productFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = $this->_productFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceFid(?string $value)
  {
    $this->_priceFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = $this->_priceFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPurchaseFid(?string $value)
  {
    $this->_purchaseFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseFid($default = null, $trim = true)
  {
    $value = $this->_purchaseFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCurrency(?string $value)
  {
    $this->_currency = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrency($default = null, $trim = true)
  {
    $value = $this->_currency ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAmount(?string $value)
  {
    $this->_amount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAmount($default = null, $trim = true)
  {
    $value = $this->_amount ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

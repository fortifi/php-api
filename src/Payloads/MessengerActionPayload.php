<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class MessengerActionPayload
  implements \JsonSerializable
{
  protected $_deliveryFid;
  protected $_action;
  protected $_userAgent;
  protected $_language;
  protected $_encoding;
  protected $_clientIp;
  protected $_os;
  protected $_osVersion;
  protected $_osBlended;
  protected $_platform;
  protected $_device;
  protected $_client;
  protected $_clientVersion;
  protected $_clientBlended;
  protected $_referrer;
  protected $_companyFid;
  protected $_visitorId;
  protected $_amount;
  protected $_sourceType;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["deliveryFid"]))
    {
      $this->_deliveryFid = (string)$data["deliveryFid"];
    }
    if(isset($data["action"]))
    {
      $this->_action = (string)$data["action"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["encoding"]))
    {
      $this->_encoding = (string)$data["encoding"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = (string)$data["clientIp"];
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
    if(isset($data["referrer"]))
    {
      $this->_referrer = (string)$data["referrer"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = (string)$data["companyFid"];
    }
    if(isset($data["visitorId"]))
    {
      $this->_visitorId = (string)$data["visitorId"];
    }
    if(isset($data["amount"]))
    {
      $this->_amount = (float)$data["amount"];
    }
    if(isset($data["sourceType"]))
    {
      $this->_sourceType = (string)$data["sourceType"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "deliveryFid"   => $this->_deliveryFid,
      "action"        => $this->_action,
      "userAgent"     => $this->_userAgent,
      "language"      => $this->_language,
      "encoding"      => $this->_encoding,
      "clientIp"      => $this->_clientIp,
      "os"            => $this->_os,
      "osVersion"     => $this->_osVersion,
      "osBlended"     => $this->_osBlended,
      "platform"      => $this->_platform,
      "device"        => $this->_device,
      "client"        => $this->_client,
      "clientVersion" => $this->_clientVersion,
      "clientBlended" => $this->_clientBlended,
      "referrer"      => $this->_referrer,
      "companyFid"    => $this->_companyFid,
      "visitorId"     => $this->_visitorId,
      "amount"        => $this->_amount,
      "sourceType"    => $this->_sourceType,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDeliveryFid(?string $value)
  {
    $this->_deliveryFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDeliveryFid($default = null, $trim = true)
  {
    $value = $this->_deliveryFid ?: $default;
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
  public function setUserAgent(?string $value)
  {
    $this->_userAgent = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserAgent($default = null, $trim = true)
  {
    $value = $this->_userAgent ?: $default;
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
  public function setEncoding(?string $value)
  {
    $this->_encoding = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEncoding($default = null, $trim = true)
  {
    $value = $this->_encoding ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientIp(?string $value)
  {
    $this->_clientIp = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClientIp($default = null, $trim = true)
  {
    $value = $this->_clientIp ?: $default;
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
  public function setReferrer(?string $value)
  {
    $this->_referrer = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReferrer($default = null, $trim = true)
  {
    $value = $this->_referrer ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
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
  public function setVisitorId(?string $value)
  {
    $this->_visitorId = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVisitorId($default = null, $trim = true)
  {
    $value = $this->_visitorId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setAmount(?float $value)
  {
    $this->_amount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return $this->_amount ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSourceType(?string $value)
  {
    $this->_sourceType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSourceType($default = null, $trim = true)
  {
    $value = $this->_sourceType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

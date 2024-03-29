<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class PostActionPayload
  implements \JsonSerializable
{
  /**
   * Your unique transaction ID for this event e.g. Order ID
   */
  protected $_transactionId;
  /**
   * Your unique transaction ID for this event
   */
  protected $_transactionValue;
  /**
   * Coupon code used for the transaction
   */
  protected $_couponCode;
  /**
   * Setting to true will return advertiser pixels for this event

   */
  protected $_returnPixels = true;
  /**
   * Product Code linked to this action
   */
  protected $_productCode;
  /**
   * Product Term
   */
  protected $_productTerm;
  /**
   * Payment method used on this transaction
   */
  protected $_paymentMethod;
  /**
   * Username associated with this transaction (e.g. Join)
   */
  protected $_username;
  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   */
  protected $_userAgent;
  /**
   * Encoding from the visitors browser 'HTTP_ACCEPT_ENCODING'
   */
  protected $_encoding;
  /**
   * Language from visitors browser 'HTTP_ACCEPT_LANGUAGE'
   */
  protected $_language;
  /**
   * IP Address of the visitor
   */
  protected $_clientIp;
  /**
   * External (to Fortifi) Reference for this visitor e.g. a user ID
   */
  protected $_externalReference;
  /**
   * FID of a valid Brand
   * @required
   */
  protected $_brandFid;
  /**
   * Advertiser Campaign to track this action to (if not already locked)

   */
  protected $_campaignHash;
  /**
   * Advertised sub tracking ID 1
   */
  protected $_sid1;
  /**
   * Advertised sub tracking ID 2
   */
  protected $_sid2;
  /**
   * Advertised sub tracking ID 3
   */
  protected $_sid3;
  protected $_metaData;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_time;
  /**
   * If an existing device exists for the visitor, prefer that over the user agent sent in this payload
   */
  protected $_useExistingDeviceIfAvailable;
  /**
   * Specify a failover visitor ID to prevent organic traffic (Recommended to leave empty)
   */
  protected $_failoverVisitorId;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["transactionId"]))
    {
      $this->_transactionId = (string)$data["transactionId"];
    }
    if(isset($data["transactionValue"]))
    {
      $this->_transactionValue = (float)$data["transactionValue"];
    }
    if(isset($data["couponCode"]))
    {
      $this->_couponCode = (string)$data["couponCode"];
    }
    if(isset($data["returnPixels"]))
    {
      $this->_returnPixels = $data["returnPixels"];
    }
    if(isset($data["productCode"]))
    {
      $this->_productCode = (string)$data["productCode"];
    }
    if(isset($data["productTerm"]))
    {
      $this->_productTerm = (string)$data["productTerm"];
    }
    if(isset($data["paymentMethod"]))
    {
      $this->_paymentMethod = (string)$data["paymentMethod"];
    }
    if(isset($data["username"]))
    {
      $this->_username = (string)$data["username"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["encoding"]))
    {
      $this->_encoding = (string)$data["encoding"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = (string)$data["clientIp"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = (string)$data["externalReference"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = (string)$data["brandFid"];
    }
    if(isset($data["campaignHash"]))
    {
      $this->_campaignHash = (string)$data["campaignHash"];
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
    if(isset($data["metaData"]))
    {
      $this->_metaData = [];
      foreach($data["metaData"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_metaData[] = $dObj;
      }
    }
    if(isset($data["time"]))
    {
      $this->_time = (string)$data["time"];
    }
    if(isset($data["useExistingDeviceIfAvailable"]))
    {
      $this->_useExistingDeviceIfAvailable = $data["useExistingDeviceIfAvailable"];
    }
    if(isset($data["failoverVisitorId"]))
    {
      $this->_failoverVisitorId = (string)$data["failoverVisitorId"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "transactionId"                => $this->_transactionId,
      "transactionValue"             => $this->_transactionValue,
      "couponCode"                   => $this->_couponCode,
      "returnPixels"                 => $this->_returnPixels,
      "productCode"                  => $this->_productCode,
      "productTerm"                  => $this->_productTerm,
      "paymentMethod"                => $this->_paymentMethod,
      "username"                     => $this->_username,
      "userAgent"                    => $this->_userAgent,
      "encoding"                     => $this->_encoding,
      "language"                     => $this->_language,
      "clientIp"                     => $this->_clientIp,
      "externalReference"            => $this->_externalReference,
      "brandFid"                     => $this->_brandFid,
      "campaignHash"                 => $this->_campaignHash,
      "sid1"                         => $this->_sid1,
      "sid2"                         => $this->_sid2,
      "sid3"                         => $this->_sid3,
      "metaData"                     => $this->_metaData,
      "time"                         => $this->_time,
      "useExistingDeviceIfAvailable" => $this->_useExistingDeviceIfAvailable,
      "failoverVisitorId"            => $this->_failoverVisitorId,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTransactionId(?string $value)
  {
    $this->_transactionId = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for this event e.g. Order ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTransactionId($default = null, $trim = true)
  {
    $value = $this->_transactionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setTransactionValue(?float $value)
  {
    $this->_transactionValue = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for this event
   *
   * @param mixed $default
   *
   * @return float
   */
  public function getTransactionValue($default = null)
  {
    return $this->_transactionValue ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCouponCode(?string $value)
  {
    $this->_couponCode = $value;
    return $this;
  }

  /**
   * Coupon code used for the transaction
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCouponCode($default = null, $trim = true)
  {
    $value = $this->_couponCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setReturnPixels(?bool $value)
  {
    $this->_returnPixels = $value;
    return $this;
  }

  /**
   * Setting to true will return advertiser pixels for this event
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isReturnPixels($default = false)
  {
    return (bool)$this->_returnPixels ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductCode(?string $value)
  {
    $this->_productCode = $value;
    return $this;
  }

  /**
   * Product Code linked to this action
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductCode($default = null, $trim = true)
  {
    $value = $this->_productCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductTerm(?string $value)
  {
    $this->_productTerm = $value;
    return $this;
  }

  /**
   * Product Term
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductTerm($default = null, $trim = true)
  {
    $value = $this->_productTerm ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentMethod(?string $value)
  {
    $this->_paymentMethod = $value;
    return $this;
  }

  /**
   * Payment method used on this transaction
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethod($default = null, $trim = true)
  {
    $value = $this->_paymentMethod ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUsername(?string $value)
  {
    $this->_username = $value;
    return $this;
  }

  /**
   * Username associated with this transaction (e.g. Join)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUsername($default = null, $trim = true)
  {
    $value = $this->_username ?: $default;
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
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   *
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
  public function setEncoding(?string $value)
  {
    $this->_encoding = $value;
    return $this;
  }

  /**
   * Encoding from the visitors browser 'HTTP_ACCEPT_ENCODING'
   *
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
  public function setLanguage(?string $value)
  {
    $this->_language = $value;
    return $this;
  }

  /**
   * Language from visitors browser 'HTTP_ACCEPT_LANGUAGE'
   *
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
  public function setClientIp(?string $value)
  {
    $this->_clientIp = $value;
    return $this;
  }

  /**
   * IP Address of the visitor
   *
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
  public function setExternalReference(?string $value)
  {
    $this->_externalReference = $value;
    return $this;
  }

  /**
   * External (to Fortifi) Reference for this visitor e.g. a user ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalReference($default = null, $trim = true)
  {
    $value = $this->_externalReference ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid(?string $value)
  {
    $this->_brandFid = $value;
    return $this;
  }

  /**
   * FID of a valid Brand
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = $this->_brandFid ?: $default;
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
  public function setSid1(?string $value)
  {
    $this->_sid1 = $value;
    return $this;
  }

  /**
   * Advertised sub tracking ID 1
   *
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
   * Advertised sub tracking ID 2
   *
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
   * Advertised sub tracking ID 3
   *
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
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setMetaData(?array $value)
  {
    $this->_metaData = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addMetaDatum(KeyValuePayload $item)
  {
    $this->_metaData[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getMetaData($default = [])
  {
    return $this->_metaData ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTime(?string $value)
  {
    $this->_time = $value;
    return $this;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTime($default = null, $trim = true)
  {
    $value = $this->_time ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setUseExistingDeviceIfAvailable(?bool $value)
  {
    $this->_useExistingDeviceIfAvailable = $value;
    return $this;
  }

  /**
   * If an existing device exists for the visitor, prefer that over the user agent sent in this payload
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isUseExistingDeviceIfAvailable($default = false)
  {
    return (bool)$this->_useExistingDeviceIfAvailable ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFailoverVisitorId(?string $value)
  {
    $this->_failoverVisitorId = $value;
    return $this;
  }

  /**
   * Specify a failover visitor ID to prevent organic traffic (Recommended to leave empty)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFailoverVisitorId($default = null, $trim = true)
  {
    $value = $this->_failoverVisitorId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

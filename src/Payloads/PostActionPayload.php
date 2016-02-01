<?php
namespace Fortifi\Api\V1\Payloads;

use Fortifi\Api\V1\Requests\KeyValueRequest;

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
   * Company FID to track this event to
   * @required
   */
  protected $_companyFid;
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

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["transactionId"]))
    {
      $this->_transactionId = $data["transactionId"];
    }
    if(isset($data["transactionValue"]))
    {
      $this->_transactionValue = $data["transactionValue"];
    }
    if(isset($data["couponCode"]))
    {
      $this->_couponCode = $data["couponCode"];
    }
    if(isset($data["returnPixels"]))
    {
      $this->_returnPixels = $data["returnPixels"];
    }
    if(isset($data["productCode"]))
    {
      $this->_productCode = $data["productCode"];
    }
    if(isset($data["productTerm"]))
    {
      $this->_productTerm = $data["productTerm"];
    }
    if(isset($data["paymentMethod"]))
    {
      $this->_paymentMethod = $data["paymentMethod"];
    }
    if(isset($data["username"]))
    {
      $this->_username = $data["username"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = $data["userAgent"];
    }
    if(isset($data["encoding"]))
    {
      $this->_encoding = $data["encoding"];
    }
    if(isset($data["language"]))
    {
      $this->_language = $data["language"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = $data["clientIp"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = $data["externalReference"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = $data["companyFid"];
    }
    if(isset($data["campaignHash"]))
    {
      $this->_campaignHash = $data["campaignHash"];
    }
    if(isset($data["sid1"]))
    {
      $this->_sid1 = $data["sid1"];
    }
    if(isset($data["sid2"]))
    {
      $this->_sid2 = $data["sid2"];
    }
    if(isset($data["sid3"]))
    {
      $this->_sid3 = $data["sid3"];
    }
    if(isset($data["metaData"]))
    {
      $this->_metaData = $data["metaData"];
    }
    if(isset($data["time"]))
    {
      $this->_time = $data["time"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "transactionId"     => $this->_transactionId,
      "transactionValue"  => $this->_transactionValue,
      "couponCode"        => $this->_couponCode,
      "returnPixels"      => $this->_returnPixels,
      "productCode"       => $this->_productCode,
      "productTerm"       => $this->_productTerm,
      "paymentMethod"     => $this->_paymentMethod,
      "username"          => $this->_username,
      "userAgent"         => $this->_userAgent,
      "encoding"          => $this->_encoding,
      "language"          => $this->_language,
      "clientIp"          => $this->_clientIp,
      "externalReference" => $this->_externalReference,
      "companyFid"        => $this->_companyFid,
      "campaignHash"      => $this->_campaignHash,
      "sid1"              => $this->_sid1,
      "sid2"              => $this->_sid2,
      "sid3"              => $this->_sid3,
      "metaData"          => $this->_metaData,
      "time"              => $this->_time,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTransactionId($value)
  {
    $this->_transactionId = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for this event e.g. Order ID
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getTransactionId($default = null)
  {
    return $this->_transactionId ?: $default;
  }

  /**
   * @param integer $value
   *
   * @return $this
   */
  public function setTransactionValue($value)
  {
    $this->_transactionValue = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for this event
   *
   * @param mixed $default
   *
   * @return integer
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
  public function setCouponCode($value)
  {
    $this->_couponCode = $value;
    return $this;
  }

  /**
   * Coupon code used for the transaction
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getCouponCode($default = null)
  {
    return $this->_couponCode ?: $default;
  }

  /**
   * @param boolean $value
   *
   * @return $this
   */
  public function setReturnPixels($value)
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
    return $this->_returnPixels ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductCode($value)
  {
    $this->_productCode = $value;
    return $this;
  }

  /**
   * Product Code linked to this action
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getProductCode($default = null)
  {
    return $this->_productCode ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductTerm($value)
  {
    $this->_productTerm = $value;
    return $this;
  }

  /**
   * Product Term
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getProductTerm($default = null)
  {
    return $this->_productTerm ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentMethod($value)
  {
    $this->_paymentMethod = $value;
    return $this;
  }

  /**
   * Payment method used on this transaction
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getPaymentMethod($default = null)
  {
    return $this->_paymentMethod ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUsername($value)
  {
    $this->_username = $value;
    return $this;
  }

  /**
   * Username associated with this transaction (e.g. Join)
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getUsername($default = null)
  {
    return $this->_username ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserAgent($value)
  {
    $this->_userAgent = $value;
    return $this;
  }

  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getUserAgent($default = null)
  {
    return $this->_userAgent ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEncoding($value)
  {
    $this->_encoding = $value;
    return $this;
  }

  /**
   * Encoding from the visitors browser 'HTTP_ACCEPT_ENCODING'
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getEncoding($default = null)
  {
    return $this->_encoding ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguage($value)
  {
    $this->_language = $value;
    return $this;
  }

  /**
   * Language from visitors browser 'HTTP_ACCEPT_LANGUAGE'
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getLanguage($default = null)
  {
    return $this->_language ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientIp($value)
  {
    $this->_clientIp = $value;
    return $this;
  }

  /**
   * IP Address of the visitor
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getClientIp($default = null)
  {
    return $this->_clientIp ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalReference($value)
  {
    $this->_externalReference = $value;
    return $this;
  }

  /**
   * External (to Fortifi) Reference for this visitor e.g. a user ID
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getExternalReference($default = null)
  {
    return $this->_externalReference ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyFid($value)
  {
    $this->_companyFid = $value;
    return $this;
  }

  /**
   * Company FID to track this event to
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getCompanyFid($default = null)
  {
    return $this->_companyFid ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCampaignHash($value)
  {
    $this->_campaignHash = $value;
    return $this;
  }

  /**
   * Advertiser Campaign to track this action to (if not already locked)

   *
   * @param mixed $default
   *
   * @return string
   */
  public function getCampaignHash($default = null)
  {
    return $this->_campaignHash ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid1($value)
  {
    $this->_sid1 = $value;
    return $this;
  }

  /**
   * Advertised sub tracking ID 1
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getSid1($default = null)
  {
    return $this->_sid1 ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid2($value)
  {
    $this->_sid2 = $value;
    return $this;
  }

  /**
   * Advertised sub tracking ID 2
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getSid2($default = null)
  {
    return $this->_sid2 ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid3($value)
  {
    $this->_sid3 = $value;
    return $this;
  }

  /**
   * Advertised sub tracking ID 3
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getSid3($default = null)
  {
    return $this->_sid3 ?: $default;
  }

  /**
   * @param array $value
   *
   * @return $this
   */
  public function setMetaData(array $value)
  {
    $this->_metaData = $value;
    return $this;
  }

  /**
   * @param $item
   *
   * @return $this
   */
  public function addMetaData($item)
  {
    $this->_metaData[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValueRequest[]
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
  public function setTime($value)
  {
    $this->_time = $value;
    return $this;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getTime($default = null)
  {
    return $this->_time ?: $default;
  }
}

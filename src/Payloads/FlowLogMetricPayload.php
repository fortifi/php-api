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
  protected $_action;
  /**
   * @required
   */
  protected $_sessionId;
  /**
   * Customer FID linked to this action
   */
  protected $_customerFid;
  protected $_purchaseFid;
  protected $_amount;
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
   * FID of a valid Brand
   */
  protected $_brandFid;
  /**
   * Advertiser Campaign to track this action to (if not already locked)

   */
  protected $_campaignHash;
  /**
   * Advertiser sub tracking ID 1
   */
  protected $_sid1;
  /**
   * Advertiser sub tracking ID 2
   */
  protected $_sid2;
  /**
   * Advertiser sub tracking ID 3
   */
  protected $_sid3;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["actionTimestamp"]))
    {
      $this->_actionTimestamp = (int)$data["actionTimestamp"];
    }
    if(isset($data["action"]))
    {
      $this->_action = (string)$data["action"];
    }
    if(isset($data["sessionId"]))
    {
      $this->_sessionId = (string)$data["sessionId"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["purchaseFid"]))
    {
      $this->_purchaseFid = (string)$data["purchaseFid"];
    }
    if(isset($data["amount"]))
    {
      $this->_amount = (string)$data["amount"];
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
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "actionTimestamp" => $this->_actionTimestamp,
      "action"          => $this->_action,
      "sessionId"       => $this->_sessionId,
      "customerFid"     => $this->_customerFid,
      "purchaseFid"     => $this->_purchaseFid,
      "amount"          => $this->_amount,
      "userAgent"       => $this->_userAgent,
      "encoding"        => $this->_encoding,
      "language"        => $this->_language,
      "clientIp"        => $this->_clientIp,
      "brandFid"        => $this->_brandFid,
      "campaignHash"    => $this->_campaignHash,
      "sid1"            => $this->_sid1,
      "sid2"            => $this->_sid2,
      "sid3"            => $this->_sid3,
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
  public function setCustomerFid(?string $value)
  {
    $this->_customerFid = $value;
    return $this;
  }

  /**
   * Customer FID linked to this action
   *
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
   * Advertiser sub tracking ID 1
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
   * Advertiser sub tracking ID 2
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
   * Advertiser sub tracking ID 3
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
}

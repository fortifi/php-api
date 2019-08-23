<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateOrderPayload
  implements \JsonSerializable
{
  /**
   * FID for the payment account you wish to charge the customer through
   */
  protected $_paymentAccountFid;
  /**
   * FID of a valid Brand
   */
  protected $_brandFid;
  /**
   * FID for the customer placing the order
   */
  protected $_customerFid;
  /**
   * IP Address of the visitor
   */
  protected $_clientIp;
  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   */
  protected $_userAgent;
  /**
   * Order Type (Must be initial to Auth Cards)
   */
  protected $_type;
  /**
   * Product price FIDs to add
   */
  protected $_productPriceFids;
  /**
   * Offer FIDs to apply to the order
   */
  protected $_offerFids;
  /**
   * Charge ID provided by ChargeHive.com
   */
  protected $_chargeId;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["paymentAccountFid"]))
    {
      $this->_paymentAccountFid = (string)$data["paymentAccountFid"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = (string)$data["brandFid"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = (string)$data["clientIp"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["type"]))
    {
      $this->_type = (string)$data["type"];
    }
    if(isset($data["productPriceFids"]))
    {
      $this->_productPriceFids = $data["productPriceFids"];
    }
    if(isset($data["offerFids"]))
    {
      $this->_offerFids = $data["offerFids"];
    }
    if(isset($data["chargeId"]))
    {
      $this->_chargeId = (string)$data["chargeId"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "paymentAccountFid" => $this->_paymentAccountFid,
      "brandFid"          => $this->_brandFid,
      "customerFid"       => $this->_customerFid,
      "clientIp"          => $this->_clientIp,
      "userAgent"         => $this->_userAgent,
      "type"              => $this->_type,
      "productPriceFids"  => $this->_productPriceFids,
      "offerFids"         => $this->_offerFids,
      "chargeId"          => $this->_chargeId,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentAccountFid($value)
  {
    $this->_paymentAccountFid = $value;
    return $this;
  }

  /**
   * FID for the payment account you wish to charge the customer through
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null, $trim = true)
  {
    $value = $this->_paymentAccountFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid($value)
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
  public function setCustomerFid($value)
  {
    $this->_customerFid = $value;
    return $this;
  }

  /**
   * FID for the customer placing the order
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
  public function setClientIp($value)
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
  public function setUserAgent($value)
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
  public function setType($value)
  {
    $this->_type = $value;
    return $this;
  }

  /**
   * Order Type (Must be initial to Auth Cards)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getType($default = null, $trim = true)
  {
    $value = $this->_type ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param array $value
   *
   * @return $this
   */
  public function setProductPriceFids(array $value)
  {
    $this->_productPriceFids = $value;
    return $this;
  }

  /**
   * @param $item
   *
   * @return $this
   */
  public function addProductPriceFid($item)
  {
    $this->_productPriceFids[] = $item;
    return $this;
  }

  /**
   * Product price FIDs to add
   *
   * @param mixed $default
   *
   * @return string[]
   */
  public function getProductPriceFids($default = [])
  {
    return $this->_productPriceFids ?: $default;
  }

  /**
   * @param array $value
   *
   * @return $this
   */
  public function setOfferFids(array $value)
  {
    $this->_offerFids = $value;
    return $this;
  }

  /**
   * @param $item
   *
   * @return $this
   */
  public function addOfferFid($item)
  {
    $this->_offerFids[] = $item;
    return $this;
  }

  /**
   * Offer FIDs to apply to the order
   *
   * @param mixed $default
   *
   * @return string[]
   */
  public function getOfferFids($default = [])
  {
    return $this->_offerFids ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setChargeId($value)
  {
    $this->_chargeId = $value;
    return $this;
  }

  /**
   * Charge ID provided by ChargeHive.com
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getChargeId($default = null, $trim = true)
  {
    $value = $this->_chargeId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

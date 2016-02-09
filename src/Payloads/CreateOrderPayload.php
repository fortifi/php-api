<?php
namespace Fortifi\Api\V1\Payloads;

class CreateOrderPayload
  implements \JsonSerializable
{
  /**
   * FID for the payment account you wish to charge the customer through
   */
  protected $_paymentAccountFid;
  /**
   * Company FID to track this event to
   */
  protected $_companyFid;
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
   * Product price FIDs to add
   */
  protected $_productPriceFids;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["paymentAccountFid"]))
    {
      $this->_paymentAccountFid = $data["paymentAccountFid"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = $data["companyFid"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = $data["customerFid"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = $data["clientIp"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = $data["userAgent"];
    }
    if(isset($data["productPriceFids"]))
    {
      $this->_productPriceFids = $data["productPriceFids"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "paymentAccountFid" => $this->_paymentAccountFid,
      "companyFid"        => $this->_companyFid,
      "customerFid"       => $this->_customerFid,
      "clientIp"          => $this->_clientIp,
      "userAgent"         => $this->_userAgent,
      "productPriceFids"  => $this->_productPriceFids,
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
    return $trim ? trim($value) : $value;
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = $this->_companyFid ?: $default;
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
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
}

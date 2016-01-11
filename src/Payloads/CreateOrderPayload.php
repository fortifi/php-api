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
  protected $_products;

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
    if(isset($data["products"]))
    {
      $this->_products = $data["products"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "paymentAccountFid" => $this->_paymentAccountFid,
      "companyFid" => $this->_companyFid,
      "customerFid" => $this->_customerFid,
      "clientIp" => $this->_clientIp,
      "userAgent" => $this->_userAgent,
      "products" => $this->_products,
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
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null)
  {
    return $this->_paymentAccountFid ?: $default;
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
  public function setCustomerFid($value)
  {
    $this->_customerFid = $value;
    return $this;
  }

  /**
   * FID for the customer placing the order
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getCustomerFid($default = null)
  {
    return $this->_customerFid ?: $default;
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
   * @param OrderProductPayload[] $value
   *
   * @return $this
   */
  public function setProducts(array $value)
  {
    $this->_products = $value;
    return $this;
  }

  /**
   * @param OrderProductPayload $item
   * 
   * @return $this
   */
  public function addProduct(OrderProductPayload $item)
  {
    $this->_products[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return OrderProductPayload[]
   */
  public function getProducts($default = [])
  {
    return $this->_products ?: $default;
  }
}
      

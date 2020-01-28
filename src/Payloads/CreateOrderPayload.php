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
  protected $_products;
  /**
   * Offer FIDs to apply to the order
   */
  protected $_offerFids;
  /**
   * Charge ID provided by ChargeHive.com
   */
  protected $_chargeId;
  /**
   * Reference for this order
   */
  protected $_externalReference;

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
    if(isset($data["products"]))
    {
      $this->_products = [];
      foreach($data["products"] as $dItem)
      {
        $dObj = new OrderProductPayload();
        $dObj->hydrate($dItem);
        $this->_products[] = $dObj;
      }
    }
    if(isset($data["offerFids"]))
    {
      $this->_offerFids = $data["offerFids"];
    }
    if(isset($data["chargeId"]))
    {
      $this->_chargeId = (string)$data["chargeId"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = (string)$data["externalReference"];
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
      "products"          => $this->_products,
      "offerFids"         => $this->_offerFids,
      "chargeId"          => $this->_chargeId,
      "externalReference" => $this->_externalReference,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentAccountFid(?string $value)
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
  public function setCustomerFid(?string $value)
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
  public function setType(?string $value)
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
   * @param string[] $value
   *
   * @return $this
   */
  public function setProductPriceFids(?array $value)
  {
    $this->_productPriceFids = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addProductPriceFid(string $item)
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
   * @param OrderProductPayload[] $value
   *
   * @return $this
   */
  public function setProducts(?array $value)
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

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setOfferFids(?array $value)
  {
    $this->_offerFids = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addOfferFid(string $item)
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
  public function setChargeId(?string $value)
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
   * Reference for this order
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
}

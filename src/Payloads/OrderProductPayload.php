<?php
namespace Fortifi\Api\V1\Payloads;

use Fortifi\Api\V1\Requests\KeyValueRequest;

class OrderProductPayload
  implements \JsonSerializable
{
  /**
   * Product price FID to add
   */
  protected $_productPriceFid;
  /**
   * Offer FID to apply
   */
  protected $_offerFid;
  /**
   * Coupon Code for the Offer
   */
  protected $_couponCode;
  /**
   * Product configuration
   */
  protected $_configuration;
  /**
   * Term FID
   */
  protected $_termFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productPriceFid"]))
    {
      $this->_productPriceFid = $data["productPriceFid"];
    }
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = $data["offerFid"];
    }
    if(isset($data["couponCode"]))
    {
      $this->_couponCode = $data["couponCode"];
    }
    if(isset($data["configuration"]))
    {
      $this->_configuration = $data["configuration"];
    }
    if(isset($data["termFid"]))
    {
      $this->_termFid = $data["termFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "productPriceFid" => $this->_productPriceFid,
      "offerFid" => $this->_offerFid,
      "couponCode" => $this->_couponCode,
      "configuration" => $this->_configuration,
      "termFid" => $this->_termFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductPriceFid($value)
  {
    $this->_productPriceFid = $value;
    return $this;
  }

  /**
   * Product price FID to add
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getProductPriceFid($default = null)
  {
    return $this->_productPriceFid ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid($value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * Offer FID to apply
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getOfferFid($default = null)
  {
    return $this->_offerFid ?: $default;
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
   * Coupon Code for the Offer
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
   * @param array $value
   *
   * @return $this
   */
  public function setConfiguration(array $value)
  {
    $this->_configuration = $value;
    return $this;
  }

  /**
   * @param $item
   * 
   * @return $this
   */
  public function addConfiguration($item)
  {
    $this->_configuration[] = $item;
    return $this;
  }

  /**
   * Product configuration
   * 
   * @param mixed $default
   *
   * @return KeyValueRequest[]
   */
  public function getConfiguration($default = [])
  {
    return $this->_configuration ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTermFid($value)
  {
    $this->_termFid = $value;
    return $this;
  }

  /**
   * Term FID
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getTermFid($default = null)
  {
    return $this->_termFid ?: $default;
  }
}
      

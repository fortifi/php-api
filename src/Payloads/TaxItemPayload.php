<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TaxItemPayload
  implements \JsonSerializable
{
  protected $_productFid;
  protected $_priceFid;
  protected $_offerFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productFid"]))
    {
      $this->_productFid = (string)$data["productFid"];
    }
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = (string)$data["offerFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "productFid" => $this->_productFid,
      "priceFid"   => $this->_priceFid,
      "offerFid"   => $this->_offerFid,
    ];
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
    $value = $this->_productFid ?? $default;
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
    $value = $this->_priceFid ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid(?string $value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = $this->_offerFid ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}

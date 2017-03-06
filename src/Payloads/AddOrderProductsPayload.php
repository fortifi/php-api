<?php
namespace Fortifi\Api\V1\Payloads;

use Packaged\Helpers\Strings;
use Fortifi\Api\V1\Requests\OrderProductQuantityRequest;

class AddOrderProductsPayload
  implements \JsonSerializable
{
  /**
   * Product price FIDs to add
   */
  protected $_productPriceFids;
  /**
   * Products to add with specified quantity
   */
  protected $_quantityProductPriceFids;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productPriceFids"]))
    {
      $this->_productPriceFids = $data["productPriceFids"];
    }
    if(isset($data["quantityProductPriceFids"]))
    {
      $this->_quantityProductPriceFids = $data["quantityProductPriceFids"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "productPriceFids"         => $this->_productPriceFids,
      "quantityProductPriceFids" => $this->_quantityProductPriceFids,
    ];
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
  public function setQuantityProductPriceFids(array $value)
  {
    $this->_quantityProductPriceFids = $value;
    return $this;
  }

  /**
   * @param OrderProductQuantityRequest $item
   *
   * @return $this
   */
  public function addQuantityProductPriceFid(OrderProductQuantityRequest $item)
  {
    $this->_quantityProductPriceFids[] = $item;
    return $this;
  }

  /**
   * Products to add with specified quantity
   *
   * @param mixed $default
   *
   * @return OrderProductQuantityRequest[]
   */
  public function getQuantityProductPriceFids($default = [])
  {
    return $this->_quantityProductPriceFids ?: $default;
  }
}

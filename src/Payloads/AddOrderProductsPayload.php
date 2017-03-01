<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class AddOrderProductsPayload
  implements \JsonSerializable
{
  /**
   * Product price FIDs to add
   */
  protected $_productPriceFids;
  /**
   * Quantity of products to add, keyed by priceFid
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
   * @param $item
   *
   * @return $this
   */
  public function addQuantityProductPriceFid($item)
  {
    $this->_quantityProductPriceFids[] = $item;
    return $this;
  }

  /**
   * Quantity of products to add, keyed by priceFid
   *
   * @param mixed $default
   *
   * @return number[]
   */
  public function getQuantityProductPriceFids($default = [])
  {
    return $this->_quantityProductPriceFids ?: $default;
  }
}

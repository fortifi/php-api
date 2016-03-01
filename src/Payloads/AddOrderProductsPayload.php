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

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productPriceFids"]))
    {
      $this->_productPriceFids = $data["productPriceFids"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "productPriceFids" => $this->_productPriceFids,
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
}

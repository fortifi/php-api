<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrderProductsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "products" => $this->getProducts(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return OrderProductRequest[]
   */
  public function getProducts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'products', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->products))
    {
      foreach($return->products as $itmKey => $itm)
      {
        $return->products[$itmKey] = (new OrderProductRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

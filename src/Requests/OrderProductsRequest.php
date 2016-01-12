<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class OrderProductsRequest
  extends ApiRequest
  implements \JsonSerializable
{

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
       $tmp = [];
       foreach($return->products as $itm)
       {
         $tmp[] = (new OrderProductRequest())->hydrate($itm);
       }
       $return->products = $tmp;
    }

    return $return;
  }
}

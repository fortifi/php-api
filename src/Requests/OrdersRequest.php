<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrdersRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "orders" => $this->getOrders(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return OrderRequest[]
   */
  public function getOrders($default = [])
  {
    return Objects::property($this->_getResultJson(), 'orders', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->orders))
    {
      foreach($return->orders as $itmKey => $itm)
      {
        $return->orders[$itmKey] = (new OrderRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrderAddProductsRequest
  extends OrderProductsRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "order" => $this->getOrder(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return OrderRequest
   */
  public function getOrder($default = null)
  {
    return Objects::property($this->_getResultJson(), 'order', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->order))
    {
      $return->order = (new OrderRequest())
        ->hydrate($return->order);
    }

    return $return;
  }
}

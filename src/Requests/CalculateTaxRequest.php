<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CalculateTaxRequest
  extends TaxItemRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "items" => $this->getItems(),
        "totalPrice" => $this->getTotalPrice(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return TaxItemBreakdownRequest[]
   */
  public function getItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'items', $default);
  }

  /**
   * @param mixed $default
   *
   * @return TotalPriceRequest
   */
  public function getTotalPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalPrice', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->items))
    {
      foreach($return->items as $itmKey => $itm)
      {
        $return->items[$itmKey] = (new TaxItemBreakdownRequest())
          ->hydrate($itm);
      }
    }

    if(!empty($return->totalPrice))
    {
      $return->totalPrice = (new TotalPriceRequest())
        ->hydrate($return->totalPrice);
    }

    return $return;
  }
}

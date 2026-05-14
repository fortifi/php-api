<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TaxItemBreakdownRequest
  extends TaxItemRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "basePrice" => $this->getBasePrice(),
        "offerPrice" => $this->getOfferPrice(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return BasePriceRequest
   */
  public function getBasePrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'basePrice', $default);
  }

  /**
   * @param mixed $default
   *
   * @return OfferPriceRequest
   */
  public function getOfferPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'offerPrice', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->basePrice))
    {
      $return->basePrice = (new BasePriceRequest())
        ->hydrate($return->basePrice);
    }

    if(!empty($return->offerPrice))
    {
      $return->offerPrice = (new OfferPriceRequest())
        ->hydrate($return->offerPrice);
    }

    return $return;
  }
}

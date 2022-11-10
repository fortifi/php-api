<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductPriceBandsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "pricebands" => $this->getPricebands(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ProductPriceBandRequest[]
   */
  public function getPricebands($default = [])
  {
    return Objects::property($this->_getResultJson(), 'pricebands', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->pricebands))
    {
      foreach($return->pricebands as $itmKey => $itm)
      {
        $return->pricebands[$itmKey] = (new ProductPriceBandRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

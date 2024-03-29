<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductPricesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "prices" => $this->getPrices(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ProductPriceRequest[]
   */
  public function getPrices($default = [])
  {
    return Objects::property($this->_getResultJson(), 'prices', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->prices))
    {
      foreach($return->prices as $itmKey => $itm)
      {
        $return->prices[$itmKey] = (new ProductPriceRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

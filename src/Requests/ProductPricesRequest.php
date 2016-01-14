<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class ProductPricesRequest
  extends ApiRequest
  implements \JsonSerializable
{

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
       $tmp = [];
       foreach($return->prices as $itm)
       {
         $tmp[] = (new ProductPriceRequest())->hydrate($itm);
       }
       $return->prices = $tmp;
    }

    return $return;
  }
}

<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductOffersRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "offers" => $this->getOffers(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ProductOfferRequest[]
   */
  public function getOffers($default = [])
  {
    return Objects::property($this->_getResultJson(), 'offers', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->offers))
    {
      foreach($return->offers as $itmKey => $itm)
      {
        $return->offers[$itemKey] = (new ProductOfferRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}

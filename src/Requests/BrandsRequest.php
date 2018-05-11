<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class BrandsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "brands" => $this->getBrands(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return BrandRequest[]
   */
  public function getBrands($default = [])
  {
    return Objects::property($this->_getResultJson(), 'brands', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->brands))
    {
      $tmp = [];
      foreach($return->brands as $itm)
      {
        $tmp[] = (new BrandRequest())
          ->hydrate($itm);
      }
      $return->brands = $tmp;
    }

    return $return;
  }
}

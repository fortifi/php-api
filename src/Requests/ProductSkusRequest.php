<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductSkusRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "skus" => $this->getSkus(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ProductSkuRequest[]
   */
  public function getSkus($default = [])
  {
    return Objects::property($this->_getResultJson(), 'skus', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->skus))
    {
      foreach($return->skus as $itmKey => $itm)
      {
        $return->skus[$itmKey] = (new ProductSkuRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
